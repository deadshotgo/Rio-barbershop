<?php include 'admin/controller/Services/all.php';?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rio Barbershop - Послуги</title>
    <link rel="shortcut icon" href="/img/Logo.png" type="img/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>
    <hedrer class="header">
        <?php
            include('menu.php')
        ?>
    </hedrer>
    <section class="services bg-services animate__animated animate__fadeInUp">
        <div class="container">
            <div class="services-price">

                    <?php foreach ($user_data as $row) { ?>
                <div class="price-item">
                    <div class="ser-info">
                        <p><?php echo $row['title']?> <span>~<?php echo $row['time']?> Год</span></p>
                    </div>
                    <div class="price">
                        <p>від <?php echo $row['price']?>грн</p>
                    </div>
                </div>
                <?php }?>


            </div>
        </div>
    </section>
    <?php
        include('footer.php')
    ?>

    <script src="https://kit.fontawesome.com/8c3e319e45.js" crossorigin="anonymous"></script>
    <script src="js/menu.js"></script>
    <script src="js/scroll.js"></script>
</body>

</html>