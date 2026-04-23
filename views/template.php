<!DOCTYPE html>

<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex, nofollow">
  <title>EvacFinder</title>

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="16x16" href="views/assets/images/favicon.png">

  <!-- CSS -->
  <link rel="stylesheet" href="views/assets/vendor/jqvmap/css/jqvmap.min.css">
  <link rel="stylesheet" href="views/assets/vendor/chartist/css/chartist.min.css">
  <link rel="stylesheet" href="views/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="views/assets/css/perfect-scrollbar.css">
  <link rel="stylesheet" href="views/assets/css/style.css">
</head>

<body>

  <?php 
    if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == "ok"):
  ?>

    <!-- ==============================
         LOGGED IN: MAIN APP LAYOUT
    =============================== -->

    <!-- Preloader -->
    <div id="preloader">
      <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
      </div>
    </div>

<!-- Main Wrapper -->
<div id="main-wrapper">

  <!-- Top Navbar -->
  <?php include "modules/navbar.php"; ?>

  <!-- Sidebar -->
  <?php include "modules/sidebar.php"; ?>

  <!-- Main Content Area -->
  <div class="content-body">
    <div class="container-fluid">

      <?php
        if (isset($_GET["route"])) {
          $route = basename($_GET["route"]);

          $allowedRoutes = [
            'home',
            'logout',
            'centers',
          ];

          if (in_array($route, $allowedRoutes)) {
            include "modules/" . $route . ".php";
          } else {
            include "modules/404.php";
          }

        } else {
          $route = "home";
          include "modules/home.php";
        }
      ?>

    </div>
  </div>

</div>
<!-- End Main Wrapper -->   

  <?php else: ?>

    <!-- ==============================
         NOT LOGGED IN: SHOW LOGIN
    =============================== -->
    <?php include "modules/login.php"; ?>

  <?php endif; ?>


  <!-- ==============================
       SCRIPTS (loaded at bottom)
  =============================== -->

  <!-- Core -->
  <script src="views/assets/vendor/global/global.min.js"></script>
  <script src="views/assets/js/deznav-init.js"></script>
  <script src="views/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
  <script src="views/assets/js/custom.min.js"></script>

  <!-- Charts -->
  <script src="views/assets/vendor/chart.js/Chart.bundle.min.js"></script>
  <script src="views/assets/vendor/gaugeJS/dist/gauge.min.js"></script>

  <!-- Counter Up -->
  <script src="views/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="views/assets/vendor/jquery.counterup/jquery.counterup.min.js"></script>

  <!-- SVG Animation -->
  <script src="views/assets/vendor/svganimation/vivus.min.js"></script>
  <script src="views/assets/vendor/svganimation/svg.animation.js"></script>

  <?php
    // Load page-specific JS only for the current route
    if (isset($route)) {
      $routeScripts = [
        "home"    => ["home.js"],
      ];

      if (array_key_exists($route, $routeScripts)) {
        foreach ($routeScripts[$route] as $script) {
          $scriptPath = "views/js/" . $script;
          if (file_exists($scriptPath)) {
            echo '<script src="/EvacFinder/' . $scriptPath . '"></script>';
          }
        }
      }
    }
  ?>

</body>
</html>