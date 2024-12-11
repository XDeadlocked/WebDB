<?php

/**
 * team:我说的队
 * Coding by 胡文馨 2211989,20241211
 * Coding by 石家伊 2211532,20241211
 * 新增并合并团队信息介绍
 */
use common\widgets\Alert;
use backend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<!-- 显示闪存消息 -->
<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= Html::encode(Yii::$app->session->getFlash('success')) ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= Html::encode(Yii::$app->session->getFlash('error')) ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => '主页', 'url' => ['site/index']],

        //['label' => '关于我们', 'url' => ['/site/about']],
        //['label' => '联系我们', 'url' => ['/site/contact']],
        //['label' => '留言板', 'url' => ['/discussion/index']],
        //['label' => '组员信息', 'url' => ['/member/index']],
        //['label' => '团队信息', 'url' => ['/team/index']],
        //['label' => '团队信息', 'url' => ['site/team-info']], // 合并后的菜单项
    ];
    $menuItems[] = ['label' => '管理员注册', 'url' => ['/site/signup']];

    // 使用会话中的 'adname' 来判断用户是否已登录
$adname = Yii::$app->session->get('adname');
if ($adname === null) {
    // 如果用户未登录，显示注册和登录链接
    $menuItems[] = ['label' => '管理员登录', 'url' => ['/site/login']];
} else {
    // 如果用户已登录，显示欢迎信息和退出登录链接
    $menuItems[] = '<li class="nav-item">'
        . Html::tag('span', '欢迎管理员: ' . Html::encode($adname), ['class' => 'nav-link'])
        . '</li>';
    
        $menuItems[] = '<li class="nav-item">'
        . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline', 'id' => 'logout-form'])
        . Html::submitButton(
            '退出登录',
            [
                'class' => 'btn btn-link logout',
                'onclick' => 'event.preventDefault(); document.getElementById("logout-form").submit();'
            ]
        )
        . Html::endForm()
        . '</li>';
}

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ml-auto'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage(); ?>