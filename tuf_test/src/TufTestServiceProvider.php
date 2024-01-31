<?php

namespace Drupal\tuf_test;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;
use Drupal\package_manager\Validator\ComposerPluginsValidator;
use Drupal\package_manager\Validator\PhpTufValidator;

class TufTestServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
    parent::alter($container);

    $container->getDefinition(PhpTufValidator::class)
      ->addTag('event_subscriber')
      ->setArgument('$baseUrl', 'https://drupal:drupal@packages.staging.devdrupal.org/8');

    // The Composer plugin validator does not allow dev snapshots of the TUF
    // integration plugin.
    $container->getDefinition(ComposerPluginsValidator::class)
      ->clearTag('event_subscriber');
  }

}
