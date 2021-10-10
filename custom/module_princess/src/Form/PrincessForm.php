<?php
namespace Drupal\module_princess\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
/**
 * Provides a configuration form for configurable actions.
 *
 * @internal
 */
class PrincessForm extends FormBase {
/**
   * {@inheritdoc}
   */
    public function getFormId() {
    return 'module_princess_form';
     }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
  
    $form['c_1'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Candidate 1'),  
 
    ];

    $form['c_2'] = [
      '#type' => 'textfield',
      '#title' => $this ->t('Candidate 2'),
    ];

    $form['submit']= [
      '#type' => 'submit',
      '#value' => $this->t('who will win?'),
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
    public function submitForm(array &$form, FormStateInterface $form_state) {
    $winner = rand(1,2);
    drupal_set_message(
        'The winnder between '.$form_state->getValue('c_1').' and '.$form_state->getValue('c_2'). ' is:'. $form_state->getValue('c_'.$winner)
  
    
        );
    }
    public function validateForm(array &$form, FormStateInterface $form_state) {
     
      if (empty($form_state->getValue('c_1'))) {
    
        // Set an error for the form element with a key of "title".
        $form_state
          ->setErrorByName('title', $this
          ->t('Please specify Candidate 1'));
      }
    }
}