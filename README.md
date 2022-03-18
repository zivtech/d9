Example [Drupal](https://drupal.org) 9 setup with [Lando](https://lando.dev/)
====

## Important files and directories

### `/web`

The web files are located in the `/web` subdirectory, this facilitates a Composer based workflow.

### `composer.json`

This site is managed by Composer! All core and contrib modules are added to the project via `composer.json` and `composer.lock` keeps track of the exact version of each modules (or other dependency). Modules, and themes are placed in the correct directories thanks to the `"installer-paths"` section of `composer.json`. `composer.json` also includes instructions for `drupal-scaffold` which takes care of placing some individual files in the correct places like `settings.pantheon.php`.

Please see [Updating Drupal core via Composer](https://www.drupal.org/docs/updating-drupal/updating-drupal-core-via-composer) for additional instructions for updating.

Note that all NPM & Bower packages should be installed using composer via [Asset Packagist](https://asset-packagist.org/).
