<?php

namespace backend\controllers;

use Yii;
use backend\models\District;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;

/**
 * DistrictController implements the CRUD actions for District model.
 */
class DistrictController extends Controller
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
     * Lists all District models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => District::find(),
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
     * Displays a single District model.
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
     * Creates a new District model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new District();

        if ($this->request->isPost && $model->load($this->request->post())) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->imageFile) {
                $model->upload();
            }

            $model->galleryFiles = UploadedFile::getInstances($model, 'galleryFiles');

            if (!$model->save()) {
                var_dump('<pre>');
                var_dump($model->errors);
                var_dump('</pre>');
                die;
            }

            if ($model->galleryFiles) {
                $model->galleryUpload();
            }

            if (!$model->save()) {
                var_dump('<pre>');
                var_dump($model->errors);
                var_dump('</pre>');
                die;
            }

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing District model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post())) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->imageFile) {
                $model->upload();
            }

            $model->galleryFiles = UploadedFile::getInstances($model, 'galleryFiles');

            if ($model->galleryFiles) {
                $model->galleryUpload();
            } elseif ($model->deleteFiles) {
                $model->deleteOldGalleryFile();
            }

            if (!$model->save()) {
                var_dump('<pre>');
                var_dump($model->errors);
                var_dump('</pre>');
                die;
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        $gallery = [];

        try {
            $num = $model->id;
            $folderPath = Yii::getAlias( '@frontend' ) . '/web/uploads/district/' . $num . '/';
            // $folderPath = Yii::getAlias( '@frontend' ) . "/web/images/upload/{$num}/";
            // $folderPath = 'home';
            // $folderPath = '/images/upload/1';
            $pattern = '/.*\/images/';
            foreach (FileHelper::findFiles($folderPath,['only'=>['*.jpg','*.png','*.jpeg'], 'filter' => function($path){return basename($path);}]) as $string) {
                $gallery[] = $string;
                // $gallery[] = preg_replace($pattern, '/images', $string);
            }
            $gallery = array_map(function($path){return basename($path);},$gallery);
        } catch (\Throwable $th) {
            // return false;
        }

        return $this->render('update', compact('model', 'gallery'));
    }

    /**
     * Deletes an existing District model.
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
     * Finds the District model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return District the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = District::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
