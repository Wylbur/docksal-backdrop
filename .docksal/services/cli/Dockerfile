FROM docksal/cli:php7.4

run cd /var/www/docroot
run if ls drush/*.aliases.drushrc.php 1> /dev/null 2>&1; then mv drush/*.aliases.drushrc.php . ; fi
run rm -rf drush 
run git clone --branch 8.x https://github.com/drush-ops/drush.git drush
run cd drush 
run rm -rf .git/
run cd /var/www/docroot
run git clone https://github.com/backdrop-contrib/drush.git drush/commands/backdrop
run cd drush/commands/backdrop
run rm -rf .git/
run cd /var/www/docroot
run if ls *.aliases.drushrc.php 1> /dev/null 2>&1; then mv *.aliases.drushrc.php drush/ ; fi
run rm -f *.aliases.drushrc.php
run rm -rf bee
run git clone https://github.com/backdrop-contrib/bee.git
run cd b
run rm -rf .git
run cd /var/www/docroot
run if ls brush/*.aliases.brushrc.php 1> /dev/null 2>&1; then mv brush/*.aliases.brushrc.php . ; fi
run rm -rf brush
run git clone https://github.com/backdrop-contrib/brush.git brush
run cd brush 
run rm -rf .git
run cd /var/www/docroot
run if ls *.aliases.brushrc.php 1> /dev/null 2>&1; then mv *.aliases.brushrc.php brush/ ; fi
run rm -f *.aliases.brushrc.php

# Set Drush to local version
run sudo rm /usr/local/bin/drush8
run sudo ln -sfn /var/www/docroot/drush/drush /usr/local/bin/drush8

# Set Bee to local version
run sudo ln -sfn /var/www/docroot/bee/bee.php /usr/local/bin/b

# Set Brush to local version
run sudo ln -sfn /var/www/docroot/brush/brush /usr/local/bin/brush
