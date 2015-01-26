<?php

/**
 * @file
 * template.php
 */
function garuda_menu_link($variables)
{
    $element = $variables['element'];
  $sub_menu = '';
  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }


  $image = file_load($element['#localized_options']['content']['image']);
  $image_markup = theme_image(array(
    'path' => $image->uri,
    'width' => $image->image_dimensions['width'],
    'height' => $image->image_dimensions['height']
    )
  );
  if (
       isset($file->image_dimensions) &&
       isset($file->original->image_dimensions) &&
       $file->image_dimensions != $file->original->image_dimensions
    ){
      _file_entity_update_image_field_dimensions($file);
    }

  $options = $element['#localized_options'];
  $options['html'] = true;


  $output = l($image_markup, $element['#href'], $options);


  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

?>
