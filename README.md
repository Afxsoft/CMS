Simple PHP CMS
====================

*That is simple PHP CMS using MVC.*
 
Prereq
------
 
PHP 5 >= 5.3.0

Mysql


How to
------

1 - Create your vhost like that:
 
```
<VirtualHost *:80>
    ServerName cms.dev
    ServerAlias www.cms.dev
    DocumentRoot "/var/www/cms"
  <Directory "/var/www/cms">
        AllowOverride All
        Order allow,deny
        Allow from all
  </Directory>
</VirtualHost>
``` 
2 - Modify "Settings.php" infomation in /Application/Configs/:
 
```
        /* Database Conf */

        define('DB_HOST', 'localhost');
        define('DB_NAME', 'mysite');
        define('DB_USER', 'root'); 
        define('DB_PASSWORD', 'yourpassword'); 
        define('DB_CHARSET', 'utf8');
```

3 - Take example database Bdd.sql.

*enjoy or not :p*
