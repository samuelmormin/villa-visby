<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>Title</title>
    <!--    <link rel="stylesheet" href="src/css/reset.css">-->
    <link rel="stylesheet" href="src/css/style.css">
</head>

<body>
    <div class="container">
        <form action="payment.php" method="post" id="payment_form">
            <span class="payment_errors"></span>
        <div form-row>
           <div class="card-element">
            <div class="row">
                <input type="text" name="name" required placeholder="Your name" value="Kyle hzn">
            </div>

            <div class="row">
                <input type="email" name="email" required placeholder="votre@email.com" value="kyle.hazan@gmail.com">
            </div>
            
            <div class="row">
                <input type="text" placeholder="Credit card number" value="4242424242424242" data-stripe="number">
            </div>
            
            <div class="row">
                <input type="text" placeholder="MM" value="10" data-stripe="exp_month">
            </div>
            
            <div class="row">
                <input type="text" placeholder="YY" value="18" data-stripe="exp_year">
            </div>
            
            <div class="row">
                <input type="text" placeholder="CVC" value="134">
            </div>
            </div>
            </div>
            <p>
                <button type="submit">Buy</button>
            </p>
        </form>
    </div>
    
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        Stripe.setPublishableKey('pk_test_38JBUpKwc5k2bBQOeQD3DjH7')
        var $form = $('#payment_form')
        $form.submit(function (e){
            e.preventDefault()
            $form.find('.button').attr('disabled', true)
            Stripe.card.createToken($form, function (status, response){
               if (response.error) {
                   $form.find('.message').remove();
                   $form.prepend('<div class="negative_message"><p>' + response.error.message + '</p></div>')
               } else {
                   var token = response.id
                   $form.append($('<input type="hidden" name="stripeToken">').val(token))
                   $form.get(0).submit()
               }
            })
        })
    </script>
</body>

</html>