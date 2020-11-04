<?php


function html_attr($attr) {
    $string = '';

    foreach ($attr as $index => $attribute) {
        $string .= "$index=\"$attribute\" ";
    }
    return $string;
}


function input_attr($field_name, $field) {
    $attributes = [
            'name' => $field_name,
            'type' => $field['type'],
            'value' => $field['value'] ?? ''
        ] + $field['extra']['attr'];

    return html_attr($attributes);
}

function button_attr($button_id, $button) {
    $attributes = [
            'id' => $button_id,
            'name' => 'action',
            'type' => $button['type']
        ] + $button['extra']['attr'];

    return html_attr($attributes);
}
