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
      include_once("include/nav.incl.php"); ?>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div class="demo-cards mdl-cell mdl-cell--12-col mdl-grid mdl-grid--no-spacing">
            <div class="temperatures temperatures-buero mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col">
              <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2 class="mdl-card__title-text">B&uuml;ro</h2>
              </div>
              <div class="mdl-card__value-big mdl-card--border mdl-grid mdl-grid--no-spacing">
                <div class="mdl-cell mdl-cell--6-col">99&deg;C.</div>
                <div class="mdl-cell mdl-cell--6-col">55%</div>
              </div>
            </div>
            <div class="demo-separator mdl-cell mdl-cell--2-col"></div>

            <div class="temperatures temperatures-schlafzimmer mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col">
              <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2 class="mdl-card__title-text">Schlafzimmer</h2>
              </div>
              <div class="mdl-card__value-big mdl-card--border mdl-grid mdl-grid--no-spacing">
                <div class="mdl-cell mdl-cell--6-col">99&deg;C.</div>
                <div class="mdl-cell mdl-cell--6-col">55%</div>
              </div>
            </div>
            <div class="demo-separator mdl-cell mdl-cell--12-col"></div>

            <div class="temperatures temperatures-wohnzimmer mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col">
              <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2 class="mdl-card__title-text">Wohnzimmer</h2>
              </div>
              <div class="mdl-card__value-big mdl-card--border mdl-grid mdl-grid--no-spacing">
                <div class="mdl-cell mdl-cell--6-col">99&deg;C.</div>
                <div class="mdl-cell mdl-cell--6-col">55%</div>
              </div>
            </div>
            <div class="demo-separator mdl-cell mdl-cell--2-col"></div>

            <div class="temperatures temperatures-aussen mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col">
              <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2 class="mdl-card__title-text">Aussen</h2>
              </div>
              <div class="mdl-card__value-big mdl-card--border mdl-grid mdl-grid--no-spacing">
                <div class="mdl-cell mdl-cell--6-col">99&deg;C.</div>
                <div class="mdl-cell mdl-cell--6-col">55%</div>
              </div>
            </div>
            <div class="demo-separator mdl-cell mdl-cell--12-col"></div>

            <div class="temperatures temperatures-rack mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col">
              <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2 class="mdl-card__title-text">Rack</h2>
              </div>
              <div class="mdl-card__value-big mdl-card--border mdl-grid mdl-grid--no-spacing">
                <div class="mdl-cell mdl-cell--6-col">99&deg;C.</div>
                <div class="mdl-cell mdl-cell--6-col">55%</div>
              </div>
            </div>
            <div class="demo-separator mdl-cell mdl-cell--2-col"></div>

            <div class="temperatures temperatures-sicherungskasten mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col">
              <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2 class="mdl-card__title-text">Sicherungskasten</h2>
              </div>
              <div class="mdl-card__value-big mdl-card--border mdl-grid mdl-grid--no-spacing">
                <div class="mdl-cell mdl-cell--6-col">99&deg;C.</div>
                <div class="mdl-cell mdl-cell--6-col">55%</div>
              </div>
            </div>
            <div class="demo-separator mdl-cell mdl-cell--12-col"></div>

            <div class="temperatures temperatures-keller mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col">
              <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2 class="mdl-card__title-text">Keller</h2>
              </div>
              <div class="mdl-card__value-big mdl-card--border mdl-grid mdl-grid--no-spacing">
                <div class="mdl-cell mdl-cell--6-col">99&deg;C.</div>
                <div class="mdl-cell mdl-cell--6-col">55%</div>
              </div>
            </div>
            <div class="demo-separator mdl-cell mdl-cell--2-col"></div>

            <div class="temperatures temperatures-gefriertruhe mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col">
              <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2 class="mdl-card__title-text">Gefriertruhe</h2>
              </div>
              <div class="mdl-card__value-big mdl-card--border mdl-grid mdl-grid--no-spacing">
                <div class="mdl-cell mdl-cell--6-col">99&deg;C.</div>
                <div class="mdl-cell mdl-cell--6-col">55%</div>
              </div>
            </div>
            <div class="demo-separator mdl-cell mdl-cell--12-col"></div>
          </div>
        </div>
      </main>
    </div>
    <a href="temperatures-diagrams.php" id="bottom-button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-color-text--white">Diagramme</a>
    <?php include_once("include/scriptsource.incl.php"); ?>
  </body>
</html>
