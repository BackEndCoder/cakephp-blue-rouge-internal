<?php
$exploded = explode('/',$this->here);
$page = $exploded[1];
?>
<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button><!-- /.navbar-toggle -->
		<?php echo $this->Html->Link('Blue Rouge', '/', array('class' => 'navbar-brand')); ?>
	</div><!-- /.navbar-header -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li<?php if($page=='customers'){ echo ' class="active"'; } ?>><a href="/customers">Customers</a></li>
			<li<?php if($page=='events'){ echo ' class="active"'; } ?>><a href="/events">Events</a></li>
			<li<?php if($page=='event_dates'){ echo ' class="active"'; } ?>><a href="/event_dates">Event Dates</a></li>
			<li<?php if($page=='purchases'){ echo ' class="active"'; } ?>><a href="/purchases">Purchases</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tools <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="/customers/import">Import CSV</a></li>
				</ul>
			</li>
		</ul><!-- /.nav navbar-nav -->
	</div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->