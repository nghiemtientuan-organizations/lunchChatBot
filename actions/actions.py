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
from typing import Any, Text, Dict, List
from rasa_sdk import Action, Tracker
from rasa_sdk.events import SlotSet, SessionStarted, ActionExecuted, EventType

# sqliteConnection = sqlite3.connect('../db/foods.db')
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
default_cold_temp = 25
default_warm_temp = 30
default_hot_temp = 35


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


def kel_to_cel(kelvin):
    return float(kelvin) - 273.15


def get_temp():
    try:
        response = requests.get(weather_org_url)
        data_json = response.json()
        main_data = data_json['main']

        return main_data['temp']
    except Exception:
        return None


# action get date info
class ActionGetDate(Action):
    def name(self) -> Text:
        return 'action_get_date'

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        dispatcher.utter_message(text=now.strftime('Bây giờ là: %H:%M.'))
        dispatcher.utter_message(text=now.strftime('Ngày %d/%m/%Y.'))

        return []


# action get season info
class ActionGetSeason(Action):
    def name(self) -> Text:
        return 'action_get_season'

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        dispatcher.utter_message(text='Hiện tại là mùa {session}'.format(session=now_season()))

        return []


# action get temperature info
class ActionGetTemperature(Action):
    def name(self) -> Text:
        return 'action_get_temperature'

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        try:
            response = requests.get(weather_org_url)
            data_json = response.json()
            main_data = data_json['main']
            temp, temp_min, temp_max = \
                kel_to_cel(main_data['temp']), kel_to_cel(main_data['temp_min']), kel_to_cel(main_data['temp_max'])
            win_data = data_json['wind']

            # response info
            dispatcher.utter_message(text='Theo tôi biết hiện tại đang là {} độ.'.format(temp))
            if temp_min != temp_max:
                dispatcher.utter_message(text='Cao nhất {} - thấp nhất {}.'.format(temp_min, temp_max))
            dispatcher.utter_message(
                text='Tốc độ gió là {} km/h, độ ẩm {}%'.format(win_data['speed'], main_data['humidity'])
            )

            # response bot's feel
            if temp <= default_cold_temp:
                dispatcher.utter_message(text='Trời lạnh thật, trời này mà ăn bát gì đó ấm ấm thì tuyệt cú mèo.')
            elif temp >= default_hot_temp:
                dispatcher.utter_message(text='Thời tiết nóng nhỉ, làm chút gì đó mát mát nào vừa thanh lọc cơ thể.')
            else:
                dispatcher.utter_message(text='Thời tiết này ăn gì cũng ngon.')
        except Exception:
            dispatcher.utter_message(
                text='Hiên tại tôi đang không lấy được dữ liệu về thời tiết. Phiền bạn thử lại sau.')

        return []


# action get food
class ActionGetSuggestFood(Action):
    def name(self) -> Text:
        return 'action_get_suggest_food'

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        # get food here
        dispatcher.utter_message(text='response suggest food here')

        return []


# action get food link
class ActionGetFoodLink(Action):
    def name(self) -> Text:
        return 'action_get_food_link'

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        # get food here
        dispatcher.utter_message(text='response food link here')

        return []


# action how to cook food
class ActionHowToCookFood(Action):
    def name(self) -> Text:
        return 'action_how_to_cook_food'

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        # action find cook food here
        dispatcher.utter_message(text='response how to cook food here')

        return []


# action restart story
class ActionRefreshStory(Action):
    def name(self) -> Text:
        return 'action_refresh_story'

    @staticmethod
    def fetch_slots(tracker: Tracker) -> List[EventType]:
        """Collect slots that contain the user's name and phone number."""

        slots = []
        for key in ("name", "phone_number"):
            value = tracker.get_slot(key)
            if value is not None:
                slots.append(SlotSet(key=key, value=value))
        return slots

    async def run(
            self, dispatcher, tracker: Tracker, domain: Dict[Text, Any]
    ) -> List[Dict[Text, Any]]:

        # the session should begin with a `session_started` event
        events = [SessionStarted()]

        return events
