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
              <div class="container">
                <ul class="header-action">
                    <li class="header-action__item"><a class="header-action__link" href="#">Регистрация</a></li>
                    <li class="header-action__item"><a class="header-action__link" href="#">Личный кабинет</a></li>
                </ul>
                <div class="header-cart">
                  <div class="header-cart__heading" data-toggle="dropdown">
                    <i class="icon-basket"></i>
                    Моя корзина: (0) продуктов - 0 руб.
                    <i class="icon-down-open"></i>
                  </div>
                  <div class="header-cart__content">
                    <div class="header-cart__container"> <!--вся область корзины-->
                      <!--Корзина пуста-->
                      Добавленные товары
                      <div class="header-cart-product">
                        <div class="header-cart-product__remove"><i class="icon-cancel-circled" title="Убрать из корзины"></i></div>
                        <div class="header-cart-product__img"><a href="#"><img src="/img/img_cart.png" /></a></div>
                        <div class="header-cart-product-description">
                          <div class="header-cart-product-description__name"><a href="#">Аромат Прованса</a></div>
                          <div class="header-cart-product-description__params">
                            - розовый <br />
                            - дорогая упаковка
                          </div>
                          <div class="header-cart-product-description__count">
                            x 1 <span>1200 руб.</span>
                          </div>
                        </div>
                        <div class="clear"></div>
                      </div>
                      <!--перечень продуктов в корзине-->
                      <div class="header-cart-product">
                        <div class="header-cart-product__remove"><i class="icon-cancel-circled" title="Убрать из корзины"></i></div>
                        <div class="header-cart-product__img"><a href="#"><img src="/img/img_cart.png" /></a></div>
                        <div class="header-cart-product-description">
                          <div class="header-cart-product-description__name"><a href="#">Аромат Прованса</a></div>
                          <div class="header-cart-product-description__params">
                            - розовый <br />
                            - дорогая упаковка
                          </div>
                          <div class="header-cart-product-description__count">
                            x 1 <span>1200 руб.</span>
                          </div>
                        </div>
                        <div class="clear"></div>
                      </div>
                      <!--перечень продуктов в корзине-->
                      <!--общая стоимость-->
                      <div class="header-cart-total">
                          <table class="header-cart-total__item">
                            <tr>
                              <td class="name">Стоимость:</td>
                              <td><span>2 400 руб.</span></td>
                            </tr>
                            <tr>
                              <td class="name">Доставка:</td>
                              <td><span>130 руб.</span></td>
                            </tr>
                            <tr>
                              <td class="name">Общая стоимость:</td>
                              <td><span>2 530 руб.</span></td>
                            </tr>
                          </table>
                      </div>
                      <div class="clear"></div>
                      <!--общая стоимость-->
                      <div class="header-cart-actions">
                        <div class="header-cart-actions__button"><a class="header-cart-actions__button__link" href="#">Обзор корзины</a></div>
                        <div class="header-cart-actions__button"><a class="header-cart-actions__button__link" href="#">Оформить заказ</a></div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="header__logo">
                <a href="/"><img src="/img/logo.png" alt="Калейдоскоп"  title="Калейдоскоп"/></a>
              </div>
              <div class="header-contacts">
                <div class="header-contacts__item">Адрес: <span>г. Пенза, 1-й Онежский проезд, д.6</span></div>
                <div class="header-contacts__item">Телефон: <span>8 935 455 25 26</span></div>
              </div>
              <div class="header-search">
                <form>
                  <button class="header-search__button"><i class="icon-search"></i></button>
                  <input class="header-search__input" type="text" name="seach_phrase" placeholder="Поиск...">
                </form>
              </div>
              <div class="clear"></div>
            </div>
            <div class="header-menu">
              <div class="container">
              fdf
              </div>
            </div>
            <!--


            </div>
            <div class="container">
                <div class="row">
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
