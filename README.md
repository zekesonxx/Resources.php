#Resources.php

Resources is a CodeIgniter library I wrote for use with a `resources/` folder at the root of my CodeIgniter installation.

##Requirements

 - PHP 5.3+
 - CodeIgniter 2.0.0+

##Installation

1. Put `Resources.php` in `application/libraries/Resources.php`.
2. Make a `resources/` folder with subfolders `js/`, `css/`, and `img/` at the root of your CodeIgniter installation (Where `index.php` and `.htaccess` are)
3. If you are using mod_rewrite, you'll need to exclude the `resources/` folder if you don't have a `RewriteCond ${REQUEST_FILENAME} -d`