<?php
namespace Drupal\module_princess\Form;



use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface; 
/**
 * Provides a configuration form for configurable actions.
 *
 * @internal
 */
class PrincessConfigForm extends ConfigFormBase {
/**
   * {@inheritdoc}
   */
    public function getFormId() {
    return 'module_princess_configform';
     }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
       $config = $this -> config('module_princess.settings');

       $form['princess_list_title'] = [
        '#type' => 'textarea',
        '#title' => $this->t('Pincess List Title'),
        '#default_value' => $config->get('princess_list_title'),
       ];

    return parent::buildForm($form,$form_state);
  }

    /**
   * {@inheritdoc}
   */
    protected function getEditableConfigNames() {
        return [
            'module_princess.settings',
      
        ];
    }
  /**
   * {@inheritdoc}
   */
    public function submitForm(array &$form, FormStateInterface $form_state) {
        $config = $this->configFactory->getEditable('module_princess.settings');
        $config 
           ->set('princess_list_title', $form_state->getValue('princess_list_title') )
           ->save();

    parent::submitForm($form, $form_state);       

    }
    
}