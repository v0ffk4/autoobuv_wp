<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<link href="<?php bloginfo(template_directory); ?>/style.css" rel="stylesheet">
</head>

<body class="<?php echo $class; ?>">

	<header>
		
		<div class="header-bcg">
			
		</div>
		<!-- /.header-bcg -->

		<div class="header-content">
			<a class="logo" href="/">
				<img class="logo" src="<?php bloginfo( template_directory); ?>/i/logo.svg">
			</a>

			<nav class="nav-main">
				<ul>
					<li>
						<a href="?route=custom/about">
							<img class="logo" src="<?php bloginfo( template_directory); ?>/i/icon-mobile-about.svg">
							О нас
						</a>
					</li>
					<li>
						<a href="?route=custom/category">
							<img class="logo" src="<?php bloginfo( template_directory); ?>/i/icon-mobile-catalogue.svg">
							Товары
						</a>
					</li>
					<li>
						<a href="?route=custom/item">
							<img class="logo" src="<?php bloginfo( template_directory); ?>/i/icon-mobile-services.svg">
							Услуги
						</a>
					</li>
					<li>
						<a href="#">
							<img class="logo" src="<?php bloginfo( template_directory); ?>/i/icon-mobile-repair.svg">
							Сервис
						</a>
					</li>
					<li>
						<a href="?route=custom/contacts">
							<img class="logo" src="<?php bloginfo( template_directory); ?>/is/icon-mobile-contacts.svg">
							Контакты
						</a>
					</li>
				</ul>
			</nav>
			<!-- /.nav-main -->
			
			<!-- js for catalogue button -->
			<script type="text/javascript">
				var catMenuItem = document.getElementsByClassName('nav-main')[0].getElementsByTagName('a')[1];
				catMenuItem.className += "cat-menu-item";
			</script>


			<!-- contact info -->
			<div class="header-contact-info">
				<p><img src="<?php bloginfo( template_directory); ?>/i/icon-header-phone.svg">8-800-250-57-07</p>

				<a id="callback-link">обратный звонок</a>
			</div>
			<!-- /.header-contact-info -->

			<svg version="1.1" id="burger-button" class="button-open" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">

			<g class="main-menu-open active" style="opacity: 1">
				<rect class="burger-svg-frame" width="32" height="32"/>
				<line x1="2" y1="29.5" x2="30" y2="29.5"/>
				<line x1="2" y1="16.5" x2="30" y2="16.5"/>
				<line x1="2" y1="2.5" x2="30" y2="2.5"/>
			</g>
			<g class="category-menu-close">
				<rect class="burger-svg-frame" width="32" height="32"/>
				<line x1="2.5" y1="29.5" x2="29.5" y2="2.5"/>
				<line x1="29.5" y1="29.5" x2="2.5" y2="2.5"/>
			</g>
			<g class="main-menu-close">
				<rect class="burger-svg-frame" width="32" height="32"/>
				<line x1="2.5" y1="29.5" x2="29.5" y2="2.5"/>
				<line x1="29.5" y1="29.5" x2="2.5" y2="2.5"/>
			</g>			
			</svg>

		</div>
		<!-- /.header-content -->
		
	</header>

	<div id="callback">
		<form>
			<fieldset>
				<label>Вас зовут:</label>
				<input type="text" name="callback-name">
			</fieldset>
			<fieldset>
				<label>Ваш номер телефона:</label>
				<input type="text" name="callback-name">
			</fieldset>
			<fieldset>
				<label>Вам удобнее говорить:</label>
				<div>
					<span>c</span>
					<select>
						<option value="volvo">9:00 </option>
						<option value="saab">11:00</option>
						<option value="mercedes">13:00</option>
						<option value="audi">15:00</option>
					</select>
					<span>до</span>
					<select>
						<option value="volvo">13:00</option>
						<option value="volvo">15:00</option>
						<option value="saab">17:00</option>
						<option value="mercedes">19:00</option>
						<option value="audi">15:00</option>
					</select>
				</div>
			</fieldset>
			<button>Мы вам перезвоним</button>
		</form>				
	</div>
	<!-- /#callback -->

	<div id="order-background">
		
		<svg id="order-close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
			<title>order-close-button</title>
			<rect class="svg-frame" width="32" height="32"/>
			<line class="order-close" x1="3.5" y1="3.5" x2="28.5" y2="29.5"/>
			<line class="order-close" x1="29" y1="4" x2="3" y2="29"/>
		</svg>

		<div id="order-container">
			<div id="order-frame-01" class="order-frame">
				<h2>TAITONG HS268 9.00R20</h2>
				<div class="order-item-image" style="background-image: url(<?php bloginfo( template_directory); ?>/i/items/item_04.png);">
					
				</div>
				<!-- image-div -->
				
				<p>Краткое описание для заказа, какой-нибудь пояснительный текст. Ну ли что-то вроде того.</p>

				<div class="controls">

					<div>
						<svg id="order-decrement-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><defs><style>.cls-1,.cls-2{fill:none;}.cls-2{stroke:#000;stroke-miterlimit:10;}</style></defs>
						<title>order-decrement-btn</title>
						<rect class="svg-frame" width="32" height="32"/>
						<polyline class="order-arrow" points="22.5 3.5 8.5 15.5 22.5 28.5"/>
						</svg>
						
						<input type="text" name="order-count" class="order-count" value="1" data-max-quantity="6" maxlength="3">

						<svg id="order-increment-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><defs><style>.cls-1,.cls-2{fill:none;}.cls-2{stroke:#000;stroke-miterlimit:10;}</style></defs>
						<title>order-increment-btn</title>
						<rect class="svg-frame" width="32" height="32"/>
						<polyline class="order-arrow" points="8.5 3.5 22.5 15.5 8.5 28.5"/>
						</svg>
					</div>
					
					<button class="submit-button">Заказать</button>


				</div>
				<!-- /.controls -->
			</div>
			<!-- /#order-frame-01 -->

			<div id="order-frame-02" class="order-frame">

				<form>
					<fieldset>
						<label>
							<h2>
								<img src="<?php bloginfo( template_directory); ?>/i/icon-order-name.svg">
								Ваше имя
							</h2>
						</label>
						<input type="text" name="name">
					</fieldset>

					<fieldset>
						<label>
							<h2>
								<img src="<?php bloginfo( template_directory); ?>/i/icon-order-phone.svg">
								Телефон
							</h2>
						</label>
						<input type="text" name="name">
					</fieldset>
					<fieldset>
						<label>
							<h2>
								<img src="<?php bloginfo( template_directory); ?>/i/icon-order-comment.svg">
								Комментарий к заявке
							</h2>
						</label>
						<textarea></textarea>
					</fieldset>
					<button type="submit" class="next-frame-button">Оставить заявку</button>
				</form>
				
			</div>
			<!-- /#order-frame-02 -->

		</div>
		<!-- /#order-container -->
	</div>
	<!-- /#order-background -->
	
	<!-- wrapper is closed in footer.tpl -->
	<div class="wrapper">