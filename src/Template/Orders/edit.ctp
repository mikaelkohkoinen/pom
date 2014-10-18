<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # %s?', $order->id)]) ?></li>
		<li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="orders form large-10 medium-9 columns">
<?= $this->Form->create($order) ?>
	<fieldset>
		<legend><?= __('Edit Order') ?></legend>
	<?php
		echo $this->Form->input('fm_ref');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('placed');
		echo $this->Form->input('delivery');
	?>
	</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
</div>
