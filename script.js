let btn = document.querySelector("#btn");
  let sidebar = document.querySelector(".sidebar");
  let searchBtn = document.querySelector(".bx-search");

  btn.onclick = function() {
   sidebar.classList.toggle("active");
}

  searchBtn.onclick = function() {
   sidebar.classList.toggle("active");
}


const container = document.querySelector('.container');              
const search = document.querySelector('.search-box button');         
const weatherBox = document.querySelector('.weather-box');           
const weatherDetails = document.querySelector('.weather-details');   
const error404 = document.querySelector('.not-found'); 


search.addEventListener('click', () => {

  const APIKey =  '6fccd5f02f1598bf9a7c9826cfd7d639';
  const city = document.querySelector('.search-box input').value;

  if (city == '')
    return;
  fetch('https://api.openweathermap.org/data/2.5/weather?q=Moscou&units=metric&appid=6fccd5f02f1598bf9a7c9826cfd7d639').then(response => response.json()).then(json => { 

    if (json.cod == '404') {                          
        container.style.height = '400px';             
        weatherBox.classList.remove('active');        
        weatherDetails.classList.remove('active');    
        error404.classList.add('active');             
        return;
    }                                                  

    container.style.height = '555px';                 
    weatherBox.classList.add('active');               
    weatherDetails.classList.add('active');           
    error404.classList.remove('active');              
    


    const image = document.querySelector('.weather-box img');
    const temperature = document.querySelector('.weather-box .temperature');
    const description = document.querySelector('.weather-box .description');
    const wind = document.querySelector('.weather-box .wind');
    const humidity = document.querySelector('.weather-details .humidity');

    switch (json.weather[0].main) {
        case 'Clear':
            image.src = "C:\Users\33627\Desktop\CESI\Cubes 2\icons8-soleil-emoji-96.png";
            break;

        case 'Rain':
            image.src = "C:\Users\33627\Desktop\CESI\Cubes 2\icons8-pluie-96.png";
            break;

        case 'Snow':
            image.src = "C:\Users\33627\Desktop\CESI\Cubes 2\icons8-neige-96.png";
            break;

        case 'Clouds':
            image.src = "C:\Users\33627\Desktop\CESI\Cubes 2\icons8-nuage-96.png";
            break;

         default:
            image.src = C:\Users\33627\Desktop\CESI\Cubes 2\icons8-soleil-emoji-96.png";
      }

      temperature.innerHTML = '$(parseInt(json.main.temp)}<span></span>';
      description.innerHTML = '$(json.weather[0].description)';
      humidity.innerHTML = '$(json.main.humidity)%';
      wind.innerHTML = '$(parseInt(json.wind.speed)}Km/h';

   });











});