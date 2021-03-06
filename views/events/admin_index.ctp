<div class="events index">
<h2><?php __('Events');?></h2>
<p><?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $paginator->sort('id');?></th>
		<th><?php echo $paginator->sort('name');?></th>
		<th><?php echo $paginator->sort('game_id');?></th>
		<th><?php echo $paginator->sort('eventtype_id');?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($events as $event):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
	?>
	<tr <?php echo $class;?>>
		<td><?php echo $event['Event']['id']; ?></td>
		<td><?php echo $event['Event']['name']; ?></td>
		<td><?php echo $html->link($event['Game']['name'], array('controller'=> 'games', 'action'=>'view', $event['Game']['id'])); ?>
		</td>
		<td><?php echo $html->link($event['Eventtype']['name'], array('controller'=> 'eventtypes', 'action'=>'view', $event['Eventtype']['id'])); ?>
		</td>
		<td class="actions"><?php echo $html->link(__('View', true), array('action'=>'view', $event['Event']['id']), 123); ?>
		<?php echo $html->link(__('Edit', true), array('action'=>'edit', $event['Event']['id']), 222); ?>
		<?php echo $html->link(__('Delete', true), array('action'=>'delete', $event['Event']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $event['Event']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
</div>
<div class="paging"><?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
| <?php echo $paginator->numbers();?> <?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
<ul>
	<li><?php echo $html->link(__('New Event', true), array('action'=>'add')); ?></li>
	<li><?php echo $html->link(__('List Games', true), array('controller'=> 'games', 'action'=>'index')); ?>
	</li>
	<li><?php echo $html->link(__('New Game', true), array('controller'=> 'games', 'action'=>'add')); ?>
	</li>
	<li><?php echo $html->link(__('List Eventtypes', true), array('controller'=> 'eventtypes', 'action'=>'index')); ?>
	</li>
	<li><?php echo $html->link(__('New Eventtype', true), array('controller'=> 'eventtypes', 'action'=>'add')); ?>
	</li>
	<li><?php echo $html->link(__('List Matches', true), array('controller'=> 'matches', 'action'=>'index')); ?>
	</li>
	<li><?php echo $html->link(__('New Match', true), array('controller'=> 'matches', 'action'=>'add')); ?>
	</li>
	<li><?php echo $html->link(__('List Teams', true), array('controller'=> 'teams', 'action'=>'index')); ?>
	</li>
	<li><?php echo $html->link(__('New Team', true), array('controller'=> 'teams', 'action'=>'add')); ?>
	</li>
</ul>
</div>
