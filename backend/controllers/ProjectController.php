<?php

namespace backend\controllers;

use Yii;
use backend\models\Project;
use backend\models\Gallery;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProjectController implements the CRUD actions for Project model.
 */
class ProjectController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::class,
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Project models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Project::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Project model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Project model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Project();
        if ($this->request->isPost) {

            if ($model->load($this->request->post())) {
                $imageFile = UploadedFile::getInstance($model, 'img');
                $model->upload($imageFile);
                if (!$model->save()) {
                    var_dump('<pre>');
                    var_dump($model->errors);
                    var_dump('</pre>');
                    die;
                    
                }
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', compact('model'));
    }

    public function actionPrg()
    {
        return;
        // HTML content
        $html = '
        ';

        // Create a DOMDocument object and load the HTML
        // $dom = new DOMDocument();
        // $dom->loadHTML($html);

        // // Create a DOMXPath object
        // $xpath = new DOMXPath($dom);

        // // Get all the swiper-slide destination divs
        // $slideDivs = $xpath->query('//div[@class="swiper-slide destination"]');

        // // Loop through each slide div
        // foreach ($slideDivs as $slideDiv) {
            // Extract the desired tag values using XPath queries
            // $subtitle = $xpath->query('.//p[@class="subtitle dn"]', $slideDiv)->item(0)->nodeValue;
            // $caption = $xpath->query('.//p[@class="caption"]', $slideDiv)->item(0)->nodeValue;
            // $languages = $xpath->query('.//p[contains(text(), "Языки:")]/following-sibling::p[1]', $slideDiv)->item(0)->nodeValue;
            // $phone_number = $xpath->query('.//a[starts-with(@href, "tel:")]/text()', $slideDiv)->item(0)->nodeValue;
            // $telegram_link = $xpath->query('.//a[starts-with(@href, "https://telegram.me/")]/@href', $slideDiv)->item(0)->nodeValue;
            // $viber_link = $xpath->query('.//a[starts-with(@href, "https://wa.me/")]/@href', $slideDiv)->item(0)->nodeValue;
            // var_dump('<pre>');
            // var_dump($subtitle);
            // var_dump('</pre>');
            // die;
            
        // }

    }

    /**
     * Updates an existing Project model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $gallery = new Gallery();
        $oldImage = $model->img;

        if ($this->request->isPost && $model->load($this->request->post())) {
            $imageFile = UploadedFile::getInstance($model, 'img');

            if ($imageFile) {
                $model->upload($imageFile);
            }

            if (!$model->save()) {
                var_dump('<pre>');
                var_dump($model->errors);
                var_dump('</pre>');
                die;
                
            }
            if ($oldImage !== null) {
                $model->deleteOldFile($oldImage);
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'gallery' => $gallery,
        ]);
    }

    /**
     * Deletes an existing Project model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Project model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Project the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Project::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
