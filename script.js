const days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];

const mainWeatherItemsEl = document.getElementById('main-weather-items');
const API_KEY ='6fccd5f02f1598bf9a7c9826cfd7d639';
const ville = document.getElementById("inputt");

      fetch(`https://api.openweathermap.org/data/2.5/weather?q=Morlaas&units=metric&appid=${API_KEY}`).then(res => res.json()).then(data =>{
      console.log(data);
      showWeatherData(data);
 
});

function showWeatherData (data){
    let {weather} = data.weather;
    let {feels_like, humidity} = data.main;
    let {wind_speed} = data.wind
    

    mainWeatherItemsEl.innerHTML =
     `<div class="weather-item">
         <div>${weather}</div>
     </div>
     <div class="weather-item">
         <div>${feels_like}°C</div>
     </div>

     <div class="weather-item">
         <div>Humidité</div>
         <div>${humidity}%</div>
     </div>
     <div class="weather-item">
         <div>Vent</div>
         <div>${wind_speed}</div>
     </div>`;
}
