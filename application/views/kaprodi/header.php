<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kaprodi</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="<?php echo base_url();?>assets/images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="<?php echo base_url();?>assets/images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/material.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles.css">
    <script src="<?php echo base_url();?>assets/css/material.js"></script>
  </head>
  
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div aria-expanded="false" role="button" tabindex="0" class="mdl-layout__drawer-button <?php if($status == 'add_asisten') { echo 'hidden'; }?>"><i class="material-icons"></i></div>
        <div class="mdl-layout__header-row" style="background: hsl(0, 0%, 29.41176470588235%); color: white">
          <?php if($status != 'add_asisten') { ?>
          <h1>
              <span class="mdl-layout-title" style="margin-bottom: 2px"><?php echo $judul; ?></span>
              <span class="mdl-layout-title" style="margin-top: 2px; font-size: 15px">Ketua Program Studi</span>
          </h1>
          <?php } else { ?>
          <h1>
              <span class="mdl-layout-title" style="left: -50px">
                <!-- <a href="<?php echo base_url(); ?>index.php/tu/memilih_oprec"> -->
                  <button onclick="load_page('<?php echo base_url(); ?>index.php/kaprodi/memilih_oprec')" style="width: 40px; height: 40px; font-size: 32px" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                    <i style="color: white" class="material-icons">arrow_back</i>
                  </button>
                <!-- </a> -->
                <span style="margin-left: 10px; display: inline-block; vertical-align: middle; font-size: 15px">
                  <span style="display: block; padding-bottom: 3px; font-size: 20px"><?php echo $judul; ?></span>
                  <span style="display: block; padding-top: 3px">Semester <?php echo $detail_oprec[0]['j_semester'] . " " . $detail_oprec[0]['j_tahun'] ?></span>
                </span>
                
              </span>
          </h1>
          <?php } ?>
          <div class="mdl-layout-spacer"></div>
          <span style="font-weight: 400">kaprodi.if@its.ac.id</span>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">arrow_drop_down</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">
              <i class="material-icons v-middle">account_circle</i>
                <a href="<?php echo base_url(); ?>user/edit_akun"><span class="v-middle">Profile</span></a>
            </li>
            <li class="mdl-menu__item">
              <i class="material-icons v-middle">exit_to_app</i>
                <a href="<?php echo base_url(); ?>user/logout"><span class="v-middle">Logout</span></a>
            </li>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer ">
        <nav class="demo-navigation mdl-navigation">
              <div class="mdl-menu__item--full-bleed-divider"></div>
              <a class='mdl-navigation__link <?php if($menus) echo 'active' ?>' href='<?php echo base_url(); ?>index.php/kaprodi'>
                <i class=' material-icons' role='presentation'>home</i>Menus
              </a>
              <div class="mdl-menu__item--full-bleed-divider"></div>
              <a class='mdl-navigation__link <?php if($memilih) echo 'active' ?>' href='<?php echo base_url(); ?>index.php/kaprodi/memilih_oprec'>
                <i class=' material-icons' role='presentation'>today</i>Memilih Asisten Dosen
              </a>
              <a class='mdl-navigation__link <?php if($list_calon) echo 'active' ?>' >
                <i class='material-icons' role='presentation'>forum</i>List Calon Asisten
              </a>
<!--               <a class='mdl-navigation__link <?php if($dosen) echo 'active' ?>' >
                <i class='material-icons' role='presentation'>people</i>Pengelolaan Akun Dosen
              </a> -->
              <div class="mdl-layout-spacer"></div>
        </nav>
      </div>