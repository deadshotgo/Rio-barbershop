<?php
include 'admin/controller/InformationController/all.php';
?>
<nav class="nav animate__animated animate__fadeInDown">
	<div class="menu-logo">
	    <div class="logo-rio-inst">
	        <a class="white-menu" href="index.php"><img src="img/RIOinvers.png" alt="" class="icon"></a>
		    <a class="instagram" href="https://www.instagram.com/rio_barber_/?utm_medium=copy_link"><i style="-webkit-background-clip: text; -webkit-text-fill-color: transparent;" class="fab fa-instagram insta-icon"></i></a>
	    </div>
		
        <?php
        if(@$_COOKIE['admin']) {
            echo '<a class="admin-icon" href="/admin/index.php"><i class="fas fa-user-cog"></i></a>';
        };
        ?>
        <?php
        if(@!$_COOKIE['admin']){
            echo '<a class="admin-icon" href="admin/login/index.php"><i class="fas fa-user-lock"></i></a>';
        };

        ?>
	</div>
	
	<div class="phone-block mob-phone">
        <?php foreach ($user_data3 as $row){?>
    	<a href="tel:<?= $row['phone']?>" class="phone"><?= $row['phone'] ?></a>
    <?php }?>
    </div>
	
	<div class="home-icon">
    	<i class="fas fa-home"></i>
    </div>
    <ul class="main-menu animate__animated">
        <li class="menu-item"><a href="index.php">Головна</a></li>
        <li class="menu-item"><a href="services.php">Послуги</a></li>
        <li class="menu-item"><a href="gallery.php">Галерея</a></li>
    </ul>

    <div class="phone-block">
        <?php foreach ($user_data3 as $row){?>
    	<a href="tel:<?= $row['phone']?>" class="phone"><?= $row['phone'] ?></a>
    <?php }?>
    </div>
</nav>
<?php
    include('buttonScrolUp.php')
?>