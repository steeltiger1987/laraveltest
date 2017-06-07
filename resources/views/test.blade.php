<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test</title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel = "stylesheet">

</head>
<body>
    <div class="main col-md-4 col-md-offset-4 text-center">
        <form action="{{ url('/submit')}}" method="POST">
        {{ csrf_field() }}
            <p><span> Product Name </span></p>                        
            <p>
                <input name="product_name" id="product_name" type="text">
            </p>
            <p><span> Quantity </span></p>                        
            <p>                
                <input name="quantity_in_stock" id="quantity_in_stock" type="text">
            </p>
            <p><span> Price </span></p>                        
            <p>                
                <input name="price_per_item" id="price_per_item" type="text">
            </p>
            <button class="splash-get-free-btn" type="submit">SUBMIT</button>
        </form>
    </div>
</body>
</html>
