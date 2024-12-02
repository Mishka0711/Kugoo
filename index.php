<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>KUGOO</title>
  </head>
  <body>
    <section class="section-header">
      <div class="container">
        <div class="header-nav">
          <ul class="header-nav-list">
            <li class="header-nav-item">
              <a href="#" class="header-nav-link">Сервис</a>
            </li>
            <li class="header-nav-item">
              <a href="#" class="header-nav-link">Сотрудничество</a>
            </li>
            <li class="header-nav-item">
              <a href="#" class="header-nav-link" data-toggle="modal" data-target="#feedback-modal">Заказать звонок</a>
            </li>
            <li class="header-nav-item">
              <div class="nav-svg-links">
                <a href="#" class="header-nav-link-icon">
                  <svg class="header-nav-link-icon" width="12" height="12">
                    <use href="img/sprite.svg#viber_1"></use>
                  </svg>
                </a>   
                <a href="#" class="header-nav-link-icon">
                  <svg class="header-nav-link-icon" width="12" height="12">
                    <use href="img/sprite.svg#whatsapp_1"></use>
                  </svg>
                </a>   
                <a href="#" class="header-nav-link-icon">
                  <svg class="header-nav-link-icon" width="12" height="12">
                    <use href="img/sprite.svg#telegram_1"></use>
                  </svg>
                </a>  
              </div>
              <!-- /.svg-links-container -->
            </li>
          </ul>
          <a href="tel:+78005055461" class="header-phone-link"
            >+7 (800) 505-54-61</a
          >
        </div>
        <!-- /.header-nav -->
      </div>
      <hr class="header-separator" />
      <div class="container">
        <div class="header-search">        
            <a href="./index.php" class="header-logo">
              <h1 class="header-logo-title">KUGOO</h1></a>            
          <a href="#" class="button catalog-button">
            <div class="catalog-lines">
              <div class="catalog-line"></div>
              <div class="catalog-line"></div>
              <div class="catalog-line"></div>
            </div>
            <span class="catalog-text">Каталог</span> 
            <!-- <p class="catalog-button-text">Каталог</p> -->
          </a>
          <div class="search-box">
            <input
            id="search-name"
              type="text"
              class="search-input"
              name="searchname"
              placeholder="Искать самокат KUGO"
            />
            <button class="button  search-button">
              <svg class="header-nav-link-icon" width="16" height="16">
                <use href="img/sprite.svg#search"></use>
              </svg>
            </button>
          </div>
          <div class="search-links-group">
            <img src="img/balance.svg" width="20" height="20" alt="">
            <svg class="search-link-icon" width="20" height="20">
              <use href="img/sprite.svg#heart"></use>
            </svg>
            <div class="cart-group">
              <svg class="search-link-icon" width="20" height="20">
                <use href="img/sprite.svg#cart"></use>
              </svg>
              <p class="cart-text" >Корзина</p>
            </div>
          </div>
        </div>
        <!-- /.header-search -->
      </div>
    </section>
    <!-- /.section-header -->
    <section class="section-test-drive">
      <div class="container test-drive-container">
        <div class="test-drive-adress">
          <svg class="test-drive-adress-icon" width="16" height="16">
            <use href="img/sprite.svg#mestopol"></use>
          </svg>  
          <p class="test-drive-adress-text">
            Восточно-Кругликовская улица, 86
          </p>
          <p class="test-drive-adress-text test-drive-adress-time">
            Вт - Сб 10:00 - 20:00
          </p>          
        </div>

        <h2 class="test-drive-title"> Запишитесь на бесплатный тест-драйв электросамокатов</h2>
        <p class="test-drive-subtitle">в Москве без ограничения по времени</p>
        <div class="options-group">
          <div class="option-item">                       
            <div class="option-item-icon">
              <img src="img/option_1.png" alt="" class="option-item-icon-img">
            </div>
            <p class="option-item-text">
              Поймете, какая модель вам подходит
            </p>          
          </div>
          <div class="option-item">
            <div class="option-item-icon">
              <img src="img/option_2.png" alt="" class="option-item-icon-img">
            </div>
            <p class="option-item-text">
              Проверите лучшие самокаты в деле
            </p>            
          </div>          
        </div>
        <button class="button  make-button" data-toggle="modal" data-target="#feedback-modal">
          <!-- <p class="make-button-text">Записаться</p> -->
          Записаться
        </button> 
      </div>      
    </section>
    <!-- /.test-drive -->
    <section class="section-block1">     
      <div class="container block1-container">      
        <div class="block1-content-wrapper">
          <h2 class="block1-title">
            Определите максимально подходящую вам модель не теоретически, а на практике
          </h2>
          <p class="block1-subtitle">
            Тест-драйв поможет:
          </p>
          <ul class="block1-list">
            <li class="block1-item">
              <div class="block1-item-ic-container" >
                <svg width="22" height="22" class="client-list-icon">
                  <use href="img/sprite.svg#galka"></use>
                </svg>    
              </div> 
              <b>Понять</b> подходит ли вам конкретная модель;        
            </li>
            <li class="block1-item">
              <div class="block1-item-ic-container" >
                <svg width="22" height="22" class="client-list-icon">
                  <use href="img/sprite.svg#galka"></use>
                </svg>    
              </div>
              <b>Испытать </b> самокат в «реальной жизни»;        
            </li>
            <li class="block1-item">
              <div class="block1-item-ic-container" >
                <svg width="22" height="22" class="client-list-icon">
                  <use href="img/sprite.svg#galka"></use>
                </svg>    
              </div>   
              <b>Оценить</b> удобство хранения и эксплуатации;       
            </li>
            <li class="block1-item" >
              <div class="block1-item-ic-container" >
                <svg width="22" height="22" class="client-list-icon">
                  <use href="img/sprite.svg#galka"></use>
                </svg>    
              </div>
              <b>Узнать</b> реальные характеристики и возможности модели.       
            </li>                                    
          </ul>
        </div>
        <img src="img/block1.png" alt="" class="block1-photo" />
      </div>
    </section>
<!-- /.section-block1-->

<section class="section-block1">     
  <div class="container block2-container">      
    <div class="block1-content-wrapper">
      <h2 class="block1-title">
        Научим правильной <br> и безопасной езде в городе вас или вашего ребенка
      </h2>
      <p class="block1-subtitle">
        На обучении специалист расскажет:
      </p>
      <ul class="block1-list">
        <li class="block1-item">
          <div class="block1-item-ic-container" >
            <svg width="22" height="22" class="client-list-icon">
              <use href="img/sprite.svg#galka"></use>
            </svg>    
          </div> 
          Как подготовить самокат к поездке;        
        </li>
        <li class="block1-item">
          <div class="block1-item-ic-container" >
            <svg width="22" height="22" class="client-list-icon">
              <use href="img/sprite.svg#galka"></use>
            </svg>    
          </div>
          Как «завести» самокат;      
        </li>
        <li class="block1-item">
          <div class="block1-item-ic-container" >
            <svg width="22" height="22" class="client-list-icon">
              <use href="img/sprite.svg#galka"></use>
            </svg>    
          </div>   
          Как вести себя во время поездки и обезопасить себя и окружающих;       
        </li>
        <li class="block1-item" >
          <div class="block1-item-ic-container">
            <svg width="22" height="22" class="client-list-icon">
              <use href="img/sprite.svg#galka"></use>
            </svg>    
          </div>
          Как складывать и раскладывать электросамокат;       
        </li>   
        <li class="block1-item" >
          <div class="block1-item-ic-container" >
            <svg width="22" height="22" class="client-list-icon">
              <use href="img/sprite.svg#galka"></use>
            </svg>    
          </div>
          Как ухаживать за своим девайсом.      
        </li>                                          
      </ul>
    </div>
    <img src="img/block2.png" alt="" class="block2-photo" />
  </div>
</section>
<!-- /.section-block2-->
<section class="section-assort">
  <div class="container">
    <div class="cards-block-title-cont">
      <h2 class="cards-block-title ">
        Сейчас для тест-драйва и обучения доступны следующие модели
      </h2> 
    </div>  
    <div class="block-cards">
      <div class="card-container">
        <div class="card-img-container">
          <img src="img/card1.png" alt="" class="card-photo" />
          <img src="img/hit.png" alt="" class="card-type" />
          <a href="" class="card-compare"> 
            <img src="img/compare2.png" alt="" class="card-img-compare" />          
          </a>
        </div>
        <h3 class="card-title">Kugoo Kirin M4</h3>
        <div class="card-options">          
          <ul class="card-options-list">
            <li class="card-options-item">
              <div class="card-option-icon-cont">
                <svg width="18" height="18" class="client-list-icon">
                  <use href="img/sprite.svg#opt-akkum"></use>
                </svg>    
              </div> 
              2000 mAh       
            </li>
            <li class="card-options-item">
              <div class="card-option-icon-cont">
                <svg width="18" height="18" class="client-list-icon">
                  <use href="img/sprite.svg#opt-speed"></use>
                </svg>    
              </div> 
              60 км/ч     
            </li>        
            <li class="card-options-item">
              <div class="card-option-icon-cont">
                <svg width="18" height="18" class="client-list-icon">
                  <use href="img/sprite.svg#opt-power"></use>
                </svg>    
              </div> 
              1,2 л.с.     
            </li>     
            <li class="card-options-item">
              <div class="card-option-icon-cont">
                <svg width="18" height="18" class="client-list-icon">
                  <use href="img/sprite.svg#opt-timework"></use>
                </svg>    
              </div> 
              5 часов       
            </li>                                                           
          </ul>
        </div>
        <div class="card-market">
          <div class="card-price-block">
            <p class="oldprice">39 900 ₽</p>
            <p class="realprice">29 900 ₽</p>
          </div>
          <div class="card-icons-block">
            <a href="" class="card-price-icon"> 
              <svg width="20" height="20" class="client-list-icon">
                <use href="img/sprite.svg#card-cart"></use>
              </svg>         
            </a>
            <a href="" class="card-price-icon"> 
              <svg width="20" height="20"  class="client-list-icon">
                <use href="img/sprite.svg#card-like"></use>
              </svg>         
            </a>   
          </div>         
        </div>  
        <button class="button make-button2" data-toggle="modal" data-target="#feedback-modal">
          <span class="make-button-text2">
            Записаться на тест-драйв
          </span>          
        </button>      
      </div>
      <div class="card-container">
        <div class="card-img-container">
          <img src="img/card1.png" alt="" class="card-photo" />
          <img src="img/new.png" alt="" class="card-type" />
          <a href="" class="card-compare"> 
            <img src="img/compare2.png" alt="" class="card-img-compare" />          
          </a>
        </div>
        <h3 class="card-title">Kugoo Kirin M4</h3>
        <div class="card-options">          
          <ul class="card-options-list">
            <li class="card-options-item">
              <div class="card-option-icon-cont">
                <svg width="18" height="18" class="client-list-icon">
                  <use href="img/sprite.svg#opt-akkum"></use>
                </svg>    
              </div> 
              2000 mAh       
            </li>
            <li class="card-options-item">
              <div class="card-option-icon-cont">
                <svg width="18" height="18" class="client-list-icon">
                  <use href="img/sprite.svg#opt-speed"></use>
                </svg>    
              </div> 
              60 км/ч     
            </li>        
            <li class="card-options-item">
              <div class="card-option-icon-cont">
                <svg width="18" height="18" class="client-list-icon">
                  <use href="img/sprite.svg#opt-power"></use>
                </svg>    
              </div> 
              1,2 л.с.     
            </li>     
            <li class="card-options-item">
              <div class="card-option-icon-cont">
                <svg width="18" height="18" class="client-list-icon">
                  <use href="img/sprite.svg#opt-timework"></use>
                </svg>    
              </div> 
              5 часов       
            </li>                                                           
          </ul>
        </div>
        <div class="card-market">
          <div class="card-price-block">
            <p class="oldprice">39 900 ₽</p>
            <p class="realprice">29 900 ₽</p>
          </div>
          <div class="card-icons-block">
            <a href="" class="card-price-icon"> 
              <svg width="20" height="20" class="client-list-icon">
                <use href="img/sprite.svg#card-cart"></use>
              </svg>         
            </a>
            <a href="" class="card-price-icon"> 
              <svg width="20" height="20"  class="client-list-icon">
                <use href="img/sprite.svg#card-like"></use>
              </svg>         
            </a>   
          </div>         
        </div>  
        <button class="button make-button2" data-toggle="modal" data-target="#feedback-modal">
          <span class="make-button-text2">
            Записаться на тест-драйв
          </span>          
        </button>      
      </div>
      <div class="card-container">
        <div class="card-img-container">
          <img src="img/card1.png" alt="" class="card-photo" />
          <img src="img/hit.png" alt="" class="card-type" />
          <a href="" class="card-compare"> 
            <img src="img/compare2.png" alt="" class="card-img-compare" />          
          </a>
        </div>
        <h3 class="card-title">Kugoo Kirin M4</h3>
        <div class="card-options">          
          <ul class="card-options-list">
            <li class="card-options-item">
              <div class="card-option-icon-cont">
                <svg width="18" height="18" class="client-list-icon">
                  <use href="img/sprite.svg#opt-akkum"></use>
                </svg>    
              </div> 
              2000 mAh       
            </li>
            <li class="card-options-item">
              <div class="card-option-icon-cont">
                <svg width="18" height="18" class="client-list-icon">
                  <use href="img/sprite.svg#opt-speed"></use>
                </svg>    
              </div> 
              60 км/ч     
            </li>        
            <li class="card-options-item">
              <div class="card-option-icon-cont">
                <svg width="18" height="18" class="client-list-icon">
                  <use href="img/sprite.svg#opt-power"></use>
                </svg>    
              </div> 
              1,2 л.с.     
            </li>     
            <li class="card-options-item">
              <div class="card-option-icon-cont">
                <svg width="18" height="18" class="client-list-icon">
                  <use href="img/sprite.svg#opt-timework"></use>
                </svg>    
              </div> 
              5 часов       
            </li>                                                           
          </ul>
        </div>
        <div class="card-market">
          <div class="card-price-block">
            <p class="oldprice">39 900 ₽</p>
            <p class="realprice">29 900 ₽</p>
          </div>
          <div class="card-icons-block">
            <a href="" class="card-price-icon"> 
              <svg width="20" height="20" class="client-list-icon">
                <use href="img/sprite.svg#card-cart"></use>
              </svg>         
            </a>
            <a href="" class="card-price-icon"> 
              <svg width="20" height="20"  class="client-list-icon">
                <use href="img/sprite.svg#card-like"></use>
              </svg>         
            </a>   
          </div>         
        </div>  
        <button class="button make-button2" data-toggle="modal" data-target="#feedback-modal">
          <span class="make-button-text2">
            Записаться на тест-драйв
          </span>          
        </button>      
      </div>
      <div class="card-container">
        <div class="card-img-container">
          <img src="img/card1.png" alt="" class="card-photo" />
          <img src="img/new.png" alt="" class="card-type" />
          <a href="" class="card-compare"> 
            <img src="img/compare2.png" alt="" class="card-img-compare" />          
          </a>
        </div>
        <h3 class="card-title">Kugoo Kirin M4</h3>
        <div class="card-options">          
          <ul class="card-options-list">
            <li class="card-options-item">
              <div class="card-option-icon-cont">
                <svg width="18" height="18" class="client-list-icon">
                  <use href="img/sprite.svg#opt-akkum"></use>
                </svg>    
              </div> 
              2000 mAh       
            </li>
            <li class="card-options-item">
              <div class="card-option-icon-cont">
                <svg width="18" height="18" class="client-list-icon">
                  <use href="img/sprite.svg#opt-speed"></use>
                </svg>    
              </div> 
              60 км/ч     
            </li>        
            <li class="card-options-item">
              <div class="card-option-icon-cont">
                <svg width="18" height="18" class="client-list-icon">
                  <use href="img/sprite.svg#opt-power"></use>
                </svg>    
              </div> 
              1,2 л.с.     
            </li>     
            <li class="card-options-item">
              <div class="card-option-icon-cont">
                <svg width="18" height="18" class="client-list-icon">
                  <use href="img/sprite.svg#opt-timework"></use>
                </svg>    
              </div> 
              5 часов       
            </li>                                                           
          </ul>
        </div>
        <div class="card-market">
          <div class="card-price-block">
            <p class="oldprice">39 900 ₽</p>
            <p class="realprice">29 900 ₽</p>
          </div>
          <div class="card-icons-block">
            <a href="" class="card-price-icon"> 
              <svg width="20" height="20" class="client-list-icon">
                <use href="img/sprite.svg#card-cart"></use>
              </svg>         
            </a>
            <a href="" class="card-price-icon"> 
              <svg width="20" height="20"  class="client-list-icon">
                <use href="img/sprite.svg#card-like"></use>
              </svg>         
            </a>   
          </div>         
        </div>  
        <button class="button make-button2" data-toggle="modal" data-target="#feedback-modal">
          <span class="make-button-text2">
            Записаться на тест-драйв
          </span>          
        </button>      
      </div>
                        
    </div>
  </div>
</section>
   <section class="cta-section">
    <img src="./img/portrait-woman.png" alt="call to action" class="cta-image" />
      <div class="container">
        <div class="cta-content-wrapper">
          <form action="/handler.php" method="POST" class="cta-form phone-form" >
            <h2 class="cta-form-title">Нет нужной модели, которую хотите протестировать?</h2>
            <p class="cta-form-subtitle">
              Оставьте заявку, и менеджер подберет нужный самокат
            </p>
            <div class="input-group">
              <input
                id="user-phone"
                type="tel"
                class="input phone-mask"
                name="userphone"
                placeholder="Введите телефон"
                maxlength="30"
                required
              />            
              <button type="submit" class=" button  make-button3"  >
                Оставить заявку на тест-драйв
              </button>            
            </div>
            <div class="policy-group">
              <button type="button" class="button button-galka">
                <svg width="22" height="22" class="client-list-icon-policy cl_invisible">
                  <use href="img/sprite.svg#galka2"></use>
                </svg> 
              </button>
              <p class="policy-group-text">
                Нажимая на кнопку, вы соглашаетесь на обработку <br> персональных данных и <a href="" class="policy-link2">политикой конфиденциальности</a> 
              </p>
            </div>
            
            <!-- /.input-group -->          
          </form>
        </div>        
      </div>
   </section> 
   <footer class="footer">
    <div class="footer-top">
    <form action="/handler.php" method="POST" class="cta-form" id="mail-form">
     <div class="container footer-top-cont">
        <h2 class="footer-email-title">
          Оставьте свою почту и станьте первым, кто получит скидку на новые самокаты
        </h2>
        <div class="input-email-group">
          <input
            id="user-email"
            type="email"
            class="input email-mask"
            name="usermail"
            placeholder="Введите Ваш email"
            maxlength="30"
            required
          />                      
          <button type="submit" class="button make-button4" >
            Подписаться
          </button>            
        </div>       
      </div>
    </form>      

    </div>
    <div class="container">
      <div class="footer-body">
        <div class="fb-menu-block">
          <div class="footer-body-cat">
            <h3 class="footer-body-title">
              Каталог товаров
            </h3>
            <ul class="footer-body-list">
              <li class="footer-body-item">
                <a href="" class="fb-item-link">Электросамокаты</a> </li>
              <li class="footer-body-item">
                <a href="" class="fb-item-link">Электроскутеры</a> </li>
              <li class="footer-body-item">
                <a href="" class="fb-item-link">Электровелосипеды</a> </li>
              <li class="footer-body-item">
                <a href="" class="fb-item-link">Электровелосипеды</a> </li>
            </ul>
          </div>
          <div class="footer-body-bayers">
            <h3 class="footer-body-title">
              Покупателям
            </h3>
            <ul class="footer-body-list fb-list2 fb-list3">
              <li class="footer-body-item">
                <a href="" class="fb-item-link">Сервисный центр</a> </li>
              <li class="footer-body-item">
                <a href="" class="fb-item-link">Доставка и оплата</a> </li>
              <li class="footer-body-item">
                <a href="" class="fb-item-link">Рассрочка</a> </li>
              <li class="footer-body-item">
                <a href="" class="fb-item-link">Тест-драйв</a> </li>
              <li class="footer-body-item">
                <a href="" class="fb-item-link">Блог</a> </li>
              <li class="footer-body-item">
                <a href="" class="fb-item-link">Сотрудничество</a> </li>
              <li class="footer-body-item">
                <a href="" class="fb-item-link">Контакты</a> </li>
              <li class="footer-body-item">
                <a href="" class="fb-item-link">Акции</a> </li>            
            </ul>
          </div>        
        </div>
        <div class="fb-contact-block">
          <div class="footer-body-bayers">
            <h3 class="footer-body-title">
              Контакты
            </h3>
            <ul class="footer-body-list fb-list2">
              <li class="footer-body-item fb-item-contact">
                <p class="fb-item-name">Call-центр</p>
                <a href="tel:+78005055461" class="fb-item-phone-link"
              >+7 (800) 505-54-61</a>
                <p class="fb-item-timework">Пн-Вс 10:00 - 20:00</p>
              </li>
              <li class="footer-body-item fb-item-contact">
                <p class="fb-item-name">Сервисный центр</p>
                <a href="tel:+74993507692" class="fb-item-phone-link"
              >+7 (499) 350-76-92</a>              
                <p class="fb-item-timework">Пн-Вс 10:00 - 20:00</p>
              </li>
            
            </ul>
          </div>  
          <a href="#" class="fb-item-call-to-my" data-toggle="modal" data-target="#feedback-modal">
            Заказать звонок
          </a>
        </div> 
        </div>
        
      <hr class="footer-separator" />  
      <div class="footer-bottom1">
      <a href="./index.php" class="header-logo">
              <h1 class="header-logo-title">KUGOO</h1></a>     
        <div class="store-count-block">
          <div class="store-blocks">
            <a href="#" class="store-link">
              <img src="./img/google-store.png" alt="google-store" class="store-image" />
            </a>
            <a href="#" class="store-link">
              <img src="./img/app-store.png" alt="google-store" class="store-image" />
            </a>  
          </div>
          <div class="count-blocks">
            <a href="#"  class="button count-button" >
              <svg width="20" height="20" class="client-list-icon">
                <use href="img/sprite.svg#vk-count"></use>
              </svg>        
              <div class="count-content-block">
                <span class="count-content-block-title">Вконтакте</span>
                <span class="count-content-block-text">3 300</span>
              </div>
            </a>   
            <a href="#"  class="button count-button" >
              <svg width="20" height="20" class="client-list-icon">
                <use href="img/sprite.svg#yt-count"></use>
              </svg>        
              <div class="count-content-block">
                <span class="count-content-block-title">YouTube</span>
                <span class="count-content-block-text">3 603</span>
              </div>
            </a> 
            <a href="#" class="button count-button" >
              <svg width="20" height="20" class="client-list-icon">
                <use href="img/sprite.svg#tg-count"></use>
              </svg>        
              <div class="count-content-block">
                <span class="count-content-block-title">Telegram</span>
                <span class="count-content-block-text">432</span>
              </div>
            </a> 
          </div>
        </div>

      </div>
      <hr class="footer-separator" /> 
      <div class="footer-bottom2">
        <div class="policy-block">
          <a href="#" class="policy-link">
            Реквизиты
          </a>
          <a href="#" class="policy-link">
            Политика конфиденциальности
          </a>          
        </div>
        <div class="payment-block">
          <a href="#" class="policy-link">
            <img src="./img/payments/ggl-pay.png" alt="ggl-pay" class="pay-image" />
          </a>
          <a href="#" class="policy-link">
            <img src="./img/payments/app-pay.png" alt="app-pay" class="pay-image" />
          </a>
          <a href="#" class="policy-link">
            <img src="./img/payments/visa-pay.png" alt="visa-pay" class="pay-image" />
          </a>
          <a href="#" class="policy-link">
            <img src="./img/payments/mc-pay.png" alt="mc-pay" class="pay-image" />
          </a>
          <a href="#" class="policy-link">
            <img src="./img/payments/wu-pay.png" alt="wu-pay" class="pay-image" />
          </a>
          <a href="#" class="policy-link">
            <img src="./img/payments/wm-pay.png" alt="wm-pay" class="pay-image" />
          </a>
          <a href="#" class="policy-link">
            <img src="./img/payments/qiwi-pay.png" alt="qiwi-pay" class="pay-image" />
          </a>                                                                              
        </div>
        <div class="chat-block">
            <p class="chat-block-text"> Online чат:</p>
            <a href="#" class="footer-nav-link">
              <svg class="header-nav-link-icon" width="16" height="16">
                <use href="img/sprite.svg#viber_1"></use>
              </svg>
            </a>   
            <a href="#" class="footer-nav-link">
              <svg class="header-nav-link-icon" width="16" height="16">
                <use href="img/sprite.svg#whatsapp_1"></use>
              </svg>
            </a>   
            <a href="#" class="footer-nav-link">
              <svg class="header-nav-link-icon" width="16" height="16">
                <use href="img/sprite.svg#telegram_1"></use>
              </svg>
            </a>                           
        </div>
      </div>
    </div>

   </footer>
   <div class="modal" id="feedback-modal">
      <div class="modal-dialog">
        <div class="modal-content-wrapper">                    
          <div class="modal-title-block">
            <h2 class="modal-title">
              Запишитесь на <br> тест-драйв электросамоката
            </h2>
            <p class="modal-subtitle">
              и подберите модель для себя
            </p>
            <p class="modal-text">
              Менеджер свяжется с вами в течение 5 минут, чтобы согласовать время.
            </p>
          </div>
          <div class="modal-contacts-block">
            <p class="modal-text-2">
              Как с вами удобнее связаться?
            </p>  
            <form action="/handler.php" method="POST" class="modal-form phone-form" >
              <div class="input-group ">
                <input
                  id="modal-user-phone"
                  type="tel"
                  class="input  phone-mask modal-input"
                  name="userphone"
                  placeholder=" "
                  maxlength="30"
                  required
                />                     
              </div>
              <button type="submit" class="button modal-form-button ">
                Оформить предзаказ
              </button>
            </form>
            <!-- /.input-group-wrapper -->
            <div class="modal-form-footer modal-form-footer1">
              <div class="policy-group">
                <button type="button" class="button button-galka modal-button-galka">
                  <svg width="22" height="22" class="client-list-icon-policy cl_invisible">
                    <use href="img/sprite.svg#galka2"></use>
                  </svg> 
                </button>
                <p class="policy-group-text">
                  Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и <a href="" class="policy-link2">политикой конфиденциальности</a> 
                </p>
              </div>
            </div>
          </div>
          <!-- /.modal-form-footer -->        
        </div>             
      <img src="img/modal.png" alt="" class="modal-img-cont">
      <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
        <svg class="close-icon" width="20" height="20">
          <use href="img/sprite.svg#mw_close"></use>
        </svg>
      </a>
      </div> 
   </div>
   
   <script src="js/just-validate.production.min.js"></script>
   <script src="js/main.js"></script>
  </body>
</html>
