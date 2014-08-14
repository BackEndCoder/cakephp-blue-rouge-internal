
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Purchase'), array('action' => 'edit', $purchase['Purchase']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Purchase'), array('action' => 'delete', $purchase['Purchase']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $purchase['Purchase']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Purchases'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Purchase'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Event Dates'), array('controller' => 'event_dates', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Event Date'), array('controller' => 'event_dates', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="purchases view">

			<h2><?php  echo __('Purchase'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($purchase['Purchase']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Event Date'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($purchase['EventDate']['id'], array('controller' => 'event_dates', 'action' => 'view', $purchase['EventDate']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Customer'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($purchase['Customer']['title'], array('controller' => 'customers', 'action' => 'view', $purchase['Customer']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Spend'); ?></strong></td>
		<td>
			<?php echo h($purchase['Purchase']['spend']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($purchase['Purchase']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modifed'); ?></strong></td>
		<td>
			<?php echo h($purchase['Purchase']['modifed']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
