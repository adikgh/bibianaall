<? include 'config/core.php';	




	$menu_name = 'home';
?>
<? include 'block/header.php'; ?>

	<!--  -->
	<div class="top_site_gh">
		<!-- <div class="top_site_bag lazy_bag" data-src="/assets/img/bag/slide4.jpg"></div> -->
		<!-- <div class="top_site_bag2"></div> -->
		<div class="bl_c">
			<div class="top_site_hu">
				<h2>Мы делаем все ради <br>вашего комфорта</h2>
				<p>Из за большой популярности наши Курорты, <br>мы рекомендуем всем <span>звонить и бронировать места заранее</span></p>
				<div class="top_site_hub">
					<div class="btn disb_zab">Торопитесь!</div>
				</div>
			</div>
		</div>
		<!-- <div class="top_site_bag4"></div> -->
	</div>



	<!--  -->
	<div class="blnm" >
		<div class="bl_c">
			<div class="head_c">
				<h2>Номера</h2>
				<!-- <div class="swiper-button-next bl5_next">
					<i class="fas fa-caret-right"></i>
				</div>
				<div class="swiper-button-prev bl5_prev">
					<i class="fas fa-caret-left"></i>
				</div> -->
			</div>
			<div class="blnm_c">
				<div class="swiper-container blnm_cn">
					<div class="swiper-wrapper">

						<? $number = db::query("select * from `bibi_number` order by number asc"); ?>
						<? while($number_d = mysqli_fetch_array($number)): ?>
							<div class="swiper-slide blnm_i">
								<div class="blnm_img">
									<div class="lazy_img2" data-src="/assets/uploads/number/<?=$number_d['img']?>"></div>
								</div>
								<div class="blnm_ic">
									<div class="blnm_ict"><?=fun::t($number_d['type_id'])?></div>
									<div class="blnm_ico">
										<div class="">
											<i class="fal fa-vector-square"></i>
											<span><?=fun::d($number_d['door_id'])?>0 М<sup>2</sup></span>
										</div>
										<div class="">
											<i class="fal fa-user-circle"></i>
											<span><?=fun::d($number_d['door_id'])?> гостей</span>
										</div>
									</div>
									<div class="blnm_icp">
										<div class="blnm_icp2">Цена: <div class="fr_price"><?=$number_d['price']?></div></div>
										<div class="btn btn2">подробнее</div>
									</div>
								</div>
							</div>
						<? endwhile ?>

					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="bl3">
		<div class="bl3_a lazy_bag" data-src="/assets/img/bag/slide1.jpg"></div>
		<div class="bl_c">
			<div class="bl3_c">
				<div class="bl3_l">
					<div class="head_c">
						<h2>Есть вопросы?</h2>
						<p>Если у вас есть какие-либо вопросы, напишите нам WhatsApp</p>
					</div>
				</div>
				<div class="bl3_r">
					<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>?text=Я%20заинтересован%20по%20поводу%20санаторий%20...">
						<div class="btn btn_whatsapp">
							<i class="fab fa-whatsapp"></i>
							<span>Написать на WhatsApp</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>




	<!--  -->
	<div class="bl2">
		<div class="bl_c">
			<div class="bl2_c">
				<div class="head_c">
					<h2>Что вас ждет в Сарыагаше</h2>
				</div>
				<div class="bl2_con">
					<div class="nash_pri">
						<div class="nash_prim">
							<i class="fas fa-badge-check"></i>
						</div>
						<div class="nash_prit">
							<h4>ОТЛИЧНЫЙ СЕРВИС</h4>
							<p>Опытные врачи и медперсонал</p>
						</div>
					</div>
					<div class="nash_pri">
						<div class="nash_prim">
							<i class="fas fa-credit-card-blank"></i>
						</div>
						<div class="nash_prit">
							<h4>УДОБНАЯ ОПЛАТА</h4>
							<p>Все виды оплат для Вашего удобства</p>
						</div>
					</div>
					<div class="nash_pri">
						<div class="nash_prim">
							<i class="fas fa-car"></i>
						</div>
						<div class="nash_prit">
							<h4>БЕСПЛАТНЫЙ ТАНСФЕР</h4>
							<p>Встречаем из ЖД вокзала</p>
						</div>
					</div>
					<div class="nash_pri">
						<div class="nash_prim">
							<i class="fas fa-clipboard-user"></i>
						</div>
						<div class="nash_prit">
							<h4>ПЕРСОНАЛ</h4>
							<p>Вежливый, обученный персонал</p>
						</div>
					</div>
					<div class="nash_pri">
						<div class="nash_prim">
							<i class="fas fa-thumbs-up"></i>
						</div>
						<div class="nash_prit">
							<h4>ВЫГОДНО</h4>
							<p>По сравнению с другими, у нас выгоднее</p>
						</div>
					</div>
					<div class="nash_pri">
						<div class="nash_prim">
							<i class="fas fa-hand-holding-usd"></i>
						</div>
						<div class="nash_prit">
							<h4>ЦЕНА</h4>
							<p>Низкие, доступные цены на санаторный отдых</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>







<? include 'block/footer.php'; ?>