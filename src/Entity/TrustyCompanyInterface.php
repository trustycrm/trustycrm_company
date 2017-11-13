<?php

namespace Drupal\trustycrm_company\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Company entities.
 *
 * @ingroup trustycrm_company
 */
interface TrustyCompanyInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Company name.
   *
   * @return string
   *   Name of the Company.
   */
  public function getName();

  /**
   * Sets the Company name.
   *
   * @param string $name
   *   The Company name.
   *
   * @return \Drupal\trustycrm_company\Entity\TrustyCompanyInterface
   *   The called Company entity.
   */
  public function setName($name);

  /**
   * Gets the Company creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Company.
   */
  public function getCreatedTime();

  /**
   * Sets the Company creation timestamp.
   *
   * @param int $timestamp
   *   The Company creation timestamp.
   *
   * @return \Drupal\trustycrm_company\Entity\TrustyCompanyInterface
   *   The called Company entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Company published status indicator.
   *
   * Unpublished Company are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Company is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Company.
   *
   * @param bool $published
   *   TRUE to set this Company to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\trustycrm_company\Entity\TrustyCompanyInterface
   *   The called Company entity.
   */
  public function setPublished($published);

}
