<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->

<html lang="en">
  <?php include_once("include/head.incl.php"); ?>
  <script src="http://code.highcharts.com/highcharts.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
    function GetUrlParameter() {
        idx = window.location.href.indexOf("?");
        if (idx < 0) return "";
        return window.location.href.substring(idx + 1);
            }
            urlParameter = GetUrlParameter();
            function GetChartXml() {
                    switch (urlParameter) {
                    case "t3h":
                    case "t24h":
                    case "t48h":
                    case "t1w":
                    case "t1m":
                    case "t3m":
                    case "t1y":
                    case "h3h":
                    case "h24h":
                    case "h48h":
                    case "h1w":
                    case "h1m":
                    case "h3m":
                    case "h1y":
                    case "f3h":
                    case "f24h":
                    case "f48h":
                    case "f1w":
                    case "f1m":
                    case "f3m":
                    case "f1y":

                            return "http://srv3.home/homecontrol-backend/states/temperatures/xml/all_" + urlParameter + ".xml";
                    }
                    return "http://srv3.home/homecontrol-backend/states/temperatures/xml/all_t24h.xml";
            }

    function GetChartTitle() {
        switch (urlParameter) {
            case "t3h":
               return "Temperatur der letzten 3 Stunden";
                case "t24h":
                return "Temperatur der letzten 24 Stunden";
            case "t48h":
                return "Temperatur der letzten 48 Stunden";
            case "t1w":
                return "Temperatur der letzten Woche";
            case "t1m":
                return "Temperatur des letzten Monats";
                    case "t3m":
                return "Temperatur der letzten 3 Monate";
            case "t1y":
                return "Temperatur des letzten Jahres";
                    case "h3h":
                return "Luftfeuchtigkeit der letzten 3 Stunden";
                case "h24h":
                return "Luftfeuchtigkeit der letzten 24 Stunden";
            case "h48h":
                return "Luftfeuchtigkeit der letzten 48 Stunden";
            case "h1w":
                return "Luftfeuchtigkeit der letzten Woche";
            case "h1m":
                return "Luftfeuchtigkeit des letzten Monats";
                    case "h3m":
                return "Luftfeuchtigkeit der letzten 3 Monate";
            case "h1y":
                return "Luftfeuchtigkeit des letzten Jahres";
        }
        return "Temperatur der letzten 24 Stunden";
    };

    $(document).ready(function() {

            options = {
                    chart: {
                            renderTo: 'container',
                            type: 'spline'
                    },
                    title: {
                            text: 'Temperatures of the last 24h'
                    },
                    colors: ['#4572A7', '#AA4643', '#89A54E', '#80699B', '#3D96AE',
                       '#DB843D', '#92A8CD', '#A47D7C', '#B5CA92'],
                    xAxis: {
                            type: 'datetime',
                            dateTimeLabelFormats: {
                                    hour: '%H. %M',
                            }
                    },
                    yAxis: {
                            title: {
                                    text: 'Deg.C)'
                            }
                    },
                    plotOptions: {
                            series: {
                                    marker: {
                                            radius: 2
                                    }
                            }
            },
                    lineWidth: 1,
                    series: []
            }

            // Load the data from the XML file
            $.ajax({
            type: "GET",
            url: GetChartXml(),
            dataType: "xml",
            success: function(xml) {
                    var series = []
                    //define series
                    $(xml).find("entry").each(function() {
                            var seriesOptions = {
                                    name: $(this).text(),
                                    data: []
                            };
                            options.series.push(seriesOptions);
                    });
                    //populate with data
                    $(xml).find("row").each(function() {
                            var t = parseInt($(this).find("t").text()) * 1000 //Zeitzone?
                            $(this).find("v").each(function(index) {
                                    var v = parseFloat($(this).text())
                                    v = v || null
                                    if (v != null) {
                                            options.series[index].data.push([t, v])
                                    };
                            });
                    });
                    options.title.text = GetChartTitle()
                    $.each(series, function(index) {
                            options.series.push(series[index]);
                    });
                    chart = new Highcharts.Chart(options);
            }
    })

    });
  </script>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <?php
      $pagetitle="Diagramme";
      include_once("include/top-header.incl.php");
      include_once("include/nav.incl.php");
      ?>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div id="container" style="width:100%; height:400px;"></div>
        </div>
      </main>
    </div>
    <?php include_once("include/scriptsource.incl.php"); ?>
  </body>
</html>
