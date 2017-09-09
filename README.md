# Base Camp

> Awesome WordPress starter theme for developers based on modern web technologies. **Base Camp 1.0.0-beta.1 is available.**

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
* define your dev-server url to `webpack.config.js` file
* `yarn watch` **or** `npm run watch`
* Happy developing :)

## Structure
```
base-camp/                                          # Theme root
├── app/                                            # Theme logic
│   ├── config/                                     # Theme config
│   │   ├── wp/                                     # WordPress specific config
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

#### Make Custom Post Type

> This Command helps you to create a Custom Post Type very fast.

```
php luna make:custom-post-type {name}
```

> The argument is singular form. if noun have irregular plural which do not behave in standard way(singular+s),
exception can be defined by plural option e.g.

```
php luna make:custom-post-type person --plural=people
```

The new file is created to `/app/config/wp/custom-post-types/{name}.php`

#### Make Route

> This Command helps you to create a route for WordPress API clearer and faster way.

```
php luna make:route {name}
```

> The new file is created to `/app/config/wp/routes/{name}.php`. The created file comes with the well documented boilerplate.
