cd ~/rossedlin.com/
echo "Install -> projects.rossedlin.com"

#Cleanup
rm -R -f old_projects
rm -R -f projects.rossedlin.com

#Git
git clone -b master https://github.com/rossedlin/projects.rossedlin.com

if [ -d ~/rossedlin.com/projects.rossedlin.com ]; then

    #Composer
    cd ~/rossedlin.com/projects.rossedlin.com
    composer install
    composer update

    #Folders
    cd ~/rossedlin.com/
    mv projects old_projects
    mv projects.rossedlin.com projects

#    #Public
#    cd ~/rossedlin.com/www
#    cp ./build/live/robots.txt ./public/robots.txt
#    cp ./build/live/.htaccess ./public/.htaccess

    #Permissions
    chmod 755 -R ~/rossedlin.com/projects

fi