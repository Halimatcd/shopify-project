# Shopify Project Solution

(This project uses the Vuexy HTML Template for the frontend scaffolding) and Laravel frame work

This README.md file will contain the step by step instructions on how to
setup the codebase and install all dependencies
### This project basically allows an admin user to:
* create inventories
* Update inventories
* Delete inventories 
* add inventory comments 
* list out all inventories created.

# Installation Process
> ## XAMPP For windows
XAMPP is a free softwares. The software packet contains the web server Apache, the relational database management system MySQL (or MariaDB), and the scripting languages Perl and PHP. The initial X stands for the operating systems that it works with: Linux, Windows, and Mac OS X

### 1. Download XAMPP on the official website
* [Download xampp](https://www.apachefriends.org/download.html)
### 2. Set up XAMPP 
* Select the components to install with XAMP Actually we only need Apache, MySQL, and phpMyAdmin.
* Select the installation folder. In default, it will be C:\xampp
* Open XAMPP and start the Apache and MySQL.
* All codes should be stored in xampp/htdocs 
### 3. Download composer
* [Download composer](https://getcomposer.org/Composer-Setup.exe)
> ## PHP/MYSQL for linux
### Follow the installation process step by step
```console
foo@bar:~$ sudo apt install apache2
```
```console
foo@bar:~$ Run sudo apt install apache2
```
```console
foo@bar:~$ sudo service apache2 status
```
```console
foo@bar:~$ sudo apt -y install software-properties-common
```
```console
foo@bar:~$ sudo add-apt-repository ppa:ondrej/php
```
```console
foo@bar:`$ sudo apt-get update
```
```console
foo@bar:~$ * sudo apt -y install php8.0
```
```console
foo@bar:~$ sudo apt install mysql-server mysql-client
```
```console
foo@bar:~$ sudo mysql_secure_installation
```
* enter a pssword
```console
foo@bar:~$ sudo mysql -u root -
```
Enter the password you specified in the previous step
## Install composer
[Installing composer on linux](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-20-04)
# Cloning the repository
* open the repository and copy the code url
* open code editor and locate the terminal
```console
foo@bar:~$ git clone url_link
```
```console
foo@bar:~$ composer install (to download all dependencies needed) 
```
```console
foo@bar:~$ cphp artisan serve
```
* go the a web app and type 127.0.0.1:8000/ or follow the link on the terminal.
* create a database
* import the SQL file into your database

# Accessing the code
>> The app folder
* Contains several other folders but we can locate the Http folder which contains the PagesController folder that serves and a mediator between the front-end and database
* The models folder can also be found in the Apps folder and this basically interacts with the database.
>> The database folder 
* The database folder has a subfolder called the migration folder that handles migrations. This folders save files that assist us communicate directly to the folder eg we can create tables, add colums etc.
>> The resources folder
* The resources folder contains the views folder that holds all our pages to be loaded. Other folders in the resources folder are majourly front-end based.
>> The routes folder
* In routes folder the web.php file contains all routes  that would be needed.
>> The .env file 
* Its used to define some variables you want to pass into your application's environment. Make sure to specify the USERNAME, DATABASE NAME AND PASSWORD

# Navigating through the website
>>> The side bar
### Consists of <ul>
        All inventories page: Loads all inventories fronm the database
        Create Inventory page: That allows for the creation of inventories
        Trash page: That allows one see deleted items and helps restore or delete them totally.
</ul>