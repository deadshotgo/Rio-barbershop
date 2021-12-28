<?php include 'admin/controller/InformationController/all.php';?>
<footer class="footer">
	<div class="container">
		<div class="footer-block">
			<div class="self-information">
				<i class="fas fa-phone-volume"></i>
                <?php foreach ($user_data as $row ) { ?>
				<div class="info-self-item">
					<h4>Телефон</h4>
					<p><?= $row['phone'] ?></p>
				</div>
			</div>
			<div class="self-information">
				<i class="fas fa-map-marker-alt"></i>
				<div class="info-self-item">
					<h4>Адреса</h4>
					<p><?= $row['addres']?></p>
				</div>
			</div>
			<div class="self-information">
				<i class="far fa-clock"></i>
				<div class="info-self-item">
					<h4>Графік</h4>
					<p><?= $row['schedule']?></p>
				</div>
			</div>
            <?php }?>
		</div>
	</div>
</footer>