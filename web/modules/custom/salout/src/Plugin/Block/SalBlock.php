<?php

namespace Drupal\salout\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Block example.
 *
 * @Block(
 *   id = "salblock",
 *   admin_label = @Translation("Sal block"),
 *   category = @Translation("Sal Block Cat"),
 * )
 */
class SalBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('Salout Sal desu!'),
    );
  }
}
