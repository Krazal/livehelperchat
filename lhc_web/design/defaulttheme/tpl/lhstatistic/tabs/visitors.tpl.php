<form action="" method="get" autocomplete="off" id="form-statistic-action">

    <div class="row form-group">

        <input type="hidden" name="doSearch" value="on" />
        <input type="hidden" id="id-report-type" name="reportType" value="live" />

        <div class="col-md-3">
            <div class="form-group">
                <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Date range from');?></label>
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-sm" name="timefrom" id="id_timefrom" placeholder="E.g <?php echo date('Y-m-d',time()-7*24*3600)?>" value="<?php echo htmlspecialchars($input->timefrom)?>" />
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Hour and minute from');?></label>
                <div class="row">
                    <div class="col-md-4">
                        <select name="timefrom_hours" class="form-control form-control-sm">
                            <option value=""><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Select hour');?></option>
                            <?php for ($i = 0; $i <= 23; $i++) : ?>
                                <option value="<?php echo $i?>" <?php if (isset($input->timefrom_hours) && $input->timefrom_hours === $i) : ?>selected="selected"<?php endif;?>><?php echo str_pad($i,2, '0', STR_PAD_LEFT);?> h.</option>
                            <?php endfor;?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select name="timefrom_minutes" class="form-control form-control-sm">
                            <option value=""><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Select minute');?></option>
                            <?php for ($i = 0; $i <= 59; $i++) : ?>
                                <option value="<?php echo $i?>" <?php if (isset($input->timefrom_minutes) && $input->timefrom_minutes === $i) : ?>selected="selected"<?php endif;?>><?php echo str_pad($i,2, '0', STR_PAD_LEFT);?> m.</option>
                            <?php endfor;?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select name="timefrom_seconds" class="form-control form-control-sm">
                            <option value=""><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Select seconds');?></option>
                            <?php for ($i = 0; $i <= 59; $i++) : ?>
                                <option value="<?php echo $i?>" <?php if (isset($input->timefrom_seconds) && $input->timefrom_seconds === $i) : ?>selected="selected"<?php endif;?>><?php echo str_pad($i,2, '0', STR_PAD_LEFT);?> s.</option>
                            <?php endfor;?>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Date range to');?></label>
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-sm" name="timeto" id="id_timeto" placeholder="E.g <?php echo date('Y-m-d')?>" value="<?php echo htmlspecialchars($input->timeto)?>" />
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Hour and minute to');?></label>
                <div class="row">
                    <div class="col-md-4">
                        <select name="timeto_hours" class="form-control form-control-sm">
                            <option value=""><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Select hour');?></option>
                            <?php for ($i = 0; $i <= 23; $i++) : ?>
                                <option value="<?php echo $i?>" <?php if (isset($input->timeto_hours) && $input->timeto_hours === $i) : ?>selected="selected"<?php endif;?>><?php echo str_pad($i,2, '0', STR_PAD_LEFT);?> h.</option>
                            <?php endfor;?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select name="timeto_minutes" class="form-control form-control-sm">
                            <option value=""><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Select minute');?></option>
                            <?php for ($i = 0; $i <= 59; $i++) : ?>
                                <option value="<?php echo $i?>" <?php if (isset($input->timeto_minutes) && $input->timeto_minutes === $i) : ?>selected="selected"<?php endif;?>><?php echo str_pad($i,2, '0', STR_PAD_LEFT);?> m.</option>
                            <?php endfor;?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select name="timeto_seconds" class="form-control form-control-sm">
                            <option value=""><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Select seconds');?></option>
                            <?php for ($i = 0; $i <= 59; $i++) : ?>
                                <option value="<?php echo $i?>" <?php if (isset($input->timeto_seconds) && $input->timeto_seconds === $i) : ?>selected="selected"<?php endif;?>><?php echo str_pad($i,2, '0', STR_PAD_LEFT);?> s.</option>
                            <?php endfor;?>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Department');?></label>
                <?php echo erLhcoreClassRenderHelper::renderMultiDropdown( array (
                    'input_name'     => 'department_ids[]',
                    'optional_field' => erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Choose department'),
                    'selected_id'    => $input->department_ids,
                    'css_class'      => 'form-control',
                    'display_name'   => 'name',
                    'ajax'           => 'deps',
                    'list_function_params' => array_merge(['sort' => '`name` ASC', 'limit' => 20],erLhcoreClassUserDep::conditionalDepartmentFilter()),
                    'list_function'  => 'erLhcoreClassModelDepartament::getList'
                )); ?>
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Department group');?></label>
                <?php echo erLhcoreClassRenderHelper::renderMultiDropdown( array (
                    'input_name'     => 'department_group_ids[]',
                    'optional_field' => erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Choose department group'),
                    'selected_id'    => $input->department_group_ids,
                    'css_class'      => 'form-control',
                    'display_name'   => 'name',
                    'list_function_params' => array_merge(['sort' => '`name` ASC'],erLhcoreClassUserDep::conditionalDepartmentGroupFilter()),
                    'list_function'  => 'erLhcoreClassModelDepartamentGroup::getList'
                )); ?>
            </div>
        </div>



        <div class="col-md-2">
            <div class="form-group">
                <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Group by');?></label>
                <select name="groupby" class="form-control form-control-sm">
                    <option value="0" <?php $input->groupby == 0 ? print 'selected="selected"' : ''?>><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Month');?></option>
                    <option value="1" <?php $input->groupby == 1 ? print 'selected="selected"' : ''?>><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Day');?></option>
                    <option value="2" <?php $input->groupby == 2 ? print 'selected="selected"' : ''?>><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Week');?></option>
                    <option value="3" <?php $input->groupby == 3 ? print 'selected="selected"' : ''?>><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Hour');?></option>
                </select>
            </div>
        </div>

        <div class="col-md-12">
            <h6><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/statistic','What charts to display')?></h6>
            <div class="row">
                <div class="col-4"><label><input type="checkbox" name="chart_type[]" value="visitors_all" <?php if (in_array('visitors_all',is_array($input->chart_type) ? $input->chart_type : array())) : ?>checked="checked"<?php endif;?> > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/statistic','Total visitors')?></label></div>
                <div class="col-4"><label><input type="checkbox" name="chart_type[]" value="visitors_new" <?php if (in_array('visitors_new',is_array($input->chart_type) ? $input->chart_type : array())) : ?>checked="checked"<?php endif;?> > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/statistic','New visitors')?></label></div>
                <div class="col-4"><label><input type="checkbox" name="chart_type[]" value="visitors_returning" <?php if (in_array('visitors_returning',is_array($input->chart_type) ? $input->chart_type : array())) : ?>checked="checked"<?php endif;?> > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/statistic','Returning visitors')?></label></div>
                <div class="col-4"><label><input type="checkbox" name="chart_type[]" value="visitors_country" <?php if (in_array('visitors_country',is_array($input->chart_type) ? $input->chart_type : array())) : ?>checked="checked"<?php endif;?> > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/statistic','Countries')?></label></div>
                <div class="col-4"><label><input type="checkbox" name="chart_type[]" value="visitors_city" <?php if (in_array('visitors_city',is_array($input->chart_type) ? $input->chart_type : array())) : ?>checked="checked"<?php endif;?> > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/statistic','Cities')?></label></div>
                <div class="col-4"><label><input type="checkbox" name="chart_type[]" value="visitors_referrers" <?php if (in_array('visitors_referrers',is_array($input->chart_type) ? $input->chart_type : array())) : ?>checked="checked"<?php endif;?> > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/statistic','Top 100 referrers')?></label></div>

                <?php /* Don't have attribute for device type

                <div class="col-4"><label><input type="checkbox" name="chart_type[]" value="visitors_user_agent" <?php if (in_array('visitors_user_agent',is_array($input->chart_type) ? $input->chart_type : array())) : ?>checked="checked"<?php endif;?> ><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/statistic','User agent')?></label></div>

                <?php // I don't have time on site by sessions records only global total time spend and particular sessions.
                <div class="col-4"><label><input type="checkbox" name="chart_type[]" value="visitors_time_on_site" <?php if (in_array('visitors_time_on_site',is_array($input->chart_type) ? $input->chart_type : array())) : ?>checked="checked"<?php endif;?> ><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/statistic','Time on site')?></label></div>
                */ ?>

                <?php
                // Footprint does not track page title at the moment.
                // well idea is to show number of visits to specific pages
                // like most visited pages etc
                /*
                 <div class="col-4"><label><input type="checkbox" name="chart_type[]" value="visitors_top_pages" <?php if (in_array('visitors_top_pages',is_array($input->chart_type) ? $input->chart_type : array())) : ?>checked="checked"<?php endif;?> ><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/statistic','Number of chats by country')?></label></div>
                */ ?>
            </div>
        </div>
    </div>

    <input type="submit" name="doSearch" class="btn btn-secondary" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Search');?>" />

    <script>
        $(function() {
            $('.btn-block-department').makeDropdown();
            $('#id_timefrom,#id_timeto').fdatepicker({
                format: 'yyyy-mm-dd'
            });
        });
    </script>
</form>

<?php if (isset($_GET['doSearch'])) : ?>
    <script type="text/javascript">
        function redrawAllCharts(){
            drawChartVisitorsCountry();
            drawChartVisitorsCity();
            drawChartVisitorsNew();
            drawChartVisitorsAll();
            drawChartVisitorsReturning();
            drawChartVisitorsReferrers();
        };

        // Define a plugin to provide data labels
        Chart.plugins.register({
            afterDatasetsDraw: function(chart, easing) {
                // To only draw at the end of animation, check for easing === 1
                var ctx = chart.ctx;
                chart.data.datasets.forEach(function (dataset, i) {
                    var meta = chart.getDatasetMeta(i);
                    if (!meta.hidden) {
                        meta.data.forEach(function(element, index) {

                            var maxValue = 0;

                            if (chart.options.perc) {
                                meta.data.forEach(function(element, index) {
                                    maxValue += dataset.data[index];
                                })
                            }

                            // Draw the text in black, with the specified font
                            var dataString = dataset.data[index].toString();
                            if (dataString !== '0')
                            {
                                ctx.fillStyle = chart.data.datasets.length > 1 ? 'rgb(255, 255, 255)' : 'rgb(0, 0, 0)';
                                var fontSize = 11;
                                var fontStyle = 'normal';
                                var fontFamily = 'Arial';
                                ctx.font = Chart.helpers.fontString(fontSize, fontStyle, fontFamily);
                                // Just naively convert to string for now

                                // Make sure alignment settings are correct
                                ctx.textAlign = 'center';
                                ctx.textBaseline = 'middle';

                                var padding = 0;

                                if (chart.data.datasets.length > 1) {
                                    // Specify the shadow colour.
                                    ctx.shadowColor = "black";
                                    ctx.shadowOffsetX = 1;
                                    ctx.shadowOffsetY = 1;
                                    ctx.shadowBlur = 1;
                                    if (typeof element.height == 'function') {
                                        padding = -element.height()/2-5;
                                    }
                                }

                                var position = element.tooltipPosition();

                                if (chart.options.perc) {
                                    ctx.fillText(dataString, position.x, position.y - (fontSize / 2) - padding);
                                    ctx.fillText((parseInt(dataString)*100 / maxValue).toFixed(0)+"%", position.x, position.y - (fontSize / 2) - padding - 15);
                                } else {
                                    ctx.fillText(dataString, position.x, position.y - (fontSize / 2) - padding);
                                }

                                ctx.shadowColor = "";
                                ctx.shadowOffsetX = 0;
                                ctx.shadowOffsetY = 0;
                                ctx.shadowBlur = 0;
                            }


                        });
                    }
                });
            }
        });

        Chart.Legend.prototype.afterFit = function() {
            this.height = this.height + 10;
        };

        function drawChartVisitorsCountry() {
            <?php if (!empty($visitors_statistic['visitors_country']) && in_array('visitors_country',is_array($input->chart_type) ? $input->chart_type : array())) : ?>
            var barChartData = {
                labels: [<?php $key = 0; foreach ($visitors_statistic['visitors_country']['labels'] as $monthUnix => $data) : echo ($key > 0 ? ',' : ''),'\'' . ($monthUnix > 24 ? date($visitors_statistic['visitors_country']['group_date'],$monthUnix) : $monthUnix) . '\'';$key++; endforeach;?>],
                datasets: [
                    <?php foreach ($visitors_statistic['visitors_country']['data'] as $data) : ?>
                    {
                        data: [<?php echo implode(',',$data['data'])?>],
                        backgroundColor: [<?php echo implode(',',$data['color'])?>],
                        labels: [<?php echo implode(',',$data['nick'])?>]
                    },
                    <?php endforeach; ?>
                ]
            };

            var ctx = document.getElementById("chart_visitors_country").getContext("2d");
            var myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    legendCallback: function(chart) {
                        var text = [];
                        text.push('');
                        var unique = [];
                        for (var i = 0; i < chart.data.datasets.length; i++) {
                            for (var n = 0; n < chart.data.datasets[i].backgroundColor.length; n++) {
                                if (chart.data.datasets[i].backgroundColor[n] != '' && unique.indexOf(chart.data.datasets[i].labels[n]) === -1) {
                                    text.push('<span style="font-size:13px"><span class="border badge m-1" style="background-color:' + chart.data.datasets[i].backgroundColor[n] + '">');
                                    text.push('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>');
                                    text.push(chart.data.datasets[i].labels[n]);
                                    text.push('</span>');
                                    unique.push(chart.data.datasets[i].labels[n]);
                                }
                            }
                        }
                        text.push('');
                        return text.join('');
                    },
                    perc: true,
                    responsive: true,
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                        callbacks: {
                            label: function(tooltipItem, data) {
                                var dataset = data.datasets[tooltipItem.datasetIndex];
                                var index = tooltipItem.index;
                                if (dataset.data[index] != 0) {
                                    return  dataset.data[index] + ': ' + (dataset.labels[index] == '' ? 'Unknown' : dataset.labels[index]);
                                }
                            }
                        }
                    },
                    legend: {
                        display: false,
                    },
                    layout: {
                        padding: {
                            top: 20
                        }
                    },
                    scales: {
                        xAxes: [{
                            //stacked: true,
                            ticks: {
                                fontSize: 11,
                                stepSize: 1,
                                min: 0,
                                autoSkip: false
                            }
                        }],
                        yAxes: [{
                            //stacked: true,
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    },
                    title: {
                        display: false
                    }
                }
            });
            $("#visitors_country_legend").html(myBar.generateLegend());
            <?php endif; ?>
        };

        function drawChartVisitorsCity() {
            <?php if (!empty($visitors_statistic['visitors_city']) && in_array('visitors_city',is_array($input->chart_type) ? $input->chart_type : array())) : ?>
            var barChartData = {
                labels: [<?php $key = 0; foreach ($visitors_statistic['visitors_city']['labels'] as $monthUnix => $data) : echo ($key > 0 ? ',' : ''),'\'' . ($monthUnix > 24 ? date($visitors_statistic['visitors_city']['group_date'],$monthUnix) : $monthUnix) . '\'';$key++; endforeach;?>],
                datasets: [
                    <?php foreach ($visitors_statistic['visitors_city']['data'] as $data) : ?>
                    {
                        data: [<?php echo implode(',',$data['data'])?>],
                        backgroundColor: [<?php echo implode(',',$data['color'])?>],
                        labels: [<?php echo implode(',',$data['nick'])?>]
                    },
                    <?php endforeach; ?>
                ]
            };

            var ctx = document.getElementById("chart_visitors_city").getContext("2d");
            var myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                        callbacks: {
                            label: function(tooltipItem, data) {
                                var dataset = data.datasets[tooltipItem.datasetIndex];
                                var index = tooltipItem.index;
                                if (dataset.data[index] != 0) {
                                    return  dataset.data[index] + ': ' + (dataset.labels[index] == '' ? 'Unknown' : dataset.labels[index]);
                                }
                            }
                        }
                    },
                    legendCallback: function(chart) {
                        var text = [];
                        text.push('');
                        var unique = [];
                        for (var i = 0; i < chart.data.datasets.length; i++) {
                            for (var n = 0; n < chart.data.datasets[i].backgroundColor.length; n++) {
                                if (chart.data.datasets[i].backgroundColor[n] != '' && unique.indexOf(chart.data.datasets[i].labels[n]) === -1) {
                                    text.push('<span style="font-size:13px"><span class="border badge m-1" style="background-color:' + chart.data.datasets[i].backgroundColor[n] + '">');
                                    text.push('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>');
                                    text.push(chart.data.datasets[i].labels[n]);
                                    text.push('</span>');
                                    unique.push(chart.data.datasets[i].labels[n]);
                                }
                            }
                        }
                        text.push('');
                        return text.join('');
                    },
                    perc: true,
                    legend: {
                        display: false,
                    },
                    layout: {
                        padding: {
                            top: 20
                        }
                    },
                    scales: {
                        xAxes: [{
                            //stacked: true,
                            ticks: {
                                fontSize: 11,
                                stepSize: 1,
                                min: 0,
                                autoSkip: false
                            }
                        }],
                        yAxes: [{
                            //stacked: true,
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    },
                    title: {
                        display: false
                    }
                }
            });
            $("#visitors_city_legend").html(myBar.generateLegend());
            <?php endif; ?>
        }

        function drawChartVisitorsNew() {
            <?php if (!empty($visitors_statistic['visitors_new']) && in_array('visitors_new',is_array($input->chart_type) ? $input->chart_type : array())) : ?>
            var barChartData = {
                labels: [<?php $key = 0; foreach ($visitors_statistic['visitors_new'] as $monthUnix => $data) : echo ($key > 0 ? ',' : ''),'\'' . ($monthUnix > 24 ? date($visitors_statistic['group_date'],$monthUnix) : $monthUnix) . '\'';$key++; endforeach;?>],
                datasets: [
                    {
                        label: '<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/statistic','New visitors');?>',
                        backgroundColor: '#3366cc',
                        borderColor: '#3366cc',
                        borderWidth: 1,
                        data: [<?php $key = 0; foreach ($visitors_statistic['visitors_new'] as $monthUnix => $data) : echo ($key > 0 ? ',' : ''),$data; $key++; endforeach;?>]
                    }
                ]
            };

            var ctx = document.getElementById("chart_visitors_new").getContext("2d");
            var myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    layout: {
                        padding: {
                            top: 20
                        }
                    },
                    perc: true,
                    scales: {
                        xAxes: [{
                            stacked: true,
                            ticks: {
                                fontSize: 11,
                                stepSize: 1,
                                min: 0,
                                autoSkip: false
                            }
                        }],
                        yAxes: [{
                            stacked: true,
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    },
                    title: {
                        display: false
                    }
                }
            });
            <?php endif; ?>
        };

        function drawChartVisitorsAll() {
            <?php if (!empty($visitors_statistic['visitors_all']) && in_array('visitors_all',is_array($input->chart_type) ? $input->chart_type : array())) : ?>
            var barChartData = {
                labels: [<?php $key = 0; foreach ($visitors_statistic['visitors_all'] as $monthUnix => $data) : echo ($key > 0 ? ',' : ''),'\'' . ($monthUnix > 24 ? date($visitors_statistic['group_date'],$monthUnix) : $monthUnix) . '\'';$key++; endforeach;?>],
                datasets: [
                    {
                        label: '<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/statistic','Total visitors');?>',
                        backgroundColor: '#3366cc',
                        borderColor: '#3366cc',
                        borderWidth: 1,
                        data: [<?php $key = 0; foreach ($visitors_statistic['visitors_all'] as $monthUnix => $data) : echo ($key > 0 ? ',' : ''),$data; $key++; endforeach;?>]
                    }
                ]
            };

            var ctx = document.getElementById("chart_visitors_all").getContext("2d");
            var myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    layout: {
                        padding: {
                            top: 20
                        }
                    },
                    perc: true,
                    scales: {
                        xAxes: [{
                            stacked: true,
                            ticks: {
                                fontSize: 11,
                                stepSize: 1,
                                min: 0,
                                autoSkip: false
                            }
                        }],
                        yAxes: [{
                            stacked: true,
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    },
                    title: {
                        display: false
                    }
                }
            });
            <?php endif; ?>
        };

        function drawChartVisitorsReferrers() {
            <?php if (!empty($visitors_statistic['visitors_referrers']) && in_array('visitors_referrers',is_array($input->chart_type) ? $input->chart_type : array())) : ?>
            var barChartData = {
                labels: [<?php $key = 0; foreach ($visitors_statistic['visitors_referrers'] as $monthUnix => $data) : echo ($key > 0 ? ',' : ''),json_encode($data['referrer'] != '' ? erLhcoreClassDesign::shrt($data['referrer'],50,'...',1000,ENT_QUOTES) : '-');$key++; endforeach;?>],
                datasets: [
                    {
                        label: '<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/statistic','Top 100 referrers for selected period');?>',
                        backgroundColor: '#3366cc',
                        borderColor: '#3366cc',
                        borderWidth: 1,
                        data: [<?php $key = 0; foreach ($visitors_statistic['visitors_referrers'] as $monthUnix => $data) : echo ($key > 0 ? ',' : ''),$data['total_records']; $key++; endforeach;?>]
                    }
                ]
            };

            var ctx = document.getElementById("visitors_referrers_all").getContext("2d");
            var myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    layout: {
                        padding: {
                            top: 20
                        }
                    },
                    perc: true,
                    scales: {
                        xAxes: [{
                            stacked: true,
                            ticks: {
                                fontSize: 11,
                                stepSize: 1,
                                min: 0,
                                autoSkip: false
                            }
                        }],
                        yAxes: [{
                            stacked: true,
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    },
                    title: {
                        display: false
                    }
                }
            });
            <?php endif; ?>
        }


        function drawChartVisitorsReturning() {
            <?php if (!empty($visitors_statistic['visitors_returning']) && in_array('visitors_returning',is_array($input->chart_type) ? $input->chart_type : array())) : ?>
            var barChartData = {
                labels: [<?php $key = 0; foreach ($visitors_statistic['visitors_returning'] as $monthUnix => $data) : echo ($key > 0 ? ',' : ''),'\'' . ($monthUnix > 24 ? date($visitors_statistic['group_date'], $monthUnix) : $monthUnix) . '\'';$key++; endforeach;?>],
                datasets: [
                    {
                        label: '<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/statistic','Returning visitors');?>',
                        backgroundColor: '#3366cc',
                        borderColor: '#3366cc',
                        borderWidth: 1,
                        data: [<?php $key = 0; foreach ($visitors_statistic['visitors_returning'] as $monthUnix => $data) : echo ($key > 0 ? ',' : ''),$data; $key++; endforeach;?>]
                    }
                ]
            };

            var ctx = document.getElementById("chart_visitors_returning").getContext("2d");
            var myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    layout: {
                        padding: {
                            top: 20
                        }
                    },
                    perc: true,
                    scales: {
                        xAxes: [{
                            stacked: true,
                            ticks: {
                                fontSize: 11,
                                stepSize: 1,
                                min: 0,
                                autoSkip: false
                            }
                        }],
                        yAxes: [{
                            stacked: true,
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    },
                    title: {
                        display: false
                    }
                }
            });
            <?php endif; ?>
        };

        $( document ).ready(function() {
            redrawAllCharts();
            $(".csv-export").click(function(event) {
                event.preventDefault();
                $('#id-report-type').val($(this).attr('data-scope'));
                $('#form-statistic-action').submit();
            });
        });
    </script>

<?php if (in_array('visitors_all',is_array($input->chart_type) ? $input->chart_type : array())) : ?>
    <hr>
    <h5><?php include(erLhcoreClassDesign::designtpl('lhstatistic/tabs/titles/chart_visitors_all.tpl.php'));?></h5>
    <canvas id="chart_visitors_all"></canvas>
<?php endif;?>

<?php if (in_array('visitors_referrers',is_array($input->chart_type) ? $input->chart_type : array())) : ?>
    <hr>
    <h5><a class="csv-export" data-scope="visitors_referrers" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/statistic','Download CSV')?>"><i class="material-icons me-0">file_download</i></a><?php include(erLhcoreClassDesign::designtpl('lhstatistic/tabs/titles/chart_visitors_referrers.tpl.php'));?></h5>
    <canvas id="visitors_referrers_all"></canvas>
<?php endif;?>

<?php if (in_array('visitors_city',is_array($input->chart_type) ? $input->chart_type : array())) : ?>
    <hr>
    <h5><?php include(erLhcoreClassDesign::designtpl('lhstatistic/tabs/titles/chart_visitors_city.tpl.php'));?></h5>
    <div id="visitors_city_legend"></div>
    <canvas id="chart_visitors_city"></canvas>
<?php endif;?>

<?php if (in_array('visitors_country',is_array($input->chart_type) ? $input->chart_type : array())) : ?>
    <hr>
    <h5><?php include(erLhcoreClassDesign::designtpl('lhstatistic/tabs/titles/chart_visitors_country.tpl.php'));?></h5>
    <div id="visitors_country_legend"></div>
    <canvas id="chart_visitors_country"></canvas>
<?php endif;?>

<?php if (in_array('visitors_new',is_array($input->chart_type) ? $input->chart_type : array())) : ?>
    <hr>
    <h5><?php include(erLhcoreClassDesign::designtpl('lhstatistic/tabs/titles/chart_visitors_new.tpl.php'));?></h5>
    <canvas id="chart_visitors_new"></canvas>
<?php endif;?>

<?php if (in_array('visitors_returning',is_array($input->chart_type) ? $input->chart_type : array())) : ?>
    <hr>
    <h5><?php include(erLhcoreClassDesign::designtpl('lhstatistic/tabs/titles/chart_visitors_returning.tpl.php'));?></h5>
    <canvas id="chart_visitors_returning"></canvas>
<?php endif;?>

<?php endif; ?>