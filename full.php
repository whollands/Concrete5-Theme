<?php

defined('C5_EXECUTE') or die("Access Denied.");

$view->inc('includes/header.php');
// HTML Header

// (c) Copyright Will Hollands 2015
// http://hollands123.com/

?>
		<div class="content">
			<div class="container">
				<div class="main-no-sidebar">
					<?php $a = new Area('Main'); $a->display($c); ?>
				</div>
			</div>
		</div>
<?php

$view->inc('includes/footer.php');
// HTML Header