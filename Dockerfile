FROM rasa/rasa-sdk:2.6.0

# Use subdirectory as working directory
WORKDIR /app

# Copy any additional custom requirements, if necessary (uncomment next line)
# COPY actions/requirements-actions.txt ./

# Change back to root user to install dependencies
USER root

# Copy actions folder to working directory
COPY ./actions /app/actions
COPY ./requirements /app/requirements
COPY ./db /app/db

# Install extra requirements for actions code, if necessary (uncomment next line)
RUN pip install -r requirements/actions.txt

# By best practices, don't run the code with root user
USER 1001
