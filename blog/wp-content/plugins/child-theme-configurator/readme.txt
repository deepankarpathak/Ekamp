=== Child Theme Configurator ===
Contributors: lilaeamedia
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8QE5YJ8WE96AJ
Tags: child theme, child themes, customize theme, CSS, responsive, css editor, child theme generator, child theme creator, stylesheet, customizer
Requires at least: 3.9
Tested up to: 4.1
Stable tag: 1.7.2.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Create a child theme that follows WP best practice to enqueue stylesheets. Easy to use CSS editor lets you find, preview and customize any style.

== Description ==

Child Theme Configurator is a fast and easy to use CSS editor that allows you to create a child theme and customize it beyond the options of the Customizer. Designed for WordPress users who want to be able to customize stylesheets directly, the Child Theme Configurator lets you easily identify and override the exact CSS attributes you want to change. It gives you unlimited control over your WordPress look and feel while leaving your Parent Theme untouched. [Learn more about how to create a child theme](http://www.childthemeconfigurator.com).

= Take Control of Your Child Themes =

https://www.youtube.com/watch?v=53M7RVxDYEY

The Child Theme Configurator parses and indexes your stylesheets so that every CSS media query, selector, rule and value are at your fingertips. Second, it shows you how each change you make will look before you commit it to the child theme. Finally, it saves your work so that you can fine-tune your child themes without the risk of losing your edits. 

You can create any number of child themes from your existing Parent Themes. The Child Theme Configurator lets you choose from your installed themes (even existing child themes) and save the results in your Themes directory.

When you are ready, just activate the Child Theme and your WordPress site takes on the new look and feel automatically.

= Why create child themes using the Child Theme Configurator? =

* Update themes without losing customizations
* Copy existing widgets, menus and other options to child theme
* Save hours of development time
* Multisite compatible
* Make modifications unavailable to the Customizer
* Uses WP best practice for enqueuing (linking) stylesheets
* Export child themes as Zip Archive
* Use web fonts in your child theme
* Identify and override exact selectors from the parent theme
* Change specific colors, backgrounds, font styles, etc., without changing other elements
* Automatically generate cross-browser and vendor-prefixed rules and CSS gradients
* Preview style changes before committing to them
* Customize @media queries for responsive design
* Uses WP Filesystem API – will not create files you cannot remove

= Child Theme Configurator PRO =

Apply the CSS editing power of Child Theme Configurator to any WordPress Plugin installed on your website. Child Theme Configurator PRO scans your plugins and lets you customize their stylesheets. We’ve added more features to make design work quicker and easier with PRO. 

https://www.youtube.com/watch?v=fktwCk43a8c

Learn more at http://www.childthemeconfigurator.com/child-theme-configurator-pro

= Unlimited Widget Content With a Single Plugin =

IntelliWidget is a versatile widget manager that does the work of multiple plugins by combining custom page menus, featured posts, sliders and other dynamic content features that can display on a per-page or site-wide basis.

https://www.youtube.com/watch?v=Ttw1xIZ2b-g

Learn more at http://www.lilaeamedia.com/plugins/intelliwidget

= IntelliWidget Responsive Menu =

Break free from your theme's built-in responsive menu options and take control over the mobile user experience with our premium menu plugin.

https://www.youtube.com/watch?v=JDbxvaEt7VE

Learn more at http://www.lilaeamedia.com/plugins/intelliwidget-responsive-menu

== Installation ==

1. To install from the Plugins repository:
    * In the WordPress Admin, go to "Plugins > Add New."
    * Type "child theme" in the "Search" box and click "Search Plugins."
    * Locate "Child Theme Configurator" in the list and click "Install Now."

2. To install manually:
    * Download the Child Theme Configurator plugin from http://wordpress.org/plugins/child-theme-configurator
    * In the WordPress Admin, go to "Plugins > Add New."
    * Click the "Upload" link at the top of the page.
    * Browse for the zip file, select and click "Install."

3. In the WordPress Admin, go to "Plugins > Installed Plugins." Locate "Child Theme Configurator" in the list and click "Activate."

4. Navigate to Tools > Child Themes (multisite users go to Network Admin > Themes > Child Themes).
   
= 10 Easy Steps to Create a Child Theme =

1. Select the theme you want to configure from the "Parent Theme" menu.

2. Select "new" or "existing".

3. Optional: Enter a Name, Theme Website, Author, Author Website, Description, Tags and Version for the child theme.

4. Optional: Copy Parent Theme Menus, Widgets and other Options. NOTE: This will overwrite any child theme options you may have already set.

5. Choose stylesheet handling:
   * **Enqueue parent stylesheet (default):**
     Select this option if the parent theme enqueues the stylesheet but has no special handling for child themes. Start with this option if unsure.
   * **@import parent stylesheet:**
     Select this option if the parent theme links the stylesheet in the header template. Using @import is discouraged but necessary in this case unless you modify the header template.
   * **Enqueue child stylesheet:**
     Select this option if the parent theme incorrectly loads the "template" stylesheet or does not load the "style.css" file at all. This is unusual but occurs in some themes.
   * **None (handled by theme):**
     Select this option if all stylesheets are automatically loaded for child themes (e.g., "Responsive" by CyberChimps). 

6. Optional: Save Backup

7. Optional: Reset/Restore from backup.

8. Optional: Choose additional stylesheets. Stylesheets that are currently used by the parent theme are automatically selected.

9. Click "Generate/Rebuild Child Theme Files."

10. IMPORTANT: Always test child themes with Live Preview (theme customizer) before activating!

== Frequently Asked Questions ==

= Is there a tutorial? =

https://www.youtube.com/watch?v=53M7RVxDYEY

= If the parent theme changes (e.g., upgrade), do I have to update the child theme? = 

No. This is the point of using child themes. Changes to the parent theme are automatically inherited by the child theme.

A child theme is not a "copy" of the parent theme. It is a special feature of WordPress that let's you override specific styles and functions leaving the rest of the theme intact. Quality themes should identify any deprecated functions or styles in the upgrade notes so that child theme users can make adjustments accordingly.

= If I uninstall Child Theme Configurator are child themes affected? =

No. Child Theme Configurator is designed to work independently of themes and plugins. Just remember that if you re-install, you must rebuild the configuration data using the Parent/Child tab.

= Does it work with Multisite? =

Yes. Go to "Network Admin > Themes > Child Themes." Child themes must be "Network enabled" to preview and activate for Network sites.

= Does it work with plugins? =

Child Theme Configurator PRO brings the CSS editing power of Child Theme Configurator to any WordPress Plugin installed on your website by scanning your plugins and creating custom CSS in your Child Themes. Learn more at http://www.childthemeconfigurator.com/child-theme-configurator-pro

= Why doesn't this work with my [insert vendor here] theme? = 

Some themes (particularly commercial themes) do not correctly load parent template files or automatically load child theme stylesheets or php files.

This is unfortunate, because in the best case they effectively prohibit the webmaster from adding any customizations (other than those made through the admin theme options) that will survive past an upgrade. **In the worst case they will break your website when you activate the child theme.** 

Contact the vendor directly to ask for this core functionality. It is our opinion that ALL themes (especially commercial ones) must pass the Theme Unit Tests outlined by WordPress.org and ALWAYS TEST CHILD THEMES BEFORE ACTIVATING (See "Preview and Activate").

= Will this slow down my site? =

Child Theme Configurator is designed to add the minimum amount of additional overhead possible and can actually improve performance. **For example:**

   * Child Theme Configurator creates or updates files that are already being read by the system. On the front-end, there are no database calls so WordPress can run independent of the plugin. In fact, you can remove Child Theme Configurator when you are finished setting up your child themes.
   * Customizations are applied to a stylesheet file that can be cached by the browser and/or cached and minimized by a performance caching plugin. Because the editor creates mostly "overrides" to existing styles, the file is typically smaller than other stylesheets.
   * The code that drives the editor interface only loads when the tool is being used from the WordPress Admin, including Javascript and CSS. This means that it will not get in the way of other admin pages.
   * The biggest performance hit occurs when you generate the Child Theme files from the Parent/Child tab, but this is a one-time event and only occurs from the WordPress Admin.

= HELP! I changed a file and now I am unable to access my website or login to wp-admin to fix it! =

To back out of a broken child theme you have to manually rename the offending theme directory name (via FTP, SSH or your web host control panel file manager) so that WordPress can’t find it. WordPress will then throw an error and revert back to the default theme (currently twenty-fifteen).

The child theme is in your themes folder, usually

[wordpress]/wp-content/themes/[child-theme]

To prevent this in the future, always test child themes with Live Preview (theme customizer) before activating.

= Why are my menus displaying incorrectly when I activate new child themes? =
...or...
= Why is my custom header missing when I activate new child themes? =
...or...
= Why does my custom background go back to the default when I activate new child themes? =
...or...
= Why do my theme options disappear when I activate new child themes? =

These options are specific to each theme and are saved separately in the database. When you create new child themes, their options are blank.

Many of these options can be copied over to the child theme by checking "Copy Parent Theme Menus, Widgets and other Options" when you generate the child theme files on the Parent/Child tab.

If you want to set different options you can either apply them after you activate the child theme using the theme customizer, or by using the "Live Preview" under Appearance > Themes.

Every theme handles options in its own way. Most often, they will create a set of options and store them in the WordPress database. Some options are specific to the active theme (or child theme), and some are specific to the parent theme only (meaning the child theme CANNOT customize them). You will have to find out from the theme author which are which.

= Where is Child Theme Configurator in the Admin? = 

For most users the Child Theme Configurator can be found under "Tools > Child Themes."

WordPress Multisite (Network) users go to "Network Admin > Themes > Child Themes." 

NOTE: Only users with "install_themes" capability will have access to the Child Theme Configurator.

Click the "Help" tab at the top right for a quick reference.

= How do I add Web Fonts? =

The easiest method is to paste the @import code provided by Google, Font Squirrel or any other Web Font site into the @import tab. The fonts will then be available to use as a value of the font-family rule. Be sure you understand the license for any embedded fonts.

You can also create a secondary stylesheet that contains @font-face rules and import it using the @import tab. 

= Why doesn't the Parent Theme have any styles when I "View Parent CSS"? = 

Check the appropriate additional stylesheets under "Parse additional stylesheets" on the Parent/Child tab and load the Child Theme again. CTC tries to identify these files by fetching a page from the parent theme, but you may need to set them manually.

= Where are the styles? The configurator doesn't show anything! = 

All of the styles are loaded dynamically. You must start typing in the text boxes to select styles to edit.
"Base" is the query group that contains styles that are not associated with any particular "At-rule."

Start by clicking the "Query/Selector" tab and typing "base" in the first box. You can then start typing in the second box to retrieve the style selectors to edit.

= Why do the preview tabs return "Stylesheet could not be displayed"? = 

You have to load a child theme from the Parent/Child tab for the preview to display. This can also happen when your WP_CONTENT_URL is different than $bloginfo('site_url'). Ajax cannot make cross-domain requests by default. Check that your Settings > General > "WordPress Address (URL)" value is correct. (Often caused by missing "www" in the domain.)

= Can I edit the Child Theme stylesheet manually offline or by using the Editor or do I have to use the Configurator? = 

You can make any manual changes you wish to the stylesheet. Just make sure you import the revised stylesheet using the Parent/Child panel or the Configurator will overwrite your changes the next time you use it. Just follow the steps as usual but select the "Use Existing Child Theme" radio button as the "Child Theme" option. The Configurator will automatically update its internal data from the new stylesheet.

= Where are the child theme .php files? = 

The Child Theme Configurator automatically adds a blank functions.php file to the child theme's directory. You can copy parent theme template files using the Files tab. If you want to create new templates and directories you will have to create/upload them manually via FTP or SSH. Remember that a child theme will automatically inherit the parent theme's templates unless they also exist in the child theme's directory. Only copy templates that you intend to customize.

= How do I change a specific color/font style/background? = 

You can override a specific CSS value globally using the Rule/Value tab. See Rule/Value, above.

= How do I add styles that aren't in the Parent Theme? = 

You can add queries and selectors using the "Raw CSS" textarea on the Query/Selector tab. See Query/Selector, above.

= How do I remove a style from the Parent Theme? = 

You shouldn't really "remove" a style from the Parent. You can, however, set the rule to "inherit," "none," or zero (depending on the rule). This will negate the Parent value. Some experimentation may be necessary.

= How do I remove a style from the Child Theme? = 

Delete the value from the input for the rule you wish to remove. The Child Theme Configurator only adds overrides for rules that contain values.

= How do I set the !important flag? = 

We always recommend relying on good cascading design over global overrides. To that end, you have ability to change the load order of child theme styles by entering a value in the "Order" field. And yes, you can now set rules as important by checking the "!" box next to each input. Please use judiciously.

= How do I create cross-browser gradients? = 

The Child Theme Configurator uses a standardized syntax for gradients and only supports two-color gradients without intermediate stops. The inputs consist of origin (e.g., top, left, 135deg, etc.), start color and end color. The browser-specific syntax is generated automatically when you save these values. See Caveats, below, for more information.

= How do I make my Theme responsive? = 

The short answer is to use a responsive Parent Theme. Some common characteristics of responsive design are:

* Avoiding fixed width and height values. Using max- and min-height values and percentages are ways to make your designs respond to the viewer's browser size.
* Combining floats and clears with inline and relative positions allow the elements to adjust gracefully to their container's width.
* Showing and hiding content with Javascript.

For more information view "Make a Theme Responsive":

https://www.youtube.com/watch?v=iBiiAgsK4G4


== Screenshots ==

1. Parent/Child tab
2. Parent/Child tab with parent theme menu open
3. Query/Selector tab
4. Rule/Value tab
5. @import tab
6. Parent CSS tab
7. Files tab

== Changelog ==
= 1.7.2.1 = 
* Fix: hide called before iris init
* Fix: @import not being written on rebuild/configure
* Fix: min height on rule/value panel
* Only prune child theme selectors on rename

= 1.7.1 = 
* Removed conflicting wistia javascript link

= 1.7.0 =
* New Feature: Enqueue child theme stylesheet option for themes that do not load it.
* New Feature: Child Theme and Author website, description and tag fields.
* Fix: Redesigned UI Javascript using jQuery objects for better browser memory management.
* Fix: Child Theme Stylesheet version is timestamped to force browser reload after changes.

= 1.6.5.2 =
* Fix: Empty functions file created causing inserted markers to be output to browser.
* Fix: check for closed PHP tag in functions file prior to inserting markers

= 1.6.5.1 =
* Fix: undefined constant LILAEAMEDIA_URL
* Fix: logic to determine whether to display config notice

= 1.6.5 =
* Fix: incorrect path generation and validation on Windows servers
* Added error handling and notification to prevent jQuery conflicts and out of memory conditions
* Fix: removed max-height on rule/value overlay
* Added debug option

= 1.6.4 = 
* New Feature: Copy selector button for Raw CSS textarea on Query/Selector tab.
* Fix: Menus rendering incorrectly for RTL locales
* Fix: Border-top etc. not being written correctly to stylesheet
* Fix: Refactored ajax semaphore logic and flow

= 1.6.3 = 
* New Feature: Better child theme handling for multisite. Moved interface to Themes menu and check for network enabled.
* Fix: Restrict child theme configurator access to install_themes capability
* Fix: Preview links to Themes admin if not network enabled to prevent 'Cheatin, uh?' error.
* Fix: only users with "install_themes" capability have access to the Child Theme Configurator. This resolves permission issues with both multisite and single site installs. **MULTISITE USERS:** The Admin HAS MOVED to Network Admin > Themes > Child Themes for better handling for multisite (network) installs.

= 1.6.2.1 = 
* Fix: Regular expression introduced in version 1.6.2 parses selectors incorrectly.

= 1.6.2 =
* Fix: replaced wp_normalize_path with class method to support legacy WP versions
* Fix: support for multiple layered background images
* Fix: background:none being parsed into gradient origin parameter
* Fix: support for data URIs
* Fix: support for *= and ^= notation in selectors 

= 1.6.1 = 
* Fix: add check if theme uses hard-wired stylesheet link and alert to use @import instead of link option
* Fix: conflicts with using jQuery UI from CDN - using local version of 1.11.2 Widget/Menu/Selectmenu instead
* Fix: using wp-color-picker handle instead of iris as dependency to make sure wpColorPicker() methods are loaded
* Fix: copy parent theme widgets logic is different when child theme is active

= 1.6.0 = 
* New Feature: option to load parent stylesheet using wp_enqueue_style (link), @import or none. 
* Thanks to cmwwebfx and Shapeshifter3 for pushing me on this 
* New Feature: automatically-generated slug and name
* New Feature: restore from backup and reset options
* New Feature: backup files to "Child Theme Files" on Files Tab so they can be deleted
* New Feature: Added new theme chooser select menu with screenshot, theme info and link to live preview.
* Fix: Admin scripts now only load when CTC page is being viewed.
* Fix: parent CSS preview to correctly display all parsed parent stylesheets in sequence
* Fix: Refactored throughout for maintainability

= 1.5.4 =
* New Feature: Load imported stylesheets into the CTC admin so web fonts can be previewed.
* Set preview swatch to z-index -1 to prevent it from covering up the controls
* Spread config data across multiple option records to prevent out of memory errors with large stylesheets.
* Do not automatically select Bootstrap CSS files as additional stylesheets to (greatly) reduce overhead.
* Add jQuery UI styles that are no longer being loaded by default in the WP admin (autoselect menus).

= 1.5.3 =
* Fixed a bug in the way zero values are handled that was breaking css output in certain situations
* Added regex filter for non-printable (e.g., null) characters in input strings

= 1.5.2.2 =
* Fixed a bug introduced in v1.5.2(.1) that copied all of the parent styles to the child theme stylesheet. This should only be an issue for 'background-image' styles that reference images in the parent theme and do not have child theme overrides.
* Rolled back changes to the javascript controller that introduced a number of type errors.
* Tweaked preview ajax call to handle ssl.

= 1.5.2.1 =
* Automatically set additional stylesheets to parse based on parent theme links in head.
* Render parent CSS including additional stylesheets 

= 1.5.1 =
* Added copy option to Parent/Child tab to assign menu locations, sidebars/widgets, custom header, background, and other options to new Child Themes. 

= 1.5.0 =
* Refactored CTC to use the WP_Filesystem API. 
* Non suExec configurations will now require user credentials to add, remove or update Child Theme files. 
* Added the ability for you to make the files writable while editing and then make them read-only when you are done.
* You can also set your credentials in wp-config.php: http://codex.wordpress.org/Editing_wp-config.php#WordPress_Upgrade_Constants

= 1.4.8 =
* Removed backreference in main CSS parser regex due to high memory usage.

= 1.4.7 =
* Fixed uninitialized variable in files UI.

= 1.4.6 =
* Feature: export child themes as zip archive
* Added transform to list of vendor rules
* Bug fixed: parser not loading multiple instances of same @media rulesets
* Refactored uploader to use wp core functions for compatibility and security
* Increased CHLD_THM_CFG_MAX_RECURSE_LOOPS to 1000 to accommodate complex parent frameworks

= 1.4.5.2 = 
* Fix: javascript bug

= 1.4.5.1 = 
* Fix: regression bug - sanitizing broke raw input selectors

= 1.4.5 = 
* Fix: escape quotes in text inputs. This has bugged me for a while now.
* Fix: Escape backslash for octal content values. Thanks Laurent for reporting this.
* Fix: Normalize colors to lowercase and short form when possible to prevent duplicate entries in the data

= 1.4.4 = 
* Refactored the way CTC caches updates and returns them to the UI controller to reduce memory consumption. 
* Prevent out of memory fatals when generating new child themes.
* Changed "Scan Parent for Additional Stylesheets" to individual checkbox options for each file with a toggle to show/hide in the Parent/Child tab.
* Added automatic update of form when Parent Theme is changed.
* Pre-populate Parent/Child form when parent slug is passed to CTC options.

= 1.4.3 = 
* updated parser to match selectors containing parentheses and empty media rulesets

= 1.4.2 =
* Tweaked the Files tab options and added check for DISALLOW_FILE_EDIT
* Removed automatic @import rules for additional stylesheets that are loaded.
* Fixed bug caused by new jQuery .css function handling of empty css values (preview swatch).

= 1.4.0 =
* New Feature: Theme Files tab: 
* Copy parent templates to child themes to be edited using the Theme Editor.
* Remove child theme templates. 
* Upload child theme images.
* Remove child theme images.
* Upload child theme screenshot.

= 1.3.5 =
* Fixes a bug with the way the @import data is stored that threw errors on php 5.3 and corrupted v1.3.2 @import data.

= 1.3.3 =
* New Feature: option to scan parent theme for additional stylesheets. This allows CTC to be used with themes such as "Responsive" by CyberChimps.
* New Feature: automatically copies parent theme screenshot to child. 

= 1.3.2 =
* Fixed unquoted regex pattern in file path security check function. Thanks to buzcuz for reporting this.

= 1.3.1 =
* Updated help tab content. Added additional sanitization of source and target file paths.

= 1.3.0 =
* Changed CSS preview to retrieve directly from WordPress Admin instead of remote http GET to prevent caching issues.
* Added loading icon for CSS preview.
* Fixed JS type error on backup toggle.
* Improved extensibility throughout.

= 1.2.3 =
* Replace PHP short tags with standard codes.

= 1.2.2 = 
* New Features: You can now rename selectors in place from the Query/Selector panel. Made stylesheet backup optional. Bugs fixed: Incorrect parsing of background position when '0', fixed type error when background image url value is removed.

= 1.2.1 =
* Bugs fixed: "star hack" rules no longer throwing js error. Important flag now works on borders and gradients.

= 1.2.0 =
* New features: Link to Query/Selector tab from specific Rule/Value selector, new rule focus on adding new rule. Bugs fixed: clear Query/Selector inputs when loaded selector is empty, use latest min.js script.

= 1.1.9 =
* Added check for writability before attempting to create child theme files to avoid fatal error on servers not running suEXEC. Fixed a bug in the ctc_update_cache function that was throwing a fatal JS error when new media queries were saved via the Raw CSS input. Configurator now adds functions.php file to child theme when it does not exist.

= 1.1.8 =
* Added reorder sequence and important flag functionality. Fixed bug where multiple inputs with same selector/rule combo were assigned the same id. Fixed bug in the shorthand encoding routine. 

= 1.1.7 =
* Added tutorial video to help tabs.

= 1.1.6 =
* Added call to reset_updates() before update_option() to prevent serialization errors.

= 1.1.5 =
* Query/Selector panel now defaults to 'base'
* Fixed bug causing background-image with full urls (http://) to be parsed as gradients
* Fixed bug causing rule menu to throw error when selector has no rules

= 1.1.4 =
* Fixed sort bug in shorthand parser that was returning rules in wrong order

= 1.1.3 = 
* Fixed bug that assumed lowercase only for theme slugs. (Thanks to timk)
* Fixed update redirect to execute on first run

= 1.1.2 =
* Small bug fix to javascript (casting number to string)

= 1.1.1 =
* Fixed major bug where inputs containing '0' were being ignored
* Removed "no leading digits" requirement for theme slug
* Change query sort function to keep parent order of queries without device width rules
* Fixed gettext calls to use static namespace parameter
* Auto populate child theme inputs when existing theme is selected
* Correctly remove border when values are blanked
* Fixed duplicate "new rule" bug on Query/Selector panel
* added timestamp to backup file 
* Added encode_shorthand function to recombine margin/padding values when all 4 sides are present

= 1.1.0 =
* Corrected parsing for certain backgrounds and gradients (e.g., supports hsla color syntax)
* Handle empty selectors
* Ajax load for menus and updates
* Clean up Parent/Child form UI and validation
* Streamlined UI overall

= 1.0.0 =
* Initial release.

== Upgrade Notice ==
Version 1.7.2.1: Fixed Iris bug in JS; 1.7.2: @imports were not being written correctly on child theme rebuild. See changelog.

== Override Parent Styles ==

There are two ways to identify and override parent styles. The Child Theme Configurator lets you search styles by CSS selector and by rule. If you wish to change a specific CSS selector (e.g., h1), use the "Query/Selector" tab. If you have a specific CSS value you wish to change site-wide (e.g., the color of the type), use the "Rule/Value" tab.

= Query/Selector Tab =

The Query/Selector tab lets you find specific CSS selectors and edit them. First, find the query that contains the CSS selector you wish to edit by typing in the Query autoselect box. Select by clicking with the mouse or by pressing the "Enter" or "Tab" keys. CSS selectors are in the base query by default.
Next, find the CSS selector by typing in the "Selector" autoselect box. Select by clicking with the mouse or by pressing the "Enter" or "Tab" keys.

This will load all of the rules for that CSS selector with the Parent values on the left and the child theme values inputs on the right. Any existing child theme values will be automatically populated. There is also a Sample preview that displays the combination of Parent and Child overrides. Note that the border and background-image get special treatment.

The "Order" field contains the original sequence of the CSS selector in the parent theme stylesheet. You can change the CSS selector order sequence by entering a lower or higher number in the "Order" field. You can also force style overrides (so called "!important" flag) by checking the "!" box next to each input. Please use judiciously.

Click "Save" to update the child theme stylesheet and save your changes to the WordPress admin.

== Adding New Styles ==

If you wish to add additional rules to a given CSS selector, first load the selector using the Query/Selector tab. Then find the rule you wish to override by typing in the New Rule autoselect box. Select by clicking with the mouse or by pressing the "Enter" or "Tab" keys. This will add a new input row to the selector inputs.

If you wish to add completely new CSS selectors, or even new @media queries, you can enter free-form CSS in the "Raw CSS" textarea. Be aware that your syntax must be correct (i.e., balanced curly braces, etc.) for the parser to load the new styles. You will know it is invalid because a red "X" will appear next to the save button.

If you prefer to use shorthand syntax for rules and values instead of the inputs provided by the Child Theme Configurator, you can enter them here as well. The parser will convert your input into normalized CSS code automatically.

= Rule/Value Tab =

The Rule/Value tab lets you find specific values for a given rule and then edit that value for individual CSS selectors that use that rule/value combination. First, find the rule you wish to override by typing in the Rule autoselect box. Select by clicking with the mouse or by pressing the "Enter" or "Tab" keys.

This will load all of the unique values that exist for that rule in the parent theme stylesheet with a Sample preview for that value. If there are values that exist in the child theme stylesheet that do not exist in the parent stylesheet, they will be displayed as well.

For each unique value, click the "Selectors" link to view a list of CSS selectors that use that rule/value combination, grouped by query with a Sample preview of the value and inputs for the child theme value. Any existing child theme values will be automatically populated.

Click "Save" to update the child theme stylesheet and save your changes to the WordPress admin.

If you want to edit all of the rules for the CSS selector you can click the “Edit” link and the CSS selector will automatically load in the Query/Selector Tab.

== @import Tab and Web Fonts ==

You can add additional stylesheets and web fonts by typing @import rules into the textarea on the @import tab. **Important: do not import the parent theme stylesheet here.** Use the &quot;Parent stylesheet handling&quot; option from the Parent/Child tab.

== Files Tab ==

= Parent Templates =

You can copy PHP template files from the parent theme by checking the boxes. Click "Copy Selected to Child Theme" and the templates will be added to the child theme's directory.

CAUTION: If your child theme is active, the child theme's version of the file will be used instead of the parent immediately after it is copied. The functions.php file is generated separately and cannot be copied here.

= Child Theme Files = 

Templates copied from the parent are listed here. These can be edited using the Theme Editor in the Appearance Menu. Remove child theme images by checking the boxes and clicking "Delete Selected."</p>

= Child Theme Images = 

Theme images reside under the <code>images</code> directory in your child theme and are meant for stylesheet use only. Use the media gallery for content images. You can upload new images using the image upload form.

= Child Theme Screenshot = 

You can upload a custom screenshot for the child theme here. The theme screenshot should be a 4:3 ratio (eg., 880px x 660px) JPG, PNG or GIF. It will be renamed "screenshot".

= Export Child Theme as Zip Archive =

You can download your child theme for use on another WordPress site by clicking "Export".

== Preview and Activate ==

**IMPORTANT: Test child themes before activating!**

Some themes (particularly commercial themes) do not correctly load parent template files or automatically load child theme stylesheets or php files.

**In the worst cases they will break your website when you activate the child theme.**

1. Navigate to Appearance > Themes in the WordPress Admin. You will now see the new Child Theme as one of the installed Themes.
2. Click "Live Preview" (theme customizer) below the new Child Theme to see it in action.
3. When you are ready to take the Child Theme live, click "Activate."

**MULTISITE USERS:** You must Network Enable your child theme before you can use Live Preview. Go to "Themes" in the Network Admin.

== Caveats ==

* Only two-color gradients. The Child Theme Configurator plugin is powerful, but we have simplified the gradient interface. You can use any gradient you want as long as it has two colors and no intermediate stops.
* No @font-face rules. The Child Theme Configurator plugin only supports @media and @import. If you need other @rules, put them in a separate stylesheet and import them into the Child Theme stylesheet.
* The Child Theme Configurator plugin works with the vast majority of CSS rules, however some obscure options are not auto-prefixed.
* The Child Theme Configurator plugin does not support the legacy webkit gradient.
* CSS Rules are auto-discovered. The Child Theme Configurator plugin loads the rules that exist in the Parent stylesheet. You can always add new rules using the "Raw CSS" text area.
* Multiple versions of the same rule in a single selector are not supported, with a few exceptions. The Child Theme Configurator plugin will automatically generate vendor-prefix variations for background-image, border-radius, transform, transition, and others.

== Documentation ==

Go to http://www.childthemeconfigurator.com/documentation/

Serbo-Croatian translation courtesy of Borisa Djuraskovic borisad@webhostinghub.com http://www.webhostinghub.com

Copyright: (C) 2014-2015 Lilaea Media
