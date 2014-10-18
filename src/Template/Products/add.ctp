<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="products form large-10 medium-9 columns">
<?= $this->Form->create($product) ?>
	<fieldset>
		<legend><?= __('Add Product') ?></legend>
	<?php
		echo $this->Form->input('order_id', ['options' => $orders]);
		echo $this->Form->input('title');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
</div>
