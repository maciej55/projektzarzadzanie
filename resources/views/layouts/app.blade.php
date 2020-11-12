<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8"/>      
        
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{ URL::asset('css/stylecss.css') }} " rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
    <body>  
        
   
       @auth
       <a class="panel" href="/logout">Wyloguj</a>
       @endauth
       <a class="panel" href="/contact">Kontakt</a>
       <a class="panel" href="/gallery">Galeria</a> 
       <a class="panel" href="/customer">Klient</a> 
       <a class="panel" href="/order">Zamowienia</a>
       <a class="panel" href="/product">Towary</a>
       <a class="panel" href="/event">Wydarzenia</a>  
       <a class="panel" href="/">Strona Główna</a>  
       <br><br>
       <div >
           Wybierz motyw:
           <form name="themeForm">
       <select class="themeSelect" name="theme"  onchange="changeTheme()">
           <option value="light">Jasny</option>
           <option value="dark">Ciemny</option>
       </select>
    </form>
       
       


       
<div id="app">
        <div class="container">
              @yield('content') 
        </div>
       
      
</div>
</div>

        <script src="js/app.js"></script>
        <script type="text/javascript">
        function changeTheme() {
        if(themeForm.theme.value === "dark"){
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

