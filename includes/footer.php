<?php

defined('C5_EXECUTE') or die("Access Denied.");

// (c) Copyright Will Hollands 2015
// http://hollands123.com/

?>
</article>
<div class="footer">
			<div class="container">
				<?php $a = new GlobalArea('Footer1'); $a->display($c); ?>
	
		    <p><?php echo Core::make('helper/navigation')->getLogInOutLink(); ?></p>
			</div>
		</div>
	</div>

<?php

$u = new User();
if (!$u->isRegistered()) 
{ 
	include('TRACKING_CODE.php');
}

Loader::element('footer_required', array('pageTitle' => $pageTitle));
?>
	</body>
</html>