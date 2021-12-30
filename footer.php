<?php include 'admin/controller/InformationController/all.php';?>
<footer class="footer">
	<div class="container">
		<div class="footer-block">
            <?php foreach ($user_data3 as $row ) { ?>
			<div class="self-information"><a  href="tel:<?= $row['phone']?>">
				<i class="fas fa-phone-volume"></i>

				<div class="info-self-item">
					<h4>Телефон</h4>
					<p><?= $row['phone'] ?></p>
				</a></div>
			</div>
			<div class="self-information"><a class="PDvGL q8cvFf" href="https://www.google.com/maps/dir//Rio+Barber/data=!4m8!4m7!1m0!1m5!1m1!1s0x40d4cd1ca1188447:0xfb3de1e9c46abfe4!2m2!1d30.447698199999998!2d50.460931599999995" target="_blank" data-tracking-element-type="6" jslog="56039; track:impression,click">
				<i class="fas fa-map-marker-alt"></i>
				<div class="info-self-item">
					<h4>Адреса</h4>
					<p>ул.Александра Довженка, 14/1. Киев, 02000</p>
				</a></div>
			</div>
			<div class="self-information">
				<i class="far fa-clock"></i>
				<div class="info-self-item">
					<h4>Графік</h4>
					<p><?= $row['schedule'] ?></p>
				</div>
			</div>
            <?php }?>
		</div>
		<div class="dev">
			design and development by web absentees &copy;
		</div>
	</div>
</footer>