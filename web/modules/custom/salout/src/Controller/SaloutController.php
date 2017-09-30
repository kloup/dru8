<?php

namespace Drupal\salout\Controller;

use Drupal\Core\Controller\ControllerBase;

class SaloutController extends ControllerBase {

  /**
   * Display custom markup.
   *
   * @return array
   */
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Hey! Salout!'),
    );
  }

}
