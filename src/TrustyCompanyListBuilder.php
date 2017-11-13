<?php

namespace Drupal\trustycrm_company;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Company entities.
 *
 * @ingroup trustycrm_company
 */
class TrustyCompanyListBuilder extends EntityListBuilder {


  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Company ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\trustycrm_company\Entity\TrustyCompany */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.trusty_company.edit_form',
      ['trusty_company' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
