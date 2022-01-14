<div align="center">
 
# Xinoro
 
<div>

<div align="center">

 <a href="https://github.com/xoheveras"> ![Developer](https://img.shields.io/badge/Developed%20by-xoheveras(Egor%20Udovin)-blueviolet) </a> 
 <a href="https://github.com/xoheveras/Xinoro"> ![OpenSourse](https://img.shields.io/badge/Open%20Source-Xinoro-blueviolet) </a>
 <a href=""> ![codesize](https://img.shields.io/github/languages/code-size/xoheveras/Xinoro) </a> 
 <a href=""> ![lastcommit](https://img.shields.io/github/last-commit/xoheveras/Xinoro) </a>
 
 ### Supports
 <a href=""> ![php](https://img.shields.io/badge/php-7.3+-blueviolet) </a>
 <a href=""> ![work](https://img.shields.io/badge/work-apache-blueviolet) </a>
 <a href=""> ![work](https://img.shields.io/badge/work-nginx-blueviolet) </a>
 <a href=""> ![soon](https://img.shields.io/badge/soon-mysql-blueviolet) </a>
 <a href=""> ![soon](https://img.shields.io/badge/soon-mongodb-blueviolet) </a>
 <a href=""> ![soon](https://img.shields.io/badge/soon-python%203.7+-blueviolet) </a>
 <a href=""> ![soon](https://img.shields.io/badge/soon-django-blueviolet) </a>
 <a href=""> ![soon](https://img.shields.io/badge/soon-flask-blueviolet) </a>
 <a href=""> ![soon](https://img.shields.io/badge/soon-nodejs-blueviolet) </a>
 
 </div>
 
 <div align="center">
Simple and convenient CMS with support for a variety of technologies (temporary plug)
 </div>
 
 


 
 ## Install
 
 ### index.php
 
 <div aling="left">
 
 ```html
# import modules
require_once("core/core/router.php");
require_once("core/core/model.php");
require_once("core/core/view.php");
require_once("core/core/controller.php");
require_once("core/core/db.php");

# create router and start xinoro
$router = new Router();
 ```
  
 </div>
 
  ### .htaccess
 
  <div aling="left">
 
 ```html
 
 RewriteEngine On
 RewriteCond %{REQUEST_FILENAME} !-f
 RewriteRule ^([^.]+)$ $1.php [NC,L]
 RewriteCond %{REQUEST_FILENAME} !-d
 RewriteRule .* index.php [L]

 ```
  </div>
