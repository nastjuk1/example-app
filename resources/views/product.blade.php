<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ViAn veikals</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">ViAN</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="/">Visas preces</a></li>
                <li ><a href="/categories">Kategorijas</a>
                </li>
                <li ><a href="/basket">Pievienot grozam</a></li>
                <li><a href="/reset">Atiestatīt projektu sākotnējā stāvoklī</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                                    <li><a href="/login">Pieslēgties</a></li>
                
                            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
                            <h1></h1>
                            <h2>{{ $product }}</h2>
    <p>Cena: <b>    a</b></p>
    <img src="https://cdn.tet.lv/tetveikals-prd-images/product_popup_image/products/WWEN_iPhone14ProMax_Q422_Deep-Purple_PDP-IMAGES_Position-1a.jpg">
    <p>Lielisks moderns telefons ar 128gb atmiņu</p>

            <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
            <button type="submit" class="btn btn-success" role="button">Pievienot grozam</button>

            <input type="hidden" name="_token" value="Egpfe9SqkGfBfRDBz3HDYedG5BN0m2d0sJRxeWB7">        </form>
        </div>
</div>
</body>
</html>