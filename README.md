<p align="center"><img width="220" src="https://raw.githubusercontent.com/suomato/base-camp/develop/resources/assets/images/base-camp-logo.png"></p>

<p align="center">
<a href='https://packagist.org/packages/suomato/base-camp'><img src='https://poser.pugx.org/suomato/base-camp/v/stable.svg' alt="Dependency Status" /></a> <a href='https://packagist.org/packages/suomato/base-camp'><img src='https://poser.pugx.org/suomato/base-camp/v/unstable.svg' alt="Dependency Status" /></a> <a href="https://packagist.org/packages/suomato/base-camp"><img src="https://poser.pugx.org/suomato/base-camp/license.svg" alt="License"></a>
</p>

## About Base Camp

> Awesome WordPress starter theme with own CLI for developers based on modern web technologies.

## Features
* [Bulma](http://bulma.io/) (Responsive CSS framework based on Flexbox)
* [Timber](https://www.upstatement.com/timber/)
  * Twig Template Engine
  * Cleaner and better code
  * Separates the logic from presentation
* [Webpack](https://webpack.github.io/)
  * Sass / Scss for stylesheets (Minimize in production)
  * ES6 for Javascript (Minimize in production)
  * Automatic Cache Busting
  * Split javascript code to two chunks, app.js and vendor.js
  * [Vuejs](https://vuejs.org/) for boosting frontend development
  * [BrowserSync](https://www.browsersync.io/) for synchronised browser testing
* [Luna](https://github.com/suomato/luna) (Command-line interface included with Base Camp)
* [WooCommerce](https://woocommerce.com/) support with basic boilerplate.

## Requirements
* [Wordpress](https://wordpress.org/) >= v4.9.6
* [Composer](https://getcomposer.org/download/) >= v1.6.5
* [PHP](http://php.net/manual/en/install.php) >= v7.0
* [Yarn](https://yarnpkg.com/en/) >= v1.7.0 **or** [npm](https://www.npmjs.com/) >= v6.1.0
* [Nodejs](https://nodejs.org/en/) >= v8.11.1

## Installation
* Go your themes folder and run`composer create-project suomato/base-camp`
* `cd base-camp`
* `yarn` **or** `npm install`
* define your custom webpack config to `build/config.js` file
* `yarn watch` **or** `npm run watch`
* Remember to activate Timber plugin!
* Happy developing :)

## Structure
```
base-camp/                                          # Theme root
├── app/                                            # Theme logic
│   ├── config/                                     # Theme config
│   │   ├── wp/                                     # WordPress specific config
│   │   │   ├── admin-page.php                      # Register here WordPress Admin Page config
│   │   │   ├── image-sizes.php                     # Register here WordPress Custom image sizes
│   │   │   ├── login-page.php                      # Register here WordPress Login Page config
│   │   │   ├── maintenance.php                     # Maintenance mode config
│   │   │   ├── menus.php                           # Register here WordPress navigation menus
│   │   │   ├── scripts-and-styles.php              # Register here WordPress scripts and styles
│   │   │   ├── security.php                        # Things that increase the site security
│   │   │   ├── sidebars.php                        # Register here WordPress sidebars
│   │   │   └── theme-supports.php                  # Register here WordPress theme features
│   │   ├── autoload.php                            # Includes all config files (DON'T REMOVE THIS)
│   │   ├── timber.php                              # Timber specific config
│   │   └── woocommerce.php                         # Init woocommerce support
│   ├── models/                                     # Wrappers for Timber Classes
│   ├── timber-extends/                             # Extended Timber Classes
│   │   └── BaseCampSite.php                        # Extended TimberSite Class
│   ├── bootstrap.php                               # Bootstrap theme
│   ├── helpers.php                                 # Common helper functions
├── build/                                          # Theme assets and views
│   ├── config.js                                   # Custom webpack config
│   ├── webpack.config.js                           # Webpack config
├── resources/                                      # Theme assets and views
│   ├── assets/                                     # Front-end assets
│   │   ├── js/                                     # Javascripts
│   │   │   └── components/                         # Vue Components
│   │   ├── sass/                                   # Styles
│   │   │   └── components/                         # Partials
│   ├── languages/                                  # Language features
│   │   ├── base-camp.pot                           # Template for translation
│   │   └── messages.php                            # Language strings
│   ├── views/                                      # Theme Twig files
│   │   ├── components/                             # Partials
│   │   ├── footer/                                 # Theme footer templates
│   │   └── header/                                 # Theme header templates
```

## Models
> Models are wrapper classes for Wordpress Post Types and Taxonomies. They provide very simple interface to interact with the database.

### How to use
```
// index.php

<?php

use Basecamp\Models\Post;

// returns an array of TimberPost objects
Post::all();

// returns TimberPost object with the ID 1 (if it exists)
Post::find(1);

// returns first two posts;
Post::take(2)->get();

// skips first two posts;
Post::skip(2)->get();

// returns published posts;
// Supported values: https://codex.wordpress.org/Post_Status#Default_Statuses
Post::status('publish')->get();

// returns all posts except post with ID 1;
Post::exclude([1])->get();

// returns only posts with ID 1;
Post::include([1])->get();

// returns an array of posts descending order by author;
// Supported Values: https://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters
Post::orderby('author', 'desc')->get();

// returns an array of posts authored by admin;
Post::author('admin')->get();

// returns an array of posts which are in category 'cars' or 'vehicles';
Post::inCategory(['cars', 'vehicles'])->get();
```

> All queries are chainable. For example you can get three first incomplete posts authored by admin:
```
Post::status('draft')->author('admin')->take(3)->get();
```

All models are able to use almost every methods. However there are some exceptions:

* Only `Post` model has `inCategory()` method
* Taxonomies (Category, Tag) have `hideEmpty()` method


## Luna (Command-line interface)
> [Docs](https://github.com/suomato/luna)

