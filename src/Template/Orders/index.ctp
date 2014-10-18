<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="orders index large-10 medium-9 columns">
	<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<th><?= $this->Paginator->sort('id') ?></th>
			<th><?= $this->Paginator->sort('fm_ref') ?></th>
			<th><?= $this->Paginator->sort('customer_id') ?></th>
			<th><?= $this->Paginator->sort('user_id') ?></th>
			<th><?= $this->Paginator->sort('title') ?></th>
			<th><?= $this->Paginator->sort('placed') ?></th>
			<th><?= $this->Paginator->sort('delivery') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($orders as $order): ?>
		<tr>
			<td><?= $this->Number->format($order->id) ?></td>
			<td><?= $this->Number->format($order->fm_ref) ?></td>
			<td><?= $this->Number->format($order->customer_id) ?></td>
			<td><?= $this->Number->format($order->user_id) ?></td>
			<td><?= h($order->title) ?></td>
			<td><?= h($order->placed) ?></td>
			<td><?= h($order->delivery) ?></td>
			<td class="actions">
				<?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?>
				<?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]) ?>
				<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
	<div class="paginator">
		<ul class="pagination">
		<?php
			echo $this->Paginator->prev('< ' . __('previous'));
			echo $this->Paginator->numbers();
			echo $this->Paginator->next(__('next') . ' >');
		?>
		</ul>
		<p><?= $this->Paginator->counter() ?></p>
	</div>
</div>
