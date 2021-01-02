<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DoutrinadorSeach</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div id="loading">
        <div id="spinner"></div>
    </div>
    <div id="magnify">
        <h1 onclick="closemagnify()"><i class="fas fa-times"></i></h1>
        <div id="img_here"></div>
    </div>
    <header id="header" class="animated slideInDown" style="animation-delay:1.8s;">
        <table>
            <tr>
                <td id="logo">DoutrinadorSeach</td>
                <td id="navigation">
                    <a href="index1.php">Faça login</a>
                    <a href="#bio">Sobre</a>
                    <a href="https://t.me/doutrinadorvip">Contato</a>
                </td>
            </tr>
        </table>
    </header>
    <table id="top_part">
        <tr>
            <td id="about" class="animated slideInLeft" style="animation-delay:2s;">
                <h1>Problemas? Abra um Chamado</h1>
                <button class="btn_one" onClick = "window.location.href ='index1.php';">Leve-me</button><br>
                <table>
                    <tr>
                        <td class="animated zoomIn" style="animation-delay:2.2s;"><a class="social"><i class="fab fa-facebook"></i></a></td>
                        <td class="animated zoomIn" style="animation-delay:2.4s;"><a class="social"><i class="fab fa-twitter"></i></a></td>
                        <td class="animated zoomIn" style="animation-delay:2.6s;"><a class="social"><i class="fab fa-instagram"></i></a></td>
                        <td class="animated zoomIn" style="animation-delay:2.8s;"><a class="social"><i class="fab fa-dribbble"></i></a></td>
                        <td class="animated zoomIn" style="animation-delay:3.0s;"><a class="social"><i class="fab fa-medium"></i></a></td>
                    </tr>
                </table>
            </td>
            <td id="rightImage" class="animated jackInTheBox" style="animation-delay:2.2s;"></td>
        </tr>
    </table>
    
    <div id="bio">
        <h1>Sobre</h1>
        <p>
            Combinamos técnicas de big data, inteligência artificial e o uso de uma plataforma tecnológica de ponta
        </p>
        <p>ISO/IEC 27001 Gestão da segurança da informaçao
        <ul>
<li> Servidores na Nuvem </li>
<li> Cloud computing </li>
<li> +16 Serviços</li>

        </p>
    </div>

                    </td>
                </tr>
            </table>
    </div>
    <div id="footer">
        © 2021 Doutrinador. Todos os direitos reservados. <br>
    </div>
    <script src="index.js" type="text/javascript"></script>
</body>
</html>
