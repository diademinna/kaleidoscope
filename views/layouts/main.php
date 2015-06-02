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
            <div class="top_menu">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="links">
                                <li><a href="#">Регистрация</a></li>
                                <li><a href="#">Личный кабинет</a></li>
                            </ul>
                            <div class="cart-position">
                                <div id="cart">
                                    <div class="heading">
                                        <i class="icon-basket"></i>
                                        Моя корзина: <span>(0) продуктов - 0 руб.</span>
                                        <i class="icon-down-open"></i>
                                    </div>
                                    <div class="content">
                                        <div class="content-scroll">
                                            <div class="empty">Ваша корзина пуста!</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo">
                            <a href="/">
                                <img alt="Интернет-магазин Калейдоскоп" title="Интернет-магазин Калейдоскоп" src="/img/logo.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contacts_info">
                            <div class="item">
                                Адрес: <span>г. Пенза, 1-й Онежский пр-д, д.6</span>
                            </div>
                            <div class="item">
                                Телефон: <span>8 800 523 65 35</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="search">
                            <form>
                                <input type="text" placeholder="Поиск..." />
                                <button><i class="icon-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div id="menu">
                            <ul class="sf-menu">
                                <li class="">
                                    <a href="#">
                                        <span>Congratulation</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
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