
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $customer['Customer']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Customers'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Customer'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Purchases'), array('controller' => 'purchases', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Purchase'), array('controller' => 'purchases', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Event Dates'), array('controller' => 'event_dates', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Event Date'), array('controller' => 'event_dates', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="customers view">

			<h2><?php  echo __('Customer'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($customer['Customer']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Email'); ?></strong></td>
		<td>
			<?php echo h($customer['Customer']['email']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Title'); ?></strong></td>
		<td>
			<?php echo h($customer['Customer']['title']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('First Name'); ?></strong></td>
		<td>
			<?php echo h($customer['Customer']['first_name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Last Name'); ?></strong></td>
		<td>
			<?php echo h($customer['Customer']['last_name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Address'); ?></strong></td>
		<td>
			<?php echo h($customer['Customer']['address']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Postcode'); ?></strong></td>
		<td>
			<?php echo h($customer['Customer']['postcode']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($customer['Customer']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($customer['Customer']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Purchases'); ?></h3>
				
				<?php if (!empty($customer['Purchase'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Event Date Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Spend'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modifed'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($customer['Purchase'] as $purchase): ?>
		<tr>
			<td><?php echo $purchase['id']; ?></td>
			<td><?php echo $purchase['event_date_id']; ?></td>
			<td><?php echo $purchase['customer_id']; ?></td>
			<td><?php echo $purchase['spend']; ?></td>
			<td><?php echo $purchase['created']; ?></td>
			<td><?php echo $purchase['modifed']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'purchases', 'action' => 'view', $purchase['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'purchases', 'action' => 'edit', $purchase['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'purchases', 'action' => 'delete', $purchase['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $purchase['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Purchase'), array('controller' => 'purchases', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

					
			<div class="related">

				<h3><?php echo __('Related Event Dates'); ?></h3>
				
				<?php if (!empty($customer['EventDate'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Event Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modifed'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($customer['EventDate'] as $eventDate): ?>
		<tr>
			<td><?php echo $eventDate['id']; ?></td>
			<td><?php echo $eventDate['event_id']; ?></td>
			<td><?php echo $eventDate['date']; ?></td>
			<td><?php echo $eventDate['created']; ?></td>
			<td><?php echo $eventDate['modifed']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'event_dates', 'action' => 'view', $eventDate['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'event_dates', 'action' => 'edit', $eventDate['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'event_dates', 'action' => 'delete', $eventDate['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $eventDate['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Event Date'), array('controller' => 'event_dates', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
