[![Latest Version](https://img.shields.io/npm/v/generator-barephp.svg?style=flat-square)](https://npmjs.org/package/generator-barephp)
[![License](https://img.shields.io/github/license/juliangut/generator-barephp.svg?style=flat-square)](https://github.com/juliangut/generator-barephp/blob/master/LICENSE)

[![Build status](https://img.shields.io/travis/juliangut/generator-barephp.svg?style=flat-square)](https://travis-ci.org/juliangut/generator-barephp)
[![Total Downloads](https://img.shields.io/npm/dt/generator-barephp.svg?style=flat-square)](https://npmjs.org/package/generator-barephp)
[![Monthly Downloads](https://img.shields.io/npm/dm/generator-barephp.svg?style=flat-square)](https://npmjs.org/package/generator-barephp)
[![Downloads Statistics](https://img.shields.io/badge/downloads-statistics-%23aa000.svg?style=flat-square)](https://npm-stat.com/charts.html?package=generator-barephp)

# Generator-BarePHP

#### PHP project scaffold with lots of integrations

Normally when starting a new PHP project you'd just copy/paste configuration files from another project in order to set the project environment ready as quickly as possible, but you'll forget to copy some files and more often than not you'll forget to change names or routes on those files.

> Scaffolding project environments with the same files once and again is painfully boring, error prone, and leaves a feeling of time waste.

Let Yeoman do the heavy lifting and get your projects scaffold and ready to start developing in a breeze with this generator, it will prepare a shiny and clean PHP project structure ready to develop for you, sit and focus on the actual code.

### Features

* Project complies with [pds/skeleton](https://github.com/php-pds/skeleton) directory structure
* Load existing configuration from composer.json
* Git use is assumed by default (.gitignore and .gitattributes included)
* Integration with Github and Bitbucket accounts
* Composer ready (global/local detection, or local installation)
* Project ready to be added to [Packagist](https://packagist.org)
* Select minimum [supported PHP version](https://secure.php.net/supported-versions.php) (from 5.6 up)
* Symfony polyfills compatibility packages included based on minimum supported PHP version
* [Editorconfig](http://editorconfig.org/) definitions file
* Development environment integration
  * [Docker](https://www.docker.com/) integration (with docker-compose)
  * [Laravel Homestead](https://laravel.com/docs/5.3/homestead) (Vagrant) integration (optionally with PhpMyAdmin)
    * Integration with [Vagrant hostupdater](https://github.com/cogitatio/vagrant-hostsupdater) plugin if installed
* QA utilities configured and integrated into Composer scripts and Travis build
  * PHP syntax linting
  * [PHPUnit](http://phpunit.de/) testing environment
  * [Infection](https://github.com/infection/infection/) mutation testing framework
  * [Editorconfig-checker](https://github.com/editorconfig-checker/editorconfig-checker.php) for editorconfig adherence
  * [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer) for PSR2 coding standard checking
  * [PHP-CS-Fixer](https://github.com/FriendsOfPhp/PHP-CS-Fixer) for automatically fixing coding style
  * [PHPMD](https://github.com/phpmd/phpmd) for [code smell](https://en.wikipedia.org/wiki/Code_smell) detection
  * [PHPMND](https://github.com/povils/phpmnd) for [magic code](https://en.wikipedia.org/wiki/Magic_number_(programming)#Unnamed_numerical_constants) detection
  * [PHPCPD](https://github.com/sebastianbergmann/phpcpd) for copy/paste detection
  * Composer [outdated](https://getcomposer.org/doc/03-cli.md#outdated) for packages updates availability check
* External tools
  * Already configured [Travis CI](https://travis-ci.org) integration (PHP >=5.6, and nightly)
  * [Coveralls](https://coveralls.io) integration (triggered by Travis build)
  * [Scrutinizer](https://scrutinizer-ci.com) integration
  * [StyleCI](https://styleci.io) integration
* Initial documentation structure in [Markdown](https://daringfireball.net/projects/markdown/syntax)
* Basic annotated kickoff code (with tests and coverage report!)
* Common [SPDX FOSS license](http://spdx.org/licenses) selection
  * [Apache-2.0](https://spdx.org/licenses/Apache-2.0.html)
  * [BSD-2-Clause](https://spdx.org/licenses/BSD-2-Clause.html)
  * [BSD-3-Clause](https://spdx.org/licenses/BSD-3-Clause.html)
  * [BSD-4-Clause](https://spdx.org/licenses/BSD-4-Clause.html)
  * [GPL-3.0](https://spdx.org/licenses/GPL-3.0.html)
  * [LGPL-3.0](https://spdx.org/licenses/LGPL-3.0.html)
  * [MIT](https://spdx.org/licenses/MIT.html) (default)

> Would you like to see a tool, library, configuration, ... added to the generator? file an issue with your feature request

#### Quick assistant / fast mode

As the list options and tools configured is quite long a quick/fast mode has been introduced. In fast mode only the basic questions will be asked and then the generator will do its best guessing the rest for you to get the environment ready faster.

## Getting Started

### Install generator

```
npm install -g generator-barephp
```

## Usage

Once the generator and dependencies are installed you can start using it by calling Yeoman

```
yo barephp
```

### Post run configuration

`barephp` generator comes with many pre-configured tools and services ready to be used, anyway some of them need extra setup once generator has finished:

* Packagist: your package must be [submitted](https://packagist.org/packages/submit) to be available
* Travis CI: you need to activate the project repository in your profile page
* Coveralls: the project repository needs to be [activated](https://coveralls.io/repos/new)
* Scrutinizer: rhe repository has to be added to [Scrutinizer](https://scrutinizer-ci.com)
* StyleCI: enable the repo on your [account](https://styleci.io/account), then update StyleCI badge's repository code on README.md file.

# Now for the PHP MVC framework

[![GitHub stars](https://img.shields.io/github/stars/Stormiix/php-mvc-boilerplate.svg)](https://github.com/Stormiix/php-mvc-boilerplate/stargazers)
[![GitHub forks](https://img.shields.io/github/forks/Stormiix/php-mvc-boilerplate.svg?style=flat)](https://github.com/Stormiix/php-mvc-boilerplate/network)
![stability-wip](https://img.shields.io/badge/stability-work_in_progress-lightgrey.svg)
[![HitCount](http://hits.dwyl.io/stormiix/php-mvc-boilerplate.svg)](http://hits.dwyl.io/stormiix/php-mvc-boilerplate)
[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/stormiix/php-mvc-boilerplate/issues)
[![Donations Badge](https://stormix.co/donate/images/badge.svg)](https://stormix.co/donate/)


This is an [open-source](LICENSE), simple, partially naked MVC framework for building web applications in PHP. It was first created by [daveh](https://github.com/daveh/php-mvc), but I have modified it making it
a boitlerplate for all my future projects.


## Starting an application using this framework

1. First, download the framework, either directly or by cloning the repo.
1. Run **composer update** to install the project dependencies.
1. Configure your web server to have the **public** folder as the web root.
1. Open [.env](.env) and enter your database configuration data. Modifying this file instead of the [App/Config.php](App/Config.php) is pretty useful when working with multiple enviroments (e.g separate developement and production server.)
1. Create routes [App/Routes.php](App/Routes.php), add controllers, views and models.

See below for more details.

## Configuration

Configuration settings are stored in both [.env](.env) file and [App/Config.php](App/Config.php) class. Default settings include database connection data, twig cache location and live auto reload ..etc. You can access the settings in your code like this: `Config::DB_HOST` or `Config::env('DB_HOST')`.
The `function env('setting')` can be used to retrieve the .env stored settings. If none found, it falls back to the config class const.
You can add your own configuration settings to the [.env](.env) file or [App/Config.php](App/Config.php).

## Routing

The [Router](Core/Router.php) translates URLs into controllers and actions. Routes are added in the [front controller](App/Routes.php). A sample home route is included that routes to the `index` action in the [Home controller](App/Controllers/Home.php).

Routes are added with the `repond` method. You can add fixed URL routes, and specify the controller and action, like this:

```php
$router->respond('GET', '/hello-world', function () {
    return 'Hello World!';
});
```

Or you can add route **variables**, like this:

```php
$router->respond('/[:name]', function ($request) {
    return 'Hello ' . $request->name;
});
```

To specify a **controller** and **action** foreach route, use the following method:

```php
$router->respondWithController('GET', '/[:name]', 'controller@action');
```
in this case the route parameter can be accessed using
```php
$request->name
```

Since I'm using the [Klein.php](https://github.com/klein/klein.php) router, please refer to the documentation for more info about how to use.

## Controllers

Controllers respond to user actions (clicking on a link, submitting a form etc.). Controllers are classes that extend the [Core\Controller](Core/Controller.php) class.

Controllers are stored in the `App/Controllers` folder. A sample [Home controller](App/Controllers/Home.php) included. Controller classes need to be in the `App/Controllers` namespace. You can add subdirectories to organise your controllers, so when adding a route for these controllers you need to specify the namespace (see the routing section above).

Controller classes contain methods that can be called through the router. The sample controller in [App/Controllers/Home.php](App/Controllers/Home.php) has a sample `index` action.

You can access route parameters (for example the **name** parameter shown in the route examples above) in actions via the `$request->name` property.

### Action filters

Controllers can have **before** and **after** filter methods. These are methods that are called before and after **every** action method call in a controller. Useful for authentication for example, making sure that a user is logged in before letting them execute an action. Optionally add a **before filter** to a controller like this:

```php
/**
 * Before filter. Return false to stop the action from executing.
 *
 * @return void
 */
protected function before()
{
}
```

To stop the originally called action from executing, return `false` from the before filter method. An **after filter** is added like this:

```php
/**
 * After filter.
 *
 * @return void
 */
protected function after()
{
}

```
IMPORTANT : In order to use the before and after methods implemented, make sure to add **Action** suffix to the called method in the router.
```php
// Example: the controller has a method called show()
// to execute the before() and after() methods, the route should be something like this:
$router->respondWithController('GET', '/[:name]', 'controller@showAction');
// If you don't want to use the before and after methods, simply do this.
$router->respondWithController('GET', '/[:name]', 'controller@action');
```
## Views

Views are used to display information (normally HTML). View files go in the `App/Views` folder. Views can be in one of two formats: standard PHP, but with just enough PHP to show the data. No database access or anything like that should occur in a view file. You can render a standard PHP view in a controller, optionally passing in variables, like this:

```php
View::render('Home/index.php', [
    'name'    => 'Dave',
    'colours' => ['red', 'green', 'blue']
]);
```

The second format uses the [Twig](http://twig.sensiolabs.org/) templating engine. Using Twig allows you to have simpler, safer templates that can take advantage of things like [template inheritance](http://twig.sensiolabs.org/doc/templates.html#template-inheritance). You can render a Twig template like this:

```php
View::renderTemplate('Home/index.html', [
    'name'    => 'Dave',
    'colours' => ['red', 'green', 'blue']
]);
```

A sample Twig template is included in [App/Views/Home/index.html](App/Views/Home/index.html) that inherits from the base template in [App/Views/base.html](App/Views/base.html).

*HTML Compression* for Twig:
I've added an HTML Compression extention to twig, so don't forget to add the following tags before and after your html.

```html
    {% htmlcompress %}
        <html>...</html>
    {% endhtmlcompress %}
```

## Models

Models are used to get and store data in your application. They know nothing about how this data is to be presented in the views. Models extend the `Core\Model` class and use [PDO](http://php.net/manual/en/book.pdo.php) to access the database. They're stored in the `App/Models` folder. A sample user model class is included in [App/Models/User.php](App/Models/User.php). You can get the PDO database connection instance like this:

```php
$db = static::getDB();
```

## Errors

I'm using Whoops to handle errors. It's better <3. But you can still use this by removing this section from index.php [L39 - L43] :
```php
// Whoops error handling
$whoops = new Whoops\Run();
// Set Whoops as the default error and exception handler used by PHP:
$whoops->register();
$whoops->pushHandler(new Whoops\Handler\PrettyPageHandler());
```
And replacing it with this :
```php
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');
```
If the `SHOW_ERRORS` configuration setting is set to `true`, full error detail will be shown in the browser if an error or exception occurs. If it's set to `false`, a generic message will be shown using the [App/Views/404.html](App/Views/404.html) or [App/Views/500.html](App/Views/500.html) views, depending on the error.

## Web server configuration

Pretty URLs are enabled using web server rewrite rules. An [.htaccess](public/.htaccess) file is included in the `public` folder. Equivalent nginx configuration is in the [nginx-configuration.txt](nginx-configuration.txt) file.

## Built With

* [PHP 💕](http://php.net/)

## Used libraries

* [twig/twig](https://github.com/twig/twig)
* [nochso/html-compress-twig](https://github.com/nochso/html-compress-twig)
* [filp/whoops](https://github.com/filp/whoops)
* [klein/klein ❤️](https://github.com/klein/klein)
* [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv)
* [monolog/monolog](https://github.com/monolog/monolog)

## Authors

* **Dave Hollingworth** - *Initial work* - [php-mvc](https://github.com/daveh)
* **Anas Mazouni** - [php-mvc-boilerplate](https://github.com/stormiix)

See also the list of [contributors](https://github.com/stormiix/php-mvc-boilerplate/contributors) who participated in this project.


## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
