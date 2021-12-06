FROM httpd:2.4
#installs python just in case
RUN apt update && apt install -y python3
#the below command removes any cached subfolders and files
RUN rm -rf /usr/local/apache2/htdocs/
#copied the updated website folder folder
COPY html/ /usr/local/apache2/htdocs/

EXPOSE 80
