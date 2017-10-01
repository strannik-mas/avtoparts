<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 20,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Оформление заказа',
    'longtitle' => '',
    'description' => '',
    'alias' => 'oformlenie-zakaza',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 9,
    'menuindex' => 5,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1487548490,
    'editedby' => 1,
    'editedon' => 1487632478,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1487548440,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 1,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'oformlenie-zakaza',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'keywords' => 
    array (
      0 => 'keywords',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'autotag',
    ),
    '_content' => '<!DOCTYPE HTML>
<html>
<head>
[[!MetaX?
]]
    <link rel="stylesheet" type="text/css" href="/assets/shop/css/style.css" />
    <link href="/assets/web/css/style_2.css" rel="stylesheet" type="text/css"  media="all" />
    <link href=\'http://fonts.googleapis.com/css?family=Roboto\' rel=\'stylesheet\' type=\'text/css\'>
	<link rel="stylesheet" href="/assets/web/css/flexslider.css" type="text/css" media="all" />
	<link href=\'http://fonts.googleapis.com/css?family=Ruslan+Display&subset=latin,cyrillic\' rel=\'stylesheet\' type=\'text/css\'>
	<script src="/assets/web/js/modernizr.js"></script>
	<script src="/assets/web/js/responsive-nav.js"></script>
    
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/shop/css/ie.css" />
	<![endif]-->

	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript" src="/assets/shop/js/jquery-3.1.1.min.js"></script>-->
	<script type="text/javascript" src="/assets/shop/js/jquery.js"></script>
	<script type="text/javascript" src="/assets/shop/js/script.js"></script>
	<script type="text/javascript" src="/assets/shop/js/myscript.js"></script>
	<script type="text/javascript" src="/assets/shop/js/jquery.colorbox-min.js"></script>
	<script type="text/javascript" src="/assets/shop/js/jquery.toastmessage.js"></script>
	<link href="/assets/shop/css/jquery-ui.css" rel="stylesheet">
	<link href="/assets/shop/css/colorbox.css" rel="stylesheet">
	<link href="/assets/shop/css/jquery.toastmessage.css" rel="stylesheet">
	<script type="text/javascript" src="/assets/shop/js/jquery-ui.min.js"></script>
</head>
<body>

		<div id="wrap">
<header>
<!--start-logo-->
<div class="logo">
	<a href="http://avtoparts/"><img src="/assets/web/images/logo.png" /></a>
</div>
    
    <div id="header-block2">
		<span>Телефон:</span><br>
		<span class="phone">+7 (495)</span> 540 28 48
	</div><!--end header-block2-->
    
	<div id="header-block3">
		<a href="#" onclick="jQuery(\'#hover-window-wrap\').show(); return false" class="call-button">Заказать звонок</a>
	</div><!--end header-block3-->

	    <div id="header-block4">
            [[!SimpleSearchForm?
            	&tpl=`SearchFormTpl`
            	&landing=`43`
            ]]
    </div><!--end header-block4-->
    
    <ul id="second-menu">
[[!Shopkeeper3@cart_catalog]]
    [[!compare?
        &comparePageId=`28`
        &limitProducts=`4`
        &toCompare_tpl=`compare`
        &onlyThisParentId=`20`
    ]]


    	
    	<li id="sm-shop">
    		<a href="#" onclick="return false">Вход в кабинет</a>
    
    		<div id="enter-widow">
                [[!Personalize? &yesChunk=`header_for_members` &noChunk=`header_for_guests` &ph=`name`]]
    		</div>
    	</li>
    </ul>
    
	<!--<div id="header-block1">
		<span>Бесплатный звонок:</span><br>
		<span class="phone">8 800</span> 540 28 48
	</div>end header-block1-->
</header>
<!--start-header-->
<div class="header">
<!--start-wrap-->
<div class="wrap">
	<!-- Главное меню -->
   	<div class="top-nav">
       	<ul><li><a href="http://avtoparts/" >Главная</a></li><li><a href="http://avtoparts/dostavka-i-oplata" >Доставка и оплата</a></li><li><a href="http://avtoparts/kontaktyi" >Контакты</a></li><li><a href="http://avtoparts/katalog/osveshhenie/" >Освещение</a><ul><li><li><a href="http://avtoparts/katalog/osveshhenie/golovnoj-svet/" >Головной свет</a></li><li><a href="http://avtoparts/katalog/osveshhenie/led-lampyi/" >LED лампы</a></li><li><a href="http://avtoparts/katalog/osveshhenie/lampyi-nakalivaniya" >Лампы накаливания</a></li><li><a href="http://avtoparts/katalog/osveshhenie/diodnyie-lentyi" >Диодные ленты</a></li></li></ul></li><li><a href="http://avtoparts/katalog/xomutyi/" >Хомуты</a><ul><li><li><a href="http://avtoparts/katalog/xomutyi/xomut-nerzhavejka" >Хомут нержавейка</a></li><li><a href="http://avtoparts/katalog/xomutyi/xomut-oczinkovanyij" >Хомут оцинкованый</a></li><li><a href="http://avtoparts/katalog/xomutyi/xomut-silovoj-nerzhavejka" >Хомут силовой нержавейка</a></li><li><a href="http://avtoparts/katalog/xomutyi/xomut-silovoj-oczinkovanyij" >Хомут силовой оцинкованый</a></li><li><a href="http://avtoparts/katalog/xomutyi/kabelnaya-styazhka" >Кабельная стяжка</a></li></li></ul></li><li><a href="http://avtoparts/katalog/uplotniteli/" >Уплотнители</a><ul><li><li><a href="http://avtoparts/katalog/uplotniteli/dvernyie-uplotniteli/" >Дверные уплотнители</a></li><li><a href="http://avtoparts/katalog/uplotniteli/okonnyie-uplotniteli/" >Оконные уплотнители</a></li><li><a href="http://avtoparts/katalog/uplotniteli/gruzovyie-uplotniteli" >Грузовые уплотнители</a></li></li></ul></li><li><a href="http://avtoparts/katalog/styazhnyie-remni/" >Стяжные ремни</a><ul><li><li><a href="http://avtoparts/katalog/styazhnyie-remni/do-15-tonn" >До 1,5 тонн</a></li><li><a href="http://avtoparts/katalog/styazhnyie-remni/3-tonnyi" >3 тонны</a></li><li><a href="http://avtoparts/katalog/styazhnyie-remni/5-tonn" >5 тонн</a></li><li><a href="http://avtoparts/katalog/styazhnyie-remni/styazhnaya-lenta" >Стяжная лента</a></li></li></ul></li><li><a href="http://avtoparts/katalog/shlangi/" >Шланги</a><ul><li><li><a href="http://avtoparts/katalog/shlangi/shlangi-mbs" >Шланги МБС</a></li><li><a href="http://avtoparts/katalog/shlangi/shlangi-pnevmosistemyi/" >Шланги пневмосистемы</a></li><li><a href="http://avtoparts/katalog/shlangi/shlangi-pvx/" >Шланги ПВХ</a></li><li><a href="http://avtoparts/katalog/shlangi/soedineniya-shlangov" >Соединения шлангов</a></li></li></ul></li><li><a href="http://avtoparts/katalog/avtoelektrika/" >Автоэлектрика</a><ul><li><li><a href="http://avtoparts/katalog/avtoelektrika/predoxraniteli" >Предохранители</a></li><li><a href="http://avtoparts/katalog/avtoelektrika/razemyi-dlya-provodov" >Разъемы для проводов</a></li></li></ul></li><li><a href="http://avtoparts/katalog/dvorniki/" >Дворники</a><ul><li><li><a href="http://avtoparts/katalog/dvorniki/karkasnyie" >Каркасные</a></li><li><a href="http://avtoparts/katalog/dvorniki/bezkarkasnyie" >Безкаркасные</a></li><li><a href="http://avtoparts/katalog/dvorniki/gibridnyie" >Гибридные</a></li></li></ul></li></ul>
    </div>
	<!-- end Главное меню -->
<div class="clear"> </div>
				<!--End-wrap-->
			</div>
			<!--End-header-->
		</div>
				<div class="clear"> </div>
<div id="content">

<div class="clear"> </div>
<div id="hover-window-wrap">
	<div id="hover-window">
		<div id="phone-close"><img src="/assets/shop/images/delete.jpg" alt=""></div>
[[!AjaxForm?
    &snippet=`FormIt`
    &form=`zvonok`
    &hooks=`email`
    &emailSubject=`Заказ обратного звонка`
    &emailTo=`strannik-mas@yandex.ru`
    &validate=`name:required`
    &validationErrorMessage=`В форме содержатся ошибки!`
    &successMessage=`Сообщение успешно отправлено! В ближайшее время с вами свяжется наш менеджер.`
    &emailFromName=`avtoPARTS`
]]
	</div>
</div>
<ul class="breadcrumbs"><li><a href="/">Главная</a></li>
<li class="active">Оформление заказа</li></ul>
<article class="full">
	<h3 class="black">Оформление заказа</h3>	

[[!Shopkeeper3@cart_order_page]]

[[!FormIt?
&hooks=`spam,shk_fihook,email,FormItAutoResponder,redirect`
&submitVar=`order`
&emailTpl=`shopOrderReport`
&fiarTpl=`shopOrderReport`
&emailSubject=`В интернет-магазине "avtoPARTS" сделан новый заказ`
&fiarSubject=`Cделан новый заказ в интернет-магазине "avtoPARTS"`
&emailTo=`mas_m@ukr.net`
&emailFromName=`avtoPARTS`
&emailFrom=`mas_m@ukr.net`
&fiarReplyTo=`mas_m@ukr.net`
&fiarFromName=`avtoPARTS`
&fiarToField=`email`
&redirectTo=`21`
&validate=`address:required,fullname:required,email:email:required,phone:required`
&errTpl=`<br /><span class="error">[[+error]]</span>`
]]

[[!shkOptions?
&get=`delivery,payments`
&post_name=`shk_delivery,payment`
&toPlaceholders=`1`
&pl_prefix=`shkopt_`
&tpl=`select_option`
]]

<p class="error">[[!+fi.error.error_message]]</p>
<br />

<form id="oformlenie" action="oformlenie-zakaza" method="post">
    <input type="text" name="nospam:blank" value="" style="display:none;" />
    <input type="hidden" name="order" value="1" />

	<label class="form-label" for="us-name">ФИО:</label><Br><input class="form-input" type="text" name="fullname" id="us-name" value="[[!+fi.fullname:default=``:ne=`0`:show]]">
	<div>[[!+fi.error.email]]</div><Br>
	
	<label class="form-label" for="us-adres">Адрес доставки:</label><Br><input name="address" class="form-input" type="text" id="us-adres" value="[[!+fi.address:default=``:ne=`0`:show]]" />
              <div>[[!+fi.error.address]]</div><Br>
	<label class="form-label" for="us-mail">Email:</label><Br><input name="email" class="form-input" type="text" id="us-mail" value="[[!+fi.email:default=``:ne=`0`:show]]" />
            <div>[[!+fi.error.email]]</div><Br>
	<label class="form-label" for="us-tel">Телефон:</label><Br><input name="phone" class="form-input" type="text" id="us-tel" value="[[!+fi.phone:default=``:ne=`0`:show]]" />
            <div>[[!+fi.error.phone]]</div><Br>

	<label class="form-label" for="us-sub">Способ доставки:</label><Br>
    <select name="shk_delivery" class="form-select" id="us-sub">
	    <option value=""></option>
        [[!+shkopt_delivery]]
	</select><Br>
    <div>[[!+fi.error.shk_delivery]]</div>
    
	<label class="form-label" for="us-sub">Способ оплаты:</label><Br>
	<select name="payment" class="form-select" id="us-sub">
	    <option value=""></option>
        [[!+shkopt_payments]]
	</select>
    <div>[[!+fi.error.payment]]</div>
    
	<div class="ofor-div">
		<label class="form-label" for="us-surname">Коментарий:</label><Br>
		<textarea name="message" class="form-textarea" id="us-coment">[[!+fi.message]]</textarea>
	</div>

	<div class="clear"></div>

	<input type="submit" name="submit_button" id="reg-submit" value="Оформить">
</form>


</article>
<div class="clear"></div>
</div>	<!--end content-->


<div class="footer"> 
		<div class="wrap"> 
		<div class="left-footer"> 
			<a href="http://avtoparts/"><img src="/assets/web/images/logo1.png" title="logo"></a>
		</div>
		<div class="right-footer">
			<p>Autozone  &#169	 All Rights Reserved</p>
		</div>
		<div class="clear"> </div>
	</div>
	
</div>
</div><!--end wrap-->
	</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$head]]' => '<!DOCTYPE HTML>
<html>
<head>
[[!MetaX?
]]
    <link rel="stylesheet" type="text/css" href="/assets/shop/css/style.css" />
    <link href="/assets/web/css/style_2.css" rel="stylesheet" type="text/css"  media="all" />
    <link href=\'http://fonts.googleapis.com/css?family=Roboto\' rel=\'stylesheet\' type=\'text/css\'>
	<link rel="stylesheet" href="/assets/web/css/flexslider.css" type="text/css" media="all" />
	<link href=\'http://fonts.googleapis.com/css?family=Ruslan+Display&subset=latin,cyrillic\' rel=\'stylesheet\' type=\'text/css\'>
	<script src="/assets/web/js/modernizr.js"></script>
	<script src="/assets/web/js/responsive-nav.js"></script>
    
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/shop/css/ie.css" />
	<![endif]-->

	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript" src="/assets/shop/js/jquery-3.1.1.min.js"></script>-->
	<script type="text/javascript" src="/assets/shop/js/jquery.js"></script>
	<script type="text/javascript" src="/assets/shop/js/script.js"></script>
	<script type="text/javascript" src="/assets/shop/js/myscript.js"></script>
	<script type="text/javascript" src="/assets/shop/js/jquery.colorbox-min.js"></script>
	<script type="text/javascript" src="/assets/shop/js/jquery.toastmessage.js"></script>
	<link href="/assets/shop/css/jquery-ui.css" rel="stylesheet">
	<link href="/assets/shop/css/colorbox.css" rel="stylesheet">
	<link href="/assets/shop/css/jquery.toastmessage.css" rel="stylesheet">
	<script type="text/javascript" src="/assets/shop/js/jquery-ui.min.js"></script>
</head>
<body>

		<div id="wrap">',
    '[[pdoMenu?
        	&level=`4`
        	&parents=`0`
        	&resources=`-4`
        	&displayStart=`1`
        	&scheme=`full`
        	&tplOuter=`@INLINE <ul>[[+wrapper]]</ul>`
        	&tpl=`@INLINE <li><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>`
        	&tplHere=`@INLINE <li class="active"><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>`
        	&tplParentRow=`@INLINE <li><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a><ul>[[+wrapper]]</ul></li>`
        	&tplInner=`@INLINE <li>[[+wrapper]]</li>`
        	&tplParentRowHere=`@INLINE <li class="active"><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a><ul>[[+wrapper]]</ul></li>`
        ]]' => '<ul><li><a href="http://avtoparts/" >Главная</a></li><li><a href="http://avtoparts/dostavka-i-oplata" >Доставка и оплата</a></li><li><a href="http://avtoparts/kontaktyi" >Контакты</a></li><li><a href="http://avtoparts/katalog/osveshhenie/" >Освещение</a><ul><li><li><a href="http://avtoparts/katalog/osveshhenie/golovnoj-svet/" >Головной свет</a></li><li><a href="http://avtoparts/katalog/osveshhenie/led-lampyi/" >LED лампы</a></li><li><a href="http://avtoparts/katalog/osveshhenie/lampyi-nakalivaniya" >Лампы накаливания</a></li><li><a href="http://avtoparts/katalog/osveshhenie/diodnyie-lentyi" >Диодные ленты</a></li></li></ul></li><li><a href="http://avtoparts/katalog/xomutyi/" >Хомуты</a><ul><li><li><a href="http://avtoparts/katalog/xomutyi/xomut-nerzhavejka" >Хомут нержавейка</a></li><li><a href="http://avtoparts/katalog/xomutyi/xomut-oczinkovanyij" >Хомут оцинкованый</a></li><li><a href="http://avtoparts/katalog/xomutyi/xomut-silovoj-nerzhavejka" >Хомут силовой нержавейка</a></li><li><a href="http://avtoparts/katalog/xomutyi/xomut-silovoj-oczinkovanyij" >Хомут силовой оцинкованый</a></li><li><a href="http://avtoparts/katalog/xomutyi/kabelnaya-styazhka" >Кабельная стяжка</a></li></li></ul></li><li><a href="http://avtoparts/katalog/uplotniteli/" >Уплотнители</a><ul><li><li><a href="http://avtoparts/katalog/uplotniteli/dvernyie-uplotniteli/" >Дверные уплотнители</a></li><li><a href="http://avtoparts/katalog/uplotniteli/okonnyie-uplotniteli/" >Оконные уплотнители</a></li><li><a href="http://avtoparts/katalog/uplotniteli/gruzovyie-uplotniteli" >Грузовые уплотнители</a></li></li></ul></li><li><a href="http://avtoparts/katalog/styazhnyie-remni/" >Стяжные ремни</a><ul><li><li><a href="http://avtoparts/katalog/styazhnyie-remni/do-15-tonn" >До 1,5 тонн</a></li><li><a href="http://avtoparts/katalog/styazhnyie-remni/3-tonnyi" >3 тонны</a></li><li><a href="http://avtoparts/katalog/styazhnyie-remni/5-tonn" >5 тонн</a></li><li><a href="http://avtoparts/katalog/styazhnyie-remni/styazhnaya-lenta" >Стяжная лента</a></li></li></ul></li><li><a href="http://avtoparts/katalog/shlangi/" >Шланги</a><ul><li><li><a href="http://avtoparts/katalog/shlangi/shlangi-mbs" >Шланги МБС</a></li><li><a href="http://avtoparts/katalog/shlangi/shlangi-pnevmosistemyi/" >Шланги пневмосистемы</a></li><li><a href="http://avtoparts/katalog/shlangi/shlangi-pvx/" >Шланги ПВХ</a></li><li><a href="http://avtoparts/katalog/shlangi/soedineniya-shlangov" >Соединения шлангов</a></li></li></ul></li><li><a href="http://avtoparts/katalog/avtoelektrika/" >Автоэлектрика</a><ul><li><li><a href="http://avtoparts/katalog/avtoelektrika/predoxraniteli" >Предохранители</a></li><li><a href="http://avtoparts/katalog/avtoelektrika/razemyi-dlya-provodov" >Разъемы для проводов</a></li></li></ul></li><li><a href="http://avtoparts/katalog/dvorniki/" >Дворники</a><ul><li><li><a href="http://avtoparts/katalog/dvorniki/karkasnyie" >Каркасные</a></li><li><a href="http://avtoparts/katalog/dvorniki/bezkarkasnyie" >Безкаркасные</a></li><li><a href="http://avtoparts/katalog/dvorniki/gibridnyie" >Гибридные</a></li></li></ul></li></ul>',
    '[[$header]]' => '<header>
<!--start-logo-->
<div class="logo">
	<a href="http://avtoparts/"><img src="/assets/web/images/logo.png" /></a>
</div>
    
    <div id="header-block2">
		<span>Телефон:</span><br>
		<span class="phone">+7 (495)</span> 540 28 48
	</div><!--end header-block2-->
    
	<div id="header-block3">
		<a href="#" onclick="jQuery(\'#hover-window-wrap\').show(); return false" class="call-button">Заказать звонок</a>
	</div><!--end header-block3-->

	    <div id="header-block4">
            [[!SimpleSearchForm?
            	&tpl=`SearchFormTpl`
            	&landing=`43`
            ]]
    </div><!--end header-block4-->
    
    <ul id="second-menu">
[[!Shopkeeper3@cart_catalog]]
    [[!compare?
        &comparePageId=`28`
        &limitProducts=`4`
        &toCompare_tpl=`compare`
        &onlyThisParentId=`20`
    ]]


    	
    	<li id="sm-shop">
    		<a href="#" onclick="return false">Вход в кабинет</a>
    
    		<div id="enter-widow">
                [[!Personalize? &yesChunk=`header_for_members` &noChunk=`header_for_guests` &ph=`name`]]
    		</div>
    	</li>
    </ul>
    
	<!--<div id="header-block1">
		<span>Бесплатный звонок:</span><br>
		<span class="phone">8 800</span> 540 28 48
	</div>end header-block1-->
</header>
<!--start-header-->
<div class="header">
<!--start-wrap-->
<div class="wrap">
	<!-- Главное меню -->
   	<div class="top-nav">
       	<ul><li><a href="http://avtoparts/" >Главная</a></li><li><a href="http://avtoparts/dostavka-i-oplata" >Доставка и оплата</a></li><li><a href="http://avtoparts/kontaktyi" >Контакты</a></li><li><a href="http://avtoparts/katalog/osveshhenie/" >Освещение</a><ul><li><li><a href="http://avtoparts/katalog/osveshhenie/golovnoj-svet/" >Головной свет</a></li><li><a href="http://avtoparts/katalog/osveshhenie/led-lampyi/" >LED лампы</a></li><li><a href="http://avtoparts/katalog/osveshhenie/lampyi-nakalivaniya" >Лампы накаливания</a></li><li><a href="http://avtoparts/katalog/osveshhenie/diodnyie-lentyi" >Диодные ленты</a></li></li></ul></li><li><a href="http://avtoparts/katalog/xomutyi/" >Хомуты</a><ul><li><li><a href="http://avtoparts/katalog/xomutyi/xomut-nerzhavejka" >Хомут нержавейка</a></li><li><a href="http://avtoparts/katalog/xomutyi/xomut-oczinkovanyij" >Хомут оцинкованый</a></li><li><a href="http://avtoparts/katalog/xomutyi/xomut-silovoj-nerzhavejka" >Хомут силовой нержавейка</a></li><li><a href="http://avtoparts/katalog/xomutyi/xomut-silovoj-oczinkovanyij" >Хомут силовой оцинкованый</a></li><li><a href="http://avtoparts/katalog/xomutyi/kabelnaya-styazhka" >Кабельная стяжка</a></li></li></ul></li><li><a href="http://avtoparts/katalog/uplotniteli/" >Уплотнители</a><ul><li><li><a href="http://avtoparts/katalog/uplotniteli/dvernyie-uplotniteli/" >Дверные уплотнители</a></li><li><a href="http://avtoparts/katalog/uplotniteli/okonnyie-uplotniteli/" >Оконные уплотнители</a></li><li><a href="http://avtoparts/katalog/uplotniteli/gruzovyie-uplotniteli" >Грузовые уплотнители</a></li></li></ul></li><li><a href="http://avtoparts/katalog/styazhnyie-remni/" >Стяжные ремни</a><ul><li><li><a href="http://avtoparts/katalog/styazhnyie-remni/do-15-tonn" >До 1,5 тонн</a></li><li><a href="http://avtoparts/katalog/styazhnyie-remni/3-tonnyi" >3 тонны</a></li><li><a href="http://avtoparts/katalog/styazhnyie-remni/5-tonn" >5 тонн</a></li><li><a href="http://avtoparts/katalog/styazhnyie-remni/styazhnaya-lenta" >Стяжная лента</a></li></li></ul></li><li><a href="http://avtoparts/katalog/shlangi/" >Шланги</a><ul><li><li><a href="http://avtoparts/katalog/shlangi/shlangi-mbs" >Шланги МБС</a></li><li><a href="http://avtoparts/katalog/shlangi/shlangi-pnevmosistemyi/" >Шланги пневмосистемы</a></li><li><a href="http://avtoparts/katalog/shlangi/shlangi-pvx/" >Шланги ПВХ</a></li><li><a href="http://avtoparts/katalog/shlangi/soedineniya-shlangov" >Соединения шлангов</a></li></li></ul></li><li><a href="http://avtoparts/katalog/avtoelektrika/" >Автоэлектрика</a><ul><li><li><a href="http://avtoparts/katalog/avtoelektrika/predoxraniteli" >Предохранители</a></li><li><a href="http://avtoparts/katalog/avtoelektrika/razemyi-dlya-provodov" >Разъемы для проводов</a></li></li></ul></li><li><a href="http://avtoparts/katalog/dvorniki/" >Дворники</a><ul><li><li><a href="http://avtoparts/katalog/dvorniki/karkasnyie" >Каркасные</a></li><li><a href="http://avtoparts/katalog/dvorniki/bezkarkasnyie" >Безкаркасные</a></li><li><a href="http://avtoparts/katalog/dvorniki/gibridnyie" >Гибридные</a></li></li></ul></li></ul>
    </div>
	<!-- end Главное меню -->
<div class="clear"> </div>
				<!--End-wrap-->
			</div>
			<!--End-header-->
		</div>
				<div class="clear"> </div>
<div id="content">

<div class="clear"> </div>',
    '[[$forma_zvonka]]' => '<div id="hover-window-wrap">
	<div id="hover-window">
		<div id="phone-close"><img src="/assets/shop/images/delete.jpg" alt=""></div>
[[!AjaxForm?
    &snippet=`FormIt`
    &form=`zvonok`
    &hooks=`email`
    &emailSubject=`Заказ обратного звонка`
    &emailTo=`strannik-mas@yandex.ru`
    &validate=`name:required`
    &validationErrorMessage=`В форме содержатся ошибки!`
    &successMessage=`Сообщение успешно отправлено! В ближайшее время с вами свяжется наш менеджер.`
    &emailFromName=`avtoPARTS`
]]
	</div>
</div>',
    '[[pdoCrumbs?
	&tplWrapper=`@INLINE <ul class="breadcrumbs">[[+output]]</ul>`
	&tplHome=`@INLINE <li><a href="/">Главная</a></li>`
	&showHome=`1`
]]' => '<ul class="breadcrumbs"><li><a href="/">Главная</a></li>
<li class="active">Оформление заказа</li></ul>',
    '[[$shopOrderForm_new]]' => '[[!shkOptions?
&get=`delivery,payments`
&post_name=`shk_delivery,payment`
&toPlaceholders=`1`
&pl_prefix=`shkopt_`
&tpl=`select_option`
]]

<p class="error">[[!+fi.error.error_message]]</p>
<br />

<form id="oformlenie" action="oformlenie-zakaza" method="post">
    <input type="text" name="nospam:blank" value="" style="display:none;" />
    <input type="hidden" name="order" value="1" />

	<label class="form-label" for="us-name">ФИО:</label><Br><input class="form-input" type="text" name="fullname" id="us-name" value="[[!+fi.fullname:default=``:ne=`0`:show]]">
	<div>[[!+fi.error.email]]</div><Br>
	
	<label class="form-label" for="us-adres">Адрес доставки:</label><Br><input name="address" class="form-input" type="text" id="us-adres" value="[[!+fi.address:default=``:ne=`0`:show]]" />
              <div>[[!+fi.error.address]]</div><Br>
	<label class="form-label" for="us-mail">Email:</label><Br><input name="email" class="form-input" type="text" id="us-mail" value="[[!+fi.email:default=``:ne=`0`:show]]" />
            <div>[[!+fi.error.email]]</div><Br>
	<label class="form-label" for="us-tel">Телефон:</label><Br><input name="phone" class="form-input" type="text" id="us-tel" value="[[!+fi.phone:default=``:ne=`0`:show]]" />
            <div>[[!+fi.error.phone]]</div><Br>

	<label class="form-label" for="us-sub">Способ доставки:</label><Br>
    <select name="shk_delivery" class="form-select" id="us-sub">
	    <option value=""></option>
        [[!+shkopt_delivery]]
	</select><Br>
    <div>[[!+fi.error.shk_delivery]]</div>
    
	<label class="form-label" for="us-sub">Способ оплаты:</label><Br>
	<select name="payment" class="form-select" id="us-sub">
	    <option value=""></option>
        [[!+shkopt_payments]]
	</select>
    <div>[[!+fi.error.payment]]</div>
    
	<div class="ofor-div">
		<label class="form-label" for="us-surname">Коментарий:</label><Br>
		<textarea name="message" class="form-textarea" id="us-coment">[[!+fi.message]]</textarea>
	</div>

	<div class="clear"></div>

	<input type="submit" name="submit_button" id="reg-submit" value="Оформить">
</form>',
    '[[$footer]]' => '<div class="clear"></div>
</div>	<!--end content-->


<div class="footer"> 
		<div class="wrap"> 
		<div class="left-footer"> 
			<a href="http://avtoparts/"><img src="/assets/web/images/logo1.png" title="logo"></a>
		</div>
		<div class="right-footer">
			<p>Autozone  &#169	 All Rights Reserved</p>
		</div>
		<div class="clear"> </div>
	</div>
	
</div>
</div><!--end wrap-->
	</body>
</html>',
    '[[$compare?count_current=`0`&count_max=`4`&href_compare=`/sravnenie-tovarov`&href_cancel=`/oformlenie-zakaza?cmpr_action=empty`&display_cancel=`none`]]' => '<li id="sm-heart">
<a href="/sravnenie-tovarov" onclick="return shkCompare.toCompareLink();">Сравнеие (<span id="skolko_vibrano">0</span>)</a>
<span id="sravnenie_otmena" style="display:none;"> / <a href="/oformlenie-zakaza?cmpr_action=empty">отменить</a></span>
</li>',
    '[[getImageList?
            &tvname=`galleryPhotos`
            &tpl=`thumbTpl`
            &limit=`1`
            &docid=`19`
          ]]' => '<img class="shk-image" src="/assets/components/phpthumbof/cache/3309.0585c9c845383e3ae812b5d372bf8c7620.jpg"  alt="[[+set]]" />',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'head' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'head',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '<!DOCTYPE HTML>
<html>
<head>
[[!MetaX?
]]
    <link rel="stylesheet" type="text/css" href="/assets/shop/css/style.css" />
    <link href="/assets/web/css/style_2.css" rel="stylesheet" type="text/css"  media="all" />
    <link href=\'http://fonts.googleapis.com/css?family=Roboto\' rel=\'stylesheet\' type=\'text/css\'>
	<link rel="stylesheet" href="/assets/web/css/flexslider.css" type="text/css" media="all" />
	<link href=\'http://fonts.googleapis.com/css?family=Ruslan+Display&subset=latin,cyrillic\' rel=\'stylesheet\' type=\'text/css\'>
	<script src="/assets/web/js/modernizr.js"></script>
	<script src="/assets/web/js/responsive-nav.js"></script>
    
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/shop/css/ie.css" />
	<![endif]-->

	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript" src="/assets/shop/js/jquery-3.1.1.min.js"></script>-->
	<script type="text/javascript" src="/assets/shop/js/jquery.js"></script>
	<script type="text/javascript" src="/assets/shop/js/script.js"></script>
	<script type="text/javascript" src="/assets/shop/js/myscript.js"></script>
	<script type="text/javascript" src="/assets/shop/js/jquery.colorbox-min.js"></script>
	<script type="text/javascript" src="/assets/shop/js/jquery.toastmessage.js"></script>
	<link href="/assets/shop/css/jquery-ui.css" rel="stylesheet">
	<link href="/assets/shop/css/colorbox.css" rel="stylesheet">
	<link href="/assets/shop/css/jquery.toastmessage.css" rel="stylesheet">
	<script type="text/javascript" src="/assets/shop/js/jquery-ui.min.js"></script>
</head>
<body>

		<div id="wrap">',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!DOCTYPE HTML>
<html>
<head>
[[!MetaX?
]]
    <link rel="stylesheet" type="text/css" href="/assets/shop/css/style.css" />
    <link href="/assets/web/css/style_2.css" rel="stylesheet" type="text/css"  media="all" />
    <link href=\'http://fonts.googleapis.com/css?family=Roboto\' rel=\'stylesheet\' type=\'text/css\'>
	<link rel="stylesheet" href="/assets/web/css/flexslider.css" type="text/css" media="all" />
	<link href=\'http://fonts.googleapis.com/css?family=Ruslan+Display&subset=latin,cyrillic\' rel=\'stylesheet\' type=\'text/css\'>
	<script src="/assets/web/js/modernizr.js"></script>
	<script src="/assets/web/js/responsive-nav.js"></script>
    
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/shop/css/ie.css" />
	<![endif]-->

	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript" src="/assets/shop/js/jquery-3.1.1.min.js"></script>-->
	<script type="text/javascript" src="/assets/shop/js/jquery.js"></script>
	<script type="text/javascript" src="/assets/shop/js/script.js"></script>
	<script type="text/javascript" src="/assets/shop/js/myscript.js"></script>
	<script type="text/javascript" src="/assets/shop/js/jquery.colorbox-min.js"></script>
	<script type="text/javascript" src="/assets/shop/js/jquery.toastmessage.js"></script>
	<link href="/assets/shop/css/jquery-ui.css" rel="stylesheet">
	<link href="/assets/shop/css/colorbox.css" rel="stylesheet">
	<link href="/assets/shop/css/jquery.toastmessage.css" rel="stylesheet">
	<script type="text/javascript" src="/assets/shop/js/jquery-ui.min.js"></script>
</head>
<body>

		<div id="wrap">',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '<header>
<!--start-logo-->
<div class="logo">
	<a href="[[~1]]"><img src="/assets/web/images/logo.png" /></a>
</div>
    
    <div id="header-block2">
		<span>Телефон:</span><br>
		<span class="phone">+7 (495)</span> 540 28 48
	</div><!--end header-block2-->
    
	<div id="header-block3">
		<a href="#" onclick="jQuery(\'#hover-window-wrap\').show(); return false" class="call-button">Заказать звонок</a>
	</div><!--end header-block3-->

	    <div id="header-block4">
            [[!SimpleSearchForm?
            	&tpl=`SearchFormTpl`
            	&landing=`43`
            ]]
    </div><!--end header-block4-->
    
    <ul id="second-menu">
[[!Shopkeeper3@cart_catalog]]
    [[![[*id:is=`1`:then=`-`]]compare?
        &comparePageId=`28`
        &limitProducts=`4`
        &toCompare_tpl=`compare`
        &onlyThisParentId=`[[*id]]`
    ]]


    	
    	<li id="sm-shop">
    		<a href="#" onclick="return false">Вход в кабинет</a>
    
    		<div id="enter-widow">
                [[!Personalize? &yesChunk=`header_for_members` &noChunk=`header_for_guests` &ph=`name`]]
    		</div>
    	</li>
    </ul>
    
	<!--<div id="header-block1">
		<span>Бесплатный звонок:</span><br>
		<span class="phone">8 800</span> 540 28 48
	</div>end header-block1-->
</header>
<!--start-header-->
<div class="header">
<!--start-wrap-->
<div class="wrap">
	<!-- Главное меню -->
   	<div class="top-nav">
       	[[pdoMenu?
        	&level=`4`
        	&parents=`0`
        	&resources=`-4`
        	&displayStart=`1`
        	&scheme=`full`
        	&tplOuter=`@INLINE <ul>[[+wrapper]]</ul>`
        	&tpl=`@INLINE <li><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>`
        	&tplHere=`@INLINE <li class="active"><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>`
        	&tplParentRow=`@INLINE <li><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a><ul>[[+wrapper]]</ul></li>`
        	&tplInner=`@INLINE <li>[[+wrapper]]</li>`
        	&tplParentRowHere=`@INLINE <li class="active"><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a><ul>[[+wrapper]]</ul></li>`
        ]]
    </div>
	<!-- end Главное меню -->
<div class="clear"> </div>
				<!--End-wrap-->
			</div>
			<!--End-header-->
		</div>
				<div class="clear"> </div>
<div id="content">

<div class="clear"> </div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<header>
<!--start-logo-->
<div class="logo">
	<a href="[[~1]]"><img src="/assets/web/images/logo.png" /></a>
</div>
    
    <div id="header-block2">
		<span>Телефон:</span><br>
		<span class="phone">+7 (495)</span> 540 28 48
	</div><!--end header-block2-->
    
	<div id="header-block3">
		<a href="#" onclick="jQuery(\'#hover-window-wrap\').show(); return false" class="call-button">Заказать звонок</a>
	</div><!--end header-block3-->

	    <div id="header-block4">
            [[!SimpleSearchForm?
            	&tpl=`SearchFormTpl`
            	&landing=`43`
            ]]
    </div><!--end header-block4-->
    
    <ul id="second-menu">
[[!Shopkeeper3@cart_catalog]]
    [[![[*id:is=`1`:then=`-`]]compare?
        &comparePageId=`28`
        &limitProducts=`4`
        &toCompare_tpl=`compare`
        &onlyThisParentId=`[[*id]]`
    ]]


    	
    	<li id="sm-shop">
    		<a href="#" onclick="return false">Вход в кабинет</a>
    
    		<div id="enter-widow">
                [[!Personalize? &yesChunk=`header_for_members` &noChunk=`header_for_guests` &ph=`name`]]
    		</div>
    	</li>
    </ul>
    
	<!--<div id="header-block1">
		<span>Бесплатный звонок:</span><br>
		<span class="phone">8 800</span> 540 28 48
	</div>end header-block1-->
</header>
<!--start-header-->
<div class="header">
<!--start-wrap-->
<div class="wrap">
	<!-- Главное меню -->
   	<div class="top-nav">
       	[[pdoMenu?
        	&level=`4`
        	&parents=`0`
        	&resources=`-4`
        	&displayStart=`1`
        	&scheme=`full`
        	&tplOuter=`@INLINE <ul>[[+wrapper]]</ul>`
        	&tpl=`@INLINE <li><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>`
        	&tplHere=`@INLINE <li class="active"><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>`
        	&tplParentRow=`@INLINE <li><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a><ul>[[+wrapper]]</ul></li>`
        	&tplInner=`@INLINE <li>[[+wrapper]]</li>`
        	&tplParentRowHere=`@INLINE <li class="active"><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a><ul>[[+wrapper]]</ul></li>`
        ]]
    </div>
	<!-- end Главное меню -->
<div class="clear"> </div>
				<!--End-wrap-->
			</div>
			<!--End-header-->
		</div>
				<div class="clear"> </div>
<div id="content">

<div class="clear"> </div>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'forma_zvonka' => 
      array (
        'fields' => 
        array (
          'id' => 84,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'forma_zvonka',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '<div id="hover-window-wrap">
	<div id="hover-window">
		<div id="phone-close"><img src="/assets/shop/images/delete.jpg" alt=""></div>
[[!AjaxForm?
    &snippet=`FormIt`
    &form=`zvonok`
    &hooks=`email`
    &emailSubject=`Заказ обратного звонка`
    &emailTo=`strannik-mas@yandex.ru`
    &validate=`name:required`
    &validationErrorMessage=`В форме содержатся ошибки!`
    &successMessage=`Сообщение успешно отправлено! В ближайшее время с вами свяжется наш менеджер.`
    &emailFromName=`[[++site_name]]`
]]
	</div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div id="hover-window-wrap">
	<div id="hover-window">
		<div id="phone-close"><img src="/assets/shop/images/delete.jpg" alt=""></div>
[[!AjaxForm?
    &snippet=`FormIt`
    &form=`zvonok`
    &hooks=`email`
    &emailSubject=`Заказ обратного звонка`
    &emailTo=`strannik-mas@yandex.ru`
    &validate=`name:required`
    &validationErrorMessage=`В форме содержатся ошибки!`
    &successMessage=`Сообщение успешно отправлено! В ближайшее время с вами свяжется наш менеджер.`
    &emailFromName=`[[++site_name]]`
]]
	</div>
</div>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'shopOrderForm_new' => 
      array (
        'fields' => 
        array (
          'id' => 48,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'shopOrderForm_new',
          'description' => '',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => '[[!shkOptions?
&get=`delivery,payments`
&post_name=`shk_delivery,payment`
&toPlaceholders=`1`
&pl_prefix=`shkopt_`
&tpl=`select_option`
]]

<p class="error">[[!+fi.error.error_message]]</p>
<br />

<form id="oformlenie" action="[[~[[*id]]]]" method="post">
    <input type="text" name="nospam:blank" value="" style="display:none;" />
    <input type="hidden" name="order" value="1" />

	<label class="form-label" for="us-name">ФИО:</label><Br><input class="form-input" type="text" name="fullname" id="us-name" value="[[!+fi.fullname:default=`[[+modx.user.id:userinfo=`fullname`]]`:ne=`0`:show]]">
	<div>[[!+fi.error.email]]</div><Br>
	
	<label class="form-label" for="us-adres">Адрес доставки:</label><Br><input name="address" class="form-input" type="text" id="us-adres" value="[[!+fi.address:default=`[[+modx.user.id:userinfo=`address`]]`:ne=`0`:show]]" />
              <div>[[!+fi.error.address]]</div><Br>
	<label class="form-label" for="us-mail">Email:</label><Br><input name="email" class="form-input" type="text" id="us-mail" value="[[!+fi.email:default=`[[+modx.user.id:userinfo=`email`]]`:ne=`0`:show]]" />
            <div>[[!+fi.error.email]]</div><Br>
	<label class="form-label" for="us-tel">Телефон:</label><Br><input name="phone" class="form-input" type="text" id="us-tel" value="[[!+fi.phone:default=`[[+modx.user.id:userinfo=`phone`]]`:ne=`0`:show]]" />
            <div>[[!+fi.error.phone]]</div><Br>

	<label class="form-label" for="us-sub">Способ доставки:</label><Br>
    <select name="shk_delivery" class="form-select" id="us-sub">
	    <option value=""></option>
        [[!+shkopt_delivery]]
	</select><Br>
    <div>[[!+fi.error.shk_delivery]]</div>
    
	<label class="form-label" for="us-sub">Способ оплаты:</label><Br>
	<select name="payment" class="form-select" id="us-sub">
	    <option value=""></option>
        [[!+shkopt_payments]]
	</select>
    <div>[[!+fi.error.payment]]</div>
    
	<div class="ofor-div">
		<label class="form-label" for="us-surname">Коментарий:</label><Br>
		<textarea name="message" class="form-textarea" id="us-coment">[[!+fi.message]]</textarea>
	</div>

	<div class="clear"></div>

	<input type="submit" name="submit_button" id="reg-submit" value="Оформить">
</form>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '[[!shkOptions?
&get=`delivery,payments`
&post_name=`shk_delivery,payment`
&toPlaceholders=`1`
&pl_prefix=`shkopt_`
&tpl=`select_option`
]]

<p class="error">[[!+fi.error.error_message]]</p>
<br />

<form id="oformlenie" action="[[~[[*id]]]]" method="post">
    <input type="text" name="nospam:blank" value="" style="display:none;" />
    <input type="hidden" name="order" value="1" />

	<label class="form-label" for="us-name">ФИО:</label><Br><input class="form-input" type="text" name="fullname" id="us-name" value="[[!+fi.fullname:default=`[[+modx.user.id:userinfo=`fullname`]]`:ne=`0`:show]]">
	<div>[[!+fi.error.email]]</div><Br>
	
	<label class="form-label" for="us-adres">Адрес доставки:</label><Br><input name="address" class="form-input" type="text" id="us-adres" value="[[!+fi.address:default=`[[+modx.user.id:userinfo=`address`]]`:ne=`0`:show]]" />
              <div>[[!+fi.error.address]]</div><Br>
	<label class="form-label" for="us-mail">Email:</label><Br><input name="email" class="form-input" type="text" id="us-mail" value="[[!+fi.email:default=`[[+modx.user.id:userinfo=`email`]]`:ne=`0`:show]]" />
            <div>[[!+fi.error.email]]</div><Br>
	<label class="form-label" for="us-tel">Телефон:</label><Br><input name="phone" class="form-input" type="text" id="us-tel" value="[[!+fi.phone:default=`[[+modx.user.id:userinfo=`phone`]]`:ne=`0`:show]]" />
            <div>[[!+fi.error.phone]]</div><Br>

	<label class="form-label" for="us-sub">Способ доставки:</label><Br>
    <select name="shk_delivery" class="form-select" id="us-sub">
	    <option value=""></option>
        [[!+shkopt_delivery]]
	</select><Br>
    <div>[[!+fi.error.shk_delivery]]</div>
    
	<label class="form-label" for="us-sub">Способ оплаты:</label><Br>
	<select name="payment" class="form-select" id="us-sub">
	    <option value=""></option>
        [[!+shkopt_payments]]
	</select>
    <div>[[!+fi.error.payment]]</div>
    
	<div class="ofor-div">
		<label class="form-label" for="us-surname">Коментарий:</label><Br>
		<textarea name="message" class="form-textarea" id="us-coment">[[!+fi.message]]</textarea>
	</div>

	<div class="clear"></div>

	<input type="submit" name="submit_button" id="reg-submit" value="Оформить">
</form>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '<div class="clear"></div>
</div>	<!--end content-->


<div class="footer"> 
		<div class="wrap"> 
		<div class="left-footer"> 
			<a href="[[~1]]"><img src="/assets/web/images/logo1.png" title="logo"></a>
		</div>
		<div class="right-footer">
			<p>Autozone  &#169	 All Rights Reserved</p>
		</div>
		<div class="clear"> </div>
	</div>
	
</div>
</div><!--end wrap-->
	</body>
</html>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="clear"></div>
</div>	<!--end content-->


<div class="footer"> 
		<div class="wrap"> 
		<div class="left-footer"> 
			<a href="[[~1]]"><img src="/assets/web/images/logo1.png" title="logo"></a>
		</div>
		<div class="right-footer">
			<p>Autozone  &#169	 All Rights Reserved</p>
		</div>
		<div class="clear"> </div>
	</div>
	
</div>
</div><!--end wrap-->
	</body>
</html>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'metax-xhtml4' => 
      array (
        'fields' => 
        array (
          'id' => 68,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'metax-xhtml4',
          'description' => '',
          'editor_type' => 0,
          'category' => 26,
          'cache_type' => 0,
          'snippet' => '<!-- base xhtml4 -->
	<base href="[[++site_url]]" />
	<title>[[*longtitle]]</title>
	<meta name="keywords" content="[[$AllKeywords:notempty=`[[$AllKeywords:strip]], `]][[*keywords:strip]]" />
	[[*description:notempty=`<meta name="description" content="[[*description:strip]]" />`]]
	[[*longtitle:notempty=`<meta name="abstract" content="[[*longtitle:replace=`<br />== `:replace=`<br>== `:striptags]]" />`]]
	<meta name="robots" content="[[+metax.robots]]" />
	<meta http-equiv="content-language" content="[[++cultureKey:ifempty=`en`]]" />
	<meta http-equiv="Content-Type" content="[[*contentType:lcase]]; charset=[[++modx_charset]]" />
	<meta http-equiv="pragma" content="[[+metax.cache]]" />
	<meta http-equiv="cache-control" content="[[+metax.cache]]" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
<!-- meta -->
	<!--[if IE]><meta http-equiv="imagetoolbar" content="no" /><![endif]-->

<!-- icons/rss/css -->
	[[+metax.favicon:notempty=`<link rel="shortcut icon" type="image/x-icon" href="[[+metax.favicon]]" />`]]
	[[+metax.mobile:notempty=`<link rel="apple-touch-icon" href="[[+metax.mobile]]" />`]]
[[+metax.css]]
[[+metax.rss]]
<!-- end MetaX output -->',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!-- base xhtml4 -->
	<base href="[[++site_url]]" />
	<title>[[*longtitle]]</title>
	<meta name="keywords" content="[[$AllKeywords:notempty=`[[$AllKeywords:strip]], `]][[*keywords:strip]]" />
	[[*description:notempty=`<meta name="description" content="[[*description:strip]]" />`]]
	[[*longtitle:notempty=`<meta name="abstract" content="[[*longtitle:replace=`<br />== `:replace=`<br>== `:striptags]]" />`]]
	<meta name="robots" content="[[+metax.robots]]" />
	<meta http-equiv="content-language" content="[[++cultureKey:ifempty=`en`]]" />
	<meta http-equiv="Content-Type" content="[[*contentType:lcase]]; charset=[[++modx_charset]]" />
	<meta http-equiv="pragma" content="[[+metax.cache]]" />
	<meta http-equiv="cache-control" content="[[+metax.cache]]" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
<!-- meta -->
	<!--[if IE]><meta http-equiv="imagetoolbar" content="no" /><![endif]-->

<!-- icons/rss/css -->
	[[+metax.favicon:notempty=`<link rel="shortcut icon" type="image/x-icon" href="[[+metax.favicon]]" />`]]
	[[+metax.mobile:notempty=`<link rel="apple-touch-icon" href="[[+metax.mobile]]" />`]]
[[+metax.css]]
[[+metax.rss]]
<!-- end MetaX output -->',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'header_for_guests' => 
      array (
        'fields' => 
        array (
          'id' => 82,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'header_for_guests',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div id="enter-widow-corner"></div>
    			Добрый день, гость!<br><br>
[[!Login? &loginTpl=`lgnLoginTpl` &logoutTpl=`lgnLogoutTpl` &errTpl=`lgnErrTpl` &loginResourceId=`1` &logoutResourceId=`1`]]
<!--    			
<a href="[[-~31]]" onclick="return false" class="call-button border"> Войти на сайт</a><br>

    			<p class="pull_left">Войти через:</p> 
    			<a href="#"><img src="/assets/shop/images/facebook-icon.jpg"></a>
    			<a href="#"><img src="/assets/shop/images/vk-icon.jpg"></a><br><br>
-->
    			<a href="[[~36]]" class="call-button border"> Регистрация</a>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div id="enter-widow-corner"></div>
    			Добрый день, гость!<br><br>
[[!Login? &loginTpl=`lgnLoginTpl` &logoutTpl=`lgnLogoutTpl` &errTpl=`lgnErrTpl` &loginResourceId=`1` &logoutResourceId=`1`]]
<!--    			
<a href="[[-~31]]" onclick="return false" class="call-button border"> Войти на сайт</a><br>

    			<p class="pull_left">Войти через:</p> 
    			<a href="#"><img src="/assets/shop/images/facebook-icon.jpg"></a>
    			<a href="#"><img src="/assets/shop/images/vk-icon.jpg"></a><br><br>
-->
    			<a href="[[~36]]" class="call-button border"> Регистрация</a>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'lgnLoginTpl' => 
      array (
        'fields' => 
        array (
          'id' => 69,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'lgnLoginTpl',
          'description' => '',
          'editor_type' => 0,
          'category' => 27,
          'cache_type' => 0,
          'snippet' => '<div class="loginForm">
    <div class="loginMessage">[[+errors]]</div>
    <div class="loginLogin">
        <form class="loginLoginForm" action="[[~[[*id]]]]" method="post" id="registration">
            
            <fieldset class="loginLoginFieldset">
                <legend class="loginLegend">[[+actionMsg]]</legend>


                <div class="pull_left">
                <label class="loginUsernameLabel form-label" for="us-name">[[%login.username]]</label><br>
                    <input class="loginUsername form-input-login" type="text" name="username" id="us-name" /><br>
                
                
                <label class="loginPasswordLabel form-label" for="us-pass">[[%login.password]]</label><br>
                    <input class="form-input-login" type="password" name="password" id="us-pass"/>
                
                </div>
                <input class="returnUrl" type="hidden" name="returnUrl" value="[[+request_uri]]" />

                [[+login.recaptcha_html]]
                
                <div class="clear"></div>
                <input class="loginLoginValue" type="hidden" name="service" value="login" />
                <span class="loginLoginButton"><input type="submit" name="Login" id="reg-submit" value="[[+actionMsg]]" /></span>
            </fieldset>
            
        </form>
    </div>
</div>
<a href="[[~32]]">Напомнить пароль?</a>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="loginForm">
    <div class="loginMessage">[[+errors]]</div>
    <div class="loginLogin">
        <form class="loginLoginForm" action="[[~[[*id]]]]" method="post" id="registration">
            
            <fieldset class="loginLoginFieldset">
                <legend class="loginLegend">[[+actionMsg]]</legend>


                <div class="pull_left">
                <label class="loginUsernameLabel form-label" for="us-name">[[%login.username]]</label><br>
                    <input class="loginUsername form-input-login" type="text" name="username" id="us-name" /><br>
                
                
                <label class="loginPasswordLabel form-label" for="us-pass">[[%login.password]]</label><br>
                    <input class="form-input-login" type="password" name="password" id="us-pass"/>
                
                </div>
                <input class="returnUrl" type="hidden" name="returnUrl" value="[[+request_uri]]" />

                [[+login.recaptcha_html]]
                
                <div class="clear"></div>
                <input class="loginLoginValue" type="hidden" name="service" value="login" />
                <span class="loginLoginButton"><input type="submit" name="Login" id="reg-submit" value="[[+actionMsg]]" /></span>
            </fieldset>
            
        </form>
    </div>
</div>
<a href="[[~32]]">Напомнить пароль?</a>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'select_option' => 
      array (
        'fields' => 
        array (
          'id' => 20,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'select_option',
          'description' => '',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => '<option value="[[+value]]" [[+selected]]>[[+label]]</option>',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => '<option value="[[+value]]" [[+selected]]>[[+label]]</option>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'pdoMenu' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoMenu',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = array();
        if (!empty($scriptProperties[\'showDeleted\'])) {
            $pdoFetch = $modx->getService(\'pdoFetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = array();
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = array(
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
);
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
$path = $modx->getOption(\'pdomenu_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoMenu = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
    $tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $pdoMenu->pdoTools->run();
    $data = $pdoMenu->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = array();
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $pdoMenu->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (!empty($tree)) {
    $output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'pdotools_prop_level',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Уровень генерируемого меню.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'pdotools_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список родителей, через запятую, для поиска результатов. По умолчанию выборка ограничена текущим родителем. Если поставить 0 - выборка не ограничивается. Если id родителя начинается с дефиса, он и его потомки исключается из выборки.',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'pdotools_prop_displayStart',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ начальных узлов меню. Полезно при указании более одного "parents".',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'pdotools_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ресурсов, через запятую, для вывода в результатах. Если id ресурса начинается с дефиса, этот ресурс исключается из выборки.',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'pdotools_prop_templates',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список шаблонов, через запятую, для фильтрации результатов. Если id шаблона начинается с дефиса, ресурсы с ним исключается из выборки.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение выборки по контексту ресурсов.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'pdotools_prop_cache',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Кэширование результатов работы сниппета.',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'pdotools_prop_cacheTime',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 3600,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Время актуальности кэша в секундах.',
              'area_trans' => '',
            ),
            'cacheAnonymous' => 
            array (
              'name' => 'cacheAnonymous',
              'desc' => 'pdotools_prop_cacheAnonymous',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить кэширование только для неавторизованных посетителей.',
              'area_trans' => '',
            ),
            'plPrefix' => 
            array (
              'name' => 'plPrefix',
              'desc' => 'pdotools_prop_plPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'wf.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для выставляемых плейсхолдеров, по умолчанию "wf.".',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'pdotools_prop_previewUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ неопубликованных документов, если у пользователя есть на это разрешение.',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'pdotools_prop_hideSubMenus',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Спрятать неактивные ветки меню.',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'pdotools_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки: по убыванию или возрастанию.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'pdotools_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'menuindex',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Любое поле ресурса для сортировки, включая ТВ параметр, если он указан в параметре "includeTVs". Можно указывать JSON строку с массивом нескольких полей. Для случайно сортировки укажите "RAND()"',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов от начала.',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'pdotools_prop_rowIdPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс id="" для выставления идентификатора в чанк.',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'pdotools_prop_firstClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'first',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для первого пункта меню.',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'pdotools_prop_lastClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'last',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс последнего пункта меню.',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'pdotools_prop_hereClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'active',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для активного пункта меню.',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'pdotools_prop_parentClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс категории меню.',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'pdotools_prop_rowClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс одной строки меню.',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'pdotools_prop_outerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс обертки меню.',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'pdotools_prop_innerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс внутренних ссылок меню.',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'pdotools_prop_levelClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс уровня меню. Например, если укажите "level", то будет "level1", "level2" и т.д.',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'pdotools_prop_selfClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс текущего документа в меню.',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'pdotools_prop_webLinkClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс документа-ссылки.',
              'area_trans' => '',
            ),
            'tplOuter' => 
            array (
              'name' => 'tplOuter',
              'desc' => 'pdotools_prop_tplOuter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ul[[+classes]]>[[+wrapper]]</ul>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка всего блока меню.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplParentRow' => 
            array (
              'name' => 'tplParentRow',
              'desc' => 'pdotools_prop_tplParentRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplParentRowHere' => 
            array (
              'name' => 'tplParentRowHere',
              'desc' => 'pdotools_prop_tplParentRowHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления текущего контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplHere' => 
            array (
              'name' => 'tplHere',
              'desc' => 'pdotools_prop_tplHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк текущего документа',
              'area_trans' => '',
            ),
            'tplInner' => 
            array (
              'name' => 'tplInner',
              'desc' => 'pdotools_prop_tplInner',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка внутренних пунктов меню. Если пуст - будет использовать "tplInner".',
              'area_trans' => '',
            ),
            'tplInnerRow' => 
            array (
              'name' => 'tplInnerRow',
              'desc' => 'pdotools_prop_tplInnerRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка активного пункта меню.',
              'area_trans' => '',
            ),
            'tplInnerHere' => 
            array (
              'name' => 'tplInnerHere',
              'desc' => 'pdotools_prop_tplInnerHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка активного пункта меню.',
              'area_trans' => '',
            ),
            'tplParentRowActive' => 
            array (
              'name' => 'tplParentRowActive',
              'desc' => 'pdotools_prop_tplParentRowActive',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления активного контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplCategoryFolder' => 
            array (
              'name' => 'tplCategoryFolder',
              'desc' => 'pdotools_prop_tplCategoryFolder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Специальный чанк оформления категории. Категория - это документ с потомками и или нулевым шаблоном, или с атрибутом "rel=\\"category\\"".',
              'area_trans' => '',
            ),
            'tplStart' => 
            array (
              'name' => 'tplStart',
              'desc' => 'pdotools_prop_tplStart',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <h2[[+classes]]>[[+menutitle]]</h2>[[+wrapper]]',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления корневого пункта, при условии, что включен "displayStart".',
              'area_trans' => '',
            ),
            'checkPermissions' => 
            array (
              'name' => 'checkPermissions',
              'desc' => 'pdotools_prop_checkPermissions',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Укажите, какие разрешения нужно проверять у пользователя при выводе документов.',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'pdotools_prop_hereId',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id документа, текущего для генерируемого меню. Нужно указывать только если скрипт сам его неверно определяет, например при выводе меню из чанка другого сниппета.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список полей для выборки, через запятую. Можно указывать JSON строку с массивом, например {"modResource":"id,pagetitle,content"}.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования ссылок: "uri" для подстановки поля uri документа (очень быстро) или параметр для modX::makeUrl().',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'countChildren' => 
            array (
              'name' => 'countChildren',
              'desc' => 'pdotools_prop_countChildren',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Вывести точное количество активных потомков документа в плейсхолдер [[+children]].',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdomenu.php',
          'content' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = array();
        if (!empty($scriptProperties[\'showDeleted\'])) {
            $pdoFetch = $modx->getService(\'pdoFetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = array();
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = array(
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
);
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
$path = $modx->getOption(\'pdomenu_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoMenu = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
    $tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $pdoMenu->pdoTools->run();
    $data = $pdoMenu->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = array();
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $pdoMenu->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (!empty($tree)) {
    $output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'pdoCrumbs' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoCrumbs',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */
/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
$path = $modx->getOption(\'pdofetch_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (!isset($from) || $from == \'\') {
    $from = 0;
}
if (empty($to)) {
    $to = $modx->resource->id;
}
if (empty($direction)) {
    $direction = \'ltr\';
}
if ($outputSeparator == \'&nbsp;&rarr;&nbsp;\' && $direction == \'rtl\') {
    $outputSeparator = \'&nbsp;&larr;&nbsp;\';
}
if ($limit == \'\') {
    $limit = 10;
}
// For compatibility with BreadCrumb
if (!empty($maxCrumbs)) {
    $limit = $maxCrumbs;
}
if (!empty($containerTpl)) {
    $tplWrapper = $containerTpl;
}
if (!empty($currentCrumbTpl)) {
    $tplCurrent = $currentCrumbTpl;
}
if (!empty($linkCrumbTpl)) {
    $scriptProperties[\'tpl\'] = $linkCrumbTpl;
}
if (!empty($maxCrumbTpl)) {
    $tplMax = $maxCrumbTpl;
}
if (isset($showBreadCrumbsAtHome)) {
    $showAtHome = $showBreadCrumbsAtHome;
}
if (isset($showHomeCrumb)) {
    $showHome = $showHomeCrumb;
}
if (isset($showCurrentCrumb)) {
    $showCurrent = $showCurrentCrumb;
}
// --
$fastMode = !empty($fastMode);
$siteStart = $modx->getOption(\'siteStart\', $scriptProperties, $modx->getOption(\'site_start\'));

if (empty($showAtHome) && $modx->resource->id == $siteStart) {
    return \'\';
}

$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\');
// Start building "Where" expression
$where = array();
if (empty($showUnpublished) && empty($showUnPub)) {
    $where[\'published\'] = 1;
}
if (empty($showHidden)) {
    $where[\'hidemenu\'] = 0;
}
if (empty($showDeleted)) {
    $where[\'deleted\'] = 0;
}
if (!empty($hideContainers) && empty($showContainer)) {
    $where[\'isfolder\'] = 0;
}

$resource = ($to == $modx->resource->id)
    ? $modx->resource
    : $modx->getObject($class, $to);

if (!$resource) {
    $message = \'Could not build breadcrumbs to resource "\' . $to . \'"\';

    return \'\';
}

$parents = $modx->getParentIds($resource->id, $limit, array(\'context\' => $resource->get(\'context_key\')));
if (!empty($showHome)) {
    $parents[] = $siteStart;
}

$ids = array($resource->id);
foreach ($parents as $parent) {
    if (!empty($parent)) {
        $ids[] = $parent;
    }
    if (!empty($from) && $parent == $from) {
        break;
    }
}
$where[\'id:IN\'] = $ids;

if (!empty($exclude)) {
    $where[\'id:NOT IN\'] = array_map(\'trim\', explode(\',\', $exclude));
}

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$select = array($class => implode(\',\', $resourceColumns));

// Add custom parameters
foreach (array(\'where\', \'select\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
    \'class\' => $class,
    \'where\' => json_encode($where),
    \'select\' => json_encode($select),
    \'groupby\' => $class . \'.id\',
    \'sortby\' => "find_in_set(`$class`.`id`,\'" . implode(\',\', $ids) . "\')",
    \'sortdir\' => \'\',
    \'return\' => \'data\',
    \'totalVar\' => \'pdocrumbs.total\',
    \'disableConditions\' => true,
);

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows) && is_array($rows)) {
    if (strtolower($direction) == \'ltr\') {
        $rows = array_reverse($rows);
    }

    foreach ($rows as $row) {
        if (!empty($useWeblinkUrl) && $row[\'class_key\'] == \'modWebLink\') {
            $row[\'link\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
                ? $pdoFetch->makeUrl(intval(trim($row[\'content\'], \'[]~ \')), $row)
                : $row[\'content\'];
        } else {
            $row[\'link\'] = $pdoFetch->makeUrl($row[\'id\'], $row);
        }

        $row = array_merge(
            $scriptProperties,
            $row,
            array(\'idx\' => $pdoFetch->idx++)
        );
        if (empty($row[\'menutitle\'])) {
            $row[\'menutitle\'] = $row[\'pagetitle\'];
        }

        if ($row[\'id\'] == $resource->id && empty($showCurrent)) {
            continue;
        } elseif ($row[\'id\'] == $resource->id && !empty($tplCurrent)) {
            $tpl = $tplCurrent;
        } elseif ($row[\'id\'] == $siteStart && !empty($tplHome)) {
            $tpl = $tplHome;
        } else {
            $tpl = $pdoFetch->defineChunk($row);
        }
        $output[] = empty($tpl)
            ? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
            : $pdoFetch->getChunk($tpl, $row, $fastMode);
    }
}
$pdoFetch->addTime(\'Chunks processed\');

if (count($output) == 1 && !empty($hideSingle)) {
    $pdoFetch->addTime(\'The only result was hidden, because the parameter "hideSingle" activated\');
    $output = array();
}

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="pdoCrumbsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    $output = implode($outputSeparator, $output);
    if ($pdoFetch->idx >= $limit && !empty($tplMax) && !empty($output)) {
        $output = ($direction == \'ltr\')
            ? $pdoFetch->getChunk($tplMax, array(), $fastMode) . $output
            : $output . $pdoFetch->getChunk($tplMax, array(), $fastMode);
    }
    $output .= $log;

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output, \'crumbs\' => $output), $fastMode);
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
          'locked' => false,
          'properties' => 
          array (
            'direction' => 
            array (
              'name' => 'direction',
              'desc' => 'pdotools_prop_direction',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'ltr',
                  'text' => 'Left To Right (ltr)',
                  'name' => 'Left To Right (ltr)',
                ),
                1 => 
                array (
                  'value' => 'rtl',
                  'text' => 'Right To Left (rtl)',
                  'name' => 'Right To Left (rtl)',
                ),
              ),
              'value' => 'ltr',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление навигации: слева направо (ltr) или справа налево (rtl), например для Арабского языка.',
              'area_trans' => '',
            ),
            'exclude' => 
            array (
              'name' => 'exclude',
              'desc' => 'pdotools_prop_exclude',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список id ресурсов, которые нужно исключить из выборки.',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'from' => 
            array (
              'name' => 'from',
              'desc' => 'pdotools_prop_from',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id ресурса, от которого строить хлебные крошки. Обычно это корень сайта, то есть "0".',
              'area_trans' => '',
            ),
            'hideContainers' => 
            array (
              'name' => 'hideContainers',
              'desc' => 'pdotools_prop_hideContainers',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Отключает вывод контейнеров, то есть, ресурсов с isfolder = 1.',
              'area_trans' => '',
            ),
            'hideSingle' => 
            array (
              'name' => 'hideSingle',
              'desc' => 'pdotools_prop_hideSingle',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Не выводить результат, если он один единственный.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'pdotools_prop_includeTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров для выборки, через запятую. Например: "action,time" дадут плейсхолдеры [[+action]] и [[+time]].',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'outputSeparator' => 
            array (
              'name' => 'outputSeparator',
              'desc' => 'pdotools_prop_outputSeparator',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '
',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Необязательная строка для разделения результатов работы.',
              'area_trans' => '',
            ),
            'prepareTVs' => 
            array (
              'name' => 'prepareTVs',
              'desc' => 'pdotools_prop_prepareTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '1',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно подготовить перед выводом. По умолчанию, установлено в "1", что означает подготовку всех ТВ, указанных в "&includeTVs=``"',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'pdotools_prop_processTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно обработать перед выводом. Если установить в "1" - будут обработаны все ТВ, указанные в "&includeTVs=``". По умолчанию параметр пуст.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования ссылок: "uri" для подстановки поля uri документа (очень быстро) или параметр для modX::makeUrl().',
              'area_trans' => '',
            ),
            'showAtHome' => 
            array (
              'name' => 'showAtHome',
              'desc' => 'pdotools_prop_showAtHome',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать хлебные крошки на главной странице сайта.',
              'area_trans' => '',
            ),
            'showCurrent' => 
            array (
              'name' => 'showCurrent',
              'desc' => 'pdotools_prop_showCurrent',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выводить текущий документ в навигации.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'showHome' => 
            array (
              'name' => 'showHome',
              'desc' => 'pdotools_prop_showHome',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выводить ссылку на главную в начале навигации.',
              'area_trans' => '',
            ),
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'to' => 
            array (
              'name' => 'to',
              'desc' => 'pdotools_prop_to',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id ресурса для которого строятся хлебные крошки. По умолчанию это id текущей страницы.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li><a href="/[[+link]]">[[+menutitle]]</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplCurrent' => 
            array (
              'name' => 'tplCurrent',
              'desc' => 'pdotools_prop_tplCurrent',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="active">[[+menutitle]]</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления текущего документа в навигации.',
              'area_trans' => '',
            ),
            'tplHome' => 
            array (
              'name' => 'tplHome',
              'desc' => 'pdotools_prop_tplHome',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на главную страницу.',
              'area_trans' => '',
            ),
            'tplMax' => 
            array (
              'name' => 'tplMax',
              'desc' => 'pdotools_prop_tplMax',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="disabled">&nbsp;...&nbsp;</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк, который добавляется в начало результатов, если их больше чем "&limit".',
              'area_trans' => '',
            ),
            'tplWrapper' => 
            array (
              'name' => 'tplWrapper',
              'desc' => 'pdotools_prop_tplWrapper',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ul class="breadcrumb">[[+output]]</ul>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка, для заворачивания всех результатов. Понимает один плейсхолдер: [[+output]]. Не работает вместе с параметром "toSeparatePlaceholders".',
              'area_trans' => '',
            ),
            'tvPrefix' => 
            array (
              'name' => 'tvPrefix',
              'desc' => 'pdotools_prop_tvPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tv.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для ТВ параметров.',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'wrapIfEmpty' => 
            array (
              'name' => 'wrapIfEmpty',
              'desc' => 'pdotools_prop_wrapIfEmpty',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включает вывод чанка-обертки (tplWrapper) даже если результатов нет.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdocrumbs.php',
          'content' => '/** @var array $scriptProperties */
/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
$path = $modx->getOption(\'pdofetch_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (!isset($from) || $from == \'\') {
    $from = 0;
}
if (empty($to)) {
    $to = $modx->resource->id;
}
if (empty($direction)) {
    $direction = \'ltr\';
}
if ($outputSeparator == \'&nbsp;&rarr;&nbsp;\' && $direction == \'rtl\') {
    $outputSeparator = \'&nbsp;&larr;&nbsp;\';
}
if ($limit == \'\') {
    $limit = 10;
}
// For compatibility with BreadCrumb
if (!empty($maxCrumbs)) {
    $limit = $maxCrumbs;
}
if (!empty($containerTpl)) {
    $tplWrapper = $containerTpl;
}
if (!empty($currentCrumbTpl)) {
    $tplCurrent = $currentCrumbTpl;
}
if (!empty($linkCrumbTpl)) {
    $scriptProperties[\'tpl\'] = $linkCrumbTpl;
}
if (!empty($maxCrumbTpl)) {
    $tplMax = $maxCrumbTpl;
}
if (isset($showBreadCrumbsAtHome)) {
    $showAtHome = $showBreadCrumbsAtHome;
}
if (isset($showHomeCrumb)) {
    $showHome = $showHomeCrumb;
}
if (isset($showCurrentCrumb)) {
    $showCurrent = $showCurrentCrumb;
}
// --
$fastMode = !empty($fastMode);
$siteStart = $modx->getOption(\'siteStart\', $scriptProperties, $modx->getOption(\'site_start\'));

if (empty($showAtHome) && $modx->resource->id == $siteStart) {
    return \'\';
}

$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\');
// Start building "Where" expression
$where = array();
if (empty($showUnpublished) && empty($showUnPub)) {
    $where[\'published\'] = 1;
}
if (empty($showHidden)) {
    $where[\'hidemenu\'] = 0;
}
if (empty($showDeleted)) {
    $where[\'deleted\'] = 0;
}
if (!empty($hideContainers) && empty($showContainer)) {
    $where[\'isfolder\'] = 0;
}

$resource = ($to == $modx->resource->id)
    ? $modx->resource
    : $modx->getObject($class, $to);

if (!$resource) {
    $message = \'Could not build breadcrumbs to resource "\' . $to . \'"\';

    return \'\';
}

$parents = $modx->getParentIds($resource->id, $limit, array(\'context\' => $resource->get(\'context_key\')));
if (!empty($showHome)) {
    $parents[] = $siteStart;
}

$ids = array($resource->id);
foreach ($parents as $parent) {
    if (!empty($parent)) {
        $ids[] = $parent;
    }
    if (!empty($from) && $parent == $from) {
        break;
    }
}
$where[\'id:IN\'] = $ids;

if (!empty($exclude)) {
    $where[\'id:NOT IN\'] = array_map(\'trim\', explode(\',\', $exclude));
}

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$select = array($class => implode(\',\', $resourceColumns));

// Add custom parameters
foreach (array(\'where\', \'select\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
    \'class\' => $class,
    \'where\' => json_encode($where),
    \'select\' => json_encode($select),
    \'groupby\' => $class . \'.id\',
    \'sortby\' => "find_in_set(`$class`.`id`,\'" . implode(\',\', $ids) . "\')",
    \'sortdir\' => \'\',
    \'return\' => \'data\',
    \'totalVar\' => \'pdocrumbs.total\',
    \'disableConditions\' => true,
);

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows) && is_array($rows)) {
    if (strtolower($direction) == \'ltr\') {
        $rows = array_reverse($rows);
    }

    foreach ($rows as $row) {
        if (!empty($useWeblinkUrl) && $row[\'class_key\'] == \'modWebLink\') {
            $row[\'link\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
                ? $pdoFetch->makeUrl(intval(trim($row[\'content\'], \'[]~ \')), $row)
                : $row[\'content\'];
        } else {
            $row[\'link\'] = $pdoFetch->makeUrl($row[\'id\'], $row);
        }

        $row = array_merge(
            $scriptProperties,
            $row,
            array(\'idx\' => $pdoFetch->idx++)
        );
        if (empty($row[\'menutitle\'])) {
            $row[\'menutitle\'] = $row[\'pagetitle\'];
        }

        if ($row[\'id\'] == $resource->id && empty($showCurrent)) {
            continue;
        } elseif ($row[\'id\'] == $resource->id && !empty($tplCurrent)) {
            $tpl = $tplCurrent;
        } elseif ($row[\'id\'] == $siteStart && !empty($tplHome)) {
            $tpl = $tplHome;
        } else {
            $tpl = $pdoFetch->defineChunk($row);
        }
        $output[] = empty($tpl)
            ? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
            : $pdoFetch->getChunk($tpl, $row, $fastMode);
    }
}
$pdoFetch->addTime(\'Chunks processed\');

if (count($output) == 1 && !empty($hideSingle)) {
    $pdoFetch->addTime(\'The only result was hidden, because the parameter "hideSingle" activated\');
    $output = array();
}

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="pdoCrumbsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    $output = implode($outputSeparator, $output);
    if ($pdoFetch->idx >= $limit && !empty($tplMax) && !empty($output)) {
        $output = ($direction == \'ltr\')
            ? $pdoFetch->getChunk($tplMax, array(), $fastMode) . $output
            : $output . $pdoFetch->getChunk($tplMax, array(), $fastMode);
    }
    $output .= $log;

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output, \'crumbs\' => $output), $fastMode);
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'MetaX' => 
      array (
        'fields' => 
        array (
          'id' => 75,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'MetaX',
          'description' => 'Automatically generates Meta tags for your pages, along with a base and a couple link tags.',
          'editor_type' => 0,
          'category' => 26,
          'cache_type' => 0,
          'snippet' => '/*
	MetaX (Meta Tags Extended) for Revolution
	Version: 2.0.2
	Author: Salvatore Sodano - http://salscode.com
	Other Contributors:
		Mike Stop Continues - http://mikestopcontinues.com
		Jakob Class - http://www.class-zec.de <jakob.class@class-zec.de>
		Stefan Rochlitzer - icebear-solutions.com <Stefan.Rochlitzer@icebear-solutions.com>
	Support Page: http://salscode.com/index.php?id=93

	Description: Automatically generates Meta tags for your pages, along with a base and a couple link tags.
	For a full description visit http://rtfm.modx.com/extras/revo/metax.

	MODx Versions:
	Evolution - This is the Revo version, visit http://modx.com/extras/package/metax-evo for Evo.
	Revolution - All versions, tested up to 2.3.

	Parameters:
	http://rtfm.modx.com/extras/revo/metax
*/
/**********Variables***********/
$configs = $modx->getConfig();
$sitename = trim($configs[\'site_name\']);
$sitestart = trim($configs[\'site_start\']);
 
//HTML
$html = empty($html) ? 0 : $html;
$html5 = empty($html5) ? 0 : $html5;
 
//Favicon Relative Path - Default is set to the site root, shown below.
//If the code for your favicon does not display, then the below path may be incorrect.
$favicon = empty($favicon) ? \'favicon.ico\' : $favicon;
$mobile = empty($mobile) ? \'mobile.png\' : $mobile;

//Copyrighted until - Blank defaults to current year.
$copytill = empty($copytill) ? \'\' : $copytill;

//Copyrighted since - Blank omits this from view.
$copyfrom = empty($copyfrom) ? \'\' : $copyfrom;

//RSS & CSS
$rss = empty($rss) ? \'\' : $rss;
$css = empty($css) ? \'\' : $css;

$id = $modx->resource->get(\'id\');
$siteurl = $configs[\'site_url\'];

/*----------End Variables----------*/

if($html5 == 1) {$html = 2;}
switch ($html)
{
	default:
	case 0:
		$tagend = " />";
		$tpl = empty($tpl) ? \'metax-xhtml4\' : $tpl;
		break;
	case 1:
		$tagend = " >";
		$tpl = empty($tpl) ? \'metax-html4\' : $tpl;
		break;
	case 2:
		$tagend = " />";
		$tpl = empty($tpl) ? \'metax-html5\' : $tpl;
		break;
}
/*--------------------*/

/**Robots**/
$tmp = $modx->resource->get(\'searchable\');
if ($tmp == 1) {$output["metax.robots"] = "index, follow";}
else {$output["metax.robots"] = "noindex, nofollow";}
/*--------------------*/

/**Creator/Editor**/
$created = $modx->resource->get(\'createdby\');
if ($created != \'\')
{
	$user = $modx->getObject("modUser", $created);
	if($user != NULL) {$output["metax.createdby"] = $user->getOne("Profile")->get("fullname");}
	else {$output["metax.createdby"] = $sitename;}
}
$edited = $modx->resource->get(\'editedby\');
if ($edited != \'\')
{
	$user = $modx->getObject("modUser", $edited);
	if($user != NULL) {$output["metax.editedby"] = $user->getOne("Profile")->get("fullname");}
	else {$output["metax.editedby"] = $sitename;}
}
/*--------------------*/

/**Copyright**/
if ($copyfrom != \'\' && $copytill != \'\' && $copyfrom != $copytill) {$copyyears = $copyfrom." - ".$copytill;}
elseif (($copyfrom == \'\' && $copytill != \'\') || ($copytill != \'\' && $copytill == $copyfrom)) {$copyyears = $copytill;}
elseif ($copyfrom != \'\' && $copytill == \'\') {$copyyears = $copyfrom." - ".date(\'Y\');}
elseif ($copyfrom == \'\' && $copytill == \'\') {$copyyears = date(\'Y\');}
$output["metax.copyyears"] = $copyyears;
/*--------------------*/

/**Pragma & Cache-Control**/
$pragma = $modx->resource->get(\'cacheable\');
if ($pragma == 1)
{
	if($html5 != 1) {$output["metax.cache"] = "cache";}
	else {$output["metax.cache"] = "public";}
}
else {$output["metax.cache"] = "no-cache";}

/**Canonical Link**/
if (!isset($urlExtension))
{
	$urlExtension = \'\';
}

if ($id == $sitestart) {$output["metax.canonical"] = $siteurl.$urlExtension;}
else
{
	$urlExtension = \'\';
	try
	{
		if($modx->getObject(\'modSnippet\', array(\'name\' => \'Archivist\')) != NULL)
		{
			/* Support for FURLs created by Archivist: append year and month to canonical url */
			$archivistFilterPrefix = $modx->getOption(\'archivistFilterPrefix\',$scriptProperties,\'arc_\');
			$archivist = $modx->getService(\'archivist\',\'Archivist\',$modx->getOption(\'archivist.core_path\',null,$modx->getOption(\'core_path\').\'components/archivist/\').\'model/archivist/\',array(\'filterPrefix\' => $archivistFilterPrefix));
			if (($archivist instanceof Archivist))
			{
				// Archivist is installed...
				$year = $modx->getOption($archivistFilterPrefix.\'year\',$_REQUEST,$modx->getOption(\'year\',$scriptProperties,\'\'));
				$year = (int)$archivist->sanitize($year);
				if(!empty($year)) {$urlExtension = $year;}
				$month = $modx->getOption($archivistFilterPrefix.\'month\',$_REQUEST,$modx->getOption(\'month\',$scriptProperties,\'\'));
				$month = (int)$archivist->sanitize($month);
				if (!empty($month))
				{
					if (strlen($month) == 1) $month = \'0\'.$month;
					$urlExtension .= \'/\'.$month;
				}
			}
		}
	}
	catch (Exception $e) {/*No Archivist, do nothing.*/}
	$output["metax.canonical"] = $modx->makeUrl($id, \'\', \'\', \'full\').$urlExtension;
}
/*--------------------*/

/**Favicon**/
if (is_file($favicon)) {$favicon = $siteurl.$favicon;}
else {$favicon = \'\';}
$output["metax.favicon"] = $favicon;

/**Mobile icon**/
if (is_file($mobile)) {$mobile = $siteurl.$mobile;}
else {$mobile = \'\';}
$output["metax.mobile"] = $mobile;
/*--------------------*/

/**RSS Feed**/
$rss = explode(",", $rss);
$count = count($rss);
$i = 0;
$output["metax.rss"] = "";
while ($i < $count)
{
	$rss[$i] = trim($rss[$i]);
	$tmpdoc = $modx->getObject(\'modResource\',array(\'id\' => $rss[$i]));
	if ($tmpdoc != NULL)
	{
		$output["metax.rss"] .= "<link href=\\"".$modx->makeUrl($rss[$i], \'\', \'\', \'full\')."\\" rel=\\"alternate\\" type=\\"application/rss+xml\\" title=\\"".$tmpdoc->get(\'pagetitle\')."\\"".$tagend;
	}
	$i++;
	if($i < $count) {$output["metax.rss"] .= "\\n";}
}
/*--------------------*/

/**CSS Links**/
$css = explode(",", $css);
$count = count($css);
$i = 0;
while ($i < $count)
{
	$temp = $css[$i];
	$temp = explode(":", $temp);
	$countt = count($temp);
	$temp[0] = trim($temp[0]);
	if (is_file($temp[0]))
	{
		if ($countt == 1) {$output["metax.css"] .= "<link rel=\\"stylesheet\\" href=\\"".$temp[0]."\\" type=\\"text/css\\"".$tagend;}
		else
		{
			$temp[1] = trim($temp[1]);
			$output["metax.css"] .= "<!--[if ".$temp[1]."]><link rel=\\"stylesheet\\" href=\\"".$temp[0]."\\" type=\\"text/css\\"".$tagend."<![endif]-->";
		}
	}
	$i++;
	if($i < $count) {$output["metax.css"] .= "\\n";}
}
/*--------------------*/

return $modx->getChunk($tpl, $output);',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/*
	MetaX (Meta Tags Extended) for Revolution
	Version: 2.0.2
	Author: Salvatore Sodano - http://salscode.com
	Other Contributors:
		Mike Stop Continues - http://mikestopcontinues.com
		Jakob Class - http://www.class-zec.de <jakob.class@class-zec.de>
		Stefan Rochlitzer - icebear-solutions.com <Stefan.Rochlitzer@icebear-solutions.com>
	Support Page: http://salscode.com/index.php?id=93

	Description: Automatically generates Meta tags for your pages, along with a base and a couple link tags.
	For a full description visit http://rtfm.modx.com/extras/revo/metax.

	MODx Versions:
	Evolution - This is the Revo version, visit http://modx.com/extras/package/metax-evo for Evo.
	Revolution - All versions, tested up to 2.3.

	Parameters:
	http://rtfm.modx.com/extras/revo/metax
*/
/**********Variables***********/
$configs = $modx->getConfig();
$sitename = trim($configs[\'site_name\']);
$sitestart = trim($configs[\'site_start\']);
 
//HTML
$html = empty($html) ? 0 : $html;
$html5 = empty($html5) ? 0 : $html5;
 
//Favicon Relative Path - Default is set to the site root, shown below.
//If the code for your favicon does not display, then the below path may be incorrect.
$favicon = empty($favicon) ? \'favicon.ico\' : $favicon;
$mobile = empty($mobile) ? \'mobile.png\' : $mobile;

//Copyrighted until - Blank defaults to current year.
$copytill = empty($copytill) ? \'\' : $copytill;

//Copyrighted since - Blank omits this from view.
$copyfrom = empty($copyfrom) ? \'\' : $copyfrom;

//RSS & CSS
$rss = empty($rss) ? \'\' : $rss;
$css = empty($css) ? \'\' : $css;

$id = $modx->resource->get(\'id\');
$siteurl = $configs[\'site_url\'];

/*----------End Variables----------*/

if($html5 == 1) {$html = 2;}
switch ($html)
{
	default:
	case 0:
		$tagend = " />";
		$tpl = empty($tpl) ? \'metax-xhtml4\' : $tpl;
		break;
	case 1:
		$tagend = " >";
		$tpl = empty($tpl) ? \'metax-html4\' : $tpl;
		break;
	case 2:
		$tagend = " />";
		$tpl = empty($tpl) ? \'metax-html5\' : $tpl;
		break;
}
/*--------------------*/

/**Robots**/
$tmp = $modx->resource->get(\'searchable\');
if ($tmp == 1) {$output["metax.robots"] = "index, follow";}
else {$output["metax.robots"] = "noindex, nofollow";}
/*--------------------*/

/**Creator/Editor**/
$created = $modx->resource->get(\'createdby\');
if ($created != \'\')
{
	$user = $modx->getObject("modUser", $created);
	if($user != NULL) {$output["metax.createdby"] = $user->getOne("Profile")->get("fullname");}
	else {$output["metax.createdby"] = $sitename;}
}
$edited = $modx->resource->get(\'editedby\');
if ($edited != \'\')
{
	$user = $modx->getObject("modUser", $edited);
	if($user != NULL) {$output["metax.editedby"] = $user->getOne("Profile")->get("fullname");}
	else {$output["metax.editedby"] = $sitename;}
}
/*--------------------*/

/**Copyright**/
if ($copyfrom != \'\' && $copytill != \'\' && $copyfrom != $copytill) {$copyyears = $copyfrom." - ".$copytill;}
elseif (($copyfrom == \'\' && $copytill != \'\') || ($copytill != \'\' && $copytill == $copyfrom)) {$copyyears = $copytill;}
elseif ($copyfrom != \'\' && $copytill == \'\') {$copyyears = $copyfrom." - ".date(\'Y\');}
elseif ($copyfrom == \'\' && $copytill == \'\') {$copyyears = date(\'Y\');}
$output["metax.copyyears"] = $copyyears;
/*--------------------*/

/**Pragma & Cache-Control**/
$pragma = $modx->resource->get(\'cacheable\');
if ($pragma == 1)
{
	if($html5 != 1) {$output["metax.cache"] = "cache";}
	else {$output["metax.cache"] = "public";}
}
else {$output["metax.cache"] = "no-cache";}

/**Canonical Link**/
if (!isset($urlExtension))
{
	$urlExtension = \'\';
}

if ($id == $sitestart) {$output["metax.canonical"] = $siteurl.$urlExtension;}
else
{
	$urlExtension = \'\';
	try
	{
		if($modx->getObject(\'modSnippet\', array(\'name\' => \'Archivist\')) != NULL)
		{
			/* Support for FURLs created by Archivist: append year and month to canonical url */
			$archivistFilterPrefix = $modx->getOption(\'archivistFilterPrefix\',$scriptProperties,\'arc_\');
			$archivist = $modx->getService(\'archivist\',\'Archivist\',$modx->getOption(\'archivist.core_path\',null,$modx->getOption(\'core_path\').\'components/archivist/\').\'model/archivist/\',array(\'filterPrefix\' => $archivistFilterPrefix));
			if (($archivist instanceof Archivist))
			{
				// Archivist is installed...
				$year = $modx->getOption($archivistFilterPrefix.\'year\',$_REQUEST,$modx->getOption(\'year\',$scriptProperties,\'\'));
				$year = (int)$archivist->sanitize($year);
				if(!empty($year)) {$urlExtension = $year;}
				$month = $modx->getOption($archivistFilterPrefix.\'month\',$_REQUEST,$modx->getOption(\'month\',$scriptProperties,\'\'));
				$month = (int)$archivist->sanitize($month);
				if (!empty($month))
				{
					if (strlen($month) == 1) $month = \'0\'.$month;
					$urlExtension .= \'/\'.$month;
				}
			}
		}
	}
	catch (Exception $e) {/*No Archivist, do nothing.*/}
	$output["metax.canonical"] = $modx->makeUrl($id, \'\', \'\', \'full\').$urlExtension;
}
/*--------------------*/

/**Favicon**/
if (is_file($favicon)) {$favicon = $siteurl.$favicon;}
else {$favicon = \'\';}
$output["metax.favicon"] = $favicon;

/**Mobile icon**/
if (is_file($mobile)) {$mobile = $siteurl.$mobile;}
else {$mobile = \'\';}
$output["metax.mobile"] = $mobile;
/*--------------------*/

/**RSS Feed**/
$rss = explode(",", $rss);
$count = count($rss);
$i = 0;
$output["metax.rss"] = "";
while ($i < $count)
{
	$rss[$i] = trim($rss[$i]);
	$tmpdoc = $modx->getObject(\'modResource\',array(\'id\' => $rss[$i]));
	if ($tmpdoc != NULL)
	{
		$output["metax.rss"] .= "<link href=\\"".$modx->makeUrl($rss[$i], \'\', \'\', \'full\')."\\" rel=\\"alternate\\" type=\\"application/rss+xml\\" title=\\"".$tmpdoc->get(\'pagetitle\')."\\"".$tagend;
	}
	$i++;
	if($i < $count) {$output["metax.rss"] .= "\\n";}
}
/*--------------------*/

/**CSS Links**/
$css = explode(",", $css);
$count = count($css);
$i = 0;
while ($i < $count)
{
	$temp = $css[$i];
	$temp = explode(":", $temp);
	$countt = count($temp);
	$temp[0] = trim($temp[0]);
	if (is_file($temp[0]))
	{
		if ($countt == 1) {$output["metax.css"] .= "<link rel=\\"stylesheet\\" href=\\"".$temp[0]."\\" type=\\"text/css\\"".$tagend;}
		else
		{
			$temp[1] = trim($temp[1]);
			$output["metax.css"] .= "<!--[if ".$temp[1]."]><link rel=\\"stylesheet\\" href=\\"".$temp[0]."\\" type=\\"text/css\\"".$tagend."<![endif]-->";
		}
	}
	$i++;
	if($i < $count) {$output["metax.css"] .= "\\n";}
}
/*--------------------*/

return $modx->getChunk($tpl, $output);',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'SimpleSearchForm' => 
      array (
        'fields' => 
        array (
          'id' => 89,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'SimpleSearchForm',
          'description' => '',
          'editor_type' => 0,
          'category' => 29,
          'cache_type' => 0,
          'snippet' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * Show the search form
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* setup default options */
$scriptProperties = array_merge(array(
  \'tpl\' => \'SearchForm\',
  \'method\' => \'get\',
  \'searchIndex\' => \'search\',
  \'toPlaceholder\' => false,
  \'landing\' => $modx->resource->get(\'id\'),
), $scriptProperties);

if (empty($scriptProperties[\'landing\'])) {
  $scriptProperties[\'landing\'] = $modx->resource->get(\'id\');
}

/* if get value already exists, set it as default */
$searchValue = isset($_REQUEST[$scriptProperties[\'searchIndex\']]) ? $_REQUEST[$scriptProperties[\'searchIndex\']] : \'\';
$searchValues = explode(\' \', $searchValue);
array_map(array($modx, \'sanitizeString\'), $searchValues);
$searchValue = implode(\' \', $searchValues);
$placeholders = array(
    \'method\' => $scriptProperties[\'method\'],
    \'landing\' => $scriptProperties[\'landing\'],
    \'searchValue\' => strip_tags(str_replace(array(\'[\',\']\',\'"\',"\'"),array(\'&#91;\',\'&#93;\',\'&quot;\',\'&apos;\'),$searchValue)),
    \'searchIndex\' => $scriptProperties[\'searchIndex\'],
);

$output = $search->getChunk($scriptProperties[\'tpl\'],$placeholders);
return $search->output($output,$scriptProperties[\'toPlaceholder\']);',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'sisea.tpl_form_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'SearchForm',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Чанк, который будет использоваться как шаблон для отображения формы поиска.',
              'area_trans' => '',
            ),
            'landing' => 
            array (
              'name' => 'landing',
              'desc' => 'sisea.landing_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Ресурс на котором будет вызов сниппета SimpleSearch отображающий результаты поиска.',
              'area_trans' => '',
            ),
            'searchIndex' => 
            array (
              'name' => 'searchIndex',
              'desc' => 'sisea.searchindex_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'search',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Имя параметра который будет использоваться для передачи поискового запроса.',
              'area_trans' => '',
            ),
            'method' => 
            array (
              'name' => 'method',
              'desc' => 'sisea.method_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'sisea.get',
                  'value' => 'get',
                  'name' => 'get',
                ),
                1 => 
                array (
                  'text' => 'sisea.post',
                  'value' => 'post',
                  'name' => 'post',
                ),
              ),
              'value' => 'get',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Какой метод будет использован в форме поиска, POST или GET.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'sisea.toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Выводить результат работы сниппета непосредственно, или использовать для вывода подстановщик с этим именем.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * Show the search form
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* setup default options */
$scriptProperties = array_merge(array(
  \'tpl\' => \'SearchForm\',
  \'method\' => \'get\',
  \'searchIndex\' => \'search\',
  \'toPlaceholder\' => false,
  \'landing\' => $modx->resource->get(\'id\'),
), $scriptProperties);

if (empty($scriptProperties[\'landing\'])) {
  $scriptProperties[\'landing\'] = $modx->resource->get(\'id\');
}

/* if get value already exists, set it as default */
$searchValue = isset($_REQUEST[$scriptProperties[\'searchIndex\']]) ? $_REQUEST[$scriptProperties[\'searchIndex\']] : \'\';
$searchValues = explode(\' \', $searchValue);
array_map(array($modx, \'sanitizeString\'), $searchValues);
$searchValue = implode(\' \', $searchValues);
$placeholders = array(
    \'method\' => $scriptProperties[\'method\'],
    \'landing\' => $scriptProperties[\'landing\'],
    \'searchValue\' => strip_tags(str_replace(array(\'[\',\']\',\'"\',"\'"),array(\'&#91;\',\'&#93;\',\'&quot;\',\'&apos;\'),$searchValue)),
    \'searchIndex\' => $scriptProperties[\'searchIndex\'],
);

$output = $search->getChunk($scriptProperties[\'tpl\'],$placeholders);
return $search->output($output,$scriptProperties[\'toPlaceholder\']);',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'Shopkeeper3' => 
      array (
        'fields' => 
        array (
          'id' => 39,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Shopkeeper3',
          'description' => 'Shopping cart',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => '/**
 * Shopkeeper
 * 
 * Shopping cart for MODx Revolution
 *
 * @package shopkeeper3
 * @category 	   snippet
 * @version 	   3.x
 * @license 	   http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal	   @properties
 * @internal	   @modx_category Shop
 */

if(isset($hideOn) && preg_match(\'/(^|\\s|,)\'.$modx->resource->get(\'id\').\'(,|$)/\',$hideOn)) return \'\';

$modx->placeholders[\'SHK_callCount\'] = isset($modx->placeholders[\'SHK_callCount\']) ? $modx->placeholders[\'SHK_callCount\']+1 : 1;
$SHK_callCount = $modx->placeholders[\'SHK_callCount\'];
if( !defined( \'SHOPKEEPER_URL\' ) ) define( \'SHOPKEEPER_URL\', $modx->getOption(\'assets_url\') . "components/shopkeeper3/" );

$output = \'\';

require_once $modx->getOption(\'core_path\') . "components/shopkeeper3/model/shopkeeper.class.php";

$shopCart = new Shopkeeper($modx, $scriptProperties, true);
$noJavaScript = $modx->getOption( \'noJavaScript\', $scriptProperties, false );
$optStyles = $modx->getOption(\'style\', $scriptProperties, 1);
$optJsScripts = $modx->getOption(\'jsScript\', $scriptProperties, 1);

if( $SHK_callCount === 1 ){
    
    if( $optStyles ){
        $modx->regClientCSS( SHOPKEEPER_URL . "web/css/".$modx->getOption( \'style\', $scriptProperties, \'default\' ) . "/style.css" );
    }

    if( !$modx->getOption(\'noJQuery\', $scriptProperties, false) ){
        $modx->regClientScript(SHOPKEEPER_URL . "web/js/jquery-1.11.1.min.js");
    }

    if( $optJsScripts ) {

        if( $optJsScripts != 2 ) {

            $modx->regClientScript(SHOPKEEPER_URL . "web/js/lang/" . $modx->getOption(\'lang\', $scriptProperties, \'ru\') . ".js?v=" . $shopCart->getVersion());
            $modx->regClientScript(SHOPKEEPER_URL . "web/js/shopkeeper.js?v=" . $shopCart->getVersion());

        }

        $shk_opts = array(
            \'prodCont\' => $modx->getOption(\'prodCont\', $scriptProperties, \'div.shk-item\'),
            \'site_base_url\' => $modx->config[\'base_url\'],
            \'counterField\' => $modx->getOption(\'counterField\', $scriptProperties, false),
            \'counterFieldCart\' => $modx->getOption(\'counterFieldCart\', $scriptProperties, true),
            \'changePrice\' => $modx->getOption(\'changePrice\', $scriptProperties, true),
            \'flyToCart\' => $modx->getOption(\'flyToCart\', $scriptProperties, \'helper\'),
            \'noLoader\' => $modx->getOption(\'noLoader\', $scriptProperties, false),
            \'allowFloatCount\' => $modx->getOption(\'allowFloatCount\', $scriptProperties, false),
            \'animCart\' => $modx->getOption(\'animCart\', $scriptProperties, true),
            \'goToOrderFormPage\' => $modx->getOption(\'goToOrderFormPage\', $scriptProperties, false),
            //\'orderFormPage\' => $modx->getOption(\'orderFormPage\',$scriptProperties,0),
            \'orderFormPageUrl\' => $modx->makeUrl($modx->getOption(\'orderFormPageId\', $scriptProperties, 1), \'\', \'\', \'abs\'),
            \'debug\' => $modx->getOption(\'debug\', $scriptProperties, false)
        );

        $delivery_price = !empty($shopCart->delivery[\'price\']) ? number_format($shopCart->delivery[\'price\'], 2, \'.\', \'\') : 0;
        $delivery_name = !empty($shopCart->delivery[\'label\']) ? $shopCart->delivery[\'label\'] : \'\';

        $shk_data = array(
            \'price_total\' => number_format(Shopkeeper::$price_total, 2, \'.\', \'\'),
            \'items_total\' => Shopkeeper::$items_total,
            \'items_unique_total\' => Shopkeeper::$items_unique_total,
            \'delivery_price\' => $delivery_price,
            \'delivery_name\' => $delivery_name,
            \'ids\' => $shopCart->getProdIds()
        );

        $shk_data_str = json_encode($shk_data);
        $options_obj_str = json_encode($shk_opts);

        //create script
        $headHtml = "\\t<script type=\\"text/javascript\\">";
        $headHtml .= "
        SHK.data = " . $shk_data_str . ";
        jQuery(document).bind( \'ready\', function(){
            SHK.init( " . $options_obj_str . " );
        });" . PHP_EOL;

        $headHtml .= "\\t</script>" . PHP_EOL;

        $modx->regClientScript($headHtml);

    }
    
}

//вывод корзины
$output .= $shopCart->getCartContent();

return $output;',
          'locked' => false,
          'properties' => 
          array (
            'lang' => 
            array (
              'name' => 'lang',
              'desc' => 'prop_shk.lang',
              'type' => 'textfield',
              'options' => '',
              'value' => 'ru',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Язык',
              'area_trans' => '',
            ),
            'prodCont' => 
            array (
              'name' => 'prodCont',
              'desc' => 'prop_shk.prodcont',
              'type' => 'textfield',
              'options' => '',
              'value' => 'div.shk-item',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'CSS-селектор элемента, внутри которого находится информация о товаре',
              'area_trans' => '',
            ),
            'tplPath' => 
            array (
              'name' => 'tplPath',
              'desc' => 'prop_shk.tplpath',
              'type' => 'textfield',
              'options' => '',
              'value' => 'core/components/shopkeeper3/elements/chunks/ru/',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Путь до папки с чанками сниппета',
              'area_trans' => '',
            ),
            'cartTpl' => 
            array (
              'name' => 'cartTpl',
              'desc' => 'prop_shk.carttpl',
              'type' => 'textfield',
              'options' => '',
              'value' => '@FILE shopCart.tpl',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Шаблон корзины',
              'area_trans' => '',
            ),
            'cartRowTpl' => 
            array (
              'name' => 'cartRowTpl',
              'desc' => 'prop_shk.cartrowtpl',
              'type' => 'textfield',
              'options' => '',
              'value' => '@FILE shopCartRow.tpl',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Шаблон строки корзины',
              'area_trans' => '',
            ),
            'orderDataTpl' => 
            array (
              'name' => 'orderDataTpl',
              'desc' => 'prop_shk.orderdatatpl',
              'type' => 'textfield',
              'options' => '',
              'value' => '@FILE orderData.tpl',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Шаблон для содержимого заказа',
              'area_trans' => '',
            ),
            'flyToCart' => 
            array (
              'name' => 'flyToCart',
              'desc' => 'prop_shk.flytocart',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'helper',
                  'value' => 'helper',
                  'name' => 'helper',
                ),
                1 => 
                array (
                  'text' => 'image',
                  'value' => 'image',
                  'name' => 'Изображение',
                ),
                2 => 
                array (
                  'text' => 'scrollimage',
                  'value' => 'scrollimage',
                  'name' => 'scrollimage',
                ),
                3 => 
                array (
                  'text' => 'nofly',
                  'value' => 'nofly',
                  'name' => 'nofly',
                ),
              ),
              'value' => 'helper',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Эффект добавления товара в корзину',
              'area_trans' => '',
            ),
            'fieldPrice' => 
            array (
              'name' => 'fieldPrice',
              'desc' => 'prop_shk.pricetv',
              'type' => 'textfield',
              'options' => '',
              'value' => 'price',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Имя TV параметра цены',
              'area_trans' => '',
            ),
            'style' => 
            array (
              'name' => 'style',
              'desc' => 'prop_shk.style',
              'type' => 'textfield',
              'options' => '',
              'value' => 'default',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Стиль корзины',
              'area_trans' => '',
            ),
            'currency' => 
            array (
              'name' => 'currency',
              'desc' => 'prop_shk.currency',
              'type' => 'textfield',
              'options' => '',
              'value' => 'руб.',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Валюта по умолчанию',
              'area_trans' => '',
            ),
            'noCounter' => 
            array (
              'name' => 'noCounter',
              'desc' => 'prop_shk.nocounter',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Не показывать стрелки изменения кол-ва товара',
              'area_trans' => '',
            ),
            'noLoader' => 
            array (
              'name' => 'noLoader',
              'desc' => 'prop_shk.noloader',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Не показывать прелоадер',
              'area_trans' => '',
            ),
            'orderFormPageId' => 
            array (
              'name' => 'orderFormPageId',
              'desc' => 'prop_shk.orderformpage',
              'type' => 'textfield',
              'options' => '',
              'value' => '1',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'ID страницы с формой оформления заказа',
              'area_trans' => '',
            ),
            'goToOrderFormPage' => 
            array (
              'name' => 'goToOrderFormPage',
              'desc' => 'prop_shk.gotoorderformpage',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Переходить на страницу оформления заказа сразу после добавлении товара в корзину',
              'area_trans' => '',
            ),
            'counterField' => 
            array (
              'name' => 'counterField',
              'desc' => 'prop_shk.counterfield',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Добавить ко всем полям кол-ва товара стрелки больше/меньше',
              'area_trans' => '',
            ),
            'counterFieldCart' => 
            array (
              'name' => 'counterFieldCart',
              'desc' => 'prop_shk.counterFieldCart',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Добавить ко всем полям кол-ва товара в корзине стрелки больше/меньше',
              'area_trans' => '',
            ),
            'excepDigitGroup' => 
            array (
              'name' => 'excepDigitGroup',
              'desc' => 'prop_shk.excepdigitgroup',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Разделять числа цен в корзине на разряды',
              'area_trans' => '',
            ),
            'changePrice' => 
            array (
              'name' => 'changePrice',
              'desc' => 'prop_shk.changeprice',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'yes',
                  'value' => '1',
                  'name' => 'yes',
                ),
                1 => 
                array (
                  'text' => 'no',
                  'value' => '0',
                  'name' => 'no',
                ),
                2 => 
                array (
                  'text' => 'replace',
                  'value' => 'replace',
                  'name' => 'replace',
                ),
              ),
              'value' => '1',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'При изменении параметров с ценой - изменяется цена товара, а индекс с плюсом не появляется',
              'area_trans' => '',
            ),
            'animCart' => 
            array (
              'name' => 'animCart',
              'desc' => 'prop_shk.animcart',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Анимация изменения высоты корзины',
              'area_trans' => '',
            ),
            'allowFloatCount' => 
            array (
              'name' => 'allowFloatCount',
              'desc' => 'prop_shk.allowfloatcount',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Разрешить покупать дробное число товара',
              'area_trans' => '',
            ),
            'jsScript' => 
            array (
              'name' => 'jsScript',
              'desc' => 'prop_shk.nojavascript',
              'type' => 'textfield',
              'options' => '',
              'value' => '1',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Работать без JavaScript',
              'area_trans' => '',
            ),
            'noJQuery' => 
            array (
              'name' => 'noJQuery',
              'desc' => 'prop_shk.nojquery',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Не подгружать jquery.js',
              'area_trans' => '',
            ),
            'noConflict' => 
            array (
              'name' => 'noConflict',
              'desc' => 'prop_shk.noconflict',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Включить режим noConflict для jQuery. Используется, если на сайте уже используется другая JS-библиотека (не jQuery)',
              'area_trans' => '',
            ),
            'hideOn' => 
            array (
              'name' => 'hideOn',
              'desc' => 'prop_shk.hideon',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Не выводить корзину на страницах (id через запятую)',
              'area_trans' => '',
            ),
            'TVsaveList' => 
            array (
              'name' => 'TVsaveList',
              'desc' => 'prop_shk.TVsaveList',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Список имён TV-параметров, которые нужно сохранить в БД при отправке заказа. Если пусто, сохраняются все TV.',
              'area_trans' => '',
            ),
            'fromParentList' => 
            array (
              'name' => 'fromParentList',
              'desc' => 'prop_shk.fromParentList',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Список полей через запятую, которые нужно добавить товарам от родителей',
              'area_trans' => '',
            ),
            'fromParentHeight' => 
            array (
              'name' => 'fromParentHeight',
              'desc' => 'prop_shk.fromParentHeight',
              'type' => 'textfield',
              'options' => '',
              'value' => '1',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Сколько уровней родителей учитывать при использовании параметра fromParentList',
              'area_trans' => '',
            ),
            'additParamSource' => 
            array (
              'name' => 'additParamSource',
              'desc' => 'prop_shk.additParamSource',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'ID источника доп.параметров (ресурс MODX)',
              'area_trans' => '',
            ),
            'className' => 
            array (
              'name' => 'className',
              'desc' => 'prop_shk.className',
              'type' => 'textfield',
              'options' => '',
              'value' => 'modResource',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Имя класса (объекта) товаров (можно несколько через запятую)',
              'area_trans' => '',
            ),
            'packageName' => 
            array (
              'name' => 'packageName',
              'desc' => 'prop_shk.packageName',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Имя пакета класса товаров (можно несколько через запятую)',
              'area_trans' => '',
            ),
            'savePurchasesFields' => 
            array (
              'name' => 'savePurchasesFields',
              'desc' => 'prop_shk.savePurchasesFields',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Список названий полей товаров, которые нужно сохранять при заказе',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'prop_shk.debug',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Включить режим отладки',
              'area_trans' => '',
            ),
            'processParams' => 
            array (
              'name' => 'processParams',
              'desc' => 'prop_shk.processParams',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Просчитывать дополнительные параметры перед добавлением товара в корзину',
              'area_trans' => '',
            ),
            'pluralWords' => 
            array (
              'name' => 'pluralWords',
              'desc' => 'prop_shk.pluralWords',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Слова для склонения в зависимости от количества товара в корзине',
              'area_trans' => '',
            ),
            'groupBy' => 
            array (
              'name' => 'groupBy',
              'desc' => 'prop_shk.groupBy',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Имя поля для группировки товаров в корзине',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Shopkeeper
 * 
 * Shopping cart for MODx Revolution
 *
 * @package shopkeeper3
 * @category 	   snippet
 * @version 	   3.x
 * @license 	   http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal	   @properties
 * @internal	   @modx_category Shop
 */

if(isset($hideOn) && preg_match(\'/(^|\\s|,)\'.$modx->resource->get(\'id\').\'(,|$)/\',$hideOn)) return \'\';

$modx->placeholders[\'SHK_callCount\'] = isset($modx->placeholders[\'SHK_callCount\']) ? $modx->placeholders[\'SHK_callCount\']+1 : 1;
$SHK_callCount = $modx->placeholders[\'SHK_callCount\'];
if( !defined( \'SHOPKEEPER_URL\' ) ) define( \'SHOPKEEPER_URL\', $modx->getOption(\'assets_url\') . "components/shopkeeper3/" );

$output = \'\';

require_once $modx->getOption(\'core_path\') . "components/shopkeeper3/model/shopkeeper.class.php";

$shopCart = new Shopkeeper($modx, $scriptProperties, true);
$noJavaScript = $modx->getOption( \'noJavaScript\', $scriptProperties, false );
$optStyles = $modx->getOption(\'style\', $scriptProperties, 1);
$optJsScripts = $modx->getOption(\'jsScript\', $scriptProperties, 1);

if( $SHK_callCount === 1 ){
    
    if( $optStyles ){
        $modx->regClientCSS( SHOPKEEPER_URL . "web/css/".$modx->getOption( \'style\', $scriptProperties, \'default\' ) . "/style.css" );
    }

    if( !$modx->getOption(\'noJQuery\', $scriptProperties, false) ){
        $modx->regClientScript(SHOPKEEPER_URL . "web/js/jquery-1.11.1.min.js");
    }

    if( $optJsScripts ) {

        if( $optJsScripts != 2 ) {

            $modx->regClientScript(SHOPKEEPER_URL . "web/js/lang/" . $modx->getOption(\'lang\', $scriptProperties, \'ru\') . ".js?v=" . $shopCart->getVersion());
            $modx->regClientScript(SHOPKEEPER_URL . "web/js/shopkeeper.js?v=" . $shopCart->getVersion());

        }

        $shk_opts = array(
            \'prodCont\' => $modx->getOption(\'prodCont\', $scriptProperties, \'div.shk-item\'),
            \'site_base_url\' => $modx->config[\'base_url\'],
            \'counterField\' => $modx->getOption(\'counterField\', $scriptProperties, false),
            \'counterFieldCart\' => $modx->getOption(\'counterFieldCart\', $scriptProperties, true),
            \'changePrice\' => $modx->getOption(\'changePrice\', $scriptProperties, true),
            \'flyToCart\' => $modx->getOption(\'flyToCart\', $scriptProperties, \'helper\'),
            \'noLoader\' => $modx->getOption(\'noLoader\', $scriptProperties, false),
            \'allowFloatCount\' => $modx->getOption(\'allowFloatCount\', $scriptProperties, false),
            \'animCart\' => $modx->getOption(\'animCart\', $scriptProperties, true),
            \'goToOrderFormPage\' => $modx->getOption(\'goToOrderFormPage\', $scriptProperties, false),
            //\'orderFormPage\' => $modx->getOption(\'orderFormPage\',$scriptProperties,0),
            \'orderFormPageUrl\' => $modx->makeUrl($modx->getOption(\'orderFormPageId\', $scriptProperties, 1), \'\', \'\', \'abs\'),
            \'debug\' => $modx->getOption(\'debug\', $scriptProperties, false)
        );

        $delivery_price = !empty($shopCart->delivery[\'price\']) ? number_format($shopCart->delivery[\'price\'], 2, \'.\', \'\') : 0;
        $delivery_name = !empty($shopCart->delivery[\'label\']) ? $shopCart->delivery[\'label\'] : \'\';

        $shk_data = array(
            \'price_total\' => number_format(Shopkeeper::$price_total, 2, \'.\', \'\'),
            \'items_total\' => Shopkeeper::$items_total,
            \'items_unique_total\' => Shopkeeper::$items_unique_total,
            \'delivery_price\' => $delivery_price,
            \'delivery_name\' => $delivery_name,
            \'ids\' => $shopCart->getProdIds()
        );

        $shk_data_str = json_encode($shk_data);
        $options_obj_str = json_encode($shk_opts);

        //create script
        $headHtml = "\\t<script type=\\"text/javascript\\">";
        $headHtml .= "
        SHK.data = " . $shk_data_str . ";
        jQuery(document).bind( \'ready\', function(){
            SHK.init( " . $options_obj_str . " );
        });" . PHP_EOL;

        $headHtml .= "\\t</script>" . PHP_EOL;

        $modx->regClientScript($headHtml);

    }
    
}

//вывод корзины
$output .= $shopCart->getCartContent();

return $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'compare' => 
      array (
        'fields' => 
        array (
          'id' => 65,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'compare',
          'description' => 'Compare Products in the parameters.',
          'editor_type' => 0,
          'category' => 19,
          'cache_type' => 0,
          'snippet' => '/*

compare 1.1
Сравнение товаров и Избранное

Andchir - http://modx-shopkeeper.ru/

*/

$default_toCompareTpl = \'
    <p>
        Выбрано <span id="skolko_vibrano">[[+count_current]]</span> из [[+count_max]]
        / <a href="[[+href_compare]]" onclick="return shkCompare.toCompareLink();">сравнить</a>
        <span id="sravnenie_otmena" style="display:[[+display_cancel]];"> / <a href="[[+href_cancel]]">отменить</a></span>
    </p>
    <br clear="all" />
\';

$action = isset($action) ? $action : \'to_compare\';

require_once MODX_CORE_PATH . \'components/compare/compare.class.php\';
$compare = new prodCompare( $modx, $scriptProperties );

//действия, переданные по $_GET
$cmpr_action = isset($_GET[\'cmpr_action\']) && !is_array($_GET[\'cmpr_action\']) ? $_GET[\'cmpr_action\'] : \'\';
if($cmpr_action == \'del_product\' && !in_array( $action, array(\'print_products\', \'print_id_list\') ) ) return;
switch($cmpr_action){
    //удаление одного товара из списка для сравнения
    case \'del_product\':
        if(!empty($_GET[\'pid\'])) $compare->deleteCompareProduct();
    break;
    //очистка списка товаров, выбранных для сравнения
    case \'empty\':
        $compare->emptyCompare();
    break;
}

//действия для вывода в месте вызова сниппета
switch($action){
    //вывод строки со ссылками на страницу сравнения
    case \'to_compare\':
        $output = $compare->toCompareContent();
    break;
    //вывод списка ID товаров, выбранных для сравнения
    case \'print_id_list\':
        $output = $compare->printIDList();
    break;
    //вывод списка товаров, выбранных для сравнения
    case \'print_products\':
        $output = $compare->printCompareProducts();
    break;
    //вывод ID категории товаров, выбранных для стравнения
    case \'print_parent_id\':
        $output = isset($_COOKIE[\'shkCompareParent\']) ? $_COOKIE[\'shkCompareParent\'] : \'\';
    break;
    default:
        $output = \'\';
    break;
}

return $output;',
          'locked' => false,
          'properties' => NULL,
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/*

compare 1.1
Сравнение товаров и Избранное

Andchir - http://modx-shopkeeper.ru/

*/

$default_toCompareTpl = \'
    <p>
        Выбрано <span id="skolko_vibrano">[[+count_current]]</span> из [[+count_max]]
        / <a href="[[+href_compare]]" onclick="return shkCompare.toCompareLink();">сравнить</a>
        <span id="sravnenie_otmena" style="display:[[+display_cancel]];"> / <a href="[[+href_cancel]]">отменить</a></span>
    </p>
    <br clear="all" />
\';

$action = isset($action) ? $action : \'to_compare\';

require_once MODX_CORE_PATH . \'components/compare/compare.class.php\';
$compare = new prodCompare( $modx, $scriptProperties );

//действия, переданные по $_GET
$cmpr_action = isset($_GET[\'cmpr_action\']) && !is_array($_GET[\'cmpr_action\']) ? $_GET[\'cmpr_action\'] : \'\';
if($cmpr_action == \'del_product\' && !in_array( $action, array(\'print_products\', \'print_id_list\') ) ) return;
switch($cmpr_action){
    //удаление одного товара из списка для сравнения
    case \'del_product\':
        if(!empty($_GET[\'pid\'])) $compare->deleteCompareProduct();
    break;
    //очистка списка товаров, выбранных для сравнения
    case \'empty\':
        $compare->emptyCompare();
    break;
}

//действия для вывода в месте вызова сниппета
switch($action){
    //вывод строки со ссылками на страницу сравнения
    case \'to_compare\':
        $output = $compare->toCompareContent();
    break;
    //вывод списка ID товаров, выбранных для сравнения
    case \'print_id_list\':
        $output = $compare->printIDList();
    break;
    //вывод списка товаров, выбранных для сравнения
    case \'print_products\':
        $output = $compare->printCompareProducts();
    break;
    //вывод ID категории товаров, выбранных для стравнения
    case \'print_parent_id\':
        $output = isset($_COOKIE[\'shkCompareParent\']) ? $_COOKIE[\'shkCompareParent\'] : \'\';
    break;
    default:
        $output = \'\';
    break;
}

return $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'Personalize' => 
      array (
        'fields' => 
        array (
          'id' => 87,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Personalize',
          'description' => 'Snippet to show different chunks to logged-in- and not-logged-in users.',
          'editor_type' => 0,
          'category' => 28,
          'cache_type' => 0,
          'snippet' => '/**
 * Personalize snippet for MODx Revolution
 *
 * Personalize is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * Personalize is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Personalize; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package personalize
 */
/**
 * MODx Personalize Snippet
 *
 *
 * @package personalize
 *
 * Properties
 *
 *    @property yesChunk string (REQUIRED) Name of chunk or
 *        inline HTML to show for LOGGED-in users
 *
 *    @property noChunk string (optional) Name of chunk or
 *        inline HTML to show for NOT logged-in users
 *
 *    @property ph string (optional) Placeholder for placing
 *        the username
 *        ATTENTION!: ph placeholder will *not* be set in noChunk!
 *
 *    @property fullName boolean (optional) Use full name
 *        instead of username in placeholder
 *
 *    @property ifIds string (optional) comma separated 
 *        list of users ids; yesChunk will only be shown
 *        to users in the list
 *
 *    @property allowedGroups string (optional) comma separated 
 *        list of allowed groups; yesChunk will only only shows 
 *        users are in one of these groups
 *
 *    @property context (optional) context the user must be
 *        logged in to to see the yesChunk; defaults to
 *        current context.
 *
 *
 */
/* Personalize Snippet for Revolution */

/* ::::::::::::::::::::::::::::::::::::::::
 * Snippet Name: Personalize
 * Short Desc: returns a chunk if the user is logged in, otherwise calls another
 *::::::::::::::::::::::::::::::::::::::::
 * Description:
 * Checks to see if users are logged in and displays yesChunk if the user
 * is logged or noChunk if user is not logged. Insert only the chunk name as
 * param, without any tags. Can use a placeholder to output the username.
 *
 * TESTED: can be used more than once per page.
 * TESTED: chunks can contain snippets.
 *
 * Example Usage:
 *
 *    [[!Personalize?
 *        &yesChunk=`HelloUser`
 *         &noChunk=`Register`
 *         &ph=`name`
 *     ]]
 *
 * Create Chunks named HelloUser and Register, the first will be
 * shown to a user logged on in the current context,
 * the second to other users.
 *
 * ADDED in 3.3.1 by Vasia123:
 *    
 *    1. &noChunk=`@CODE:<b>Please login!</b>` - inline snippets
 *    2. &ifIds=`1,3` - additional check for users ids. yesChunk will
 *         only be shown to logged-in users in the list.
 *    
 * ADDED in 3.6.0 by Vasia123:
 *    
 *    1. &allowedGroups=`Editor,Administrator` - check if user is
 *       in any allowed group
 *    
 *    
 * Placeholder [[+name]] will show the user\'s name in the yesChunk or
 * elsewhere on the page.
 *
 *
 *:::::::::::::::::::::::::::::::::::::::: */
/* @var $modx modX */
/* @var $profile modUserProfile */

/* Prepare params and variables */
$output = \'\';
$sp =& $scriptProperties;

$yesChunk = $modx->getOption(\'yesChunk\',$sp, null);
$noChunk = $modx->getOption(\'noChunk\',$scriptProperties, null);
$fullName = $modx->getOption(\'fullName\', $sp, null);
$firstName = $modx->getOption(\'firstName\', $sp, null);
$ph = $modx->getOption(\'ph\',$sp, null);
$ifIds = $modx->getOption(\'ifIds\',$sp, null);
$allowedGroups = $modx->getOption(\'allowedGroups\',$sp, null);
$context = $modx->getOption(\'context\', $sp, $modx->context->get(\'key\') );

if( !empty ($fullName) ) {
    $profile = $modx->user->getOne(\'Profile\');
}

/* check if user logged in */
$is_logged_in = $modx->user->hasSessionContext($context);

/* Set $ifIds to true if user id is allowed or ifIds is not set */
$ifIds = array_filter(array_map(\'trim\',explode(\',\',$ifIds)));
$ifIds = (!empty($ifIds)) ? in_array($modx->user->get(\'id\'), $ifIds) : true;

// Set $groups to true is use in in allowed group or $groups is not set
$groups = array_filter(array_map(\'trim\',explode(\',\',$allowedGroups)));
if (!empty($groups)) {
    $inGroups = false;
    foreach($groups as $group) {
        if ($modx->user->isMember($group)) $inGroups = true;
    }
} else {
    $inGroups = true;
}

/* Do the work */
if ($is_logged_in && $ifIds && $inGroups) {
    if (preg_match(\'/^@CODE:/\',$yesChunk)) {
        $output =  substr($yesChunk, 6);
    } else {
        $output =  $modx->getChunk($yesChunk, $scriptProperties);
    }
    if (! empty($ph)) {
        if ($fullName && $profile) {
            $name = trim($profile->get(\'fullname\'));
        } elseif ($firstName && $profile) {
            $full = trim($profile->get(\'fullname\'));
            $pos = strpos($full, \' \');
            $name = ($pos === false) ? $full : substr($full, 0, $pos);
        } else {
            $name = $modx->user->get(\'username\');
        }
        $modx->setPlaceholder($ph, $name);
    }
} elseif( !empty ($noChunk) ) {
    if (preg_match(\'/^@CODE:/\',$noChunk)) {
        $output =  substr($noChunk, 6);
    } else {
        $output =  $modx->getChunk($noChunk);
    }
}
return empty($output)? \'\': $output;',
          'locked' => false,
          'properties' => 
          array (
            'yesChunk' => 
            array (
              'name' => 'yesChunk',
              'desc' => 'personalize_yeschunk_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'personalize:properties',
              'area' => '',
              'desc_trans' => '(optional) Name of chunk to show for LOGGED-in users; default: (empty).',
              'area_trans' => '',
            ),
            'noChunk' => 
            array (
              'name' => 'noChunk',
              'desc' => 'personalize_nochunk_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'personalize:properties',
              'area' => '',
              'desc_trans' => '(optional) Name of chunk to show for *not* LOGGED-in users; If omitted, nothing will be shown to not-logged-in users; default: (empty).',
              'area_trans' => '',
            ),
            'ph' => 
            array (
              'name' => 'ph',
              'desc' => 'personalize_ph_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'personalize:properties',
              'area' => '',
              'desc_trans' => '(optional) Placeholder for username; will not be available in noChunk; default: (empty).',
              'area_trans' => '',
            ),
            'fullName' => 
            array (
              'name' => 'fullName',
              'desc' => 'personalize_fullname_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'personalize:properties',
              'area' => '',
              'desc_trans' => '(optional) If set to yes, use full name instead of username in placeholder; default: No',
              'area_trans' => '',
            ),
            'firstName' => 
            array (
              'name' => 'firstName',
              'desc' => 'personalize_firstname_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'personalize:properties',
              'area' => '',
              'desc_trans' => '(optional) If set to yes, use first name instead of username in placeholder; default: No',
              'area_trans' => '',
            ),
            'ifIds' => 
            array (
              'name' => 'ifIds',
              'desc' => 'personalize_ifIds_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'personalize:properties',
              'area' => '',
              'desc_trans' => '(optional) Comma-separated list of User IDs; If set, yesChunk will only be shown to users in the list; default: (empty).',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Personalize snippet for MODx Revolution
 *
 * Personalize is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * Personalize is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Personalize; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package personalize
 */
/**
 * MODx Personalize Snippet
 *
 *
 * @package personalize
 *
 * Properties
 *
 *    @property yesChunk string (REQUIRED) Name of chunk or
 *        inline HTML to show for LOGGED-in users
 *
 *    @property noChunk string (optional) Name of chunk or
 *        inline HTML to show for NOT logged-in users
 *
 *    @property ph string (optional) Placeholder for placing
 *        the username
 *        ATTENTION!: ph placeholder will *not* be set in noChunk!
 *
 *    @property fullName boolean (optional) Use full name
 *        instead of username in placeholder
 *
 *    @property ifIds string (optional) comma separated 
 *        list of users ids; yesChunk will only be shown
 *        to users in the list
 *
 *    @property allowedGroups string (optional) comma separated 
 *        list of allowed groups; yesChunk will only only shows 
 *        users are in one of these groups
 *
 *    @property context (optional) context the user must be
 *        logged in to to see the yesChunk; defaults to
 *        current context.
 *
 *
 */
/* Personalize Snippet for Revolution */

/* ::::::::::::::::::::::::::::::::::::::::
 * Snippet Name: Personalize
 * Short Desc: returns a chunk if the user is logged in, otherwise calls another
 *::::::::::::::::::::::::::::::::::::::::
 * Description:
 * Checks to see if users are logged in and displays yesChunk if the user
 * is logged or noChunk if user is not logged. Insert only the chunk name as
 * param, without any tags. Can use a placeholder to output the username.
 *
 * TESTED: can be used more than once per page.
 * TESTED: chunks can contain snippets.
 *
 * Example Usage:
 *
 *    [[!Personalize?
 *        &yesChunk=`HelloUser`
 *         &noChunk=`Register`
 *         &ph=`name`
 *     ]]
 *
 * Create Chunks named HelloUser and Register, the first will be
 * shown to a user logged on in the current context,
 * the second to other users.
 *
 * ADDED in 3.3.1 by Vasia123:
 *    
 *    1. &noChunk=`@CODE:<b>Please login!</b>` - inline snippets
 *    2. &ifIds=`1,3` - additional check for users ids. yesChunk will
 *         only be shown to logged-in users in the list.
 *    
 * ADDED in 3.6.0 by Vasia123:
 *    
 *    1. &allowedGroups=`Editor,Administrator` - check if user is
 *       in any allowed group
 *    
 *    
 * Placeholder [[+name]] will show the user\'s name in the yesChunk or
 * elsewhere on the page.
 *
 *
 *:::::::::::::::::::::::::::::::::::::::: */
/* @var $modx modX */
/* @var $profile modUserProfile */

/* Prepare params and variables */
$output = \'\';
$sp =& $scriptProperties;

$yesChunk = $modx->getOption(\'yesChunk\',$sp, null);
$noChunk = $modx->getOption(\'noChunk\',$scriptProperties, null);
$fullName = $modx->getOption(\'fullName\', $sp, null);
$firstName = $modx->getOption(\'firstName\', $sp, null);
$ph = $modx->getOption(\'ph\',$sp, null);
$ifIds = $modx->getOption(\'ifIds\',$sp, null);
$allowedGroups = $modx->getOption(\'allowedGroups\',$sp, null);
$context = $modx->getOption(\'context\', $sp, $modx->context->get(\'key\') );

if( !empty ($fullName) ) {
    $profile = $modx->user->getOne(\'Profile\');
}

/* check if user logged in */
$is_logged_in = $modx->user->hasSessionContext($context);

/* Set $ifIds to true if user id is allowed or ifIds is not set */
$ifIds = array_filter(array_map(\'trim\',explode(\',\',$ifIds)));
$ifIds = (!empty($ifIds)) ? in_array($modx->user->get(\'id\'), $ifIds) : true;

// Set $groups to true is use in in allowed group or $groups is not set
$groups = array_filter(array_map(\'trim\',explode(\',\',$allowedGroups)));
if (!empty($groups)) {
    $inGroups = false;
    foreach($groups as $group) {
        if ($modx->user->isMember($group)) $inGroups = true;
    }
} else {
    $inGroups = true;
}

/* Do the work */
if ($is_logged_in && $ifIds && $inGroups) {
    if (preg_match(\'/^@CODE:/\',$yesChunk)) {
        $output =  substr($yesChunk, 6);
    } else {
        $output =  $modx->getChunk($yesChunk, $scriptProperties);
    }
    if (! empty($ph)) {
        if ($fullName && $profile) {
            $name = trim($profile->get(\'fullname\'));
        } elseif ($firstName && $profile) {
            $full = trim($profile->get(\'fullname\'));
            $pos = strpos($full, \' \');
            $name = ($pos === false) ? $full : substr($full, 0, $pos);
        } else {
            $name = $modx->user->get(\'username\');
        }
        $modx->setPlaceholder($ph, $name);
    }
} elseif( !empty ($noChunk) ) {
    if (preg_match(\'/^@CODE:/\',$noChunk)) {
        $output =  substr($noChunk, 6);
    } else {
        $output =  $modx->getChunk($noChunk);
    }
}
return empty($output)? \'\': $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'Login' => 
      array (
        'fields' => 
        array (
          'id' => 81,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Login',
          'description' => 'Displays a login and logout form.',
          'editor_type' => 0,
          'category' => 27,
          'cache_type' => 0,
          'snippet' => '/**
 * Login
 *
 * Copyright 2010 by Jason Coward <jason@modx.com> and Shaun McCormick
 * <shaun@modx.com>
 *
 * Login is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * Login is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Login; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Login Snippet
 *
 * This snippet handles login POSTs, sending the user back to where they came from or to a specific
 * location if specified in the POST.
 *
 * @package login
 *
 * @property textfield actionKey The REQUEST variable containing the action to take.
 * @property textfield loginKey The actionKey for login.
 * @property textfield logoutKey The actionKey for logout.
 * @property list tplType The type of template to expect for the views:
 *  modChunk - name of chunk to use
 *  file - full path to file to use as tpl
 *  embedded - the tpl is embedded in the page content
 *  inline - the tpl is inline content provided directly
 * @property textfield loginTpl The template for the login view (content based on tplType)
 * @property textfield logoutTpl The template for the logout view (content based on tplType)
 * @property textfield errTpl The template for any errors that occur when processing an view
 * @property list errTplType The type of template to expect for the error messages:
 *  modChunk - name of chunk to use
 *  file - full path to file to use as tpl
 *  inline - the tpl is inline content provided directly
 * @property integer logoutResourceId An explicit resource id to redirect users to on logout
 * @property string loginMsg The string to use for the login action. Defaults to
 * the lexicon string "login".
 * @property string logoutMsg The string to use for the logout action. Defaults
 * to the lexicon string "login.logout"
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);
if (!is_object($login) || !($login instanceof Login)) return \'\';

$controller = $login->loadController(\'Login\');
$output = $controller->run($scriptProperties);
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'actionKey' => 
            array (
              'name' => 'actionKey',
              'desc' => 'prop_login.actionkey_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'service',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The REQUEST variable that indicates what action to take.',
              'area_trans' => '',
            ),
            'loginKey' => 
            array (
              'name' => 'loginKey',
              'desc' => 'prop_login.loginkey_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'login',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The login action key.',
              'area_trans' => '',
            ),
            'logoutKey' => 
            array (
              'name' => 'logoutKey',
              'desc' => 'prop_login.logoutkey_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'logout',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The logout action key.',
              'area_trans' => '',
            ),
            'tplType' => 
            array (
              'name' => 'tplType',
              'desc' => 'prop_login.tpltype_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'modChunk',
                  'text' => 'opt_register.chunk',
                  'name' => 'Chunk',
                ),
                1 => 
                array (
                  'value' => 'file',
                  'text' => 'opt_register.file',
                  'name' => 'File',
                ),
                2 => 
                array (
                  'value' => 'inline',
                  'text' => 'opt_register.inline',
                  'name' => 'Inline',
                ),
                3 => 
                array (
                  'value' => 'embedded',
                  'text' => 'opt_register.embedded',
                  'name' => 'Embedded',
                ),
              ),
              'value' => 'modChunk',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The type of tpls being provided for the login and logout forms.',
              'area_trans' => '',
            ),
            'loginTpl' => 
            array (
              'name' => 'loginTpl',
              'desc' => 'prop_login.logintpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'lgnLoginTpl',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The login form tpl.',
              'area_trans' => '',
            ),
            'logoutTpl' => 
            array (
              'name' => 'logoutTpl',
              'desc' => 'prop_login.logouttpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'lgnLogoutTpl',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The logout tpl.',
              'area_trans' => '',
            ),
            'preHooks' => 
            array (
              'name' => 'preHooks',
              'desc' => 'prop_login.prehooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'What scripts to fire, if any, before the user is logged in or out. This can be a comma-separated list of hooks, and if the first fails, the proceeding ones will not fire. A hook can also be a Snippet name that will execute that Snippet.',
              'area_trans' => '',
            ),
            'postHooks' => 
            array (
              'name' => 'postHooks',
              'desc' => 'prop_login.posthooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'What scripts to fire, if any, after the user has been logged in or out. This can be a comma-separated list of hooks, and if the first fails, the proceeding ones will not fire. A hook can also be a Snippet name that will execute that Snippet.',
              'area_trans' => '',
            ),
            'errTpl' => 
            array (
              'name' => 'errTpl',
              'desc' => 'prop_login.errtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'lgnErrTpl',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The error tpl.',
              'area_trans' => '',
            ),
            'errTplType' => 
            array (
              'name' => 'errTplType',
              'desc' => 'prop_login.errtpltype_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'modChunk',
                  'text' => 'opt_register.chunk',
                  'name' => 'Chunk',
                ),
                1 => 
                array (
                  'value' => 'file',
                  'text' => 'opt_register.file',
                  'name' => 'File',
                ),
                2 => 
                array (
                  'value' => 'inline',
                  'text' => 'opt_register.inline',
                  'name' => 'Inline',
                ),
                3 => 
                array (
                  'value' => 'embedded',
                  'text' => 'opt_register.embedded',
                  'name' => 'Embedded',
                ),
              ),
              'value' => 'modChunk',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The type of error tpl.',
              'area_trans' => '',
            ),
            'loginResourceId' => 
            array (
              'name' => 'loginResourceId',
              'desc' => 'prop_login.loginresourceid_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The resource to direct users to on successful login. 0 will redirect to self.',
              'area_trans' => '',
            ),
            'loginResourceParams' => 
            array (
              'name' => 'loginResourceParams',
              'desc' => 'prop_login.loginresourceparams_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'A JSON object of parameters to append to the login redirection URL. Ex: {"test":123}',
              'area_trans' => '',
            ),
            'logoutResourceId' => 
            array (
              'name' => 'logoutResourceId',
              'desc' => 'prop_login.logoutresourceid_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Resource ID to redirect to on successful logout. 0 will redirect to self.',
              'area_trans' => '',
            ),
            'logoutResourceParams' => 
            array (
              'name' => 'logoutResourceParams',
              'desc' => 'prop_login.logoutresourceparams_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'A JSON object of parameters to append to the logout redirection URL. Ex: {"test":123}',
              'area_trans' => '',
            ),
            'loginMsg' => 
            array (
              'name' => 'loginMsg',
              'desc' => 'prop_login.loginmsg_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Optional label message for login action. If blank, will default to lexicon string for Login.',
              'area_trans' => '',
            ),
            'logoutMsg' => 
            array (
              'name' => 'logoutMsg',
              'desc' => 'prop_login.logoutmsg_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Optional label message for logout action. If blank, will default to lexicon string for Logout.',
              'area_trans' => '',
            ),
            'redirectToPrior' => 
            array (
              'name' => 'redirectToPrior',
              'desc' => 'prop_login.redirecttoprior_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If true, will redirect to the referring page (HTTP_REFERER) on successful login.',
              'area_trans' => '',
            ),
            'redirectToOnFailedAuth' => 
            array (
              'name' => 'redirectToOnFailedAuth',
              'desc' => 'prop_login.redirecttoonfailedauth_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set to a non-zero number, will redirect the user to this page if their attempt to login is unsuccessful.',
              'area_trans' => '',
            ),
            'rememberMeKey' => 
            array (
              'name' => 'rememberMeKey',
              'desc' => 'prop_login.remembermekey_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'rememberme',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'prop_login.remembermekey_desc',
              'area_trans' => '',
            ),
            'contexts' => 
            array (
              'name' => 'contexts',
              'desc' => 'prop_login.contexts_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => '(Experimental) A comma-separated list of contexts to log in to. Defaults to the current context if not explicitly set.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'prop_login.toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set, will set the output of the login snippet to a placeholder of this name rather than directly outputting the return contents.',
              'area_trans' => '',
            ),
            'recaptchaTheme' => 
            array (
              'name' => 'recaptchaTheme',
              'desc' => 'prop_register.recaptchatheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'red',
                  'text' => 'opt_register.red',
                  'name' => 'Red',
                ),
                1 => 
                array (
                  'value' => 'white',
                  'text' => 'opt_register.white',
                  'name' => 'White',
                ),
                2 => 
                array (
                  'value' => 'clean',
                  'text' => 'opt_register.clean',
                  'name' => 'Clean',
                ),
                3 => 
                array (
                  'value' => 'blackglass',
                  'text' => 'opt_register.blackglass',
                  'name' => 'Black Glass',
                ),
              ),
              'value' => 'clean',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `recaptcha` is set as a preHook, this will select a theme for the reCaptcha widget.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Login
 *
 * Copyright 2010 by Jason Coward <jason@modx.com> and Shaun McCormick
 * <shaun@modx.com>
 *
 * Login is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * Login is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Login; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Login Snippet
 *
 * This snippet handles login POSTs, sending the user back to where they came from or to a specific
 * location if specified in the POST.
 *
 * @package login
 *
 * @property textfield actionKey The REQUEST variable containing the action to take.
 * @property textfield loginKey The actionKey for login.
 * @property textfield logoutKey The actionKey for logout.
 * @property list tplType The type of template to expect for the views:
 *  modChunk - name of chunk to use
 *  file - full path to file to use as tpl
 *  embedded - the tpl is embedded in the page content
 *  inline - the tpl is inline content provided directly
 * @property textfield loginTpl The template for the login view (content based on tplType)
 * @property textfield logoutTpl The template for the logout view (content based on tplType)
 * @property textfield errTpl The template for any errors that occur when processing an view
 * @property list errTplType The type of template to expect for the error messages:
 *  modChunk - name of chunk to use
 *  file - full path to file to use as tpl
 *  inline - the tpl is inline content provided directly
 * @property integer logoutResourceId An explicit resource id to redirect users to on logout
 * @property string loginMsg The string to use for the login action. Defaults to
 * the lexicon string "login".
 * @property string logoutMsg The string to use for the logout action. Defaults
 * to the lexicon string "login.logout"
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);
if (!is_object($login) || !($login instanceof Login)) return \'\';

$controller = $login->loadController(\'Login\');
$output = $controller->run($scriptProperties);
return $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'AjaxForm' => 
      array (
        'fields' => 
        array (
          'id' => 11,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'AjaxForm',
          'description' => '',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */
/** @var AjaxForm $AjaxForm */
if (!$modx->loadClass(\'ajaxform\', MODX_CORE_PATH . \'components/ajaxform/model/ajaxform/\', false, true)) {
    return false;
}
$AjaxForm = new AjaxForm($modx, $scriptProperties);

$snippet = $modx->getOption(\'snippet\', $scriptProperties, \'FormIt\', true);
$tpl = $modx->getOption(\'form\', $scriptProperties, \'tpl.AjaxForm.example\', true);
$formSelector = $modx->getOption(\'formSelector\', $scriptProperties, \'ajax_form\', true);
$objectName = $modx->getOption(\'objectName\', $scriptProperties, \'AjaxForm\', true);
$AjaxForm->loadJsCss($objectName);

/** @var pdoTools $pdo */
if (class_exists(\'pdoTools\') && $pdo = $modx->getService(\'pdoTools\')) {
    $content = $pdo->getChunk($tpl, $scriptProperties);
} else {
    $content = $modx->getChunk($tpl, $scriptProperties);
}
if (empty($content)) {
    return $modx->lexicon(\'af_err_chunk_nf\', array(\'name\' => $tpl));
}

// Add selector to tag form
if (preg_match(\'#<form.*?class=(?:"|\\\')(.*?)(?:"|\\\')#i\', $content, $matches)) {
    $classes = explode(\' \', $matches[1]);
    if (!in_array($formSelector, $classes)) {
        $classes[] = $formSelector;
        $classes = preg_replace(
            \'#class=(?:"|\\\')\' . $matches[1] . \'(?:"|\\\')#i\',
            \'class="\' . implode(\' \', $classes) . \'"\',
            $matches[0]
        );
        $content = str_ireplace($matches[0], $classes, $content);
    }
} else {
    $content = str_ireplace(\'<form\', \'<form class="\' . $formSelector . \'"\', $content);
}

// Add method = post
if (preg_match(\'#<form.*?method=(?:"|\\\')(.*?)(?:"|\\\')#i\', $content)) {
    $content = preg_replace(\'#<form(.*?)method=(?:"|\\\')(.*?)(?:"|\\\')#i\', \'<form\\\\1method="post"\', $content);
} else {
    $content = str_ireplace(\'<form\', \'<form method="post"\', $content);
}

// Add action for form processing
$hash = md5(http_build_query($scriptProperties));
$action = \'<input type="hidden" name="af_action" value="\' . $hash . \'" />\';
if ((stripos($content, \'</form>\') !== false)) {
    if (preg_match(\'#<input.*?name=(?:"|\\\')af_action(?:"|\\\').*?>#i\', $content, $matches)) {
        $content = str_ireplace($matches[0], \'\', $content);
    }
    $content = str_ireplace(\'</form>\', "\\n\\t$action\\n</form>", $content);
}

// Save settings to user`s session
$_SESSION[\'AjaxForm\'][$hash] = $scriptProperties;

// Call snippet for preparation of form
$action = !empty($_REQUEST[\'af_action\'])
    ? $_REQUEST[\'af_action\']
    : $hash;

$AjaxForm->process($action, $_REQUEST);

// Return chunk
return $content;',
          'locked' => false,
          'properties' => 
          array (
            'form' => 
            array (
              'name' => 'form',
              'desc' => 'ajaxform_prop_form',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.AjaxForm.example',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Чанк с формой для отправки.',
              'area_trans' => '',
            ),
            'snippet' => 
            array (
              'name' => 'snippet',
              'desc' => 'ajaxform_prop_snippet',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'FormIt',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Сниппет, который будет обрабатывать указанную форму.',
              'area_trans' => '',
            ),
            'frontend_css' => 
            array (
              'name' => 'frontend_css',
              'desc' => 'ajaxform_prop_frontend_css',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '[[+assetsUrl]]css/default.css',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Файл с css стилями для подключения на фронтенде.',
              'area_trans' => '',
            ),
            'frontend_js' => 
            array (
              'name' => 'frontend_js',
              'desc' => 'ajaxform_prop_frontend_js',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '[[+assetsUrl]]js/default.js',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Файл с javascript для подключения на фронтенде.',
              'area_trans' => '',
            ),
            'actionUrl' => 
            array (
              'name' => 'actionUrl',
              'desc' => 'ajaxform_prop_actionUrl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '[[+assetsUrl]]action.php',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Коннектор для обработки ajax запросов.',
              'area_trans' => '',
            ),
            'formSelector' => 
            array (
              'name' => 'formSelector',
              'desc' => 'ajaxform_prop_formSelector',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'ajax_form',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Имя CSS класса, который будеи использован как jQuery селектор для инициализации формы. По умолчанию "ajax_form".',
              'area_trans' => '',
            ),
            'objectName' => 
            array (
              'name' => 'objectName',
              'desc' => 'ajaxform_prop_objectName',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'AjaxForm',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Имя объекта для инициализации в подключаемом javascript. По умолчанию "AjaxForm".',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/ajaxform/elements/snippets/snippet.ajaxform.php',
          'content' => '/** @var array $scriptProperties */
/** @var AjaxForm $AjaxForm */
if (!$modx->loadClass(\'ajaxform\', MODX_CORE_PATH . \'components/ajaxform/model/ajaxform/\', false, true)) {
    return false;
}
$AjaxForm = new AjaxForm($modx, $scriptProperties);

$snippet = $modx->getOption(\'snippet\', $scriptProperties, \'FormIt\', true);
$tpl = $modx->getOption(\'form\', $scriptProperties, \'tpl.AjaxForm.example\', true);
$formSelector = $modx->getOption(\'formSelector\', $scriptProperties, \'ajax_form\', true);
$objectName = $modx->getOption(\'objectName\', $scriptProperties, \'AjaxForm\', true);
$AjaxForm->loadJsCss($objectName);

/** @var pdoTools $pdo */
if (class_exists(\'pdoTools\') && $pdo = $modx->getService(\'pdoTools\')) {
    $content = $pdo->getChunk($tpl, $scriptProperties);
} else {
    $content = $modx->getChunk($tpl, $scriptProperties);
}
if (empty($content)) {
    return $modx->lexicon(\'af_err_chunk_nf\', array(\'name\' => $tpl));
}

// Add selector to tag form
if (preg_match(\'#<form.*?class=(?:"|\\\')(.*?)(?:"|\\\')#i\', $content, $matches)) {
    $classes = explode(\' \', $matches[1]);
    if (!in_array($formSelector, $classes)) {
        $classes[] = $formSelector;
        $classes = preg_replace(
            \'#class=(?:"|\\\')\' . $matches[1] . \'(?:"|\\\')#i\',
            \'class="\' . implode(\' \', $classes) . \'"\',
            $matches[0]
        );
        $content = str_ireplace($matches[0], $classes, $content);
    }
} else {
    $content = str_ireplace(\'<form\', \'<form class="\' . $formSelector . \'"\', $content);
}

// Add method = post
if (preg_match(\'#<form.*?method=(?:"|\\\')(.*?)(?:"|\\\')#i\', $content)) {
    $content = preg_replace(\'#<form(.*?)method=(?:"|\\\')(.*?)(?:"|\\\')#i\', \'<form\\\\1method="post"\', $content);
} else {
    $content = str_ireplace(\'<form\', \'<form method="post"\', $content);
}

// Add action for form processing
$hash = md5(http_build_query($scriptProperties));
$action = \'<input type="hidden" name="af_action" value="\' . $hash . \'" />\';
if ((stripos($content, \'</form>\') !== false)) {
    if (preg_match(\'#<input.*?name=(?:"|\\\')af_action(?:"|\\\').*?>#i\', $content, $matches)) {
        $content = str_ireplace($matches[0], \'\', $content);
    }
    $content = str_ireplace(\'</form>\', "\\n\\t$action\\n</form>", $content);
}

// Save settings to user`s session
$_SESSION[\'AjaxForm\'][$hash] = $scriptProperties;

// Call snippet for preparation of form
$action = !empty($_REQUEST[\'af_action\'])
    ? $_REQUEST[\'af_action\']
    : $hash;

$AjaxForm->process($action, $_REQUEST);

// Return chunk
return $content;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'getImageList' => 
      array (
        'fields' => 
        array (
          'id' => 22,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'getImageList',
          'description' => '',
          'editor_type' => 0,
          'category' => 6,
          'cache_type' => 0,
          'snippet' => '/**
 * getImageList
 *
 * Copyright 2009-2014 by Bruno Perner <b.perner@gmx.de>
 *
 * getImageList is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * getImageList is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * getImageList; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package migx
 */
/**
 * getImageList
 *
 * display Items from outputvalue of TV with custom-TV-input-type MIGX or from other JSON-string for MODx Revolution 
 *
 * @version 1.4
 * @author Bruno Perner <b.perner@gmx.de>
 * @copyright Copyright &copy; 2009-2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version.
 * @package migx
 */

/*example: <ul>[[!getImageList? &tvname=`myTV`&tpl=`@CODE:<li>[[+idx]]<img src="[[+imageURL]]"/><p>[[+imageAlt]]</p></li>`]]</ul>*/
/* get default properties */


$tvname = $modx->getOption(\'tvname\', $scriptProperties, \'\');
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'\');
$wrapperTpl = $modx->getOption(\'wrapperTpl\', $scriptProperties, \'\');
$limit = $modx->getOption(\'limit\', $scriptProperties, \'0\');
$offset = $modx->getOption(\'offset\', $scriptProperties, 0);
$totalVar = $modx->getOption(\'totalVar\', $scriptProperties, \'total\');
$randomize = $modx->getOption(\'randomize\', $scriptProperties, false);
$preselectLimit = $modx->getOption(\'preselectLimit\', $scriptProperties, 0); // when random preselect important images
$where = $modx->getOption(\'where\', $scriptProperties, \'\');
$where = !empty($where) ? $modx->fromJSON($where) : array();
$sort = $modx->getOption(\'sort\', $scriptProperties, \'\');
$sort = !empty($sort) ? $modx->fromJSON($sort) : array();
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$placeholdersKeyField = $modx->getOption(\'placeholdersKeyField\', $scriptProperties, \'MIGX_id\');
$toJsonPlaceholder = $modx->getOption(\'toJsonPlaceholder\', $scriptProperties, false);
$jsonVarKey = $modx->getOption(\'jsonVarKey\', $scriptProperties, \'migx_outputvalue\');
$outputvalue = $modx->getOption(\'value\', $scriptProperties, \'\');
$outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
$docidVarKey = $modx->getOption(\'docidVarKey\', $scriptProperties, \'migx_docid\');
$docid = $modx->getOption(\'docid\', $scriptProperties, (isset($modx->resource) ? $modx->resource->get(\'id\') : 1));
$docid = isset($_REQUEST[$docidVarKey]) ? $_REQUEST[$docidVarKey] : $docid;
$processTVs = $modx->getOption(\'processTVs\', $scriptProperties, \'1\');
$reverse = $modx->getOption(\'reverse\', $scriptProperties, \'0\');
$sumFields = $modx->getOption(\'sumFields\', $scriptProperties, \'\');
$sumPrefix = $modx->getOption(\'sumPrefix\', $scriptProperties, \'summary_\');
$addfields = $modx->getOption(\'addfields\', $scriptProperties, \'\');
$addfields = !empty($addfields) ? explode(\',\', $addfields) : null;
//split json into parts
$splits = $modx->fromJson($modx->getOption(\'splits\', $scriptProperties, 0));
$splitTpl = $modx->getOption(\'splitTpl\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$inheritFrom = $modx->getOption(\'inheritFrom\', $scriptProperties, \'\'); //commaseparated list of resource-ids or/and the keyword \'parents\' where to inherit from
$inheritFrom = !empty($inheritFrom) ? explode(\',\',$inheritFrom) : \'\';

$modx->setPlaceholder(\'docid\', $docid);

$base_path = $modx->getOption(\'base_path\', null, MODX_BASE_PATH);
$base_url = $modx->getOption(\'base_url\', null, MODX_BASE_URL);

$migx = $modx->getService(\'migx\', \'Migx\', $modx->getOption(\'migx.core_path\', null, $modx->getOption(\'core_path\') . \'components/migx/\') . \'model/migx/\', $scriptProperties);
if (!($migx instanceof Migx))
    return \'\';
$migx->working_context = isset($modx->resource) ? $modx->resource->get(\'context_key\') : \'web\';

if (!empty($tvname)) {
    if ($tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $tvname))) {

        /*
        *   get inputProperties
        */


        $properties = $tv->get(\'input_properties\');
        $properties = isset($properties[\'formtabs\']) ? $properties : $tv->getProperties();

        $migx->config[\'configs\'] = $modx->getOption(\'configs\', $properties, \'\');
        if (!empty($migx->config[\'configs\'])) {
            $migx->loadConfigs();
            // get tabs from file or migx-config-table
            $formtabs = $migx->getTabs();
        }
        if (empty($formtabs) && isset($properties[\'formtabs\'])) {
            //try to get formtabs and its fields from properties
            $formtabs = $modx->fromJSON($properties[\'formtabs\']);
        }

        if (!empty($properties[\'basePath\'])) {
            if ($properties[\'autoResourceFolders\'] == \'true\') {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'basePath\'] . $docid . \'/\';
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'] . $docid . \'/\';
            } else {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'base_path\'];
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'];
            }
        }
        if ($jsonVarKey == \'migx_outputvalue\' && !empty($properties[\'jsonvarkey\'])) {
            $jsonVarKey = $properties[\'jsonvarkey\'];
            $outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
        }
     
        if (empty($outputvalue)){
            $outputvalue = $tv->renderOutput($docid);
            if (empty($outputvalue) && !empty($inheritFrom)){
                foreach ($inheritFrom as $from){
                    if ($from == \'parents\'){
                        $outputvalue = $tv->processInheritBinding(\'\',$docid);
                    }else{
                        $outputvalue = $tv->renderOutput($from);
                    }
                    if (!empty($outputvalue)){
                        break;
                    }                    
                }
            }
        }

       
        /*
        *   get inputTvs 
        */
        $inputTvs = array();
        if (is_array($formtabs)) {

            //multiple different Forms
            // Note: use same field-names and inputTVs in all forms
            $inputTvs = $migx->extractInputTvs($formtabs);
        }
        if ($migx->source = $tv->getSource($migx->working_context, false)){
            $migx->source->initialize();
        }
        
    }


}

if (empty($outputvalue)) {
    return \'\';
}

//echo $outputvalue.\'<br/><br/>\';

$items = $modx->fromJSON($outputvalue);

// where filter
if (is_array($where) && count($where) > 0) {
    $items = $migx->filterItems($where, $items);
}
$modx->setPlaceholder($totalVar, count($items));

if (!empty($reverse)) {
    $items = array_reverse($items);
}

// sort items
if (is_array($sort) && count($sort) > 0) {
    $items = $migx->sortDbResult($items, $sort);
}

$summaries = array();
$output = \'\';
$items = $offset > 0 ? array_slice($items, $offset) : $items;
$count = count($items);

if ($count > 0) {
    $limit = $limit == 0 || $limit > $count ? $count : $limit;
    $preselectLimit = $preselectLimit > $count ? $count : $preselectLimit;
    //preselect important items
    $preitems = array();
    if ($randomize && $preselectLimit > 0) {
        for ($i = 0; $i < $preselectLimit; $i++) {
            $preitems[] = $items[$i];
            unset($items[$i]);
        }
        $limit = $limit - count($preitems);
    }

    //shuffle items
    if ($randomize) {
        shuffle($items);
    }

    //limit items
    $count = count($items);
    $tempitems = array();

    for ($i = 0; $i < $limit; $i++) {
        if ($i >= $count) {
            break;
        }
        $tempitems[] = $items[$i];
    }
    $items = $tempitems;

    //add preselected items and schuffle again
    if ($randomize && $preselectLimit > 0) {
        $items = array_merge($preitems, $items);
        shuffle($items);
    }

    $properties = array();
    foreach ($scriptProperties as $property => $value) {
        $properties[\'property.\' . $property] = $value;
    }

    $idx = 0;
    $output = array();
    $template = array();
    $count = count($items);

    foreach ($items as $key => $item) {
        $formname = isset($item[\'MIGX_formname\']) ? $item[\'MIGX_formname\'] . \'_\' : \'\';
        $fields = array();
        foreach ($item as $field => $value) {
            if (is_array($value)) {
                if (is_array($value[0])) {
                    //nested array - convert to json
                    $value = $modx->toJson($value);
                } else {
                    $value = implode(\'||\', $value); //handle arrays (checkboxes, multiselects)
                }
            }


            $inputTVkey = $formname . $field;

            if ($processTVs && isset($inputTvs[$inputTVkey])) {
                if (isset($inputTvs[$inputTVkey][\'inputTV\']) && $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $inputTvs[$inputTVkey][\'inputTV\']))) {

                } else {
                    $tv = $modx->newObject(\'modTemplateVar\');
                    $tv->set(\'type\', $inputTvs[$inputTVkey][\'inputTVtype\']);
                }
                $inputTV = $inputTvs[$inputTVkey];

                $mTypes = $modx->getOption(\'manipulatable_url_tv_output_types\', null, \'image,file\');
                //don\'t manipulate any urls here
                $modx->setOption(\'manipulatable_url_tv_output_types\', \'\');
                $tv->set(\'default_text\', $value);
                $value = $tv->renderOutput($docid);
                //set option back
                $modx->setOption(\'manipulatable_url_tv_output_types\', $mTypes);
                //now manipulate urls
                if ($mediasource = $migx->getFieldSource($inputTV, $tv)) {
                    $mTypes = explode(\',\', $mTypes);
                    if (!empty($value) && in_array($tv->get(\'type\'), $mTypes)) {
                        //$value = $mediasource->prepareOutputUrl($value);
                        $value = str_replace(\'/./\', \'/\', $mediasource->prepareOutputUrl($value));
                    }
                }

            }
            $fields[$field] = $value;

        }

        if (!empty($addfields)) {
            foreach ($addfields as $addfield) {
                $addfield = explode(\':\', $addfield);
                $addname = $addfield[0];
                $adddefault = isset($addfield[1]) ? $addfield[1] : \'\';
                $fields[$addname] = $adddefault;
            }
        }

        if (!empty($sumFields)) {
            $sumFields = is_array($sumFields) ? $sumFields : explode(\',\', $sumFields);
            foreach ($sumFields as $sumField) {
                if (isset($fields[$sumField])) {
                    $summaries[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField] + $fields[$sumField];
                    $fields[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField];
                }
            }
        }


        if ($toJsonPlaceholder) {
            $output[] = $fields;
        } else {
            $fields[\'_alt\'] = $idx % 2;
            $idx++;
            $fields[\'_first\'] = $idx == 1 ? true : \'\';
            $fields[\'_last\'] = $idx == $limit ? true : \'\';
            $fields[\'idx\'] = $idx;
            $rowtpl = \'\';
            //get changing tpls from field
            if (substr($tpl, 0, 7) == "@FIELD:") {
                $tplField = substr($tpl, 7);
                $rowtpl = $fields[$tplField];
            }

            if ($fields[\'_first\'] && !empty($tplFirst)) {
                $rowtpl = $tplFirst;
            }
            if ($fields[\'_last\'] && empty($rowtpl) && !empty($tplLast)) {
                $rowtpl = $tplLast;
            }
            $tplidx = \'tpl_\' . $idx;
            if (empty($rowtpl) && !empty($$tplidx)) {
                $rowtpl = $$tplidx;
            }
            if ($idx > 1 && empty($rowtpl)) {
                $divisors = $migx->getDivisors($idx);
                if (!empty($divisors)) {
                    foreach ($divisors as $divisor) {
                        $tplnth = \'tpl_n\' . $divisor;
                        if (!empty($$tplnth)) {
                            $rowtpl = $$tplnth;
                            if (!empty($rowtpl)) {
                                break;
                            }
                        }
                    }
                }
            }

            if ($count == 1 && isset($tpl_oneresult)) {
                $rowtpl = $tpl_oneresult;
            }

            $fields = array_merge($fields, $properties);

            if (!empty($rowtpl)) {
                $template = $migx->getTemplate($tpl, $template);
                $fields[\'_tpl\'] = $template[$tpl];
            } else {
                $rowtpl = $tpl;

            }
            $template = $migx->getTemplate($rowtpl, $template);


            if ($template[$rowtpl]) {
                $chunk = $modx->newObject(\'modChunk\');
                $chunk->setCacheable(false);
                $chunk->setContent($template[$rowtpl]);


                if (!empty($placeholdersKeyField) && isset($fields[$placeholdersKeyField])) {
                    $output[$fields[$placeholdersKeyField]] = $chunk->process($fields);
                } else {
                    $output[] = $chunk->process($fields);
                }
            } else {
                if (!empty($placeholdersKeyField)) {
                    $output[$fields[$placeholdersKeyField]] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                } else {
                    $output[] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                }
            }
        }


    }
}

if (count($summaries) > 0) {
    $modx->toPlaceholders($summaries);
}


if ($toJsonPlaceholder) {
    $modx->setPlaceholder($toJsonPlaceholder, $modx->toJson($output));
    return \'\';
}

if (!empty($toSeparatePlaceholders)) {
    $modx->toPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}
/*
if (!empty($outerTpl))
$o = parseTpl($outerTpl, array(\'output\'=>implode($outputSeparator, $output)));
else 
*/

if ($count > 0 && $splits > 0) {
    $size = ceil($count / $splits);
    $chunks = array_chunk($output, $size);
    $output = array();
    foreach ($chunks as $chunk) {
        $o = implode($outputSeparator, $chunk);
        $output[] = $modx->getChunk($splitTpl, array(\'output\' => $o));
    }
    $outputSeparator = $splitSeparator;
}

if (is_array($output)) {
    $o = implode($outputSeparator, $output);
} else {
    $o = $output;
}

if (!empty($o) && !empty($wrapperTpl)) {
    $template = $migx->getTemplate($wrapperTpl);
    if ($template[$wrapperTpl]) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $chunk->setContent($template[$wrapperTpl]);
        $properties[\'output\'] = $o;
        $o = $chunk->process($properties);
    }
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $o);
    return \'\';
}

return $o;',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * getImageList
 *
 * Copyright 2009-2014 by Bruno Perner <b.perner@gmx.de>
 *
 * getImageList is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * getImageList is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * getImageList; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package migx
 */
/**
 * getImageList
 *
 * display Items from outputvalue of TV with custom-TV-input-type MIGX or from other JSON-string for MODx Revolution 
 *
 * @version 1.4
 * @author Bruno Perner <b.perner@gmx.de>
 * @copyright Copyright &copy; 2009-2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version.
 * @package migx
 */

/*example: <ul>[[!getImageList? &tvname=`myTV`&tpl=`@CODE:<li>[[+idx]]<img src="[[+imageURL]]"/><p>[[+imageAlt]]</p></li>`]]</ul>*/
/* get default properties */


$tvname = $modx->getOption(\'tvname\', $scriptProperties, \'\');
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'\');
$wrapperTpl = $modx->getOption(\'wrapperTpl\', $scriptProperties, \'\');
$limit = $modx->getOption(\'limit\', $scriptProperties, \'0\');
$offset = $modx->getOption(\'offset\', $scriptProperties, 0);
$totalVar = $modx->getOption(\'totalVar\', $scriptProperties, \'total\');
$randomize = $modx->getOption(\'randomize\', $scriptProperties, false);
$preselectLimit = $modx->getOption(\'preselectLimit\', $scriptProperties, 0); // when random preselect important images
$where = $modx->getOption(\'where\', $scriptProperties, \'\');
$where = !empty($where) ? $modx->fromJSON($where) : array();
$sort = $modx->getOption(\'sort\', $scriptProperties, \'\');
$sort = !empty($sort) ? $modx->fromJSON($sort) : array();
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$placeholdersKeyField = $modx->getOption(\'placeholdersKeyField\', $scriptProperties, \'MIGX_id\');
$toJsonPlaceholder = $modx->getOption(\'toJsonPlaceholder\', $scriptProperties, false);
$jsonVarKey = $modx->getOption(\'jsonVarKey\', $scriptProperties, \'migx_outputvalue\');
$outputvalue = $modx->getOption(\'value\', $scriptProperties, \'\');
$outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
$docidVarKey = $modx->getOption(\'docidVarKey\', $scriptProperties, \'migx_docid\');
$docid = $modx->getOption(\'docid\', $scriptProperties, (isset($modx->resource) ? $modx->resource->get(\'id\') : 1));
$docid = isset($_REQUEST[$docidVarKey]) ? $_REQUEST[$docidVarKey] : $docid;
$processTVs = $modx->getOption(\'processTVs\', $scriptProperties, \'1\');
$reverse = $modx->getOption(\'reverse\', $scriptProperties, \'0\');
$sumFields = $modx->getOption(\'sumFields\', $scriptProperties, \'\');
$sumPrefix = $modx->getOption(\'sumPrefix\', $scriptProperties, \'summary_\');
$addfields = $modx->getOption(\'addfields\', $scriptProperties, \'\');
$addfields = !empty($addfields) ? explode(\',\', $addfields) : null;
//split json into parts
$splits = $modx->fromJson($modx->getOption(\'splits\', $scriptProperties, 0));
$splitTpl = $modx->getOption(\'splitTpl\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$inheritFrom = $modx->getOption(\'inheritFrom\', $scriptProperties, \'\'); //commaseparated list of resource-ids or/and the keyword \'parents\' where to inherit from
$inheritFrom = !empty($inheritFrom) ? explode(\',\',$inheritFrom) : \'\';

$modx->setPlaceholder(\'docid\', $docid);

$base_path = $modx->getOption(\'base_path\', null, MODX_BASE_PATH);
$base_url = $modx->getOption(\'base_url\', null, MODX_BASE_URL);

$migx = $modx->getService(\'migx\', \'Migx\', $modx->getOption(\'migx.core_path\', null, $modx->getOption(\'core_path\') . \'components/migx/\') . \'model/migx/\', $scriptProperties);
if (!($migx instanceof Migx))
    return \'\';
$migx->working_context = isset($modx->resource) ? $modx->resource->get(\'context_key\') : \'web\';

if (!empty($tvname)) {
    if ($tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $tvname))) {

        /*
        *   get inputProperties
        */


        $properties = $tv->get(\'input_properties\');
        $properties = isset($properties[\'formtabs\']) ? $properties : $tv->getProperties();

        $migx->config[\'configs\'] = $modx->getOption(\'configs\', $properties, \'\');
        if (!empty($migx->config[\'configs\'])) {
            $migx->loadConfigs();
            // get tabs from file or migx-config-table
            $formtabs = $migx->getTabs();
        }
        if (empty($formtabs) && isset($properties[\'formtabs\'])) {
            //try to get formtabs and its fields from properties
            $formtabs = $modx->fromJSON($properties[\'formtabs\']);
        }

        if (!empty($properties[\'basePath\'])) {
            if ($properties[\'autoResourceFolders\'] == \'true\') {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'basePath\'] . $docid . \'/\';
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'] . $docid . \'/\';
            } else {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'base_path\'];
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'];
            }
        }
        if ($jsonVarKey == \'migx_outputvalue\' && !empty($properties[\'jsonvarkey\'])) {
            $jsonVarKey = $properties[\'jsonvarkey\'];
            $outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
        }
     
        if (empty($outputvalue)){
            $outputvalue = $tv->renderOutput($docid);
            if (empty($outputvalue) && !empty($inheritFrom)){
                foreach ($inheritFrom as $from){
                    if ($from == \'parents\'){
                        $outputvalue = $tv->processInheritBinding(\'\',$docid);
                    }else{
                        $outputvalue = $tv->renderOutput($from);
                    }
                    if (!empty($outputvalue)){
                        break;
                    }                    
                }
            }
        }

       
        /*
        *   get inputTvs 
        */
        $inputTvs = array();
        if (is_array($formtabs)) {

            //multiple different Forms
            // Note: use same field-names and inputTVs in all forms
            $inputTvs = $migx->extractInputTvs($formtabs);
        }
        if ($migx->source = $tv->getSource($migx->working_context, false)){
            $migx->source->initialize();
        }
        
    }


}

if (empty($outputvalue)) {
    return \'\';
}

//echo $outputvalue.\'<br/><br/>\';

$items = $modx->fromJSON($outputvalue);

// where filter
if (is_array($where) && count($where) > 0) {
    $items = $migx->filterItems($where, $items);
}
$modx->setPlaceholder($totalVar, count($items));

if (!empty($reverse)) {
    $items = array_reverse($items);
}

// sort items
if (is_array($sort) && count($sort) > 0) {
    $items = $migx->sortDbResult($items, $sort);
}

$summaries = array();
$output = \'\';
$items = $offset > 0 ? array_slice($items, $offset) : $items;
$count = count($items);

if ($count > 0) {
    $limit = $limit == 0 || $limit > $count ? $count : $limit;
    $preselectLimit = $preselectLimit > $count ? $count : $preselectLimit;
    //preselect important items
    $preitems = array();
    if ($randomize && $preselectLimit > 0) {
        for ($i = 0; $i < $preselectLimit; $i++) {
            $preitems[] = $items[$i];
            unset($items[$i]);
        }
        $limit = $limit - count($preitems);
    }

    //shuffle items
    if ($randomize) {
        shuffle($items);
    }

    //limit items
    $count = count($items);
    $tempitems = array();

    for ($i = 0; $i < $limit; $i++) {
        if ($i >= $count) {
            break;
        }
        $tempitems[] = $items[$i];
    }
    $items = $tempitems;

    //add preselected items and schuffle again
    if ($randomize && $preselectLimit > 0) {
        $items = array_merge($preitems, $items);
        shuffle($items);
    }

    $properties = array();
    foreach ($scriptProperties as $property => $value) {
        $properties[\'property.\' . $property] = $value;
    }

    $idx = 0;
    $output = array();
    $template = array();
    $count = count($items);

    foreach ($items as $key => $item) {
        $formname = isset($item[\'MIGX_formname\']) ? $item[\'MIGX_formname\'] . \'_\' : \'\';
        $fields = array();
        foreach ($item as $field => $value) {
            if (is_array($value)) {
                if (is_array($value[0])) {
                    //nested array - convert to json
                    $value = $modx->toJson($value);
                } else {
                    $value = implode(\'||\', $value); //handle arrays (checkboxes, multiselects)
                }
            }


            $inputTVkey = $formname . $field;

            if ($processTVs && isset($inputTvs[$inputTVkey])) {
                if (isset($inputTvs[$inputTVkey][\'inputTV\']) && $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $inputTvs[$inputTVkey][\'inputTV\']))) {

                } else {
                    $tv = $modx->newObject(\'modTemplateVar\');
                    $tv->set(\'type\', $inputTvs[$inputTVkey][\'inputTVtype\']);
                }
                $inputTV = $inputTvs[$inputTVkey];

                $mTypes = $modx->getOption(\'manipulatable_url_tv_output_types\', null, \'image,file\');
                //don\'t manipulate any urls here
                $modx->setOption(\'manipulatable_url_tv_output_types\', \'\');
                $tv->set(\'default_text\', $value);
                $value = $tv->renderOutput($docid);
                //set option back
                $modx->setOption(\'manipulatable_url_tv_output_types\', $mTypes);
                //now manipulate urls
                if ($mediasource = $migx->getFieldSource($inputTV, $tv)) {
                    $mTypes = explode(\',\', $mTypes);
                    if (!empty($value) && in_array($tv->get(\'type\'), $mTypes)) {
                        //$value = $mediasource->prepareOutputUrl($value);
                        $value = str_replace(\'/./\', \'/\', $mediasource->prepareOutputUrl($value));
                    }
                }

            }
            $fields[$field] = $value;

        }

        if (!empty($addfields)) {
            foreach ($addfields as $addfield) {
                $addfield = explode(\':\', $addfield);
                $addname = $addfield[0];
                $adddefault = isset($addfield[1]) ? $addfield[1] : \'\';
                $fields[$addname] = $adddefault;
            }
        }

        if (!empty($sumFields)) {
            $sumFields = is_array($sumFields) ? $sumFields : explode(\',\', $sumFields);
            foreach ($sumFields as $sumField) {
                if (isset($fields[$sumField])) {
                    $summaries[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField] + $fields[$sumField];
                    $fields[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField];
                }
            }
        }


        if ($toJsonPlaceholder) {
            $output[] = $fields;
        } else {
            $fields[\'_alt\'] = $idx % 2;
            $idx++;
            $fields[\'_first\'] = $idx == 1 ? true : \'\';
            $fields[\'_last\'] = $idx == $limit ? true : \'\';
            $fields[\'idx\'] = $idx;
            $rowtpl = \'\';
            //get changing tpls from field
            if (substr($tpl, 0, 7) == "@FIELD:") {
                $tplField = substr($tpl, 7);
                $rowtpl = $fields[$tplField];
            }

            if ($fields[\'_first\'] && !empty($tplFirst)) {
                $rowtpl = $tplFirst;
            }
            if ($fields[\'_last\'] && empty($rowtpl) && !empty($tplLast)) {
                $rowtpl = $tplLast;
            }
            $tplidx = \'tpl_\' . $idx;
            if (empty($rowtpl) && !empty($$tplidx)) {
                $rowtpl = $$tplidx;
            }
            if ($idx > 1 && empty($rowtpl)) {
                $divisors = $migx->getDivisors($idx);
                if (!empty($divisors)) {
                    foreach ($divisors as $divisor) {
                        $tplnth = \'tpl_n\' . $divisor;
                        if (!empty($$tplnth)) {
                            $rowtpl = $$tplnth;
                            if (!empty($rowtpl)) {
                                break;
                            }
                        }
                    }
                }
            }

            if ($count == 1 && isset($tpl_oneresult)) {
                $rowtpl = $tpl_oneresult;
            }

            $fields = array_merge($fields, $properties);

            if (!empty($rowtpl)) {
                $template = $migx->getTemplate($tpl, $template);
                $fields[\'_tpl\'] = $template[$tpl];
            } else {
                $rowtpl = $tpl;

            }
            $template = $migx->getTemplate($rowtpl, $template);


            if ($template[$rowtpl]) {
                $chunk = $modx->newObject(\'modChunk\');
                $chunk->setCacheable(false);
                $chunk->setContent($template[$rowtpl]);


                if (!empty($placeholdersKeyField) && isset($fields[$placeholdersKeyField])) {
                    $output[$fields[$placeholdersKeyField]] = $chunk->process($fields);
                } else {
                    $output[] = $chunk->process($fields);
                }
            } else {
                if (!empty($placeholdersKeyField)) {
                    $output[$fields[$placeholdersKeyField]] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                } else {
                    $output[] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                }
            }
        }


    }
}

if (count($summaries) > 0) {
    $modx->toPlaceholders($summaries);
}


if ($toJsonPlaceholder) {
    $modx->setPlaceholder($toJsonPlaceholder, $modx->toJson($output));
    return \'\';
}

if (!empty($toSeparatePlaceholders)) {
    $modx->toPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}
/*
if (!empty($outerTpl))
$o = parseTpl($outerTpl, array(\'output\'=>implode($outputSeparator, $output)));
else 
*/

if ($count > 0 && $splits > 0) {
    $size = ceil($count / $splits);
    $chunks = array_chunk($output, $size);
    $output = array();
    foreach ($chunks as $chunk) {
        $o = implode($outputSeparator, $chunk);
        $output[] = $modx->getChunk($splitTpl, array(\'output\' => $o));
    }
    $outputSeparator = $splitSeparator;
}

if (is_array($output)) {
    $o = implode($outputSeparator, $output);
} else {
    $o = $output;
}

if (!empty($o) && !empty($wrapperTpl)) {
    $template = $migx->getTemplate($wrapperTpl);
    if ($template[$wrapperTpl]) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $chunk->setContent($template[$wrapperTpl]);
        $properties[\'output\'] = $o;
        $o = $chunk->process($properties);
    }
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $o);
    return \'\';
}

return $o;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'phpthumbof' => 
      array (
        'fields' => 
        array (
          'id' => 61,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'phpthumbof',
          'description' => 'A custom output filter that generates thumbnails securely with phpThumb.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * phpThumbOf
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * phpThumbOf is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * phpThumbOf is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * phpThumbOf; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package phpthumbof
 */
/**
 * A custom output filter for phpThumb
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var phpThumbOf $phpThumbOf
 * @var string $input
 * @var string|array $options
 *
 * @package phpthumbof
 */
if (empty($modx)) return \'\';
if (!$modx->loadClass(\'modPhpThumb\',$modx->getOption(\'core_path\').\'model/phpthumb/\',true,true)) {
    $modx->log(modX::LOG_LEVEL_ERROR,\'[phpThumbOf] Could not load modPhpThumb class.\');
    return \'\';
}
if (empty($input)) {
    $modx->log(modX::LOG_LEVEL_DEBUG,\'[phpThumbOf] Empty image path passed, aborting.\');
    return \'\';
}
$modelPath = $modx->getOption(\'phpthumbof.core_path\',null,$modx->getOption(\'core_path\').\'components/phpthumbof/\').\'model/\';
require_once $modelPath.\'phpthumbof/phpthumbof.class.php\';
$phpThumbOf = new phpThumbOf($modx,$scriptProperties);

$phpThumbOf->getCacheDirectory();
$phpThumbOf->ensureCacheDirectoryIsWritable();

$thumbnail = $phpThumbOf->createThumbnailObject();
$thumbnail->setInput($input);
$thumbnail->setOptions($options);
$thumbnail->initializeService();
return $thumbnail->render();',
          'locked' => false,
          'properties' => NULL,
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * phpThumbOf
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * phpThumbOf is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * phpThumbOf is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * phpThumbOf; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package phpthumbof
 */
/**
 * A custom output filter for phpThumb
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var phpThumbOf $phpThumbOf
 * @var string $input
 * @var string|array $options
 *
 * @package phpthumbof
 */
if (empty($modx)) return \'\';
if (!$modx->loadClass(\'modPhpThumb\',$modx->getOption(\'core_path\').\'model/phpthumb/\',true,true)) {
    $modx->log(modX::LOG_LEVEL_ERROR,\'[phpThumbOf] Could not load modPhpThumb class.\');
    return \'\';
}
if (empty($input)) {
    $modx->log(modX::LOG_LEVEL_DEBUG,\'[phpThumbOf] Empty image path passed, aborting.\');
    return \'\';
}
$modelPath = $modx->getOption(\'phpthumbof.core_path\',null,$modx->getOption(\'core_path\').\'components/phpthumbof/\').\'model/\';
require_once $modelPath.\'phpthumbof/phpthumbof.class.php\';
$phpThumbOf = new phpThumbOf($modx,$scriptProperties);

$phpThumbOf->getCacheDirectory();
$phpThumbOf->ensureCacheDirectoryIsWritable();

$thumbnail = $phpThumbOf->createThumbnailObject();
$thumbnail->setInput($input);
$thumbnail->setOptions($options);
$thumbnail->initializeService();
return $thumbnail->render();',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'getPrice' => 
      array (
        'fields' => 
        array (
          'id' => 63,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'getPrice',
          'description' => 'для вывода цены в Подборках',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '//$name_res = $modx->getOption(\'nameResource\', $scriptProperties);
//$real_price = $modx->getObject(\'modResource\',array(\'published\' => 1, \'pagetitle\' => $name_res ))->getTVValue(\'price\');
//return $modx->getChunk(\'showPrice\',array(\'real_price\' => $real_price));
return $modx->getObject(\'modResource\', $modx->getOption(\'idResource\', $scriptProperties) )->getTVValue(\'price\');',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '//$name_res = $modx->getOption(\'nameResource\', $scriptProperties);
//$real_price = $modx->getObject(\'modResource\',array(\'published\' => 1, \'pagetitle\' => $name_res ))->getTVValue(\'price\');
//return $modx->getChunk(\'showPrice\',array(\'real_price\' => $real_price));
return $modx->getObject(\'modResource\', $modx->getOption(\'idResource\', $scriptProperties) )->getTVValue(\'price\');',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'FormIt' => 
      array (
        'fields' => 
        array (
          'id' => 12,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'FormIt',
          'description' => 'A dynamic form processing snippet.',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt
 *
 * A dynamic form processing Snippet for MODx Revolution.
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @package formit
 */

$modelPath = $modx->getOption(\'formit.core_path\', null, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/formit/\') . \'model/formit/\';
$modx->loadClass(\'FormIt\', $modelPath, true, true);

$fi = new FormIt($modx,$scriptProperties);
$fi->initialize($modx->context->get(\'key\'));
$fi->loadRequest();

$fields = $fi->request->prepare();
return $fi->request->handle($fields);',
          'locked' => false,
          'properties' => 
          array (
            'hooks' => 
            array (
              'name' => 'hooks',
              'desc' => 'prop_formit.hooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Разделённый запятыми список хуков которые будут выполнятся по очереди после того как форма пройдёт проверку. Если какой-то из хуков вернёт false, то следующии хуки не будут выполнены. Хук также может быть именем сниппета, этот сниппет будет выполнен как хук.',
              'area_trans' => '',
            ),
            'preHooks' => 
            array (
              'name' => 'preHooks',
              'desc' => 'prop_formit.prehooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Разделённый запятыми список хуков которые будут выполнятся по очереди после того как форма будет загружена. Если какой-то из хуков вернёт false, то следующие хуки не будут выполнены. Например: можно предварительно устанавливать значения полей формы с помощью $scriptProperties[`hook`]->fields[`fieldname`]. Хук также может быть именем сниппета, этот сниппет будет выполнен как хук.',
              'area_trans' => '',
            ),
            'submitVar' => 
            array (
              'name' => 'submitVar',
              'desc' => 'prop_formit.submitvar_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Если установлено значение, то обработка формы не начнётся пока  POST параметр с этим именем не будет передан.',
              'area_trans' => '',
            ),
            'validate' => 
            array (
              'name' => 'validate',
              'desc' => 'prop_formit.validate_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Разделённый запятыми список полей для проверки, для каждого поля пишется имя:валидатор (т.е.: username:required,email:required). Валидаторы могут быть объединены через двоеточие, например email:email:required. Этот параметр может быть задан на нескольких строках.',
              'area_trans' => '',
            ),
            'errTpl' => 
            array (
              'name' => 'errTpl',
              'desc' => 'prop_formit.errtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<span class="error">[[+error]]</span>',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Шаблон сообщения об ошибке.',
              'area_trans' => '',
            ),
            'validationErrorMessage' => 
            array (
              'name' => 'validationErrorMessage',
              'desc' => 'prop_formit.validationerrormessage_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<p class="error">A form validation error occurred. Please check the values you have entered.</p>',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'A general error message to set to a placeholder if validation fails. Can contain [[+errors]] if you want to display a list of all errors at the top.',
              'area_trans' => '',
            ),
            'validationErrorBulkTpl' => 
            array (
              'name' => 'validationErrorBulkTpl',
              'desc' => 'prop_formit.validationerrorbulktpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li>[[+error]]</li>',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'HTML tpl that is used for each individual error in the generic validation error message value.',
              'area_trans' => '',
            ),
            'trimValuesBeforeValidation' => 
            array (
              'name' => 'trimValuesBeforeValidation',
              'desc' => 'prop_formit.trimvaluesdeforevalidation_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to trim spaces from the beginning and end of values before attempting validation. Defaults to true.',
              'area_trans' => '',
            ),
            'customValidators' => 
            array (
              'name' => 'customValidators',
              'desc' => 'prop_formit.customvalidators_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Разделённый запятыми список имён пользовательских валидаторов(сниппетов), которые вы планируете использовать в этой форме. Пользовательские валидаторы должны быть обязательно указаны в этом параметре, иначе они не будут работать.',
              'area_trans' => '',
            ),
            'clearFieldsOnSuccess' => 
            array (
              'name' => 'clearFieldsOnSuccess',
              'desc' => 'prop_formit.clearfieldsonsuccess_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Если установлено значение true, то поля формы будут очищатся после успешной отправки формы.',
              'area_trans' => '',
            ),
            'successMessage' => 
            array (
              'name' => 'successMessage',
              'desc' => 'prop_formit.successmessage_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Значение подстановщика для сообщения об успехе. Имя подстановщика устанавливается в параметре &successMessagePlaceholder, по умолчанию «fi.successMessage».',
              'area_trans' => '',
            ),
            'successMessagePlaceholder' => 
            array (
              'name' => 'successMessagePlaceholder',
              'desc' => 'prop_formit.successmessageplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'fi.successMessage',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Подстановщик для сообщения об успехе.',
              'area_trans' => '',
            ),
            'store' => 
            array (
              'name' => 'store',
              'desc' => 'prop_formit.store_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Если установлено true,  данные переданные через форму будет сохранятcя в кэше, для дальнейшего их использования с помощью сниппета FormItRetriever.',
              'area_trans' => '',
            ),
            'placeholderPrefix' => 
            array (
              'name' => 'placeholderPrefix',
              'desc' => 'prop_formit.placeholderprefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'fi.',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Префикс который используется всеми подстановщиками установлеными FormIt для полей. По умолчанию «fi.»',
              'area_trans' => '',
            ),
            'storeTime' => 
            array (
              'name' => 'storeTime',
              'desc' => 'prop_formit.storetime_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '300',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Если выбрано `запоминание` данных формы, то этот параметр указывает время(в секундах)  для хранения данных из отправленной формы. По умолчанию пять минут.',
              'area_trans' => '',
            ),
            'storeLocation' => 
            array (
              'name' => 'storeLocation',
              'desc' => 'prop_formit.storelocation_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'cache',
                  'text' => 'formit.opt_cache',
                  'name' => 'MODX Cache',
                ),
                1 => 
                array (
                  'value' => 'session',
                  'text' => 'formit.opt_session',
                  'name' => 'Session',
                ),
              ),
              'value' => 'cache',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `store` is set to true, this specifies the cache location of the data from the form submission. Defaults to MODX cache.',
              'area_trans' => '',
            ),
            'allowFiles' => 
            array (
              'name' => 'allowFiles',
              'desc' => 'prop_formit.allowfiles_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If set to 0, will prevent files from being submitted on the form.',
              'area_trans' => '',
            ),
            'spamEmailFields' => 
            array (
              'name' => 'spamEmailFields',
              'desc' => 'prop_formit.spamemailfields_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'email',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «spam». Разделённый запятыми список полей содержащих адреса электронной почты для проверки на причастность к спаму.',
              'area_trans' => '',
            ),
            'spamCheckIp' => 
            array (
              'name' => 'spamCheckIp',
              'desc' => 'prop_formit.spamcheckip_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «spam». Если это параметр установлен в true, то будет проверяться ip-адресс отправителя формы на причастность к спаму.',
              'area_trans' => '',
            ),
            'recaptchaJs' => 
            array (
              'name' => 'recaptchaJs',
              'desc' => 'prop_formit.recaptchajs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '{}',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «recaptcha».  JSON объект который содержит в себе  настройки для виджета reCaptcha.',
              'area_trans' => '',
            ),
            'recaptchaTheme' => 
            array (
              'name' => 'recaptchaTheme',
              'desc' => 'prop_formit.recaptchatheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'red',
                  'text' => 'formit.opt_red',
                  'name' => 'Red',
                ),
                1 => 
                array (
                  'value' => 'white',
                  'text' => 'formit.opt_white',
                  'name' => 'White',
                ),
                2 => 
                array (
                  'value' => 'clean',
                  'text' => 'formit.opt_clean',
                  'name' => 'Clean',
                ),
                3 => 
                array (
                  'value' => 'blackglass',
                  'text' => 'formit.opt_blackglass',
                  'name' => 'Black Glass',
                ),
              ),
              'value' => 'clean',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «recaptcha». Тема оформления для виджета reCaptcha.',
              'area_trans' => '',
            ),
            'redirectTo' => 
            array (
              'name' => 'redirectTo',
              'desc' => 'prop_formit.redirectto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «redirect». В этом параметре надо указать идентификатор ресурса на который будет происходить редирект после успешной отправки формы.',
              'area_trans' => '',
            ),
            'redirectParams' => 
            array (
              'name' => 'redirectParams',
              'desc' => 'prop_formit.redirectparams_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => ' JSON array of parameters to pass to the redirect hook that will be passed when redirecting.',
              'area_trans' => '',
            ),
            'emailTo' => 
            array (
              'name' => 'emailTo',
              'desc' => 'prop_formit.emailto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Разделённый запятыми список адресов электронной почты на которые надо послать письмо.',
              'area_trans' => '',
            ),
            'emailToName' => 
            array (
              'name' => 'emailToName',
              'desc' => 'prop_formit.emailtoname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailTo».',
              'area_trans' => '',
            ),
            'emailFrom' => 
            array (
              'name' => 'emailFrom',
              'desc' => 'prop_formit.emailfrom_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Если этот параметр установлен, то он будет определять адрес электронной почты отправителя письма. Если не установлен, то сначала адрес электронной почты будет искаться в данных формы  в поле с именем «email», если это поле не будет найдено, то будет использоваться  адрес электронной почты из системной настройки «emailsender».',
              'area_trans' => '',
            ),
            'emailFromName' => 
            array (
              'name' => 'emailFromName',
              'desc' => 'prop_formit.emailfromname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Имя отправителя письма.',
              'area_trans' => '',
            ),
            'emailReplyTo' => 
            array (
              'name' => 'emailReplyTo',
              'desc' => 'prop_formit.emailreplyto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Адрес электронной почты для ответа на письмо.',
              'area_trans' => '',
            ),
            'emailReplyToName' => 
            array (
              'name' => 'emailReplyToName',
              'desc' => 'prop_formit.emailreplytoname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Имя владельца адреса электронной почты который используется для ответа на письмо.',
              'area_trans' => '',
            ),
            'emailCC' => 
            array (
              'name' => 'emailCC',
              'desc' => 'prop_formit.emailcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Разделённый запятыми список адресов электронной почты на которые надо послать копию письма.',
              'area_trans' => '',
            ),
            'emailCCName' => 
            array (
              'name' => 'emailCCName',
              'desc' => 'prop_formit.emailccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailCC».',
              'area_trans' => '',
            ),
            'emailBCC' => 
            array (
              'name' => 'emailBCC',
              'desc' => 'prop_formit.emailbcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email».  Разделённый запятыми список адресов  электронной почты на которые надо послать скрытую копию письма.',
              'area_trans' => '',
            ),
            'emailBCCName' => 
            array (
              'name' => 'emailBCCName',
              'desc' => 'prop_formit.emailbccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailBCC».',
              'area_trans' => '',
            ),
            'emailReturnPath' => 
            array (
              'name' => 'emailReturnPath',
              'desc' => 'prop_formit.emailreturnpath_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, and this is set, will specify the Return-path: address for the email. If not set, will take the value of `emailFrom` property.',
              'area_trans' => '',
            ),
            'emailSubject' => 
            array (
              'name' => 'emailSubject',
              'desc' => 'prop_formit.emailsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». В этом параметре можно указать тему электронного письма.',
              'area_trans' => '',
            ),
            'emailUseFieldForSubject' => 
            array (
              'name' => 'emailUseFieldForSubject',
              'desc' => 'prop_formit.emailusefieldforsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Если поле «subject» используется в форме, и это параметр установлен в true,то содержимое этого поля будет использоваться как тема электронного письма.',
              'area_trans' => '',
            ),
            'emailHtml' => 
            array (
              'name' => 'emailHtml',
              'desc' => 'prop_formit.emailhtml_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Этот параметр включает использование html разметки в электронном письме. По умолчанию включено.',
              'area_trans' => '',
            ),
            'emailConvertNewlines' => 
            array (
              'name' => 'emailConvertNewlines',
              'desc' => 'prop_formit.emailconvertnewlines_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If true and emailHtml is set to 1, will convert newlines to BR tags in the email.',
              'area_trans' => '',
            ),
            'emailMultiWrapper' => 
            array (
              'name' => 'emailMultiWrapper',
              'desc' => 'prop_formit.emailmultiwrapper_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '[[+value]]',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Will wrap each item in a collection of fields sent via checkboxes/multi-selects. Defaults to just the value.',
              'area_trans' => '',
            ),
            'emailMultiSeparator' => 
            array (
              'name' => 'emailMultiSeparator',
              'desc' => 'prop_formit.emailmultiseparator_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'The default separator for collections of items sent through checkboxes/multi-selects. Defaults to a newline.',
              'area_trans' => '',
            ),
            'fiarTpl' => 
            array (
              'name' => 'fiarTpl',
              'desc' => 'prop_formit.fiartpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiartpl_desc',
              'area_trans' => '',
            ),
            'fiarToField' => 
            array (
              'name' => 'fiarToField',
              'desc' => 'prop_formit.fiartofield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'email',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiartofield_desc',
              'area_trans' => '',
            ),
            'fiarSubject' => 
            array (
              'name' => 'fiarSubject',
              'desc' => 'prop_formit.fiarsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '[[++site_name]] Auto-Responder',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiarsubject_desc',
              'area_trans' => '',
            ),
            'fiarFrom' => 
            array (
              'name' => 'fiarFrom',
              'desc' => 'prop_formit.fiarfrom_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiarfrom_desc',
              'area_trans' => '',
            ),
            'fiarFromName' => 
            array (
              'name' => 'fiarFromName',
              'desc' => 'prop_formit.fiarfromname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiarfromname_desc',
              'area_trans' => '',
            ),
            'fiarReplyTo' => 
            array (
              'name' => 'fiarReplyTo',
              'desc' => 'prop_formit.fiarreplyto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiarreplyto_desc',
              'area_trans' => '',
            ),
            'fiarReplyToName' => 
            array (
              'name' => 'fiarReplyToName',
              'desc' => 'prop_formit.fiarreplytoname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiarreplytoname_desc',
              'area_trans' => '',
            ),
            'fiarCC' => 
            array (
              'name' => 'fiarCC',
              'desc' => 'prop_formit.fiarcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiarcc_desc',
              'area_trans' => '',
            ),
            'fiarCCName' => 
            array (
              'name' => 'fiarCCName',
              'desc' => 'prop_fiar.fiarccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Необязательный параметр.  Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailCC».',
              'area_trans' => '',
            ),
            'fiarBCC' => 
            array (
              'name' => 'fiarBCC',
              'desc' => 'prop_formit.fiarbcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiarbcc_desc',
              'area_trans' => '',
            ),
            'fiarBCCName' => 
            array (
              'name' => 'fiarBCCName',
              'desc' => 'prop_formit.fiarbccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiarbccname_desc',
              'area_trans' => '',
            ),
            'fiarHtml' => 
            array (
              'name' => 'fiarHtml',
              'desc' => 'prop_formit.fiarhtml_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiarhtml_desc',
              'area_trans' => '',
            ),
            'mathMinRange' => 
            array (
              'name' => 'mathMinRange',
              'desc' => 'prop_formit.mathminrange_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '10',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.mathminrange_desc',
              'area_trans' => '',
            ),
            'mathMaxRange' => 
            array (
              'name' => 'mathMaxRange',
              'desc' => 'prop_formit.mathmaxrange_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '100',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.mathmaxrange_desc',
              'area_trans' => '',
            ),
            'mathField' => 
            array (
              'name' => 'mathField',
              'desc' => 'prop_formit.mathfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'math',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.mathfield_desc',
              'area_trans' => '',
            ),
            'mathOp1Field' => 
            array (
              'name' => 'mathOp1Field',
              'desc' => 'prop_formit.mathop1field_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'op1',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.mathop1field_desc',
              'area_trans' => '',
            ),
            'mathOp2Field' => 
            array (
              'name' => 'mathOp2Field',
              'desc' => 'prop_formit.mathop2field_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'op2',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.mathop2field_desc',
              'area_trans' => '',
            ),
            'mathOperatorField' => 
            array (
              'name' => 'mathOperatorField',
              'desc' => 'prop_formit.mathoperatorfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'operator',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.mathoperatorfield_desc',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt
 *
 * A dynamic form processing Snippet for MODx Revolution.
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @package formit
 */

$modelPath = $modx->getOption(\'formit.core_path\', null, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/formit/\') . \'model/formit/\';
$modx->loadClass(\'FormIt\', $modelPath, true, true);

$fi = new FormIt($modx,$scriptProperties);
$fi->initialize($modx->context->get(\'key\'));
$fi->loadRequest();

$fields = $fi->request->prepare();
return $fi->request->handle($fields);',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'shkOptions' => 
      array (
        'fields' => 
        array (
          'id' => 41,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'shkOptions',
          'description' => 'Print configuration of Shopkeeper',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => '/**
 * shkOptions
 * Сниппет выводит данные из конфигурации Shopkeeper
 *
 */

$output = array();

$get = $modx->getOption( \'get\', $scriptProperties, \'\' );
$post_name = explode( \',\', $modx->getOption( \'post_name\', $scriptProperties, $get ) );
$get = explode( \',\', $get );
$get = array_map( \'trim\', $get );
$post_name = array_map( \'trim\', $post_name );
$tpl = $modx->getOption( \'tpl\', $scriptProperties, \'\' );
$toPlaceholders = $modx->getOption( \'toPlaceholders\', $scriptProperties, false );
$pl_prefix = $modx->getOption( \'pl_prefix\', $scriptProperties, \'shkopt_\' );

if( empty( $get ) ) return \'\';

if( class_exists(\'Shopkeeper\') ){
    
    $config = Shopkeeper::getConfig( $get );
    
    //echo \'<pre>\' . print_r( $config, true ) . \'</pre>\';
    
    if( !empty( $config ) ){
        
        foreach( $get as $index => $opt_name ){
            
            if( !empty( $config[ $opt_name ] ) ){
                
                $output[ $opt_name ] = \'\';
                
                foreach( $config[ $opt_name ] as $key => $conf ){
                    
                    if( empty( $conf[\'value\'] ) ){
                        $conf[\'value\'] = $conf[\'label\'];
                    }
                    
                    $conf[\'selected\'] = ( isset( $post_name[$index] ) && isset( $_POST[ $post_name[$index] ] ) && $_POST[ $post_name[$index] ] == $conf[\'value\'] ? \'selected="selected"\' : \'\' );
                    
                    $output[ $opt_name ] .= $modx->getChunk( $tpl, $conf ) . PHP_EOL . "\\t";
                    
                }
                
            }
            
        }
        
    }
    
}

if( $toPlaceholders ){
    
    foreach( $output as $pl_name => $out ){
        $modx->setPlaceholder( $pl_prefix . $pl_name, $out );
    }
    
    $output = array();
    
}

return implode( \'\', $output );',
          'locked' => false,
          'properties' => NULL,
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * shkOptions
 * Сниппет выводит данные из конфигурации Shopkeeper
 *
 */

$output = array();

$get = $modx->getOption( \'get\', $scriptProperties, \'\' );
$post_name = explode( \',\', $modx->getOption( \'post_name\', $scriptProperties, $get ) );
$get = explode( \',\', $get );
$get = array_map( \'trim\', $get );
$post_name = array_map( \'trim\', $post_name );
$tpl = $modx->getOption( \'tpl\', $scriptProperties, \'\' );
$toPlaceholders = $modx->getOption( \'toPlaceholders\', $scriptProperties, false );
$pl_prefix = $modx->getOption( \'pl_prefix\', $scriptProperties, \'shkopt_\' );

if( empty( $get ) ) return \'\';

if( class_exists(\'Shopkeeper\') ){
    
    $config = Shopkeeper::getConfig( $get );
    
    //echo \'<pre>\' . print_r( $config, true ) . \'</pre>\';
    
    if( !empty( $config ) ){
        
        foreach( $get as $index => $opt_name ){
            
            if( !empty( $config[ $opt_name ] ) ){
                
                $output[ $opt_name ] = \'\';
                
                foreach( $config[ $opt_name ] as $key => $conf ){
                    
                    if( empty( $conf[\'value\'] ) ){
                        $conf[\'value\'] = $conf[\'label\'];
                    }
                    
                    $conf[\'selected\'] = ( isset( $post_name[$index] ) && isset( $_POST[ $post_name[$index] ] ) && $_POST[ $post_name[$index] ] == $conf[\'value\'] ? \'selected="selected"\' : \'\' );
                    
                    $output[ $opt_name ] .= $modx->getChunk( $tpl, $conf ) . PHP_EOL . "\\t";
                    
                }
                
            }
            
        }
        
    }
    
}

if( $toPlaceholders ){
    
    foreach( $output as $pl_name => $out ){
        $modx->setPlaceholder( $pl_prefix . $pl_name, $out );
    }
    
    $output = array();
    
}

return implode( \'\', $output );',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
      'keywords' => 
      array (
        'fields' => 
        array (
          'id' => 43,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'autotag',
          'name' => 'keywords',
          'caption' => 'Ключевые слова',
          'description' => '',
          'editor_type' => 0,
          'category' => 12,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'parent_resources' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'price' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'price',
          'caption' => 'Цена',
          'description' => '',
          'editor_type' => 0,
          'category' => 12,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'maxLength' => '',
            'minLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
  ),
);