<?php // echo $this->Html->script('ckeditor/ckeditor.js') ?>


  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
  <script>
    $(document).ready(function() {
        var markupStr = $('#summernote').summernote('code');
        var markupStr = $('.summernote').eq(1).summernote('code');
        $('#summernote').summernote('code', markupStr);
        //$('#summernote').summernote('fontSize', 20);

        $('#editor1').summernote({
            defaultFontName: 'Lato',
            height: 300,                 // set editor height
            width: 950,
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: true,                  // set focus to editable area after initializing summernote
            popover: {
                        image: [
                          ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
                          ['float', ['floatLeft', 'floatRight', 'floatNone']],
                          ['remove', ['removeMedia']]
                        ],
                        link: [
                          ['link', ['linkDialogShow', 'unlink']]
                        ],
                        air: [
                          ['color', ['color']],
                          ['font', ['bold', 'underline']],
                          ['fontsize', ['8', '9', '10', '11', '12', '14', '18', '24', '36']],
                          ['para', ['ul', 'paragraph']],
                          ['table', ['table']],
                          ['insert', ['link', 'picture']]
                          ['style', ['style']],
                          ['text', ['bold', 'italic', 'underline', 'color', 'clear']],
                          ['para', [ 'paragraph']],
                          ['height', ['height']],
                          ['font', ['Lato','Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Merriweather']],
                        ]
                      },
            onblur: function() {
                var text = $('#editor').code();
                text = text.replace("<br>", " ");
                $('#description').val(text);
            }
          
        });
    });
  </script>
<div id="content">
    <div class="inner">
        <div class="row">
            <div class="col-lg-12">
                <h1 > Email Template </h1>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <header>
                        <div class="icons"><i class="icon-th-large"></i></div>
                        <h5>Email Template</h5>
                        <div class="toolbar">
                            <ul class="nav">
                                <li style="margin-right:15px">
                                    <div class="btn-group"> 

                                    </div>
                                </li>

                            </ul>
                        </div>
                    </header>
                    <div id="collapseOne" class="accordion-body collapse in body">
                        <div class="col-sm-6">

                            <div class="row">
				  <?php echo $this->Form->create($email_template,['enctype'=>"multipart/form-data",'class' => 'form-horizontal', 'id' => 'user-validate']);?>
                              
                                <div class="form-group">
                                    <label class="control-label col-lg-4">  Subject </label>
                                    <?php echo '<div class="col-lg-8">'.$this->Form->input('subject', array('class'=>'form-control','required'=>true,'label' => false, 'style' => 'width:800px')).'</div>'; ?>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-4">  Content </label>
                                    <?php echo '<div class="col-lg-8">'.$this->Form->input('content', array('class'=>'form-control','id'=>"editor1",'label' => false, 'style' => 'width:800px')).'</div>'; ?>
                                </div>
                                                              
                                   <div class="col-lg-8" style="text-align:left;"> 
                                    <input type="submit" name="submit" value="Edit Email Template" class="btn btn-primary" />
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


