nom d'hote : raspberrypi@local

nom d'utilisateur : cesi
mdp : isec

phpmyadmin :
mdp : isec

kasskass.tor@yahoo.fr
KasKass.T553



Il peut y avoir des problème de bus 

ssh cesi@raspberrypi.local

i2cdetect -y 21 (afficher les périphériques)

sudo raspi-config

aller dans "Interface config"

--------------------------------------------------------------

SI WARNING LORS DE LA CONNEXION 
Faire un "ssh-keygen -R raspberrypi.local"

-
sudo raspi-config

aller dans "Interface config"

enable 2IC

-

wget -O bme280.py http://bit.ly/bme280py

i2cdetect -y 1

rajouter les parenthèses a tout les prints (bme280.py) pour voir si ça marche 

Etape de création de la base de données 

Ajout du script pour l'affichage sur l'écran LCD 

Intallation de mysql-connector  -> "pip install mysql-connector-python --break-system-packages"




------------------------------

pip install request --break-system-packages
pip install mysql-connector-python --break-system-packages

Champ DB : 

Temp : 
	date
	temp_int
	temp_ext
	pressure
	humidity 
	wind_speed
	weather
	id_eather_icon

Ville : 
	nom
	long
	lat
	get_data


CREATE TABLE temp (
	id PK 
	id_city FK
	date
	temp_int
	temp_ext
	pressure
	humidity 
	wind_speed
	weather
	id_eather_icon
);



base de données : 
user : "cesi" 
password : "isec"

redmi mdp : 141fb467e201
https://ngrok.com/docs/guides/device-gateway/linux/ -> ngrok linux 
https://randomnerdtutorials.com/raspberry-pi-apache-mysql-php-lamp-server/ -> mysql
https://www.freva.com/fr/comment-connecter-un-ecran-lcd-a-un-raspberry-pi/
https://www.raspberryme.com/utilisation-du-capteur-de-temperature-et-de-pression-bme280-i2c-en-python/
https://moez-62905.medium.com/the-ultimate-guide-to-command-line-arguments-in-python-scripts-61c49c90e0b3#:~:text=In%20Python%2C%20command%2Dline%20arguments,arguments%20passed%20to%20the%20script.
https://gayerie.dev/docs/python/python3/mysql.html




