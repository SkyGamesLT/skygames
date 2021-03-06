<div class="uniqueids index">
<h2><?php __('Uniqueids');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('user_id');?></th>
	<th><?php echo $paginator->sort('game_id');?></th>
	<th><?php echo $paginator->sort('value');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($uniqueids as $uniqueid):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $uniqueid['Uniqueid']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($uniqueid['User']['name'], array('controller'=> 'users', 'action'=>'view', $uniqueid['User']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($uniqueid['Game']['name'], array('controller'=> 'games', 'action'=>'view', $uniqueid['Game']['id'])); ?>
		</td>
		<td>
			<?php echo $uniqueid['Uniqueid']['value']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $uniqueid['Uniqueid']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $uniqueid['Uniqueid']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $uniqueid['Uniqueid']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $uniqueid['Uniqueid']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Uniqueid', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Games', true), array('controller'=> 'games', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Game', true), array('controller'=> 'games', 'action'=>'add')); ?> </li>
	</ul>
</div>
