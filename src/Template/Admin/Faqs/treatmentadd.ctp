<?php echo $this->Html->script('ckeditor/ckeditor.js') ?>
<div id="content">
<div class="inner">
<div class="row">
<div class="col-lg-12">

</div>
</div>
<hr />
<div class="row">
    <div class="col-lg-12">
          <div class="box">
            <div id="collapseOne" class="accordion-body collapse in body">
                <div class="col-sm-8>
                    <div class="row">
                        <?php //echo $this->Form->create($faq) ?>
                        <?php echo $this->Form->create($faq,['class' => 'form-horizontal', 'id' => 'admin-validate']);?>
                        <fieldset>
                            <legend><?php echo __('Add Faq') ?></legend>
                            <?php
                                echo '<div class="form-group">'.$this->Form->input('question', array('class'=>'form-control')).'</div>';
                            ?>
                        </fieldset>

                        <fieldset>
                            <legend><?php echo __('Answer') ?></legend>
                            <textarea class="form-control ckeditor" id="editor1" rows="6" name="answer"></textarea>
                        </fieldset>

                        <fieldset>
                            <button type="submit" class="btn btn-primary" style="margin-top: 15px">Add Faq</button>
                        </fieldset>                    
                    
                    
                        
                        <?php echo $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
