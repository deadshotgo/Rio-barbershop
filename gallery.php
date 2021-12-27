<?php  include 'admin/controller/GalleryController/all.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rio Barbershop - Галерея</title>
  <link rel="shortcut icon" href="/img/Logo.png" type="img/logo.png">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
  <link rel="stylesheet" href="css/gallery.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <hedrer class="header">
        <?php 
            include('menu.php')
        ?>
    </hedrer>
  <section class="gallery">
    <h2 class="title">Наша галерея</h2>
    <div class="gallery-list">

        <?php foreach ($user_data as $row ) {?>
      <a href="/admin/<?php echo $row['scr'];?>" class="gallery-item">
        <div class="gallery-item-hover">Переглянути</div>
        <img src="/admin/<?php echo $row['scr'];?>" alt="alt">
      </a>
      <?php };?>
    </div>
  </section>
  <?php 
    include('footer.php')
  ?>

  <script src="js/menu.js"></script>
  <script src="https://kit.fontawesome.com/8c3e319e45.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
  <script>
    $(".gallery-list").magnificPopup({
      delegate: "a",
      type: "image",
      gallery: {
        enabled: true
      }
    });
  </script>
  <script src="js/scroll.js"></script>
</body>

</html>