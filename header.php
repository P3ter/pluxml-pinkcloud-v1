<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
	<meta charset="<?php $plxShow->charset('min'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
	<title><?php $plxShow->pageTitle(); ?></title>
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>
	<link rel="apple-touch-icon" sizes="57x57" href="<?php $plxShow->template(); ?>/img/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php $plxShow->template(); ?>/img/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php $plxShow->template(); ?>/img/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php $plxShow->template(); ?>/img/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php $plxShow->template(); ?>/img/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php $plxShow->template(); ?>/img/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php $plxShow->template(); ?>/img/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php $plxShow->template(); ?>/img/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php $plxShow->template(); ?>/img/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php $plxShow->template(); ?>/img/favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php $plxShow->template(); ?>/img/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php $plxShow->template(); ?>/img/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php $plxShow->template(); ?>/img/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php $plxShow->template(); ?>/img/favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php $plxShow->template(); ?>/img/favicons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/plucss.css" media="screen"/>
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/theme.css" media="screen"/>
    <?php $plxShow->templateCss() ?>
	<?php $plxShow->pluginsCss() ?>
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
</head>

<body id="top" class="page mode-<?php $plxShow->mode(true) ?>">

	<nav class="nav">
		<div class="container">
			<div class="responsive-menu">
				<label for="menu"></label>
				<input type="checkbox" id="menu">
				<ul class="menu">
					<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_class #static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
					<?php $plxShow->pageBlog('<li class="#page_class #page_status" id="#page_id"><a href="#page_url" title="#page_name">#page_name</a></li>'); ?>
				</ul>
			</div>
		</div>
	</nav>

	<header class="header">
		<div class="container">
		    <a class="banniere float-center" href="<?php $plxShow->racine() ?>">
			    <h1 class="no-margin heading-small hide"><?php $plxShow->mainTitle(); ?></h1>
			    <h2 class="h5 no-margin hide"><?php $plxShow->subTitle(); ?></h2>
        </a>
		</div>
	</header>
