<div class="tweets index">

<h3><?php __('onatter');?></h3>
<br/>

 <?php
	// text tweet
echo $form->create('Tweet', array('action' => 'addd', 'type' => 'post'));
echo $form->label('What Am I Doing?? ~What A Lonly Boy!!~');
echo $form->text('Tweet.content');

	// picture tweet
echo $form->create('Tweet', array('action' => 'addd', 'type' => 'file'));
echo $form->file('picture');//('Tweet.image');

/*
// select test
$list = array("10","20","30","40","50");
echo $form->create('Tweet', array('action'=>'addd', 'type'=>'post'));
echo $form->input('sense', array('type'=>'select', 'options'=>$list));
*/
echo $form->end(array('label'=>'Submit','name'=>'submitButton', 'div'=>array('class' => 'submitDiv')));

?>

<div class="actions">
	<ul>
		<h1><li><?php echo $html->link(__('New Tweet', true), array('action'=>'add')); ?></li></h1>
	</ul>
</div>
<br/>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('content');?></th>
	<th><?php echo $paginator->sort('image');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($tweets as $tweet):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr <?php echo $class;?>>
		<td>
			<?php echo $tweet['Tweet']['id']; ?>
		</td>
		<td>
			<?php echo $tweet['Tweet']['content']; ?>
		</td>
		<td>
			<?php
		if(isset($tweet['Tweet']['image']))
			 echo $html->link(__('Picture', true), array('action'=>'contents', $tweet['Tweet']['image']));
				//	echo $html->link($tweet['Tweet']['picture']);
			 //	echo $tweet['Tweet']['picture'];
   ?>
		</td>
		<td>
			<?php echo $tweet['Tweet']['created']; ?>
		</td>
		<td>
	 	<?php echo $tweet['Tweet']['modified']; ?>		</td>
		<td class="actions">
			<?php echo $html->link(__('Twit', true), array('action'=>'twit', $tweet['Tweet']['id'])); ?>
			<?php echo $html->link(__('View', true), array('action'=>'view', $tweet['Tweet']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $tweet['Tweet']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $tweet['Tweet']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tweet['Tweet']['id'])); ?>
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
