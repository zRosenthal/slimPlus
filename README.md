# Slim Framework Skeleton Application + Eloquent ORM + Controllers (in the works)

Use this skeleton application to quickly setup and start working on a new Slim Framework application. This application uses the latest Slim and Slim-Views repositories. It also uses Sensio Labs' [Twig](http://twig.sensiolabs.org) template library.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## Install Composer

If you have not installed Composer, do that now. I prefer to install Composer globally in `/usr/local/bin`, but you may also install Composer locally in your current working directory. For this tutorial, I assume you have installed Composer locally.

<http://getcomposer.org/doc/00-intro.md#installation>

## Install the Application

After you install Composer, run this command from the directory in which you want to install your new Slim Framework application.

    php composer.phar create-project z-rosenthal/slim-plus [my-app-name]

Replace <code>[my-app-name]</code> with the desired directory name for your new application. You'll want to:
* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` and `templates/cache` are web writeable.

That's it! Now go build something cool.

##Note:
For Eloquent ORM
You will need to install mysql

    sudo apt-get install mysql-server

You will also need to install the php5-mysql package

    sudo apt-get install php5-mysql

Then restart apache

    sudo /etc/init.d/apache2 restart

The mysql connection info is located in index.php at the top

A user model has been created in the app/models directory
