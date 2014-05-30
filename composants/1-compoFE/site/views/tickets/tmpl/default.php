<?php
defined('_JEXEC') or die('Restricted access');

JHtml::_('behavior.framework'); // javascript Joomla object for grid.sort !
?>

<h1>Les Tickets du service Support</h1>

<?php echo $this->loadTemplate('items'); ?>

<div class="pagination">
	<p class="counter">
		<?php echo $this->pagination->getPagesCounter(); ?> 
	</p>

	<?php echo $this->pagination->getPagesLinks(); ?>

	<p class="counter">
		<?php echo $this->pagination->getResultsCounter(); ?>
	</p>
</div>
