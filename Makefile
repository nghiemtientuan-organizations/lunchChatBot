.DEFAULT_GOAL := help

.PHONY: requirements

requirements: ## Install requirements
	pip install -r requirements/base.txt
	pip install rasa-x --extra-index-url https://pypi.rasa.com/simple
