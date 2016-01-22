<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Create surveyoption</h4>
</div>
<form class='col s12' method='post' action='<?php echo site_url("site/createsurveyoptionsubmit");?>' enctype= 'multipart/form-data'>
<div class="row">
<input type="hidden" id="typeid" name="type" value='<?php echo set_value('type',$checktype);?>'>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Order">Order</label>
<input type="text" id="Order" name="order" value='<?php echo set_value('order');?>'>
</div>
</div>
<!--<?php echo $checktype;?>-->
<div class="row">
            <div class="input-field col s12 m8">
                <?php echo form_dropdown('question', $question, set_value('question',$this->input->get("id"))); ?>
                    <label>Question</label>
            </div>
        </div>
<div class="row">
<div class="input-field col s6">
<label for="Title">Title</label>
<input type="text" id="Title" name="title" value='<?php echo set_value('title');?>'>
</div>
</div>
<div class="row">
           <div class="file-field input-field col s12 m6">
               <div class="btn blue darken-4">
                   <span>Image</span>
                   <input type="file" name="image" multiple>
               </div>
               <div class="file-path-wrapper">
                   <input class="file-path validate" type="text" placeholder="Upload one or more files" value='<?php echo set_value(' image ');?>'>
               </div>
           </div>
       </div>
<div class="row">
<div class="col s12 m6">
<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
<a href="<?php echo site_url("site/viewsurveyoption?id=").$this->input->get("id"); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
</div>
</div>
</form>
</div>
<script>
    $(document).ready(function() {
        var textid = '';
        $('.text').hide();
        $('.para').hide();
        $('#textid').change(function() {
            textid = $("#textid").val();
            console.log(textid);
            if (textid == 1) {
                $('.text').show();
                //                  $("div.toggle1, div.toggle3, div.toggle4, div.toggle5").hide();
            }
            if (textid == 2) {
                $('.para').show();
            }
        });

    });

</script>
