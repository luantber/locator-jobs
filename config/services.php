<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
        'client_id' => '669759590228-p27me0bmtone420f037snqbaue17oon9.apps.googleusercontent.com',//env('GOOGLE_ID'),         // Your GitHub Client ID
        'client_secret' => 'sSaqaS6NBTR4CJJCqQvLLFSI',//env('GOOGLE_SECRET'), // Your GitHub Client Secret
        'redirect' => 'http://localhost:8000/login/google/callback/' //env('GOOGLE_REDIRECT') //'http://localhost:8000/login/google/callback/'
    ],

];
