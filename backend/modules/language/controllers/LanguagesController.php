<?php


namespace backend\modules\language\controllers;

use backend\modules\language\models\Language;
use backend\modules\language\models\Trasnlations;
use backend\modules\language\models\TrasnlationsMessage;
use backend\modules\language\models\TrasnlationsSearch;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class LanguagesController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['get'],
                ],
            ],
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ],

                ],
            ],
        ];
    }

    public function actionActive()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Language::find()->where(['IS', 'deleted_at', null]),
        ]);
        $searchModel = new TrasnlationsSearch();
        
        // $dataProvider2 = $searchModel->search($this->request->queryParams);
        $dataProvider2 = new ActiveDataProvider([
            'query' => Trasnlations::find(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'dataProvider2' => $dataProvider2,
            'searchModel' => $searchModel,
        ]);
    }

    public function actionChange($id)
    {
        $new_lang = Language::find()->where('id = :id', [':id' => $id])->one();
        if($new_lang === null)
        {
            return $this->goBack();
        }
        $old_lang = Language::find()->where('id = :id', [':id' => Language::getCurrent()->id])->one();
        $old_lang->default = 0;
        $new_lang->default = 1;
        $transaction = Yii::$app->db->beginTransaction();
        if($new_lang->save() && $old_lang->save())
        {
            $transaction->commit();
            Yii::$app->session->setFlash('success', 'Lang successfully changed.');
            return $this->redirect(Yii::$app->request->referrer);
        }
        else{
            $transaction->rollback();
            Yii::$app->session->setFlash('error', 'Changes were not saved, error.');
            return $this->redirect(Yii::$app->request->referrer);
        }
    }

    public function actionCreate()
    {
        $language = new Language();
        if($language->load(Yii::$app->request->post()))
        {
            $language->created_at = time();
            $language->updated_at = time();
            if($language->save())
            {
                Yii::$app->session->setFlash('success', 'Language successfully added.');
                return $this->redirect(['index']);
            }
        }

        return $this->render('create', [
            'model' => $language,
        ]);
    }

    public function actionDelete($id)
    {
        $language = Language::findOne($id);
        $languages = Language::find()->where(['IS', 'deleted_at', null])->all();
        if(count($languages) < 2)
        {
            Yii::$app->session->setFlash('warning', 'Unable to delete the last language.');
            return $this->redirect(['active']);
        }
        if($language->default > 0)
        {
            Yii::$app->session->setFlash('warning', 'This language is installed as a system language.');
            return $this->redirect(['active']);
        }
        $language->deleted_at = time();
        $language->date_update = time();
        if($language->save())
        {
            Yii::$app->cache->flush();
            Yii::$app->session->setFlash('success', 'Language successfully deleted.');
            return $this->redirect(['active']);
        }
    }

    public function actionUpdate($id)
    {
        $language = Language::findOne($id);
        if($language->load(Yii::$app->request->post()))
        {
            $language->updated_at = time();
            if($language->save())
            {
                Yii::$app->session->setFlash('success', 'Language successfully updated.');
                return $this->redirect(['active']);
            }
        }
        return $this->render('update', [
            'model' => $language,
        ]);
    }

    public function actionView($id)
    {
        $language = Language::findOne($id);
        return $this->render('view', [
            'language' => $language,
        ]);
    }

    public function actionDeleted()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Language::find()->where(['IS NOT', 'deleted_at', null]),
        ]);
        return $this->render('deleted', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionRestore($id)
    {
        $language = Language::findOne($id);
        $language->deleted_at = null;
        if($language->save())
        {
            Yii::$app->cache->flush();
            Yii::$app->session->setFlash('success', 'Language successfully restored.');
            return $this->redirect(['languages/active']);
        }
    }

    public function actionTranslationDelete($id)
    {
        $translation = Trasnlations::findOne($id);
        $translation->delete();
        Yii::$app->cache->flush();
        Yii::$app->session->setFlash('success', 'Translation successfully deleted.');
        return $this->redirect(['active']);
    }

    public function actionTranslationUpdate($id)
    {
        $translation = Trasnlations::findOne((int)$id);
        $model = $translation->translait;
        if(!$model)  {
            $model = new TrasnlationsMessage();
            $model->id = $translation->id;
            $model->language = \Yii::$app->language;
        }
        if($model->load(Yii::$app->request->post()))
        {
            if($model->save())
            {
                Yii::$app->cache->flush();
                Yii::$app->session->setFlash('success', 'Translation successfully updated.');
                return $this->redirect(['active']);
            }
        }
        
        return $this->render('update-translation', [
            'model' => $model,
            'translation' => $translation
        ]);
    }

    public function actionCreateTranslation()
    {
        $translation = new Trasnlations();
        if($translation->load(Yii::$app->request->post()))
        {
            if($translation->save())
            {
                Yii::$app->cache->flush();
                Yii::$app->session->setFlash('success', 'Translation successfully created.');
                return $this->redirect(['active']);
            }
        }
        return $this->render('create-translation', [
            'model' => $translation,
        ]);
    }

    public function actionUpdateBd() {
        $language = Language::find()->select('key')->limit(1)->one();
        $i = 0;
            $country = explode('-', $language->key)[0];
            foreach(['frontend', 'common', 'backend'] as $dir) {
                if(file_exists(dirname(__DIR__).'/../vendor/yiisoft/yii2/messages/'.$country.'/'.$dir.'.php')) :
                    $str = require dirname(__DIR__).'/../vendor/yiisoft/yii2/messages/'.$country.'/'.$dir.'.php';
                    
                    foreach ($str as $key => $value) {
                        if(Trasnlations::find()->where(['category'=>$dir, 'message'=>$key])->limit(1)->one()) {
                            continue;
                        }
                        $model = new Trasnlations();
                        $model->category = $dir;
                        $model->message  = $key;
                        if( $model->save() ){
                            $i++;
                        }
                    }
                endif;
            }
        Yii::$app->session->setFlash('info', 'Обновленно '.$i.' строк.');
        return $this->redirect(['active']);
    }
}