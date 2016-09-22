<?php

defined('C5_EXECUTE') or die("Access Denied.");

// (c) Copyright Will Hollands 2015
// http://hollands123.com/

?><!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage()?>">
	<head>
		<meta charset="UTF-8">
		<?php Loader::element('header_required'); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<link rel="stylesheet" media="all" href="<?php  echo $this->getStylesheet("main.less"); ?>" />
<!--

Theme (C) Will Hollands 2015, http://hollands123.com/

Available on http://github.com/whollands under GNU Public License.

-->
<?php

// Microsoft IE 8 and below hate the new @media css for mobile
// Change responsive.css to IE-8.css if browser is IE 8

if(preg_match('/(?i)msie [1-8]/',$_SERVER['HTTP_USER_AGENT']))
{
?>


<link rel="stylesheet" media="all" href="<?php  echo $this->getThemePath(); ?>/css/IE-8.css" />

	 <!-- Theme (C) Will Hollands 2015, http://hollands123.com/ -->
	</head>
<body>
	<div class="<?php echo $c->getPageWrapperClass()?>">
		<div class="header">
			<div class="container">
					<?php $a = new GlobalArea('Logo Area'); $a->display($c); ?>
			</div>
		</div>
		<div class="nav-bar">
			<div class="container">
				<div class="navigation">
					<?php $a = new GlobalArea('Navbar'); $a->display($c); ?>
				</div>
			</div>
		</div>


<?php
}
else
{
?>

<link rel="stylesheet" media="all" href="<?php  echo $this->getThemePath(); ?>/css/responsive.css" />

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Latest jQuery version -->
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		
		<script>
			$(document).ready(function(){
    			$("#NavShowHide").click(function(){
        			$("#MainNav").toggle("medium");
        			// Speed - fast, medium or slow
    			});
    			$(window).resize(function(){
   					if($(window).width() / parseFloat($("body").css("font-size")) >= 55){
      					$("#MainNav").show("fast");
   					}
				});
			});
		</script>
		<!-- Mobile show/hide script -->
	 	
	</head>
<body>
	<div class="<?php echo $c->getPageWrapperClass()?>">
		<div class="header">
			<div class="container">
					<?php $a = new GlobalArea('Logo Area'); $a->display($c); ?>
			</div>
		</div>
		
		<div class="nav-bar">
			<div class="container">
				<ul class="nav navigation showhide" id="NavShowHide">
					<li><a href="#" style="color:#fff;"><i class="fa fa-bars nav-icon"></i>&nbsp;&nbsp;Navigation</a></li>
				</ul>
				<div class="navigation mainnav" id="MainNav">
					<?php $a = new GlobalArea('Navbar'); $a->display($c); ?>
				</div>
			</div>
		</div>
		
		<noscript>
			<div class="container">
				<div style="color:red;padding:20px;">
					<h2>Warning!</h2>
					<p>This site requires JavaScript enabled in order for it to function correctly.</p>
					<p>Please enable it in your browser's settings</p>
				</div>
			</div>
		</noscript>


<?php
}?><article>