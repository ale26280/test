<!DOCTYPE html>
<html class="skrollr skrollr-desktop" modificado>
<head>
<meta http-equiv="x-ua-compatible" content="IE=edge" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Whirlpool Argentina</title>
<link rel="shortcut icon" href="img/favicon.ico">
<link href="css/fixed-positioning.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">




<link type="text/css" href="css/progress-polyfill.css" rel="stylesheet"/>

<script type="text/javascript" src="lib/jq.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="lib/cssPreload.js"></script>
<script type="text/javascript" src="lib/imageCache.js"></script>
</head>
<body onload="initialize()">
<div id="progressContainer">
	<progress id="loader" max="53" value="0"></progress>
</div>
<div id="logo" class="">
	<a id="" class="menuTop" href="#" data-menu-top="0">
	<img src="img/marca-whirlpool.jpg" height="50"/>
	</a>
</div>
<div id="menuTopBg" class="">
</div>
<div id="menuTop" class="">
	<a id="" class="menuTop" href="#" data-menu-top="0">
	<img src="img/btn01.png" width="40"/>
	<span data-0='opacity:1' data-1000="opacity:0" class="home">Home</span>
	</a>
	<a id="" class="menuTop" href="#" data-menu-top="7200">
	<img src="img/btn03.png" width="40"/>
	<span data-0='opacity:0' data-2000="opacity:0" data-7200="opacity:1" data-15200="opacity:1" data-16200="opacity:0" class="mCi">Central<br>
	 Inteligente</span>
	</a>
	<a id="" class="menuTop" href="#" data-menu-top="18200">
	<img src="img/btn02.png" width="40"/>
	<span data-0='opacity:0' data-16200="opacity:0" data-18200="opacity:1" data-19200="opacity:0" class="mId">Interacción<br>
	 Digital</span>
	</a>
	<a id="" class="menuTop" href="#" data-menu-top="20300">
	<img src="img/btn04.png" width="40"/>
	<span data-0='opacity:0' data-19200="opacity:0" data-20300="opacity:1" data-22500="opacity:1" data-23500="opacity:0" class="mSd">Smart <br>
	 Door</span>
	</a>
	<a id="" class="menuTop" href="#" data-menu-top="25100">
	<img src="img/btn05.png" width="40"/>
	<span data-0='opacity:0' data-23500="opacity:0" data-25100="opacity:1" data-28200="opacity:1" data-29200="opacity:0" class="mSd">Smart<br>
	 Bar</span>
	</a>
	<a id="" class="menuTop" href="#" data-menu-top="30900">
	<img src="img/btn06.png" width="40"/><br>
	<span data-0='opacity:0' data-28200="opacity:0" data-30900="opacity:1" data-32900="opacity:1" data-33900="opacity:0" class="mIm">Ice<br>
	 Maker</span>
	</a>
	<a id="" class="menuTop" href="#" data-menu-top="33900">
	<img src="img/btn07.png" width="40"/><br>
	<span data-0='opacity:0' data-32900="opacity:0" data-33900="opacity:1" data-34900="opacity:1" data-35000="opacity:0" class="mMb">Más<br>
	 Beneficios</span>
	</a>
	<a id="" class="menuTop" href="#" data-menu-top="35900" style="display:none">
	<img src="img/btn08.png" width="40"/>
	<span data-0='opacity:0' data-34900="opacity:0" data-35900="opacity:1" class="mDc">Dónde<br>
	 Comprar</span>
	</a>
</div>
<div id="heladeraBg" data-0="left:0%" data-2000="left:0%" data-6200="left:-100%;" class="skrollable skrollable-after full100">
</div>
<div id="textoScroll" data-0="left:50%" data-2000="left:50%;" data-6200="left:-50%;" class="skrollable skrollable-after">
	 Navegá el sitio haciendo scroll
</div>
<div id="bg2" data-0="left:100%" data-2000="left:100%;" data-6200="left:0%;" data-15200="left:0%" data-16200="left:-100%" class="skrollable skrollable-after full100">
</div>
<!--
<div class=" arribaHeladeraBg skrollable skrollable-after full100" data-0="left:0%" data-1800="left:0%" data-6000="left:-100%;" data-100="background-image:!url(img/arriba/1.png);" data-200="background-image:!url(img/arriba/2.png);" data-300="background-image:!url(img/arriba/3.png);" data-400="background-image:!url(img/arriba/4.png);" data-500="background-image:!url(img/arriba/5.png);" data-600="background-image:!url(img/arriba/6.png);" data-700="background-image:!url(img/arriba/7.png);" data-800="background-image:!url(img/arriba/8.png);" data-900="background-image:!url(img/arriba/9.png);" data-1000="background-image:!url(img/arriba/10.png);" data-1100="background-image:!url(img/arriba/11.png);" data-1200="background-image:!url(img/arriba/12.png);" data-1300="background-image:!url(img/arriba/13.png);" data-1400="background-image:!url(img/arriba/14.png);" data-1500="background-image:!url(img/arriba/15.png);" data-1600="background-image:!url(img/arriba/16.png);" data-1700="background-image:!url(img/arriba/17.png);" data-1800="background-image:!url(img/arriba/18.png);" data-1900="background-image:!url(img/arriba/19.png);" data-2000="background-image:!url(img/arriba/20.png);" data-2100="background-image:!url(img/arriba/21.png);">
</div>
-->

<div class="arribaHeladeraBg" 
data-0="left:20%;top:50%" data-2100="left:20%;top:50%" 
data-100="background-position:!-413px 0;"
data-200="background-position:!-826px 0;"
data-300="background-position:!-1239px 0;"
data-400="background-position:!-1652px 0;"
data-500="background-position:!-2065px 0;"
data-600="background-position:!-2478px 0;"
data-700="background-position:!-2891px 0;"
data-800="background-position:!-3304px 0;"
data-900="background-position:!-3717px 0;"
data-1000="background-position:!-4130px 0;"
data-1100="background-position:!-4543px 0;"
data-1200="background-position:!-4956px 0;"
data-1300="background-position:!-5369px 0;"
data-1400="background-position:!-5782px 0;"
data-1500="background-position:!-6195px 0;"
data-1600="background-position:!-6608px 0;"
data-1700="background-position:!-7021px 0;"
data-1800="background-position:!-7434px 0;"


>
</div>


<div id="central2" data-0="left:100%" data-2000="left:100%;" data-6200="left:0%;" data-7200="top:0%" data-8200="top:-100%" class="skrollable skrollable-after full100">

</div>
<div id="central1" data-5000="left:-100%" data-6200="left:0%" data-7200="left:0%;top:0%" data-8200="left:0%;top:-100%" class="skrollable skrollable-after full100100">
</div>
<div id="central4" data-7200="top:100%" data-8200="top:0%" data-9200="top:0%" data-10200="top:-100%" class="skrollable skrollable-after full100">
</div>
<div id="central3" data-7200="top:100%" data-8200="top:0%" data-9200="top:0%" data-10200="top:-100%" class="skrollable skrollable-after full100100">
</div>
<div id="central6" data-9200="top:100%" data-10200="top:0%" data-11200="top:0%" data-12200="top:-100%" class="skrollable skrollable-after full100" >
</div>
<div id="central5" data-9200="top:100%" data-10200="top:0%" data-11200="top:0%" data-12200="top:-100%" class="skrollable skrollable-after full100100">
</div>
<div id="central8" data-11200="top:100%" data-12200="top:0%" data-13200="top:0%" data-14200="top:-100%" class="skrollable skrollable-after full100">
</div>
<div id="central7" data-11200="top:100%" data-12200="top:0%" data-13200="top:0%" data-14200="top:-100%" class="skrollable skrollable-after full100100">
</div>
<div id="central10" data-13200="top:100%" data-14200="top:0%" data-15200="top:0%;left:0%" data-16200="top:0%;left:-100%" class="skrollable skrollable-after full100">
</div>
<div id="central9" data-13200="top:100%" data-14200="top:0%" data-15200="top:0%;left:0%" data-16200="top:0%;left:-100%" class="skrollable skrollable-after full100100">
</div>
<div id="bulletsCentral" class="skrollable skrollable-after" data-0="left:-100%" data-6200="left:-100%" data-6300="left:0%" data-15200="left:0%" data-16200="left:-100%">
	<a id="" class="bulletsCentral" href="#" data-menu-top="6300">
	<span data-0='opacity:0' data-6200="opacity:0" data-6300="opacity:1" data-8100="opacity:1" data-8200="opacity:0" class="bulletsCentralActivo"></span>
	</a>
	<a id="" class="bulletsCentral" href="#" data-menu-top="8200">
	<span data-0='opacity:0' data-8100="opacity:0" data-8200="opacity:1" data-10100="opacity:1" data-10200="opacity:0" class="bulletsCentralActivo"></span>
	</a>
	<a id="" class="bulletsCentral" href="#" data-menu-top="10200">
	<span data-0='opacity:0' data-10100="opacity:0" data-10200="opacity:1" data-12100="opacity:1" data-12200="opacity:0" class="bulletsCentralActivo"></span>
	</a>
	<a id="" class="bulletsCentral" href="#" data-menu-top="12200">
	<span data-0='opacity:0' data-12100="opacity:0" data-12200="opacity:1" data-14100="opacity:1" data-14200="opacity:0" class="bulletsCentralActivo"></span>
	</a>
	<a id="" class="bulletsCentral" href="#" data-menu-top="14200">
	<span data-0='opacity:0' data-14100="opacity:0" data-14200="opacity:1" data-15200="opacity:1" data-15300="opacity:0" class="bulletsCentralActivo"></span>
	</a>
</div>
<div id="bg3" data-0="left:100%" data-15200="left:100%" data-16200="left:0%" data-17200="left:0%" data-18200="left:0%" data-19200="left:-100%" class="skrollable skrollable-after full100">
</div>
<div id="interaccion1" data-15200="left:-100%" data-16200="left:0%" data-17200="left:0%" data-18200="left:0%" data-19200="left:-100%" class="skrollable skrollable-after full100100">
</div>
<div id="interaccion2" data-0="left:100%" data-15200="left:100%" data-16200="left:0%" data-17200="left:0%" data-18200="left:0%" data-19200="left:-100%" class="skrollable skrollable-after full100">
</div>
<div id="bg4" data-0="left:100%" data-18200="left:100%;" data-19200="left:0%" data-22500="left:0%" data-23500="left:-100%" class="skrollable skrollable-after full100">
</div>
<div class="smartHeladeraBg skrollable skrollable-after full100" data-0="left:100%" data-18200="left:100%" data-19200="left:0%;" data-20500="left:0%;opacity:1;" data-21500="opacity:0;" data-19200="background-image:!url(img/smart/0.png);" data-19300="background-image:!url(img/smart/1.png);" data-19400="background-image:!url(img/smart/2.png);" data-19500="background-image:!url(img/smart/3.png);" data-19600="background-image:!url(img/smart/4.png);" data-19700="background-image:!url(img/smart/5.png);" data-19800="background-image:!url(img/smart/6.png);" data-19900="background-image:!url(img/smart/7.png);" data-20000="background-image:!url(img/smart/8.png);" data-20100="background-image:!url(img/smart/9.png);" data-20200="background-image:!url(img/smart/10.png);" data-20300="background-image:!url(img/smart/11.png);" data-20400="background-image:!url(img/smart/12.png);" data-20500="background-image:!url(img/smart/13.png);">
</div>
<div id="smartDoor1" data-20500="left:-100%" data-21500="left:0%" data-22500="left:0%" data-23500="left:-100%" class="skrollable skrollable-after full100100">
</div>
<div id="bg5" data-0="left:100%" data-22500="left:100%" data-23500="left:0%" data-28200="left:0%" data-29200="left:-100%" class="skrollable skrollable-after full100">
</div>
<div class="abajoHeladeraBg skrollable skrollable-after full100" data-0="left:100%" data-22500="left:100%" data-23500="left:0%;" data-25200="left:0%;opacity:1" data-26200="left:0%;opacity:0" data-23500="background-image:!url(img/abajo/1.png);" data-23600="background-image:!url(img/abajo/2.png);" data-23700="background-image:!url(img/abajo/3.png);" data-23800="background-image:!url(img/abajo/4.png);" data-23900="background-image:!url(img/abajo/5.png);" data-24000="background-image:!url(img/abajo/6.png);" data-24100="background-image:!url(img/abajo/7.png);" data-24200="background-image:!url(img/abajo/8.png);" data-24300="background-image:!url(img/abajo/9.png);" data-24400="background-image:!url(img/abajo/10.png);" data-24500="background-image:!url(img/abajo/11.png);" data-24600="background-image:!url(img/abajo/12.png);" data-24700="background-image:!url(img/abajo/13.png);" data-24800="background-image:!url(img/abajo/14.png);" data-24900="background-image:!url(img/abajo/15.png);" data-25000="background-image:!url(img/abajo/16.png);" data-25100="background-image:!url(img/abajo/17.png);" data-25200="background-image:!url(img/abajo/18.png);">
</div>
<div id="smartBar1" data-25200="left:-100%" data-26200="left:0%" data-27200="left:0%" data-28200="left:0%" data-29200="left:-100%" class="skrollable skrollable-after full100100">
</div>
<div id="bg6" data-0="left:100%" data-28200="left:100%;" data-29200="left:0%" data-32900="left:0%" data-33900="left:-100%" class="skrollable skrollable-after full100">
</div>
<div class="abajoHeladeraBg skrollable skrollable-after full100" data-0="left:100%" data-28200="left:100%" data-29200="left:0%;" data-31900="left:0%;opacity:1" data-32900="left:0%;opacity:0" data-29200="background-image:!url(img/abajo/1.png);" data-29300="background-image:!url(img/abajo/2.png);" data-29400="background-image:!url(img/abajo/3.png);" data-29500="background-image:!url(img/abajo/4.png);" data-29600="background-image:!url(img/abajo/5.png);" data-29700="background-image:!url(img/abajo/6.png);" data-29800="background-image:!url(img/abajo/7.png);" data-29900="background-image:!url(img/abajo/8.png);" data-30000="background-image:!url(img/abajo/9.png);" data-30100="background-image:!url(img/abajo/10.png);" data-30200="background-image:!url(img/abajo/11.png);" data-30300="background-image:!url(img/abajo/12.png);" data-30400="background-image:!url(img/abajo/13.png);" data-30500="background-image:!url(img/abajo/14.png);" data-30600="background-image:!url(img/abajo/15.png);" data-30700="background-image:!url(img/abajo/16.png);" data-30800="background-image:!url(img/abajo/17.png);" data-30900="background-image:!url(img/abajo/18.png);">
</div>
<div id="iceMaker1" data-30900="left:-100%" data-31900="left:0%" data-32900="left:0%" data-33900="left:-100%" class="skrollable skrollable-after full100100">
</div>
<div id="bg7" data-0="left:100%" data-32900="left:100%" data-33900="left:0%" data-34900="left:0%" class="skrollable skrollable-after full100">
</div>
<!--
<div id="bg7" data-0="left:100%" data-32900="left:100%" data-33900="left:0%" data-34900="left:0%" data-35900="left:-100%" class="skrollable skrollable-after full100">
</div>

<div id="descarga" data-0="left:100%" data-32900="left:100%" data-33900="left:0%" data-34900="left:0%" data-35900="left:-100%" class="skrollable skrollable-after full100">
</div>
-->
<div id="descarga" data-0="left:100%" data-32900="left:100%" data-33900="left:0%" data-34900="left:0%"  class="skrollable skrollable-after full100">
</div>
<div id="bg8" data-0="left:100%" data-34900="left:100%;" data-35900="left:0%;" class="skrollable skrollable-after full100" style="display:none">
</div>
<div id="mapa" data-0="left:100%" data-34900="left:100%;" data-35900="left:0%;" class="skrollable skrollable-after full100" style="display:none">
	<div id="map" class="">
	</div>
</div>
<div id="bgFooter" class="">
	<a href="http://www.facebook.com/whirlpool.latinoamerica" target="_blank">
	<img src="img/btnFooter01.png" alt="btnFooter01" height="20"/>
	</a>
	<a href="https://twitter.com/Whirlpool_Arg" target="_blank">
	<img src="img/btnFooter02.png" alt="btnFooter02" height="20"/>
	</a>
	<a href="http://www.youtube.com/WhirlpoolLatam" target="_blank">
	<img src="img/btnFooter03.png" alt="btnFooter03" height="20"/>
	</a>
	<a href="http://www.whirlpool.com.ar/" target="_blank">
	<img src="img/btnFooter04.png" alt="btnFooter04" height="20"/>
	</a>
</div>
<div id="bullets" class="">
	<a id="" class="bullets" href="#" data-menu-top="0">
	<span class="bulletActivo" data-0='opacity:1' data-1000="opacity:0"></span>
	</a>
	<a id="" class="bullets" href="#" data-menu-top="7200">
	<span data-0='opacity:0' data-2000="opacity:0" data-7200="opacity:1" data-15200="opacity:1" data-16200="opacity:0" class="bulletActivo"></span>
	</a>
	<a id="" class="bullets" href="#" data-menu-top="18200">
	<span data-0='opacity:0' data-16200="opacity:0" data-18200="opacity:1" data-19200="opacity:0" class="bulletActivo"></span>
	</a>
	<a id="" class="bullets" href="#" data-menu-top="20300">
	<span data-0='opacity:0' data-19200="opacity:0" data-20300="opacity:1" data-22500="opacity:1" data-23500="opacity:0" class="bulletActivo"></span>
	</a>
	<a id="" class="bullets" href="#" data-menu-top="25100">
	<span data-0='opacity:0' data-23500="opacity:0" data-25100="opacity:1" data-28200="opacity:1" data-29200="opacity:0" class="bulletActivo"></span>
	</a>
	<a id="" class="bullets" href="#" data-menu-top="30900">
	<span data-0='opacity:0' data-28200="opacity:0" data-30900="opacity:1" data-32900="opacity:1" data-33900="opacity:0" class="bulletActivo"></span>
	</a>
	<a id="" class="bullets" href="#" data-menu-top="33900">
	<span data-0='opacity:0' data-32900="opacity:0" data-33900="opacity:1" data-34900="opacity:1" data-35000="opacity:0" class="bulletActivo"></span>
	</a>
	<a id="" class="bullets" href="#" data-menu-top="35900" style="display:none">
	<span data-0='opacity:0' data-34900="opacity:0" data-35900="opacity:1" class="bulletActivo"></span>
	</a>
</div>

<div id="" class="simuladorMuestra" data-0='opacity:0' data-7150="opacity:0" data-7200="opacity:1" data-15200="opacity:1" data-15300="opacity:0"></div>

<div id="flechaFooter" class="">
	<img src="img/flechaFooter.png" alt="flechaFooter" height="20"/>
</div>


<div id="simuladorBgClose" class="simulador">X</div>
<div id="simuladorBg" class="simulador">
	<div id="simuladorMarco" class="simulador">
		<!-- <iframe src="../../simulador" frameborder="0" width="800" height="480"></iframe> -->
	</div>
	
</div>



<script type="text/javascript" src="lib/progress-polyfill.min.js"></script>
<script type="text/javascript" src="js/skrollr.min.js"></script>
<script type="text/javascript" src="js/skrollr.menu.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="lib/skrollr.ie.min.js"></script>
	<![endif]-->

</body>
</html>
