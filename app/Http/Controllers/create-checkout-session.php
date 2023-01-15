<?php

use vendor\autoload;

// This is a public sample test API key.
// Don’t submit any personally identifiable information in requests made with this key.
// Sign in to see your own test API key embedded in code samples.
\Stripe\Stripe::setApiKey('sk_test_QUXcoU3BnbZXp6IMVi7BkW8s');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://127.0.0.1:8000';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[ // Define o produto a vender
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => '{{PRICE_ID}}',
    'quantity' => 1,
  ]],
  'mode' => 'payment', // Forma de pagamento
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);