<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dine IN</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <link rel="shortcut icon" href="/images/favicon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/images/favicon/favicon.ico" type="image/x-icon">

        <!-- <script src="https://js.stripe.com/v3/"></script> -->
    </head>
    <body>
        <div id="app">
            <main-app />
        </div>

        <!--<form action="/api/payment" method="POST">
            <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_pLDgCkVxa7mMZOr3OyXJl7Hw00TN14cyyG"
                data-amount="1000"
                data-name="Test User"
                data-description="Test Charge"
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                data-locale="auto"
                data-currency="cad">
            </script>
        </form>-->


        <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.2.0/dist/simpleParallax.min.js"></script>
        <script src="{{asset('js/app.js')}}"></script>        
    </body>
</html>
