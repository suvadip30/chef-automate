DRUPAL_VER=`drush pm-update --simulate | grep 'Drupal' | grep 'Up to date'`
DRUPAL_VERSION=`drush pm-update --simulate | grep 'Drupal' | grep 'Up to date' | tail -n1 | wc -l`
if [ "$DRUPAL_VERSION" -eq 1 ]; then
echo "Drupal package update is available" >> /tmp/test/test.txt
echo "Check below package version to update" >> /tmp/test/test.txt
echo "$DRUPAL_VER" >> /tmp/test/test.txt
else
echo "There is no update available for Drupal Package, all are up to date" >> /tmp/test/test.txt
fi
