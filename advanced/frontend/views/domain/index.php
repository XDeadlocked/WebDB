<?php
/**
 * team:我说的队
 * Coding by 何禹姗 2211421,20241208
 * 涵盖领域主页
 */
use yii\helpers\Html;

$this->title = 'AI 涵盖领域';
$this->params['breadcrumbs'][] = $this->title;


//自定义函数：将文本中的 URL 转换为可点击的超链接
function makeLinksClickable($text) {
    // 正则表达式匹配 URL
    return preg_replace(
        '/(http[s]?:\/\/[^\s<"]+)/i',
        '<a href="$1" target="_blank">$1</a>',
        $text
    );
}

?>

<div class="lunbo">
    <div class="lb-content">
        <ul id="lb-item" class="lb-items">
            <?php if (!empty($domains)): ?>
                <?php foreach ($domains as $index => $domain): ?>
                    <li class="lb-item<?= $index === 0 ? ' active' : '' ?>">
                        <div class="domain-item">
                            <h2 class="domain-name"><?= Html::encode($domain->DomainName) ?></h2>
                            <p class="domain-description"><?= Html::encode($domain->Description) ?></p>
                            <div class="domain-details">
                                <div class="domain-tech">
                                    <strong>技术:</strong>
                                    <p><?= Html::encode($domain->Tech) ?></p>
                                </div>
                                <div class="domain-application">
                                    <strong>应用:</strong>
                                    <p><?= Html::encode($domain->Application) ?></p>
                                </div>
                                <div class="domain-references">
                                    <strong>参考文献:</strong>
                                    <ul>
                                        <?php foreach (explode("\n", trim($domain->References)) as $reference): ?>
                                            <li><?= makeLinksClickable(Html::encode(trim($reference))) ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <li class="lb-item active">
                    <p>没有找到相关领域信息。</p>
                </li>
            <?php endif; ?>
        </ul>
        <div id="btn-left" class="carousel-control prev" onclick="prevSlide()">&#10094;</div>
        <div id="btn-right" class="carousel-control next" onclick="nextSlide()">&#10095;</div>
        <ul id="circle" class="carousel-indicators">
            <?php for ($i = 0; $i < count($domains); $i++): ?>
                <li class="circle<?= $i === 0 ? ' active' : '' ?>" onclick="goToSlide(<?= $i ?>)"></li>
            <?php endfor; ?>
        </ul>
    </div>
</div>

<style>
    .lunbo {
        position: relative;
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        overflow: hidden;
    }

    .lb-content {
        position: relative;
    }

    .lb-items {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .lb-item {
        min-width: 100%;
        flex: 0 0 100%;
        display: none;
    }

    .lb-item.active {
        display: block;
    }

    .carousel-control {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
        font-size: 24px;
    }

    .carousel-control.prev {
        left: -25px;
    }

    .carousel-control.next {
        right: -25px;
    }

    .carousel-indicators {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }

    .circle {
        width: 10px;
        height: 10px;
        background-color: #ccc;
        border-radius: 50%;
        margin: 0 5px;
        cursor: pointer;
    }

    .circle.active {
        background-color: #333;
    }

    .domain-item {
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 5px;
        width: 100%; /* 使内容宽度为100% */
        margin: 0 auto; /* 居中内容 */
    }

    .domain-name {
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .domain-description {
        font-style: italic;
        margin-bottom: 10px;
    }

    .domain-details {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .domain-tech, .domain-application, .domain-references {
        flex: 1 1 300px;
    }

    .domain-references ul {
        list-style-type: disc;
        padding-left: 20px;
    }

    hr {
        border: none;
        border-top: 1px solid #ccc;
        margin: 20px 0;
    }
</style>

<script>
    let currentIndex = 0;
    const items = document.querySelectorAll('.lb-item');
    const indicators = document.querySelectorAll('.circle');

    function updateCarousel() {
        items.forEach((item, index) => {
            item.classList.toggle('active', index === currentIndex);
        });
        indicators.forEach((indicator, index) => {
            indicator.classList.toggle('active', index === currentIndex);
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % items.length;
        updateCarousel();
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + items.length) % items.length;
        updateCarousel();
    }

    function goToSlide(index) {
        currentIndex = index;
        updateCarousel();
    }

    // 自动轮播（可选）
    setInterval(nextSlide, 5000); // 每5秒切换一次
</script>