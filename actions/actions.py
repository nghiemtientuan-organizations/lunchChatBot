# This files contains your custom actions which can be used to run
# custom Python code.
#
# See this guide on how to implement these action:
# https://rasa.com/docs/rasa/custom-actions

import sqlite3
import requests
from typing import Any, Text, Dict, List
from rasa_sdk import Action, Tracker
from rasa_sdk.executor import CollectingDispatcher
from datetime import datetime

# sqliteConnection = sqlite3.connect('chatbot.db')
# cursor = sqliteConnection.cursor()
# print("Database created and Successfully Connected")

now = datetime.now()
month = now.strftime('%m')
seasons_name = [
    'mùa xuân',
    'mùa hè',
    'mùa thu',
    'mùa đông',
]
weather_org_url = 'https://api.openweathermap.org/data/2.5/weather?q=hanoi&appid=1cefc1d741a0e2bc1ce1728e91d651ec'


def now_season():
    switcher = {
        1: seasons_name[3],
        2: seasons_name[0],
        3: seasons_name[0],
        4: seasons_name[0],
        5: seasons_name[1],
        6: seasons_name[1],
        7: seasons_name[1],
        8: seasons_name[2],
        9: seasons_name[2],
        10: seasons_name[2],
        11: seasons_name[3],
        12: seasons_name[3],
    }

    return switcher.get(int(month), seasons_name[0])


# class ActionHelloWorld(Action):
#
#     def name(self) -> Text:
#         return "action_hello_world"
#
#     def run(self, dispatcher: CollectingDispatcher,
#             tracker: Tracker,
#             domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
#
#         dispatcher.utter_message(text="Hello World!")
#
#         return []


# action get date info
class ActionGetDate(Action):
    def name(self) -> Text:
        return 'action_get_date'

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        dispatcher.utter_message(text=now.strftime('%d/%m/%Y %H:%M:%S'))

        return []


# action get season info
class ActionGetSeason(Action):
    def name(self) -> Text:
        return 'action_get_season'

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        dispatcher.utter_message(text=now_season())

        return []

# action get temperature info
class ActionGetTemperature(Action):
    def name(self) -> Text:
        return 'action_get_temperature'

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        response = requests.get(weather_org_url)
        print(response)
        dispatcher.utter_message(text='response temperature here')

        return []

# action get food
class ActionGetFood(Action):
    def name(self) -> Text:
        return 'action_get_food'

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        # get food here
        dispatcher.utter_message(text='response temperature here')

        return []

# action how to cook food
class ActionHowToCookFood(Action):
    def name(self) -> Text:
        return 'action_how_to_cook_food'

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        # action find cook food here
        dispatcher.utter_message(text='response temperature here')

        return []
