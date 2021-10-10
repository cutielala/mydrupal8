<?php
namespace Drupal\module_princess\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;
/**
 * Provides a configuration form for configurable actions.
 *
 * @internal
 */
class AjaxPrincessForm extends FormBase {
/**
   * {@inheritdoc}
   */
    public function getFormId() {
        return 'module_princess_ajaxform';
     }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['message'] = [
        '#type' => 'markup',
        '#markup' => '<div class="viola_message"></div>',  
   
      ];
    $form['c_1'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Candidate 1'),  
   
      ];
  
      $form['c_2'] = [
        '#type' => 'textfield',
        '#title' => $this ->t('Candidate 2'),
      ];
    
      $form['submit'] = [
          '#type' => 'submit',
          '#value' => $this -> t('Who will win?'),
          '#ajax' => [
              'callback' => '::myAjaxCallback',
          ]
      ];
    return $form;
  }
// Get the ajax value 
public function myAjaxCallback(array &$form, FormStateInterface $form_state) {
   $winner = rand(1,2);


   $Selector = '.viola_message';
   $content = 'The winnder is '.$form_state -> getValue('c_'.$winner) ;


   $responce = new AjaxResponse();

  // $response->addCommand( new HtmlCommand($Selector,$contents) );//https://www.drupal.org/docs/drupal-apis/ajax-api/core-ajax-callback-commands);
  $responce ->addCommand( new HtmlCommand('.viola_message','The winnder is '.$form_state->getValue('c_'.$winner) ) );
   return $responce;

   }
  /**
   * {@inheritdoc}
   */
    public function submitForm(array &$form, FormStateInterface $form_state) {
   
        drupal_set_message('Submitting our Ajax Form...');
    }
    
}