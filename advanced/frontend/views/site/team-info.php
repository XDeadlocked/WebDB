<?php
/** @var yii\web\View $this */
/**
 * Team: 我说的队
 * Coding by 胡文馨 2211989, 20241211
 * 团队信息页
 */
$this->title = '团队信息';
?>

<style>
    /* 设置背景图片样式 */
    body {
        background-image: url('<?= \yii\helpers\Url::to('../web/image/team.jpg') ?>'); /* 使用 Yii 的 Url::to() 方法生成路径 */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed; /* 固定背景图 */
    }

    .site-team-info {
        /* 添加半透明背景样式 */
        background: rgba(255, 255, 255, 0.9);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .site-team-info h1, .site-team-info h2, .site-team-info p, .site-team-info li {
        color: #000; /* 设置文字为黑色 */
    }

    .card {
        background: rgba(255, 255, 255, 0.8); /* 调整卡片的透明度 */
        border: none;
    }

    .card-header {
        border-radius: 5px 5px 0 0; /* 设置卡片头部圆角 */
    }

    .list-group-item {
        background: rgba(255, 255, 255, 0.9); /* 列表项背景 */
        color: #000; /* 列表项文字颜色 */
    }
</style>

<div class="site-team-info container mt-5">
    <div class="text-center mb-5">
        <h1 class="display-4"><?= $this->title ?></h1>
        <p class="lead">欢迎来到团队信息页面，这里展示了本项目我组的全部信息。</p>
        <hr class="my-4">
    </div>

    <!-- 关于我们部分 -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-primary text-white">
            <h2 class="h4 mb-0">
                <i class="fas fa-info-circle"></i> 关于我们
            </h2>
        </div>
        <div class="card-body">
            <p>我们是一个致力于创新和协作的团队，专注于提供高质量的产品和服务。我们的目标是通过技术和创意改变世界，为用户提供最佳体验。</p>
        </div>
    </div>

    <!-- 联系我们部分 -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-success text-white">
            <h2 class="h4 mb-0">
                <i class="fas fa-envelope"></i> 联系我们
            </h2>
        </div>
        <div class="card-body">
            <p>如果您有任何问题或建议，请随时联系我们：</p>
            <ul class="list-unstyled">
                <li><i class="fas fa-phone-alt"></i> 电话：123-456-7890</li>
                <li><i class="fas fa-envelope"></i> 邮箱：contact@team.com</li>
                <li><i class="fas fa-map-marker-alt"></i> 地址：中国天津市津南区海河教育园同砚路南开大学津南校区</li>
            </ul>
        </div>
    </div>

    <!-- 团队介绍部分 -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-warning text-dark">
            <h2 class="h4 mb-0">
                <i class="fas fa-users"></i> 我们的团队
            </h2>
        </div>
        <div class="card-body">
            <p>我们团队由以下成员组成：</p>
            <ul class="list-group">
                <li class="list-group-item"><strong>胡文馨</strong> - 完成本项目的数据收集、登录注册后端、团队信息界面、发展史及人物介绍MVC的前后端</li>
                <li class="list-group-item"><strong>石家伊</strong> - 完成本项目的框架搭建、数据库建立、注册页面、留言板及用户团队MVC的前后端</li>
                <li class="list-group-item"><strong>何禹姗</strong> - 完成本项目的框架搭建、数据收集、主页和注册登录页面、工程应用及涵盖领域MVC的前后端</li>
                <li class="list-group-item"><strong>许宸</strong> - 完成本项目的数据收集、前沿及应用场景MVC的前后端</li>
            </ul>
            <!-- 添加团队作业链接 -->
            <p>我们的团队作业链接： <a href="#" target="_blank">https://github.com/XDeadlocked/WebDB</a></p>
        </div>
    </div>
</div>
