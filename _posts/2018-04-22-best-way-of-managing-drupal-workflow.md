---
layout: post
title:  "Best way of Managing Drupal Workflow"
author: ankit
categories: [ Drupal ]
tags: [Drupal, Composer, Git, PHP, Drupal Console]
image: assets/drupal/2018-04/drupal_composer_git.jpg
featured: true
hidden: false
date: 2018-04-22T17:15:16+05:30
---

One of the struggles that developers face when moving to Drupal 8 is the lack of best practices in deploying Drupal sites. The Challenges in deployment- Dependency Management, Drupal Contrib Modules/Themes, Configuration Management and of course Code Base. Drupal 7 has no such problems. Ahhh, Drupal 8 comes with lots of stuff to manage. One of the biggest change in Drupal 8 is the adoption of Composer. Good things come at a price.

We will use one codebase for one Drupal site and use git for version control and deployment.

## **Composer**

[Composer](https://getcomposer.org/) is a dependency manager for PHP (like npm for Node, pip for Python). Drupal core uses Composer to manage core dependencies like Symfony components and Guzzle. Composer allows us to systematically manage a list of dependencies and their subsidiary dependencies. Composer install these dependencies via a manifest file called as composer.json.

![Composer workflow](/assets/drupal/inline-images/Firefox_Screenshot_2018-04-22T18-49-10.848Z_0.png)

This composer.json file contains the dependencies that the project requires which is installed by running -

```
composer install
```

for the first time. It locates, downloads, validates and loads the packages. It also ensures that exactly the right versions for each package are used and maintains the log file called composer.lock.

**Note: Always Commit your composer.lock file** because it contains the exact version of the dependencies that you have defined in the project.

If you want to update any specific package, it's a good practice to run this command -

```
composer update package/package-name
```

You should never run **composer update** because composer will try to update every single dependency which can cause problems to your site.

## **Drupal Composer**

[drupal-composer/drupal-project](https://github.com/drupal-composer/drupal-project) is the life-saver project for managing your site dependencies with Composer.

To install this project template, Run this command -

```
composer create-project drupal-composer/drupal-project:8.x-dev drupal8 --stability dev --no-interaction
```

It will automatically install a Drupal site with all the dependencies and also install [Drupal console](https://drupalconsole.com/) and [Drush](https://github.com/drush-ops/drush) locally.

Composer is one of the fastest ways to install dependencies as it caches the dependencies and next time loads data from the cache.

**Directory Structure:**

![Directory structure](/assets/drupal/inline-images/Firefox_Screenshot_2018-04-22T19-45-24.606Z.png)

It is different from the Drupal directory structure. You can resemble web directory with the public directory which contains Drupal files. All third party dependencies are outside the web folder.

You can install any Drupal Modules, themes, and profiles through composer which will be downloaded in the contrib folder inside the modules, themes, profiles respectively. In this way, composer.lock file will have a record of all the Drupal contrib modules along with the third party dependencies.

To download any modules, themes using composer-

```
composer require drupal/mediumish_blog

# For installing theme, we will use drupal console

drupal theme:install mediumish_blog
```

**Gitignore:**

As all the dependencies and Drupal contrib modules, themes are managed by composer so we will not push these content to git.

```
# Ignore directories generated by Composer  
/drush/contrib  
/vendor/  
/web/core/  
/web/modules/contrib/  
/web/themes/contrib/  
/web/profiles/contrib/  
/web/libraries/

# Ignore sensitive information  
/web/sites/*/settings.php  
/web/sites/*/settings.local.ph
```
## **Configuration Management**

Deployment and configuration management are common actions of a project life cycle. We have installed various modules and configure our local site but our production site has no such configuration.

In Drupal 7, we have features module which is used to sync configuration. But Drupal 8 has an inbuilt solution for managing configurations which allows you to export complete website configurations and store them in YAML files. Exported files can be imported to another website to get the same result. Drupal’s configuration system helps to solve the config files synchronization problem in two ways: a unified way to store configuration and a process to import/export changes between instances of the same site.

**How to synchronize config files**

Open /web/sites/default/settings.php and set $config_directories['sync']

```
$config_directories['sync'] = '../config/sync';
```

It's good practice to store config files outside of the web directory to avoid making them accessible from the Internet.

Now Use Drupal console to export the configuration -

```
drupal config:export

# import on prod server

drupal config:import
```

**Note:** It is required that both the production and local Drupal site should have same UUIDs**.** [More info](https://www.drupal.org/docs/8/configuration-management/managing-your-sites-configuration)

**Note:** Drupal configuration management has a bug i.e custom blocks' data neither be imported nor be exported.[Issue Link](https://www.drupal.org/project/drupal/issues/2756331)

## **Git**

We will use git to add, commit and push the local site's data with all the configuration which will be pulled from the prod server/site. Let's see the flow-

```
# Local

git add .

git commit -m"Add commit message"

git push origin HEAD

# Server

git pull otigin HEAD

composer install                         # to install any new dependencies, drupal contrib modules, themes

drupal config:import                   # to import the configuration

drupal cache:rebuild all              # rebuild the cache
```

**Update Modules, themes, and profiles**

```
composer update drupal/mediumish_blog

drupal update:execute mediumish_blog

drupal update:execute all
```

**Update Drupal Core**

Generally, we face problems in updating Drupal core, composer has a simple way to manage this too-

```
composer update drupal/core --with-dependencies
```

It will update the  Drupal core and all its associated dependencies.

## **Managing Environment Configuration**

The best part that I was looking for as a developer in Drupal is managing different environment configuration. This can be done by using [vlucas](https://github.com/vlucas/phpdotenv)[/](https://github.com/vlucas/phpdotenv)[phpdotenv](https://github.com/vlucas/phpdotenv) module which also comes with drupal composer template.

Anything that is likely to change between deployment environments – such as database credentials or credentials for 3rd party services – should be extracted from the code into environment variables Basically, a `.env` file is an easy way to load custom configuration variables that your application needs without having to modify any other files.

Rename .env.example to .env file and add all the credentials as a key-value pair in .env file.

load.environment.php file in the root will load this .env file and make it available for you.

**How to** **use .****env file**

Open /web/sites/default/setting.php and add this set of code-

```
$databases['default']['default'] = [  
  'database' => getenv('MYSQL_DATABASE'),  
  'driver' => 'mysql',  
  'host' => getenv('MYSQL_HOSTNAME'),  
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',  
  'password' => getenv('MYSQL_PASSWORD'),  
  'port' => getenv('MYSQL_PORT'),  
  'prefix' => '',  
  'username' => getenv('MYSQL_USER'),  
];
```

Open .env file and sets credentials-

```
MYSQL_DATABASE='db_name'  
MYSQL_HOSTNAME='localhost'  
MYSQL_PASSWORD='secret'  
MYSQL_PORT='3306'  
MYSQL_USER='root'
```

Now as all our credentials are stored in .env file, we can push our settings.php to the server and manage its configuration through .env file.

We generally enable twig debugging while development and disable on production, This can also be done easily and smoothly through a .env file.

Add new key value pair in .env file-

```
APP_ENV='local'
```

Now copy web/sites/example.settings.local.php to web/sites/default/settings.local.php and add this code in web/sites/development.services.yml under parameters 

```
twig.config:  
    debug: true  
    auto_reload: true  
    cache: false
```

Now open web/sites/default/settings.php and add this code-

```
$env = getenv('APP_ENV');

$base_path = $app_root . '/' . $site_path;  
$settingsFile = $base_path . '/settings.' . $env . '.php';

if (file_exists($settingsFile)) {  
  include $settingsFile;  
}
```

So, in this way, if you set your APP_ENV='local', Twig debug will be enabled and on production, you can disable by setting APP_ENV='prod'. You can also configure different configuration for different environments.

## **Conclusion**

Drupal 8 offers a built-in solution for exporting and importing site configurations which is way better than what you can do in D7. Dependencies and contrib modules/themes are managed by the composer itself. It’s not yet perfect, there is no standard approach, but the workflow described above is a simple and efficient solution. You can define your own workflow based on your need.

For reference, I have pushed code to repo- Here its link - [drupal-best-practices](https://github.com/ankitjain28may/drupal-best-practices)

I hope you have found this article useful. I would love to hear your feedback :)