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

            <div class="container">
            <ul class="header-menu">
              <li class="header-menu__item catalog">
                <a class="header-menu_link" data-toggle="dropdown" href="#">Каталог <i class="icon-down-open"></i></a>
                <ul class="header_catalog_category">
                  <li class="header_catalog__main_category">
                    <a class="header-catalog_name_link" href="#"><div style="background: url('/img/preview_catalog/tsvety.png') no-repeat transparent 0 0;" class="header-catalog_name">Цветы</div></a>
                    <ul class="header-subcategory">
                      <li class="header-subcategory__item"><a class="header-subcategory__link" href="#">Букеты из свежих цветов</a></li>
                      <li class="header-subcategory__item"><a class="header-subcategory__link" href="#">Горшечные цветы</a></li>
                      <li class="header-subcategory__item"><a class="header-subcategory__link" href="#">Живые цветы</a></li>
                      <li class="header-subcategory__item"><a class="header-subcategory__link" href="#">Живые цветы</a></li>
                    </ul>
                  </li>
                  <li class="header_catalog__main_category">
                    <a class="header-catalog_name_link" href="#"><div style="background: url('/img/preview_catalog/podarok.png') no-repeat transparent 0 0;" class="header-catalog_name">Подарки и сувениры</div></a>
                    <ul class="header-subcategory">
                      <li class="header-subcategory__item"><a class="header-subcategory__link" href="#">Букеты из свежих цветов</a></li>
                      <li class="header-subcategory__item"><a class="header-subcategory__link" href="#">Горшечные цветы</a></li>
                      <li class="header-subcategory__item"><a class="header-subcategory__link" href="#">Живые цветы</a></li>
                    </ul>
                  </li>
                  <li class="header_catalog__main_category">
                    <a class="header-catalog_name_link" href="#"><div style="background: url('/img/preview_catalog/otkrytki.png') no-repeat transparent 0 0;" class="header-catalog_name">Открытки</div></a>
                    <ul class="header-subcategory">
                      <li class="header-subcategory__item"><a class="header-subcategory__link" href="#">Букеты из свежих цветов</a></li>
                      <li class="header-subcategory__item"><a class="header-subcategory__link" href="#">Горшечные цветы</a></li>
                      <li class="header-subcategory__item"><a class="header-subcategory__link" href="#">Живые цветы</a></li>
                    </ul>
                  </li>
                  <li class="header_catalog__main_category">
                    <a class="header-catalog_name_link" href="#"><div style="background: url('/img/preview_catalog/shary.png') no-repeat transparent 0 0;" class="header-catalog_name">Воздушные шары</div></a>
                    <ul class="header-subcategory">
                      <li class="header-subcategory__item"><a class="header-subcategory__link" href="#">Букеты из свежих цветов</a></li>
                      <li class="header-subcategory__item"><a class="header-subcategory__link" href="#">Горшечные цветы</a></li>
                      <li class="header-subcategory__item"><a class="header-subcategory__link" href="#">Живые цветы</a></li>
                    </ul>
                  </li>
                  <li class="header_catalog__main_category">
                    <a class="header-catalog_name_link" href="#"><div style="background: url('/img/preview_catalog/igrushki.png') no-repeat transparent 0 0;" class="header-catalog_name">Мягкие игрушки</div></a>
                    <ul class="header-subcategory">
                      <li class="header-subcategory__item"><a class="header-subcategory__link" href="#">Букеты из свежих цветов</a></li>
                      <li class="header-subcategory__item"><a class="header-subcategory__link" href="#">Горшечные цветы</a></li>
                      <li class="header-subcategory__item"><a class="header-subcategory__link" href="#">Живые цветы</a></li>
                    </ul>
                  </li>
                  <li class="header_catalog__main_category">
                    <a class="header-catalog_name_link" href="#"><div style="background: url('/img/preview_catalog/bukety.png') no-repeat transparent 0 0;" class="header-catalog_name">Букеты из игрушек</div></a>
                    <ul class="header-subcategory">
                      <li class="header-subcategory__item"><a class="header-subcategory__link" href="#">Букеты из свежих цветов</a></li>
                      <li class="header-subcategory__item"><a class="header-subcategory__link" href="#">Горшечные цветы</a></li>
                      <li class="header-subcategory__item"><a class="header-subcategory__link" href="#">Живые цветы</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="header-menu__item"><a class="header-menu_link" href="#">Доставка</a></li>
              <li class="header-menu__item"><a class="header-menu_link" href="#">Способы оплаты</a></li>
              <li class="header-menu__item"><a class="header-menu_link" href="#">Контакты</a></li>
              <li class="header-menu__item"><a class="header-menu_link" href="#">Акции</a></li>
              <li class="header-menu__item"><a class="header-menu_link" href="#">Отзывы</a></li>
              <div class="clear"></div>
            </ul>
            </div>
        </div>
    </header>


          <?php foreach ($this->context->categories as $category) { ?>

              <div class="category">
                  <div class="name_category">
                      <?= \yii\helpers\Html::img($category->getImageUrl()) ?>
                      <?= $category->name ?>
                  </div>
              </div>
          <?php } ?>




    <?php $this->beginBody() ?>
    <div class="container">
        <?= $content ?>
    </div>
    <?php $this->endBody() ?>
    <footer>
      <div class="footer-bgr_white">
        <div class="container">
        <div class="footer-logo"><a href="/"><img src="/img/logo.png" alt="Калейдоскоп" title="Калейдоскоп" /></a></div>
        <ul class="footer-container-menu">
          <li class="footer-menu">
            <div class="footer-menu__name">Информация</div>
            <ul class="footer-submenu">
              <li class="footer-submenu__item"><a class="footer-submenu__link" href="#">Доставка</a></li>
              <li class="footer-submenu__item"><a class="footer-submenu__link" href="#">Защита покупателя</a></li>
              <li class="footer-submenu__item"><a class="footer-submenu__link" href="#">Способы оплаты</a></li>
            </ul>
          </li>
          <li class="footer-menu">
            <div class="footer-menu__name">Покупателям</div>
            <ul class="footer-submenu">
              <li class="footer-submenu__item"><a class="footer-submenu__link" href="#">Акции</a></li>
              <li class="footer-submenu__item"><a class="footer-submenu__link" href="#">Скидки</a></li>
              <li class="footer-submenu__item"><a class="footer-submenu__link" href="#">Карты сайта</a></li>
            </ul>
          </li>
          <li class="footer-menu">
            <div class="footer-menu__name">Контакты</div>
            <ul class="footer-submenu">
              <li class="footer-submenu__item"><a class="footer-submenu__link" href="mailto:email@yandex.ru">email@yandex.ru</a></li>
              <li class="footer-submenu__item">8 (800) 100-20-30</li>
              <li class="footer-submenu__item">8 (800) 100-20-30</li>
            </ul>
          </li>
          <li class="footer-menu">
            <div class="footer-menu__name">Наши адреса</div>
            <ul class="footer-submenu">
              <li class="footer-submenu__item">г. Пенза, 1-й Онежский проезд, д.6</li>
              <li class="footer-submenu__item">г. Пенза, 1-й Онежский проезд, д.6</li>
            </ul>
          </li>
        </ul>
        <div class="clear"></div>
        </div>
      </div>
      <div class="footer-bottom bgr-dark_red ">Интернет-магазин "Калейдоскоп"  © 2015 </div>
    </footer>
    </body>
    </html>
<?php $this->endPage() ?>
