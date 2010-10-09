<div class="tweets index">
<h2><?php __('Tweets');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('Id');?></th>
	<th><?php echo $paginator->sort('Content');?></th>
	<th><?php echo $paginator->sort('Created');?></th>
	<th><?php echo $paginator->sort('Modified');?></th>
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
	<tr<?php echo $class;?>>
		<td>
			<?php echo $tweet['Tweet']['Id']; ?>
		</td>
		<td>
			<?php echo $tweet['Tweet']['Content']; ?>
		</td>
		<td>
			<?php echo $tweet['Tweet']['Created']; ?>
		</td>
		<td>
			<?php echo $tweet['Tweet']['Modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $tweet['Tweet']['Id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $tweet['Tweet']['Id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $tweet['Tweet']['Id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tweet['Tweet']['Id'])); ?>
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
		<li><?php echo $html->link(__('New Tweet', true), array('action'=>'add')); ?></li>
	</ul>
</div>
