<?php

namespace Drupal\price;

/**
 * Represents a locale.
 */
final class Locale {

  /**
   * The locale.
   *
   * @var string
   */
  protected $localeCode;

  /**
   * Constructs a new Locale object.
   *
   * @param string $locale_code
   *   The locale code.
   */
  public function __construct(string $locale_code) {
    $this->localeCode = $locale_code;
  }

  /**
   * Gets the locale code.
   *
   * @return string
   *   The locale code.
   */
  public function getLocaleCode() : string {
    return $this->localeCode;
  }

  /**
   * Gets the string representation of the locale.
   *
   * @return string
   *   The string representation of the locale.
   */
  public function __toString() : string {
    return $this->localeCode;
  }

}
