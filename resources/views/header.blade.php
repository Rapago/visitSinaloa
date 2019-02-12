@section('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Visit Sinaloa!</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
</head>
<body>
    <header>
        <a href="/"><img class="logo-menu" src="{{asset('img/logo-gob.png')}}" alt="logo-menu"></a>     
        <ul class="nav list-menu">  
            <li class="nav-item">
                <a class="nav-link" href="#">Destinos Turísticos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Atractivos Turístico</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Festivales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Directorio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">EN</a>
            </li>   
            <form id="form-menu">
                <input type="search" class="input-menu">
            </form>
        </ul>
    </header>
@show