<?php

namespace App\Http\Controllers;

class SeriesController {

  public function listarSeries() {
    $series = [
      'Peaky Blinders',
      'Looney Tunes',
      'Vandinha'
    ];

    $html = '<ul>';
    foreach ($series as $serie) {
      $html .= "<li>$serie</li>";
    }
    $html.= '</ul>';

    echo $html;

  }

}