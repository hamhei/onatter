<div class="tweets form">
<?php echo $form->create('Tweet');?>
	<fieldset>
 		<legend><?php __('Add Tweet');?></legend>
	<?php
		echo $form->input('Content');
		echo $form->input('Created');
		echo $form->input('Modified');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Tweets', true), array('action'=>'index'));?></li>
	</ul>
</div>
