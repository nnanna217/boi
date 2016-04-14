<nav class="large-3 medium-4 columns" id="actions-sidebar">

</nav>
<div class="associations form large-9 medium-8 columns content">
    <?= $this->Form->create($association) ?>
    <fieldset>
        <legend><?= __('Add Association') ?></legend>
        <?php
        echo $this->Form->input('name');
        echo $this->Form->input('rc_number');
        echo $this->Form->input('date_of_formation', ['empty' => true, 'minYear' => date('Y') - 70,
            'maxYear' => date('Y')]);
        echo $this->Form->input('address');
        ?>
        <div class="col-md-3 ">
            <div id="size">Select State :</div>
            <div>
                <select required onchange="print_state('lga', this.selectedIndex);
                " class="form-control" name="state" required="required" id="state"></select>
            </div>
        </div>
        <div class="col-md-3">
            <div id="size">Select L.G.A : </div>
            <select required="required" name ="lga" id ="lga"  class="form-control"></select>
            <script language="javascript">print_country("state");</script>
        </div>
<!--        <div class="input text required"><label for="state">State</label><input type="text" name="state" required="required" maxlength="255" id="state"></div>
        <div class="input text required"><label for="lga">Lga</label><input type="text" name="lga" required="required" maxlength="255" id="lga"></div>-->
        <?php
//        echo $this->Form->input('state');
//        echo $this->Form->input('lga');
        echo $this->Form->input('ward',['type'=>'number', 'min'=>1]);
        echo $this->Form->input('market');
        echo $this->Form->input('closest_landmark');
        echo $this->Form->input('no_of_members', array('min' => 0));
        echo $this->Form->input('category');
        echo $this->Form->input('contact_phone');
        echo $this->Form->input('contact_email', array('type' => 'email'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
