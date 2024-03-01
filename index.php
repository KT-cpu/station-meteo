<?php
  require("../conf/db_config.php");
?>


<!DOCTYPE html>
<html>
  <head>

    <title>My Weather App</title>
    <link rel="icon" sizes="x32" type="image/x-icon" href="images/favicon.ico">


    <link rel="stylesheet" href="style/global.css">
    <!-- Boxicon CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>


    <div id="container">
    <header>
        <div class="text-content">
          <h1>Météo du jour</h1>
        </div>
      </header>
    </div>
    <div class="sidebar">
        <div class="logo_content">
          <div class="logo">
            <i class='bx bx-sun'></i>
            <div class="logo_name">Weather App</div>
          </div>
          <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
          <li>
            <a>
              <i class='bx bx-search' id="search"></i>
              <input type="text" placeholder="Search..." id="inputt">
            </a>
          </li>
          <li>
            <a href="index.php">
              <i class='bx bxs-sun' ></i>
              <span class="links_name">Meteo du jour</span>
            </a>
            <span class="tooltip">Meteo du jour</span>
          </li>
        </ul>
    </div>

    <div class="row">
      <div class="column left">
        <div class="weather-box">
          <div class="box">
            <div class="info-weather">
              <div class="weather">
                <div class="others" id="main-weather-items">
                  <h2 style="margin-top: 20px;">Selectionner une ville </h2>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="column right">
      <h2 style="color:white;"> Température Interieure </h2>
        <?php 
          if($temps = $mysqli->query (
            "SELECT * FROM `temp`
            ORDER BY temp.date DESC
            LIMIT 5;"
          ))  
          {
            foreach ($temps as $temp) {
              echo "<p class = 'temp_int'> ". $temp['date'] ." : " . $temp['temp_int'] . "°C </p>";
            }
          }
        ?>  
      </div>
    </div>
    <script> 
      let btn = document.querySelector("#btn");
      let sidebar = document.querySelector(".sidebar");
      let searchBtn = document.querySelector(".bx-search");

      btn.onclick = function() {
        sidebar.classList.toggle("active");
      }
   

    </script>

    <script src="scripts/script.js"></script>

  </body>
</html>