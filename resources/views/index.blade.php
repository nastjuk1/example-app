
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
            <a class="navbar-brand" href="/">ViAn veikals</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="{{ route('index') }}">Visas preces</a></li>
                <li class="active"><a href="{{ route('categories') }}">Kategorijas</a>
                </li>
                <li ><a href="{{ route('basket') }}">Grozs</a></li>
                <li><a href="/reset">Atiestatīt projektu sākotnējā stāvoklī</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                                    <li><a href="/login">Pieslēgties</a></li>
                
            </ul>
            <ul class="nav navbar-nav navbar-right">
                                    <li><a href="{{ route('register') }}">Reģistrēties</a></li>
                
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="starter-template">
                            <h1>Visas preces</h1>
    <form method="GET" action="http://internet-shop.tmweb.ru">
        <div class="filters row">
            <div class="col-sm-6 col-md-3">
                <label for="price_from">Цена от                    <input type="text" name="price_from" id="price_from" size="6" value="">
                </label>
                <label for="price_to">до                    <input type="text" name="price_to" id="price_to" size="6"  value="">
                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="hit">
                    <input type="checkbox" name="hit" id="hit" > Хит                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="new">
                    <input type="checkbox" name="new" id="new" > Новинка                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="recommend">
                    <input type="checkbox" name="recommend" id="recommend" > Рекомендуем                </label>
            </div>
            <div class="col-sm-6 col-md-3">
                <button type="submit" class="btn btn-primary">Фильтр</button>
                <a href="http://internet-shop.tmweb.ru" class="btn btn-warning">Сброс</a>
            </div>
        </div>
    </form>
<div class ="row">
    @foreach($products as $product)
    @include('card', compact('product'))
    @endforeach
</div>
</div>
</div>
</body>
</html>