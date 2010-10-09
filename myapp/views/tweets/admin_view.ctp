<div class="tweets view">
<h2><?php  __('Tweet');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tweet['Tweet']['Id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Content'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tweet['Tweet']['Content']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tweet['Tweet']['Created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tweet['Tweet']['Modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Tweet', true), array('action'=>'edit', $tweet['Tweet']['Id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Tweet', true), array('action'=>'delete', $tweet['Tweet']['Id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tweet['Tweet']['Id'])); ?> </li>
		<li><?php echo $html->link(__('List Tweets', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Tweet', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
