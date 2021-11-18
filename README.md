# Project Overview

The Project will look into the use of containers with images, operating systems and software

## Install Docker

sudo apt update

sudo apt-get install docker-ce docker-ce-cli containerd.io

## Build a Container
sudo docker build -t coolWebsite:0.1 .
. is working directory

## Run a container

sudo docker run -dit --name containername -p 8080:80 -v /home/ubuntu/cicd ubuntu

## View in web browser

Type in search bar, localhost:8080