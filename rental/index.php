<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="homes.css">
    </head>
    <body>
        <div class="nav-bar">
            <div class="logo">HRental.</div>
            <ul class="list">
                <li ><a href="#">Home</a></li>
                <li ><a href="#">About Us</a></li>
                <li ><a href="#">Contact Us </a></li>
                <li ><a href="register.php">Register</a></li>
                <li ><a href="login.php">Login</a></li>
                <li></li>
            </ul>
        </div>

        <div class="search">
            <form action="search.php">
            <select name="subcity">
                <option value="">Sub city</option>
                <option value="bole">Bole</option>
                <option value="arada">Arada</option>
                <option value="ledeta">Ledeta</option>
                <option value="kolfe">Kolfe</option>
            </select>
            <select name="hometype">
                <option value="vila">vila</option>
                <option value="vila">penthouse</option>
                <option value="vila">Apartment</option>
                <option value="vila">Condominium</option>
            </select>
            <input type="number" name="city" placeholder="Squ. meter">
            <input type="number" name="city" placeholder="Number of room">
            <input type="submit" name="search" value="search">
            </form>
           
        </div>
        
        <div class="slider">
            <input type="radio" class="radio" name="radio" id="radio1" checked>
            <input type="radio" class="radio" name="radio" id="radio2">
            <input type="radio" class="radio" name="radio" id="radio3">
            <input type="radio" class="radio" name="radio" id="radio4">

            <div class="slide bg1">
                <div class="text"></div>
            </div>
            <div class="slide bg2">
                <div class="text"></div>
            </div>
            <div class="slide bg3">
                <div class="text"></div>
            </div>
            <div class="slide bg4">
                <div class="text"></div>
            </div>

            <div class="navigation">
                <div class="auto1"></div>
                <div class="auto2"></div>
                <div class="auto3"></div>
                <div class="auto4"></div>
            </div>
        </div>
        <div class="citysearch">
            <h2>Search by Sub City</h2>
            <a href="#">Bole</a>
            <a href="#">Kolfe</a>
            <a href="#">Arada</a>
            <a href="#">Ledeta</a>
        </div>


        <script type="text/javascript">
            var counter = 1;
            setInterval(function(){
                document.getElementById('radio' + counter).checked=true;
                counter++;
                if(counter > 4){
                    counter=1;
                }
            },4000);
        </script>
    </body>
</html>