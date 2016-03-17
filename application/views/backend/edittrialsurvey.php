<div class="panel-body">
      <div class="row">
        <div class="col s12">
          <h5 class="padleft">Mini Survey</h5>
        </div>
      </div>
</div>

<div class="row">
   <form class="col s12" method="post" action="<?php echo site_url('site/editsurveysubmit');?>">

     <div class="row">
       <div class="input-field col s12 m6">
         <input type="text" name="surveyname" value="<?php echo $before['survey']->conclusion;?>" required>
         <input type="hidden" name="surveyid" value="<?php echo $before['survey']->id;?>">
         <label>Name Your Survey</label>
       </div>
     </div>

     <div class="row">
       <div class="input-field col s12 m6">
         <input type="text" name="surveydescription" value="<?php echo $before['survey']->conclusionsuggestion;?>">
         <label>Add Description</label>
       </div>
     </div>

     <div class="row mb0">
       <div class="col s12">
         <b class="brdr-bot">
           Add Questions
         </b>
       </div>
     </div>
  <div class="repeat-section">
       <div class="question-repeater">
      <div class="row bold">
        <div class="input-field col s5 m5">
          <input type="text" name="question1" value="<?php echo $before['question'][0]->content;?>" required>
          <input type="hidden" name="question1id" value="<?php echo $before['question'][0]->id;?>">
          <label>Question 1</label>
        </div>
        <div class="input-field col s3 m3">
        <?php echo form_dropdown("type1",$type,set_value('type',$before['question'][0]->type));?>
       </div>
       <div class="input-field col s2 m2">
        <?php echo form_dropdown("required1",$isrequired,set_value('required1',$before['question'][0]->isrequired))?>
       </div>
      </div>
      
<!--
      <div class="options">
        <div class="row">
          <div class="input-field col s8 m8">
            <input type="text" required>
            <label>Option 1</label>
          </div>
         <div class="input-field col s2 m2">
           <button class="btn btn-xs less-pad"><i class="material-icons propericon">delete</i></button>
             <button class="btn btn-xs less-pad"><i class="material-icons propericon">add</i></button>
         </div>
        </div>
        <div class="row">
          <div class="input-field col s8 m8">
            <input type="text" required>
            <label>Option 2</label>
          </div>
         <div class="input-field col s2 m2">
           <button class="btn btn-xs less-pad"><i class="material-icons propericon">delete</i></button>
           
             <button class="btn btn-xs less-pad"><i class="material-icons propericon">add</i></button>
         </div>
        </div>
      </div>
-->

    </div>

    <div class="question-repeater">
      <div class="row bold">
        <div class="input-field col s5 m5">
          <input type="text" name="question2" value="<?php echo $before['question'][1]->content;?>" required>
          <input type="hidden" name="question2id" value="<?php echo $before['question'][1]->id;?>">
          <label>Question 2</label>
        </div>
        <div class="input-field col s3 m3">
         <?php echo form_dropdown("type2",$type,set_value('type',$before['question'][1]->type));?>
       </div>
       <div class="input-field col s2 m2">
        <?php echo form_dropdown("required2",$isrequired,set_value('required2',$before['question'][1]->isrequired))?>
       </div>
      </div>
    </div>

    <div class="question-repeater">
      <div class="row bold">
        <div class="input-field col s5 m5">
          <input type="text" name="question3" value="<?php echo $before['question'][2]->content;?>" required>
          <input type="hidden" name="question3id" value="<?php echo $before['question'][2]->id;?>">
          <label>Question 3</label>
        </div>
        <div class="input-field col s3 m3">
       <?php echo form_dropdown("type3",$type,set_value('type',$before['question'][2]->type));?>
       </div>
       <div class="input-field col s2 m2">
         <?php echo form_dropdown("required3",$isrequired,set_value('required3',$before['question'][2]->isrequired))?>
       </div>
      </div>



    </div>

    <div class="question-repeater">
      <div class="row bold">
        <div class="input-field col s5 m5">
          <input type="text" name="question4" value="<?php echo $before['question'][3]->content;?>" required>
           <input type="hidden" name="question4id" value="<?php echo $before['question'][3]->id;?>">
          <label>Question 4</label>
        </div>
        <div class="input-field col s3 m3">
        <?php echo form_dropdown("type4",$type,set_value('type',$before['question'][3]->type));?>
       </div>
       <div class="input-field col s2 m2">
         <?php echo form_dropdown("required4",$isrequired,set_value('required4',$before['question'][3]->isrequired))?>
       </div>
      </div>

    </div>

    <div class="question-repeater">
      <div class="row bold">
        <div class="input-field col s5 m5">
          <input type="text" name="question5" value="<?php echo $before['question'][4]->content;?>" required>
          <input type="hidden" name="question5id" value="<?php echo $before['question'][4]->id;?>">
          <label>Question 5</label>
        </div>
        <div class="input-field col s3 m3">
        <?php echo form_dropdown("type5",$type,set_value('type',$before['question'][4]->type));?>
       </div>
       <div class="input-field col s2 m2">
        <?php echo form_dropdown("required5",$isrequired,set_value('required5',$before['question'][4]->isrequired))?>
       </div>
      </div>
    </div>
    
    <div class="question-repeater">
      <div class="row bold">
        <div class="input-field col s5 m5">
          <input type="text" name="question6" value="<?php echo $before['question'][5]->content;?>" required>
          <input type="hidden" name="question6id" value="<?php echo $before['question'][5]->id;?>">
          <label>Question 6</label>
        </div>
        <div class="input-field col s3 m3">
       <?php echo form_dropdown("type6",$type,set_value('type',$before['question'][5]->type));?>
       </div>
       <div class="input-field col s2 m2">
         <?php echo form_dropdown("required6",$isrequired,set_value('required6',$before['question'][5]->isrequired))?>
       </div>
      </div>
    </div> 
    
    <div class="question-repeater">
      <div class="row bold">
        <div class="input-field col s5 m5">
          <input type="text" name="question7" value="<?php echo $before['question'][6]->content;?>" required>
          <input type="hidden" name="question7id" value="<?php echo $before['question'][6]->id;?>">
          <label>Question 7</label>
        </div>
        <div class="input-field col s3 m3">
         <?php echo form_dropdown("type7",$type,set_value('type',$before['question'][6]->type));?>
       </div>
       <div class="input-field col s2 m2">
         <?php echo form_dropdown("required7",$isrequired,set_value('required7',$before['question'][6]->isrequired))?>
       </div>
      </div>
    </div>
      <div class="question-repeater">
      <div class="row bold">
        <div class="input-field col s5 m5">
          <input type="text" name="question8" value="<?php echo $before['question'][7]->content;?>" required>
           <input type="hidden" name="question8id" value="<?php echo $before['question'][7]->id;?>">
          <label>Question 8</label>
        </div>
        <div class="input-field col s3 m3">
        <?php echo form_dropdown("type8",$type,set_value('type',$before['question'][7]->type));?>
       </div>
       <div class="input-field col s2 m2">
        <?php echo form_dropdown("required8",$isrequired,set_value('required8',$before['question'][7]->isrequired))?>
       </div>
      </div>
    </div> 
       <div class="question-repeater">
      <div class="row bold">
        <div class="input-field col s5 m5">
          <input type="text" name="question9" value="<?php echo $before['question'][8]->content;?>" required>
          <input type="hidden" name="question9id" value="<?php echo $before['question'][8]->id;?>">
          <label>Question 9</label>
        </div>
        <div class="input-field col s3 m3">
       <?php echo form_dropdown("type9",$type,set_value('type',$before['question'][8]->type));?>
       </div>
       <div class="input-field col s2 m2">
         <?php echo form_dropdown("required9",$isrequired,set_value('required9',$before['question'][8]->isrequired))?>
       </div>
      </div>
    </div> 
     <div class="question-repeater">
      <div class="row bold">
        <div class="input-field col s5 m5">
          <input type="text" name="question10" value="<?php echo $before['question'][9]->content;?>" required>
           <input type="hidden" name="question10id" value="<?php echo $before['question'][9]->id;?>">
          <label>Question 10</label>
        </div>
        <div class="input-field col s3 m3">
       <?php echo form_dropdown("type10",$type,set_value('type',$before['question'][9]->type));?>
       </div>
       <div class="input-field col s2 m2">
        <?php echo form_dropdown("required10",$isrequired,set_value('required10',$before['question'][9]->isrequired))?>
       </div>
      </div>
    </div>
    </div>

     <div class="row mb0">
       <div class="col s12">
         <b class="brdr-bot">
           Add a Thank You Message
         </b>
       </div>
     </div>
     <div class="row">
       <div class="input-field col s12 m6">
         <input type="text" name="message" value="<?php echo $before['survey']->message;?>">
<!--         <label>Thank you message</label>-->
       </div>
     </div>

  <div class="text-center middle">
     <button class="btn waves-effect waves-light" type="submit" name="action">Save</button>
<!--     <button class="btn waves-effect waves-light" type="submit" name="action">Cancel</button>-->
 <a href="<?php echo site_url("site/viewconclusionfinalsuggestion"); ?>" class="btn waves-effect waves-light">Cancel</a>
  </div>
   </form>
 </div>
<!--
<div class="createbuttonplacement">
  <button class="btn-floating btn-large waves-effect waves-light blue darken-4"><i class="material-icons">add</i></button>
</div>
-->
