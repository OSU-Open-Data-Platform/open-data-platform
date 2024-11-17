<?php

namespace Drupal\facets_exposed_filters\EventSubscriber;

use Drupal\facets\FacetManager\DefaultFacetManager;
use Drupal\search_api\Event\QueryPreExecuteEvent;
use Drupal\search_api\Event\SearchApiEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Provides the FacetsExposedFiltersSubscriber class.
 *
 * @package Drupal\facets_exposed_filters\EventSubscriber
 */
class FacetsExposedFiltersSubscriber implements EventSubscriberInterface {

  /**
   * Reacts to the query alter event.
   *
   * @param \Drupal\search_api\Event\QueryPreExecuteEvent $event
   *   The query alter event.
   */
  public function queryAlter(QueryPreExecuteEvent $event) {
    $query = $event->getQuery();

    if ($query->getIndex()->getServerInstance()->supportsFeature('search_api_facets')) {
      // Views adds an extra nested conditiongroup, we need to remove this for facets.
      if($query->getOption('uses_facets_exposed_filters')) {
        $conditions = &$query->getConditionGroup()->getConditions();
        if(count($conditions) == 1 && $conditions[0] instanceof \Drupal\search_api\Query\ConditionGroupInterface) {
          $conditions = $conditions[0]->getConditions();
        }
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents(): array {
    // Workaround to avoid a fatal error during site install from existing
    // config.
    // @see https://www.drupal.org/project/facets/issues/3199156
    if (!class_exists('\Drupal\search_api\Event\SearchApiEvents', TRUE)) {
      return [];
    }

    return [
      SearchApiEvents::QUERY_PRE_EXECUTE => 'queryAlter',
    ];
  }

}
