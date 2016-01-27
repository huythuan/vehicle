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
        '#name'  => 'Honda Accord',
        '#attributes' => [
            'id' => 'best-vehicle',
            'class' => ['vehicle--left', 'clearfix'],
        ],
        '#power' => '2.4',
        '#mile' => '500.000',
        '#run' => ['free way', 'local', 'moutain'],
        '#version' => '2016',
        '#available' => ['sport', 'sedan', 'suv', 'mini-van'],        
    ];
    
    $second_vehicle = [
        '#theme' => 'vehicle',
        '#name'  => 'Honda CRV',
        '#attributes' => [
            'id' => 'best-vehicle',
            'class' => ['vehicle--left', 'clearfix'],
        ],
        '#power' => '3.4',
        '#mile' => '300.000',
        '#run' => ['free way', 'local', 'moutain', 'water'],
        '#version' => '2017',
        '#available' => ['sport', 'sedan', 'suv', 'mini-van'],
    ];
    return [
        '#title' => 'Vehicle Description',
        '#type' => 'container',
        '#attached' => ['library' => ['vehicle/description']],
        'attributes' => ['class' => ['admin']],
        $first_vehicle,
        $second_vehicle,
    ];
  }
}