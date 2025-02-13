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

Enables bbPress for a full site editing WordPress block theme, fixing WSoD (White Screen of Death).

= What problem does it solve? =

❓ _Do you want to use bbPress plugin, but it does not display on your website?_
❓ _Do you see <abbr title="White Screen of Death">WSoD</abbr> when visiting bbPress forum pages?_
❓ _Do you want to edit bbPress templates?_
❓ _Are you using a full site editing WordPress block theme?_

If you answered yes to these questions, you're in luck.

**bbPress for Block Themes** plugin fixes White Screen of Death for bbPress screens/views when you are using a WordPress block theme.

= What the plugin does not do? =

- Plugin **does not provide CSS styles for bbPress** to look good with your theme.<br><br>
  Design is very specific thing to each theme. If you want to style your bbPress appearance, use [custom CSS code in Styles section of Site Editor](https://wordpress.org/documentation/article/styles-overview/#applying-custom-css), or use other means, such as 3rd party plugins.<br><br>
  You may especially need to style form fields, buttons and pagination.<br><br>
- Plugin **does not provide blocks** to tweak bbPress views to your liking.<br><br>
  bbPress plugin contains no blocks you can use to create custom forum layouts (as of February 2025). It only displays predefined forum layouts on your website using your theme's `page.html` template file.<br><br>
  However, in Site Editor you can edit "**bbPress content**" template. This template is used to display all bbPress content. (If you enable block editor for bbPress post types, you can further edit additional templates.)

= Got a question or suggestion? =

In case of any question or suggestion regarding this plugin, feel free to ask at [support section](https://wordpress.org/support/plugin/bbp-block-theme/), or at [GitHub repository issues](https://github.com/webmandesign/bbp-block-theme/issues).


== Installation ==

First you need to install and activate [**bbPress** plugin](https://wordpress.org/plugins/bbpress/), and use a block theme, such as [Twenty Twenty-Five](https://wordpress.org/themes/twentytwentyfive/).

= Automatic installation: =

1. Navigate to **Plugins → Add New Plugin** and search for **`bbPress for Block Themes`**.
2. Once the plugin is displayed in the list, click the "**Install Now**" button, then "**Activate**" button.

= Manual installation: =

1. Download the plugin to your computer.
2. Then unzip **bbPress for Block Themes** plugin download file and upload `bbp-block-theme` folder into the `…/wp-content/plugins/` directory on your website server.
3. Activate the plugin through the **Plugins** menu in WordPress admin area.

Plugin works immediately after activation.<br>
Additionally, you can enable block editor for bbPress post types in **Settings → Forums → "Block Theme Compatibility"** section.

== Frequently Asked Questions ==

= How does it work? =

First, this plugin works only if:
- you are _using a block theme_,
- and _bbPress plugin is active_.

The plugin modifies template hierarchy for bbPress content, adding compatibility with block themes. It also fixes bbPress content display in Post Content block.

Plugin also provides "**bbPress content**" template you can edit in Site Editor. (Make sure to use [**Post Content** block](https://wordpress.org/documentation/article/post-content-block/) in the template as bbPress uses it for displaying its views. Even for bbPress archives!)<br>
By default bbPress uses your theme's Page template to display its content. However, providing this new "**bbPress content**" template is adding a new layer of flexibility.

It also allows enabling block editor for bbPress post types, for additional modifications to bbPress templates in Site Editor.

= bbPress looks ugly, help! =

Design is very specific thing to each theme. Please understand this plugin does not provide any CSS styles for bbPress.

If you want to style your bbPress appearance, use [custom CSS code in Styles section of Site Editor](https://wordpress.org/documentation/article/styles-overview/#applying-custom-css), or use other means, such as 3rd party plugins.<br><br>

You may especially need to style form fields, buttons and pagination.

**Tip**: If you want to make bbPress content different width from the other content on your website, you can either edit "**bbPress content**" template in Site Editor, or apply this custom CSS: `.bbpress { --wp--style--global--content-size: 45rem; }`.

= Are there any blocks I can use? =

No, this plugin does not provide any blocks.

As of February 2025, bbPress plugin does not provide any blocks either, but you can use [its shortcodes](https://codex.bbpress.org/features/shortcodes/) in [**Shortcode** block](https://wordpress.org/documentation/article/shortcode-block/).

= Can I edit bbPress template? =

Yes. The plugin provides dedicated "**bbPress content**" template in Site Editor.

This template displays all bbPress content and is derived from your theme's Page template. You can modify it to provide dedicated bbPress views without affecting your pages.

(Make sure to use [**Post Content** block](https://wordpress.org/documentation/article/post-content-block/) in the template as bbPress uses it for displaying its views. Even for bbPress archives!)

Additionally, after enabling block editor for bbPress post types in **Settings → Forums → "Block Theme Compatibility"** section of your WordPress admin, you can modify other bbPress templates in Site Editor.

= Where can I find options? =

**Settings → Forums → "Block Theme Compatibility"** section in your WordPress admin.

In plugin options you can enable block editor for bbPress post types, which allows tweaking bbPress content templates in Site Editor.


== Screenshots ==

1. bbPress forums archive: before and after. Using Twenty Twenty-Five theme.


== Changelog ==

Please see the [`changelog.md` file](https://github.com/webmandesign/bbp-block-theme/blob/master/changelog.md) for details.


== Upgrade Notice ==

= 1.0.0 =
Initial release.
