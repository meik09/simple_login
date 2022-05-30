<?php

return [
    'credentials' => ['email', 'password'],
    'rules' => [
        'email' => 'required|email|max:100',
        'password' => 'required|min:6|max:36'
    ],
    'messages' => [
        'email.required' => 'validation.login.email.required',
        'email.email' => 'validation.login.email.email',
        'email.max' => 'validation.login.email.max',
        'password.min' => 'validation.login.password.min',
        'password.max' => 'validation.login.password.max',
        'rememberMe.nullable' => 'validation.login.rememberMe.nullable'
    ]
];
