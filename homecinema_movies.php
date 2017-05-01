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
      $pagetitle="Homecinema";
      $pagetitle2="homecinema-selection";
      include_once("include/top-header.incl.php");
      include_once("include/nav.incl.php"); ?>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <?php
            $i="1";
            if(isset($_GET['view'])) {
              $view_query = "AND watched = $_GET[view]";
            } else {
              $view_query = "";
            }
            $movies_result = mysql_query("SELECT * FROM video WHERE alben = $_GET[category] $view_query", $db2);
            while ($movies = mysql_fetch_assoc($movies_result)) {
              echo "<div class=\"mdl-cell mdl-cell--1-col mdl-grid\">
                      <a href=\"homecinema_movie_detail.php?movie=" . $movies['id'] . "\">
                        <img src=\"images/movie_cover/a-team.jpg\">
                      </a>
                    </div>";
              $i++;
      			}
          ?>
        </div>
      </main>
    </div>
    <?php include_once("include/scriptsource.incl.php"); ?>
  </body>
</html>
