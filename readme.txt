=== bbPress for Block Themes ===

Contributors:      webmandesign
Donate link:       https://www.webmandesign.eu/contact/#donation
Author URI:        https://www.webmandesign.eu
Plugin URI:        https://www.webmandesign.eu/portfolio/bbp-block-theme-wordpress-plugin/
Requires at least: 6.7
Tested up to:      6.7
Requires PHP:      7.0
Stable tag:        1.0.0
License:           GPL-3.0-or-later
License URI:       http://www.gnu.org/licenses/gpl-3.0.html
Tags:              bbPress, block theme, fse, full site editing, display

Enables bbPress for a full site editing WordPress block theme.


== Description ==

Enables bbPress for a full site editing WordPress block theme.

= What problem does it solve? =

❓ _Do you want to use bbPress plugin, but it does not display on your website?_
❓ _Do you see <abbr title="White Screen of Death">WSoD</abbr> when visiting bbPress forum pages?_
❓ _Are you using a full site editing WordPress block theme?_

If you answered yes to these questions, you're in luck.

**bbPress for Block Themes** plugin fixes White Screen of Death for bbPress screens/views when you are using a WordPress block theme.

= What the plugin does not do? =

- Plugin **does not provide CSS styles for bbPress** to look good in your theme.<br><br>
  Design is very specific thing to each theme. If you want to style your bbPress appearance, use [custom CSS code in Styles section of Site Editor](https://wordpress.org/documentation/article/styles-overview/#applying-custom-css), or use other means, such as 3rd party plugins.<br><br>
  You may especially need to style form fields and pagination.<br><br>
- Plugin **does not provide blocks** to tweak bbPress views to your liking.<br><br>
  bbPress plugin contains no blocks you can use to create custom forum layouts (as of February 2025). It only displays predefined forum layouts on your website using your theme's `page.html` template file.<br><br>
  However, in Site Editor you can create `bbpress` (or `forums`, or `forum`) template (use your theme's `page` template as starting point) to adapt the bbPress page layout a bit.

= Got a question or suggestion? =

In case of any question or suggestion regarding this plugin, feel free to ask at [support section](https://wordpress.org/support/plugin/bbp-block-theme/), or at [GitHub repository issues](https://github.com/webmandesign/bbp-block-theme/issues).


== Installation ==

1. First you need to install and activate [**bbPress** plugin](https://wordpress.org/plugins/bbpress/).
2. Then unzip **bbPress for Block Themes** plugin download file and upload `bbp-block-theme` folder into the `…/wp-content/plugins/` directory on your website server.
3. Activate the plugin through the *"Plugins"* menu in WordPress admin area.
4. Plugin works immediately after activation, and there are no options to set.


== Frequently Asked Questions ==

= How does it work? =

@todo

= bbPress looks ugly, help! =

@todo

= Are there any blocks I can use? =

@todo

= Can I set dedicated template for bbPress pages? =

@todo

= Where are plugin options? =

Settings → Forums → "Block Theme Compatibility" section.


== Screenshots ==

1. bbPress on with Twenty Twenty Five theme: before and after.


== Changelog ==

Please see the [`changelog.md` file](https://github.com/webmandesign/bbp-block-theme/blob/master/changelog.md) for details.


== Upgrade Notice ==

= 1.0.0 =
Initial release.
