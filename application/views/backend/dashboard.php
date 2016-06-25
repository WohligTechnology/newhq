<div class="text-center padding-bottom">
    <button class="btn btn-primary waves-effect waves-light blue darken-4" onclick="GlobalFunctions.clearSelection()">Clear Selection</button>
</div>
<!-- <div class="text-center padding-bottom">
    <button class="btn btn-primary waves-effect waves-light blue darken-4 excelexport" onclick="exportData();">Export All Result</button>
</div> -->
<div class='text-center mb15'>
    <!-- <textarea id="txt" style="display:none" class='txtarea'></textarea> -->
    <button class='btn btn-primary waves-effect waves-light blue darken-4 barchartexport'>Generate CSV for Bar Chart</button>
    <!-- <textarea id="txt" style="display:none" class='txtarea'></textarea> -->
    <button class='btn btn-primary waves-effect waves-light blue darken-4 piechartexport'>Generate CSV for Pie Chart</button>
    <button class='btn btn-primary waves-effect waves-light blue darken-4 overallexport'>Generate CSV for Overall</button>
</div>
<span>Total Employee Count: <?php echo $empcount;?></span><br>
<span>Employees Appeared For Test: <?php echo $totalusertestgiven;?></span>
<form method="post" action="<?php echo site_url('site/getdatabyfiltering');?>">

    <div class="cf"></div>

    <div class="row selectproper">
        <div class="col s12 m3">
            <label>Gender</label>
            <select id="1" name="gender" onchange="GlobalFunctions.checkfortwo(1);" style="display:none">
                <?php  foreach($gender as $key => $value) {?>
                    <option value=<?php echo $key; ?>><?php echo $value; ?></option>
                    <?php }?>
            </select>
        </div>
        <div class="col s12 m3">
            <label>Annual Salary</label>
            <select id="2" name="salary" onchange="GlobalFunctions.checkfortwo(2);" style="display:none">
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
        </div>
        <div class="col s12 m3">
            <label>Marital Status</label>
            <select id="3" name="maritalstatus" onchange="GlobalFunctions.checkfortwo(3);" style="display:none">
                <?php  foreach($maritalstatus as $key => $value) {?>
                    <option value="<?php echo $key; ?>"><?php echo $value; ?>
                    </option>
                    <?php }?>
            </select>
        </div>
        <div class="col s12 m3">
            <label>Branch</label>
            <select id="4" name="branch" onchange="GlobalFunctions.checkfortwo(4);" style="display:none">
                <?php  foreach($branch as $key => $value) {?>
                    <option value="<?php echo $key; ?>"><?php echo $value; ?>
                            <?php }?>
            </select>
        </div>
    </div>
    <div class="row selectproper">
        <div class="col s12 m3">
            <label>Department</label>
            <select id="5" name="department" onchange="GlobalFunctions.checkfortwo(5);" style="display:none">
                <?php  foreach($department as $key => $value) {?>
                    <option value="<?php echo $key; ?>"><?php echo $value; ?>
                    </option>
                    <?php }?>
            </select>
        </div>
        <div class="col s12 m3">
            <label>Designation</label>
            <select id="6" name="designation" onchange="GlobalFunctions.checkfortwo(6);" style="display:none">
                <?php  foreach($designation as $key => $value) {?>
                    <option value="<?php echo $key; ?>"><?php echo $value; ?>
                    </option>
                    <?php }?>
            </select>
        </div>
        <div class="col s12 m3">
            <label>Span of Control</label>
            <select id="7" name="spanofcontrol" onchange="GlobalFunctions.checkfortwo(7);" style="display:none">
                <option value="">Choose Span of control</option>
                <option value="0-5">0-5</option>
                <option value="6-10">6-10</option>
                <option value="11-15">11-15</option>
                <option value="16-20">16-20</option>
                <option value="20-25">20-25</option>
                <option value="25+">25+</option>
            </select>
        </div>
        <div class="col s12 m3">
            <label>Experience</label>
            <select id="8" name="experience" onchange="GlobalFunctions.checkfortwo(8);" style="display:none">
                <option value="">Choose Experience</option>
                <option value="0-2">0-2</option>
                <option value="3-5">3-5</option>
                <option value="6-8">6-8</option>
                <option value="8+">8+</option>
            </select>
        </div>
    </div>
</form>
<div class="row">
    <div class="col s12">
        <div id="nodata" style="display:none;">No Data Found</div>

        <div class="well">
            <span style="font-size: 20px;"><b>Results Of The Last Test </b></span>
        </div>
    </div>
</div>

<div class="container1"></div>
<div class="lightcolor"></div>
<script>
    var pillars = [];
    var globalData = [];
    var arr = [];
    var totalsum = [];
    var totalexpected = [];
    var expectedWeight = [];
    var pillAraverage = [];
    var GlobalFunctions = {};
    var pillaraveragevalues = [];
    var weight = [];
    var groupedData = [];
    var excelData = {};
    var bigArr=[];
    var bigJson={};
    var arrforExport = [];
    var overallArray = [];
    $(document).ready(function() {
         new_base_url1 = "<?php echo site_url(); ?>";
      function makefiller(data) {
         groupedData = _.groupBy(data[0]['filler'], function(d){return "group"+d.question;});
        $(".sec1").text("122");
        options();
        options1();
        excelData=data;
        bigArr = [];
        for(var j=0;j<data.length;j++){
          bigJson = {};
            bigJson.Pillar_name=data[j].name;
            bigJson.Ngu_weightage=data[j].expectedweight;
            bigJson.Company_weightage=data[j].weight;
            bigJson.Average_score=data[j].pillaraveragevalues;
            bigArr.push(bigJson);
        }

        $('.barchartexport').click(function(){
        var data = bigArr;
        if(data == '')
            return;
            var currentDate=Date.now();
        JSONToCSVConvertor(data, "Result"+currentDate, true);
    });
        $('.piechartexport').click(function(){
        var data = arrforExport;
        if(data == '')
            return;
            var currentDate=Date.now();
        JSONToCSVConvertor(data, "Resultforpiechart"+currentDate, true);
    });
        $('.overallexport').click(function(){
        var data = overallArray;
        if(data == '')
            return;
            var currentDate=Date.now();
        JSONToCSVConvertor(data, "Resultforoverall"+currentDate, true);
    });
        }

        function JSONToCSVConvertor(JSONData, ReportTitle, ShowLabel) {
            //If JSONData is not an object then JSON.parse will parse the JSON string in an Object
            var arrData = typeof JSONData != 'object' ? JSON.parse(JSONData) : JSONData;

            var CSV = '';
            //Set Report title in first row or line

            CSV += ReportTitle + '\r\n\n';

            //This condition will generate the Label/Header
            if (ShowLabel) {
                var row = "";

                //This loop will extract the label from 1st index of on array
                for (var index in arrData[0]) {

                    //Now convert each value to string and comma-seprated
                    row += index + ',';
                }

                row = row.slice(0, -1);

                //append Label row with line break
                CSV += row + '\r\n';
            }

            //1st loop is to extract each row
            for (var i = 0; i < arrData.length; i++) {
                var row = "";

                //2nd loop will extract each column and convert it in string comma-seprated
                for (var index in arrData[i]) {
                    row += '"' + arrData[i][index] + '",';
                }

                row.slice(0, row.length - 1);

                //add a line break after each row
                CSV += row + '\r\n';
            }

            if (CSV == '') {
                alert("Invalid data");
                return;
            }

            //Generate a file name
            var fileName = "MyReport_";
            //this will remove the blank-spaces from the title and replace it with an underscore
            fileName += ReportTitle.replace(/ /g,"_");

            //Initialize file format you want csv or xls
            var uri = 'data:text/csv;charset=utf-8,' + escape(CSV);

            // Now the little tricky part.
            // you can use either>> window.open(uri);
            // but this will not work in some browsers
            // or you will not get the correct file extension

            //this trick will generate a temp <a /> tag
            var link = document.createElement("a");
            link.href = uri;

            //set the visibility hidden so it will not effect on your web-layout
            link.style = "visibility:hidden";
            link.download = fileName + ".csv";

            //this part will append the anchor tag and remove it after automatic click
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }


        GlobalFunctions.checkfortwo = function(val) {
            var count = 0;
            for (var i = 1; i <= 8; i++) {
                if ($("select#" + i).val() == "") {

                } else {
                    count++;
                }
            }
            if (count == 2) {
                for (var i = 1; i <= 8; i++) {
                    if ($("select#" + i).val() == "") {
                        $("select#" + i).prop("disabled", true);
                        $('select').material_select();
                    }
                }
            } else if (count < 2) {
                for (var i = 1; i <= 8; i++) {
                    $("select#" + i).prop("disabled", false);
                }
            }
            getTable();
        }

        function clearTable() {



            $("table tbody.datatobeinserted").html("");
        }

        function addRow(name, averagePercent) {
            $("table tbody.datatobeinserted").append("<tr><td>" + name + "</td><td>" + averagePercent + "</td></tr>");
        }


        function getTable() {
            var $gender = $("select[name=gender]").val();
            var $salary = $("select[name=salary]").val();
            var $maritalstatus = $("select[name=maritalstatus]").val();
            var $branch = $("select[name=branch]").val();
            var $designation = $("select[name=designation]").val();
            var $department = $("select[name=department]").val();
            var $spanofcontrol = $("select[name=spanofcontrol]").val();
            var $experience = $("select[name=experience]").val();
            var new_base_url = "<?php echo site_url(); ?>";
            $.getJSON(new_base_url + '/site/getdatabyfiltering', {
                gender: $gender,
                salary: $salary,
                maritalstatus: $maritalstatus,
                branch: $branch,
                designation: $designation,
                department: $department,
                spanofcontrol: $spanofcontrol,
                experience: $experience
            }, function(data) {

                var globalData=data;
                makefiller(data);


                //                var arr=[];
                arr = [];
                _.each(data, function(n) {
                    var obj = {};
                    obj.name = n.name;
                    obj.y = parseFloat(n.pillaraveragevalues);
                    arr.push(obj);
                })

                arrforExport=[];
                _.each(data, function(n) {
                    var obj1 = {};
                    obj1.Pillar_name = n.name;
                    obj1.Average_score = parseFloat(n.pillaraveragevalues);
                    arrforExport.push(obj1);
                })
                getname = _.mapValues(data, 'name');
                getavgvalue = _.mapValues(data, 'pillaraveragevalues');
                var totalsum = 0;
                var totalexpected = 0;
                for (var i = 0; i < data.length; i++) {
                    totalexpected = totalsum + (data[i].pillaraveragevalues * data[i].expectedweight) / 100;
                    totalsum = totalexpected + (data[i].pillaraveragevalues * data[i].weight) / 100;
                }
                overallArray=[];
                totalsum = Math.floor(totalsum);
                totalexpected = Math.floor(totalexpected);
                var sum={};
                sum.Company_Weightage=totalsum;
                sum.NGU_Expected=totalexpected;
                overallArray.push(sum);
                pillars = _.pluck(data, "name");
                pillars.push("Overall");
                expectedWeight = _.pluck(data, "expectedweight");
                expectedWeight = _.map(expectedWeight, function(n) {
                    if (n == "") {
                        n = 0;
                    }
                    return parseInt(n);
                });
                expectedWeight.push(_.sum(expectedWeight) / (pillars.length - 1));
                pillAraverage = _.pluck(data, "pillaraveragevalues");
                pillAraverage = _.map(pillAraverage, function(n) {
                    if (n == "") {
                        n = 0;
                    }
                    return parseInt(n);
                });
                //                console.log(pillAraverage);
                pillAraverage.push(_.sum(pillAraverage) / (pillars.length - 1));

                weight = _.pluck(data, "weight");
                weight = _.map(weight, function(n) {
                    if (n == "") {
                        n = 0;
                    }
                    return parseInt(n);
                });
                //                console.log(weight);
                $('select').material_select();
                createGraph();
                createPie();
                overAll(totalexpected, totalsum);

            });


        }



        GlobalFunctions.clearSelection = function() {
            for (var j = 1; j <= 8; j++) {
                $('#' + j).val('');
                $('#' + j).prop("disabled", false);
                selected = [];
                $('select').material_select();
            }
        }

        getTable();


        function createGraph() {
            $('.container1').highcharts({

                chart: {
                    type: 'bar',
                    backgroundColor: "transparent",
                    borderColor: "transparent",
                    borderRadius: 0,
                    borderWidth: 0,
                    height: 800,
                    className: "graph-color",
                },
                credits: {
                    enabled: false
                },
                title: {
                    text: 'Pillars '
                },
                xAxis: {
                    categories: pillars,
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Percentage (%)'
                    }
                },
                colors: ['#0084C5', '#ffd61e', '#f55069'],
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.5,
                        depth: 36,
                        maxPointWidth: 100
                    }
                },

                <?php if($checkpackage==3 || $checkpackage==4) {?>
                series: [{
                    name: 'NGU Weightage',
                    data: expectedWeight

                }, {
                    name: 'Average Score',
                    data: pillAraverage

                }, {
                    name: 'Client Weightage',
                    data: weight

                }]
                <?php } else {?>
                series: [{
                    name: 'Average Score',
                    data: pillAraverage

                }, {
                    name: 'NGU Weightageß',
                    data: expectedWeight

                }]
                <?php } ?>

            });
        }

        function createPie() {
                   console.log(arr);
            $('#container').highcharts({
                credits: {
                    enabled: false
                },
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie',
                    backgroundColor: "transparent",
                    margin: [0, 0, 0, 0],
                    width: 1000

                },
                title: {
                    text: 'Pillar Average'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        size: '70%',
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -500,
                    y: 80,
                    floating: true,
                    borderWidth: 1,
                    backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                    shadow: true
                },
                series: [{
                    name: 'Average Score',
                    colorByPoint: true,
                    data: arr
                }]
            });


        }

        function overAll(totalexpected, totalsum) {
            $('#container3').highcharts({
                chart: {
                    type: 'bar',
                    backgroundColor: "transparent"
                },
                title: {
                    text: 'Overall'
                },
                xAxis: {
                    categories: ['Weighted Average'],
                    title: {
                        text: null
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Overall (percent)',
                        align: 'high'
                    },
                    labels: {
                        overflow: 'justify'
                    }
                },
                tooltip: {
                    valueSuffix: ' percent'
                },
                plotOptions: {
                    bar: {
                        dataLabels: {
                            enabled: true
                        }
                    }
                },
                colors: [ '#0084C5','#f55069'],
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -40,
                    y: 80,
                    floating: true,
                    borderWidth: 1,
                    backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                    shadow: true
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: 'NGU Weightage',
                    data: [totalexpected]
                }, {
                    name: 'Client Weightage',
                    data: [totalsum]
                }]
            });
        }



    });

</script>
<div id="container3" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<div id="container" style="min-width: 310px; margin: 0 auto"></div>

<div class="well">
  <span style="font-size: 20px;"><b>Generic Questions</b></span>
</div>
<div class="jquestion">
  <?php echo $fillerquestion[0]->text;?>
</div>
<div id="imgoptions" class="row"></div>

<div class="jquestion">
  <?php echo $fillerquestion[1]->text;?>
</div>
<div id="imgoptions1" class="row"></div>

<!-- End of light div -->
</div>



<script>
var basepath="<?php echo base_url('uploads').'/'?>";
function options() {
  // var image1=groupedData.group41[0].image;

  for(var i=0;i<groupedData.group41.length;i++){
    var imagediv=document.createElement("div");
    imagediv.className = "small-images";
    var imagenode = document.createElement("img");
    imagenode.src=basepath+groupedData.group41[i].image;
    textnode = document.createTextNode(groupedData.group41[i].count);
    imagediv.appendChild(imagenode);
    imagediv.appendChild(textnode);
    document.getElementById("imgoptions").appendChild(imagediv);
  }
}
</script>


<script>
var basepath="<?php echo base_url('uploads').'/'?>";

function options1() {
  // var image1=groupedData.group41[0].image;

  for(var i=0;i<groupedData.group42.length;i++){
    var imagediv=document.createElement("div");
    imagediv.className = "small-images";
    var imagenode = document.createElement("img");
    imagenode.src=basepath+groupedData.group42[i].image;
    var textnode = document.createTextNode(groupedData.group42[i].count);
    imagediv.appendChild(imagenode);
    imagediv.appendChild(textnode);
    document.getElementById("imgoptions1").appendChild(imagediv);
  }
}
</script>
<!-- <div>
<img src="<?php echo base_url('uploads').'/'.$fillerquestion[1]->options[0]->image;?>">
</div>
<br>
<div>
<img src="<?php echo base_url('uploads').'/'.$fillerquestion[1]->options[1]->image;?>">
</div>
<br>
<div>
<img src="<?php echo base_url('uploads').'/'.$fillerquestion[1]->options[2]->image;?>">
</div>
<br>
<div>
<img src="<?php echo base_url('uploads').'/'.$fillerquestion[1]->options[3]->image;?>">
</div>
<br> -->


<script>
    $('#button').click(function() {
        var chart = $('#container').highcharts(),
            selectedPoints = chart.getSelectedPoints();

        if (chart.lbl) {
            chart.lbl.destroy();
        }
        chart.lbl = chart.renderer.label('You selected ' + selectedPoints.length + ' points', 10, 10)
            .attr({
                padding: 10,
                r: 5,
                fill: Highcharts.getOptions().colors[1],
                zIndex: 5
            })
            .css({
                color: 'white'
            })
            .add();
    });

</script>
