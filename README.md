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
