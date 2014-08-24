
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Schema Migration'), array('action' => 'edit', $schemaMigration['SchemaMigration']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Schema Migration'), array('action' => 'delete', $schemaMigration['SchemaMigration']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $schemaMigration['SchemaMigration']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Schema Migrations'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Schema Migration'), array('action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="schemaMigrations view">

			<h2><?php  echo __('Schema Migration'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($schemaMigration['SchemaMigration']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Class'); ?></strong></td>
		<td>
			<?php echo h($schemaMigration['SchemaMigration']['class']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Type'); ?></strong></td>
		<td>
			<?php echo h($schemaMigration['SchemaMigration']['type']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($schemaMigration['SchemaMigration']['created']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
