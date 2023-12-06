**This is meant for TESTING PURPOSES ONLY!** Do not use it in production. Just don't do it. Or I will let my dog play in a mud pit, then let her run around in your house.

# TUF ❤️s Drupal

This is a template project, based on `drupal/recommended-project`, that sets up a Drupal 10.1 project with TUF protection for installing contributed modules and themes.

## Installation

To set up an instance of this project:

```
composer create-project php-tuf/drupal-project --stability=dev --repository='{"type": "vcs", "url": "https://github.com/php-tuf/drupal-project"}'
```

That's it.

## Things to Know

* This is using the `packages.drupal.org` **staging server** as the source of secure TUF metadata. The staging server is in heavy development and might need to be refreshed from time to time. Expect bugs!
* `drupal/core`, and other packages prefixed with `drupal/core-`, are NOT protected by TUF. That's because they are exposed by `packagist.org`, which doesn't support TUF.
* TUF is meant to work silently, in the background. Under normal usage, you shouldn't really know it's there. If you pass the `-vvv` flag to Composer commands, though, you will see TUF outputting debugging information. TUF's debugging output is prefixed with `[TUF]`.
* At the moment, PHP-TUF **significantly slows down Composer's performance** and increases its memory usage. It's like a flashback to the days of Composer 1.x. I recommend you give PHP a _minimum_ of 1 GB of RAM, and be prepared to make a cup of coffee while Composer does its work.

### Supported Modules & Themes

The staging server only applies TUF protection to the 150 most popular Drupal modules and themes. You'll get nasty-looking errors if you try to install or update anything that's not on this list:

* address
* addtoany
* adminimal_admin_toolbar
* adminimal_theme
* admin_toolbar
* advagg
* allowed_formats
* anchor_link
* antibot
* asset_injector
* auto_entitylabel
* autologout
* backup_migrate
* better_exposed_filters
* blazy
* block_class
* block_field
* bootstrap
* bootstrap_barrio
* captcha
* chosen
* ckeditor
* colorbox
* colorbutton
* color_field
* components
* conditional_fields
* config_filter
* config_ignore
* config_split
* config_update
* contact_storage
* crop
* csv_serialization
* ctools
* devel
* diff
* draggableviews
* dropzonejs
* ds
* easy_breadcrumb
* editor_advanced_link
* editor_file
* embed
* entity
* entity_browser
* entity_clone
* entity_embed
* entityqueue
* entity_reference_revisions
* entity_usage
* eu_cookie_compliance
* externalauth
* extlink
* facets
* fakeobjects
* features
* feeds
* field_group
* field_permissions
* file_mdm
* focal_point
* fontawesome
* geofield
* geolocation
* gin
* gin_toolbar
* google_analytics
* google_tag
* honeypot
* image_effects
* imagemagick
* image_widget_crop
* imce
* inline_entity_form
* jquery_ui
* jquery_ui_accordion
* jquery_ui_autocomplete
* jquery_ui_datepicker
* jquery_ui_draggable
* jquery_ui_menu
* jquery_ui_slider
* jquery_ui_touch_punch
* key
* layout_builder_restrictions
* libraries
* link_attributes
* linkit
* mailsystem
* masquerade
* maxlength
* menu_admin_per_menu
* menu_block
* menu_breadcrumb
* menu_item_extras
* menu_link_attributes
* metatag
* migrate_plus
* migrate_tools
* mimemail
* module_filter
* page_manager
* panelbutton
* panels
* paragraphs
* password_policy
* pathauto
* profile
* quick_node_clone
* rabbit_hole
* recaptcha
* redirect
* redis
* restui
* robotstxt
* role_delegation
* scheduler
* schema_metatag
* search_api
* search_api_autocomplete
* search_api_solr
* seckit
* simple_sitemap
* sitemap
* slick
* slick_views
* smart_trim
* smtp
* sophron
* state_machine
* superfish
* svg_image
* swiftmailer
* token
* token_filter
* twig_field_value
* twig_tweak
* typed_data
* ultimate_cron
* upgrade_status
* video_embed_field
* views_bootstrap
* views_bulk_operations
* views_data_export
* views_infinite_scroll
* viewsreference
* views_slideshow
* view_unpublished
* webform
* xmlsitemap
