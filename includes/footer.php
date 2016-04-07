<?php

defined('C5_EXECUTE') or die("Access Denied.");

// (c) Copyright Will Hollands 2015
// http://hollands123.com/

?><div class="footer">
			<div class="container">
				<?php $a = new GlobalArea('Footer1'); $a->display($c); ?>
	
		<?
         $u = new User();
         if ($u->isRegistered()) { ?>
            <p><? 
            if (Config::get("ENABLE_USER_PROFILES")) {
               $userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>';
            } else {
               $userName = $u->getUserName();
            }
            ?>
            <?=t('Currently logged in as <b>%s</b>.', $userName)?> <a href="<?php echo URL::to('/login', 'logout', Loader::helper('validation/token')->generate('logout'))?>"><?php echo t('Sign Out.')?></a>
            
         <? } else { ?>
            <a href="<?=$this->url('/login', 'forward', $c->getCollectionID()); ?>">Sign in</a>
         <? } ?></p>
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