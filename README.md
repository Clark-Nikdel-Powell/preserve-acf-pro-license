# Preserve ACF Pro License

*A WP must-use plugin to preserve your ACF Pro license info after migrating data via WP Migrate DB or some other process.*

You know what stinks? Pulling down a WordPress database using (the excellent) WP Migrate DB Pro and then having to reenter the license info for ACF Pro! Wouldn't it be great if ACF Pro let you store your license info in `wp-config.php`, just like WP Migrate DB Pro let's you do? Sure would. But don't hold your breath. See this [ACF support thread that has been marked closed](https://support.advancedcustomfields.com/forums/topic/pro-license-key-in-config/).

## It's dangerous to go alone! Take this.

Save this plugin to `mu-plugins` and define your ACF Pro license in `wp-config.php` as shown below:

~~~
define( 'ACF_PRO_LICENSE', '<<LICENSE>>' );
~~~

Whenever WP Migrate DB Pro completes a migration or, optionally, everytime plugins are loaded, this plugin will fire off the function that updates your ACF Pro license.

![Fist Bump](http://i3.kym-cdn.com/photos/images/original/000/357/107/14b.gif "Fist bump")
