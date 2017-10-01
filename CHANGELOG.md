# Release Notes

## v1.1.0 (2017-10-01)

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
