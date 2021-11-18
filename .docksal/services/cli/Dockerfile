FROM docksal/cli:php7.4

# Set Drush, Brush and Bee aliases
RUN \
# Set Drush to local version
echo "Set Drush Alias" && \
sudo rm /usr/local/bin/drush8 && \
sudo ln -sfn /var/www/drush/drush /usr/local/bin/drush8 && \
# Set Bee to local version
echo "Set Bee Alias" && \
sudo ln -sfn /var/www/bee/bee.php /usr/local/bin/b && \
# Set Brush to local version
echo "Set Brush Alias" && \
sudo ln -sfn /var/www/brush/brush /usr/local/bin/brush 