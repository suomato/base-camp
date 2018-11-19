module.exports = {
  /**
   * Define your assets path here. Assets path are your theme
   * path without host.
   * E.g. your theme path is http://test.dev/wp-content/themes/base-camp/
   * then your assets path is /wp-content/themes/base-camp/
   *
   * This is for Webpack that it can handle assets relative path right.
   */
  assetsPath: '/wp-content/themes/base-camp/',

  /**
   * Define here your dev server url here.
   *
   * This is for Browsersync.
   */
  devUrl: 'http://localhost:8080',

  /**
   * You can whitelist selectors to stop purgecss from removing them from your CSS
   *
   * whitelist: ['random', 'yep', 'button']
   * In the example, the selectors .random, #yep, button will be left in the final CSS
   */
  whitelist: [],
};
