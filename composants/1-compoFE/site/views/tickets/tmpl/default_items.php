<?php
defined('_JEXEC') or die;

$uriCompoDetail = JURI::base(true)."/index.php?option=com_support&view=ticket&id=";

// recupere les infos de pagination et d'ordre
//$listLimit	= $this->escape($this->state->get('list.limit'));
$listOrder	= $this->escape($this->state->get('list.ordering'));
$listDirn	= $this->escape($this->state->get('list.direction'));
?>

<form action="<?php echo JUri::getInstance()->toString(); ?>" method="post" name="adminForm" id="adminForm">

	<!-- affichage du filtre de nbr d'enreg par page -->
	<fieldset class="filters">
		<div class="display-limit">
			<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>
			<?php echo $this->pagination->getLimitBox(); ?>
		</div>
		<input type="hidden" name="filter_order" value="<?php echo $listOrder ?>" />
		<input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn ?>" />
		<input type="hidden" name="task" value="" />
	</fieldset>

	<!-- style TABLE : class=category et style TH : class=title -->
	<table class="category">
		<thead>
			<tr>
			<th class="title">Titre</th>
			<th class="title">
				<?php echo JHtml::_('grid.sort', 'Priorité', 'priority', $listDirn, $listOrder) ?>
			</th>
			<th class="title">Publié</th>
			<th class="title">Thème</th>
			<th class="title">Etat</th>
			<th class="title">
				<?php echo JHtml::_('grid.sort', 'Date', 'created', $listDirn, $listOrder) ?>
			</th>
		</tr>
		</thead>

		<tbody>
			<?php foreach($this->tickets as $i => $item) : ?>
				<tr>
					<td>
						<a href="<?php echo $uriCompoDetail.$item->id ?>"><?php echo $item->title ?></a>
					</td>
					<td><?php echo $item->priority ?></td>
					<td><?php echo JHtml::_('jgrid.published', $item->published, $i, 'tick.', true); ?></td>
					<td><?php echo $item->theme ?></td>
					<td><?php echo $item->state ?></td>
					<td><?php echo JHtml::_('date', $item->created, 'j F Y'); ?></td>
				</tr>			
			<?php endforeach; ?>
		</tbody>
	</table>

</form>
