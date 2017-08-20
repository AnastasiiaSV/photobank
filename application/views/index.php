<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="author" content="Anastasiia Samotiazhko">
	<meta name="copyright" content="Created by A.V.Samotiazhko in 2017">
	
	<meta charset="windows-1251">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	
	<meta name="description" content="The main page of website">
	<meta name="keywords" content="photo, bank, picture, video, graphic, фото, фотография, видео, графика">
	
	<meta name="publisher-email" content="anastsamot@gmail.com">
	
	<title>PhotoBank</title>
	<link rel="icon" href="images/icons/site_icon.png">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/header_footer.css">
	<link rel="stylesheet" href="css/items.css">

	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Подключаем jQuery -->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"  type="text/javascript"></script>
	<script src="js/items.js"></script>
	<script src="js/login.js"></script>

    <script type="text/javascript">
        function setLang(lang){
            document.cookie = "language="+lang;
			window.location.reload();
        }
    </script>

</head>

<body>
	<!--header-->
	<header>
		<a href="photobank" class="logo">
			<img src="images/logo6.png" alt="Photo bank">
		</a>
		
		<nav class="main_menu">
			<table>
				<tr>
					<td class="main_menu_element_9"></td>
					<td class="main_menu_element_8"></td>
					<td class="main_menu_element_7"></td>
					<td class="main_menu_element_6"><a href="serch"><img src="images/icons/search_icon.png" alt=<?php print search; ?>></a></td>
					<td class="main_menu_element_5"><a href="photo"><?php print photo; ?></a></td>
					<td class="main_menu_element_4"><a href="video"><?php print video; ?></a></td>
					<td class="main_menu_element_3"><a href="vectors"><?php print vectors; ?></a></td>
					<td class="main_menu_element_2"></td>
					<td class="main_menu_element_1"><a href="index"></a></td>
					<td class="main_menu_element_2"></td>
					<td class="main_menu_element_3"></td>
					<td class="main_menu_element_4"><a href="contacts"><img src="images/icons/contacts_icon.png" alt=<?php print contacts; ?>></a></td>
					<td class="main_menu_element_5"><a href="basket"><img src="images/icons/basket_icon.png" alt=<?php print basket; ?>></a></td>
					<td class="main_menu_element_6"><a href="login"><img src="images/icons/login_icon.png" alt=<?php print login; ?>></a></td>
					<td class="main_menu_element_7"></td>
					<td class="main_menu_element_8"></td>
					<td class="main_menu_element_9"></td>
				</tr>
			</table>
		</nav><!--class="main-menu"-->
	</header><!--header-->
	
	<div class="main_page">
        <?php
            include ($contentPage);
        ?>
	</div>
	
	
	<hr class="footer_hr"/>
	<!--footer-->
	<footer>
		<div class="footer_column">
			<ul>
				<li></li>
			</ul>
		</div>
		
		<div class="footer_column">
		<nav>
			<ul>
				<li><a href="photo"><?php print photo; ?></a></li>
				<li><a href="video"><?php print video; ?></a></li>
				<li><a href="vectors"><?php print vectors; ?></a></li>
			</ul>
		</nav>
		</div>
		
		<div class="footer_column">
		<nav>
			<ul>
				<li><a href="contacts" ><?php print contacts; ?></a></li>
				<li><a href="contacts"><?php print feedback ?></a></li>
				<li><a href="contacts">FAQ</a></li>
			</ul>
		</nav>
		</div>
		
		<div class="footer_column">
		<nav>
			<ul>

                <li>
                    <img class="footer_social_icon" src="images/icons/lang.png" alt="<?php print language; ?>" title="<?php print language; ?>">  </a>
                    <a href="#" onclick="setLang('eng')">ENG</a>
                    |
                    <a href="#" onclick="setLang('ru')">RU</a>
                </li>

                <br>

				<li><a href="https://www.facebook.com" target="_blank">
						<img class="footer_social_icon" src="images/icons/facebook.png"> </a>
						&nbsp;
					<a href="https://vk.com" target="_blank">
						<img class="footer_social_icon" src="images/icons/vk.png"> </a>
						&nbsp;
					<a href="https://www.instagram.com" target="_blank">
					<img class="footer_social_icon" src="images/icons/insta.png"> </a>
				</li>

			</ul>
		</nav>
		</div>
	
		<div class="footer_column">
			<ul>
			<li><img class="footer_logo" src="images/icons/site_icon.png" alt="logo"> 
			<br> &copy; <small> Anastasiia Samotiazhko 2017 </small></li> 
			</ul>
		</div>
		
	</footer><!--footer-->

</body>

</html>
