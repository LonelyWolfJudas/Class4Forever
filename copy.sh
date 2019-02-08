
rm -r -f /var/www/*
rm -r -f /var/www/.control
rm -r -f /var/www/.ctrl
rm -r -f /var/www/.git
cp -r * /var/www/
cp -r .control /var/www/
cp -r .control/.ctrl  /var/www/.control/
rm -f /var/www/README.md
rm -f /var/www/copy.sh

