<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <title>Kugo WD</title>
  </head>
  <body>
    <nav class="nav">
      <div class="container-small">
        <div class="nav-top">
          <div class="nav-link">
            <a href="#" class="nav-link-item">Сервис</a>
            <a href="#" class="nav-link-item">Сотрудничество</a>
            <a href="#" class="nav-link-item" data-toggle="modal" data-target="#feedback-modal">Заказать звонок</a>
            <div class="nav-icon">
              <a href="#" class="nav-icon">
                <img
                  width="12"
                  height="12"
                  src="img/svg/viber.svg"
                  alt="viber"
                />
              </a>
              <a href="#" class="nav-icon">
                <img
                  width="12"
                  height="12"
                  src="img/svg/whatsapp.svg"
                  alt="whatsapp"
                />
              </a>
              <a href="#" class="nav-icon">
                <img
                  width="12"
                  height="12"
                  src="img/svg/telegram.svg"
                  alt="telegram"
                />
              </a>
            </div>
          </div>
          <a href="tel:+78005055461" class="nav-phone">+7 (800) 505-54-61</a>
        </div>
      </div>
      <hr class="hr" />
      <!-- nav-top -->
      <div class="container-small">
        <div class="nav-bottom">
          <a href="./" class="logo">KUGOO</a>
          <button class="button button-menu">
            <div class="button-content">
              <img src="img/svg/menu.svg" alt="menu" class="menu" />
              Каталог
            </div>
          </button>
          <a href="./" class="logo-center-nav">KUGOO</a>
          <div class="search">
            <form class="search-form">
              <input type="text" placeholder="Искать самокат KUGO" />
              <button class="button" type="submit">
                <img
                  src="img/svg/search.svg"
                  alt="search"
                  class="search-icon"
                />
              </button>
            </form>
          </div>
          <div class="nav-bottom-icon">
            <a href="#" class="nav-bottom-icon-items">
              <img src="img/svg/balance.svg" alt="balance" />
            </a>
            <a href="#" class="nav-bottom-icon-items">
              <img src="img/svg/heart.svg" alt="heart" />
            </a>
            <a href="#" class="nav-bottom-icon-items">
              <div class="shopping-cart">
                <img src="img/svg/shopping-cart.svg" alt="shopping-cart" />
                <span class="shopping-cart-text">Корзина</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- nav -->
    <header class="header">
      <div class="container-large">
        <div class="header-content">
          <div class="header-content-adress">
            <img
              width="15"
              height="15"
              src="img/svg/pin.svg"
              alt="pin"
              class="header-content-adress-image"
            />
            <address class="address">Восточно-Кругликовская улица, 86</address>
            <span class="time">Вт - Сб 10:00 - 20:00</span>
          </div>
          <h1 class="header-title">
            Запишитесь на бесплатный тест-драйв электросамокатов
          </h1>
          <p class="header-text">в Москве без ограничения по времени</p>
          <div class="header-feautures">
            <div class="header-feautures-item">
              <img
                class="header-feautures-icon"
                width="40"
                height="40"
                src="img/svg/scooter.svg"
                alt="scooter"
              />
              <span class="header-feautures-text">
                Поймете, какая модель вам подходит</span
              >
            </div>
            <div class="header-feautures-item">
              <img
                class="header-feautures-icon"
                width="40"
                height="40"
                src="img/svg/energy.svg"
                alt="energy"
              />
              <span class="header-feautures-text">
                Проверите лучшие самокаты в деле</span
              >
            </div>
          </div>
          <button type="submit" class="button-light" data-toggle="modal" data-target="#feedback-modal">Записаться</button>
        </div>
      </div>
    </header>
    <section class="test-drive">
      <div class="container-large">
        <div class="test-drive-wrapper">
          <div class="test-drive-content-top">
            <h2 class="title test-drive-title-top">
              Определите максимально подходящую вам модель не теоретически, а на
              практике
            </h2>
            <p class="test-drive-text">Тест-драйв поможет:</p>
            <ul class="test-drive-list">
              <li class="test-drive-list-item">
                <img
                  class="test-drive-list-icon"
                  width="22"
                  height="22"
                  src="img/svg/circle.svg"
                  alt="circle"
                />
                Понять подходит ли вам конкретная модель;
              </li>
              <li class="test-drive-list-item">
                <img
                  class="test-drive-list-icon"
                  width="22"
                  height="22"
                  src="img/svg/circle.svg"
                  alt="circle"
                />
                Испытать самокат в «реальной жизни»;
              </li>
              <li class="test-drive-list-item">
                <img
                  class="test-drive-list-icon"
                  width="22"
                  height="22"
                  src="img/svg/circle.svg"
                  alt="circle"
                />
                Оценить удобство хранения и эксплуатации;
              </li>
              <li class="test-drive-list-item">
                <img
                  class="test-drive-list-icon"
                  width="22"
                  height="22"
                  src="img/svg/circle.svg"
                  alt="circle"
                />
                Узнать реальные характеристики и возможности модели.
              </li>
            </ul>
          </div>
          <img
            class="test-drive-image"
            src="img/test-drive.jpg"
            alt="test-drive"
          />
        </div>
      </div>
    </section>
    <section class="test-drive">
      <div class="container-large">
        <div class="test-drive-wrapper">
          <img
            class="test-drive-image"
            src="img/test-drive-2.jpg"
            alt="test-drive"
          />
          <div class="test-drive-content-bottom">
            <h2 class="title test-drive-title-bottom">
              Научим правильной и безопасной езде в городе вас или вашего
              ребенка
            </h2>
            <p class="test-drive-text">На обучении специалист расскажет:</p>
            <ul class="test-drive-list">
              <li class="test-drive-list-item">
                <img
                  class="test-drive-list-icon"
                  width="22"
                  height="22"
                  src="img/svg/circle.svg"
                  alt="circle"
                />
                Как подготовить самокат к поездке;
              </li>
              <li class="test-drive-list-item">
                <img
                  class="test-drive-list-icon"
                  width="22"
                  height="22"
                  src="img/svg/circle.svg"
                  alt="circle"
                />
                Как «завести» самокат;
              </li>
              <li class="test-drive-list-item">
                <img
                  class="test-drive-list-icon"
                  width="22"
                  height="22"
                  src="img/svg/circle.svg"
                  alt="circle"
                />
                Как вести себя во время поездки и обезопасить себя и окружающих;
              </li>
              <li class="test-drive-list-item">
                <img
                  class="test-drive-list-icon"
                  width="22"
                  height="22"
                  src="img/svg/circle.svg"
                  alt="circle"
                />
                Как складывать и раскладывать электросамокат;
              </li>
              <li class="test-drive-list-item">
                <img
                  class="test-drive-list-icon"
                  width="22"
                  height="22"
                  src="img/svg/circle.svg"
                  alt="circle"
                />
                Как ухаживать за своим девайсом.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="models">
    <h2 class="models-title-glob">Сейчас для тест-драйва и обучения доступны следующие модели</h2>
      <div class="container-small container-models">
        <div class="swiper models-swiper">
          <!-- обертка слайдера -->
          <ul class="swiper-wrapper">
            <!-- слайды -->
            <li class="swiper-slide">
            <div class="card-wrapper">
              <img class="hit" src="img/svg/hit.svg" alt="hit" />
              <img
                class="balance"
                src="img/svg/balance-2.svg"
                alt="balance-2"
              />
              <img
                class="models-image"
                src="img/models-image.jpeg"
                alt="models-image"
              />
              <div class="slider-text">
                <h3 class="models-title">Kugoo Kirin M4</h3>
                <ul class="parametrs-list">
                  <li class="parametrs-list-item">
                    <img src="img/svg/accumulator.svg" alt="accumulator" />2000
                    mAh
                  </li>
                  <li class="parametrs-list-item">
                    <img src="img/svg/speedometer.svg" alt="speedometer" />60
                    км/ч
                  </li>
                  <li class="parametrs-list-item">
                    <img src="img/svg/power.svg" alt="power" />1,2 л.с.
                  </li>
                  <li class="parametrs-list-item">
                    <img src="img/svg/timer.svg" alt="timer" />5 часов
                  </li>
                </ul>
                <span class="sale">39 900 ₽</span>
                <h3 class="price">29 900 ₽</h3>
                <a href="#" class="circle-1">
                  <img
                    class="shopping-cart-2"
                    width="20"
                    height="20"
                    src="img/svg/shopping-cart-2.svg"
                    alt="shopping-cart-2"
                  />
                </a>
                <a href="#" class="circle-2">
                  <img
                    class="heart-2"
                    width="20"
                    height="20"
                    src="img/svg/heart-2.svg"
                    alt="heart-2"
                  />
                </a>
                <button class="button button-models" data-toggle="modal" data-target="#feedback-modal">
                  Записаться на тест-драйв
                </button>
              </div>
              </div>
            </li>
            <li class="swiper-slide">
            <div class="card-wrapper">
              <img class="hit" src="img/svg/new.svg" alt="new" />
              <img
                class="balance"
                src="img/svg/balance-2.svg"
                alt="balance-2"
              />
              <img
                class="models-image"
                src="img/models-image.jpeg"
                alt="models-image"
              />
              <div class="slider-text">
                <h3 class="models-title">Kugoo Kirin M4</h3>
                <ul class="parametrs-list">
                  <li class="parametrs-list-item">
                    <img src="img/svg/accumulator.svg" alt="accumulator" />2000
                    mAh
                  </li>
                  <li class="parametrs-list-item">
                    <img src="img/svg/speedometer.svg" alt="speedometer" />60
                    км/ч
                  </li>
                  <li class="parametrs-list-item">
                    <img src="img/svg/power.svg" alt="power" />1,2 л.с.
                  </li>
                  <li class="parametrs-list-item">
                    <img src="img/svg/timer.svg" alt="timer" />5 часов
                  </li>
                </ul>
                <span class="sale">39 900 ₽</span>
                <h3 class="price">29 900 ₽</h3>
                <a href="#" class="circle-1">
                  <img
                    class="shopping-cart-2"
                    width="20"
                    height="20"
                    src="img/svg/shopping-cart-2.svg"
                    alt="shopping-cart-2"
                  />
                </a>
                <a href="#" class="circle-2">
                  <img
                    class="heart-2"
                    width="20"
                    height="20"
                    src="img/svg/heart-2.svg"
                    alt="heart-2"
                  />
                </a>
                <button class="button button-models" data-toggle="modal" data-target="#feedback-modal">
                  Записаться на тест-драйв
                </button>
              </div>
              </div>  
            </li>
            <li class="swiper-slide">
            <div class="card-wrapper">
              <img class="hit" src="img/svg/hit.svg" alt="hit" />
              <img
                class="balance"
                src="img/svg/balance-2.svg"
                alt="balance-2"
              />
              <img
                class="models-image"
                src="img/models-image.jpeg"
                alt="models-image"
              />
              <div class="slider-text">
                <h3 class="models-title">Kugoo Kirin M4</h3>
                <ul class="parametrs-list">
                  <li class="parametrs-list-item">
                    <img src="img/svg/accumulator.svg" alt="accumulator" />2000
                    mAh
                  </li>
                  <li class="parametrs-list-item">
                    <img src="img/svg/speedometer.svg" alt="speedometer" />60
                    км/ч
                  </li>
                  <li class="parametrs-list-item">
                    <img src="img/svg/power.svg" alt="power" />1,2 л.с.
                  </li>
                  <li class="parametrs-list-item">
                    <img src="img/svg/timer.svg" alt="timer" />5 часов
                  </li>
                </ul>
                <span class="sale">39 900 ₽</span>
                <h3 class="price">29 900 ₽</h3>
                <a href="#" class="circle-1">
                  <img
                    class="shopping-cart-2"
                    width="20"
                    height="20"
                    src="img/svg/shopping-cart-2.svg"
                    alt="shopping-cart-2"
                  />
                </a>
                <a href="#" class="circle-2">
                  <img
                    class="heart-2"
                    width="20"
                    height="20"
                    src="img/svg/heart-2.svg"
                    alt="heart-2"
                  />
                </a>
                <button class="button button-models" data-toggle="modal" data-target="#feedback-modal">
                  Записаться на тест-драйв
                </button>
              </div>
              </div>
            </li>
            <li class="swiper-slide">
            <div class="card-wrapper">
              <img class="hit" src="img/svg/new.svg" alt="new" />
              <img
                class="balance"
                src="img/svg/balance-2.svg"
                alt="balance-2"
              />
              <img
                class="models-image"
                src="img/models-image.jpeg"
                alt="models-image"
              />
              <div class="slider-text">
                <h3 class="models-title">Kugoo Kirin M4</h3>
                <ul class="parametrs-list">
                  <li class="parametrs-list-item">
                    <img src="img/svg/accumulator.svg" alt="accumulator" />2000
                    mAh
                  </li>
                  <li class="parametrs-list-item">
                    <img src="img/svg/speedometer.svg" alt="speedometer" />60
                    км/ч
                  </li>
                  <li class="parametrs-list-item">
                    <img src="img/svg/power.svg" alt="power" />1,2 л.с.
                  </li>
                  <li class="parametrs-list-item">
                    <img src="img/svg/timer.svg" alt="timer" />5 часов
                  </li>
                </ul>
                <span class="sale">39 900 ₽</span>
                <h3 class="price">29 900 ₽</h3>
                <a href="#" class="circle-1">
                  <img
                    class="shopping-cart-2"
                    width="20"
                    height="20"
                    src="img/svg/shopping-cart-2.svg"
                    alt="shopping-cart-2"
                  />
                </a>
                <a href="#" class="circle-2">
                  <img
                    class="heart-2"
                    width="20"
                    height="20"
                    src="img/svg/heart-2.svg"
                    alt="heart-2"
                  />
                </a>
                <button class="button button-models" data-toggle="modal" data-target="#feedback-modal">
                  Записаться на тест-драйв
                </button>
              </div>
              </div>
            </li>
          </ul>
          <!-- <div class="slider-buttons">
          <div class="slider-button-prev">
            <img src="img/svg/arrow-prev.svg" alt="arrow-prev" />
          </div>
          <div class="slider-button-next">
            <img src="img/svg/arrow-next.svg" alt="arrow-next" />
          </div>
        </div> -->
          <!-- кнопки навигации вперед/назад -->
        </div>
      </div>
    </section>
    <section class="request">
      <div class="container-large">
        <div class="request-form-wrapper">
          <img src="img/form-photo.png" alt="form-photo" class="form-photo" />
          <form action="handler.php" method="POST" class="request-form form-glob">
            <h2 class="title request-form-title">Нет нужной модели, которую хотите протестировать?</h2>
            <p class="request-form-text">
              Оставьте заявку, и менеджер подберет нужный самокат
            </p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input
                 name="userphone"
                  id="user-phone"
                  type="tel"
                  class="input phone-mask"
                  placeholder="+7 (___) __ - __ - __"
                />
                <button type="submit" class="button button-request">Оставить заявку на тест-драйв</button>
              </div>
            </div>
            <div class="checkbox-wrapper">
            <input name="agree" class="checkbox-pointer" type="checkbox" id="agree">
                <label for="agree">
                <p class="checkbox-text">Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и <a href="#" class="policy">политикой конфиденциальности</a></p>
                </label>
              </div>
          </form>
        </div>
        </div>
      </div>
    </section>
    <section class="form-footer">
      <div class="form-footer-wrapper">
      <h2 class="form-footer-text">Оставьте свою почту и станьте первым, кто получит скидку на новые самокаты</h2>
      <form action="handlermail.php" method="POST" class="footer-form" id="form">
        <div class="input-group-wrapper">
          <div class="footer-input-group">
            <input
              name="usermail"
              id="user-email"
              type="email"
              class="input-mail footer-input"
              placeholder="Введите Ваш email"
            />
            <button type="submit" class="button button-form-footer">Подписаться</button>
          </div>
        </div>
      </form>
    </div>
    </section>
    <footer class="footer">
      <div class="container-small">
        <div class="footer-top">
          <div class="footer-catalog-wrapper">
          <h2 class="footer-title">Каталог товаров</h2>
          <ul class="footer-catalog">
            <li class="footer-catalog-item"><a href="#" class="footer-menu-link">Электросамокаты</a></li>
            <li class="footer-catalog-item"><a href="#" class="footer-menu-link">Электроскутеры</a></li>
            <li class="footer-catalog-item"><a href="#" class="footer-menu-link">Электровелосипеды</a></li>
            <li class="footer-catalog-item"><a href="#" class="footer-menu-link">Электровелосипеды</a></li>
          </ul>
        </div>
        <div class="footer-buyer-wrapper">
          <h2 class="footer-title">Покупателям</h2>
          <ul class="footer-buyer">
            <li class="footer-catalog-item"><a href="#" class="footer-menu-link">Сервисный центр</a></li>
            <li class="footer-catalog-item"><a href="#" class="footer-menu-link">Доставка и оплата</a></li>
            <li class="footer-catalog-item"><a href="#" class="footer-menu-link">Рассрочка</a></li>
            <li class="footer-catalog-item"><a href="#" class="footer-menu-link">Тест-драйв</a></li>
            <li class="footer-catalog-item"><a href="#" class="footer-menu-link">Блог</a></li>
            <li class="footer-catalog-item"><a href="#" class="footer-menu-link">Сотрудничество</a></li>
            <li class="footer-catalog-item"><a href="#" class="footer-menu-link">Контакты</a></li>
            <li class="footer-catalog-item"><a href="#" class="footer-menu-link">Акции</a></li>
          </div>
            <div class="footer-contacts-wrapper">
              <div class="footer-call-center-wrapper">
                <h2 class="footer-title">Контакты</h2>
              <p class="call-center">Call-центр</p>
              <a href="tel:+78005055461" class="footer-phone">+7 (800) 505-54-61</a>
              <p class="footer-time">Пн-Вс 10:00 - 20:00</p>
            </div>
            <div class="footer-service-center-wrapper">
              <p class="call-center">Сервисный центр</p>
              <a href="tel:+74993507692" class="footer-phone">+7 (499) 350-76-92</a>
              <p class="footer-time">Пн-Вс 10:00 - 20:00</p>
            </div>
            </div>
          </ul>
          <a href="#" class="call" data-toggle="modal" data-target="#feedback-modal">Заказать звонок</a>
        </div>
        <hr class="hr">
        <div class="footer-midle">
          <a href="./" class="logo footer-logo">KUGOO</a>
          <a href="./" class="logo-center footer-logo-center">KUGOO</a>
          <div class="badge-wrapper">
            <a class="badge" href="#"><img src="img/svg/google.svg" alt="google"></a>
            <a class="badge" href="#"><img src="img/svg/app.svg" alt="app"></a>
          </div>
        <div class="social-wrapper">
          <button type="submit" class="button-social">
            <div class="social">
            <img src="img/svg/vk.svg" alt="vk" class="social-image">
            <span class="social-name">Вконтакте</span>
            <span class="social-users">3 300</span>
          </div>
          </button>
          <button type="submit" class="button-social">
            <div class="social">
            <img src="img/svg/yt.svg" alt="yt" class="social-image">
            <span class="social-name">YouTube</span>
            <span class="social-users">3 603</span>
          </div>
          </button>
          <button type="submit" class="button-social">
            <div class="social">
            <img src="img/svg/tg.svg" alt="tg" class="social-image">
            <span class="social-name">Telegram</span>
            <span class="social-users">432</span>
            </div>
          </button>
        </div>
        </div>
        <hr class="hr hr-footer">
        <div class="footer-bottom">
          <div class="footer-bottom-info">
            <a href="#" class="footer-bottom-link">Реквизиты</a>
            <a href="#" class="footer-bottom-link">Политика конфиденциальности</a>
          </div>
          <div class="footer-bottom-card">
            <a href="" class="footer-bottom-card-item"><img src="img/svg/gpay.svg" alt="gpay"></a>
            <a href="" class="footer-bottom-card-item"><img src="img/svg/apay.svg" alt="apay"></a>
            <a href="" class="footer-bottom-card-item"><img src="img/svg/visa.svg" alt="visa"></a>
            <a href="" class="footer-bottom-card-item"><img src="img/svg/mastercard.svg" alt="mastercard"></a>
            <a href="" class="footer-bottom-card-item"><img src="img/svg/jvc.svg" alt="jvc"></a>
            <a href="" class="footer-bottom-card-item"><img src="img/svg/wm.svg" alt="wm"></a>
            <a href="" class="footer-bottom-card-item"><img src="img/svg/qiwi.svg" alt="qiwi"></a>
          </div>
          <div class="online-chat">
            <p class="ohline-chat-text">Online чат:</p>
            <div class="online-chat-icon">
              <a href="" class="online-chat-item"><img width="16" height="16" src="img/svg/viber.svg" alt="viber"></a>
              <a href="" class="online-chat-item"><img width="16" height="16" src="img/svg/whatsapp.svg" alt="whatsapp"></a>
              <a href="" class="online-chat-item"><img width="16" height="16" src="img/svg/telegram.svg" alt="tg"></a>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <div class="modal" id="feedback-modal">
      <div class="modal-dialog">
        <div class="modal-dialog-wrapper">
          <div class="modal-dialog-content">
        <h2 class="modal-title">Запишитесь натест-драйв электросамоката</h2>
        <p class="modal-text-top">и подберите модель для себя</p>
        <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
          <img width="20" height="20" src="img/svg/modal-close.svg" alt="modal-close" class="modal-close-icon">
        </a>
        <p class="modal-text">
          Менеджер свяжется с вами в течение 5 минут, чтобы согласовать время.
        </p>
        <p class="modal-text-bottom">Как с вами удобнее связаться?</p>
        <form action="handler.php" method="POST" class="modal-form form-glob">
          <div class="input-group-wrapper input-group-vertical">
            <div class="input-group modal-input-group">
              <input
                id="modal-user-phone"
                type="tel"
                class="input modal-input phone-mask"
                name="userphone"
                placeholder="+7 (___) __ - __ - __"
                maxlength="30"
                required
              />
            </div>
          </div>
          <div class="modal-form-footer">
            <button type="submit" class="button modal-form-button">
              Оформить предзаказ
            </button>
            <div class="notify modal-notify">
            <input name="agree" class="checkbox-pointer checkbox-pointer-modal" type="checkbox" id="agree-modal">
                <label class="modal-checkbox" for="agree-modal">
                <p class="modal-checkbox-text">Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и <a href="#" class="modal-policy">политикой конфиденциальности</a></p>
                </label>
          </div>
          </div> 
        </form>
      </div>
        <img class="modal-image" src="img/modal-image.jpg" alt="modal-image">
      </div>
      </div>
    </div>
    </div>
    <div class="modal" id="alert-modal">
      <div class="modal-dialog">
        <a href="#" class="modal-close" data-toggle="modal" data-target="#alert-modal">
        <img width="20" height="20" src="img/svg/modal-close.svg" alt="modal-close" class="modal-close-icon">
        </a>
        <h2 class="modal-title">Спасибо за заявку!</h2>
        <p class="modal-text">
        Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
        </p>
        <button type="submit" class="button modal-form-button" data-toggle="modal-close">
        Вернуться на главную
            </button>
      </div>
    </div>
    <script src="js/just-validate.production.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
