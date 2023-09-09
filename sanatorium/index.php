<? include '../config/core.php'; 


	
	$menu_name = 'sanatorium';
	$site_set['name'] = 'Каталог санаториев';
?>
<? include '../block/header.php'; ?>

	<div class="ble1">
      <div class="ble1_img lazy_bag" data-src="/assets/img/bag/nature-2568316.jpg"></div>
      <div class="ble1_txt"><?=$site_set['name']?></div>
   </div>

	<div class="sana">	
		<div class="bl_c">
			<div class="sanator">
				<div class="head_c">
					<p>Выберите санаторий, который лучше всего вам подходит или закажите консультацию</p>
				</div>

				<div class="sanator_c">
					<? $sql = db::query("select * from sanatorium where number is not null ORDER BY number ASC"); ?>
					<? while ($ana = mysqli_fetch_array($sql)): ?>
						<? $id = $ana['id']; ?>
						<div class="sanator_item">
							<a class="sanator_img" href="/sanatorium/item.php?id=<?=$ana['id']?>">
								<div class="lazy_bag" data-src="/assets/uploads/sanatorium/<?=$ana['img']?>"></div>
							</a>
							<div class="sanator_con">
								<div class="sanator_name"><?=$ana['name_'.$lang]?></div>
								<div class="sanator_cin">
									<div class="bl5_icp"><?=t::w('from1').fun::p($ana['id'])?> тг. <?=t::w('from2')?></div>
								</div>
								<div class="sanator_zabr">
									<div class="btn disb_zab">Забронировать</div>
								</div>
							</div>
						</div>
					<? endwhile ?>
				</div>

			</div>
		</div>
	</div>


	<div class="bl4" id="services">
		<div class="bl_c">
			<div class="head_c">
				<h2>Путевки по ценам самих санаториев</h2>
				<p>Мы предлагает Вам приобрести путевки или забронировать номера <br>во все санатории города Сарыагаш по самой низкой цене, путевки по ценам самих санаториев.</p>
			</div>

			<div class="bl4_c">
				<div class="pot_gt">
					<div class="pot_gti">
						<h6>Бесплатная консультация</h6>
						<p>Мы поможем Вам выбрать подходящую санаторию по его лечебному профилю.</p>
					</div>
					<div class="pot_gti">
						<h6>Бронь без комиссии</h6>
						<p>Забронируем номера по цене самих санаториев. Предварительное бронирование.</p>
					</div>
					<div class="pot_gti">
						<h6>Бесплатный трансфер</h6>
						<p>Дальше мы встречаем Вас с вокзала или аэропорта и бесплатно довезем до дверей санатория.</p>
					</div>
				</div>
				<div class="pot_gi">
					<img class="lazy_bag" data-src="/assets/img/bag/car.png">
					<img class="lazy_bag" data-src="/assets/img/bag/kt.png">
				</div>
			</div>
		</div>
	</div>



<? include '../block/footer.php'; ?>