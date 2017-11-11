<p align="center"><img width="220" src="https://raw.githubusercontent.com/suomato/base-camp/develop/resources/assets/images/base-camp-logo.png"></p>

<p align="center">
<a href='https://packagist.org/packages/suomato/base-camp'><img src='https://poser.pugx.org/suomato/base-camp/v/stable.svg' alt="Dependency Status" /></a> <a href='https://packagist.org/packages/suomato/base-camp'><img src='https://poser.pugx.org/suomato/base-camp/v/unstable.svg' alt="Dependency Status" /></a> <a href='https://www.versioneye.com/user/projects/59b4dcb90fb24f002a9812a7'><img src='https://www.versioneye.com/user/projects/59b4dcb90fb24f002a9812a7/badge.svg?style=flat-square' alt="Dependency Status" /></a>  <a href="https://packagist.org/packages/suomato/base-camp"><img src="https://poser.pugx.org/suomato/base-camp/license.svg" alt="License"></a>
</p>

## About Base Camp

> Awesome WordPress starter theme for developers based on modern web technologies.

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
* [Luna](https://github.com/suomato/base-camp#luna-command-line-interface) (Command-line interface included with Base Camp)

## Requirements
* [Wordpress](https://wordpress.org/) >= v4.8.2
* [Composer](https://getcomposer.org/download/) >= v1.5.1
* [PHP](http://php.net/manual/en/install.php) >= v5.6 (Recommended >= v7.0)
* [Yarn](https://yarnpkg.com/en/) >= v1.0.0 **or** [npm](https://www.npmjs.com/) >= v5.4.0
* [Nodejs](https://nodejs.org/en/) >= v6.11.3

## Installation
* Go your themes folder and run`composer create-project suomato/base-camp`
* `cd base-camp`
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

> This Command helps you to create a new Custom Post Type very fast.

```
php luna make:custom-post-type {name}
```

> The argument is singular form. if noun have irregular plural which do not behave in standard way(singular+s),
exception can be defined by plural option e.g.

```
php luna make:custom-post-type person --plural=people
```

> The new file is created to `/app/config/wp/custom-post-types/{name}.php`

#### Make Route

> This Command helps you to create a new route for WordPress API clearer and faster way.

```
php luna make:route {name}
```

> The new file is created to `/app/config/wp/routes/{name}.php`. The created file comes with the well documented boilerplate.

#### Make Shortcode

> This Command helps you to create a new shortcode with very clean boilerplate. 

```
php luna make:shortcode {name}
```

> The new file is created to `/app/config/wp/shortcodes/{name}.php`.

##### Example

Run command:

```
php luna make:shortcode LuckyNumber
```

Then define some data
```
    /**
     * @var string Shortcode name
     */
    protected $shortcode = 'lucky_number';

    /**
     * @var array|string An associative array of attributes
     */
    protected $attributes = [
        'number' => 7,
    ];

    /**
     * Return template of shortcode
     *
     * @param $attr An associative array of attributes
     * @param $content Enclosed content
     *
     * @return mixed
     */
    protected function template($attr, $content)
    {
        return 'This is my lucky number: ' . $attr['number'];
    }
```

> Now shortcode `[lucky_number]` generates `This is my lucky number: 7` and `[lucky_number number="13"]` generates `This is my lucky number: 13`

> It is also possible to use power of Timber. In template function you can return Timber view instead of string like this:

```
// resources/views/shortcodes/lucky-number.twig

<p>This is my lucky number: {{ number }}</p>

******************************************************************

// app/config/wp/shortcodes/LuckyNumber.php 

protected function template($attr, $content)
{
    return \Timber::compile('shortcodes/lucky-number.twig', $attr);
}
```


