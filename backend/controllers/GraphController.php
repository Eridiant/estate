<?php

namespace backend\controllers;

use Yii;
use backend\models\Graph;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GraphController implements the CRUD actions for Graph model.
 */
class GraphController extends Controller
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
     * Lists all Graph models.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (Yii::$app->request->isPost) {
            $postData = Yii::$app->request->post();
            // var_dump('<pre>');
            // var_dump($postData);
            // var_dump('</pre>');
            // die;

            foreach ($postData["Graph"] as $data) {
                // var_dump('<pre>');
                // var_dump($data['id']);
                // var_dump('</pre>');
                // continue;
                $graph = Graph::findOne($data['id']);
                if ($graph) {
                    $graph->data = $data['data'];
                    $graph->cost = $data['cost'];
                    if (!$graph->save()) {
                        var_dump('<pre>');
                        var_dump($graph->errors);
                        var_dump('</pre>');
                        die;
                    }
                }
            }
        }

        $model = Graph::find()->all();
        return $this->render('index', compact('model'));
    }

    /**
     * Displays a single Graph model.
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
     * Creates a new Graph model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        if ($this->request->isPost) {
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

            $model = new Graph();
            $model->save();

            return $this->renderPartial('_group', compact('model'));
        }

    }

    /**
     * Updates an existing Graph model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Graph model.
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
     * Finds the Graph model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Graph the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Graph::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
