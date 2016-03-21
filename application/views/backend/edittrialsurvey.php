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
            <!--           // questions1   -> $option[0]-->

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
                        <input type="text" name="question1" value="<?php echo $before['question'][0]->content;?>" id="question1" onkeypress="checkforquestion('question1','type1','required1','option1')">
                        <input type="hidden" name="question1id" value="<?php echo $before['question'][0]->id;?>">
                        <label>Question 1</label>
                    </div>
                    <div class="input-field col s3 m3" onchange="checkforquestion('question1','type1','required1','option1')">
                        <?php echo form_dropdown("type1",$type,set_value('type',$before['question'][0]->type),"id='type1'");?>
                    </div>
                    <div class="input-field col s2 m2" onchange="checkforquestion('question1','type1','required1','option1')">
                        <?php echo form_dropdown("required1",$isrequired,set_value('required1',$before['question'][0]->isrequired),"id='required1'")?>
                    </div>
                </div>
                <!--                question 1 option start-->
                <div class="option1">
                    <div class="row">
                        <div class="input-field col s8 m8">
                            <input type="text" name="option1" id="option1" value=" <?php echo $option[0]->options[0]->title;?>">
                            <input type="hidden" name="option1id" id="option1id" value=" <?php echo $option[0]->options[0]->id;?>">
                            <label>Option</label>
                        </div>
                        <div class="input-field col s2 m2">
                            <div onclick="hidedelete('option1')" class="btn btn-xs less-pad">
                                <i class="material-icons propericon">delete</i>
                            </div>
                            <div onclick="showoption('option1','option2')" class="btn btn-xs less-pad">
                                <i class="material-icons propericon">add</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="option2">
                    <div class="row">
                        <div class="input-field col s8 m8">
                            <input type="text" name="option2" id="option2" value=" <?php echo $option[0]->options[1]->title;?>">
                            <input type="text" name="option2" id="option2" value=" <?php echo $option[0]->options[1]->title;?>">
                            <label>Option</label>
                        </div>
                        <div class="input-field col s2 m2">
                            <div onclick="hidedelete('option2')" class="btn btn-xs less-pad">
                                <i class="material-icons propericon">delete</i>
                            </div>
                            <div onclick="showoption('option2','option3')" class="btn btn-xs less-pad">
                                <i class="material-icons propericon">add</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="option3">
                    <div class="row">
                        <div class="input-field col s8 m8">
                            <input type="text" name="option3" id="option3" value=" <?php echo $option[0]->options[2]->title;?>">
                            <label>Option</label>
                        </div>
                        <div class="input-field col s2 m2">
                            <div onclick="hidedelete('option3')" class="btn btn-xs less-pad">
                                <i class="material-icons propericon">delete</i>
                            </div>
                            <div onclick="showoption('option3','option4')" class="btn btn-xs less-pad">
                                <i class="material-icons propericon">add</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="option4">
                    <div class="row">
                        <div class="input-field col s8 m8">
                            <input type="text" name="option4" id="option4" value=" <?php echo $option[0]->options[3]->title;?>">
                            <label>Option</label>
                        </div>
                        <div class="input-field col s2 m2">
                            <div onclick="hidedelete('option4')" class="btn btn-xs less-pad">
                                <i class="material-icons propericon">delete</i>
                            </div>
                            <div onclick="showoption('option4','option5')" class="btn btn-xs less-pad">
                                <i class="material-icons propericon">add</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="option5">
                    <div class="row">
                        <div class="input-field col s8 m8">
                            <input type="text" name="option5" id="option5" value=" <?php echo $option[0]->options[4]->title;?>">
                            <label>Option</label>
                        </div>
                        <div class="input-field col s2 m2">
                            <div onclick="hidedelete('option5')" class="btn btn-xs less-pad">
                                <i class="material-icons propericon">delete</i>
                            </div>
                            <div onclick="showoption('option5','option6')" class="btn btn-xs less-pad">
                                <i class="material-icons propericon">add</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="option6">
                    <div class="row">
                        <div class="input-field col s8 m8">
                            <input type="text" name="option6" id="option6" value=" <?php echo $option[0]->options[5]->title;?>">
                            <label>Option</label>
                        </div>
                        <div class="input-field col s2 m2">
                            <div onclick="hidedelete('option6')" class="btn btn-xs less-pad">
                                <i class="material-icons propericon">delete</i>
                            </div>
                            <div onclick="showoption('option6','option7')" class="btn btn-xs less-pad">
                                <i class="material-icons propericon">add</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="option7">
                    <div class="row">
                        <div class="input-field col s8 m8">
                            <input type="text" name="option7" id="option7" value=" <?php echo $option[0]->options[6]->title;?>">
                            <label>Option</label>
                        </div>
                        <div class="input-field col s2 m2">
                            <div onclick="hidedelete('option7')" class="btn btn-xs less-pad">
                                <i class="material-icons propericon">delete</i>
                            </div>
                            <div onclick="showoption('option7','option8')" class="btn btn-xs less-pad">
                                <i class="material-icons propericon">add</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="option8">
                    <div class="row">
                        <div class="input-field col s8 m8">
                            <input type="text" name="option8" id="option8" value=" <?php echo $option[0]->options[7]->title;?>">
                            <label>Option</label>
                        </div>
                        <div class="input-field col s2 m2">
                            <div onclick="hidedelete('option8')" class="btn btn-xs less-pad">
                                <i class="material-icons propericon">delete</i>
                            </div>
                            <div onclick="showoption('option8','option9')" class="btn btn-xs less-pad">
                                <i class="material-icons propericon">add</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="option9">
                    <div class="row">
                        <div class="input-field col s8 m8">
                            <input type="text" name="option9" id="option9" value=" <?php echo $option[0]->options[8]->title;?>">
                            <label>Option</label>
                        </div>
                        <div class="input-field col s2 m2">
                            <div onclick="hidedelete('option9')" class="btn btn-xs less-pad">
                                <i class="material-icons propericon">delete</i>
                            </div>
                            <div onclick="showoption('option9','option10')" class="btn btn-xs less-pad">
                                <i class="material-icons propericon">add</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="option10">
                    <div class="row">
                        <div class="input-field col s8 m8">
                            <input type="text" name="option10" id="option10" value=" <?php echo $option[0]->options[9]->title;?>">
                            <label>Option</label>
                        </div>
                        <div class="input-field col s2 m2">
                            <div onclick="hidedelete('option10')" class="btn btn-xs less-pad">
                                <i class="material-icons propericon">delete</i>
                            </div>
                            <div onclick="showoption('option10','option11')" class="btn btn-xs less-pad">
                                <i class="material-icons propericon">add</i>
                            </div>
                        </div>
                    </div>
                </div>
                <!--                question 1 option end-->
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
            <a href="<?php echo site_url(" site/viewconclusionfinalsuggestion "); ?>" class="btn waves-effect waves-light">Cancel</a>
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
        for (var i = 1; i <= 100; i++) {
            $(".option" + i).hide();
        }
        $(".add1").hide();
        var url = window.location.href;
        var id = /id=(\d+)/.exec(url)[1];
        console.log(id);
        $.get("<?php echo base_url(); ?>index.php/site/getsinglesurveydata?id=" + id, function(data, status) {
            var data = $.parseJSON(data);
            console.log(data.length);
            // show question 1 option
             for (var j = 1; j < data[0].options.length; j++) {
                 $(".option"+j).show();
                } 
            // show question 2 option
             for (var j = 11; j < data[1].options.length; j++) {
                 $(".option"+j).show();
                }
            // show question 3 option
             for (var j = 21; j < data[2].options.length; j++) {
                 $(".option"+j).show();
                }
            // show question 4 option
             for (var j = 31; j < data[3].options.length; j++) {
                 $(".option"+j).show();
                }
            // show question 5 option
             for (var j = 41; j < data[4].options.length; j++) {
                 $(".option"+j).show();
                }
            // show question 6 option
             for (var j = 51; j < data[5].options.length; j++) {
                 $(".option"+j).show();
                } 
            // show question 7 option
             for (var j = 61; j < data[6].options.length; j++) {
                 $(".option"+j).show();
                }
            // show question 8 option
             for (var j = 71; j < data[7].options.length; j++) {
                 $(".option"+j).show();
                }
            // show question 9 option
             for (var j = 81; j < data[8].options.length; j++) {
                 $(".option"+j).show();
                }
            // show question 10 option
             for (var j = 91; j < data[9].options.length; j++) {
                 $(".option"+j).show();
                }
            
        });

    });

    // if question is present show option 1
    function checkforquestion(question, type, required, option) {
        console.log($("#" + question).val());
        if ($("#" + question).val() != '' && $("#" + type).val() != '' && $("#" + required).val() != '' && $("#" + type).val() != 1 && $("#" + type).val() != 2) {
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
        $('#' + option).val('');
    }

</script>
