<?php

require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_live_XXXX');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'https://pay.skyit.uk';

$checkout_session = \Stripe\Checkout\Session::create([
  'submit_type' => 'auto',
  'billing_address_collection' => 'auto',
  'line_items' => [[
    'price' => 'price_XXXX',
    'quantity' => 1,
    'adjustable_quantity' => [
        'enabled' => true,
        'minimum' => 1,
        'maximum' => 99,
      ],
  ]],
  ],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);