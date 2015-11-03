<!--
<script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js'); ?>" type="text/javascript"></script>

<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/highcharts-3d.js"></script>
-->
<!--<div id="container" style="height: 400px"></div>-->
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<span class="filprop"><u>Filter By :-</u></span>
<div class="row selectproper">
<div class="col s12 m3">
 <?php echo form_dropdown( 'gender', $gender, set_value( 'gender')); ?>
    <label>Gender</label>
   </div>
  <div class="col s12 m3">
    <select>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Salary</label>
  </div>
  <div class="col s12 m3">
   <?php echo form_dropdown( 'maritalstatus', $maritalstatus, set_value( 'maritalstatus')); ?>
    <label>Marital Status</label>
  </div>
  <div class="col s12 m3">
      <?php echo form_dropdown( 'branch', $branch, set_value( 'branch')); ?>
    <label>Branch</label>
  </div>
  </div>
  <div class="row selectproper">
<div class="col s12 m3">
   <?php echo form_dropdown( 'department', $department, set_value( 'department')); ?>
    <label>Department</label>
   </div>
  <div class="col s12 m3">
      <?php echo form_dropdown( 'designation', $designation, set_value( 'designation')); ?>
    <label>Designation</label>
  </div>
  <div class="col s12 m3">
    <select>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Span of Control</label>
  </div>
  <div class="col s12 m3">
    <select>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Experience</label>
  </div>
  </div>
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
    
   
</script>


<?php //foreach($category as $key=>$val) // { // if($key==0) // { // echo $val; // } // else // { // echo ",".$val; // } // } ?>


