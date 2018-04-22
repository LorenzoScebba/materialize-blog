# Simple Materialize CSS Blog

A simple website capable of handling article creation, deletion and modify

# Progress

- [x] Article Creation
- [x] Article Delete
- [x] Article Modify
- [ ] User Creation
- [ ] User Deletion
- [ ] User Modify

# config.ini Template

[database]\
servername = localhost\
username = YOUR-DATABASE-USERNAME\
password = YOUR-DATABASE-PASSWOD\
dbname = YOUR-DATABASE-NAME

[MailGun]\
MailGunKey = YOUR-MAILGUN-KEY\
MailGunDomain = YOUR-MAILGUN-DOMAIN

[Site]\
URL = YOUR-WEBSITE-URL (*Without https:// or http://*)

[Crypt]\
salt = YOUR-SALT (*A strong salt is recommended*)

## Info

You should place the config.ini file inside a private directory.\
Example :
1. C:\xampp\private\config.ini
2. /var/www/private