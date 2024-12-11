<?php
/** @var yii\web\View $this */
/**
 * Team: 我说的队
 * Coding by 胡文馨 2211989, 20241211
 * 团队信息页
 */
$this->title = '团队信息';
?>
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
        </div>
    </div>
</div>
