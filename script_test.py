import requests
import json
import mysql.connector
import sys



# Récupération d'OW data 
req = requests.get('https://api.openweathermap.org/data/2.5/weather?lat=43.2951&lon=-0.370797&appid=6fccd5f02f1598bf9a7c9826cfd7d639')  
r = json.loads(req.text)


print("----------------------------------------------------------------------------")
# print(req.status_code)
print(int(r["main"]["temp"]) - 273 )
print(r["main"]["pressure"])
print(r["main"]["humidity"])
print(r["wind"]["speed"])
print(r["weather"][0]["description"])
print(r["weather"][0]["icon"])

# Ajout dans la base de donnée
# connection_params = {
#     'host':"localhost",
#     'user':"cesi",
#     'password':"isec",
#     'database':"meteo"
# }