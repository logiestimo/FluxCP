<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php
$adminMenuItems = $this->getAdminMenuItems();
?>

<?php if ($session->isLoggedIn()): ?>
	<?php if (!empty($adminMenuItems) && Flux::config('AdminMenuNewStyle')): ?>
	<?php $mItems = array(); foreach ($adminMenuItems as $menuItem) $mItems[] = sprintf('<a href="%s">%s</a>', $menuItem['url'], $menuItem['name']) ?>
					<strong>Admin</strong>: <?php echo implode(' • ', $mItems) ?>
		
	<?php endif ?>
<?php endif ?>