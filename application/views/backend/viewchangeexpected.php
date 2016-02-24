<div class="row">
    <div class="col s12">
        <h4 class="pad-left-15">Change Fixed Pillar Weightages</h4>
    </div>
    <form class="col s12" method="post" action="<?php echo site_url('site/editchangeexpected');?>" enctype="multipart/form-data">
 <input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
   

        <div class="row">
            <div class="input-field col s12 m6">
                <label for="expectedweight">Work-Life Blend</label>
                <input type="text" id="expectedweight1" name="expectedweight1" value="<?php echo set_value('expectedweight',$before->expectedweight);?>">
            </div>
        </div>  
           <div class="row">
            <div class="input-field col s12 m6">
                <label for="expectedweight">Employee Engagement</label>
                <input type="text" id="expectedweight2" name="expectedweight2" value="<?php echo set_value('expectedweight',$before->expectedweight);?>">
            </div>
        </div> 
           <div class="row">
            <div class="input-field col s12 m6">
                <label for="expectedweight">Driving Force</label>
                <input type="text" id="expectedweight3" name="expectedweight3" value="<?php echo set_value('expectedweight',$before->expectedweight);?>">
            </div>
        </div>  
           <div class="row">
            <div class="input-field col s12 m6">
                <label for="expectedweight">Health of an Individual</label>
                <input type="text" id="expectedweight4" name="expectedweight3" value="<?php echo set_value('expectedweight',$before->expectedweight);?>">
            </div>
        </div>  
           <div class="row">
            <div class="input-field col s12 m6">
                <label for="expectedweight">Interpersonal Relationships at Work</label>
                <input type="text" id="expectedweight5" name="expectedweight3" value="<?php echo set_value('expectedweight',$before->expectedweight);?>">
            </div>
        </div> 
           <div class="row">
            <div class="input-field col s12 m6">
                <label for="expectedweight">Rewards and Recognition</label>
                <input type="text" id="expectedweight6" name="expectedweight3" value="<?php echo set_value('expectedweight',$before->expectedweight);?>">
            </div>
        </div> 
           <div class="row">
            <div class="input-field col s12 m6">
                <label for="expectedweight">Sense of Ownership</label>
                <input type="text" id="expectedweight7" name="expectedweight3" value="<?php echo set_value('expectedweight',$before->expectedweight);?>">
            </div>
        </div> 
            <div class="row">
            <div class="input-field col s12 m6">
                <label for="expectedweight">Work Environment</label>
                <input type="text" id="expectedweight8" name="expectedweight3" value="<?php echo set_value('expectedweight',$before->expectedweight);?>">
            </div>
        </div>
            <div class="row">
            <div class="input-field col s12 m6">
                <label for="expectedweight">Job Security</label>
                <input type="text" id="expectedweight9" name="expectedweight3" value="<?php echo set_value('expectedweight',$before->expectedweight);?>">
            </div>
        </div>
            <div class="row">
            <div class="input-field col s12 m6">
                <label for="expectedweight">Alignment</label>
                <input type="text" id="expectedweight10" name="expectedweight3" value="<?php echo set_value('expectedweight',$before->expectedweight);?>">
            </div>
        </div> 
           
<!--           // new pillar name-->
            <div class="row">
            <div class="input-field col s12 m6">
                <label for="expectedweight"></label>
                <input type="text" id="expectedweight3" name="expectedweight3" value="<?php echo set_value('expectedweight',$before->expectedweight);?>">
            </div>
        </div> 
       
        <div class="row">
            <div class="col s12 m6">
                    <div class=" form-group">
                <button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
                <a href="<?php echo site_url('site/viewpillar'); ?>" class="btn btn-secondary waves-effect waves-light  red">Cancel</a>
        </div>
            </div>
        </div>

    </form>
</div>
