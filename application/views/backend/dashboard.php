<!--
<script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js'); ?>" type="text/javascript"></script>

<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/highcharts-3d.js"></script>
-->
<!--<div id="container" style="height: 400px"></div>-->
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<span class="filprop"><u>Filter By :-</u></span>
<button class="btn btn-primary waves-effect waves-light blue darken-4 right" onclick="clearSelection()">Clear Selection</button>
<form method="post" action="<?php echo site_url('site/getdatabyfiltering');?>">

    <div class="cf">
<!--        <button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>-->

        <!--        <a href="#" class="blue darken-4 btn waves-effect waves-light">CLear Selection</a>-->
    </div>
    <div class="row selectproper">
        <div class="col s12 m3">
            <select id="1" name="gender" onchange="checkfortwo(1);"><?php  foreach($gender as $key => $value) {?>
                    <option value=<?php echo $key; ?>><?php echo $value; ?>
                    </option>
                    <?php }?>
            </select>
            <label>Gender</label>
        </div>
        <div class="col s12 m3">
            <select id="2" name="salary" onchange="checkfortwo(2);">
                <option value="">Choose Salary</option>
                <option value="Below 2">Below 2L</option>
                <option value="2-4">2L-4L</option>
                <option value="5-7">5L-7L</option>
                <option value="8-10">8L-10L</option>
                <option value="11-13">11L-13L</option>
                <option value="14-16">14L-16L</option>
                <option value="17-19">17L-19L</option>
                <option value="19+">19L+</option>
            </select>
            <label>Salary</label>
        </div>
        <div class="col s12 m3">
            <select id="3" name="maritalstatus" onchange="checkfortwo(3);">
                <?php  foreach($maritalstatus as $key => $value) {?>
                    <option value="<?php echo $key; ?>"><?php echo $value; ?>
                    </option>
                    <?php }?>
            </select>
            <label>Marital Status</label>
        </div>
        <div class="col s12 m3">
            <select id="4" name="branch" onchange="checkfortwo(4);">
                <?php  foreach($branch as $key => $value) {?>
                    <option value="<?php echo $key; ?>"><?php echo $value; ?>
                            <?php }?>
            </select>
            <label>Branch</label>
        </div>
    </div>
    <div class="row selectproper">
        <div class="col s12 m3">
            <select id="5" name="department" onchange="checkfortwo(5);">
                <?php  foreach($department as $key => $value) {?>
                    <option value="<?php echo $key; ?>"><?php echo $value; ?>
                    </option>
                    <?php }?>
            </select>
            <label>Department</label>
        </div>
        <div class="col s12 m3">
            <select id="6" name="designation" onchange="checkfortwo(6);">
                <?php  foreach($designation as $key => $value) {?>
                    <option value="<?php echo $key; ?>"><?php echo $value; ?>
                    </option>
                    <?php }?>
            </select>
            <label>Designation</label>
        </div>
        <div class="col s12 m3">
            <select id="7" name="spanofcontrol" onchange="checkfortwo(7);">
                <option value="">Choose Span of control</option>
                <option value="0-5">0-5</option>
                <option value="6-10">6-10</option>
                <option value="11-15">11-15</option>
                <option value="16-20">16-20</option>
                <option value="20-25">20-25</option>
                <option value="25+">25+</option>
            </select>
            <label>Span of Control</label>
        </div>
        <div class="col s12 m3">
            <select id="8" name="experience" onchange="checkfortwo(8);">
                <option value="">Choose Experience</option>
                <option value="0-2">0-2</option>
                <option value="3-5">3-5</option>
                <option value="6-8">6-8</option>
                <option value="8+">8+</option>
            </select>
            <label>Experience</label>
        </div>
    </div>
</form>
<div class="row">
<div class="col s12">
    <div id="nodata" style="display:none;">No Data Found</div>

<div class="well" style="text-align: left;background-color: white;color:black;width:275px;">
    <span style="font-size: 20px;"><b>Charts of Recent Test :-</b></span>
</div>
    </div>
</div>


<?php 
        for($i=0;$i<count($weightgraph);$i++)
        { 
        ?>
    <div id="container<?php echo $i; ?>"></div>
    <!--<div id="container1"></div>-->
    <?php } ?>

        <script>
            $(function () {
                <?php
if(empty($weightgraph))
{
    ?>
                $('#nodata').show();
                <?php
}
        for($i=0;$i<count($weightgraph);$i++)
        { 
        ?>
                $('#container<?php echo $i; ?>').highcharts({
                    credits: {
                        enabled: false
                    },
                    chart: {
                        type: 'column',
                        //                options3d: {
                        //                    enabled: true,
                        //                    alpha: 15,
                        //                    beta: 15,
                        //                    depth: 50
                        //                }
                    },
                    title: {
                        text: 'Pillar-Wise Average of <?php echo $weightgraph[$i][0]->testname;?>'
                    },
                    xAxis: {
                        categories: [
                <?php
                    foreach($weightgraph[$i] as $key=>$value)
                    {
                        if($key==0)
                        {
                        echo "'$value->name'";
                        }
                        else
                        {
                        echo ","."'$value->name'";
                        }
                    }
                    
                    ?>
            ],
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Score'
                        }
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                        name: 'Pillar',
                        data: [
                <?php
                    foreach($weightgraph[$i] as $key=>$value)
                    {
                        if($key==0)
                        {
                        echo "$value->weight";
                        }
                        else
                        {
                        echo ","."$value->weight";
                        }
                    }
                    ?>
                ]

        }, {
                        name: 'Expected',
                        data: [
                <?php
                    foreach($weightgraph[$i] as $key=>$value)
                    {
                        if($key==0)
                        {
                        echo "$value->testexpectedweight";
                        }
                        else
                        {
                        echo ","."$value->testexpectedweight";
                        }
                    }
                    ?>
                ]

        }, {
                        name: 'Actual',
                        data: [
                <?php
                    foreach($weightgraph[$i] as $key=>$value)
                    {
                        if($key==0)
                        {
                        echo $value->pillaraveragevalues;
                        }
                        else
                        {
                        echo ",".$value->pillaraveragevalues;
                        }
                    }
                    ?>
                ]

        }]
                });
                <?php } ?>
            });

            var selected = [];

            function checkfortwo(val) {
                
                console.log(val);
                if (selected.length <= 1) {
                    selected.push(val);
                    console.log(selected);
                    if (selected.length == 2) {
                        console.log("in if");
                        for (var j = 1; j <= 8; j++) {
                            if (selected.indexOf(j) == -1) {
                                console.log("index of");
                                $('#' + j).attr("disabled", 'disabled');
                                $('select').material_select();
                            }
                        }
                       


                    }
                }
                 $(document).ready(function () {
                            var $gender = $("select[name=gender]").val();
                            var $salary = $("select[name=salary]").val();
                            var $maritalstatus = $("select[name=maritalstatus]").val();
                            var $branch = $("select[name=branch]").val();
                            var $designation = $("select[name=designation]").val();
                            var $department = $("select[name=department]").val();
                            var $spanofcontrol = $("select[name=spanofcontrol]").val();
                            var $experience = $("select[name=experience]").val();
                            var new_base_url = "<?php echo site_url(); ?>";
                            $.get(new_base_url + '/site/getdatabyfiltering', {
                                gender: $gender,
                                salary: $salary,
                                maritalstatus: $maritalstatus,
                                branch: $branch,
                                designation: $designation,
                                department: $department,
                                spanofcontrol: $spanofcontrol,
                                experience: $experience
                            }, function (data) {
                                                console.log("dsajgyrh");
                                                console.log(data);
                                $('select').material_select();
                              
                            });
                        });
            }

            function clearSelection() {
                for (var j = 1; j <= 8; j++) {
                    $('#' + j).val('');
                    $('#' + j).prop("disabled", false);
                    selected = [];
                    $('select').material_select();
                }
            }
        </script>


        <?php //foreach($category as $key=>$val) // { // if($key==0) // { // echo $val; // } // else // { // echo ",".$val; // } // } ?>