
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New User'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List User Details'), array('controller' => 'user_details', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New User Detail'), array('controller' => 'user_details', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="users view">

			<h2><?php  echo __('User'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Username'); ?></strong></td>
		<td>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Slug'); ?></strong></td>
		<td>
			<?php echo h($user['User']['slug']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Password'); ?></strong></td>
		<td>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Password Token'); ?></strong></td>
		<td>
			<?php echo h($user['User']['password_token']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Email'); ?></strong></td>
		<td>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Email Verified'); ?></strong></td>
		<td>
			<?php echo h($user['User']['email_verified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Email Token'); ?></strong></td>
		<td>
			<?php echo h($user['User']['email_token']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Email Token Expires'); ?></strong></td>
		<td>
			<?php echo h($user['User']['email_token_expires']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Tos'); ?></strong></td>
		<td>
			<?php echo h($user['User']['tos']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Active'); ?></strong></td>
		<td>
			<?php echo h($user['User']['active']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Last Login'); ?></strong></td>
		<td>
			<?php echo h($user['User']['last_login']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Last Action'); ?></strong></td>
		<td>
			<?php echo h($user['User']['last_action']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Is Admin'); ?></strong></td>
		<td>
			<?php echo h($user['User']['is_admin']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Role'); ?></strong></td>
		<td>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related User Details'); ?></h3>
				
				<?php if (!empty($user['UserDetail'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Position'); ?></th>
		<th><?php echo __('Field'); ?></th>
		<th><?php echo __('Value'); ?></th>
		<th><?php echo __('Input'); ?></th>
		<th><?php echo __('Data Type'); ?></th>
		<th><?php echo __('Label'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($user['UserDetail'] as $userDetail): ?>
		<tr>
			<td><?php echo $userDetail['id']; ?></td>
			<td><?php echo $userDetail['user_id']; ?></td>
			<td><?php echo $userDetail['position']; ?></td>
			<td><?php echo $userDetail['field']; ?></td>
			<td><?php echo $userDetail['value']; ?></td>
			<td><?php echo $userDetail['input']; ?></td>
			<td><?php echo $userDetail['data_type']; ?></td>
			<td><?php echo $userDetail['label']; ?></td>
			<td><?php echo $userDetail['created']; ?></td>
			<td><?php echo $userDetail['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_details', 'action' => 'view', $userDetail['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_details', 'action' => 'edit', $userDetail['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_details', 'action' => 'delete', $userDetail['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $userDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New User Detail'), array('controller' => 'user_details', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
