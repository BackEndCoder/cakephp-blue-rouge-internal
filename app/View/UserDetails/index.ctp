
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New User Detail'), array('action' => 'add'), array('class' => '')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?></li> 
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="userDetails index">
		
			<h2><?php echo __('User Details'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('user_id'); ?></th>
							<th><?php echo $this->Paginator->sort('position'); ?></th>
							<th><?php echo $this->Paginator->sort('field'); ?></th>
							<th><?php echo $this->Paginator->sort('value'); ?></th>
							<th><?php echo $this->Paginator->sort('input'); ?></th>
							<th><?php echo $this->Paginator->sort('data_type'); ?></th>
							<th><?php echo $this->Paginator->sort('label'); ?></th>
							<th><?php echo $this->Paginator->sort('created'); ?></th>
							<th><?php echo $this->Paginator->sort('modified'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($userDetails as $userDetail): ?>
	<tr>
		<td><?php echo h($userDetail['UserDetail']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userDetail['User']['id'], array('controller' => 'users', 'action' => 'view', $userDetail['User']['id'])); ?>
		</td>
		<td><?php echo h($userDetail['UserDetail']['position']); ?>&nbsp;</td>
		<td><?php echo h($userDetail['UserDetail']['field']); ?>&nbsp;</td>
		<td><?php echo h($userDetail['UserDetail']['value']); ?>&nbsp;</td>
		<td><?php echo h($userDetail['UserDetail']['input']); ?>&nbsp;</td>
		<td><?php echo h($userDetail['UserDetail']['data_type']); ?>&nbsp;</td>
		<td><?php echo h($userDetail['UserDetail']['label']); ?>&nbsp;</td>
		<td><?php echo h($userDetail['UserDetail']['created']); ?>&nbsp;</td>
		<td><?php echo h($userDetail['UserDetail']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userDetail['UserDetail']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userDetail['UserDetail']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userDetail['UserDetail']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $userDetail['UserDetail']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>
			</small></p>

			<ul class="pagination">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->