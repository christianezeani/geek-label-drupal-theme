<?php

function geeklabel_form_system_theme_settings_alter(&$form, $form_state) {
  // BEGIN: Social Links
  $form['geeklabel_social'] = array(
    '#type'          => 'fieldset',
    '#title'         => t('OpenCharity Social Links'),
    '#weight' => -2
  );

  $form['geeklabel_social']['opencharity_social_facebook'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Facebook Url'),
    '#default_value' => theme_get_setting('opencharity_social_facebook'),
    '#description'   => t("Sets the Facebook Url")
  );
  // END: Social Links

}

?>