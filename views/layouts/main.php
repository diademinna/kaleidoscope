<?php
use yii\helpers\Html;
use app\assets\AppAsset;
AppAsset::register($this);
/* @var $this yii\web\View */
/* @var $content string */
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <header>
        <div class="header_top">
            <div class="content">
                <div class="auth_menu">
                    <ul class="menu">
                        <li><a href="#">Регистрация</a></li>
                        <li><a href="#">Личный кабинет</a></li>
                    </ul>
                </div>
                <div class="my_cart">
                    Моя корзина: 0 продуктов - 0 руб.
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="logo_container">
            <div class="content">
                <div class="logo">
                    <a href="/"><img src="/img/logo.png" /></a>
                </div>
                <div class="block_contacts">
                    <div class="item">Адрес: <span>г. Пенза, 1-й Онежский пр-д, д.6</span></div>
                    <div class="item">Телефон: <span>8 937 000 23 32</span></div>
                </div>
                <div class="block_search">
                    <form>
                        <input type="text" value="" placeholder="Поиск..."/>
                        <button></button>
                        <div class="clear"></div>
                    </form>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="content">
            <div class="main_menu">
                <ul>
                    <li><a href="#">Каталог</a></li>
                    <li><a href="#">Доставка</a></li>
                    <li><a href="#">Способы оплаты</a></li>
                    <li><a href="#">Контакты</a></li>
                    <li><a href="#">Акции</a></li>
                    <li><a href="#">Отзывы клиентов</a></li>
                </ul>
            </div>
        </div>
    </header>
    <?php $this->beginBody() ?>

    <div class="content">
        <?= $content ?>
    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>