<div class="groups form"><?php echo $form->create('Group');?>
<fieldset><legend><?php __('Edit Group');?></legend> <?php
echo $form->input('id');
echo $form->input('name');
echo $form->input('level');
echo $form->input('redirect');
echo $form->input('perm_type');
echo $form->input('Permission');
?></fieldset>
<?php echo $form->end('Submit');?></div>
<div class="actions">
<ul>
	<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Group.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Group.id'))); ?></li>
	<li><?php echo $html->link(__('List Groups', true), array('action'=>'index'));?></li>
	<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?>
	</li>
	<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?>
	</li>
	<li><?php echo $html->link(__('List Permissions', true), array('controller'=> 'permissions', 'action'=>'index')); ?>
	</li>
	<li><?php echo $html->link(__('New Permission', true), array('controller'=> 'permissions', 'action'=>'add')); ?>
	</li>
</ul>
</div>
