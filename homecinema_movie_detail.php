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
      include_once("include/top-header.incl.php");
      include_once("include/nav.incl.php"); ?>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content mdl-grid--no-spacing">
          <?php
            $i="1";
            $movie_result = mysql_query("SELECT * FROM video WHERE id = $_GET[movie]", $db2);
            while ($movie = mysql_fetch_assoc($movie_result)) {
              echo "<div class=\"mdl-cell mdl-cell--10-col mdl-cell--6-col-tablet mdl-grid movie-title mdl-typography--headline\">" . $movie['titel'] . "</div>
                    <div class=\"mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-grid movie-play\">
                      <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-color-text--white\" onclick=\"\">Play</button>
                    </div>
                    <div class=\"mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-grid movie-picture\"><div><img src=\"images/movie_cover/a-team.jpg\"></div></div>
                    <div class=\"mdl-cell mdl-cell--10-col mdl-cell--6-col-tablet mdl-grid movie-desc\">" . $movie['beschreibung'] . "</div>
                    <div class=\"mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet mdl-grid movie-length mdl-typography--subhead\">" . $movie['laenge'] . "</div>
                    <div class=\"mdl-cell mdl-cell--4-col mdl-cell--2-col-tablet mdl-grid movie-lang\"><div><img src=\"images/" . $movie['sprache'] . ".png\"></div></div>
                    <div class=\"mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet mdl-grid movie-location\"><div><img src=\"images/" . $movie['storage'] . ".png\"></div></div>";
              $i++;
      			}
          ?>
        </div>
      </main>
    </div>
    <?php include_once("include/scriptsource.incl.php"); ?>
  </body>
</html>
