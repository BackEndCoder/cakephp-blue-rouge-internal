
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Customers Event Date'), array('action' => 'edit', $customersEventDate['CustomersEventDate']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Customers Event Date'), array('action' => 'delete', $customersEventDate['CustomersEventDate']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $customersEventDate['CustomersEventDate']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Customers Event Dates'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Customers Event Date'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Event Dates'), array('controller' => 'event_dates', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Event Date'), array('controller' => 'event_dates', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="customersEventDates view">

			<h2><?php  echo __('Customers Event Date'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($customersEventDate['CustomersEventDate']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Customer'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($customersEventDate['Customer']['title'], array('controller' => 'customers', 'action' => 'view', $customersEventDate['Customer']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Event Date'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($customersEventDate['EventDate']['id'], array('controller' => 'event_dates', 'action' => 'view', $customersEventDate['EventDate']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
