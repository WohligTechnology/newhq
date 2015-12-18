<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Create surveyquestion</h4>
</div>
<form class='col s12' method='post' action='<?php echo site_url("site/createsurveyquestionsubmit");?>' enctype= 'multipart/form-data'>
<div class=" row">
<div class=" input-field col s6">
<?php echo form_dropdown("type",$type,set_value('type'));?>
<label>Type</label>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Text">Text</label>
<input type="text" id="Text" name="text" value='<?php echo set_value('text');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Start Time">Start Time</label>
<input type="text" id="Start Time" name="starttime" value='<?php echo set_value('starttime');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="End Time">End Time</label>
<input type="text" id="End Time" name="endtime" value='<?php echo set_value('endtime');?>'>
</div>
</div>
<div class="row">
<div class="col s12 m6">
<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
<a href="<?php echo site_url("site/viewsurveyquestion"); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
</div>
</div>
</form>
</div>
