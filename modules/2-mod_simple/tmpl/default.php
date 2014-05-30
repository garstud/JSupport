<?php
//blocage des accès directs sur ce script
defined('_JEXEC') or die('Accès interdit');
?>
<ul class="simple2<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) :  ?>
	<li>
		<a href="<?php echo $item->link; ?>">
			<?php echo $item->title; ?></a>
	</li>
<?php endforeach; ?>
</ul>
