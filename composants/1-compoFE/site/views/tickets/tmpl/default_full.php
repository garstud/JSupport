<?php
defined('_JEXEC') or die('Restricted access');
?>

<h1>Les Tickets du service Support</h1>

<form action="<?php echo JUri::getInstance()->toString(); ?>" method="post" name="adminForm" id="adminForm">

	<table class="category">
		<thead>
			<tr>
			<th class="title">Titre</th>
			<th class="title">Priorité</th>
			<th class="title">Publié</th>
			<th class="title">Thème</th>
			<th class="title">Etat</th>
			<th class="title">Date</th>
		</tr>
		</thead>

		<tbody>
			<?php foreach($this->tickets as $i => $item) : ?>
			<tr>
				<td><?php echo $item->title ?></td>
				<td><?php echo $item->priority ?></td>
				<td><?php echo $item->published ?></td>
				<td><?php echo $item->theme ?></td>
				<td><?php echo $item->state ?></td>
				<td><?php echo $item->created ?></td>
			</tr>			
			<?php endforeach; ?>
		</tbody>
	</table>

</form>

<?php echo $this->pagination->getListFooter(); ?>
