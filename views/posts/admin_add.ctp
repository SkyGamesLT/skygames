<div class="posts form">
<?php echo $form->create('Post');?>
	<fieldset>
 		<legend><?php __('Add Post');?></legend>
	<?php
		echo $form->input('title');
		echo $form->input('body');
		echo $form->input('user_id');
		echo $form->input('thread_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Posts', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Threads', true), array('controller'=> 'threads', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Thread', true), array('controller'=> 'threads', 'action'=>'add')); ?> </li>
	</ul>
</div>
