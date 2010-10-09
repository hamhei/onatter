<?php $session->flash('auth'); ?>
<?php e($form->create('User', array('action'=>'login'))); ?>
<p class="label">ID</p>
						<p><?php e($form->text('username', array('size'=>'35', 'maxlength'=>'1000'))); ?><?php e($form->error('Url.full_url')); ?></p>
<p class="label">password</p>
						<p><?php e($form->password('password',array('size'=>'35'))); ?></p>
						<?php e($form->submit('Login')); ?>
						<?php e($form->end()); ?>
