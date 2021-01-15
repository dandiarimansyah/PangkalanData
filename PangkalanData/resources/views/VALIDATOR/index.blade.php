<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <!-- <title>Responsive Drop-down Menu Bar</title> -->
        <link rel="stylesheet" href="style3.css">
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <nav>
            <div class="logo">
                Pangkalan Data
            </div>
            <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
            </label>
            
            <input type="checkbox" id="btn">
            <ul>
                <li><a href="#">BERANDA</a></li>
                
                <li><a href="#">VALIDASI</a></li>
                
                <li><a href="#">MEDIA</a></li>

                <li><a href="#">LAPORAN</a></li>

                <li><a href="#">GRAFIK</a></li>

                <li><a href="#">FORUM</a></li>

                <li class="logout" ><a href="#">KELUAR</a></li>
               
                <!--  -->
<!-- 
                <li>
                <label for="btn-1" class="show">Features +</label>
                <a href="#">Features</a>
                <input type="checkbox" id="btn-1">
                <ul>
                    <li><a href="#">Pages</a></li>
                    <li><a href="#">Elements</a></li>
                    <li><a href="#">Icons</a></li>
                </ul>
                </li> -->

                <!--  -->

                <!-- <li>
                <label for="btn-2" class="show">Services +</label>
                <a href="#">OPERATOR</a>
                <input type="checkbox" id="btn-2">
                    <ul>
                        <li><a href="#">KELUAR</a></li>
                        </li>
                    </ul>
                </li> -->

                <!--  -->

                <!-- <li><a href="#">Portfolio</a></li>
                
                <!--  -->

                <!-- <li><a href="#">Contact</a></li> --> 
            </ul>
        </nav>
        <div class="content">
            <header>Responsive Drop-down Menu Bar</header>
            <p>HTML and CSS (Media Query)</p>
        </div>
        <script>
            $('.icon').click(function(){
            $('span').toggleClass("cancel");
            });
        </script>
    </body>
</html>
