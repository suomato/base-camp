# Base Camp

> Awesome WordPress starter theme for developers based on modern web technologies. **Work in progress.**

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
* Luna (Command-line interface included with Base Camp)

## Requirements
* [Wordpress](https://wordpress.org/) >= v4.8.0
* [Composer](https://getcomposer.org/download/) >= v1.4.2
* [PHP](http://php.net/manual/en/install.php) >=v7.0
* [Yarn](https://yarnpkg.com/en/) >= v0.27.5 **or** [npm](https://www.npmjs.com/) >= v5.3.0
* [Nodejs](https://nodejs.org/en/) >= v6.11.2

## Installation
* Go your themes folder and clone this repo: `git clone git@github.com:suomato/base-camp.git`
* `cd base-camp`
* `composer install`
* `yarn` **or** `npm install`
* `yarn watch` **or** `npm run watch`
* Happy developing :)

## Structure
```
base-camp                                           # Theme root
├── app                                             # Theme logic
│   ├── commands/                                   # Theme CLI(Luna) commands
│   ├── config/                                     # Theme config
│   │   ├── wp/                                     # WordPress specific config
│   │   │   ├── custom-post-types/                  # Location of generated Custom Post Type
│   │   │   │   └── _custom-post-type-template.php  # Custom Post Type template (DON'T REMOVE THIS)
│   │   │   ├── menus.php                           # Register here WordPress navigation menus
│   │   │   ├── scripts-and-styles.php              # Register here WordPress scripts and styles
│   │   │   ├── sidebars.php                        # Register here WordPress sidebars
│   │   │   └── theme-supports.php                  # Register here WordPress theme features
│   │   ├── autoload.php                            # Includes all config files (DON'T REMOVE THIS)
│   │   └── timber.php                              # Timber specific config
│   ├── timber-extends/                             # Extended Timber Classes
│   │   └── BaseCampSite.php                        # Extended TimberSite Class
│   ├── helpers.php                                 # Common helper functions
├── resources/                                      # Theme assets and views
│   ├── assets/                                     # Front-end assets
│   │   ├── js/                                     # Javascripts
│   │   │   └── components/                         # Vue Components
│   │   ├── sass                                    # styles
│   │   │   └── components/                         # partials
│   ├── views                                       # Theme Twig files
│   │   ├── components/                             # partials
│   │   ├── footer/                                 # theme footer templates
│   │   └── header/                                 # theme header templates
```
