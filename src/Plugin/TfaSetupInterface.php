<?php

namespace Drupal\tfa\Plugin;

use Drupal\Core\Form\FormStateInterface;

/**
 * Interface TfaSetupInterface.
 *
 * Setup plugins are used by TfaSetup for configuring a plugin.
 *
 * Implementations of a begin plugin should also be a validation plugin.
 */
interface TfaSetupInterface {

  /**
   * Get the setup form for the validation method.
   *
   * @param array $form
   *   The configuration form array.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   Form API array.
   */
  public function getSetupForm(array $form, FormStateInterface $form_state);

  /**
   * Validate the setup data.
   *
   * @param array $form
   *   The configuration form array.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public function validateSetupForm(array $form, FormStateInterface $form_state);

  /**
   * Submit the setup form.
   *
   * @param array $form
   *   The configuration form array.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return bool
   *   TRUE if no errors occur when saving the data.
   */
  public function submitSetupForm(array $form, FormStateInterface $form_state);

  /**
   * Returns a list of links containing helpful information for plugin use.
   *
   * @return string[]
   *   An array containing help links for e.g., OTP generation.
   */
  public function getHelpLinks();

}
