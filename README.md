<p align="center">
          <img src="https://i.postimg.cc/YS6DBP5D/weather-ico.png" width="312" height="312"/>
</p>
          
# Desktop
<br>

07:00

![eltiempo](https://i.postimg.cc/fL5HJ9Tx/weatherday.png)

<br> 

21:00

![eltiempo](https://i.postimg.cc/cHd9xmZx/weathernight.jpg)

# Mobile
<br>
<img src="https://i.postimg.cc/DwTCB4PG/mobile-weather.png" alt="mobile-weather"/><br>

# Tablet
<br>
<img src="https://i.postimg.cc/52SsG9sR/ipad-weather.png" alt="ipad-weather"/><br>


# Weather (El tiempo)

Website in PHP with functionality to collect the current weather of different cities, use a third-party API.

## Requirements


- Register to [https://www.tiempo.com/api/#/login](https://www.tiempo.com/api/#/login).
- Php 5.6+.


## Installation

1. Register on the page of [https://www.tiempo.com/api/#/login](https://www.tiempo.com/api/#/login) to obtain the apikey.

2. Edit config in 'core/config.php and paste apikey.

          $timeSet = 'Europe/Madrid';

          $city = 313; 
          $apikey = '*****'; 

          $background_navbar_day_color = '#2c568c';
          $background_navbar_night_color = '#000000';

          $background_day_color = '#457fca';
          $background_night_color = '#212121';

          $time_day_control_min = '07:00';
          $time_day_control_max = '21:00';

          2.1 - Explanation:

                    $timeSet -> Set the default time zone.

                    $city -> Default city on the main page.
                    $apikey -> Add your private api key https://www.tiempo.com/api

                    $background_navbar_day_color -> Default background nav bar color day.
                    $background_navbar_night_color -> Default background nav bar color night.

                    $background_day_color -> Default background div color day.
                    $background_night_color -> Default background div color night.

                    $time_day_control_min -> Start time of the day to change background.
                    $time_day_control_max -> End of day time day to change background.
                     

3. Run.

## Website project

[http://davidespier.com/pages/weather/](http://davidespier.com/pages/weather/)


## Authors

 *Developed and designed by*  **David Espier**


[Personal website](https://davidespier.com)

[Alexa skills](https://www.amazon.es/s?k=davidespier&i=alexa-skills)
        
[Other projects](https://github.com/davidespier?tab=repositories)



## License


[MIT License](https://choosealicense.com/licenses/mit/) © davidespier.com
