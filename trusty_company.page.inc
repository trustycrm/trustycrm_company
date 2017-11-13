<?php

/**
 * @file
 * Contains trusty_company.page.inc.
 *
 * Page callback for Company entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Company templates.
 *
 * Default template: trusty_company.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_trusty_company(array &$variables) {
  // Fetch TrustyCompany Entity Object.
  $trusty_company = $variables['elements']['#trusty_company'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
