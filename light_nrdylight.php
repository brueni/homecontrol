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
      $pagetitle="Beleuchtung";
      include_once("include/top-header.incl.php");
      include_once("include/nav.incl.php"); ?>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div class="demo-cards mdl-cell mdl-cell--12-col mdl-grid mdl-grid--no-spacing">

            <div class="lights-ambient card-small mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-phone mdl-cell--8-col-tablet"
            onclick="light_nrdylight_set('toggle')">
              <a href="#" style="text-decoration:none"><div class="lights-ambient-btn mdl-card__title mdl-card--expand ">
                <h2 class="mdl-card__title-text">Ein/Aus</h2>
              </div></a>
            </div>

            <div class="demo-separator mdl-cell--2-col mdl-cell--8-col-tablet mdl-cell--4-col-phone"></div>

            <div class="lights-scene_tv card-small mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-phone mdl-cell--4-col-tablet"
            onclick="light_nrdylight_ctrl('static', 'tv-dimmed', 'all-70', '-')">
              <a href="#" style="text-decoration:none"><div class="lights-ambient-btn mdl-card__title mdl-card--expand ">
                <h2 class="mdl-card__title-text">TV-Licht</h2>
              </div></a>
            </div>

            <div class="lights-scene_rainbow card-small mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-phone mdl-cell--4-col-tablet"
            onclick="light_nrdylight_ctrl('static', 'rainbow', 'all-100', '-')">
              <a href="#" style="text-decoration:none"><div class="lights-ambient-btn mdl-card__title mdl-card--expand ">
                <h2 class="mdl-card__title-text">Regenbogen</h2>
              </div></a>
            </div>

            <div class="lights-scene_sunrise card-small mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-phone mdl-cell--4-col-tablet"
            onclick="light_nrdylight_ctrl('static', 'morgenrot', 'all-100', '-')">
              <a href="#" style="text-decoration:none"><div class="lights-ambient-btn mdl-card__title mdl-card--expand ">
                <h2 class="mdl-card__title-text">Sonnenaufgang</h2>
              </div></a>
            </div>

            <div class="lights-scene_sunset card-small mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-phone mdl-cell--4-col-tablet"
            onclick="light_nrdylight_ctrl('static', 'abendrot', 'all-100', '-')">
              <a href="#" style="text-decoration:none"><div class="lights-ambient-btn mdl-card__title mdl-card--expand ">
                <h2 class="mdl-card__title-text">Sonnenuntergang</h2>
              </div></a>
            </div>

            <div class="lights-scene_blue-evening card-small mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-phone mdl-cell--4-col-tablet"
            onclick="light_nrdylight_ctrl('static', 'blue-evening', 'all-100', '-')">
              <a href="#" style="text-decoration:none"><div class="lights-ambient-btn mdl-card__title mdl-card--expand ">
                <h2 class="mdl-card__title-text">Blauer Abend</h2>
              </div></a>
            </div>

            <div class="lights-scene_rain card-small mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-phone mdl-cell--4-col-tablet"
            onclick="light_nrdylight_ctrl('static', 'regentag', 'all-10', '-')">
              <a href="#" style="text-decoration:none"><div class="lights-ambient-btn mdl-card__title mdl-card--expand ">
                <h2 class="mdl-card__title-text">Regentag</h2>
              </div></a>
            </div>

            <div class="lights-scene_romance card-small mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-phone mdl-cell--4-col-tablet"
            onclick="light_nrdylight_ctrl('static', 'romantik', 'all-70', '-')">
              <a href="#" style="text-decoration:none"><div class="lights-ambient-btn mdl-card__title mdl-card--expand ">
                <h2 class="mdl-card__title-text">Romantik</h2>
              </div></a>
            </div>

            <div class="lights-scene_forest card-small mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-phone mdl-cell--4-col-tablet"
            onclick="light_nrdylight_ctrl('static', 'wald', 'all-100', '-')">
              <a href="#" style="text-decoration:none"><div class="lights-ambient-btn mdl-card__title mdl-card--expand ">
                <h2 class="mdl-card__title-text">Wald</h2>
              </div></a>
            </div>

            <div class="demo-separator mdl-cell--2-col mdl-cell--8-col-tablet mdl-cell--4-col-phone"></div>

            <div class="lights-ambient-btn card-small mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--4-col-phone mdl-cell--8-col-tablet"
            onclick="light_nrdylight_ctrl('static', 'all-warmwhite', 'all-100', '-')" style="background-color: #fff2df">
            </div>

            <div class="lights-ambient-btn card-small mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--2-col-phone mdl-cell--2-col-tablet"
            onclick="light_nrdylight_ctrl('static', 'all-red', 'all-100', '-')" style="background-color: #df0b0b">
            </div>

            <div class="lights-ambient-btn card-small mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--2-col-phone mdl-cell--2-col-tablet"
            onclick="light_nrdylight_ctrl('static', 'all-orange', 'all-100', '-')" style="background-color: #df5e0b">
            </div>

            <div class="lights-ambient-btn card-small mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--2-col-phone mdl-cell--2-col-tablet"
            onclick="light_nrdylight_ctrl('static', 'all-yellow', 'all-100', '-')" style="background-color: #dfd00b">
            </div>

            <div class="lights-ambient-btn card-small mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--2-col-phone mdl-cell--2-col-tablet"
            onclick="light_nrdylight_ctrl('static', 'all-green', 'all-100', '-')" style="background-color: #069d03">
            </div>

            <div class="lights-ambient-btn card-small mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--2-col-phone mdl-cell--2-col-tablet"
            onclick="light_nrdylight_ctrl('static', 'all-cyan', 'all-100', '-')" style="background-color: #02cbbf">
            </div>

            <div class="lights-ambient-btn card-small mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--2-col-phone mdl-cell--2-col-tablet"
            onclick="light_nrdylight_ctrl('static', 'all-blue', 'all-100', '-')" style="background-color: #0b1adf">
            </div>

            <div class="lights-ambient-btn card-small mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--2-col-phone mdl-cell--2-col-tablet"
            onclick="light_nrdylight_ctrl('static', 'all-purple', 'all-100', '-')" style="background-color: #a000b4">
            </div>

            <div class="lights-ambient-btn card-small mdl-card mdl-shadow--2dp mdl-cell mdl-cell--5-col mdl-cell--2-col-phone mdl-cell--2-col-tablet"
            onclick="light_nrdylight_ctrl('static', 'all-white', 'all-100', '-')" style="background-color: #d4e6fe">
            </div>

            <!--<div class="demo-separator mdl-cell--2-col"></div>-->

          </div>
        </div>
      </main>
    </div>
    <?php include_once("include/scriptsource.incl.php"); ?>
  </body>
</html>
