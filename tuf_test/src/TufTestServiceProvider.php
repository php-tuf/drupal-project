<?php

namespace Drupal\tuf_test;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;
use Drupal\package_manager\Validator\PhpTufValidator;

final class TufTestServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
    parent::alter($container);

    $container->getDefinition(PhpTufValidator::class)
      ->addTag('event_subscriber');
  }

}
