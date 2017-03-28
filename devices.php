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
      $pagetitle="Ger&auml;te";
      include_once("include/top-header.incl.php");
      include_once("include/nav.incl.php"); ?>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div class="demo-cards mdl-cell mdl-cell--12-col mdl-grid mdl-grid--no-spacing">

            <div class="card-medium mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet">
              <div class="devices mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">Mediacenter</h2>
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect" onclick="dev_power('htpc', 'on')">Ein</a>
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect" onclick="dev_power('htpc', 'off')">Aus</a>
              </div>
            </div>
            <div class="demo-separator mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>

            <div class="card-medium mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet">
              <div class="devices mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">Server</h2>
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect" onclick="dev_power('srv1', 'on')">Ein</a>
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect" onclick="dev_power('srv1', 'off')">Aus</a>
              </div>
            </div>
            <div class="demo-separator mdl-cell--12-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>

            <div class="card-medium mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet">
              <div class="devices mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">NAS</h2>
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect" onclick="dev_power('nas3270', 'on')">Ein</a>
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect" onclick="dev_power('nas3270', 'off')">Aus</a>
              </div>
            </div>

          </div>
        </div>
      </main>
    </div>
    <?php include_once("include/scriptsource.incl.php"); ?>
  </body>
</html>
