<?php include 'admin/controller/ServicesController/all.php';?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rio Barbershop - Послуги</title>
    <link rel="shortcut icon" href="/img/Logo.png" type="img/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <hedrer class="header">
        <?php
            include('menu.php')
        ?>
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
    </hedrer>
    <section class="services bg-services animate__animated animate__fadeInUp">
        <div class="container">
            <a id="btn-open" class="btn-ser">Записатися на прийом</a>
            <div class="services-price">

                    <?php foreach ($user_data as $row) { ?>
                <div class="price-item">
                    <div class="ser-info">
                        <p><?php echo $row['title']?> <span>~<?php echo $row['time']?> хв</span></p>
                    </div>
                    <div class="price">
                        <p>від <?php echo $row['price']?> грн</p>
                    </div>
                </div>
                <?php }?>


            </div>
        </div>
    </section>
    <section class="carousel-ser">
        <h2>Товари у продажі</h2>
        <?php
            include('carousel.php')
        ?>
    </section>
    <?php
        include('footer.php')
    ?>

    <script src="https://kit.fontawesome.com/8c3e319e45.js" crossorigin="anonymous"></script>
    <script src="js/menu.js"></script>
    <script src="js/main.js"></script>
    <script src="js/scroll.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:4000,
            nav:false,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script>
</body>

</html>
