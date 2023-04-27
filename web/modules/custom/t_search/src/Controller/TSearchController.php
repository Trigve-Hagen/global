<?php

namespace Drupal\t_search\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for T Search routes.
 */
class TSearchController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
