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
      $pagetitle="Temperaturen";
      include_once("include/top-header.incl.php");
      include_once("include/nav.incl.php");
      $statefiles = array(
        "example_t",
        "example_h"
      );
      $i="0";
      while($i < count($statefiles)) {
        $current_file = "states/" . $statefiles[$i] . "_current.txt";
        $current_state = "state" . $i;
        $statefile = fopen($current_file, "r") or die("Unable to open file!");
        $state_tmp = fread($statefile,filesize($current_file));
        $$current_state = explode('.', $state_tmp);
        fclose($statefile);
        $i++;
      }
      ?>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div class="demo-cards mdl-cell mdl-cell--12-col mdl-grid mdl-grid--no-spacing">

            <div class="temperatures-buero mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet">
              <div class="temperatures mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">B&uuml;ro</h2>
              </div>
              <div class="mdl-card__value-big mdl-card--border mdl-grid mdl-grid--no-spacing">
                <div class="mdl-cell mdl-cell--6-col mdl-cell--3-col-tablet"><?php echo $state0['0'];?>&deg;</div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--3-col-tablet"><?php echo $state1['0'];?>%</div>
              </div>
            </div>
            <div class="demo-separator mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>

            <div class="temperatures-schlafzimmer mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet">
              <div class="temperatures mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">Schlafzimmer</h2>
              </div>
              <div class="mdl-card__value-big mdl-card--border mdl-grid mdl-grid--no-spacing">
                <div class="mdl-cell mdl-cell--6-col mdl-cell--3-col-tablet">99&deg;</div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--3-col-tablet">55%</div>
              </div>
            </div>
            <div class="demo-separator mdl-cell--12-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>

            <div class="temperatures-wohnzimmer mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet">
              <div class="temperatures mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">Wohnzimmer</h2>
              </div>
              <div class="mdl-card__value-big mdl-card--border mdl-grid mdl-grid--no-spacing">
                <div class="mdl-cell mdl-cell--6-col mdl-cell--3-col-tablet">99&deg;</div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--3-col-tablet">55%</div>
              </div>
            </div>
            <div class="demo-separator mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>

            <div class="temperatures-aussen mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet">
              <div class="temperatures mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">Aussen</h2>
              </div>
              <div class="mdl-card__value-big mdl-card--border mdl-grid mdl-grid--no-spacing">
                <div class="mdl-cell mdl-cell--6-col mdl-cell--3-col-tablet">99&deg;</div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--3-col-tablet">55%</div>
              </div>
            </div>
            <div class="demo-separator mdl-cell--12-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>

            <div class="temperatures-rack mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet">
              <div class="temperatures mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">Rack</h2>
              </div>
              <div class="mdl-card__value-big mdl-card--border mdl-grid mdl-grid--no-spacing">
                <div class="mdl-cell mdl-cell--6-col mdl-cell--3-col-tablet">99&deg;</div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--3-col-tablet">55%</div>
              </div>
            </div>
            <div class="demo-separator mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>

            <div class="temperatures-sicherungskasten mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet">
              <div class="temperatures mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">Sicherungskasten</h2>
              </div>
              <div class="mdl-card__value-big mdl-card--border mdl-grid mdl-grid--no-spacing">
                <div class="mdl-cell mdl-cell--6-col mdl-cell--3-col-tablet">99&deg;</div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--3-col-tablet">55%</div>
              </div>
            </div>
            <div class="demo-separator mdl-cell--12-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>

            <div class="temperatures-keller mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet">
              <div class="temperatures mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">Keller</h2>
              </div>
              <div class="mdl-card__value-big mdl-card--border mdl-grid mdl-grid--no-spacing">
                <div class="mdl-cell mdl-cell--6-col mdl-cell--3-col-tablet">99&deg;</div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--3-col-tablet">55%</div>
              </div>
            </div>
            <div class="demo-separator mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>

            <div class="temperatures-gefriertruhe mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet">
              <div class="temperatures mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">Gefriertruhe</h2>
              </div>
              <div class="mdl-card__value-big mdl-card--border mdl-grid mdl-grid--no-spacing">
                <div class="mdl-cell mdl-cell--6-col mdl-cell--3-col-tablet">99&deg;</div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--3-col-tablet">55%</div>
              </div>
            </div>
            <div class="demo-separator mdl-cell--12-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
          </div>
        </div>
      </main>
    </div>
    <a href="temperatures-diagrams.php" id="bottom-button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-color-text--white">Diagramme</a>
    <?php include_once("include/scriptsource.incl.php"); ?>
  </body>
</html>
