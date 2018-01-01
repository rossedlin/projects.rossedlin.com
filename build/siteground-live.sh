cd ~/rossedlin.com/
echo "Install -> projects.rossedlin.com"

#Cleanup
rm -R -f old_projects
rm -R -f projects.rossedlin.com

#Git
git clone -b master https://bitbucket.org/rossedlin/projects.rossedlin.com

if [ -d ~/rossedlin.com/projects.rossedlin.com ]; then

    #Composer
    cd ~/rossedlin.com/projects.rossedlin.com
    composer install
    composer update
#
#    #Environment File
#    cd ~/rossedlin.com/
#    cp ~/rossedlin.com/www/.env ~/rossedlin.com/www.rossedlin.com-laravel/.env
#
#    #Folders
#    cd ~/rossedlin.com/
#    mv www old_www
#    mv www.rossedlin.com-laravel www
#
#    #Public
#    cd ~/rossedlin.com/www
#    cp ./build/live/robots.txt ./public/robots.txt
#    cp ./build/live/.htaccess ./public/.htaccess
#
#    #Permissions
#    chmod 755 -R ~/rossedlin.com/www

fi