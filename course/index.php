<?php
	$dates = array(
		strtotime('2020-01-14'),
		strtotime('2020-01-15'),
		strtotime('2020-01-16'),
		strtotime('2020-01-17'),
		strtotime('2020-01-21')
	);
	$now = strtotime('now');
	if ($now < $dates[0]) {
			require('prices/prices-1.php');
	}
	elseif (($now >= $dates[0])&&($now < $dates[1])) {
			require('prices/prices-2.php');
	}
	elseif (($now >= $dates[1])&&($now < $dates[2])) {
			require('prices/prices-3.php');
	}
	elseif (($now >= $dates[2])&&($now < $dates[3])) {
			require('prices/prices-4.php');
	}
	else {
			require('prices/prices-5.php');
	}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device=width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://tolstikov.mastervision.su/nlp-and-hypnosis/course/" />
	<meta property="og:title" content="«НЛП и Гипноз»" />
	<meta property="og:description" content="Обучающий курс Виктора Толстикова" />
	<title>«НЛП и Гипноз». Обучающий курс Виктора Толстикова</title>
	<link rel="icon" type="image/x-icon" href="../favicon.ico" />
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.png" />
	<link rel="stylesheet" href="../css/course.min.css" />
	<script type="text/javascript">
		! function () {
			var t = document.createElement("script");
			t.type = "text/javascript", t.async = !0, t.src = "https://vk.com/js/api/openapi.js?160", t.onload = function () {
				VK.Retargeting.Init("VK-RTRG-350620-gJCgg"), VK.Retargeting.Hit()
			}, document.head.appendChild(t)
		}();
	</script>
	<noscript><img src="https://vk.com/rtrg?p=VK-RTRG-350620-gJCgg" style="position:fixed; left:-999px;"
			alt="" /></noscript><!-- Global site tag (gtag.js) - Google Analytics -->
	<script async="async" src="https://www.googletagmanager.com/gtag/js?id=UA-130434463-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-130434463-1');
	</script><!-- Facebook Pixel Code -->
	<script>
		! function (f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function () {
				n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '2406475009380573');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=2406475009380573&amp;ev=PageView&amp;noscript=1" /></noscript>
	<!-- End Facebook Pixel Code -->
</head>

<body>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function () {
				try {
					w.yaCounter35450015 = new Ya.Metrika({
						id: 35450015,
						clickmap: true,
						trackLinks: true,
						accurateTrackBounce: true,
						webvisor: true
					});
				} catch (e) {}
			});
			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () {
					n.parentNode.insertBefore(s, n);
				};
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/watch.js";
			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else {
				f();
			}
		})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript>
		<div><img src="https://mc.yandex.ru/watch/35450015" style="position:absolute; left:-9999px;" alt="" /></div>
	</noscript><!-- /Yandex.Metrika counter -->
	<!-- Rating@Mail.ru counter -->
	<script type="text/javascript">
		var _tmr = window._tmr || (window._tmr = []);
		_tmr.push({
			id: "3089960",
			type: "pageView",
			start: (new Date()).getTime(),
			pid: "USER_ID"
		});
		(function (d, w, id) {
			if (d.getElementById(id)) return;
			var ts = d.createElement("script");
			ts.type = "text/javascript";
			ts.async = true;
			ts.id = id;
			ts.src = "https://top-fwz1.mail.ru/js/code.js";
			var f = function () {
				var s = d.getElementsByTagName("script")[0];
				s.parentNode.insertBefore(ts, s);
			};
			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else {
				f();
			}
		})(document, window, "topmailru-code");
	</script>
	<noscript>
		<div><img src="https://top-fwz1.mail.ru/counter?id=3089960;js=na" style="border:0;position:absolute;left:-9999px;"
				alt="Top.Mail.Ru" /></div>
	</noscript><!-- //Rating@Mail.ru counter -->
	<header>
		<div class="container"><a href="https://mastervision.su" target="_blank" id="logo"></a>
			<div class="contacts"><a class="contact contact-tel" href="callto:8-929-568-87-50"
					target="_blank">8-929-568-87-50</a><a class="contact contact-tel" href="callto:8-499-346-79-46"
					target="_blank">8-499-346-79-46</a><a class="contact contact-skype"
					href="https://join.skype.com/invite/gkwrZmJPOtuf" target="_blank">support-mastervision</a><a
					class="contact contact-email" href="mailto:info@mastervision.su" target="_blank">info@mastervision.su</a>
			</div>
		</div>
	</header>
	<section id="main">
		<div class="container">
			<div class="main-container">
				<p class="pre">записи мастер-класса - внизу страницы</p>
				<h1 class="main-title"> <small>обучающий курс</small>НЛП и Гипноз</h1>
				<p class="main-info">Старт курса: <span>NN января, в 19:00 (мск)</span></p>
				<p class="main-info">Автор курса: <span>Виктор Толстиков</span></p><a class="button" href="#prices" target=""
					id="">Записаться</a>
			</div>
		</div>
	</section>
	<section id="for">
		<div class="container">
			<div class="white-container">
				<h3 class="general-title general-title-for">Этот мастер-класс для вас, если...</h3>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h4 class="for-title">Если Вы:</h4>
						<ul class="general-list general-list-for">
							<li>не знаете, как избавиться от чужого влияния;</li>
							<li>устали от одиночества и непонимания;</li>
							<li>не понимаете, за что хвататься;</li>
							<li>хотите забыть про неприятности и проблемы;</li>
							<li>страдаете от уныния и хронической усталости</li>
						</ul>
					</div>
					<div class="col-md-6 col-sm-6">
						<h4 class="for-title">И хотите:</h4>
						<ul class="general-list general-list-2 general-list-for">
							<li>уметь противодействовать лжи и манипуляциям;</li>
							<li>найти верных друзей или любимого человека;</li>
							<li>поверить в себя и добиться финансового успеха;</li>
							<li>самому управлять своей судьбой и счастьем;</li>
							<li>сохранить здоровье и радость на многие годы</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="nlp">
		<h3 class="general-title general-title-2">Модуль &quot;НЛП&quot;</h3>
		<div class="container">
			<div class="parts">
				<div class="part part-1"><img class="part-img part-img-1" src="../img/images/part-1.png"
						alt="Часть 1: “Экстрасенсорика”" />
					<h4 class="part-title">Часть 1: “Экстрасенсорика”</h4>
					<ul class="general-list-3">
						<li>Научитесь моментально определять психотипы людей</li>
						<li>Узнаете как видеть людей насквозь и читать их мысли</li>
						<li>Сможете легкостью распознавать ложь и манипуляции</li>
					</ul>
				</div>
				<div class="part part-2"><img class="part-img part-img-2" src="../img/images/part-2.png"
						alt="Часть 2: “Магия обольщения”" />
					<h4 class="part-title">Часть 2: “Магия обольщения”</h4>
					<ul class="general-list-3">
						<li>Узнаете как нравиться людям и вызывать интерес к себе</li>
						<li>Освоите мастерство общения и искусство очарования</li>
						<li>Научитесь понимать людей и доносить до них свои мысли</li>
					</ul>
				</div>
				<div class="part part-3"><img class="part-img part-img-3" src="../img/images/part-3.png"
						alt="Часть 3: “Мастерство влияния”" />
					<h4 class="part-title">Часть 3: “Мастерство влияния”</h4>
					<ul class="general-list-3">
						<li>Узнаете как вызывать доверие и уважение к себе</li>
						<li>Освоите искусство убеждения и технологии влияния</li>
						<li>Сможете противодействовать любым манипуляциям</li>
					</ul>
				</div>
				<div class="part part-4"><img class="part-img part-img-4" src="../img/images/part-4.png"
						alt="Часть 4: “Гениальность и совершенство”" />
					<h4 class="part-title">Часть 4: “Гениальность и совершенство”</h4>
					<ul class="general-list-3">
						<li>Научитесь входить в состояние мастерства и творчества</li>
						<li>Узнаете секреты успеха от гениев и миллионеров</li>
						<li>Получите инструменты для ускоренного саморазвития</li>
					</ul>
				</div>
				<div class="part part-5"><img class="part-img part-img-5" src="../img/images/part-5.png"
						alt="Часть 5: “Исполнение желаний”" />
					<h4 class="part-title">Часть 5: “Исполнение желаний”</h4>
					<ul class="general-list-3">
						<li>Сможете отличать свои истинные мечты от навязанных</li>
						<li>Узнаете эффективные методы достижения целей</li>
						<li>Освоите психотехнологии исполнения желаний</li>
					</ul>
				</div>
				<div class="part part-6"><img class="part-img part-img-6" src="../img/images/part-6.png"
						alt="Часть 6: “Чудо исцеления”" />
					<h4 class="part-title">Часть 6: “Чудо исцеления”</h4>
					<ul class="general-list-3">
						<li>Научитесь избавляться от страхов и комплексов</li>
						<li>Узнаете как исцелиться от психосоматических болезней</li>
						<li>Сможете попрощаться с вредными привычками</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="container"><a class="button button-plan" href="#prices">Записаться</a>
		</div>
	</section>
	<section id="hypnosis">
		<h3 class="general-title general-title-2 general-title-hypnosis">Модуль &quot;Гипноз&quot;</h3>
		<div class="container">
			<div class="parts">
				<div class="part part-hypno part-1"><img class="part-img part-img-1" src="../img/images/part-7.png"
						alt="Часть 1: “Основы гипноза”" />
					<h4 class="part-title">Часть 1: “Основы гипноза”</h4>
					<ul class="general-list-3 general-list-hypno">
						<li>Узнаете как легко останавливать внутренний диалог</li>
						<li>Научитесь выявлять в трансовые состояния у людей</li>
						<li>Погрузитесь в состояние глубокой релаксации</li>
					</ul>
				</div>
				<div class="part part-hypno part-2"><img class="part-img part-img-2" src="../img/images/part-8.png"
						alt="Часть 2: “Наведение транса”" />
					<h4 class="part-title">Часть 2: “Наведение транса”</h4>
					<ul class="general-list-3 general-list-hypno">
						<li>Освоите базовые навыки погружения в транс</li>
						<li>Узнаете, как незаметно гипнотизировать человека</li>
						<li>Научитесь различным гипнотическим техникам</li>
					</ul>
				</div>
				<div class="part part-hypno part-3"><img class="part-img part-img-3" src="../img/images/part-9.png"
						alt="Часть 3: “Речевой гипноз”" />
					<h4 class="part-title">Часть 3: “Речевой гипноз”</h4>
					<ul class="general-list-3 general-list-hypno">
						<li>Узнаете как внушать гипнотические установки и команды</li>
						<li>Сможете рассказывать истории, меняющие сознание</li>
						<li>Научитесь наделять свои слова особой силой</li>
					</ul>
				</div>
				<div class="part part-hypno part-4"><img class="part-img part-img-4" src="../img/images/part-10.png"
						alt="Часть 4: “Сверх-способности”" />
					<h4 class="part-title">Часть 4: “Сверх-способности”</h4>
					<ul class="general-list-3 general-list-hypno">
						<li>Научитесь входить в состояние сверх-человека</li>
						<li>Узнаете как управлять процессами в своём организме</li>
						<li>Сможете раскрыть в себе необычные способности</li>
					</ul>
				</div>
				<div class="part part-hypno part-5"><img class="part-img part-img-5" src="../img/images/part-11.png"
						alt="Часть 5: “Машина времени”" />
					<h4 class="part-title">Часть 5: “Машина времени”</h4>
					<ul class="general-list-3 general-list-hypno">
						<li>Отправитесь в прошлые жизни, чтобы узнать всё о себе</li>
						<li>Перенесётесь в будущее, чтобы воплотить свои мечты</li>
						<li>Научитесь программированию на успех и везение</li>
					</ul>
				</div>
				<div class="part part-hypno part-6"><img class="part-img part-img-6" src="../img/images/part-12.png"
						alt="Часть 6: “Целительный гипноз”" />
					<h4 class="part-title">Часть 6: “Целительный гипноз”</h4>
					<ul class="general-list-3 general-list-hypno">
						<li>Узнаете, как обрести целостность и равновесие</li>
						<li>Примите участие в гармонизирующем сеансе</li>
						<li>Получите установки на исцеление и долголетие</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="container"><a class="button button-plan" href="#prices">Записаться</a>
		</div>
	</section>
	<section id="prices">
		<h3 class="general-title general-title-2 general-title-prices">Выберите свой пакет участия:</h3>
		<div class="container">
			<div class="packets">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="packet">
							<div class="packet-head">
								<h4 class="packet-head-title">"НЛП"</h4>
							</div>
							<div class="packet-body">
								<ul class="general-list-3 general-list-packet">
									<li>6 занятий</li>
								</ul>
								<p class="more-button" data-toggle="modal" data-target="#modal-1">подробнее</p>
								<ul class="general-list-3 general-list-packet">
									<li>Закрытая учебная площадка</li>
									<li>Проверка ДЗ в комментариях</li>
									<li>Видео с ответами на вопросы</li>
								</ul>
							</div>
							<div class="packet-footer">
								<?php if($now < $dates[3]) {;?>
								<p class="cost cost-full">Стоимость:<span>9 990р.</span></p>
								<p class="cost cost-sale">Скидка:<span id="sale-1"><?=$sale_1 ;?></span></p>
								<p class="cost cost-today">Стоимость сегодня:<span id="today-1"><?=$today_1 ;?></span></p>
								<?php } else {;?>
									<p class="cost cost-full">Стоимость:<span class="unbroken">9 990р.</span></p>
									<?php } ;?>
								<a
									class="button button-cost"
									href="<?=$link_1 ;?>"
									target="_blank" id="link-1">Выбрать</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="packet">
							<div class="packet-head">
								<h4 class="packet-head-title">"НЛП"+"Гипноз"</h4>
							</div>
							<div class="packet-body">
								<ul class="general-list-3 general-list-packet">
									<li>12 занятий</li>
								</ul>
								<p class="more-button" data-toggle="modal" data-target="#modal-2">подробнее</p>
								<ul class="general-list-3 general-list-packet">
									<li>Закрытая учебная площадка</li>
									<li>Проверка ДЗ в комментариях</li>
									<li>Видео с ответами на вопросы</li>
								</ul>
							</div>
							<div class="packet-footer">
							<?php if($now < $dates[3]) {;?>
								<p class="cost cost-full">Стоимость:<span>18 990р.</span></p>
								<p class="cost cost-sale">Скидка:<span id="sale-2"><?=$sale_2 ;?></span></p>
								<p class="cost cost-today">Стоимость сегодня:<span id="today-2"><?=$today_2 ;?></span></p>
								<?php } else {;?>
									<p class="cost cost-full">Стоимость:<span class="unbroken">18 990р.</span></p>
									<?php } ;?>
									<a
										class="button button-cost"
										href="<?=$link_2 ;?>"
										target="_blank" id="link-2">Выбрать</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="packet">
							<div class="packet-head">
								<h4 class="packet-head-title">"Матер-группа"</h4>
							</div>
							<div class="packet-body">
								<ul class="general-list-3 general-list-packet">
									<li>12 занятий</li>
								</ul>
								<p class="more-button" data-toggle="modal" data-target="#modal-2">подробнее</p>
								<ul class="general-list-3 general-list-packet">
									<li>Закрытая учебная площадка</li>
									<li>Проверка ДЗ в комментариях</li>
									<li>Видео с ответами на вопросы</li>
									<li>Закрытый чат</li>
									<li>Разбор ДЗ голосом</li>
									<li>Вебинар с ответами на вопросы каждую неделю</li>
								</ul>
							</div>
							<div class="packet-footer">
							<?php if($now < $dates[3]) {;?>
								<p class="cost cost-full">Стоимость:<span>23 990р.</span></p>
								<p class="cost cost-sale">Скидка:<span id="sale-3"><?=$sale_3 ;?></span></p>
								<p class="cost cost-today">Стоимость сегодня:<span id="today-3"><?=$today_3 ;?></span></p>
								<?php } else {;?>
									<p class="cost cost-full">Стоимость:<span class="unbroken">23 990р.</span></p>
									<?php } ;?>
								<a
									class="button button-cost"
									href="<?=$link_3 ;?>"
									target="_blank" id="link-3">Выбрать</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php if ($now < $dates[3]) {;?>
			<div class="prepayment">
				<h4 class="prepayment-title">Акция!!!</h4>
				<p class="prepayment-text">Платите 500р., бонусом получаете <span id="prepayment-bonus">500р.</span><br />На
					счет зачисляется <span id="prepayment-credited">1 000р.</span></p><a class="button prepayment-button"
					href="https://shop.mastervision.su/?r=ordering/cart/as1&amp;id=4345&amp;clean=true&amp;lg=ru" target="-blank"
					id="prepayment-link">Оплатить 500р.</a>
			</div>
			<div class="timer">
				<h4 class="timer-title">Скидка уменьшится через:</h4>
				<div class="clock"></div>
				<div class="clock-stop"></div>
			</div>
			<?php } ;?>
		</div>
	</section>
	<section id="records">
		<div class="container">
			<div class="white-container">
				<?php if ($now < $dates[4]) {;?>
				<h3 class="general-title general-title-recs">Записи мастер-класса</h3>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h4 class="record-title">Запись занятия от 13.01.20</h4>
						<div class="video-wrapper video-wrapper-rec">
							<iframe src="https://player.vimeo.com/video/" allowFullScreen="allowFullScreen"
								mozallowfullscreen="mozallowfullscreen" webkitAllowFullScreen="webkitAllowFullScreen"></iframe>
						</div>
						<p class="rec-text">Занятие состоится 13.01.20, в 19:00</p>
						<p class="rec-text">Запись занятия появится здесь 14.01.20, после 13:00</p>
					</div>
					<div class="col-md-6 col-sm-6">
						<h4 class="record-title">Запись занятия от 14.01.20</h4>
						<div class="video-wrapper video-wrapper-rec">
							<iframe src="https://player.vimeo.com/video/" allowFullScreen="allowFullScreen"
								mozallowfullscreen="mozallowfullscreen" webkitAllowFullScreen="webkitAllowFullScreen"></iframe>
						</div>
						<p class="rec-text">Занятие состоится 14.01.20, в 19:00</p>
						<p class="rec-text">Запись занятия появится здесь 15.01.20, после 13:00</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h4 class="record-title">Запись занятия от 15.01.20</h4>
						<div class="video-wrapper video-wrapper-rec">
							<iframe src="https://player.vimeo.com/video/" allowFullScreen="allowFullScreen"
								mozallowfullscreen="mozallowfullscreen" webkitAllowFullScreen="webkitAllowFullScreen"></iframe>
						</div>
						<p class="rec-text">Занятие состоится 15.01.20, в 19:00</p>
						<p class="rec-text">Запись занятия появится здесь 16.01.20, после 13:00</p>
					</div>
					<div class="col-md-6 col-sm-6">
						<h4 class="record-title">Запись занятия от 16.01.20</h4>
						<div class="video-wrapper video-wrapper-rec">
							<iframe src="https://player.vimeo.com/video/" allowFullScreen="allowFullScreen"
								mozallowfullscreen="mozallowfullscreen" webkitAllowFullScreen="webkitAllowFullScreen"></iframe>
						</div>
						<p class="rec-text">Занятие состоится 16.01.20, в 19:00</p>
						<p class="rec-text">Запись занятия появится здесь 17.01.20, после 13:00</p>
					</div>
				</div>
				<p class="recs-text">Записи занятий будет в открытом доступе до 20.01.20</p>
				<?php } else  { ;?>
				<h3 class="general-title">Записей мастер-класса нет в свободном доступе</h3>
				<p class="rec-text text-sale">Но Вы можете купить запись интенсива за 250р. и радоваться жизни вместе с
					теми, кто её уже смотрел</p><a class="button" href="" target="_blank">Купить записи</a>
							<?php } ;?>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<h5>Хотите узнать больше? Вступайте в наши группы!</h5>
			<div class="soc-buttons"><a href="https://www.facebook.com/Mastervision1C/" target="_blank"><i
						class="fa fa-facebook" aria-hidden="true"></i></a><a href="https://vk.com/mv_akademia" target="_blank"><i
						class="fa fa-vk" aria-hidden="true"></i></a><a href="https://twitter.com/MastervisionEzo" target="_blank"><i
						class="fa fa-twitter" aria-hidden="true"></i></a><a href="https://www.instagram.com/mastervision1/"
					target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a><a
					href="https://www.youtube.com/channel/UCiJTdt19jRMRmYyCZac2Lvg/" target="_blank"><i class="fa fa-youtube"
						aria-hidden="true"></i></a>
				<div class="clfix"></div>
			</div>
			<p>ИП Кудряшов Александр Анатольевич, Тюмень, проезд Летний, 9а, ИНН 720410077658, ОГРН 315723200065100</p><a
				class="conditions" href="../oferta/oferta-course.doc" download="download">Условия возврата денежных средств</a>
		</div>
	</footer>
	<div class="modal fade" tabindex="-1" role="dialog" id="modal-1">
		<div class="modal-dialog" role="document">
			<div class="modal-content mail-modal-content">
				<div class="modal-wrapper">
					<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
					<div class="modal-body">
						<h4 class="modal-title">Модуль "НЛП"</h4>
						<ul class="general-list-3 modal-list">
							<li>Часть 1: “Экстрасенсорика”</li>
							<li>Часть 2: “Магия обольщения”</li>
							<li>Часть 3: “Мастерство влияния”</li>
							<li>Часть 4: “Гениальность и совершенство”</li>
							<li>Часть 5: “Исполнение желаний”</li>
							<li>Часть 6: “Чудо исцеления”</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" tabindex="-1" role="dialog" id="modal-2">
		<div class="modal-dialog" role="document">
			<div class="modal-content mail-modal-content">
				<div class="modal-wrapper">
					<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
					<div class="modal-body">
						<h4 class="modal-title">Модуль "НЛП"</h4>
						<ul class="general-list-3 modal-list">
							<li>Часть 1: “Экстрасенсорика”</li>
							<li>Часть 2: “Магия обольщения”</li>
							<li>Часть 3: “Мастерство влияния”</li>
							<li>Часть 4: “Гениальность и совершенство”</li>
							<li>Часть 5: “Исполнение желаний”</li>
							<li>Часть 6: “Чудо исцеления”</li>
						</ul>
						<h4 class="modal-title">Модуль "Гипноз"</h4>
						<ul class="general-list-3 modal-list">
							<li>Часть 1: “Основы гипноза”</li>
							<li>Часть 2: “Наведение транса”</li>
							<li>Часть 3: “Речевой гипноз”</li>
							<li>Часть 4: “Сверх-способности”</li>
							<li>Часть 5: “Машина времени”</li>
							<li>Часть 6: “Целительный гипноз”</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<script src="../js/course.min.js"></script><!-- AutoWebOffice: UTM or OpenStat Counter -->
	<script type="text/javascript">
		var url = "https://shop.mastervision.su/?r=api/utmopenstat";
	</script>
	<script type="text/javascript" src="https://shop.mastervision.su/js/utm_openstat.js" defer="defer"></script>
	<!-- /AutoWebOffice: UTM or OpenStat Counter -->
</body>

</html>