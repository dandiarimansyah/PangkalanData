<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('stylecss/vindex.css') }}">
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <nav>
            <div class="logo"> Pangkalan Data </div>
            <label for="btn" class="icon">
                <span class="fa fa-bars"></span>
            </label>
            
            <input type="checkbox" id="btn">
            <ul>
                <li><a href="#">INPUT</a></li>    
                <li><a href="#">EDIT</a></li>    
                <li><a href="#">MEDIA</a></li>
                <li><a href="#">LAPORAN</a></li>
                <li><a href="#">GRAFIK</a></li>
                <li><a href="#">FORUM</a></li>
                <li><a href="#" class="logout">KELUAR</a></li>
            </ul>
        </nav>

        <div class="content">
            <header>OPERATOR</header>
        </div>
        
        <script>
            $('.icon').click(function(){
            $('span').toggleClass("cancel");
            });
        </script>
    </body>
</html>
