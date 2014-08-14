
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit User Detail'), array('action' => 'edit', $userDetail['UserDetail']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete User Detail'), array('action' => 'delete', $userDetail['UserDetail']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $userDetail['UserDetail']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List User Details'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New User Detail'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="userDetails view">

			<h2><?php  echo __('User Detail'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($userDetail['UserDetail']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('User'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($userDetail['User']['id'], array('controller' => 'users', 'action' => 'view', $userDetail['User']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Position'); ?></strong></td>
		<td>
			<?php echo h($userDetail['UserDetail']['position']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Field'); ?></strong></td>
		<td>
			<?php echo h($userDetail['UserDetail']['field']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Value'); ?></strong></td>
		<td>
			<?php echo h($userDetail['UserDetail']['value']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Input'); ?></strong></td>
		<td>
			<?php echo h($userDetail['UserDetail']['input']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Data Type'); ?></strong></td>
		<td>
			<?php echo h($userDetail['UserDetail']['data_type']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Label'); ?></strong></td>
		<td>
			<?php echo h($userDetail['UserDetail']['label']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($userDetail['UserDetail']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($userDetail['UserDetail']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
