<?php //pr($user); //exit; ?>


<div id="content">
    <div class="inner">
        <div class="row">
            <div class="col-lg-12">
                <h1 > Edit Rating Text </h1>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <header>
                        <div class="icons"><i class="icon-th-large"></i></div>
                        <h5>Edit Rating Text</h5>
                        <div class="toolbar">

                        </div>
                    </header>
                    <div id="collapseOne" class="accordion-body collapse in body">
                        <div class="col-sm-6">

                            <div class="row">
                                <?php echo $this->Form->create($user, ['class' => 'form-horizontal', 'id' => 'user-validate', 'enctype' => 'multipart/form-data']); ?>

                                                               

                               <div class="form-group">
                                    <label class="control-label col-lg-4">Type</label>
                                    <div class="col-lg-8">
                                        <select class="form-control" name='type_id'>
                                            
                                            <option value="">--Select Type--</option>
                                            <?php foreach($ratingtype as $dt){?>
                                            <option value='<?php echo $dt->id;?>' <?php if($user->type_id==$dt->id){echo 'selected';}?>><?php echo $dt->type_name;?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-4">Rating</label>
                                    <div class="col-lg-8">
                                        <select class="form-control" name='rating_value'>
                                            
                                            <option value="">--Select Rating--</option>
                                            <?php for($i=1;$i<6;$i++){?>
                                            <option value='<?php echo $i;?>' <?php if($user->rating_value==$i){echo 'selected';}?>><?php echo $i;?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Rating Text</label>
                                    <div class="col-lg-8">
                                        <?php echo $this->Form->input('rating_text', array('class'=>'form-control','label' => false)); ?>
                                    </div>
                                </div>
                                                               

                                
                                                             
                                
                                <label class="control-label col-lg-4"></label>
                                <div class="col-lg-8" style="text-align:left;"> 
                                    <input type="submit" name="submit" value="Edit Rating Text" class="btn btn-primary" />
                                </div>
                                <?php echo $this->Form->end();?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .datepicker{
        background:white !important;
    }    
</style>    