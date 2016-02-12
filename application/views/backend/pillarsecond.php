<form class="col s12" method="post" action="<?php echo site_url('site/getweightageviewpillar');?>" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col s6 ">
                <div class="padtop">

                    <h5 class="padleft"> Weightages</h5>
                    <div class="row">
                        <div class="all-range">
                            <div class="col s10">
                                <div class="left-side">
                                    <div class="progress-bar">
                                        <p>Work Life Blend</p>
                                        <div class="input-border">
                                            <p class="range-field">
                                                <input type="range" name="range" id="range" min="0" max="100" value="<?php echo $before[0]->weight?>" />
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col s2">
                                <div class="progress-bar out-top">
                                    <output for="range" class="output">80</output>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="all-range">
                            <div class="col s10">
                                <div class="left-side">

                                    <div class="progress-bar">
                                        <p>Employee Engagement</p>

                                        <div class="input-border">
                                            <p class="range-field">
                                                <input type="range" name="rangeone" id="rangeone" min="0" max="100" value="<?php echo $before[1]->weight?>" />
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s2">
                                <div class="progress-bar out-top">
                                    <output for="rangeone" class="output"></output>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="all-range">
                            <div class="col s10">
                                <div class="left-side">

                                    <div class="progress-bar">
                                        <p>Driving Force</p>


                                        <div class="input-border">
                                            <p class="range-field">
                                                <input type="range" name="rangetwo" id="rangetwo" min="0" max="100" value="<?php echo $before[2]->weight?>" />
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col s2">
                                <div class="progress-bar out-top">
                                    <output for="rangetwo" class="output"></output>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="all-range">
                            <div class="col s10">
                                <div class="left-side">

                                    <div class="progress-bar">
                                        <p>Health of an Individual</p>


                                        <div class="input-border">
                                            <p class="range-field">
                                                <input type="range" name="rangethree" id="rangethree" min="0" max="100" value="<?php echo $before[3]->weight?>" />
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col s2">
                                <div class="progress-bar out-top">
                                    <output for="rangethree" class="output"></output>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="all-range">
                            <div class="col s10">
                                <div class="left-side">

                                    <div class="progress-bar">
                                        <p>Interpersonal Relationships at Work</p>


                                        <div class="input-border">
                                            <p class="range-field">
                                                <input type="range" name="rangefour" id="rangefour" min="0" value="<?php echo $before[4]->weight?>" max="100" />
                                            </p>
                                        </div>
</form>
</div>
</div>
</div>
<div class="col s2">
    <div class="progress-bar out-top">
        <output for="rangefour" class="output"></output>
    </div>
</div>
</div>
</div>
<?php if($checkpackage==4){?>
<div class="row">
    <div class="all-range">
        <div class="col s10">
            <div class="left-side">

                <div class="progress-bar">


                    <p class="display-inline">
                        <?php echo $lastpillardetail->name;?>
                    </p>
                    <div class="left-s">
                        <div class="box-tp displ-inline">
                            <a href='<?php echo site_url('site/editpillar?id=11');?>'>Edit</a>
                        </div>
                    </div>
                    <form action="#">
                        <div class="input-border">
                            <p class="range-field">
                                <input type="range" name="rangeeleven" id="rangeeleven" min="0" max="100" value="<?php echo $before[10]->weight;?>"/>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col s2">
            <div class="progress-bar out-top">
                <output for="rangeeleven" class="output"></output>
            </div>
        </div>
    </div>
</div>
<?php }?>
<div class="row">
    <div class="all-range">
        <div class="col s2">
            <div class="progress-bar out-top" style="margin:0px;">
                <!--                                    <output for="rangeavg" class="output">67.5</output>-->
                <output for="rangeavg" class="output">
                    <?php echo $showavg;?>
                </output>
            </div>
        </div>
        <div class="col s10">
            <div class="left-side">
                <div class="progress-bar">
                    <p class="pt7">Out Of 100% (Reach 100% to Proceed)</p>

                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>

<div class="col s6 ">
    <div class="padtop">

        <h5 class="padleft"></h5>
        <div class="row">

            <div class="all-range">
                <div class="col s10">
                    <div class="left-side">

                        <div class="progress-bar">
                            <p>Rewards and Recognition</p>


                            <div class="input-border">
                                <p class="range-field">
                                    <input type="range" name="rangefive" id="rangefive" min="0" value="<?php echo $before[5]->weight?>" max="100" />
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col s2">
                    <div class="progress-bar out-top">
                        <output for="rangefive" class="output"></output>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="all-range">
                <div class="col s10">
                    <div class="left-side">

                        <div class="progress-bar">
                            <p>Sense of Ownership</p>


                            <div class="input-border">
                                <p class="range-field">
                                    <input type="range" name="rangesix" id="rangesix" min="0" max="100" value="<?php echo $before[6]->weight;?>" />
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col s2">
                    <div class="progress-bar out-top">
                        <output for="rangesix" class="output"></output>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="all-range">
                <div class="col s10">
                    <div class="left-side">

                        <div class="progress-bar">
                            <p>Work Environment</p>


                            <div class="input-border">
                                <p class="range-field">
                                    <input type="range" name="rangeseven" id="rangeseven" min="0" max="100" value="<?php echo $before[7]->weight?>" />
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col s2">
                    <div class="progress-bar out-top">
                        <output for="rangeseven" class="output"></output>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="all-range">
                <div class="col s10">
                    <div class="left-side">

                        <div class="progress-bar">
                            <p>Job Security</p>


                            <div class="input-border">
                                <p class="range-field">
                                    <input type="range" name="rangeeight" id="rangeeight" min="0" max="100" value="<?php echo $before[8]->weight?>" />
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col s2">
                    <div class="progress-bar out-top">
                        <output for="rangeeight" class="output"></output>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="all-range">
                <div class="col s10">
                    <div class="left-side">

                        <div class="progress-bar">
                            <p>Alignment</p>


                            <div class="input-border">
                                <p class="range-field">
                                    <input type="range" name="rangenine" id="rangenine" min="0" max="100" value="<?php echo $before[9]->weight?>" />
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col s2">
                    <div class="progress-bar out-top">
                        <output for="rangenine" class="output"></output>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt100">
        <div class="col s4">
            <!--                <a class="blue-btn">Customize The <br> Pillar weights</a>-->

            <div class="blue-btn custm-btn">
                <p>Customize The</p>
                <p>Pillar weights</p>
            </div>

        </div>
        <div class="col s4 text-center">
            <div class="">
                <button type="submit" class="waves-effect waves-light btn blue-btn">OK</button>
            </div>
        </div>
         <?php if($checkpackage==4){?>
          <a href="<?php echo site_url('site/viewpillarquestion');?>">
        <div class="col s4">
            <div class="blue-btn custm-btn">
                <p>Go to </p>
                <p>Question</p>
            </div>
        </div>
        </a>
<?php }?>
    </div>
</div>
</div>

</div>
</form>
<script>
    $(document).ready(function() {
        $("[name=range]").on("change", function() {
            $("[for=range]").val(this.value + "%");
        }).trigger("change");

        $("[name=rangeone]").on("change", function() {
            $("[for=rangeone]").val(this.value + "%");
        }).trigger("change");

        $("[name=rangetwo]").on("change", function() {
            $("[for=rangetwo]").val(this.value + "%");
        }).trigger("change");

        $("[name=rangethree]").on("change", function() {
            $("[for=rangethree]").val(this.value + "%");
        }).trigger("change");

        $("[name=rangefour]").on("change", function() {
            $("[for=rangefour]").val(this.value + "%");
        }).trigger("change");

        $("[name=rangefive]").on("change", function() {
            $("[for=rangefive]").val(this.value + "%");
        }).trigger("change");

        $("[name=rangesix]").on("change", function() {
            $("[for=rangesix]").val(this.value + "%");
        }).trigger("change");

        $("[name=rangeseven]").on("change", function() {
            $("[for=rangeseven]").val(this.value + "%");
        }).trigger("change");

        $("[name=rangeeight]").on("change", function() {
            $("[for=rangeeight]").val(this.value + "%");
        }).trigger("change");

        $("[name=rangenine]").on("change", function() {
            $("[for=rangenine]").val(this.value + "%");
        }).trigger("change");

        $("[name=rangeavg]").on("change", function() {
            $("[for=rangeavg]").val(this.value + "%");
        }).trigger("change"); 
        $("[name=rangeeleven]").on("change", function() {
            $("[for=rangeeleven]").val(this.value + "%");
        }).trigger("change");
    });

</script>
