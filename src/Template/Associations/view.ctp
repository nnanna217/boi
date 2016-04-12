<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Association'), ['action' => 'edit', $association->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Association'), ['action' => 'delete', $association->id], ['confirm' => __('Are you sure you want to delete # {0}?', $association->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Associations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Association'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="associations view large-9 medium-8 columns content">
    <h3><?= h($association->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($association->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Rc Number') ?></th>
            <td><?= h($association->rc_number) ?></td>
        </tr>
        <tr>
            <th><?= __('State') ?></th>
            <td><?= h($association->state) ?></td>
        </tr>
        <tr>
            <th><?= __('Lga') ?></th>
            <td><?= h($association->lga) ?></td>
        </tr>
        <tr>
            <th><?= __('Ward') ?></th>
            <td><?= h($association->ward) ?></td>
        </tr>
        <tr>
            <th><?= __('Market') ?></th>
            <td><?= h($association->market) ?></td>
        </tr>
        <tr>
            <th><?= __('Category') ?></th>
            <td><?= h($association->category) ?></td>
        </tr>
        <tr>
            <th><?= __('Contact Phone') ?></th>
            <td><?= h($association->contact_phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Contact Email') ?></th>
            <td><?= h($association->contact_email) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($association->id) ?></td>
        </tr>
        <tr>
            <th><?= __('No Of Members') ?></th>
            <td><?= $this->Number->format($association->no_of_members) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Of Formation') ?></th>
            <td><?= h($association->date_of_formation) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($association->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($association->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($association->address)); ?>
    </div>
    <div class="row">
        <h4><?= __('Closest Landmark') ?></h4>
        <?= $this->Text->autoParagraph(h($association->closest_landmark)); ?>
    </div>
</div>
