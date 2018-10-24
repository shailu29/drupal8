<?php
/**
 * @file
 * Contains \Drupal\first_module\Controller\FirstController.
 */

namespace Drupal\rate_car\Controller;

use Drupal\Core\Controller\ControllerBase;

class RateCar extends ControllerBase {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello world'),
    );
  }
}