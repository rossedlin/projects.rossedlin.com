cd /var/www/
echo "Install -> projects.rossedlin.com"

#Cleanup
rm -R -f projects
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
    git clone https://github.com/rossedlin/www.rossedlin.com-landing-page


    #Folders
#    cd /var/www/
#    mv projects old_projects
#    mv projects.rossedlin.com projects

#    #Public
#    cd /var/www/www
#    cp ./build/live/robots.txt ./public/robots.txt
#    cp ./build/live/.htaccess ./public/.htaccess

    #Permissions
    chmod 777 -R /var/www/projects.rossedlin.com

fi