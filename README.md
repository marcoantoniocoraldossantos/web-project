# Web Creation Project with Apache, PHP, and Dynamic Information

This project demonstrates the configuration of an Apache server, enabling PHP, and creating a web page with dynamic information, including geolocation and browser details.

## Apache Installation and PHP Enablement

### Apache Installation:

    sudo apt update
    sudo apt install apache2

### PHP Enablement:

    sudo apt install php libapache2-mod-php

Next, restart Apache:

    sudo systemctl restart apache2


## Creation of PHP Page with Dynamic Information

### Clone the Repository:

Clone this repository to get the necessary files:

    git clone <URL_DO_REPOSITORIO>

### Access the Directory:

Navigate to the project directory:

    cd nome_do_projeto

### Open the PHP File:

Edit the `index.php` file in your preferred code editor. This file contains PHP and JavaScript code to display dynamic information on the page.

### Run the Project:

Place the files in your web server directory. If you followed the installation instructions, the default directory will be `/var/www/html`. You can copy the files to this directory:

    sudo cp index.php /var/www/html/

Now, you can access the page in your browser at http://localhost/.

## Dynamic Information

The PHP page displays dynamic information, including:

- Client's IP
- Current Date
- Current Time
- Browser Used
- Browser Language
- Screen Resolution
- Device Type (Desktop or Mobile)
- Client's Operating System
- Connection Type (if available)
