<?php

/**
 * @file 
 * Contains \Drupal\vehicle\Controller\VehicleController.
 */

namespace Drupal\vehicle\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Return responses for vehicle module routes.
 * @author nguyeth
 *
 */
class VehicleController extends ControllerBase {
  /**
   * Render a vehicle.
   */
  public function render() {
    $first_vehicle = [
        '#theme' => 'vehicle',
        '#name'  => 'Honda',
        '#attributes' => [
            'id' => 'best-vehicle',
            'class' => ['vehicle--left', 'clearfix'],
        ],
        '#power' => '2.4',
        '#mile' => '500000',
        '#run' => ['free way', 'local', 'moutain'],
        
    ];
  }
}