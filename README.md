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
    virtualenv -p python3 venv
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
- Train nlu
```BASH
    rasa train nlu
```

- Shell
```BASH
    rasa shell nlu
```

- Stop
```BASH
    /stop
```

- Train
```BASH
    rasa train
```

- Train
```BASH
    rasa train
```

- Test chatbot in localhost
```BASH
    rasa x
    rasa run actions
```

- Test rasa shell
```BASH
    rasa shell
```

- To deactivate
```
deactivate
```
