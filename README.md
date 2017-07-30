# Barebones php site

1. Install it on the server or in an local environment where php and apache are configured, I recommend [MAMP](https://www.mamp.info) or [XAMPP](https://www.apachefriends.org/index.html) to get started quickly.

2. Set the SITE_URL environment variable see [Apache Module mod_env](http://httpd.apache.org/docs/2.2/mod/mod_env.html#setenv). This can usually be set in a .htaccess file in the public root directory, add in the following lines to the .htaccess file.

  ```
  #Set this SITE_URL example
  SetEnv SITE_URL http://localhost:8080/php-barebones-website

  ```
3. Optionally, add in more features and functionality when ready, I recommend getting started by incorporating [Bootstrap](http://getbootstrap.com) and [HTML5 Boilerplate](https://html5boilerplate.com).


### Trouble Shooting

For general issues white page of nothing or other problems:

1. Check the PHP error logs

2. Check the Apache error logs

3. If you see the "ERROR: SITE_URL environment is not set, please set it."  This means that something is not quite right with setting the environment variable, see above.
