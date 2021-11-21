# Project Overview

This project will look into the use of containers. 
1. How to install the required software and dependencies.
2. How to build an container into an image from an Dockerfile or from an current compiled image.
3. Run a container as an interactive shell or an detached service
4. View the container in an web browser

## Install Docker

sudo apt update

sudo apt-get install docker-ce docker-ce-cli containerd.<span></span>io

## Build a container
sudo docker build -t imagename:imageversion directoryofdockerfile

**Example**:
sudo docker build -t coolWebsite:1.0 .

**Note**: . is current working directory

This creates an image called coolWebsite Version 1.0.
It looks in the current directory for a Dockerfile and uses it to create the image


## Run a container
sudo docker run -it --name containername originalcontainername:containerversion

**Example**:
sudo docker run -it --name coolwebserver coolWebsite:1.0

**Note**: Running container for a webserver with a port unintended

sudo docker run -dit --name containername -p 8080:80 -v /home/ubuntu/cicd ubuntu

## View in web browser

Type in search bar, type localhost:8080 or private/publicip:8080