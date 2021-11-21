# Project Overview

The Project will look into the use of containers with building and running them as well as 
creating Dockerfiles for use in building images

## Install Docker

sudo apt update

sudo apt-get install docker-ce docker-ce-cli containerd.io

## Build a Container
sudo docker build -t imagename:imageversion directoryofdockerfile
**Example**
sudo docker build -t coolWebsite:1.0 .
. is working directory

## Run a container
sudo docker run -it --name containername originalcontainername:containerversion

**Example**
sudo docker run -it --name coolwebserver coolWebsite:1.0

**Note** Running container for a webserver with a port unintended
sudo docker run -dit --name containername -p 8080:80 -v /home/ubuntu/cicd ubuntu

## View in web browser

Type in search bar, type localhost:8080 or private/publicip:8080