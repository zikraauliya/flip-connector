<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Secret Key
    |--------------------------------------------------------------------------
    |
    | This value is the secret key found in your Flip Business account. This value is used when the
    | package needs to generate a base64 encoded encryption for Flip Business authorization.
    |
    */
    'secret_key' => env('FLIP_SECRET_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Environment
    |--------------------------------------------------------------------------
    |
    | This value is determines the enviroment of Flip Business API endpoint. Available options are 'big_sandbox_api'
    | for testing, 'kyc' (Know-Your-Client) for Non-PJP Agent Money Transfer  or 'api' for live production integration,
    | default value is 'big_sandbox_api'.
    |
    */
    'env' => env('FLIP_ENV', 'big_sandbox_api'),

    /*
    |--------------------------------------------------------------------------
    | Base URL
    |--------------------------------------------------------------------------
    |
    | This value is the base URL of Flip Business API endpoint. This value is based on env('FLIP_ENV').
    |
    */
    'base_url' => 'https://bigflip.id/'.env('FLIP_ENV'),

    /*
    |--------------------------------------------------------------------------
    | Validation Token
    |--------------------------------------------------------------------------
    |
    | This value is the validation token found in your Flip Business account. This value is used when
    | we need to ensure whether the callback is actually from Flip server.
    |
    */
    'validation_token' => env('FLIP_VALIDATION_TOKEN'),

    /*
    |--------------------------------------------------------------------------
    | Private Key
    |--------------------------------------------------------------------------
    |
    | This value is the private section of public/private key ssh pair.
    | In this example we're storing private key in .ENV file, you can store it however you want.
    | In production environment you're highly recommended to store it as safe as possible.
    |
    */
    'private_key' => env('SSH_PRIVATE_KEY'),
];
