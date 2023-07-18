<?php

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\helpers\FileHelper;
use yii\helpers\BaseFileHelper;
use frontend\models\Project;
use frontend\models\Key;
use frontend\models\Option;
// use \dotzero\amocrm\AmoCRM\Client;
// use \dotzero\amocrm\AmoCRM\Client as AmoCRM;
// use dotzero\AmoCRM\Client as AmoCRM;
use \AmoCRM\Client;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
            'set-locale' => [
                'class' => 'common\actions\SetLocaleAction',
                'locales'=> \yii\helpers\ArrayHelper::getColumn(\backend\modules\language\models\Language::find()->select('key')->asArray()->all(), 'key'),
            ]
        ];
    }

    // public function actionAmoDda()
    private function Amo()
    {
        $key = Key::find()->where(['id' => 1])->one();
        // Создание клиента
        $subdomain = $key->key;            // Поддомен в амо срм
        $login     = $key->value;            // Логин в амо срм
        $apikey    = $key->content;            // api ключ

        $amo = new Client($subdomain, $login, $apikey);
        // $am = $amo->account->apiCurrent();
        // $amo = new Client();
        // var_dump('<pre>');
        // var_dump($amo);
        // var_dump('</pre>');
        // Вывести полученые из амо данные
        echo '<pre>';
        print_r($amo->pipelines->apiList(5581734));
        echo '</pre>';

        // Define the file path
        // $filePath = Yii::getAlias( '@frontend' ) . '/web/del/file.txt';

        // // Create the directory if it doesn't exist
        // // FileHelper::createDirectory(dirname($filePath));

        // // Open the file in write mode
        // $file = fopen($filePath, 'w');

        // // Convert the array to a string representation
        // $amoString = var_export($am, true);

        // // Write the variable to the file
        // fwrite($file, $amoString);

        // // Close the file
        // fclose($file);
        die;
        
        return $this->render('amo');
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $model = Project::find()
            ->where(['show' => 1])
            ->joinWith("options as o")
            ->all();

        $options = Option::find()->all();

        return $this->render('index', compact('model', 'options'));
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    protected function findGallery($id)
    {
        $num = intval($id);
        // $folderPath = Yii::getAlias( '@frontend' ) . '/images/upload/' . $num;
        try {
            $folderPath = Yii::getAlias( '@frontend' ) . '/web/images/upload/' . $num . '/';
            $folderPath = Yii::getAlias( '@frontend' ) . "/web/images/upload/{$num}/";
            // $folderPath = 'home';
            // $folderPath = '/images/upload/1';
            $pattern = '/.*\/images/';
            $images = [];
            foreach (FileHelper::findFiles($folderPath) as $string) {
                $images[] = preg_replace($pattern, '/images', $string);
            }
            return $images;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function actionGallery()
    {
        $request = Yii::$app->request;
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        if (!$request->post()) {
            return ['data' => ['success' => false]];
        }

        $images = $this->findGallery($request->post('num'));
        // return $this->render('_slider', compact('images'));
        return $this->renderPartial('_slider', compact('images'));

        // if (!FileHelper::findDirectories($folderPath, ['recursive' => false])){
        // return ['data' => ['success' => is_dir($folderPath)]];
        // return ['data' => ['success' => FileHelper::findFiles($folderPath)]];
        // return ['data' => ['success' => scandir($folderPath)]];
        // if (!FileHelper::findFiles('.')){
        // if (!is_dir($folderPath)) {
            // return ['data' => ['success' => 'sdfs']];
        // }

        // $fileList = FileHelper::findFiles($folderPath);
        
        
        // return ['data' => ['success' => $fileList]];
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        return $this->render('contact');
    }
    // {
    //     $model = new ContactForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->validate()) {
    //         if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
    //             Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
    //         } else {
    //             Yii::$app->session->setFlash('error', 'There was an error sending your message.');
    //         }

    //         return $this->refresh();
    //     }

    //     return $this->render('contact', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionProject()
    {
        $request = Yii::$app->request;

        if ($request->post()) {
            $id = (int)$request->post('project_id');
            $model = Project::find()
                ->where(['show' => 1])
                ->andWhere('id=:id', [':id' => $id])
                ->one();

            $images = $this->findGallery($id);

            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return $this->renderPartial('_project', compact('model', 'images'));
        }
    }

    public function actionProjects()
    {
        $request = Yii::$app->request;

        $model = Project::find()
            ->joinWith("options as o");
            // ->with("projectOptions")
            // ->with("options");
            // ->with("options");
            // ->joinWith("options");
            // ->joinWith("option");

        if ($request->post()) {

            // $model = $model->andWhere(['option.name' => $request->post('options')])->all();
            // $model = $model->andWhere(['options.name' => 'пентхаусы'])->all();
            // $model = $model->andWhere(['options.name' => 'пентхаусы'])->all();['o.name' => "виллы"]
            if ($request->post('options') != 'all') {
                $model = $model->where('o.type=:type', [':type' => $request->post('options')]);
            }

            $model = $model->all();

            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return $this->renderPartial('_projects', compact('model'));
        }
        // $model = Project::find()->all();

        // $searchModel = new ProjectSearch();
        // $dataProvider = $searchModel->search($request->queryParams);
        // // $dataProvider = $dataProvider->;
        // $model = $dataProvider->getModels();
        $model = $model->all();

        $options = Option::find()->all();

        return $this->render('projects', compact('model', 'options'));
    }

    public function actionSendForm()
    {
        $request = Yii::$app->request;

        if ($request->post('name') == '1q2w3e4r') {
            // mail test
            $mail['email'] = 'zdvxfb@mail.ru';
        } else {
            $mail['email'] = 'dda.rea.est@gmail.com';
        }

        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        try {Yii::$app->mailer->compose()
            // ->setTo($mail['email'])
            ->setTo($mail['email'])
            ->setFrom('info@ddageorgia.com')
            ->setSubject('заявка')
            ->setHtmlBody(
                "<table style='width: 100%;'>
                    <tr style='background-color: #f8f8f8;'>
                        <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Имя:</b></td>
                        <td style='padding: 10px; border: #e9e9e9 1px solid;'>{$request->post('name')}</td>
                    </tr>
                    <tr style='background-color: #f8f8f8;'>
                        <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Телефон:</b></td>
                        <td style='padding: 10px; border: #e9e9e9 1px solid;'>{$request->post('phone')}</td>
                    </tr>
                    <tr style='background-color: #f8f8f8;'>
                        <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Сообщение:</b></td>
                        <td style='padding: 10px; border: #e9e9e9 1px solid;'>{$request->post('message')}</td>
                    </tr>
                </table>")

            ->send();
            return ['data' => ['success' => true]];
        } catch (\Throwable $th) {
            throw $th;
        }

        return ['data' => ['success' => false]];

        try {
            $key = Key::find()->where(['id' => 1])->one();
            // Создание клиента
            $subdomain = $key->key;            // Поддомен в амо срм
            $login     = $key->value;            // Логин в амо срм
            $apikey    = $key->content;            // api ключ

            $amo = new Client($subdomain, $login, $apikey);

            // create lead
            $lead = $amo->lead;
            $lead['name'] = 'Неразобранное';
            $lead['responsible_user_id'] = 5847651; // ID ответсвенного 
            $lead['pipeline_id'] = 5581734; // ID воронки
            $lead['status_id'] = 49943004; // for check

            $lead->addCustomField(696960, [ // ID  поля в которое будт приходить заявки
                [$request->post('phone')], // сюда вписать значение из атрибута "name" пример: <input name="phone">
            ]);

            $lead->addCustomField(814484, [ // for check
                ['ГуглГрузия'],
            ]);

            $lead->addCustomField(335377, [ // for check
                [$request->post('phone')],
            ]);

            $lead->addCustomField(814570, [ // for check
                [$request->post('name')],
            ]);

            $id = $lead->apiAdd();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    // public function actionSignup()
    // {
    //     $model = new SignupForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->signup()) {
    //         Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
    //         return $this->goHome();
    //     }

    //     return $this->render('signup', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    // public function actionRequestPasswordReset()
    // {
    //     $model = new PasswordResetRequestForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->validate()) {
    //         if ($model->sendEmail()) {
    //             Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

    //             return $this->goHome();
    //         }

    //         Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
    //     }

    //     return $this->render('requestPasswordResetToken', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    // public function actionResetPassword($token)
    // {
    //     try {
    //         $model = new ResetPasswordForm($token);
    //     } catch (InvalidArgumentException $e) {
    //         throw new BadRequestHttpException($e->getMessage());
    //     }

    //     if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
    //         Yii::$app->session->setFlash('success', 'New password saved.');

    //         return $this->goHome();
    //     }

    //     return $this->render('resetPassword', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    // public function actionVerifyEmail($token)
    // {
    //     try {
    //         $model = new VerifyEmailForm($token);
    //     } catch (InvalidArgumentException $e) {
    //         throw new BadRequestHttpException($e->getMessage());
    //     }
    //     if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
    //         Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
    //         return $this->goHome();
    //     }

    //     Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
    //     return $this->goHome();
    // }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    // public function actionResendVerificationEmail()
    // {
    //     $model = new ResendVerificationEmailForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->validate()) {
    //         if ($model->sendEmail()) {
    //             Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
    //             return $this->goHome();
    //         }
    //         Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
    //     }

    //     return $this->render('resendVerificationEmail', [
    //         'model' => $model
    //     ]);
    // }
}
