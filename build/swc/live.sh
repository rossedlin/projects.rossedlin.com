cd /var/www/
echo "Install -> projects.rossedlin.com"

#Cleanup
rm -R -f projects.rossedlin.com

#Git
git clone -b master https://github.com/rossedlin/projects.rossedlin.com

if [ -d /var/www/projects.rossedlin.com ]; then

    #Composer
    cd /var/www/projects.rossedlin.com
    composer install

    #Clone Individual Projects
    cd /var/www/projects.rossedlin.com/projects
    git clone https://github.com/rossedlin/interesting-holiday-destination
    git clone https://github.com/rossedlin/www.rossedlin.com-landing-page landing-page

    #Run Composer on Individual Projects
    cd /var/www/projects.rossedlin.com/projects/landing-page
    composer install

    #Permissions
    chmod 777 -R /var/www/projects.rossedlin.com

    #Apache
    sudo service apache2 restart

fi