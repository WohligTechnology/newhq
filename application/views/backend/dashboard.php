<button class="btn btn-primary waves-effect waves-light blue darken-4 right" onclick="GlobalFunctions.clearSelection()">Clear Selection</button>
<form method="post" action="<?php echo site_url('site/getdatabyfiltering');?>">

    <div class="cf">
    </div>
    <div class="row selectproper">
        <div class="col s12 m3">
            <select id="1" name="gender" onchange="GlobalFunctions.checkfortwo(1);" style="display:none">
                <?php  foreach($gender as $key => $value) {?>
                    <option value=<?php echo $key; ?>>
                        <?php echo $value; ?>
                    </option>
                    <?php }?>
            </select>
            <label>Gender</label>
        </div>
        <div class="col s12 m3">
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
            <label>Annual Salary</label>
        </div>
        <div class="col s12 m3">
            <select id="3" name="maritalstatus" onchange="GlobalFunctions.checkfortwo(3);" style="display:none">
                <?php  foreach($maritalstatus as $key => $value) {?>
                    <option value="<?php echo $key; ?>">
                        <?php echo $value; ?>
                    </option>
                    <?php }?>
            </select>
            <label>Marital Status</label>
        </div>
        <div class="col s12 m3">
            <select id="4" name="branch" onchange="GlobalFunctions.checkfortwo(4);" style="display:none">
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
            <select id="5" name="department" onchange="GlobalFunctions.checkfortwo(5);" style="display:none">
                <?php  foreach($department as $key => $value) {?>
                    <option value="<?php echo $key; ?>">
                        <?php echo $value; ?>
                    </option>
                    <?php }?>
            </select>
            <label>Department</label>
        </div>
        <div class="col s12 m3">
            <select id="6" name="designation" onchange="GlobalFunctions.checkfortwo(6);" style="display:none">
                <?php  foreach($designation as $key => $value) {?>
                    <option value="<?php echo $key; ?>">
                        <?php echo $value; ?>
                    </option>
                    <?php }?>
            </select>
            <label>Designation</label>
        </div>
        <div class="col s12 m3">
            <select id="7" name="spanofcontrol" onchange="GlobalFunctions.checkfortwo(7);" style="display:none">
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
            <select id="8" name="experience" onchange="GlobalFunctions.checkfortwo(8);" style="display:none">
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

        <div class="well">
            <span style="font-size: 20px;"><b>Charts of Recent Test :-</b></span>
        </div>
    </div>
</div>

<div class="container"></div>
<div class="lightcolor"></div>
<script>
    var pillars = [];
    var expectedWeight = [];
    var pillAraverage = [];
    var GlobalFunctions = {};
    var pillaraveragevalues = [];
    var weight = [];
    $(document).ready(function() {

        var new_base_url = "<?php echo site_url(); ?>";
        $.getJSON(new_base_url + '/site/getpillarforpie', {}, function(data) {
            _.each(data, function(n) {
                var hold = {};
                hold.name = n.name;
                hold.y = parseInt(n.pillaraveragevalues);
                pillaraveragevalues.push(hold);
                $('select').material_select();
                createPie();
            });
        });

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
                console.log(data);
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
                console.log(pillAraverage);
                pillAraverage.push(_.sum(pillAraverage) / (pillars.length - 1));

                weight = _.pluck(data, "weight");
                weight = _.map(weight, function(n) {
                    if (n == "") {
                        n = 0;
                    }
                    return parseInt(n);
                });
                console.log(weight);
                $('select').material_select();
                createGraph();
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
            $('.container').highcharts({

                chart: {
                    type: 'bar',
                    backgroundColor: "transparent"
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
                colors: ['#FFB110', '#684703', '#ce3a56'],
                borderRadius: 0,
                borderWidth: 10,
                //                colors: ['#684703', '#FFB110','#684703'],
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
                series: [{
                    name: 'Expected',
                    data: expectedWeight

                }, {
                    name: 'Average',
                    data: pillAraverage

                }, {
                    name: 'Weight',
                    data: weight

                }]
            });
        }

    });

</script>
<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

<script>
    function createPie() {
        $('#container').highcharts({
            credits: {
                enabled: false
            },
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Pillar Average'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
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
                name: 'Average',
                colorByPoint: true,
                data: pillaraveragevalues
            }]
        });


    }
    // the button action
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
