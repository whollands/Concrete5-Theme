<?php

defined('C5_EXECUTE') or die("Access Denied.");

$view->inc('includes/header.php');
// HTML Header

// (c) Copyright Will Hollands 2015
// http://hollands123.com/

?>
<style>

/* -----------------------
Two Column Layout
------------------------*/

@media (min-width: 55em)
{
	.column-left{ float: left; width: 33%; }
	.column-right{ float: right; width: 33%; }
	.column-center{ display: inline-block; width: 33%; }
}

</style>

		<div class="content">
			<div class="container">
				<div class="main-no-sidebar"><?php $a = new Area('Main'); $a->display($c); ?></div>
				 <div class="column-left"><?php $a = new Area('Column 1'); $a->display($c); ?></div>
				 <div class="column-center"><?php $a = new Area('Column 2'); $a->display($c); ?></div>
   				 <div class="column-right"><?php $a = new Area('Column 3'); $a->display($c); ?></div>
			</div>
		</div>
<?php

$view->inc('includes/footer.php');
// HTML Header