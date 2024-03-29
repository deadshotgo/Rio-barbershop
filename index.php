<?php include 'admin/controller/ServicesController/all.php' ?>
<?php include 'admin/controller/TextController/index.php' ?>
<?php include 'admin/controller/EmployeeController/all.php' ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rio Barbershop</title>
    <link rel="shortcut icon" href="img/logo.png" type="img/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>
<header class="header bg bg-cover bg-fixed">
    <?php
    include('menu.php')
    ?>
    <div class="container">
        <div class="header-text-block">
            <div class="main-title-block">
                <div class="logotip-text">
                    <h3>Rio Barbershop</h3>
                </div>
                <h1>Ми допоможемо вам отримати свій новий стиль</h1>
                <div class="order-btn"><a id="btn-open" class="btn-ser">Записатися на прийом</a></div>
                <div id="wrapper-modal">
                  <div id="overlay"></div>
                  <div id="modal-window">
                    <div>
                      <i id="btn-close" class="far fa-times-circle"></i>
                    </div>
                    <div class="content">
                      <iframe style="height: 500px; width: 350px;" src="https://torrow.net/app/tabs/tab-search/service;id=aae6703ed4122efa7c5b7dca275a45d1c" frameborder="0"></iframe>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="about-us">
    <div class="container">
        <?php foreach ($user_data as $row) { ?>
            <div class="information-block">
                <h2><?= $row['title'] ?></h2>
                <h3><?= $row['pid_title'] ?></h3>
                <h4><?= $row['text'] ?></h4>
                <ul>
                    <li><?= $row['num1'] ?></li>
                    <li><?= $row['num2'] ?></li>
                    <li><?= $row['num3'] ?> </li>
                </ul>
            </div>
        <?php } ?>
    </div>
</section>
<section class="services light-bg">
    <div class="container">
        <div class="services-price">
            <?php foreach ($lim as $col) { ?>
                <div class="price-item">
                    <div class="ser-info">
                        <p> <?php echo $col['title'] ?> <span>~<?php echo $col['time'] ?> хв</span></p>
                    </div>
                    <div class="price">
                        <p>від <?php echo $col['price'] ?>грн</p>
                    </div>
                </div>
            <?php } ?>

        </div>
        <a href="services.php" class="btn-ser">Оглянути всі послуги</a>
    </div>
</section>
<section class="our-room">
    <div class="container">
        <h2>Ми намагаємося щоб у нас завжди було комфортно та атмосферно</h2>
        <div class="gallery">
            <div class="gallery-item">
                <img src="img/galleryRoom/roomBig1.jpg" alt="">
            </div>
            <div class="gallery-item">
                <img src="img/galleryRoom/room1.jpg" alt="">
            </div>
            <div class="gallery-item">
                <img src="img/galleryRoom/roomBig2.jpg" alt="">
            </div>
        </div>
        <div class="gallery-second">
            <div class="gallery-item">
                <img src="img/galleryRoom/room2.jpg" alt="">
            </div>
            <div class="gallery-item">
                <img src="img/galleryRoom/photo_2021-12-14_21-14-31.jpg" alt="">
            </div>
            <div class="gallery-item">
                <img src="img/galleryRoom/room3.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<section class="our-masters">
    <h2>Наші майстри</h2>


    <?php $i = 1;
    foreach ($user_data1 as $row) {
          if ($i % 2 == 0) { ?>
              <div class="master">
                  <div class="info-master">
                      <div class="master-name-hover">
                          <div class="master-info-text-block">
                              <h3><?= $row['name'] ?></h3>
                              <p><?= $row['experience'] ?></p>
                              <p><?= $row['text'] ?></p>
                          </div>
                      </div>
                      <img src="/admin/controller/<?= $row['avatar'] ?>" alt="">
                  </div>
                  <div class="info-master">
                      <div class="master-name-hover">
                          <div class="master-info-text-block">
                              <img src="/admin/controller/<?= $row['certificate'] ?>" alt="">
                          </div>
                      </div>
                      <div class="certificate">
                          <h3>Сертифікат</h3>
                      </div>
                  </div>
              </div>

        <?php } elseif ($i !== 0) { ?>
              <div class="master">
                  <div class="info-master">
                      <div class="master-name-hover">
                          <div class="master-info-text-block">
                              <img src="/admin/controller/<?= $row['certificate'] ?>" alt="">
                          </div>
                      </div>
                      <div class="certificate">
                          <h3>Сертифікат</h3>
                      </div>
                  </div>
                  <div class="info-master">
                      <div class="master-name-hover">
                          <div class="master-info-text-block">
                              <h3><?= $row['name']  ?></h3>
                              <p><?= $row['experience'] ?></p>
                              <p><?= $row['text'] ?></p>
                          </div>
                      </div>

                      <img src="/admin/controller/<?= $row['avatar'] ?>" alt="">

                  </div>
              </div>
        <?php }
        $i++;
         }?>


</section>

<section class="gallery-block light-bg">
    <div class="container">
        <h2>Наші роботи</h2>
        <div class="slider-wrapper">
            <div class="slider-gallery">
                <div class="slide-item active">
                    <img src="img/gallery/1.jpg" alt="">
                </div>
                <div class="slide-item">
                    <img src="img/gallery/2.jpg" alt="">
                </div>
                <div class="slide-item">
                    <img src="img/gallery/3.jpg" alt="">
                </div>
            </div>
            <div class="slider-gallery">
                <div class="slide-item-second active">
                    <img src="img/gallery/4.jpg" alt="">
                </div>
                <div class="slide-item-second">
                    <img src="img/gallery/5.jpg" alt="">
                </div>
                <div class="slide-item-second">
                    <img src="img/gallery/6.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="map">

</section>
<?php
include('footer.php')
?>
<script src="https://kit.fontawesome.com/8c3e319e45.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script src="js/menu.js"></script>
<script src="js/main.js"></script>
<script src="js/scroll.js"></script>
<script src="js/noFixed.js"></script>
</body>

</html>