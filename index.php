<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url("perpus.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        nav {
            background-color: #77bfbd;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden; 
        }

        ul li {
            
            float: left;
        }

        ul li a {
            text-decoration: none;
            display: block;
            padding: 10px;
            text-align: center;
        }

        div {
            width: 30%;
            height: 130px;
            margin: auto;
            padding: 10px;
            margin-top: 15%;

            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        div h1 {
            text-align: center;
        }
        div h2 {
            text-align: center;
        }
    </style>
</head>
<body>

    <nav>
        <ul>
            <li><a href="navbar1/index.php">Katalog Buku</a></li>
            <li><a href="">Tentang</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>

    <div>
        <h1>Perpustakaan damanhuri</h1>
        <h2>Welcome selamat datang</h2>
    </div>

</body>
</html>