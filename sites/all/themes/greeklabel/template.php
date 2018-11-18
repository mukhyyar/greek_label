<?php
function greeklabel_form_contact_site_form_alter( &$form, &$form_state, $form_id ) { 
$form['name']['#attributes']['placeholder'] = t( "Name" ); 
$form['name']['#title_display'] = 'invisible'; 


  
$form['mail']['#attributes']['placeholder'] = t( "Email:" ); 
$form['mail']['#title_display'] = 'invisible'; 

$form['message']['#attributes']['placeholder'] = t( "Message" ); 

$form['message']['#title_display'] = 'invisible'; 
$form['actions']['submit']['#value'] = 'Send Message!';
  
unset ($form['copy']); 
unset($form['subject']);
unset($form['name']['#title']);
unset($form['mail']['#title']);



  $form['name']['#prefix'] = '<div class="form-group">';
  $form['name']['#suffix'] = '</div>';
  $form['name']['#attributes']['class'][] = 'form-control';
  
  $form['mail']['#prefix'] = '<div class="form-group">';
  $form['mail']['#suffix'] = '</div>';
  $form['mail']['#attributes']['class'][] = 'form-control';
 
  $form['message']['#prefix'] = '<div class="form-group">';
  $form['message']['#suffix'] = '</div>';
  $form['message']['#attributes']['class'][] = 'form-control';
  
  $form['actions']['submit']['#attributes']['class'][] = 'text-white';
  $form['actions']['submit']['#attributes']['class'][] = ' bg--pink';
  $form['actions']['submit']['#attributes']['class'][] = 'btn';
  $form['actions']['submit']['#attributes']['class'][] = 'btn-default';
  $form['actions']['submit']['#attributes']['class'][] = 'form-control';
 
}  

// function themeName_form_alter(&$form, &$form_state, $form_id) {
  // if ($form_id == 'contact_site_form') {
  // // Changing placeholder attributes values
  // $form['name']['#attributes']['placeholder'] = t( 'Your name' );
  // $form['mail']['#attributes']['placeholder'] = t( 'Your e-mail' );
  // $form['subject']['#attributes']['placeholder'] = t( 'Your subject' );
  // $form['message']['#attributes']['placeholder'] = t( 'Your message' );
  // }
  // }
  
