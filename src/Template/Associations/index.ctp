<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Association'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="associations index large-9 medium-8 columns content">
    <h3><?= __('Associations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('rc_number') ?></th>
                <th><?= $this->Paginator->sort('date_of_formation') ?></th>
                <th><?= $this->Paginator->sort('state') ?></th>
                <th><?= $this->Paginator->sort('lga') ?></th>
                <th><?= $this->Paginator->sort('ward') ?></th>
                <th><?= $this->Paginator->sort('market') ?></th>
                <th><?= $this->Paginator->sort('no_of_members') ?></th>
                <th><?= $this->Paginator->sort('category') ?></th>
                <th><?= $this->Paginator->sort('contact_phone') ?></th>
                <th><?= $this->Paginator->sort('contact_email') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($associations as $association): ?>
            <tr>
                <td><?= $this->Number->format($association->id) ?></td>
                <td><?= h($association->name) ?></td>
                <td><?= h($association->rc_number) ?></td>
                <td><?= h($association->date_of_formation) ?></td>
                <td><?= h($association->state) ?></td>
                <td><?= h($association->lga) ?></td>
                <td><?= h($association->ward) ?></td>
                <td><?= h($association->market) ?></td>
                <td><?= $this->Number->format($association->no_of_members) ?></td>
                <td><?= h($association->category) ?></td>
                <td><?= h($association->contact_phone) ?></td>
                <td><?= h($association->contact_email) ?></td>
                <td><?= h($association->created) ?></td>
                <td><?= h($association->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $association->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $association->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $association->id], ['confirm' => __('Are you sure you want to delete # {0}?', $association->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
