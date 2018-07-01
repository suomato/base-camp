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

## Luna (Command-line interface)
> [Docs](https://github.com/suomato/luna)

