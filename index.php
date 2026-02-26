<?php require_once 'text.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <?php
    $urlProduct = '/lander/---/index_files/s1.webp'; // Example --- /lander/amazon---fr---boxes_1730903132/assets/img/product1.webp
    $urlLogo = '/lander/---/index_files/logo-main.webp'; // Example --- /lander/amazon---fr---boxes_1730903132/assets/img/product1.webp
    $text = $mainPage['upTitle'];
    $title = $mainPage['title'];
    ?>
    
    <meta name="referrer" content="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Demo Brand Mystery Box</title>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="icon" type="image/gif" href="./index_files/favicon.svg" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" type="text/css" href="./index_files/styles.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="./index_files/main.css" />

</head>

<body>
    <header id="id1" class="header">
        <div class="cont" styke="width:90%">
            <div class="header__inner">
                <div class="header__top" style="padding-bottom: 20px;">
                    <div class="header__desc">
                        
                        <img class="header__logo" id="scrollN" src="./index_files/logoTest.svg" alt="" />
                    </div>
                    <script>
  document.getElementById('scrollN').addEventListener('click', function() {
    document.getElementById('quiz').scrollIntoView({ behavior: 'smooth' });
  });
</script>

                    <!-- <div class="header__form" style="width: 40%; background-color: rgba(0,0,0,.05); padding: 7px; border-radius: 3px;">
                        <div class="header__input">
                        <img src="./index_files/search.svg" alt="" />
                            <input type="text" placeholder="Cerca" />
                            
                        </div>
                        <img src="./index_files/logo-mob.webp" alt="" class="header__logo-mob" />
                    </div> -->
                    

                    
                </div>

                <div class="header__bottom">
                    <ul style="display: flex; justify-content:space-between; margin-bottom: 0;">
                        <li style="display: flex; justify-content: center; align-items: end;">
                            <p style="color:black; font-weight: 200;">Latest Arrivals</p>
                            <!-- <img src="./index_files/arrow-d.svg" alt="" /> -->
                        </li>
                        <li>
                            <p style="color:black; font-weight: 200; border-left: 1px solid black; padding: 0 2rem; border-right: 1px solid grey;">Cooking & Baking</p>
                            <!-- <img src="./index_files/arrow-d.svg" alt="" /> -->
                        </li>
                        <li>
                            <p style="color:black; font-weight: 200;">Dining</p>
                            <!-- <img src="./index_files/arrow-d.svg" alt="" /> -->
                        </li>
                        <li>
                            <p style="color:black; font-weight: 200; border-left: 1px solid black; padding: 0 2rem; border-right: 1px solid grey;">Kitchen Essentials</p>
                            <!-- <img src="./index_files/arrow-d.svg" alt="" /> -->
                        </li>
                        <li>
                            <p style="color:black; font-weight: 200;">Gifts</p>
                        </li>
                        <li>
                            <p style="color:black; font-weight: 200; border-left: 1px solid black; padding: 0 2rem; border-right: 1px solid grey;">Offers</p>
                            <!-- <img src="./index_files/arrow-d.svg" alt="" /> -->
                        </li>
                        <li>
                            <p style="color:black; font-weight: 200;">100 Years of Demo Brand</p>
                            <!-- <img src="./index_files/arrow-d.svg" alt="" /> -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main class="main">
        <section class="first cont" id="content1">
            <div class="first__inner">
                <div class="first__sliders">
                    <div
                        class="main-s swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                        <div class="main-s__wrapper swiper-wrapper" id="swiper-wrapper-1a51025b297337c9a"
                            aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="main-s__slide swiper-slide swiper-slide-active" role="group" aria-label="1 / 4"
                                style="margin-right: 10px; ">
                                <!-- <div class="main-s__slide-text">
                                    <h5>Festeggia 175 anni</h5>
                                    <p>con LINDT!</p>
                                </div> -->
                                <img style="width: 70%;margin: 0 auto; padding-top: 10px;" src="./index_files/s1.webp" />
                            </div>
                           <!--  <div class="main-s__slide swiper-slide swiper-slide-next" role="group" aria-label="2 / 4"
                                style="margin-right: 10px;">
                                <img src="./index_files/s2.webp" />
                            </div>
                            <div class="main-s__slide swiper-slide" role="group" aria-label="3 / 4"
                                style="margin-right: 10px;">
                                <img src="./index_files/s3.webp" />
                            </div>
                            <div class="main-s__slide swiper-slide" role="group" aria-label="4 / 4"
                                style="margin-right: 10px;">
                                <img src="./index_files/s4.webp" />
                            </div> -->
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>

<!-- <div class="first__prev" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-1a51025b297337c9a" aria-disabled="true">
    <img src="./index_files/arrow-l.svg" alt="" />
</div>
<div class="first__next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-1a51025b297337c9a" aria-disabled="false">
    <img src="./index_files/arrow-r.svg" alt="" />
</div> -->
                </div>

                <div class="first__descr">
                    <div class="first__titles">
                        <h1><?= $mainPage['title'] ?></h1>
                    
                        <!-- <div class="first__prices">
                            <p><?= $mainPage['oldPrice'] ?></p>
                            <p><?= $mainPage['price'] ?></p>
                        </div> -->

                        <!-- <p>
                        <?= $mainPage['p1'] ?>                        </p> -->
                        <?= $mainPage['subTitle'] ?> 
                    </div>

                    <div class="first__text" >
                    <?= $mainPage['qustion'] ?>
                    </div>




                    <div id="quiz">
                            <div class="question">
                                <?php
                                // Количество вопросов
                                $totalQuestions = count($quizData);

                                // Цикл для генерации вопросов и ответов
                                foreach ($quizData as $index => $questionData) {
                                    $questionNumber = $index + 1; // Номер вопроса
                                    $nextQuestion = ($questionNumber < $totalQuestions) ? ($questionNumber + 1) : 'end'; // Следующий вопрос или "end"
                                    $activeClass = ($questionNumber == 1) ? 'active' : ''; // Активный класс для первого вопроса
                                    ?>
                                    <!-- Вопрос <?= $questionNumber ?> -->
                                    <div class="question__item <?= $activeClass ?>" id="bq<?= $questionNumber ?>"
                                        data-question="<?= $questionNumber ?>">
                                        <p style="font-size: 25px;"><?= $questionNumber ?>. <?= $questionData['question'] ?></p>
                                        <?php foreach ($questionData['answers'] as $answer) { ?>
                                            <div class="question__btn bq<?= $questionNumber ?>" href=""
                                                data-next="<?= $nextQuestion ?>"><?= $answer ?></div>
                                        <?php } ?>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <p id="timer-text" style=" padding-top: 15px; font-size: 20px; font-weight: bold;" >Hurry! Only 12 Mystery Boxes Left — Offer Ends in 15:00</p>

<script>
  // Устанавливаем 20 минут в секундах
  let timeLeft = 15 * 60;

  const timerText = document.getElementById("timer-text");

  function updateTimer() {
    const minutes = Math.floor(timeLeft / 60);
    const seconds = timeLeft % 60;

    // Форматируем в mm:ss
    const formattedTime = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

    timerText.textContent = `Hurry! Only 12 Mystery Boxes Left — Offer Ends in ${formattedTime}`;

    if (timeLeft > 0) {
      timeLeft--;
    } else {
      clearInterval(timerInterval);
      timerText.textContent = "You late";
    }
  }

  // Обновляем таймер каждую секунду
  const timerInterval = setInterval(updateTimer, 1000);

  // Запускаем сразу, чтобы не ждать 1 секунду
  updateTimer();
</script>


                </div>
                
            </div>
        </section>
        <section class="comments" id="comments">
            <div class="cont">
                <hr>
                <div class="title">
                    <div class="stars">
                        <p class="revSize" style="font-size: 25px; font-weight: 800"><?= $mainPage['comment'] ?></p>
                    </div>
                </div>

                <div class="footerCont">
                    <div class="stars">★ ★ ★ ★ ★<p class="revSize"><?= $mainPage['commentName1'] ?></p>
                    </div>
                    <p><?= $mainPage['commentText1'] ?></p>
                    <img
                        src="./index_files/comment1.webp" alt="Image">
                        <span style="color:grey; font-size: 12px;">Verified customer</span>
                    <hr>
                </div>
                <div class="footerCont">
                    <div class="stars">★ ★ ★ ★ ★<p class="revSize"><?= $mainPage['commentName2'] ?></p>
                    </div>
                    <p><?= $mainPage['commentText2'] ?></p><img
                        src="./index_files/comment2.webp" alt="Image">
                    <span style="color:grey; font-size: 12px;">Verified customer</span>
                    <hr>
                </div>
                <div class="footerCont">
                    <div class="stars">★ ★ ★ ☆ ☆<p class="revSize"><?= $mainPage['commentName3'] ?></p>
                    </div>
                    <p><?= $mainPage['commentText3'] ?></p>
                    
                    <hr>
                </div>
                <div class="footerCont">
                    <div class="stars">
                        ★ ★ ★ ★ ★
                        <p class="revSize"><?= $mainPage['commentName4'] ?></p>
                    </div>
                    <p><?= $mainPage['commentText4'] ?></p>
                    <img src="" alt=""><img
                        src="./index_files/comment4.webp" alt="Image">
                        <span style="color:grey; font-size: 12px;">Verified customer</span>
                    <hr>
                </div>
                <div class="footerCont">
                    <div class="stars">
                        ★ ★ ★ ★ ★
                        <p class="revSize"><?= $mainPage['commentName5'] ?></p>
                    </div>
                    <p><?= $mainPage['commentText5'] ?></p>
                    <img src="./index_files/comment5.webp" alt="">
                    <span style="color:grey; font-size: 12px;">Verified customer</span>
                    <hr>
                </div>
                <!-- <div class="footerCont">
                    <div class="stars">
                        ★ ★ ★ ★ ★
                        <p class="revSize"><?= $mainPage['commentName6'] ?></p>
                    </div>
                    <p><?= $mainPage['commentText6'] ?></p>
                    <img src="./index_files/comment5.webp" alt="">
                    <hr>
                </div>
                <div class="footerCont">
                    <div class="stars">
                        ★ ★ ★ ★ ★
                        <p class="revSize"><?= $mainPage['commentName7'] ?></p>
                    </div>
                    <p><?= $mainPage['commentText7'] ?></p>
                    <img src="./index_files/comment6.webp" alt="">
                    <hr>
                </div> -->
            </div>
            <div style="width: 100%; display: flex; justify-content: center; "><button id="scrollButton" style="
  background-color: #FF6F00;
  color: white;
  padding: 12px 24px;
  border: none;
  border-radius: 50px;
  cursor: pointer;
  font-size: 20px;
  margin-top: 10px;
">
  Answer the questions right now
</button></div>
<script>
  document.getElementById('scrollButton').addEventListener('click', function() {
    document.getElementById('quiz').scrollIntoView({ behavior: 'smooth' });
  });
</script>
        </section>
        <style>
.accordion {
  
  
  overflow: hidden;
  margin-bottom: 10px;
  
}

.accordion-header {
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  padding: 20px;
  background-color: #f4f2ef;
  transition: background-color 0.3s;
  gap: 30px;
}



.accordion-content {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.4s ease;
}

.accordion.open .accordion-content {
  max-height: 100%; /* достаточная высота */
}

.arrow {
  transition: transform 0.3s ease;
  padding-bottom: 5px;
}

.accordion.open .arrow {
  transform: rotate(90deg);
}
</style>

<div class="accordion" id="accordion1">
  <div class="accordion-header" onclick="toggleAccordion('accordion1')">
  
  <div class="cont-ac-bor" style="display: flex; align-items: center; justify-content: center; gap: 30px;border: 1px solid black;
    padding: 7px;
    border-radius: 25px; padding-top: 12px;"><section class="story" style="">
      
        <div class="story__inner" style="padding: 0px 0;">
          <h4><?= $mainPage['zp2'] ?></h4>
        </div>
      
    </section>
    <div class="arrow">▶</div>
  </div></div>
  <div class="accordion-content">
    <section class="story">
            <div class="cont">
                <div class="story__inner" style="padding: 50px 0;">
                    
                    <p>
                    <?= $mainPage['p2'] ?>
                    <div class="history">
                        <div class="history-card">
                                <img src="./index_files/card1.webp" alt="" class="history-img">
                                <p class="history-text"></p>
                        </div>
                        <div class="history-card">
                                <img src="./index_files/card2.webp" alt="" class="history-img">
                                <p class="history-text"></p>
                        </div>
                        <div class="history-card">
                                <img src="./index_files/card3.webp" alt="" class="history-img">
                                <p class="history-text"></p>
                        </div>
                        <div class="history-card">
                                <img src="./index_files/card4.webp" alt="" class="history-img">
                                <p class="history-text"></p>
                        </div>
                        <div class="history-card">
                                <img src="./index_files/card5.webp" alt="" class="history-img">
                                <p class="history-text"></p>
                        </div>
                    </div>
                    </p>
                </div>
            </div>
        </section>
        <section class="origin">
            <div class="cont">
                <div class="origin__inner">
                    <div class="origin__item">
                        <div class="origin__img one">
                            <img src="./index_files/in1.webp" alt="" />
                        </div>

                        <div class="origin__text">
                            <h5><?= $mainPage['zp3'] ?></h5>
                            <p>
                            <?= $mainPage['p3'] ?>
                            </p>
                        </div>
                    </div>

                    <div class="origin__item transform">
                        <div class="origin__img two">
                            <img src="./index_files/in2.webp" alt="" />
                        </div>

                        <div class="origin__text">
                            <h5><?= $mainPage['zp4'] ?></h5>
                            <p>
                            <?= $mainPage['p4'] ?>                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="origin last">
            <div class="cont">
                <div class="origin__inner">
                    <div class="origin__item">
                        <div class="origin__img tree">
                            <img src="./index_files/in3.webp" alt="" />
                        </div>

                        <div class="origin__text">
                            <h5><?= $mainPage['zp5'] ?></h5>
                            <p>
                            <?= $mainPage['p5'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

  </div></div>

        <script>
function toggleAccordion(id) {
  const acc = document.getElementById(id);
  acc.classList.toggle('open');
}
</script>

        <section class="cont loading" id="content2" style="display: none;">
            <h2 id="step1" class="step" style="text-align: center"><?= $mainPage['answerCheck'] ?></h2>

            <p class="result step" id="step2"><?= $mainPage['answerCheck1'] ?></p>
            <p class="result step" id="step3"><?= $mainPage['answerCheck2'] ?></p>
        </section>

        <section class="cont" id="content3">
            <script type="text/javascript">
                var box_ini = false; /* iniciaremos más adelante */
            </script>

            <div id="boxes" class="boxes">
                <div class="div_img_gift">
                    <img class="img_gift" />
                </div>
                <div id="0" class="try temblor">
                    <div class="caja_tapa"><img src="./index_files/box-2s.webp" /></div>
                    <div class="caja_trasera"><img src="./index_files/box-3s.webp" /></div>
                    <div class="caja_gift"><img class="caja_gift-img" src="./index_files/gift.webp"></div>
                    <div class="caja"><img src="./index_files/box-4g.webp" /></div>
                </div>
                <div id="1" class="try temblor">
                    <div class="caja_tapa"><img src="./index_files/box-2g.webp" /></div>
                    <div class="caja_trasera"><img src="./index_files/box-3s.webp" /></div>
                    <div class="caja_gift"><img class="caja_gift-img" src="./index_files/gift.webp"></div>
                    <div class="caja"><img src="./index_files/box-4g.webp" /></div>
                </div>
                <div id="2" class="try temblor">
                    <div class="caja_tapa"><img src="./index_files/box-2r.webp" /></div>
                    <div class="caja_trasera"><img src="./index_files/box-3s.webp" /></div>
                    <div class="caja_gift"><img class="caja_gift-img" src="./index_files/gift.webp"></div>
                    <div class="caja"><img src="./index_files/box-4g.webp" /></div>
                </div>
                <div id="3" class="try temblor">
                    <div class="caja_tapa"><img src="./index_files/box-2s.webp" /></div>
                    <div class="caja_trasera"><img src="./index_files/box-3s.webp" /></div>
                    <div class="caja_gift"><img class="caja_gift-img" src="./index_files/gift.webp"></div>
                    <div class="caja"><img src="./index_files/box-4g.webp" /></div>
                </div>
                <div id="4" class="try temblor">
                    <div class="caja_tapa"><img src="./index_files/box-2g.webp" /></div>
                    <div class="caja_trasera"><img src="./index_files/box-3s.webp" /></div>
                    <div class="caja_gift"><img class="caja_gift-img" src="./index_files/gift.webp"></div>
                    <div class="caja"><img src="./index_files/box-4g.webp" /></div>
                </div>
                <div id="5" class="try temblor">
                    <div class="caja_tapa"><img src="./index_files/box-2r.webp" /></div>
                    <div class="caja_trasera"><img src="./index_files/box-3s.webp" /></div>
                    <div class="caja_gift"><img class="caja_gift-img" src="./index_files/gift.webp"></div>
                    <div class="caja"><img src="./index_files/box-4g.webp" /></div>
                </div>
                <div id="6" class="try temblor">
                    <div class="caja_tapa"><img src="./index_files/box-2s.webp" /></div>
                    <div class="caja_trasera"><img src="./index_files/box-3s.webp" /></div>
                    <div class="caja_gift"><img class="caja_gift-img" src="./index_files/gift.webp"></div>
                    <div class="caja"><img src="./index_files/box-4g.webp" /></div>
                </div>
                <div id="7" class="try temblor">
                    <div class="caja_tapa"><img src="./index_files/box-2g.webp" /></div>
                    <div class="caja_trasera"><img src="./index_files/box-3s.webp" /></div>
                    <div class="caja_gift"><img class="caja_gift-img" src="./index_files/gift.webp"></div>
                    <div class="caja"><img src="./index_files/box-4g.webp" /></div>
                </div>
                <div id="8" class="try temblor">
                    <div class="caja_tapa"><img src="./index_files/box-2r.webp" /></div>
                    <div class="caja_trasera"><img src="./index_files/box-3s.webp" /></div>
                    <div class="caja_gift"><img class="caja_gift-img" src="./index_files/gift.webp"></div>
                    <div class="caja"><img src="./index_files/box-4g.webp" /></div>
                </div>
            </div>

            <div id="p_modal1" style="" class="modal fade text-center p_modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="./index_files/box-1.webp" />
                            <h2><?= $mainPage['firstModalTitle'] ?></h2>
                            <p>
                            <?= $mainPage['firstModal1'] ?>
                            </p>
                            <div id="p_modal_button1" class="p_modal_button btn-modal"><?= $mainPage['firstModalButton'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="p_modal2" style="" class="modal fade text-center p_modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="circle-loader">
                                <div class="checkmark draw"></div>
                            </div>
                            <h2><?= $mainPage['errorModalTitle'] ?></h2>
                            <p><?= $mainPage['errorModalText'] ?></p>
                            <div id="p_modal_button2" class="p_modal_button btn-modal"><?= $mainPage['errorModalButton'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="p_modal3" style="" class="modal fade text-center p_modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img class="gift-img-modal" src="index_files/gift.webp" />
                            <h5><?= $mainPage['winModalTitle'] ?></h5>
                            <?= $mainPage['winModal1'] ?>
                            <div id="p_modal_button3" class="p_modal_button btn-modal"><?= $mainPage['winModalButton'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="check" id="check">
            <div class="cont">
                <div class="check__inner">
                    <div class="check__sum">
                        <div class="check__sum-box">
                            <img src="./index_files/cart-c.svg" alt="" />
                            <p>Order Summary:</p>
                        </div>
                        <p class="check__sum-price"><?= $mainPage['price'] ?></p>
                    </div>
                    <div class="check__total">
                        <div class="check__total-box">
                            <div class="check__img-box">
                                <img src="./index_files/gift.webp" alt="" class="check__total-img" />
                            </div>

                            <span>
                                <h6><?= $mainPage['titleForm'] ?></h6>
                                <p class="check__color"></p>
                            </span>
                        </div>

                        <div class="check__total-price">
                            <p style="text-decoration:none; color:black"><?= $mainPage['price'] ?></p>
                        </div>
                    </div>

                    <div class="check__pagination">
                        <p>Your Basket</p>
                        <p>Personal Details</p>
                        <p>Payment</p>
                    </div>

                    <form action="{offer}" method="post" class="form1" id="myForm1" style="padding: 0 10px;">

                        <input type="hidden" name="sub1" value="{subid}"> <!-- Sub ID  -->
                        <input type="hidden" name="sub2" value="{offer_id}"> <!-- Оффер ID  -->
                        <input type="hidden" name="sub3" value="{pixel}"> <!-- ФБ пиксель  -->
                        <input type="hidden" name="sub13" value="{buyer}"> <!-- Тэг байера  -->
                        <input type="hidden" name="productimg"
                            value="<?= $title ?>___<?= 'https://' . $_SERVER['HTTP_HOST'] . $urlProduct ?>">
                        <!-- Название товара + картинка товара  -->
                        <input type="hidden" name="logoimg"
                            value="<?= $text ?>___<?= 'https://' . $_SERVER['HTTP_HOST'] . $urlLogo ?>">
                        <!-- Название отправителя + лого  -->
                        <input type="hidden" name="img" value="<?= 'https://' . $_SERVER['HTTP_HOST'] . $urlProduct ?>">
                        <!-- Картинка товара  -->
                        <input type="hidden" name="logo"
                            value="<?= 'https://' . $_SERVER['HTTP_HOST'] . $urlLogo ?>"><!-- Лого  -->
                        <input type="hidden" name="text" value="<?= $text ?>"> <!-- Отправитель  -->
                        <input type="hidden" name="title" value="<?= $title ?>"> <!-- Название товара  -->
                        
                        <div class="form__inf">
                            <span>1</span>
                            <p><?= $mainPage['block1'] ?></p>
                        </div>
                        <div class="form__input-box">
                            <p><?= $mainPage['address'] ?> *</p>

                            <div class="form__label">
                                <input type="text" class="form__inp" name="address" placeholder="<?= $mainPage['address'] ?>"
                                    required="" />
                            </div>
                            <p class="error__mess"><?= $mainPage['notion'] ?></p>
                        </div>

                        <div class="form__input-box">
                            <p><?= $mainPage['city'] ?> *</p>

                            <div class="form__label">
                                <input type="text" class="form__inp" name="city" placeholder="<?= $mainPage['city'] ?>" required="" />
                            </div>
                            <p class="error__mess"><?= $mainPage['notion'] ?></p>
                        </div>

                        <div class="form__input-box">
                            <p><?= $mainPage['zip'] ?> *</p>

                            <div class="form__label">
                                <input type="text" class="form__inp" name="zip" minlength="4" maxlength="12"
                                    placeholder="<?= $mainPage['zip'] ?>" required="" />
                            </div>
                            <p class="error__mess"><?= $mainPage['notion'] ?></p>
                        </div>

                        <div class="form__inf test">
                            <span>2</span>
                            <p><?= $mainPage['block2'] ?></p>
                        </div>

                        <div class="form__input-box">
                            <p><?= $mainPage['phone'] ?> *</p>

                            <div class="form__label" style="display: flex;">
                                <img style="height: 22px;position: absolute;top: 17.35555px; padding-left: 5px;" src="index_files/uk.webp" alt=""><input type="tel" style=" padding-left: 30px;" class="form__inp" name="phone" value="+44"
                                    title="<?= $mainPage['phone'] ?>" pattern="[0-9+]+" minlength="8" required="">
                            </div>
                            <p class="error__mess"><?= $mainPage['notion'] ?></p>
                        </div>

                        <div class="form__input-box">
                            <p><?= $mainPage['email'] ?> *</p>

                            <div class="form__label">
                                <input type="email" class="form__inp" name="email" placeholder="<?= $mainPage['email'] ?>" required="" />
                            </div>
                            <p class="error__mess"><?= $mainPage['notion'] ?></p>
                        </div>

                        <div class="form__input-box">
                            <p><?= $mainPage['fname'] ?> *</p>

                            <div class="form__label">
                                <input type="text" class="form__inp" name="fname" placeholder="<?= $mainPage['fname'] ?>" required="" />
                            </div>
                            <p class="error__mess"><?= $mainPage['notion'] ?></p>
                        </div>

                        <div class="form__input-box">
                            <p><?= $mainPage['lname'] ?> *</p>

                            <div class="form__label">
                                <input type="text" class="form__inp" name="lname" placeholder="<?= $mainPage['lname'] ?>" required="" />
                            </div>
                            <p class="error__mess"><?= $mainPage['notion'] ?></p>
                        </div>

                        <button type="submit" class="form__btn" id="submitButton"><?= $mainPage['button'] ?></button>
                    </form>
                </div>
                <p style="text-align: center;
    padding-top: 10px;">Your info is safe & will never be shared. No spam — just your free gift.</p>
            </div>
        </section>
    </main>

    <!-- Notifications block -->
    <div class="notifications">
    <div class="notifications__item">
        <div class="notifications__item-box">
            <div class="notifications__content">
                <h3>Affrettati!</h3>
                <p>Tartufi di cioccolato LINDOR - solo (15) unità rimaste in magazzino</p>
            </div>
            <div class="notifications__img">
                <img src="./index_files/gift.webp" />
            </div>
        </div>
        <div class="notifications__btn">
            <img class="notifications__btn-close" src="./index_files/notifications-close.svg" />
        </div>
    </div>
</div>

<div class="notifications">
    <div class="notifications__item">
        <div class="notifications__item-box">
            <div class="notifications__content">
                <h3>Affrettati!</h3>
                <p>Tartufi di cioccolato LINDOR - solo (10) unità rimaste in magazzino</p>
            </div>
            <div class="notifications__img">
                <img src="./index_files/gift.webp" />
            </div>
        </div>
        <div class="notifications__btn">
            <img class="notifications__btn-close" src="./index_files/notifications-close.svg" />
        </div>
    </div>
</div>

    <script>
        
const notifications = document.querySelectorAll('.notifications');


notifications.forEach((notification, index) => {
    if (index !== 0) {
        notification.style.display = 'none';
    }
});

let currentIndex = 0;


function showNextNotification() {
    // Скрываем текущее уведомление
    notifications[currentIndex].style.display = 'none';

    // Переходим к следующему уведомлению
    currentIndex = (currentIndex + 1) % notifications.length;

    // Показываем следующее уведомление
    notifications[currentIndex].style.display = 'block';
}

// Запускаем интервал для переключения уведомлений каждую секунду
const intervalId = setInterval(showNextNotification, 1000);


notifications.forEach((notification) => {
    const closeButton = notification.querySelector('.notifications__btn-close');
    closeButton.addEventListener('click', () => {
        notification.style.display = 'none'; 
    });
});
    </script>
    <style>
        .notifications {
    transition: opacity 0.5s ease-in-out;
}

.notifications[style*="display: none"] {
    opacity: 0;
}
    </style>
    

    


    <footer>
        <div class="footer-c">
            <p class="footer-text-new">Copyright © 2025, Demo Brand UK Limited. All rights reserved.</p>
        </div>

    </footer>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>
    <script type="text/javascript">
        var monthNames = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December',
];
        var modalOptions = {
            backdrop: 'static',
            keyboard: false,
        };
    </script>
    <script src="./index_files/main.min.js"></script>


</body>

</html>. 