<div class="panel-body">
      <div class="row">
        <div class="col s12">
          <h5 class="padleft">Mini Survey</h5>
        </div>
      </div>
</div>

<div class="row">
   <form class="col s12" method="post" action="<?php echo site_url('site/surveysubmit');?>">

     <div class="row">
       <div class="input-field col s12 m6">
         <input type="text" name="surveyname" required>
         <label>Name Your Survey</label>
       </div>
     </div>

     <div class="row">
       <div class="input-field col s12 m6">
         <input type="text" name="surveydescription">
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
          <input type="text" name="question1" required>
          <label>Question 1</label>
        </div>
        <div class="input-field col s3 m3">
         <select required name="type1">
           <option value="" disabled>Choose question type</option>
           <option value="text" selected>Text</option>
           <option value="paragraph">Paragraph</option>
           <option value="multiple" >Multiple</option>
           <option value="dropdown">Dropdown</option>
           <option value="radio">Radio</option>
         </select>
       </div>
       <div class="input-field col s2 m2">
         <select required name="required1">
           <option value="required">Required</option>
           <option value="notrequired">Not Required</option>
         </select>
       </div>
      </div>
    </div>

    <div class="question-repeater">
      <div class="row bold">
        <div class="input-field col s5 m5">
          <input type="text" name="question2" required>
          <label>Question 2</label>
        </div>
        <div class="input-field col s3 m3">
         <select required name="type2">
           <option value="" disabled>Choose question type</option>
           <option value="text">Text</option>
           <option value="paragraph" selected>Paragraph</option>
           <option value="multiple" >Multiple</option>
           <option value="dropdown">Dropdown</option>
           <option value="radio">Radio</option>
         </select>
       </div>
       <div class="input-field col s2 m2">
         <select required name="required2">
           <option value="required">Required</option>
           <option value="notrequired">Not Required</option>
         </select>
       </div>
      </div>
    </div>

    <div class="question-repeater">
      <div class="row bold">
        <div class="input-field col s5 m5">
          <input type="text" name="question3" required>
          <label>Question 3</label>
        </div>
        <div class="input-field col s3 m3">
         <select required name="type3">
           <option value="" disabled>Choose question type</option>
           <option value="text">Text</option>
           <option value="paragraph">Paragraph</option>
           <option value="multiple" selected>Multiple</option>
           <option value="dropdown">Dropdown</option>
           <option value="radio">Radio</option>
         </select>
       </div>
       <div class="input-field col s2 m2">
         <select required name="required3">
           <option value="required">Required</option>
           <option value="notrequired">Not Required</option>
         </select>
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
          <input type="text" name="question4" required>
          <label>Question 4</label>
        </div>
        <div class="input-field col s3 m3">
         <select required name="type4">
           <option value="" disabled>Choose question type</option>
           <option value="text">Text</option>
           <option value="paragraph">Paragraph</option>
           <option value="multiple">Multiple</option>
           <option value="dropdown" selected>Dropdown</option>
           <option value="radio">Radio</option>
         </select>
       </div>
       <div class="input-field col s2 m2">
         <select required name="required4">
           <option value="required">Required</option>
           <option value="notrequired">Not Required</option>
         </select>
       </div>
      </div>

    </div>

    <div class="question-repeater">
      <div class="row bold">
        <div class="input-field col s5 m5">
          <input type="text" name="question5" required>
          <label>Question 5</label>
        </div>
        <div class="input-field col s3 m3">
         <select required name="type5">
           <option value="" disabled>Choose question type</option>
           <option value="text">Text</option>
           <option value="paragraph">Paragraph</option>
           <option value="multiple">Multiple</option>
           <option value="dropdown">Dropdown</option>
           <option value="radio" selected>Radio</option>
         </select>
       </div>
       <div class="input-field col s2 m2">
         <select required name="required5">
           <option value="required">Required</option>
           <option value="notrequired">Not Required</option>
         </select>
       </div>
      </div>
    </div>
    
    <div class="question-repeater">
      <div class="row bold">
        <div class="input-field col s5 m5">
          <input type="text" name="question6" required>
          <label>Question 6</label>
        </div>
        <div class="input-field col s3 m3">
         <select required name="type6">
           <option value="" disabled>Choose question type</option>
           <option value="text" selected>Text</option>
           <option value="paragraph">Paragraph</option>
           <option value="multiple" >Multiple</option>
           <option value="dropdown">Dropdown</option>
           <option value="radio">Radio</option>
         </select>
       </div>
       <div class="input-field col s2 m2">
         <select required name="required6">
           <option value="required">Required</option>
           <option value="notrequired">Not Required</option>
         </select>
       </div>
      </div>
    </div> 
    
    <div class="question-repeater">
      <div class="row bold">
        <div class="input-field col s5 m5">
          <input type="text" name="question7" required>
          <label>Question 7</label>
        </div>
        <div class="input-field col s3 m3">
         <select required name="type7">
           <option value="" disabled>Choose question type</option>
           <option value="text" selected>Text</option>
           <option value="paragraph">Paragraph</option>
           <option value="multiple" >Multiple</option>
           <option value="dropdown">Dropdown</option>
           <option value="radio">Radio</option>
         </select>
       </div>
       <div class="input-field col s2 m2">
         <select required name="required7">
           <option value="required">Required</option>
           <option value="notrequired">Not Required</option>
         </select>
       </div>
      </div>
    </div>
      <div class="question-repeater">
      <div class="row bold">
        <div class="input-field col s5 m5">
          <input type="text" name="question8" required>
          <label>Question 8</label>
        </div>
        <div class="input-field col s3 m3">
         <select required name="type8">
           <option value="" disabled>Choose question type</option>
           <option value="text" selected>Text</option>
           <option value="paragraph">Paragraph</option>
           <option value="multiple" >Multiple</option>
           <option value="dropdown">Dropdown</option>
           <option value="radio">Radio</option>
         </select>
       </div>
       <div class="input-field col s2 m2">
         <select required name="required8">
           <option value="required">Required</option>
           <option value="notrequired">Not Required</option>
         </select>
       </div>
      </div>
    </div> 
       <div class="question-repeater">
      <div class="row bold">
        <div class="input-field col s5 m5">
          <input type="text" name="question9" required>
          <label>Question 9</label>
        </div>
        <div class="input-field col s3 m3">
         <select required name="type9">
           <option value="" disabled>Choose question type</option>
           <option value="text" selected>Text</option>
           <option value="paragraph">Paragraph</option>
           <option value="multiple" >Multiple</option>
           <option value="dropdown">Dropdown</option>
           <option value="radio">Radio</option>
         </select>
       </div>
       <div class="input-field col s2 m2">
         <select required name="required9">
           <option value="required">Required</option>
           <option value="notrequired">Not Required</option>
         </select>
       </div>
      </div>
    </div> 
     <div class="question-repeater">
      <div class="row bold">
        <div class="input-field col s5 m5">
          <input type="text" name="question10" required>
          <label>Question 10</label>
        </div>
        <div class="input-field col s3 m3">
         <select required name="type10">
           <option value="" disabled>Choose question type</option>
           <option value="text" selected>Text</option>
           <option value="paragraph">Paragraph</option>
           <option value="multiple" >Multiple</option>
           <option value="dropdown">Dropdown</option>
           <option value="radio">Radio</option>
         </select>
       </div>
       <div class="input-field col s2 m2">
         <select required name="required10">
           <option value="required">Required</option>
           <option value="notrequired">Not Required</option>
         </select>
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
         <input type="text">
         <label>Thank you message</label>
       </div>
     </div>

  <div class="text-center middle">
     <button class="btn waves-effect waves-light" type="submit" name="action">Save</button>
<!--     <button class="btn waves-effect waves-light" type="submit" name="action">Send</button>-->
  </div>
   </form>
 </div>
<!--
<div class="createbuttonplacement">
  <button class="btn-floating btn-large waves-effect waves-light blue darken-4"><i class="material-icons">add</i></button>
</div>
-->
