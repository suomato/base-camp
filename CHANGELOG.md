## **v1.8.2 (2018-08-09)**

### Changed
* Timber will be added via composer instead of wordpress plugin

## **v1.8.0 (2018-07-27)**

### Added
* Models (Wrapper classes for Wordpress Post Types and Taxonomies.)
* Updated Luna (A new command `make:custom-taxonomy`)
* `make:custom-post-type` and `make:custom-taxonomy` command creates model which helps interact with a new post types or taxonomy.
* namespace `Basecamp\Models\` for `app/models/` directory

## **v1.7.0 (2018-07-01)**

### Added
* Variables in `_variables.sass` can be used in `*.vue` files
* Webpack removes unused css from `app.[hash].css` file
* A new command `make:menu-page`
* screenshot for theme

### Changed
* Migrated from webpack 3 to webpack 4
* Moved Luna CLIs [docs](https://github.com/suomato/luna) to `suomato/luna` repository
* Updated composer packages (Now PHP version must be at least v7.0!)
* Updated Timber to v1.7.1

### Removed
* `dd()` from `/app/helpers.php`. This function comes now with the `symfony/var-dumper`

## **v1.6.0 (2018-03-30)**

### Added
* Woocommerce support
* Basic boilerplate for woocommerce (`.twig` and `.sass.` files)

### Changed
* Updated javascrit packages

### Fixed
* Images and fonts `publicPath` in `webpack.config.js`
* Fixed localize path in `bootstrap.php`

## **v1.5.0 (2017-11-19)**

### Added
* `build/` for webpack config and custom config
*  new webpack alias `~images` for relative image paths

### Changed
* moved `bootstrap.php` to `app/bootstrap.php`
* refactored webpack config

## **v1.4.2 (2017-11-16)**

### Added
* Theme init config from `functions.php` to `bootstrap.php`
* Extensions to webpack config. Now Vue file can be imported without using .vue extension

### Changed
* Refactored assets

### Fixed
* Vue production bundle (Fixed Webpack config)

## **v1.4.0 (2017-11-11)**

### Added
* Maintenance mode
* Maintenance config to `app/config/wp/maintenance.php`
* Maintenance page tempalte `resources/views/maintenance.twig`
* PHP dotenv (Environment variables)

### Fixed
* Bug in webpack config

## **v1.3.0 (2017-11-05)**

### Added
* Custom image size config to `app/config/wp/image-sizes.php`
* Some security config to `app/config/wp/security.php`

### Changed
* Luna 1.0.0 -> 1.1.0 (A new command make:shortcode)
* updated packages

## **v1.2.0 (2017-10-22)**

### Added
* Third menu level (Wordpress Main menu supports third menu level)
* Favicon to admin page and login page

### Changed
* Refactored Navbar component
* Refactored `_variables.sass` file

### Fixed
* Pagination border-color

---

## **v1.1.0 (2017-10-01)**

### Added
* Login page config to `app/config/wp/login-page.php`
* Favicon to `resources/assets/images/favicon.png`
* Login page styles to `resources/assets/sass/login.sass`
* Images path helper `images_path()` to `app/helpers.php`
* `File-loader` and `image-webpack-loader` to webpack

### Changed
* Sass variables to own file `resources/assets/sass/_variables.sass`


### Fixed
* CleanWebpackPlugin better config. Watch mode clear static folder after every build

### Removed
* `purifycss` and `purifycss-webpack` packages
