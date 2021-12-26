<nav class="nav animate__animated animate__fadeInDown">
	<div class="menu-logo">
		<a href="index.php"><img src="img/logo.png" alt="" class="icon"></a>
		<p>Rio Barbershop</p>
	</div>
	<div class="home-icon">
    	<i class="fas fa-home"></i>
    </div>
    <ul class="main-menu animate__animated">
        <li class="menu-item"><a href="index.php">Головна сторінка</a></li>
        <li class="menu-item"><a href="services.php">Послуги</a></li>
        <li class="menu-item"><a href="gallery.php">Галерея</a></li>
        <?php
        if(@$_COOKIE['admin']) {
            echo '<li class="menu-item"><a href="/admin/index.php">Адмін</a></li>';
        };
        ?>
        <?php
        if(@!$_COOKIE['admin']){
            echo '<li class="menu-item"><a href="admin/login/index.php">Увійти</a></li>';
        };

        ?>
    </ul>
    <a class="instagram" href="https://www.instagram.com/rio_barber_/?utm_medium=copy_link"><i style="-webkit-background-clip: text; -webkit-text-fill-color: transparent;" class="fab fa-instagram insta-icon"></i></a>
    <div class="phone-block">
    	<a href="tel:+380-93-350-2889" class="phone">+ 38 (093) 350 28 89</a>
    </div>
</nav>
<?php
    include('buttonScrolUp.php')
?>