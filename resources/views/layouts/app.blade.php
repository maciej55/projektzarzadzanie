<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8"/>      
        
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{ URL::asset('css/wlasnycss.css') }} " rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
    <body>  
        <div id="motywid">
   
       @auth
       <a class="klasaa" href="/logout">Wyloguj</a>
       @endauth
       <a class="klasaa" href="/kontakt">Kontakt</a>
       <a class="klasaa" href="/galeria">Galeria</a> 
       <a class="klasaa" href="/klient">Klient</a> 
       <a class="klasaa" href="/zamowienia">Zamowienia</a>
       <a class="klasaa" href="/dodawanie">Towary</a>
       <a class="klasaa" href="/wydarzenia">Wydarzenia</a>  
       <a class="klasaa" href="/">Strona Główna</a>  
       <br><br>
       <div >
           Wybierz motyw:
           <form name="nazwa">
       <select class="mselect" name="motyw"  onchange="Zmiana()">
           <option>jasny</option>
           <option>ciemny</option>
       </select>
    </form>
       
       


       
<div id="app">
        <div class="container">
              @yield('content') 
        </div>
       
      
</div>
</div>
</div>
        <script src="js/app.js"></script>
        <script type="text/javascript">
        function Zmiana() {
        if(nazwa.motyw.value === "ciemny"){
        document.body.style.backgroundColor = "black";
        document.body.style.color = "white";
        }
        else
        {
        document.body.style.backgroundColor = "white";
        document.body.style.color = "black";
        }
        
         
         
        }
             
        </script>
    </body>
</html>

