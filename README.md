# Simple Materialize CSS Blog

A simple website capable of handling article creation, deletion and modify

# Progress

- [x] Article Creation
- [x] Article Delete
- [x] Article Modify
- [x] User Creation
- [ ] User Deletion
- [ ] User Modify

# config.ini Template

[database]\
servername = YOUR-HOSTNAME (*Example : localhost*)\
username = YOUR-DATABASE-USERNAME\
password = YOUR-DATABASE-PASSWORD\
dbname = YOUR-DATABASE-NAME

[MailGun]\
MailGunKey = YOUR-MAILGUN-KEY\
MailGunDomain = YOUR-MAILGUN-DOMAIN

[Site]\
URL = YOUR-WEBSITE-URL (*Without https:// or http://*)

[Crypt]\
salt = YOUR-SALT (*A strong salt is recommended*)

[Tokens]
token = YOUR-TOKEN ;This is used to gain admin privileges on some scripts;

## Info

You should place the config.ini file inside a private directory.\
Example :
1. C:\xampp\cgi-bin\config.ini
2. /var/www/cgi-bin

If you want to rename the cgi-bin folder you'll have to change every php file where the config.ini file is used.