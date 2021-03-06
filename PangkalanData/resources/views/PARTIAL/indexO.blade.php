<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('stylecss/oindex.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
                <li><a href="/operator/input">INPUT</a></li>    
                <li><a href="/operator/edit">EDIT</a></li>    
                <li><a href="/media">MEDIA</a></li>
                <li><a href="/laporan">LAPORAN</a></li>
                <li><a href="/grafik">GRAFIK</a></li>
                <li><a href="/forum">FORUM</a></li>
                <li><a href="/logout" class="logout">KELUAR</a></li>
            </ul>
        </nav>

        <div style="min-height: 80vh; margin:0">
            @yield('content')
        </div>

        <div class="footer">
            <h5>Kantor Balai Bahasa Provinsi Jawa Tengah</h5>
            <h5>Jalan Elang Raya No.1, Mangunharjo, Tembalang, Sendangmulyo, Tembalang, Kota Semarang, Jawa Tengah 50272</h5>
            <h5>Pos-el: balaibahasa.jateng@kemdikbud.go.id</h5>
        </div>
        
        <script>
            $('.icon').click(function(){
            $('span').toggleClass("cancel");
            });
        </script>
    </body>
</html>
