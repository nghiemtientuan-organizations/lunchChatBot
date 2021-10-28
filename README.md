# 1. Introduction
Project Name: BanhBao.

Description: This is a project that allows users to recommend dishes through chatbot.

Language: Python 3.

Framework: Rasa.

# 2. Prerequisites
- make ```sudo apt install make```
- python3-dev python3-pip ```sudo apt install python3-dev python3-pip```
- Python >= 3.8

# 3. Run with docker
```
    cp .env.example .env
    docker-compose up -d
    docker exec -it lunch_rasa sh
    rasa train
    exit
```

Access link: http://localhost:5002

Change folder permission
```
    sudo chmod 777 models events.db* rasa.db*
    sudo chown ${USER}:root models events.db* rasa.db*
    docker stop $(docker ps -aq)
    docker-compose up -d
```

# 4. Documents:
- [Rasa](https://rasa.com/docs/rasa/installation/)

# 5. Install immediate to PC
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
terminal 1 (http://localhost:5055)
```BASH
    rasa train
    rasa run actions
```

terminal 2 - UI (http://localhost:5005)
```BASH
    rasa x
```

# 6. Example rasa commands
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
