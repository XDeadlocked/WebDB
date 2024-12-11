<?php

/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241210
 * 注册controller
 * Coding by 胡文馨 2211989, 20241211
 * 团队信息controller
 */

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\LoginForm;
use frontend\models\LogoutForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                [
                    'actions' => ['signup'],
                    'allow' => true,
                    'roles' => ['?'], // 允许游客访问注册页面
                ],
                [
                    'actions' => ['logout'],
                    'allow' => true,
                    'roles' => ['@'], // 只允许已认证用户访问登出操作
                ],
                [
                    'actions' => ['index'], // 添加这条规则以允许游客访问主页
                    'allow' => true,
                    'roles' => ['?'], // 允许游客访问主页
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
     * {@inheritdoc}
     */
    public function actions()
    {
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
     * @return mixed
     */
    public function actionIndex()
    {
        // 检查是否有错误
        if (Yii::$app->session->hasFlash('error')) {
            Yii::$app->session->setFlash('error', '登录失败，请检查用户名和密码。');
        }
        return $this->render('index');
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
            // 登录成功后重定向到首页
            return $this->goHome();
        }

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        // 创建 LogoutForm 实例
        $model = new LogoutForm();

        // 调用 logout() 方法进行登出
        if ($model->logout()) {
            // 登出成功后重定向到首页
            return $this->goHome();
        }

        // 如果登出失败，返回到登出页面（这一步通常不会执行，因为 logout 方法返回 true）
        return $this->goHome();
    }

    /**
     * Displays team info page.
     *
     * @return string
     */
    public function actionTeamInfo()
    {
        return $this->render('team-info'); // 渲染团队信息页面视图
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    /*
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }
    */
    /**
     * Displays about page.
     *
     * @return mixed
     */
    /*
    public function actionAbout()
    {
        return $this->render('about');
    }
    */


}

