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
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <?php
      $pagetitle="Serien";
      include_once("include/top-header.incl.php");
      include_once("include/nav.incl.php"); ?>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div class="demo-cards mdl-cell mdl-cell--12-col mdl-grid mdl-grid--no-spacing">
            <?php
              $i="1";
              $series_result = mysql_query("SELECT * FROM serien", $db2);
              while ($series = mysql_fetch_assoc($series_result)) {
                echo "<div class=\"card-medium category mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet\"
                onclick=\"javascript:location.href='series_seasons.php?serie=" . $series['id'] . "'\">
                  <div class=\"mdl-card__title mdl-card--expand\" style=\"background-image: url('images/movie_cover/" . $series['logo'] . "')\">
                    <h2 class=\"mdl-card__title-text\">" . $series['name'] . "</h2>
                  </div>
                </div>";
                if($i % 2 != 0) { //check if even or odd
                  echo "<div class=\"demo-separator mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone\"></div>";
                } else {
                  echo "<div class=\"demo-separator mdl-cell--12-col mdl-cell--hide-tablet mdl-cell--hide-phone\"></div>";
                }
                $i++;
        			}
            ?>
          </div>
        </div>
      </main>
    </div>
    <?php include_once("include/scriptsource.incl.php"); ?>
  </body>
</html>
