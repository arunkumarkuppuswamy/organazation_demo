<?php

namespace Drupal\price\Resolver;

use Drupal\price\Context;
use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Provides the default price, taking it directly from the entity.
 */
class DefaultPriceResolver implements PriceResolverInterface {

  /**
   * {@inheritdoc}
   */
  public function resolve(ContentEntityInterface $entity, $quantity, Context $context) {
    $field_name = $context->getData('field_name', 'price');
    if ($field_name == 'price') {
      // Use the price getter to allow custom purchasable entity types to have
      // computed prices that are not backed by a field called "price".
      return $entity->getPrice();
    }
    elseif ($entity->hasField($field_name) && !$entity->get($field_name)->isEmpty()) {
      return $entity->get($field_name)->first()->toPrice();
    }
  }

}
