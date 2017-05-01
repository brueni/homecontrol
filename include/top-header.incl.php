<header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
  <div class="mdl-layout__header-row">
    <span class="mdl-layout-title"><?php echo $pagetitle; ?></span>
    <div class="mdl-layout-spacer"></div>
    <?php if($pagetitle=="Diagramme") {
      echo "<button id=\"menu_temp\"
              class=\"mdl-button mdl-js-button mdl-button--icon\">
        <i class=\"material-icons\">whatshot</i>
      </button>

      <ul class=\"mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect\"
          for=\"menu_temp\">
        <a href=\"?t3h\"><li class=\"mdl-menu__item\">3 Stunden</li></a>
        <a href=\"?t24h\"><li class=\"mdl-menu__item\">24 Stunden</li></a>
        <a href=\"?t48h\"><li class=\"mdl-menu__item\">48 Stunden</li></a>
        <a href=\"?t1w\"><li class=\"mdl-menu__item\">1 Woche</li></a>
        <a href=\"?t1m\"><li class=\"mdl-menu__item\">1 Monat</li></a>
        <a href=\"?t3m\"><li class=\"mdl-menu__item\">3 Monate</li></a>
        <a href=\"?t1y\"><li class=\"mdl-menu__item\">1 Jahr</li></a>
      </ul>

      <button id=\"menu_humid\"
              class=\"mdl-button mdl-js-button mdl-button--icon\">
        <i class=\"material-icons\">invert_colors</i>
      </button>

      <ul class=\"mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect\"
          for=\"menu_humid\">
        <a href=\"?h3h\"><li class=\"mdl-menu__item\">3 Stunden</li></a>
        <a href=\"?h24h\"><li class=\"mdl-menu__item\">24 Stunden</li></a>
        <a href=\"?h48h\"><li class=\"mdl-menu__item\">48 Stunden</li></a>
        <a href=\"?h1w\"><li class=\"mdl-menu__item\">1 Woche</li></a>
        <a href=\"?h1m\"><li class=\"mdl-menu__item\">1 Monat</li></a>
        <a href=\"?h3m\"><li class=\"mdl-menu__item\">3 Monate</li></a>
        <a href=\"?h1y\"><li class=\"mdl-menu__item\">1 Jahr</li></a>
      </ul>";
    } elseif(isset($pagetitle2)) {
      if($pagetitle2=="homecinema-selection") {
        echo "<button class=\"mdl-button mdl-js-button mdl-button--icon\" onclick=\"location.href='?category=" . $_GET['category'] . "';\">
                <i class=\"material-icons\">all_inclusive</i>
              </button>
              <button class=\"mdl-button mdl-js-button mdl-button--icon\" onclick=\"location.href='?category=" . $_GET['category'] . "&view=1';\">
                <i class=\"material-icons\">visibility</i>
              </button>
              <button class=\"mdl-button mdl-js-button mdl-button--icon\" onclick=\"location.href='?category=" . $_GET['category'] . "&view=0';\">
                <i class=\"material-icons\">visibility_off</i>
              </button>";
      }
    }
    ?>
  </div>
</header>
