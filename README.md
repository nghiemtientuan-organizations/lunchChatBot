# 1. Introduction
Project Name: BanhBao.

Description: This is a project that allows users to recommend dishes through chatbot.

Language: Python 3.

Framework: Rasa.

# 2. Prerequisites
- make ```sudo apt install make```
- python3-dev python3-pip ```sudo apt install python3-dev python3-pip```
- Python >= 3.8

# 3. Install
- Install the requirements inside of a Python virtualenv (recommend)
```BASH
    pip install virtualenv
    virtualenv -p python3.8 venv
    source venv/bin/activate
```

- Make requirements
```BASH
    make requirements
```

- Start Rasa X
terminal 1 (http://localhost:5005)
```BASH
    rasa x
```

terminal 2 (http://localhost:5055)
```BASH
    rasa run actions
```

# 4. Documents:
- [Rasa](https://rasa.com/docs/rasa/installation/)

# 5. Example rasa commands
- Train nlu and run in shell
```BASH
    rasa train nlu
    rasa shell nlu
```

- Stop
```BASH
    /stop
```

- Train all
```BASH
    rasa train
    rasa shell
    rasa run actions
    rasa x
```

- To deactivate
```
deactivate
```
