<?php

namespace Drupal\candidate_search\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Component\Serialization\Json;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * Returns responses for Candidate Search routes.
 */
class CandidateSearchController extends ControllerBase
{

  /**
   * Builds the response.
   */
  public function build()
  {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

  /**
   * Builds the response.
   */
  public function getCandidates()
  {
    $client = \Drupal::httpClient();
    $request = $client->get('https://www.googleapis.com/civicinfo/v2/representatives?key=AIzaSyAwsPddH4sGbADtfZbjR4BHCzpaLkIFm68&address=Washington DC');
    $response = $request->getBody()->getContents();
    $results = json::decode($response);
    echo "<pre>";
    print_r($results);
    echo "</pre>";
  }
}
