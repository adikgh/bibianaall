<div class="header <?=($site_set['header']=='fix'?'header_fix2':'')?>">
	<div class="bl_c">
		<div class="header_top">
			<div class="header_lang">
				<a class="header_lang_i <?=($lang=='kz'?'':'header_lang_act')?>" <?=($lang=='kz'?'':'href="'.$url.'?lang=kz"')?>>KAZ</a>
				<a class="header_lang_i <?=($lang=='ru'?'':'header_lang_act')?>" <?=($lang=='ru'?'':'href="'.$url.'?lang=ru"')?>>RUS</a>
			</div>
			<a href="/" class="logo">
				<div class="logo_con lazy_bag" data-src="/assets/img/logo/logo.png"></div>
				<div class="logo_txt"><?=$site['name']?></div>
			</a>
			<div class="header_pj">
				<a href="tel:<?=$site['phone']?>"><?=$site['phone_view']?></a>
				<div class="header_clc">
					<!-- <div class="btn disb_zab">cвязатся</div> -->
				</div>
			</div>
			<!-- <div class="menu_pj"><i class="far fa-bars"></i></div> -->
		</div>
	</div>
</div>
<div class="header header2 <?=($site_set['header']=='fix'?'header_fix2':'')?>">
	<div class="bl_c">
		<div class="header_bb">
			<nav class="menu_dk">
				<ul class="menu_i">
					<li><a href="/">Главная</a></li>
					<li><a href="/about/">Об санатории</a></li>
					<!-- <li><a href="#services">Услуги</a></li> -->
					<!-- <li><a href="#">Фотогалерея</a></li> -->
					<li><a href="/treatment/">Лечение</a></li>
					<li><a href="/rooms/">Номера и прайсы</a></li>
					<!-- <li><a href="/sanatorium/">Каталог санаториев</a></li> -->
					<li><a href="#reviews">Отзывы</a></li>
					<li><a href="#contacts">Контакты</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>


<!--  -->
<div class="menu_ph">
	<div class="bl_c">
		<div class="menu_ph_c">
			<div class="head_c">
				<h3>Меню</h3>
				<div class="menu_ph_ic"><i class="fas fa-times-circle"></i></div>
			</div>
			<nav class="mp_dk">
				<ul>
					<li class="mp_di">
						<a href="sana.php">Список санаториев:</a>
						<ul>
							<? $sql = db::query("select * from sanatorium where number is not null order by number asc"); ?>
							<? while($menu = mysqli_fetch_array($sql)): ?>
								<li class="mp_pi">
									<a href="/sanatorium/?id=<?=$menu['id']?>">
										<i class="fal fa-hotel"></i>
										<span><?=$menu['name_'.$lang]?></span>
									</a>
								</li>
							<? endwhile ?>
						</ul>
					</li>
					<li class="mp_di"><a href="#services">Услуги</a></li>
					<li class="mp_di"><a href="#reviews">Отзывы</a></li>
					<li class="mp_di"><a href="#contacts">Контакты</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>