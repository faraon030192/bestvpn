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
            "mouseWheelScrollEnabled": true,
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
            "pathToImages": "./img",
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
                    "valueField": "column-1"
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
                    "valueField": "column-1",
                    "visibleInLegend": false
                },
                {
                    "alphaField": "column-1",
                    "balloonText": "",
                    "fillAlphas": 0.84,
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
                    "valueField": "column-1"
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
                    "valueField": "column-1",
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
                "fixedPosition": false,
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
                {
                    "category": "10",
                    "column-1": "18",
                    "brand": "IPVANISH",
                    "img-bullet": "<?php echo get_template_directory_uri() ?>/img/temp/mini-brand-10.png",
                    "url": "http://www.ipvanish.com"
                },
                {
                    "category": "9",
                    "column-1": "24",
                    "brand": "HIDEME",
                    "img-bullet": "<?php echo get_template_directory_uri() ?>/img/temp/mini-brand-9.png",
                    "url": "http://www.hide.me"
                },
                {
                    "category": "8",
                    "column-1": "30",
                    "brand": "VYPRVPN",
                    "img-bullet": "<?php echo get_template_directory_uri() ?>/img/temp/mini-brand-8.png",
                    "url": "http://www.vyprvpn.com"
                },
                {
                    "category": "7",
                    "column-1": "35",
                    "brand": "SAFERVPN",
                    "img-bullet": "<?php echo get_template_directory_uri() ?>/img/temp/mini-brand-7.png",
                    "url": "http://www.safervpn.com"
                },
                {
                    "category": "6",
                    "column-1": "42",
                    "brand": "HOTSPOT",
                    "img-bullet": "<?php echo get_template_directory_uri() ?>/img/temp/mini-brand-6.png",
                    "url": "http://www.hotspotshield.com"
                },
                {
                    "category": "5",
                    "column-1": "49",
                    "brand": "STRONGVPN",
                    "img-bullet": "<?php echo get_template_directory_uri() ?>/img/temp/mini-brand-5.png",
                    "url": "http://www.strongvpn.com"
                },
                {
                    "category": "4",
                    "column-1": "56",
                    "brand": "PUREVPN",
                    "img-bullet": "<?php echo get_template_directory_uri() ?>/img/temp/mini-brand-4.png",
                    "url": "http://www.purevpn.com"
                },
                {
                    "category": "3",
                    "column-1": "80",
                    "brand": "HIDEMYASS",
                    "img-bullet": "<?php echo get_template_directory_uri() ?>/img/temp/mini-brand-3.png",
                    "url": "http://www.hidemyass.com"
                },
                {
                    "category": "2",
                    "column-1": "90",
                    "brand": "NORDVPN",
                    "img-bullet": "<?php echo get_template_directory_uri() ?>/img/temp/mini-brand-2.png",
                    "url": "http://www.nordvpn.com"
                },
                {
                    "category": "1",
                    "column-1": "100",
                    "brand": "EXPRESSVPN",
                    "img-bullet": "<?php echo get_template_directory_uri() ?>/img/temp/mini-brand-1.png",
                    "url": "http://www.expressvpn.com"
                }
            ]
        }
    );
</script>
<div id="chartdiv" style="width: 100%; height: 600px; background-color: rgba(18, 40, 62, 0.4);" ></div>