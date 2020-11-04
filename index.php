<?php

require './functions/html.php';

$form = [
    'fields' => [
        'email' => [
            'label' => 'Email:',
            'type' => 'text',
            'extra' => [
                'attr' => [
                    'placeholder' => 'aurimas@email',
                    'class' => 'input-field'
                ]
            ]
        ],
        'password' => [
            'label' => 'Password:',
            'type' => 'password',
            'extra' => [
                'attr' => [
                    'placeholder' => 'password...',
                    'class' => 'input-field'
                ],
            ],
        ]
    ],
    'buttons' => [
        'login' => [
            'title' => 'Login',
            'type' => 'submit',
            'extra' => [
                'attr' => [
                     'class' => 'btn'
                ],
            ]
        ],
        'clear' => [
            'title' => 'Clear',
            'type' => 'reset',
            'extra' => [
                'attr' => [
                    'class' => 'btn'
                ],
            ],
        ]
    ],
];


function get_clean_input($form) {
    $parameters = [];

    foreach ($form as $index => $input) {
        $parameters[$index] = FILTER_SANITIZE_SPECIAL_CHARS;
    }
    return filter_input_array(INPUT_POST, $parameters);
}
$svarus_inputai = get_clean_input($form);
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Forms</title>
</head>
<body>
<form method="POST">
    <?php foreach ($form['fields'] as $input_name => $input): ?>
        <label>
            <?php print $input['label']; ?>
            <input <?php print input_attr($input_name, $input); ?>>
        </label>
    <?php endforeach; ?>
    <?php foreach ($form['buttons'] as $button_name => $button): ?>
        <button <?php print button_attr($button_name, $button); ?>>
            <?php print $button['title']; ?>
        </button>
    <?php endforeach; ?>
</form>
</body>
</html>