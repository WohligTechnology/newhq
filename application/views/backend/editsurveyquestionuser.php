<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize"> Survey Question User</h4>
</div>
</div>
<div class="row">
<form class='col s12' method='post' action='<?php echo site_url("site/editsurveyquestionusersubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<div class=" row">
<div class=" input-field col s12 m6">
<?php echo form_dropdown("question",$question,set_value('question',$before->question));?>
<label for="Question">Question</label>
</div>
</div>
<div class="row" style="display:none">
<div class="input-field col s6">
<label for="Email">Email</label>
<input type="email" id="Email" name="email" value='<?php echo set_value('email',$before->email);?>'>
</div>
</div>
<div class="row">
<div class="col s6">
<button type="submit" class="btn btn-primary waves-effect waves-light  blue darken-4">Save</button>
<a href='<?php echo site_url("site/viewsurveyquestionuser"); ?>' class='btn btn-secondary waves-effect waves-light red'>Cancel</a>
</div>
</div>
</form>
</div>
