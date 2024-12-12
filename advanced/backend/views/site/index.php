<?php
/**
 * team:我说的队
 * Coding by 石家伊 2211532,20241211
 * 主页
 */

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="p-3 mb-2 bg-light text-center">
        <div class="container">
            <h2>你好啊，管理员！</h2>
            <p>在这里修改数据库中的信息。</p>
        </div>
    </div>

    <div class="body-content container">
        <div class="row">
            <?php foreach ([
                ['header' => '发展史', 'desc' => '修改history', 'link' => ['/history/index'], 'icon' => 'fas fa-history'],
                ['header' => '前沿研究', 'desc' => '修改research', 'link' => ['/research/index'], 'icon' => 'fas fa-flask'],
                ['header' => '人物介绍', 'desc' => '修改people', 'link' => ['/people/index'], 'icon' => 'fas fa-people'],
                ['header' => '应用场景', 'desc' => '修改scene', 'link' => ['/scene/index'], 'icon' => 'fas fa-map-marked-alt'],
                ['header' => '涵盖领域', 'desc' => '修改domains', 'link' => ['/domain/index'], 'icon' => 'fas fa-globe-americas'],
                ['header' => '工程应用', 'desc' => '修改project', 'link' => ['/project/index'], 'icon' => 'fas fa-cogs'],
                ['header' => '留言板', 'desc' => '修改discussion', 'link' => ['/discussion/index'], 'icon' => 'fas fa-comments'],
                ['header' => '组员信息', 'desc' => '修改members', 'link' => ['/member/index'], 'icon' => 'fas fa-address-card'],
                ['header' => '用户', 'desc' => '修改users', 'link' => ['/users/index'], 'icon' => 'fas fa-users'],
                ['header' => '管理员', 'desc' => '修改administrator', 'link' => ['/administrator/index'], 'icon' => 'fas fa-administrator']
            ] as $section): ?>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column align-items-center">
                            <i class="<?=$section['icon']?> fa-3x mb-3"></i>
                            <h5 class="card-title"><?=$section['header']?></h5>
                            <p class="card-text"><?=$section['desc']?></p>
                            <a href="<?= \yii\helpers\Url::to($section['link']) ?>" class="btn btn-primary mt-auto">修改 &raquo;</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>