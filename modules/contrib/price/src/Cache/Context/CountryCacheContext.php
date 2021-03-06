<?php

namespace Drupal\price\Cache\Context;

use Drupal\price\CurrentCountry;
use Drupal\Core\Cache\CacheableMetadata;
use Drupal\Core\Cache\Context\CacheContextInterface;

/**
 * Defines the country cache context, for "per country" caching.
 *
 * Cache context ID: 'price_country'.
 */
class CountryCacheContext implements CacheContextInterface {

  /**
   * The current country.
   *
   * @var \Drupal\price\CurrentCountry
   */
  protected $currentCountry;

  /**
   * Constructs a new CountryCacheContext object.
   *
   * @param \Drupal\price\CurrentCountry $country
   *   The current country.
   */
  public function __construct(CurrentCountry $country) {
    $this->currentCountry = $country;
  }

  /**
   * {@inheritdoc}
   */
  public static function getLabel() {
    return t('Country');
  }

  /**
   * {@inheritdoc}
   */
  public function getContext() {
    return $this->currentCountry->getCountry()->getCountryCode();
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheableMetadata() {
    return new CacheableMetadata();
  }

}
