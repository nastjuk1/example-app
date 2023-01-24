
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
                <li ><a href="/">Visas preces</a></li>
                <li class="active"><a href="/categories">Kategorijas</a>
                </li>
                <li ><a href="/basket">Pievienot grozam</a></li>
                <li><a href="/reset">Atiestatīt projektu sākotnējā stāvoklī</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                                    <li><a href="{{ route('register') }}">Pieslēgties</a></li>
                
                            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="starter-template">
    <h1>
    {{$category->name}}
</h1>
<p>
    {{ $category->description}}
</p>
<div class="row">
    @foreach($category->products as $product)
    @include('card', compact('product'))
    @endforeach
</div>
</div>
</div>
</body>
</html>