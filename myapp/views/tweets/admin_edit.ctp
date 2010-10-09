<div class="tweets form">
<?php echo $form->create('Tweet');?>
	<fieldset>
 		<legend><?php __('Edit Tweet');?></legend>
	<?php
		echo $form->input('Id');
		echo $form->input('Content');
		echo $form->input('Created');
		echo $form->input('Modified');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Tweet.Id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Tweet.Id'))); ?></li>
		<li><?php echo $html->link(__('List Tweets', true), array('action'=>'index'));?></li>
	</ul>
</div>
