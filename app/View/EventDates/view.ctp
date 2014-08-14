
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Event Date'), array('action' => 'edit', $eventDate['EventDate']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Event Date'), array('action' => 'delete', $eventDate['EventDate']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $eventDate['EventDate']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Event Dates'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Event Date'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Purchases'), array('controller' => 'purchases', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Purchase'), array('controller' => 'purchases', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="eventDates view">

			<h2><?php  echo __('Event Date'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($eventDate['EventDate']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Event'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($eventDate['Event']['name'], array('controller' => 'events', 'action' => 'view', $eventDate['Event']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Date'); ?></strong></td>
		<td>
			<?php echo h($eventDate['EventDate']['date']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($eventDate['EventDate']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modifed'); ?></strong></td>
		<td>
			<?php echo h($eventDate['EventDate']['modifed']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Purchases'); ?></h3>
				
				<?php if (!empty($eventDate['Purchase'])): ?>
					
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
										foreach ($eventDate['Purchase'] as $purchase): ?>
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

				<h3><?php echo __('Related Customers'); ?></h3>
				
				<?php if (!empty($eventDate['Customer'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Postcode'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($eventDate['Customer'] as $customer): ?>
		<tr>
			<td><?php echo $customer['id']; ?></td>
			<td><?php echo $customer['email']; ?></td>
			<td><?php echo $customer['title']; ?></td>
			<td><?php echo $customer['first_name']; ?></td>
			<td><?php echo $customer['last_name']; ?></td>
			<td><?php echo $customer['address']; ?></td>
			<td><?php echo $customer['postcode']; ?></td>
			<td><?php echo $customer['created']; ?></td>
			<td><?php echo $customer['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'customers', 'action' => 'view', $customer['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'customers', 'action' => 'edit', $customer['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'customers', 'action' => 'delete', $customer['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $customer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Customer'), array('controller' => 'customers', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
