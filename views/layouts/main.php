<?php
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
/* @var $this yii\web\View */
/* @var $content string */
/* @var $categories \app\models\Category[] */
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

    <div class="wraper">
        <header>
            <div class="header-topbar">
                gfgdfg
            </div>
            <!--
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
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
                    <div class="col-sm-4 col-xs-12">
                        <div class="logo">
                            <a href="/">
                                <img alt="Интернет-магазин Калейдоскоп" title="Интернет-магазин Калейдоскоп"
                                     src="/img/logo.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="contacts_info">
                            <div class="item">
                                Адрес: <span>г. Пенза, 1-й Онежский пр-д, д.6</span>
                            </div>
                            <div class="item">
                                Телефон: <span>8 800 523 65 35</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="search">
                            <form>
                                <input type="text" placeholder="Поиск..."/>
                                <button><i class="icon-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div id="menu">
                            <ul class="sf-menu">
                                <li class="catalog"><a href="#"><span>Каталог<i class="icon-down-open"></i></span></a>

                                    <div class="sub_menu">

                                        <?php foreach ($this->context->categories as $category) { ?>
                                            <div class="category">
                                                <div class="name_category">
                                                    <?= \yii\helpers\Html::img($category->getImageUrl()) ?>
                                                    <?= $category->name ?>
                                                </div>

                                                <div class="item">1Букеты из свежих цветов</div>
                                                <div class="item">2Горшечные цветы</div>
                                                <div class="item">3Живые цветы</div>
                                                <div class="item">4Букет невесты</div>
                                            </div>
                                        <?php } ?>


                                        <div class="category">
                                            <div class="name_category">
                                                <img src="/img/category/tsvety.png"/>Цветы
                                            </div>
                                            <div class="item">Букеты из свежих цветов</div>
                                            <div class="item">Горшечные цветы</div>
                                            <div class="item">Живые цветы</div>
                                            <div class="item">Букет невесты</div>
                                        </div>
                                        <div class="category_transparent"></div>
                                        <div class="category">
                                            <div class="name_category">
                                                <img src="/img/category/tsvety.png"/>Цветы
                                            </div>
                                            <div class="item">Букеты из свежих цветов</div>
                                            <div class="item">Горшечные цветы</div>
                                            <div class="item">Живые цветы</div>
                                            <div class="item">Букет невесты</div>
                                        </div>
                                        <div class="category_transparent"></div>
                                        <div class="category">
                                            <div class="name_category">
                                                <img src="/img/category/tsvety.png"/>Цветы
                                            </div>
                                            <div class="item">Букеты из свежих цветов</div>
                                            <div class="item">Горшечные цветы</div>
                                            <div class="item">Живые цветы</div>
                                            <div class="item">Букет невесты</div>
                                        </div>
                                        <div class="category_transparent"></div>
                                        <div class="category">
                                            <div class="name_category">
                                                <img src="/img/category/tsvety.png"/>Цветы
                                            </div>
                                            <div class="item">Букеты из свежих цветов</div>
                                            <div class="item">Горшечные цветы</div>
                                            <div class="item">Живые цветы</div>
                                            <div class="item">Букет невесты</div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </li>
                                <li><a href="#"><span>Доставка</span></a></li>
                                <li><a href="#"><span>Способы оплаты</span></a></li>
                                <li><a href="#"><span>Конаткты</span></a></li>
                                <li><a href="#"><span>Акции</span></a></li>
                                <li><a href="#"><span>Отзывы клиентов</span></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            -->
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