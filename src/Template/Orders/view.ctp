<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # %s?', $order->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="orders view large-10 medium-9 columns">
	<h2><?= h($order->id) ?></h2>
	<div class="row">
		<div class="large-5 columns strings">
			<h6 class="subheader"><?= __('Title') ?></h6>
			<p><?= h($order->title) ?></p>
		</div>
		<div class="large-2 large-offset-1 columns numbers end">
			<h6 class="subheader"><?= __('Id') ?></h6>
			<p><?= $this->Number->format($order->id) ?></p>
			<h6 class="subheader"><?= __('Fm Ref') ?></h6>
			<p><?= $this->Number->format($order->fm_ref) ?></p>
			<h6 class="subheader"><?= __('Customer Id') ?></h6>
			<p><?= $this->Number->format($order->customer_id) ?></p>
			<h6 class="subheader"><?= __('User Id') ?></h6>
			<p><?= $this->Number->format($order->user_id) ?></p>
		</div>
		<div class="large-2 columns dates end">
			<h6 class="subheader"><?= __('Placed') ?></h6>
			<p><?= h($order->placed) ?></p>
			<h6 class="subheader"><?= __('Delivery') ?></h6>
			<p><?= h($order->delivery) ?></p>
		</div>
	</div>
	<div class="row texts">
		<div class="columns large-9">
			<h6 class="subheader"><?= __('Description') ?></h6>
			<?= $this->Text->autoParagraph(h($order->description)); ?>
		</div>
	</div>
</div>
<div class="related row">
	<div class="column large-12">
	<h4 class="subheader"><?= __('Related Products') ?></h4>
	<?php if (!empty($order->products)): ?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?= __('Id') ?></th>
			<th><?= __('Order Id') ?></th>
			<th><?= __('Title') ?></th>
			<th><?= __('Description') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
		<?php foreach ($order->products as $products): ?>
		<tr>
			<td><?= h($products->id) ?></td>
			<td><?= h($products->order_id) ?></td>
			<td><?= h($products->title) ?></td>
			<td><?= h($products->description) ?></td>
			<td class="actions">
				<?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
				<?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
				<?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # %s?', $products->id)]) ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php endif; ?>
	</div>
</div>
