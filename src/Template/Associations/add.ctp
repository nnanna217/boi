<nav class="large-3 medium-4 columns" id="actions-sidebar">
    
</nav>
<div class="associations form large-9 medium-8 columns content">
    <?= $this->Form->create($association) ?>
    <fieldset>
        <legend><?= __('Add Association') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('rc_number');
            echo $this->Form->input('date_of_formation', ['empty' => true]);
            echo $this->Form->input('address');
            echo $this->Form->input('state');
            echo $this->Form->input('lga');
            echo $this->Form->input('ward');
            echo $this->Form->input('market');
            echo $this->Form->input('closest_landmark');
            echo $this->Form->input('no_of_members');
            echo $this->Form->input('category');
            echo $this->Form->input('contact_phone');
            echo $this->Form->input('contact_email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
