<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="products index large-10 medium-9 columns">
	<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<th><?= $this->Paginator->sort('id') ?></th>
			<th><?= $this->Paginator->sort('order_id') ?></th>
			<th><?= $this->Paginator->sort('title') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($products as $product): ?>
		<tr>
			<td><?= $this->Number->format($product->id) ?></td>
			<td>
				<?= $product->has('order') ? $this->Html->link($product->order->id, ['controller' => 'Orders', 'action' => 'view', $product->order->id]) : '' ?>
			</td>
			<td><?= h($product->title) ?></td>
			<td class="actions">
				<?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
				<?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
				<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
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
