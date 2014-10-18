<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # %s?', $user->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="users view large-10 medium-9 columns">
	<h2><?= h($user->full_name) ?></h2>
	<div class="row">
		<div class="large-5 columns strings">
			<h6 class="subheader"><?= __('Username') ?></h6>
			<p><?= h($user->username) ?></p>
			<h6 class="subheader"><?= __('Password') ?></h6>
			<p><?= h($user->password) ?></p>
			<h6 class="subheader"><?= __('First Name') ?></h6>
			<p><?= h($user->first_name) ?></p>
			<h6 class="subheader"><?= __('Last Name') ?></h6>
			<p><?= h($user->last_name) ?></p>
			<h6 class="subheader"><?= __('Email') ?></h6>
			<p><?= h($user->email) ?></p>
			<h6 class="subheader"><?= __('Phone') ?></h6>
			<p><?= h($user->phone) ?></p>
			<h6 class="subheader"><?= __('Mobile') ?></h6>
			<p><?= h($user->mobile) ?></p>
		</div>
		<div class="large-2 large-offset-1 columns numbers end">
			<h6 class="subheader"><?= __('Id') ?></h6>
			<p><?= $this->Number->format($user->id) ?></p>
			<h6 class="subheader"><?= __('Fm Ref') ?></h6>
			<p><?= $this->Number->format($user->fm_ref) ?></p>
		</div>
		<div class="large-2 columns dates end">
			<h6 class="subheader"><?= __('Created') ?></h6>
			<p><?= h($user->created) ?></p>
			<h6 class="subheader"><?= __('Updated') ?></h6>
			<p><?= h($user->updated) ?></p>
		</div>
	</div>
</div>
<div class="related row">
	<div class="column large-12">
	<h4 class="subheader"><?= __('Related Orders') ?></h4>
	<?php if (!empty($user->orders)): ?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?= __('Id') ?></th>
			<th><?= __('Fm Ref') ?></th>
			<th><?= __('Customer Id') ?></th>
			<th><?= __('User Id') ?></th>
			<th><?= __('Title') ?></th>
			<th><?= __('Description') ?></th>
			<th><?= __('Placed') ?></th>
			<th><?= __('Delivery') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
		<?php foreach ($user->orders as $orders): ?>
		<tr>
			<td><?= h($orders->id) ?></td>
			<td><?= h($orders->fm_ref) ?></td>
			<td><?= h($orders->customer_id) ?></td>
			<td><?= h($orders->user_id) ?></td>
			<td><?= h($orders->title) ?></td>
			<td><?= h($orders->description) ?></td>
			<td><?= h($orders->placed) ?></td>
			<td><?= h($orders->delivery) ?></td>
			<td class="actions">
				<?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>
				<?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>
				<?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # %s?', $orders->id)]) ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php endif; ?>
	</div>
</div>
<div class="related row">
	<div class="column large-12">
	<h4 class="subheader"><?= __('Related Customers') ?></h4>
	<?php if (!empty($user->customers)): ?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?= __('Id') ?></th>
			<th><?= __('Name') ?></th>
			<th><?= __('Created') ?></th>
			<th><?= __('Updated') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
		<?php foreach ($user->customers as $customers): ?>
		<tr>
			<td><?= h($customers->id) ?></td>
			<td><?= h($customers->name) ?></td>
			<td><?= h($customers->created) ?></td>
			<td><?= h($customers->updated) ?></td>
			<td class="actions">
				<?= $this->Html->link(__('View'), ['controller' => 'Customers', 'action' => 'view', $customers->id]) ?>
				<?= $this->Html->link(__('Edit'), ['controller' => 'Customers', 'action' => 'edit', $customers->id]) ?>
				<?= $this->Form->postLink(__('Delete'), ['controller' => 'Customers', 'action' => 'delete', $customers->id], ['confirm' => __('Are you sure you want to delete # %s?', $customers->id)]) ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php endif; ?>
	</div>
</div>
