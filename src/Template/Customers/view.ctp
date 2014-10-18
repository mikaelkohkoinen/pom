<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # %s?', $customer->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="customers view large-10 medium-9 columns">
	<h2><?= h($customer->name) ?></h2>
	<div class="row">
		<div class="large-5 columns strings">
			<h6 class="subheader"><?= __('Name') ?></h6>
			<p><?= h($customer->name) ?></p>
		</div>
		<div class="large-2 large-offset-1 columns numbers end">
			<h6 class="subheader"><?= __('Id') ?></h6>
			<p><?= $this->Number->format($customer->id) ?></p>
		</div>
		<div class="large-2 columns dates end">
			<h6 class="subheader"><?= __('Created') ?></h6>
			<p><?= h($customer->created) ?></p>
			<h6 class="subheader"><?= __('Updated') ?></h6>
			<p><?= h($customer->updated) ?></p>
		</div>
	</div>
</div>
<div class="related row">
	<div class="column large-12">
	<h4 class="subheader"><?= __('Related Orders') ?></h4>
	<?php if (!empty($customer->orders)): ?>
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
		<?php foreach ($customer->orders as $orders): ?>
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
	<h4 class="subheader"><?= __('Related Users') ?></h4>
	<?php if (!empty($customer->users)): ?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?= __('Id') ?></th>
			<th><?= __('Username') ?></th>
			<th><?= __('Password') ?></th>
			<th><?= __('First Name') ?></th>
			<th><?= __('Last Name') ?></th>
			<th><?= __('Email') ?></th>
			<th><?= __('Phone') ?></th>
			<th><?= __('Mobile') ?></th>
			<th><?= __('Fm Ref') ?></th>
			<th><?= __('Created') ?></th>
			<th><?= __('Updated') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
		<?php foreach ($customer->users as $users): ?>
		<tr>
			<td><?= h($users->id) ?></td>
			<td><?= h($users->username) ?></td>
			<td><?= h($users->password) ?></td>
			<td><?= h($users->first_name) ?></td>
			<td><?= h($users->last_name) ?></td>
			<td><?= h($users->email) ?></td>
			<td><?= h($users->phone) ?></td>
			<td><?= h($users->mobile) ?></td>
			<td><?= h($users->fm_ref) ?></td>
			<td><?= h($users->created) ?></td>
			<td><?= h($users->updated) ?></td>
			<td class="actions">
				<?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
				<?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
				<?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # %s?', $users->id)]) ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php endif; ?>
	</div>
</div>
