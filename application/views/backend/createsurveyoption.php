<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Create surveyoption</h4>
</div>
<form class='col s12' method='post' action='<?php echo site_url("site/createsurveyoptionsubmit");?>' enctype= 'multipart/form-data'>
<div class="row">
<div class="input-field col s6">
<label for="Order">Order</label>
<input type="text" id="Order" name="order" value='<?php echo set_value('order');?>'>
</div>
</div>
<div class=" row">
<div class=" input-field col s6">
<?php echo form_dropdown("question",$question,set_value('question'));?>
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
<div class="input-field col s6">
<label for="Image">Image</label>
<input type="text" id="Image" name="image" value='<?php echo set_value('image');?>'>
</div>
</div>
<div class="row">
<div class="col s12 m6">
<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
<a href="<?php echo site_url("site/viewsurveyoption"); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
</div>
</div>
</form>
</div>
