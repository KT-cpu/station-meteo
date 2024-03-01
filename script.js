const days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];

const mainWeatherItemsEl = document.getElementById('main-weather-items');
const API_KEY ='6fccd5f02f1598bf9a7c9826cfd7d639';




function fetchData (){
      let ville = document.getElementById("inputt").value;
      fetch(`https://api.openweathermap.org/data/2.5/weather?q=${ville}&units=metric&appid=${API_KEY}`).then(res => res.json()).then(data =>{
      console.log(data);
      showWeatherData(data);
 
});
};

document.getElementById("search").addEventListener("click" , fetchData);

function showWeatherData (data){
    let {feels_like, humidity} = data.main;
    let wind_speed = data.wind.speed;
    let description = data.weather[0].main;
    let icon = data.weather[0].icon;
    console.log(wind_speed);

  
    mainWeatherItemsEl.innerHTML =
     `<div class="weather">
         <img src="https://openweathermap.org/img/wn/{icon}.png" alt="weather icon" class="w-icon">
     </div>

     <div class="weather-item">
         <div>${description}</div>
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
