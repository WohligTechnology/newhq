<!--
<script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js'); ?>" type="text/javascript"></script>

<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/highcharts-3d.js"></script>
-->
<!--<div id="container" style="height: 400px"></div>-->
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<span class="filprop"><u>Filter By :-</u></span>
<button class="btn btn-primary waves-effect waves-light blue darken-4" onclick="clearSelection()">Clear Selection</button>
<form method="post" action="<?php echo site_url('site/getdatabyfiltering');?>">

    <div class="cf">
        <button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>

        <!--        <a href="#" class="blue darken-4 btn waves-effect waves-light">CLear Selection</a>-->
    </div>
    <div class="row selectproper">
        <div class="col s12 m3">
            <select id="1" name="gender" onchange="checkfortwo(1);">
                <?php  foreach($gender as $key => $value) {?>
                    <option value=<?php echo $key; ?>>
                        <?php echo $value; ?>
                    </option>
                    <?php }?>
            </select>
            <label>Gender</label>
        </div>
        <div class="col s12 m3">
            <select id="2" name="salary" onchange="checkfortwo(2);">
                <option value="">Choose Salary</option>
                <option value="1-2">1-2 lakhs</option>
                <option value="2-3">2-3 lakhs</option>
                <option value="3-4">3-4 lakhs</option>
                <option value="4-5">4-5 lakhs</option>
                <option value="5-6">5-6 lakhs</option>
                <option value="6-7">6-7 lakhs</option>
                <option value="7-8">7-8 lakhs</option>
                <option value="8-9">8-9 lakhs</option>
                <option value="9-10">9-10 lakhs</option>
                <option value="10-11">10-11 lakhs</option>
                <option value="11-12">11-12 lakhs</option>
                <option value="12-13">12-13 lakhs</option>
                <option value="13-14">13-14 lakhs</option>
                <option value="14-15">14-15 lakhs</option>
                <option value="15-16">15-16 lakhs</option>
                <option value="16-17">16-17 lakhs</option>
                <option value="17-18">17-18 lakhs</option>
                <option value="18-19">18-19 lakhs</option>
                <option value="19-20">19-20 lakhs</option>
                <option value="20-21">20-21 lakhs</option>
                <option value="21-22">21-22 lakhs</option>
                <option value="22-23">22-23 lakhs</option>
                <option value="23-24">23-24 lakhs</option>
                <option value="24-25">24-25 lakhs</option>
                <option value="25-26">25-26 lakhs</option>
                <option value="26-27">26-27 lakhs</option>
                <option value="27-28">27-28 lakhs</option>
                <option value="28-29">28-29 lakhs</option>
                <option value="29-30">29-30 lakhs</option>
                <option value="30-31">30-31 lakhs</option>
                <option value="31-32">31-32 lakhs</option>
                <option value="32-33">32-33 lakhs</option>
                <option value="33-34">33-34 lakhs</option>
                <option value="34-35">34-35 lakhs</option>
                <option value="35-36">35-36 lakhs</option>
                <option value="36-37">36-37 lakhs</option>
                <option value="37-38">37-38 lakhs</option>
                <option value="38-39">38-39 lakhs</option>
                <option value="39-40">39-40 lakhs</option>
                <option value="40-41">40-41 lakhs</option>
                <option value="41-42">41-42 lakhs</option>
                <option value="42-43">42-43 lakhs</option>
                <option value="43-44">43-44 lakhs</option>
                <option value="44-45">44-45 lakhs</option>
                <option value="45-46">45-46 lakhs</option>
                <option value="46-47">46-47 lakhs</option>
                <option value="47-48">47-48 lakhs</option>
                <option value="48-49">48-49 lakhs</option>
                <option value="49-50">49-50 lakhs</option>
                <option value="50-51">50-51 lakhs</option>
                <option value="51-52">51-52 lakhs</option>
                <option value="52-53">52-53 lakhs</option>
                <option value="53-54">53-54 lakhs</option>
                <option value="54-55">54-55 lakhs</option>
                <option value="55-56">55-56 lakhs</option>
                <option value="56-57">56-57 lakhs</option>
                <option value="57-58">57-58 lakhs</option>
                <option value="58-59">58-59 lakhs</option>
                <option value="59-60">59-60 lakhs</option>
                <option value="60-61">60-61 lakhs</option>
                <option value="61-62">61-62 lakhs</option>
                <option value="62-63">62-63 lakhs</option>
                <option value="63-64">63-64 lakhs</option>
                <option value="64-65">64-65 lakhs</option>
                <option value="65-66">65-66 lakhs</option>
                <option value="66-67">66-67 lakhs</option>
                <option value="67-68">67-68 lakhs</option>
                <option value="68-69">68-69 lakhs</option>
                <option value="69-70">69-70 lakhs</option>
                <option value="70-71">70-71 lakhs</option>
                <option value="71-72">71-72 lakhs</option>
                <option value="72-73">72-73 lakhs</option>
                <option value="73-74">73-74 lakhs</option>
                <option value="74-75">74-75 lakhs</option>
                <option value="75-76">75-76 lakhs</option>
                <option value="76-77">76-77 lakhs</option>
                <option value="77-78">77-78 lakhs</option>
                <option value="78-79">78-79 lakhs</option>
                <option value="79-80">79-80 lakhs</option>
                <option value="80-81">80-81 lakhs</option>
                <option value="81-82">81-82 lakhs</option>
                <option value="82-83">82-83 lakhs</option>
                <option value="83-84">83-84 lakhs</option>
                <option value="84-85">84-85 lakhs</option>
                <option value="85-86">85-86 lakhs</option>
                <option value="86-87">86-87 lakhs</option>
                <option value="87-88">87-88 lakhs</option>
                <option value="88-89">88-89 lakhs</option>
                <option value="89-90">89-90 lakhs</option>
                <option value="90-91">90-91 lakhs</option>
                <option value="91-92">91-92 lakhs</option>
                <option value="92-93">92-93 lakhs</option>
                <option value="93-94">93-94 lakhs</option>
                <option value="94-95">94-95 lakhs</option>
                <option value="95-96">95-96 lakhs</option>
                <option value="96-97">96-97 lakhs</option>
                <option value="97-98">97-98 lakhs</option>
                <option value="98-99">98-99 lakhs</option>
                <option value="99-100">99-100 lakhs</option>
                <option value="101">100 lakhs & Above</option>
            </select>
            <label>Salary</label>
        </div>
        <div class="col s12 m3">
            <select id="3" name="maritalstatus" onchange="checkfortwo(3);">
                <?php  foreach($maritalstatus as $key => $value) {?>
                    <option value="<?php echo $key; ?>">
                        <?php echo $value; ?>
                    </option>
                    <?php }?>
            </select>
            <label>Marital Status</label>
        </div>
        <div class="col s12 m3">
            <select id="4" name="branch" onchange="checkfortwo(4);">
                <?php  foreach($branch as $key => $value) {?>
                    <option value="<?php echo $key; ?>">
                        <?php echo $value; ?>
                            <?php }?>
            </select>
            <label>Branch</label>
        </div>
    </div>
    <div class="row selectproper">
        <div class="col s12 m3">
            <select id="5" name="department" onchange="checkfortwo(5);">
                <?php  foreach($department as $key => $value) {?>
                    <option value="<?php echo $key; ?>">
                        <?php echo $value; ?>
                    </option>
                    <?php }?>
            </select>
            <label>Department</label>
        </div>
        <div class="col s12 m3">
            <select id="6" name="designation" onchange="checkfortwo(6);">
                <?php  foreach($designation as $key => $value) {?>
                    <option value="<?php echo $key; ?>">
                        <?php echo $value; ?>
                    </option>
                    <?php }?>
            </select>
            <label>Designation</label>
        </div>
        <div class="col s12 m3">
            <select id="7" name="spanofcontrol" onchange="checkfortwo(7);">
                <option value="">Choose Span of control</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>
            <label>Span of Control</label>
        </div>
        <div class="col s12 m3">
            <select id="8" name="experience" onchange="checkfortwo(8);">
                <option value="">Choose Experience</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                <option value="32">32</option>
                <option value="33">33</option>
                <option value="34">34</option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="46">46</option>
                <option value="47">47</option>
                <option value="48">48</option>
                <option value="49">49</option>
                <option value="50">50</option>
            </select>
            <label>Experience</label>
        </div>
    </div>
</form>
<div id="nodata" style="display:none;">No Data Found</div>
<div class="well" style="text-align: left;background-color: white;color:black;width:275px;">
    <span style="font-size: 20px;"><b>Charts of Recent Test :-</b></span>
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