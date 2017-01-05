<?php ?>

<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script type="text/javascript" src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<!-- amCharts javascript code -->
<script type="text/javascript">
    AmCharts.makeChart("chartdiv",
        {
            "type": "serial",
            "categoryField": "category",
            "maxSelectedSeries": 10,
            "synchronizeGrid": true,
            "autoMarginOffset": 0,
            "marginBottom": 0,
            "marginLeft": 0,
            "marginRight": 0,
            "colors": [
                "#FF6600",
                "#FCD202",
                "#12283e",
                "#556575",
                "#CD0D74",
                "#CC0000",
                "#363a7b",
                "#00007a",
                "#DDDDDD",
                "#999999",
                "#333333",
                "#990000"
            ],
            "gridAboveGraphs": true,
            "startDuration": 1,
            "startEffect": "easeInSine",
            "backgroundAlpha": 0.2,
            "backgroundColor": "#12283E",
            "fontFamily": "OpenSans-Regular",
            "fontSize": 14,
            "handDrawScatter": 0,
            "handDrawThickness": 0,
            "hideBalloonTime": 120,
            "pathToImages": "",
            "categoryAxis": {
                "autoRotateAngle": 0,
                "autoRotateCount": 0,
                "gridPosition": "start",
                "axisAlpha": 0.39,
                "axisColor": "#657789",
                "axisThickness": 2,
                "boldLabels": true,
                "centerLabels": true,
                "color": "#0B0505",
                "fontSize": 24,
                "gridAlpha": 0,
                "labelOffset": 10,
                "minorGridAlpha": 1,
                "minorGridEnabled": true,
                "minorTickLength": 1,
                "tickLength": 20,
                "title": "",
                "titleBold": false
            },
            "trendLines": [],
            "graphs": [
                {
                    "balloonText": "",
                    "color": "#F4AB3C",
                    "columnWidth": 0,
                    "fillColors": "#243B50",
                    "id": "AmGraph-1",
                    "labelAnchor": "middle",
                    "labelOffset": 15,
                    "labelPosition": "bottom",
                    "labelText": "[[brand]]",
                    "lineThickness": 0,
                    "maxBulletSize": 0,
                    "minBulletSize": 0,
                    "tabIndex": -10,
                    "title": "graph 1",
                    "type": "step",
                    "valueField": "speed"
                },
                {
                    "balloonText": "VISIT WEBSITE",
                    "bullet": "round",
                    "bulletAlpha": 0.72,
                    "bulletBorderAlpha": 1,
                    "bulletBorderColor": "#F4AB3C",
                    "bulletColor": "#5F5F4F",
                    "bulletHitAreaSize": 25,
                    "bulletOffset": 15,
                    "bulletSize": 50,
                    "columnWidth": 0,
                    "connect": false,
                    "cursorBulletAlpha": 0,
                    "customBulletField": "img-bullet",
                    "fixedColumnWidth": 0,
                    "fontSize": 0,
                    "gradientOrientation": "horizontal",
                    "id": "AmGraph-2",
                    "labelPosition": "bottom",
                    "lineAlpha": 0,
                    "lineThickness": 0,
                    "negativeFillAlphas": 0,
                    "negativeFillColors": "#0000FF",
                    "periodSpan": 0,
                    "showHandOnHover": true,
                    "tabIndex": -5,
                    "title": "graph 2",
                    "topRadius": 0,
                    "urlTarget": "",
                    "urlField": "url",
                    "valueField": "speed",
                    "visibleInLegend": false
                },
                {
                    "alphaField": "speed",
                    "balloonText": "",
                    "fillAlphas": 0.9,
                    "fillColors": "#12283E",
                    "id": "AmGraph-4",
                    "minDistance": 0,
                    "newStack": true,
                    "noStepRisers": true,
                    "precision": 0,
                    "showBalloon": false,
                    "tabIndex": 100,
                    "title": "graph 4",
                    "type": "smoothedLine",
                    "valueField": "speed"
                },
                {
                    "balloonColor": "#FFFFFF",
                    "balloonText": "",
                    "columnWidth": 0,
                    "connect": false,
                    "cornerRadiusTop": 10,
                    "fillAlphas": 1,
                    "fillColors": "#22298B",
                    "fixedColumnWidth": 1,
                    "gapPeriod": 1,
                    "id": "AmGraph-5",
                    "showBalloon": false,
                    "tabIndex": -10,
                    "title": "graph 5",
                    "type": "column",
                    "valueField": "speed",
                    "visibleInLegend": false
                }
            ],
            "guides": [],
            "valueAxes": [
                {
                    "axisTitleOffset": 0,
                    "id": "ValueAxis-1",
                    "autoRotateAngle": 0,
                    "autoRotateCount": 0,
                    "axisAlpha": 0.68,
                    "axisColor": "#657789",
                    "axisThickness": 2,
                    "boldLabels": true,
                    "centerLabels": true,
                    "color": "#737F8B",
                    "fontSize": 24,
                    "gridAlpha": 0,
                    "labelFrequency": 2,
                    "labelOffset": 10,
                    "labelsEnabled": false,
                    "minorGridAlpha": 0,
                    "tickLength": 20,
                    "title": "",
                    "titleBold": false,
                    "titleRotation": 0
                }
            ],
            "allLabels": [],
            "balloon": {
                "animationDuration": 0.46,
                "borderAlpha": 0,
                "borderThickness": 0,
                "color": "#FFFFFF",
                "fadeOutDuration": 0.34,
                "fillAlpha": 1,
                "fillColor": "#F4AB3C",
                "fixedPosition": true,
                "fontSize": 16,
                "horizontalPadding": 20,
                "maxWidth": 120,
                "offsetX": 0,
                "offsetY": 30,
                "pointerWidth": 5,
                "shadowAlpha": 0.8,
                "shadowColor": "#0B0505"
            },
            "titles": [],
            "dataProvider": [
                <?php
                $current = 0;
                $args = array( 'post_type' => 'bv_chart_posts', 'posts_per_page' => 10 );
                $loop = new WP_Query( $args );

                while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                {
                    "category": "<?php echo (10 - $current)?>",
                    "speed": "<?php the_field('speed') ?>",
                    "brand": "<?php echo get_the_title(get_post()) ?>",
                    "img-bullet": "<?php the_field('logo_of_brand') ?>",
                    "url": "<?php the_field('url') ?>"
                }<?php $current++; if($current < 10) { echo ','; } ?>

                <? endwhile;?>
            ]
        }
    );
</script>
<div id="chartdiv" style="width: 100%; height: 550px; background-color: rgba(18, 40, 62, 0.5);" ></div>