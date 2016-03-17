<div class="panel-body">
    <div class="row">
        <div class="col s12">
            <h5 class="padleft">Mini Survey</h5>
        </div>
    </div>
</div>

<div class="row">
    <form class="col s12" method="post">
        <!--    <form class="col s12" method="post" action="<?php echo site_url('site/newsurveysubmit');?>">-->

        <div class="row">
            <div class="input-field col s12 m6">
                <input type="text" name="surveyname">
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
                        <input type="text" name="question1" id="question1" onkeypress="checkforquestion('question1','type1','required1','option1')">
                        <label>Question 1</label>
                    </div>
                    <div class="input-field col s3 m3" onchange="checkforquestion('question1','type1','required1','option1')">
                        <?php echo form_dropdown("type1",$type,set_value('type')," id='type1'");?>
                    </div>
                    <div class="input-field col s2 m2" onchange="checkforquestion('question1','type1','required1','option1')">
                        <?php echo form_dropdown("required1",$isrequired,set_value('required1'),"id='required1'")?>

                    </div>
                </div>
                <div class="option1">
                    <div class="row">
                        <div class="input-field col s8 m8">
                            <input type="text" name="option1" id="option1">
                            <label>Option 1</label>
                        </div>
                        <div class="input-field col s2 m2">

                            <div onclick="hidedelete('option1')" class="btn btn-xs less-pad"><i class="material-icons propericon">delete</i></div>
                            <div onclick="showoption('option1','option2')" class="btn btn-xs less-pad"><i class="material-icons propericon">add</i></div>
                        </div>
                    </div>

                </div>
                <div class="option2">
                    <div class="row">
                        <div class="input-field col s8 m8">
                            <input type="text" name="option2" id="option2">
                            <label>Option 2</label>
                        </div>
                        <div class="input-field col s2 m2">
                            <div onclick="hidedelete('option2')" class="btn btn-xs less-pad"><i class="material-icons propericon">delete</i></div>
                            <div onclick="showoption('option2','option3')" class="btn btn-xs less-pad"><i class="material-icons propericon">add</i></div>
                        </div>
                    </div>

                </div>
                <div class="option3">
                    <div class="row">
                        <div class="input-field col s8 m8">
                            <input type="text" name="option3" id="option3">
                            <label>Option 3</label>
                        </div>
                        <div class="input-field col s2 m2">
                            <div onclick="hidedelete('option3')" class="btn btn-xs less-pad"><i class="material-icons propericon">delete</i></div>
                            <div onclick="showoption('option3','option4')" class="btn btn-xs less-pad"><i class="material-icons propericon">add</i></div>
                        </div>
                    </div>

                </div>
                <div class="option4">
                    <div class="row">
                        <div class="input-field col s8 m8">
                            <input type="text" name="option4" id="option4">
                            <label>Option 4</label>
                        </div>
                        <div class="input-field col s2 m2">
                            <div onclick="hidedelete('option4')" class="btn btn-xs less-pad"><i class="material-icons propericon">delete</i></div>
                            <div onclick="showoption('option4','option5')" class="btn btn-xs less-pad"><i class="material-icons propericon">add</i></div>
                        </div>
                    </div>

                </div>
                <div class="option5">
                    <div class="row">
                        <div class="input-field col s8 m8">
                            <input type="text" name="option5" id="option5">
                            <label>Option 5</label>
                        </div>
                        <div class="input-field col s2 m2">
                            <div onclick="hidedelete('option5')" class="btn btn-xs less-pad"><i class="material-icons propericon">delete</i></div>
                            <div onclick="showoption('option5','option6')" class="btn btn-xs less-pad"><i class="material-icons propericon">add</i></div>
                        </div>
                    </div>

                </div>
                <div class="option6">
                    <div class="row">
                        <div class="input-field col s8 m8">
                            <input type="text" name="option6" id="option6">
                            <label>Option 6</label>
                        </div>
                        <div class="input-field col s2 m2">
                            <div onclick="hidedelete('option6')" class="btn btn-xs less-pad"><i class="material-icons propericon">delete</i></div>
                            <div onclick="showoption('option6','option7')" class="btn btn-xs less-pad"><i class="material-icons propericon">add</i></div>
                        </div>
                    </div>

                </div>
                <div class="option7">
                    <div class="row">
                        <div class="input-field col s8 m8">
                            <input type="text" name="option7" id="option7">
                            <label>Option 7</label>
                        </div>
                        <div class="input-field col s2 m2">
                            <div onclick="hidedelete('option7')" class="btn btn-xs less-pad"><i class="material-icons propericon">delete</i></div>
                            <div onclick="showoption('option7','option8')" class="btn btn-xs less-pad"><i class="material-icons propericon">add</i></div>
                        </div>
                    </div>

                </div>
                <div class="option8">
                    <div class="row">
                        <div class="input-field col s8 m8">
                            <input type="text" name="option8" id="option8">
                            <label>Option 8</label>
                        </div>
                        <div class="input-field col s2 m2">
                            <div onclick="hidedelete('option8')" class="btn btn-xs less-pad"><i class="material-icons propericon">delete</i></div>
                            <div onclick="showoption('option8','option9')" class="btn btn-xs less-pad"><i class="material-icons propericon">add</i></div>
                        </div>
                    </div>

                </div>
                <div class="option9">
                    <div class="row">
                        <div class="input-field col s8 m8">
                            <input type="text" name="option9" id="option9">
                            <label>Option 9</label>
                        </div>
                        <div class="input-field col s2 m2">
                            <div onclick="hidedelete('option9')" class="btn btn-xs less-pad"><i class="material-icons propericon">delete</i></div>
                            <div onclick="showoption('option9','option10')" class="btn btn-xs less-pad"><i class="material-icons propericon">add</i></div>
                        </div>
                    </div>

                </div>
                <div class="option10">
                    <div class="row">
                        <div class="input-field col s8 m8">
                            <input type="text" name="option10" id="option10">
                            <label>Option 10</label>
                        </div>
                        <div class="input-field col s2 m2">
                            <div onclick="hidedelete('option10')" class="btn btn-xs less-pad"><i class="material-icons propericon">delete</i></div>
                            <div onclick="showoption('option10','option0')" class="btn btn-xs less-pad"><i class="material-icons propericon">add</i></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="question-repeater">
                <div class="row bold">
                    <div class="input-field col s5 m5">
                        <input type="text" name="question2" id="">
                        <label>Question 2</label>
                    </div>
                    <div class="input-field col s3 m3">
                        <?php echo form_dropdown("type2",$type,set_value('type'));?>
                    </div>
                    <div class="input-field col s2 m2">
                        <select name="required2">
                            <option value="1">Required</option>
                            <option value="2">Not Required</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="question-repeater">
                <div class="row bold">
                    <div class="input-field col s5 m5">
                        <input type="text" name="question3">
                        <label>Question 3</label>
                    </div>
                    <div class="input-field col s3 m3">
                        <?php echo form_dropdown("type3",$type,set_value('type'));?>
                    </div>
                    <div class="input-field col s2 m2">
                        <select name="required3">
                            <option value="1">Required</option>
                            <option value="2">Not Required</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="question-repeater">
                <div class="row bold">
                    <div class="input-field col s5 m5">
                        <input type="text" name="question4">
                        <label>Question 4</label>
                    </div>
                    <div class="input-field col s3 m3">
                        <?php echo form_dropdown("type4",$type,set_value('type'));?>
                    </div>
                    <div class="input-field col s2 m2">
                        <select name="required4">
                            <option value="1">Required</option>
                            <option value="2">Not Required</option>
                        </select>
                    </div>
                </div>

            </div>

            <div class="question-repeater">
                <div class="row bold">
                    <div class="input-field col s5 m5">
                        <input type="text" name="question5">
                        <label>Question 5</label>
                    </div>
                    <div class="input-field col s3 m3">
                        <?php echo form_dropdown("type5",$type,set_value('type'));?>
                    </div>
                    <div class="input-field col s2 m2">
                        <select name="required5">
                            <option value="1">Required</option>
                            <option value="2">Not Required</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="question-repeater">
                <div class="row bold">
                    <div class="input-field col s5 m5">
                        <input type="text" name="question6">
                        <label>Question 6</label>
                    </div>
                    <div class="input-field col s3 m3">
                        <?php echo form_dropdown("type6",$type,set_value('type'));?>
                    </div>
                    <div class="input-field col s2 m2">
                        <select name="required6">
                            <option value="1">Required</option>
                            <option value="2">Not Required</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="question-repeater">
                <div class="row bold">
                    <div class="input-field col s5 m5">
                        <input type="text" name="question7">
                        <label>Question 7</label>
                    </div>
                    <div class="input-field col s3 m3">
                        <?php echo form_dropdown("type7",$type,set_value('type'));?>
                    </div>
                    <div class="input-field col s2 m2">
                        <select name="required7">
                            <option value="1">Required</option>
                            <option value="2">Not Required</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="question-repeater">
                <div class="row bold">
                    <div class="input-field col s5 m5">
                        <input type="text" name="question8">
                        <label>Question 8</label>
                    </div>
                    <div class="input-field col s3 m3">
                        <?php echo form_dropdown("type8",$type,set_value('type'));?>
                    </div>
                    <div class="input-field col s2 m2">
                        <select name="required8">
                            <option value="1">Required</option>
                            <option value="2">Not Required</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="question-repeater">
                <div class="row bold">
                    <div class="input-field col s5 m5">
                        <input type="text" name="question9">
                        <label>Question 9</label>
                    </div>
                    <div class="input-field col s3 m3">
                        <?php echo form_dropdown("type9",$type,set_value('type'));?>
                    </div>
                    <div class="input-field col s2 m2">
                        <select name="required9">
                            <option value="1">Required</option>
                            <option value="2">Not Required</option>
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
                        <?php echo form_dropdown("type10",$type,set_value('type'));?>
                    </div>
                    <div class="input-field col s2 m2">
                        <select name="required10">
                            <option value="1">Required</option>
                            <option value="2">Not Required</option>
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
                <input type="text" name="message">
                <label>Thank you message</label>
            </div>
        </div>

        <div class="text-center middle">
            <button class="btn waves-effect waves-light" type="submit" name="action">Save</button>
            <!--     <button class="btn waves-effect waves-light" type="submit" name="action">Send</button>-->
        </div>
    </form>
</div>
<script>
    $(document).ready(function () {
        for (var i = 1; i <= 100; i++) {
            $(".option" + i).hide();
        }
        $(".add1").hide();
    });

    // if question is present show option 1
    function checkforquestion(question, type, required, option) {
        console.log($("#" + question).val());
        if ($("#" + question).val() != '' && $("#" + type).val() != '' && $("#" + required).val() != '') {
            $("." + option).show();
        } else {
            $("." + option).hide();
        }
    }

    // show option option 2
    function showoption(option1, option2) {
        console.log("in show option");
        if ($("#" + option1).val() != '') {
            console.log("previous not empty");
            console.log($("#" + option1).val());
            console.log($("#" + option2).val());
            $("." + option2).show();
        } else {
            console.log("previous is empty");
            $("." + option2).hide();
        }

    }

    function hidedelete(option) {
        $("." + option).hide();
        $('#' +option).val('');
    }
</script>