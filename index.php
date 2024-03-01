<?php
  require("./db_config.php");
?>


<!DOCTYPE html>
<html>
  <head>

    <title>My Weather App</title>
    <link rel="icon" sizes="x32" type="image/x-icon" href="images/favicon.ico">


    <link rel="stylesheet" href="style/global.css">
    <link rel="script" href="script.js">
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
              <i class='bx bx-search' ></i>
              <form action="" method="get">
                <input type="text" name='ville' id="ville" placeholder="Search...">
                <input type="submit" hidden="hidden" > 
              </form>
            </a>
          </li>
          <li>
            <a href="index.html">
              <i class='bx bxs-sun' ></i>
              <span class="links_name">Meteo du jour</span>
            </a>
            <span class="tooltip">Meteo du jour</span>
          </li>
          <li>
            <a href="favoris.html">
              <i class='bx bxs-star' ></i>
              <span class="links_name">Favoris</span>
            </a>
            <span class="tooltip">Favoris</span>
          </li>
        </ul>
    </div>
    </div>

    <div class="row">
      <div class="column left">
        <div class="weather-box">
          <div class="box">
            <div class="info-weather">
              <div class="weather">
                <img src="images/icons8-soleil-emoji-96.png">
                  <p class="description">Sunny</span></p>
                  <p class="temperature">16<span>°C</span></p>
                  <p class="humidity">Humidité: 30%</p>
                  <p class="wind">Vent: 20 km/h</p>
                  <br>
              </div>
            </div>
          </div>
        </div>
        <hr style="margin: 10px 0 15px 0;">
        <h2 style="color:white;"> Prévisions </h2>
        <div class="weather-forecast" id="weather-forecast">
          <div class="weather-forecast-item">
            <div class="day">Mardi</div>
            <div class="temp">Night - 25.6°C</div>
            <div class="temp">Day - 35.6°C</div>
          </div>
        </div>
        <div class="weather-forecast" id="weather-forecast">
          <div class="weather-forecast-item">
            <div class="day">Mercredi</div>
            <div class="temp">Night - 25.6°C</div>
            <div class="temp">Day - 35.6°C</div>
          </div>
        </div>
        <div class="weather-forecast" id="weather-forecast">
          <div class="weather-forecast-item">
            <div class="day">Jeudi</div>
            <div class="temp">Night - 25.6°C</div>
            <div class="temp">Day - 35.6°C</div>
          </div>
        </div>
        <div class="weather-forecast" id="weather-forecast">
          <div class="weather-forecast-item">
            <div class="day">Vendredi</div>
            <div class="temp">Night - 25.6°C</div>
            <div class="temp">Day - 35.6°C</div>
          </div>
        </div>
        <div class="weather-forecast" id="weather-forecast">
          <div class="weather-forecast-item">
            <div class="day">Samedi</div>
            <div class="temp">Night - 25.6°C</div>
            <div class="temp">Day - 35.6°C</div>
          </div>  
        </div>
        <div class="weather-forecast" id="weather-forecast">
          <div class="weather-forecast-item">
            <div class="day">Dimanche</div>
            <div class="temp">Night - 25.6°C</div>
            <div class="temp">Day - 35.6°C</div>
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
    <script> 
      let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        let searchBtn = document.querySelector(".bx-search");

        btn.onclick = function() {
        sidebar.classList.toggle("active");
      }

      searchBtn.onclick = function() {
        sidebar.classList.toggle("active");
      }
    </script>
    
  </body>
</html>