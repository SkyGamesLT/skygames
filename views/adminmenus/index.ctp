<div class="adminmenus index">
<h2><?php __('Adminmenus');?></h2>
<p><?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $paginator->sort('id');?></th>
		<th><?php echo $paginator->sort('title');?></th>
		<th><?php echo $paginator->sort('link');?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($adminmenus as $adminmenu):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
	?>
	<tr <?php echo $class;?>>
		<td><?php echo $adminmenu['Adminmenu']['id']; ?></td>
		<td><?php echo $adminmenu['Adminmenu']['title']; ?></td>
		<td><?php echo $adminmenu['Adminmenu']['link']; ?></td>
		<td class="actions"><?php echo $html->link(__('View', true), array('action'=>'view', $adminmenu['Adminmenu']['id'])); ?>
		<?php echo $html->link(__('Edit', true), array('action'=>'edit', $adminmenu['Adminmenu']['id'])); ?>
		<?php echo $html->link(__('Delete', true), array('action'=>'delete', $adminmenu['Adminmenu']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $adminmenu['Adminmenu']['id'])); ?>
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
	<li><?php echo $html->link(__('New Adminmenu', true), array('action'=>'add')); ?></li>
</ul>
</div>