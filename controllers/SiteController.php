<?php

namespace app\controllers;

use app\models\PaysystemRecord;
use app\models\UserRecord;
use app\models\ScoreRecord;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\UserForm;
use \app\models\ScoreoutputForm;
use \app\models\ScoreoutputRecord;


class SiteController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                        [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex() {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
                    'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
                    'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout() {
        return $this->render('about');
    }

    public function actionUserscore() {
        $userRecord = UserRecord::find()->where(['login' => 'user2'])->all();

        return $this->render('userscore', ['userRecord' => $userRecord]);
    }

    public function actionAddoutput() {
          if (Yii::$app->request->isPost)
            return $this->addOutputPost();
        
        $_id =  Yii::$app->request->get('id');
      //  $Scoreoutputrecord = ScoreoutputRecord::find()->where(['score_id' => id])->all(); 
         
         $scoreoutputForm=new ScoreoutputForm();
         if ($_id!=null)
           $scoreoutputForm->scoreid=$_id;
         else 
           $scoreoutputForm->scoreid=1;
         $pays=PaysystemRecord::find()->all();

        return $this->render('scoreoutput\addoutput',
            ['output'=>$scoreoutputForm,
                'pays'=>$pays]);
    }

    public function actionAdduser() {

        if (Yii::$app->request->isPost)
            return $this->addUserPost();
        $userAdd = new UserForm();
        return $this->render('user\adduser', ['AddUser' => $userAdd]);
    }

    public function addUserPost() {
        $userAdd = new UserForm();
        if ($userAdd->load(Yii::$app->request->post()))
            if ($userAdd->validate()) {
                $userRecord = new UserRecord();//идет добавление пользователя
                $userRecord->setUserAddForm($userAdd);
                $userRecord->save();
                $scoreRecord= new ScoreRecord();//новому пользователю сразу добавляется счет
                $scoreRecord->addScore($userRecord);
                $scoreRecord->save();
                //return $this->render('user\usersuccess',['AddUser'=>$userRecord]);
                return $this->redirect('/site/userscore/');
            }
      //  return $this->render('user\adduser', ['AddUser' => $userAdd]);
    }
        public function addOutputPost() {
        
            $output = new ScoreoutputForm();
            if($output->load(Yii::$app->request->post()))
                if($output->validate())
                {
                    $outputRecord= new ScoreoutputRecord();//добавляется запись
                    $outputRecord->setRecord($output);//в нее вносятся данные
                    $outputRecord->save();//сохраняется
                    return $this->redirect('/site/userscore/'); //редиректится на состояние счета
                }
        }

    /**
     * @return string
     */
    public function actionAddscore()
    {
        $_id =  Yii::$app->request->get('id');
        return $this->render('score\addscore',['id'=>$_id]);
    }

    public function actionViewpaysystem()
    {
        $paysystemRecord= PaysystemRecord::find()->where(['id' => '1'])->all();
        return $this->render('paysystem\viewpaysystem',
            ['paysystemRecord'=>$paysystemRecord]);
    }

    
}
