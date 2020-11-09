<?php if (!defined('FLUX_ROOT')) exit; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php if (isset($metaRefresh)): ?>
		<meta http-equiv="refresh" content="<?php echo $metaRefresh['seconds'] ?>; URL=<?php echo $metaRefresh['location'] ?>" />
		<?php endif ?>
		<title><?php echo Flux::config('SiteTitle'); if (isset($title)) echo ": $title" ?> - Play Onlne for FREE</title>
		<link rel="stylesheet" href="<?php echo $this->themePath('css/flux.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<link href="<?php echo $this->themePath('css/flux/unitip.css') ?>" rel="stylesheet" type="text/css" media="screen" title="" charset="utf-8" />
        <?php if (Flux::config('EnableReCaptcha')): ?>
		<link href="<?php echo $this->themePath('css/flux/recaptcha.css') ?>" rel="stylesheet" type="text/css" media="screen" title="" charset="utf-8" />
		<?php endif ?>
		<!--[if IE]>
		<link rel="stylesheet" href="<?php echo $this->themePath('css/flux/ie.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<![endif]-->	
		<link rel="stylesheet" href="<?php echo $this->themePath('css/master.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<link rel="stylesheet" href="<?php echo $this->themePath('css/content.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<link rel="stylesheet" href="<?php echo $this->themePath('css/content2.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<link rel="stylesheet" href="<?php echo $this->themePath('css/custom.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<script type="text/javascript" src="<?php echo $this->themePath('js/jquery-1.8.3.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo $this->themePath('js/flux.datefields.js') ?>"></script>
        <script type="text/javascript" src="<?php echo $this->themePath('js/flux.unitip.js') ?>"></script>
        <?php if (Flux::config('EnableReCaptcha')): ?>
			<script src='https://www.google.com/recaptcha/api.js'></script>
		<?php endif ?>
	</head>
	<body>


	<div id="TopBG">
		<div id="Wrap">
			<div id="Navigation">
				<div class="top"></div>
				<div class="menu">
					<div><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage(&#39;btn_register&#39;,&#39;&#39;,&#39;<?php echo $this->themePath('img/btn_register_over.png') ?>&#39;,0)" onfocus="this.blur();"><img src="<?php echo $this->themePath('img/btn_register_out.png') ?>" name="btn_register" width="166" height="105" border="0" id="btn_register"></a></div>
					<div class="head"><a href="./" onfocus="this.blur();"><img src="<?php echo $this->themePath('img/navi_pannel_home.png') ?>" width="166" height="45" border="0"></a></div>
					<div class="head"><a href="#" onfocus="this.blur();"><img src="<?php echo $this->themePath('img/navi_pannel_news.png') ?>" width="166" height="42" border="0"></a></div>
					<div class="sub"><a class="sub" href="<?php echo $this->url('news', 'index') ?>" onfocus="this.blur();">News</a></div>
					<div class="sub"><a class="sub" href="<?php echo $this->url('news', 'index') ?>" onfocus="this.blur();">Updates</a></div>
					<div class="sub"><a class="sub" href="<?php echo $this->url('news', 'index') ?>" onfocus="this.blur();">Events</a></div>
					<div class="head"><a href="#" onfocus="this.blur();"><img src="<?php echo $this->themePath('img/navi_pannel_gameguide.png') ?>" width="166" height="49" border="0"></a></div>
					<div class="sub"><a class="sub" href="<?php echo $this->url('pages', 'content', array('path' => 'storyline')) ?>" onfocus="this.blur();">Storyline</a></div>					
					<div class="sub"><a class="sub" href="<?php echo $this->url('pages', 'content', array('path' => 'howtoplay')) ?>" onfocus="this.blur();">How to Play</a></div>
					<div class="sub"><a class="sub" href="<?php echo $this->url('server', 'info') ?>" onfocus="this.blur();">Features</a></div>
					<div class="sub"><a class="sub" href="<?php echo $this->url('pages', 'content', array('path' => 'classesandskills')) ?>" onfocus="this.blur();">Classes &amp; Skills</a></div>
					<div class="sub"><a class="subnew" href="<?php echo $this->url('main', 'index') ?>" onfocus="this.blur();"><img src="<?php echo $this->themePath('img/bullet_new.gif') ?>" width="12" height="12">VIP Package</a></div>
					<div class="sub"><a class="sub" href="<?php echo $this->url('pages', 'content', array('path' => 'valueaddedservice')) ?>" onfocus="this.blur();">Value Added Service</a></div>
					<div class="head"><a href="#" onfocus="this.blur();"><img src="<?php echo $this->themePath('img/navi_pannel_itemmall.png') ?>" width="166" height="47" border="0"></a></div>
					<div class="sub"><a class="sub" href="<?php echo $this->url('pages', 'content', array('path' => 'shopguide')) ?>" onfocus="this.blur();">Kafra Shop Guide</a></div>
					<div class="sub"><a class="sub" href="<?php echo $this->url('purchase', 'index') ?>" onfocus="this.blur();">Item List</a></div>
					<div class="sub"><a class="sub" href="<?php echo $this->url('donate', 'index') ?>" onfocus="this.blur();">Purchase Points</a></div>
					<div class="head"><a href="#" onfocus="this.blur();"><img src="<?php echo $this->themePath('img/navi_pannel_community.png') ?>" width="166" height="45" border="0"></a></div>
					<div class="sub"><a class="sub" href="./forums" onfocus="this.blur();">Forums</a></div>
					<div class="sub"><a class="sub" href="<?php echo $this->url('pages', 'content', array('path' => 'fansites')) ?>" onfocus="this.blur();">Fansites</a></div>
					<div class="sub"><a class="sub" href="<?php echo $this->url('ranking', 'character') ?>" onfocus="this.blur();">Hall of Honor</a></div>
					<div class="head"><a href="#" onfocus="this.blur();"><img src="<?php echo $this->themePath('img/navi_pannel_download.png') ?>" width="166" height="48" border="0"></a></div>
					<div class="sub"><a class="sub" href="<?php echo $this->url('pages', 'content', array('path' => 'downloads')) ?>" onfocus="this.blur();">Game Download</a></div>
					<div class="sub"><a class="sub" href="<?php echo $this->url('pages', 'content', array('path' => 'wallpapers')) ?>" onfocus="this.blur();">Wallpapers</a></div>
					<div class="sub"><a class="sub" href="<?php echo $this->url('pages', 'content', array('path' => 'multimedia')) ?>" onfocus="this.blur();">Multimedia</a></div>
				    <div class="head"><a href="<?php echo $this->url('servicedesk', 'index') ?>" onfocus="this.blur();"><img src="<?php echo $this->themePath('img/navi_pannel_support.png') ?>" width="166" height="45" border="0"></a></div>
                    <div class="sub"><a class="sub" href="<?php echo $this->url('pages', 'content', array('path' => 'knowledgebase')) ?>" onfocus="this.blur();">Knowledge Base</a></div>
				</div>
				<div class="bottom"></div>
			</div>
			<div id="CenterContent">
				<div id="ContentTopBGF2P">
					<div class="logo"><a href="./" onfocus="this.blur();"></a></div>
					<div class="btnHSG">
						<a href="<?php echo $this->url('main', 'index') ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage(&#39;btnHSG&#39;,&#39;&#39;,&#39;<?php echo $this->themePath('img/btn_help_out.png') ?>&#39;,0)" onfocus="this.blur();"><img src="<?php echo $this->themePath('img/btn_help_over.png') ?>" name="btnHSG" width="382" height="114" border="0" id="btnHSG"></a>
					</div>
				</div>
				<div id="ContentMiddleBG">
					<div id="ContentField">
						

	<div id="Index">

				<div class="adminpagelinks">
					<?php $adminMenuItems = $this->getAdminMenuItems(); ?>

					<?php if ($session->isLoggedIn()): ?>
						<?php if (!empty($adminMenuItems) && Flux::config('AdminMenuNewStyle')): ?>
							<?php $mItems = array(); foreach ($adminMenuItems as $menuItem) $mItems[] = sprintf('<a href="%s">%s</a>', $menuItem['url'], htmlspecialchars(Flux::message($menuItem['name']))) ?>
							<strong>Admin</strong>: <?php echo implode(' • ', $mItems) ?>
						<?php endif ?>
					<?php endif ?>
				</div><!-- //adminpagelinks -->



				<div class="mainpagelinks">

					<!-- Messages -->
					<?php if ($message=$session->getMessage()): ?>
						<p class="message"><?php echo htmlspecialchars($message) ?></p>
					<?php endif ?>
					
					<!-- Sub menu -->
					<?php include 'main/submenu.php' ?>
					
					<!-- Page menu -->
					<?php include 'main/pagemenu.php' ?>
					
					<!-- Credit balance -->
					<?php if (in_array($params->get('module'), array('credits', 'purchase'))) include 'main/balance.php' ?>
				</div><!-- //mainpagelinks -->

                <?php if ($params->get('module') != 'main'):?>
                    <div class="mainpagecontent">
                <?php endif ?>
