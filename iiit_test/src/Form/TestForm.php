<?php

namespace Drupal\iiit_test\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class TestForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'iiit_test_configuration_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'iiit_test.configuration',
    ];
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('iiit_test.configuration');

    $form['years'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Years'),
      '#description' => $this->t('Select the menus that should be used by Coffee to search.'),
      '#options' => [2017, 2016, 2015],
      '#default_value' => $config->get('years'),
    ];

    return parent::buildForm($form, $form_state);
  }

}
