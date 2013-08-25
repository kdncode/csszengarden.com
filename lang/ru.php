<?php

	$lang = "ru";

	$head = array(
		"title" => "Сад CSS-дзена: Красота в CSS-дизайне",
		"description" => "Демонстрация визуальных достижений CSS-дизайна",

		// if you'd like translation credit, place it somewhere in this comment
		"comment" => "

	Всё верно, исходный код нужен для того, чтобы его читать.
	Спасибо за любопытство и участие!

	Рекомендации по созданию дизайна для нового улучшенного csszengarden.com:

	- CSS3? Конечно! Добавляйте префиксы для ВСЕХ необходимых браузеров.
	- Адаптируйтесь; проверяйте дизайн на нескольких размерах экрана.
	- Базовые браузеры для тестирования: IE9+, последние Chrome/Firefox/Safari и iOS/Android.
	- Постепенная деградация приветствуется и даже очень рекомендуется.
	- Используйте для оформления имена классов, не используйте ID.
	- Веб-шрифты — это круто, только убедитесь, что у вас есть нужные лицензии.

	И несколько советов по построению CSS-файла:

	- Используйте :first-child, :last-child и :nth-child для обращения к элементам без классов.
	- Используйте псевдоэлементы ::before и ::after для дополнительного оформления.
	- Используйте сколько угодно фоновых картинок для элементов, перечислив их через запятую.
	- Если будет нужно, используйте метод Келлума для замены текста картиной http://goo.gl/GXxdI
	- Не полагайтесь на дополнительные блоки в конце, используйте вместо них ::before и ::after.

	Перевёл на русский Вадим Макеев, http://pepelsbey.net

		",
	);


	$intro = array(
		"h1" => "Сад CSS-дзена",
		"h2" => 'Красота <abbr title="Cascading Style Sheets">CSS</abbr>-дизайна',

		"summary-p1" => 'Демонстрация достижений <abbr title="Cascading Style Sheets">CSS</abbr>-дизайна. Выберите любой стиль из списка, чтобы применить его к этой странице.',
		"summary-p2" => 'Загрузите примеры: <a href="' . $zenUrls["example-html"] . '" title="Исходный HTML-код этой страницы. Не должен меняться.">HTML-файл</a> и <a href="' . $zenUrls["example-css"] . '" title="Пример CSS этой страницы. Файл, который нужно изменить.">CSS-файл</a>',

		"preamble-h3" => 'Путь к просветлению',
		"preamble-p1" => 'Вдоль тёмной и печальной дороги лежат пережитки прошлого: специфичные браузерные теги, несовместимый <abbr title="Document Object Model">DOM</abbr>, поломанная поддержка <abbr title="Cascading Style Sheets">CSS</abbr> и брошенные браузеры.',
		"preamble-p2" => 'Мы должны очистить разум от прошлого. Веб уже достиг просветления неустанными усилиями ребят, вроде <abbr title="World Wide Web Consortium">W3C</abbr>, <abbr title="Web Standards Project">WaSP</abbr> и разработчиков популярных браузеров.',
		"preamble-p3" => 'Сад CSS-дзена приглашает вас расслабиться и помедитировать над важными уроками мастеров. Начните видеть ясно. Научитесь использовать проверенные временем техники на новый, вдохновляющий лад. Станьте единым с вебом.',
	);


	$main = array(
		"explanation-h3" => "Так что же это такое?",
		"explanation-p1" => 'Существует постоянная необходимость демонстрировать силу <abbr title="Cascading Style Sheets">CSS</abbr>. Сад CSS-дзена создан, чтобы восхищать, вдохновлять и побуждать к участию. Для начала, взгляните на уже существующие дизайны в списке. Переход на каждый из них загрузит новые стили на эту самую страницу. <abbr title="HyperText Markup Language">HTML</abbr> останется прежним, единственное, что изменится — внешний <abbr title="Cascading Style Sheets">CSS</abbr>-файл. Да, именно так.',
		"explanation-p2" => '<abbr title="Cascading Style Sheets">CSS</abbr> позволяет целиком и полностью контролировать оформление гипертекстового документа. Единственный способ проиллюстрировать этот принцип, чтобы вызвать восхищение — это дать кисти в руки тем, кто может создать красоту из структуры. Дизайнеры и разработчики вместе сделали много для красоты веба, но мы всегда можем пойти дальше.',

		"participation-h3" => "Участие",
		"participation-p1" => 'Мы всегда ориентировались на качественный дизайн. Вы изменяете эту страницу, поэтому хорошие знания <abbr title="Cascading Style Sheets">CSS</abbr> тоже необходимы, хотя файлы примеров прокомментированы достаточно хорошо, чтобы даже новички в <abbr title="Cascading Style Sheets">CSS</abbr> смогли использовать их как отправную точку. Также обратите внимание на <a href="' . $zenUrls["zen-resources"] . '">список ресурсов по <abbr title="Cascading Style Sheets">CSS</abbr></a>, где вы найдёте более подробные руководства и советы по работе с <abbr title="Cascading Style Sheets">CSS</abbr>.',
		"participation-p2" => 'Вы можете изменять файл стилей как вам угодно, но не трогайте <abbr title="HyperText Markup Language">HTML</abbr>. Это может поначалу показаться странным, особенно если вы никогда не делали ничего подобного, но чтение рекомендованных ресурсов и файлы примеров станут для вас хорошим руководством.',
		"participation-p3" => 'Загрузите примеры <a href="/zengarden-sample.html" title="Исходный HTML-код этой страницы. Не должен меняться.">HTML</a> и <a href="/zengarden-sample.css" title="Пример CSS этой страницы. Файл, который нужно изменить.">CSS</a> для работы над ними локально. Как только ваш шедевр будет завершён (пожалуйста, не присылайте наполовину законченные работы), загрузите <abbr title="Cascading Style Sheets">CSS</abbr>-файл на сервер под вашим управлением. <a href="' . $zenUrls["zen-submit"] . '" title="Используйте контактную форму для отправки нам CSS-файла">Пришлите нам ссылку</a> на архив с этим файлом и всеми необходимыми для него ресурсами. И если мы решим использовать этот дизайн, то загрузим его и положим на наши сервера.',

		"benefits-h3" => "Польза",
		"benefits-p1" => 'Зачем участвовать? Для признания, вдохновения и создания места, на которое можно сослаться, демонстрируя насколько великолепным может быть <abbr title="Cascading Style Sheets">CSS</abbr>. Этот сайт одинаково служит вдохновлением для тех, кто работает с вебом сегодня, инструментом для обучения для тех, кто будет работать завтра и галереей будущих техник, которых мы все ждём.',

		"requirements-h3" => "Требования",
		"requirements-p1" => 'Там где это возможно, мы хотели бы видеть использование в основном <abbr title="Cascading Style Sheets">CSS</abbr> 1 и 2. Использование <abbr title="Cascading Style Sheets">CSS</abbr> 3 и 4 должно быть ограничено только свойствами с широкой поддержкой, либо с надёжными фолбеками. Сад CSS-дзена — это, прежде всего, функциональный и практический <abbr title="Cascading Style Sheets">CSS</abbr>, а не набор последних трюков, которые увидят всего 2% пользователей. Единственное реальное требование, чтобы ваш <abbr title="Cascading Style Sheets">CSS</abbr> был валидным.',
		"requirements-p2" => 'К счастью, разрабатывая таким образом, вы увидите насколько хорошо различные браузеры поддерживают сегодня <abbr title="Cascading Style Sheets">CSS</abbr>. Следуя этим рекомендациям, вы добьётесь вполне одинаковых результатов во всех современных браузерах. Из-за огромного числа различных браузеров в эти дни — особенно это заметно на мобильных — вёрстка с пиксельной точностью на всех платформах невозможна. Это нормально, но всё же постарайтесь проверить вёрстку в как можно большем числе браузеров. Ваш дизайн должен работать, как минимум, в IE9+ и в последних версиях Chrome, Firefox и во встроенных браузерах на iOS и Android (то есть для 90% пользователей).',
		"requirements-p3" => 'Мы просим вас публиковать только оригинальные работы. Пожалуйста, уважайте авторские права и законы. Постарайтесь свести спорную тематику к минимуму и попробуйте использовать уникальные и интересные визуальные решения в ваших работах. Вряд ли нам нужен очередной дизайн, связанный с садом, мы уже прошли этот этап.',
		"requirements-p4" => 'Это не только демонстрация, но и обучающий материал. Вы сохраняете полные авторские права на вашу графику (с некоторыми исключениями, см. <a href="' . $zenUrls["zen-guidelines"] . '">правила публикации</a>), но мы просим публиковать ваш <abbr title="Cascading Style Sheets">CSS</abbr> под лицензией Creative Commons, идентичной <a href="' . $zenUrls["zen-license"] . '" title="Информация о лицензии Сада дзена.">лицензии этого сайта</a>, так что другие смогут учиться по вашей работе.',
		"requirements-p5" => 'Автор <a href="' . $zenUrls["zen-credits-creator"] . '">Дейв Шей</a>. Трафик любезно предоставлен <a href="' . $zenUrls["zen-credits-hosting"] . '">mediatemple</a>. Теперь и в виде <a href="' . $zenUrls["zen-credits-book"] . '">книги «Сад дзена»</a>.',
	);

	// if you decide to localize any of these, keep the link text <4 characters if possible
	// some older designs assume the longest one in the group was 'XHTML'
	$footer = array(
		"zen-validate-html-title" => "Проверьте валидность HTML этого сайта",
		"zen-validate-html-text" => "HTML",
		"zen-validate-css-title" => "Проверьте валидность CSS этого сайта",
		"zen-validate-css-text" => "CSS",
		"zen-license-title" => "Лицензия Creative Commons для этого сайта: Attribution-NonCommercial-ShareAlike.",
		"zen-license-text" => "CC",
		"zen-accessibility-title" => "Читайте о доступности этого сайта",
		"zen-accessibility-text" => "A11y", // a-ccessibilit-y, the middle part is 11 characters. get it?
		"zen-github-title" => "Форкните этот сайт на Гитхабе",
		"zen-github-text" => "GH",
	);

	$sidebar = array(
		"design-selection-h3" => "Выберите дизайн:",
		"design-selection-by" => "автор",

		"design-archives-h3" => "Архивы:",
		"design-archives-next" => "Следующие дизайны",
		"design-archives-previous" => "Предыдущие дизайны",
		"design-archives-viewall-title" => "Все дизайны для Сада дзена.",
		"design-archives-viewall-text" => "Все дизайны",

		"design-resources-h3" => "Ресурсы:",
		"view-css-title" => 'Исходный CSS-файл текущего дизайна.',
		"view-css-text" => '<abbr title="Cascading Style Sheets">CSS</abbr> для этого дизайна',
		"css-resources-title" => 'Ссылки на отличные ресурсы с информацией по использованию CSS.',
		"css-resources-text" => 'Ресурсы по <abbr title="Cascading Style Sheets">CSS</abbr>',
		"zen-faq-title" => 'Ответы на самые частые вопросы по Саду дзена.',
		"zen-faq-text" => 'Ответы на вопросы',
		"zen-submit-title" => 'Отправьте ваш собственный CSS-файл.',
		"zen-submit-text" => 'Отправить дизайн',
		"zen-translations-title" => 'Переведённые версии этого сайта.',
		"zen-translations-text" => 'Переводы',
	);

	$foot = array(
		"comment" => "
	Эти избыточные дивы и спаны были изначально предназначены для вставки дополнительных картинок.
	Сегодня у нас есть полная поддержка ::before и ::after, используйте лучше их.
	Старые элементы останутся для исторической совместимости. Но могут однажды исчезнуть.
		",
	);


?>