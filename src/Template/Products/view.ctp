<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # %s?', $product->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="products view large-10 medium-9 columns">
	<h2><?= h($product->title) ?></h2>
	<div class="row">
		<div class="large-5 columns strings">
			<h6 class="subheader"><?= __('Order') ?></h6>
			<p><?= $product->has('order') ? $this->Html->link($product->order->id, ['controller' => 'Orders', 'action' => 'view', $product->order->id]) : '' ?></p>
			<h6 class="subheader"><?= __('Title') ?></h6>
			<p><?= h($product->title) ?></p>
		</div>
		<div class="large-2 large-offset-1 columns numbers end">
			<h6 class="subheader"><?= __('Id') ?></h6>
			<p><?= $this->Number->format($product->id) ?></p>
		</div>
	</div>
	<div class="row texts">
		<div class="columns large-9">
			<h6 class="subheader"><?= __('Description') ?></h6>
			<?= $this->Text->autoParagraph(h($product->description)); ?>
		</div>
	</div>
</div>
