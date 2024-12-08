<?php
/**
 * team:我说的队
 * Coding by 何禹姗 2211421,20241207
 * Coding by 胡文馨 2211989,20241207
 * 主页
 */

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">欢迎进入我们的网站！</h1>

        <p class="lead">这是一个关于人工智能主题的网站，在这里，您可以了解到有关很多人工智能的信息。</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>发展史</h2>

                <p>了解历史有助于我们更好地把握现在和未来。本模块将带您回顾人工智能的发展历程，从早期的概念提出到如今的广泛应用。我们将沿着时间轴，介绍关键的时间节点、重要人物及其贡献。</p>

                <p><a class="btn btn-outline-secondary" href="<?= \yii\helpers\Url::to(['/history/index']) ?>">查看发展史 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>前沿研究</h2>

                <p>前沿研究是推动人工智能不断进步的动力源泉。在这里，我们会深入探讨最新的研究成果，特别是那些发表在顶级学术会议和期刊上的高质量论文，让读者紧跟AI领域的最新趋势，还能够激发新的思考和灵感，促进跨学科的合作与交流。</p>

                <p><a class="btn btn-outline-secondary" href="<?= \yii\helpers\Url::to(['/frontier/index']) ?>">查看前沿研究 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>人物介绍</h2>

                <p>伟大的成就离不开杰出的人物。本模块致力于介绍那些对人工智能发展做出重大贡献的科学家、工程师和企业家。他们中有些人奠定了AI理论的基础，有些人在特定技术领域取得了突破性进展，还有些人则成功地将AI商业化，改变了行业格局。</p>

                <p><a class="btn btn-outline-secondary" href="<?= \yii\helpers\Url::to(['/people/index']) ?>">查看人物介绍 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>应用场景</h2>

                <p>人工智能的应用场景极其广泛，从日常生活的便捷工具到复杂的企业级解决方案，它正在改变我们与世界互动的方式。本模块将探讨AI在不同领域中的具体应用场景，提供一些成功的案例研究，展示AI是如何解决实际问题并带来创新变革的。</p>

                <p><a class="btn btn-outline-secondary" href="<?= \yii\helpers\Url::to(['/application/index']) ?>">查看应用场景 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>涵盖领域</h2>

                <p>本模块旨在全面梳理AI所涵盖的主要领域，如机器学习、自然语言处理、计算机视觉、机器人学等，提供了深入了解人工智能领域的平台。</p>

                <p><a class="btn btn-outline-secondary" href="<?= \yii\helpers\Url::to(['/domain/index']) ?>">查看涵盖领域 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>工程应用</h2>

                <p>程应用是人工智能理论转化为实践的重要桥梁。在这个模块中，我们将聚焦于一系列具有代表性的AI工程项目，如智慧城市建设项目、智能制造系统、机器人流程自动化平台等。我们可以了解到工程师们如何利用机器学习、深度学习等先进技术来应对复杂的现实挑战。</p>

                <p><a class="btn btn-outline-secondary" href="<?= \yii\helpers\Url::to(['/project/index']) ?>">查看工程应用 &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
