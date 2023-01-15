<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE">
    <link rel="stylesheet" href="css/style.css">
    <title>Pay Page</title>
</head>
<body>
<form action="/charge" method="post" id="payment-form">
    <div class="form-row">
        <label for="card-element">
            Credit or Debit Card
        </label>
        <div id="card-element">

        </div>

        <div id="card-error" role="alert"></div>
    </div>
    <button> Submit Payment</button>
</form>
</body>
</html>
