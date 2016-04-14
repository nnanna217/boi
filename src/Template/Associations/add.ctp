<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">

</nav>-->
<div class="large-10 columns push-1">
    <div class="associations form large-5 medium-8 columns">

        <?= $this->Form->create($association) ?>
        <fieldset>



            <div class="row" style="margin-top: 50px">
                <?php
                echo $this->Form->input('name');
                echo $this->Form->input('rc_number', array('placeholder' => 'CAC incorporation number'));
                echo $this->Form->input('date_of_formation', ['empty' => true, 'minYear' => date('Y') - 70,
                    'maxYear' => date('Y')]);
                ?>
                <div class="col-md-3 ">
                    <div id="size">Select State :</div>
                    <div>
                        <select required onchange="print_state('lga', this.selectedIndex);
                                " class="form-control" name="state" required="required" id="state"></select>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="size">Select L.G.A : </div>
                <select required="required" name ="lga" id ="lga"  class="form-control"></select>
                <script language="javascript">print_country("state");</script>
            </div>
            <?php echo $this->Form->input('ward'); 
            echo $this->Form->input('market', array('placeholder' => 'If applicable, State what market you', 'label' => 'Market'));
            ?>
           
    </div>

<!--        <div class="input text required"><label for="state">State</label><input type="text" name="state" required="required" maxlength="255" id="state"></div>
        <div class="input text required"><label for="lga">Lga</label><input type="text" name="lga" required="required" maxlength="255" id="lga"></div>-->
    <div class="associations form large-5 medium-8 columns content">

        <?php
//        echo $this->Form->input('state');
//        echo $this->Form->input('lga');
        echo $this->Form->input('address');
        echo $this->Form->input('closest_landmark', array('style'=>'height:50px;'));
        echo $this->Form->input('category', array('placeholder' => 'What type of business you engage in..e.g Fishing, Farming'));
        echo $this->Form->input('no_of_members', array('min' => 0));
        
        echo $this->Form->input('contact_phone');
        echo $this->Form->input('contact_email', array('type' => 'email'));
        ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
