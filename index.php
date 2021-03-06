<? require_once('config.php'); //  Подключаем конфигуратор ?>
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>Демонстрация возможностей Конфигуратора v.2.3</title>
		<meta http-equiv="content-type" content="text/html; utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="GreyGler" />
		<meta name="copyright" content="https://greygler.github.io" />
		<link rel="shortcut icon" href="favicon.png" type="image/png">
		<meta name="keywords" content="Ключевые слова">
		<meta name="description" content="Описание демонстрационного ленда">
		<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/spacelab/bootstrap.min.css" rel="stylesheet" integrity="sha384-L/tgI3wSsbb3f/nW9V6Yqlaw3Gj7mpE56LWrhew/c8MIhAYWZ/FNirA64AVkB5pI" crossorigin="anonymous">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!-- Стили для работы примера -->
		<style>
		
			body {margin-bottom: 40px;} 
			.thumb-wrap {
				position: relative;
				padding-bottom: 56.25%; 
				padding-top: 30px;
				height: 0;
				overflow: hidden;
			}
			.thumb-wrap iframe {
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
			}
			.phone {float: right !important; }
			.email {float: right !important; padding-left: 10px; }
			.review {padding: 20px; margin: 20px}
		</style>
		<? lands::head($head_index64); // Код для блока HEAD ?>
	</head>
	
	<body>
		<? lands::body($body_index64); // Код для блока BODY ?>
		
		<header id="head">
			<div class="container"> 
				<div class="page-header">
					<h1 class="text-center"><strong>ДЕМОНСТРАЦИЯ ВОЗМОЖНОСТЕЙ</strong><small><br>Конфигуратор v.2.3</small></h1>
					<div class="text-center"><a href="/config" target="_blank" >Посмотреть конфигуратор</a></div>
				</div>
				<span class="visible-md visible-lg">
					<span class="phone"><strong>Звоните:</strong> <? lands::link_phone($contact_phone1); // Активная ссылка на телефон ?></span>
					<span class="email"><strong>Пишите:</strong> <? lands::link_email($contact_email); // Активная ссылка на почту ?>
					<strong>&nbsp;|&nbsp;</strong></span>
				</span>
				<span class="visible-xs visible-sm">
					<strong>Пишите:</strong> <? lands::link_email($contact_email); // Активная ссылка на почту ?>
					<br>
					<strong>Звоните:</strong> <? lands::link_phone($contact_phone1); // Активная ссылка на телефон ?>
				</span>
			</div>
		</header>
		
		<section id="main_block">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-lg-7 thumbnail"> 
						<h3>
							Видеообзор версии 2.3 
						</h3>
						<div class="thumb-wrap">
							<iframe width="854" height="480" src="https://www.youtube.com/embed/bHGkCu3VhEk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
						<h3>
							Как Вы раньше обходились без конфигуратора?
						</h3>
					</div>
					<div class="col-md-5 col-lg-5">
						<div class="jumbotron">
							<h2 class="text-center">
								Суперцена:
								<strong>
									 <?= $price_new; // Новая цена ?> <?= $currency; // Валюта?>
								</strong>
							</h2>
							<h3 class="text-center">
								<small>
									Старая цена: 
								</small>
								<strike>
									<small>
										<?= $price_old; // Старая цена ?> <?= $currency; // Валюта ?>
									</small>
								</strike>
							</h3>
							<h4 class="text-center">
								Скидка: 
								<strong>
									<span class="label label-info">
										<?= $discount; // Скидка ?>%
									<span>
								</strong>
							</h4>
						</div>
						<form id="mform" class="form-horizontal thumbnail" role="form" action="zakaz.php" method="post" onsubmit="if(this.name.value==''){alert('Введите Ваше имя!');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона!');return false}return true;"> 
							<legend>Оставьте заявку</legend>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">ФИО:</label>
									<div class="col-sm-10">
										<input type="text" name="name" required class="form-control" placeholder="Имя">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Телефон:</label>
									<div class="col-sm-10">
										<input type="text" name="phone" class="form-control" required placeholder="Телефон">
									</div>
								</div>
							
								<div class="form-group text-center">		
									<input class="btn btn-primary" type="submit" value="Отправить">
								</div>	
								<? lands::form('Главная форма'); // Имя формы с заказом ?>
								<input type="hidden" name="comment" value="sfdgsdfsdfsdfsdf">
						</form>
						<span class="help-block text-center">Мы не рассылаем спам и не передаем данные третьим лицам.</span>
					</div>
					
				</div>
			</div>	
		</section>
		
		<section id="info_block">
			<div class="container"> 
				<div class="row"> 
					<div class="col-lg-4 col-md-4">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<div class="panel-title text-center">
									<i class="fa fa-5x fa-shield" aria-hidden="true"></i>
								</div>
							</div>
							<div class="panel-body text-center">
								<h3>Гарантия</h3>
							</div>
							<div class="panel-footer text-center">
								<p><?= htmlspecialchars_decode($value1_html); // Дополнительное поле 1 ?></p>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-4">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<div class="panel-title text-center">
									<i class="fa fa-5x fa-car" aria-hidden="true"></i>
								</div>
							</div>
							<div class="panel-body text-center">
								<h3>Доставка</h3>
							</div>
							<div class="panel-footer text-center">
								<p><?= htmlspecialchars_decode($sending_html); // Информация о доставке ?></p>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-4">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<div class="panel-title text-center">
									<i class="fa fa-5x fa-umbrella" aria-hidden="true"></i>
								</div>
							</div>
							<div class="panel-body text-center">
								<h3>Возврат</h3>
							</div>
							<div class="panel-footer text-center">
								<p><?= htmlspecialchars_decode($value2_html); // Дополнительное поле 2 ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="review_block">
			<div class="container">
			
				<h2>Отзывы:</h2>
				
				<div class="review_slide">
				
					<div>
						<div class="thumbnail review">
				
							<blockquote class="blockquote-reverse">
								<p>
									<i class="fa fa-quote-left fa-3x fa-pull-left fa-border" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, error, eum, sed consequuntur similique repudiandae harum molestiae reprehenderit dolores explicabo tempore sit sunt voluptatem velit rem veniam quasi alias culpa!
								</p>
									<footer>
										<?= lands::random_name('w'); // Случайное женское имя ?>,
										<cite title="Source Title">
											г. <?= $geocity; // Город пользователя ?>
										</cite>
									</footer>
							</blockquote>
							
						</div>
					</div>
					
					<div>
						<div class="thumbnail review">
							<blockquote class="blockquote-reverse">
								<p>
									<i class="fa fa-quote-left fa-3x fa-pull-left fa-border" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, in, harum temporibus esse odit ex cupiditate quo a et tempore modi quaerat officia est eos distinctio officiis hic! Veritatis, vitae.
								</p>
									<footer>
										<?= lands::random_name('m'); // Случайное мужское имя ?>,
										<cite title="Source Title">
											г. <?= lands::random_city($country_script); // Случайный город по ГЕО ?>
										</cite>
									</footer>
							</blockquote>
							
						</div>
					</div>
					
					<div>
						<div class="thumbnail review">
							<blockquote class="blockquote-reverse">
								<p>	
									<i class="fa fa-quote-left fa-3x fa-pull-left fa-border" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, doloremque, exercitationem dolorem modi eum consequuntur repellat sed porro officiis nesciunt quasi autem qui accusantium quos perferendis. Eveniet quisquam consectetur dolor?
								</p>
									<footer>
										<?= lands::random_name('n'); // Случайное нейтральное имя ?>,
										<cite title="Source Title">
											г. <?= lands::random_city($country_script); // Случайный город по ГЕО ?>
										</cite>
									</footer>
							</blockquote>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		
		<footer id="footer">
			<div class="container">		
				<div class="footer_text">
					<? lands::seller('blue'); // Данные о продавце ?>
					<br>
					<? lands::politics('red'); // Политика конфиденциальности ?>
				</div>
			</div>
		</footer>
		
		<!-- JS скрипты -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
		
		<script> <!-- Инициализация слайдера -->
			$(document).ready(function(){
				$('.review_slide').slick({
				  dots: true,
				  infinite: true,
				  speed: 300,
				  slidesToShow: 1,
				  adaptiveHeight: true,
				   autoplay: true,
				autoplaySpeed: 3000,
				});
			});
		</script>
		
	<?  lands::footer(); // Дополнительная часть скриптов, ставим перед закрывающимся /body ?>
	</body>
</html>
