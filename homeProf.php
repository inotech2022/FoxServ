<?php 
 include_once('config.php');
 session_start();
 
$email = $_SESSION['email'];

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
    exit(); 
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="icon" href="logo/lilas-2.PNG">
    <script src="modo_escuro.js" defer></script>
    <script src="faq.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Home</title>
</head>

<body>
<!-- cabeçalho -->
<nav class="nav">
    <div class="container">
        <div class="logo-header">
            <img src="logo/foxserv-branco.PNG" class="img_logo">
            <h1 class="logo"><a class="logo"href="homeProf.php"> Fox<span class="foxserv">Serv</span></a></h1>
        </div>
        
<?php
            $sql = "SELECT * FROM usuario WHERE email = '$email'";
             if($resultado=mysqli_query ($conexao, $sql)){
                $nome = array(); 
                $fotoPerfil = array();
                $i = 0;

                while ($registro=mysqli_fetch_assoc($resultado)) {
                    $nome[$i] = $registro['nome'];
                    $fotoPerfil[$i] = $registro['fotoPerfil'];
            ?>
        <ul>
            <div class="dropdown">
                
                <ul>

                    <div class="menu"><img class="foto_menu" src="upload/<?php echo $fotoPerfil[$i]; ?>"> Olá, <?php echo $nome[$i]; ?> <span
                            class="material-symbols-outlined">
                            expand_more
                        </span> </div>
                    <div class="dropdown-content-prof">
                        <ul>
                            <li onclick="document.location='FeedProf.php'"><img class="foto_menu" src="image/foto_instagram.jpg">Meu
                                Perfil</li>

                            <li onclick="document.location='homeProf.php'"><span class="material-symbols-outlined">
                                    home
                                </span>Home</li>
                            <li onclick="document.location='contratos.php'"><span class="material-symbols-outlined">
                                    description
                                </span>Meus Contratos</li>
                            <li><span class="material-symbols-outlined">
                                    notifications
                                </span>Notificações
                                <ul>
                                    <li><span class="material-symbols-outlined">
                                            favorite
                                        </span> Curtiu sua Publicação </li>
                                    <hr>
                                    <li> <span class="material-symbols-outlined">
                                            star
                                        </span>Avaliou seu serviço </li>
                                    <hr>
                                    <li><span class="material-symbols-outlined">
                                            favorite
                                        </span> Curtiu sua Publicação </li>
                                    <hr>
                                    <li> <span class="material-symbols-outlined">
                                            star
                                        </span>Avaliou seu serviço </li>
                                    <hr>
                                    <li><span class="material-symbols-outlined">
                                            favorite
                                        </span> Curtiu sua Publicação </li>
                                    <hr>
                                    <li> <span class="material-symbols-outlined">
                                            star
                                        </span>Avaliou seu serviço </li>
                                    


                                </ul>
                            </li>
                            <a class="sair" href="sair.php"><span class="material-symbols-outlined">
                                logout
                            </span>Sair</a>
                        </ul>
                    </div>
                </ul>
            </div>
            <?php 
                     $i++;
                }
            }
            
        ?>
            <div>
                <input type="checkbox" name="change-theme" id="change-theme" />
                <label for="change-theme">
                    <i class="bi bi-sun"></i>
                    <i class="bi bi-moon"></i></label>
            </div>
        </ul>
    </div>
</nav>

    <main>
        
        <div class="inicio">
            <div class="inicio-left">
                <h1 class="frase"> Cadastre seus serviços </br> e descubra novas formas </br> de conexão </h1>
                <p>Analise as categorias disponíveis</p>
                <div class="pesquisa">
                    <input type="text" placeholder="Buscar serviço...">
                    <button><span class="material-symbols-outlined">
                        search
                        </span></button>
                </div>
            </div>
            <div class="inicio-right">
                <img class="animated" id="img-right-modoClaro" src="image/home-modoClaro.svg">
            <img class="animated" id="img-right-modoEscuro" src="image/home-modoEscuro.svg">
            </div>
        </div>

        <div class="servicos">
            <div class="categorias">
                <h2>Nossos serviços</h2>
                <div class="cards">
                    <div class="card">
                        <div class="icon">
                            <img class="img_icon-modoClaro " src="image/familia-modoClaro.png">
                            <img class="img_icon-modoEscuro " src="image/familia-modoEscuro.png">
                        </div>
                        <h3>Família</h3>
                        <div class="acessar">
                            <a href="servicos.php?tipoServico=1"> Acessar </a><span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img class="img_icon-modoClaro " src="image/educacao-modoClaro.png">
                            <img class="img_icon-modoEscuro " src="image/educacao-modoEscuro.png">
                        </div>
                        <h3>Educação</h3>
                        <div class="acessar">
                            <a href="servicos.php?tipoServico=2"> Acessar </a><span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img class="img_icon-modoClaro " src="image/tecnologia-modoClaro.png">
                            <img class="img_icon-modoEscuro " src="image/tecnologia-modoEscuro.png">
                        </div>
                        <h3>Tecnologia</h3>
                        <div class="acessar">
                            <a href="servicos.php?tipoServico=3"> Acessar </a><span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img class="img_icon-modoClaro " src="image/reparos-modoClaro.png">
                            <img class="img_icon-modoEscuro " src="image/reparos-modoEscuro.png">
                        </div>
                        <h3>Reparos</h3>
                        <div class="acessar">
                            <a href="servicos.php?tipoServico=4"> Acessar </a><span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img class="img_icon-modoClaro " src="image/assTec-modoClaro.png">
                            <img class="img_icon-modoEscuro " src="image/assTec-modoEscuro.png">
                        </div>
                        <h3>Ass. Técnica</h3>
                        <div class="acessar">
                            <a href="servicos.php?tipoServico=5"> Acessar </a> <span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img class="img_icon-modoClaro " src="image/moda-modoClaro.png">
                            <img class="img_icon-modoEscuro " src="image/moda-modoEscuro.png">
                        </div>
                        <h3>Moda</h3>
                        <div class="acessar">
                            <a href="servicos.php?tipoServico=6"> Acessar </a> <span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img class="img_icon-modoClaro " src="image/saude-modoClaro.png">
                            <img class="img_icon-modoEscuro " src="image/saude-modoEscuro.png">
                        </div>
                        <h3>Saúde</h3>
                        <div class="acessar">
                            <a href="servicos.php?tipoServico=7"> Acessar </a><span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img class="img_icon-modoClaro " src="image/artesanato-modoClaro.png">
                            <img class="img_icon-modoEscuro " src="image/artesanato-modoEscuro.png">
                        </div>
                        <h3>Artesanato</h3>
                        <div class="acessar">
                            <a href="servicos.php?tipoServico=8"> Acessar </a><span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img class="img_icon-modoClaro " src="image/beleza-modoClaro.png">
                            <img class="img_icon-modoEscuro " src="image/beleza-modoEscuro.png">
                        </div>
                        <h3>Beleza</h3>
                        <div class="acessar">
                            <a href="servicos.php?tipoServico=9"> Acessar </a><span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img class="img_icon-modoClaro " src="image/eventos-modoClaro.png">
                            <img class="img_icon-modoEscuro " src="image/eventos-modoEscuro.png">
                        </div>
                        <h3>Eventos</h3>
                        <div class="acessar">
                            <a href="servicos.php?tipoServico=10"> Acessar </a><span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </div>
                    </div>
                </div>
                <form class="sugestao" action="home.php" method="POST" enctype="multipart/form-data">
                    <p>Não encontrou o serviço que está procurando?</p>
                    <input type="text" class="sugestao" id="sugestao" name="sugestao" placeholder="Deixe aqui a sua sugestão...">
                    <input type="submit" class="submit" name="submit" value=">"></input>
                </form>
            </div>
           
           <?php
            
            if (isset($_POST['submit'])) {
                    
                    $sugestao = $_POST['sugestao'];
            
                    $result_sugestao = mysqli_query($conexao,"INSERT INTO sugestao(sugestao) 
                           VALUES ('$sugestao')");
            
            }
            ?>
        </div>
            <div class="avaliacoes">
                <h2>O que estão falando sobre nossos profissionais:</h2>
                <div class="avaliacao">
                    <div class="left-img">
                        <img src="image/comentarios-modoClaro.png" class="img-avaliacao-modoClaro">
                        <img src="image/comentario-modoEscuro.png" class="img-avaliacao-ModoEscuro">
                    </div>
                    <div class="right-av">
                        <div class="cards">
                            <div class="card-av">
                                <div class="av-header">
                                    <div class="header-img">
                                        <img src="image/foto_instagram.jpg" class="image-header">
                                    </div>
                                    <div class="header-info">
                                        <h4>Nome do Cliente </h4>
                                        <p>00/00/0000</p>
                                    </div>
                                    <div class="aspas">
                                        <span class="material-symbols-outlined">
                                            format_quote
                                            </span>
                                    </div>
                                </div>
                                <div class="estrela">
                                    <ul class="estrela-av">
                                        <li class="star-icon" data-avaliacao="1"></li>
                                        <li class="star-icon" data-avaliacao="2"></li>
                                        <li class="star-icon" data-avaliacao="3"></li>
                                        <li class="star-icon" data-avaliacao="4"></li>
                                        <li class="star-icon ativo" data-avaliacao="5"></li>
                                    </ul>
                                </div>
                                <div class="comentario">
                                    <p>comentáriocomentáriocomentário 
                                        comentáriocomentáriocomentário 
                                        comentáriocomentáriocomentário 
                                        comentáriocomentáriocomentário</p>
                                </div>
                            </div>
                            <div class="card-av">
                                <div class="av-header">
                                    <div class="header-img">
                                        <img src="image/foto_instagram.jpg" class="image-header">
                                    </div>
                                    <div class="header-info">
                                        <h4>Nome do Cliente </h4>
                                        <p>00/00/0000</p>
                                    </div>
                                    <div class="aspas">
                                        <span class="material-symbols-outlined">
                                            format_quote
                                            </span>
                                    </div>
                                </div>
                                <div class="estrela">
                                    <ul class="estrela-av">
                                        <li class="star-icon" data-avaliacao="1"></li>
                                        <li class="star-icon" data-avaliacao="2"></li>
                                        <li class="star-icon" data-avaliacao="3"></li>
                                        <li class="star-icon" data-avaliacao="4"></li>
                                        <li class="star-icon ativo" data-avaliacao="5"></li>
                                    </ul>
                                </div>
                                <div class="comentario">
                                    <p>comentáriocomentáriocomentário 
                                        comentáriocomentáriocomentário 
                                        comentáriocomentáriocomentário 
                                        comentáriocomentáriocomentário</p>
                                </div>
                            </div>
                            <div class="card-av">
                                <div class="av-header">
                                    <div class="header-img">
                                        <img src="image/foto_instagram.jpg" class="image-header">
                                    </div>
                                    <div class="header-info">
                                        <h4>Nome do Cliente </h4>
                                        <p>00/00/0000</p>
                                    </div>
                                    <div class="aspas">
                                        <span class="material-symbols-outlined">
                                            format_quote
                                            </span>
                                    </div>
                                </div>
                                <div class="estrela">
                                    <ul class="estrela-av">
                                        <li class="star-icon" data-avaliacao="1"></li>
                                        <li class="star-icon" data-avaliacao="2"></li>
                                        <li class="star-icon" data-avaliacao="3"></li>
                                        <li class="star-icon" data-avaliacao="4"></li>
                                        <li class="star-icon ativo" data-avaliacao="5"></li>
                                    </ul>
                                </div>
                                <div class="comentario">
                                    <p>comentáriocomentáriocomentário 
                                        comentáriocomentáriocomentário 
                                        comentáriocomentáriocomentário 
                                        comentáriocomentáriocomentário</p>
                                </div>
                            </div>
                            <div class="card-av">
                                <div class="av-header">
                                    <div class="header-img">
                                        <img src="image/foto_instagram.jpg" class="image-header">
                                    </div>
                                    <div class="header-info">
                                        <h4>Nome do Cliente </h4>
                                        <p>00/00/0000</p>
                                    </div>
                                    <div class="aspas">
                                        <span class="material-symbols-outlined">
                                            format_quote
                                            </span>
                                    </div>
                                </div>
                                <div class="estrela">
                                    <ul class="estrela-av">
                                        <li class="star-icon" data-avaliacao="1"></li>
                                        <li class="star-icon" data-avaliacao="2"></li>
                                        <li class="star-icon" data-avaliacao="3"></li>
                                        <li class="star-icon" data-avaliacao="4"></li>
                                        <li class="star-icon ativo" data-avaliacao="5"></li>
                                    </ul>
                                </div>
                                <div class="comentario">
                                    <p>comentáriocomentáriocomentário 
                                        comentáriocomentáriocomentário 
                                        comentáriocomentáriocomentário 
                                        comentáriocomentáriocomentário</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="faq">
                <div class="faq-card">
                    <h3> Perguntas Frequentes (FAQ)</h3>
                    <div class="perguntas">
                        <div class="pergunta-resposta">
                            <div class="pergunta">
                                <p>A plataforma é responsável pelos orçamentos?</p>
                                <span class="material-symbols-outlined">
                                    add
                                </span>
                            </div>
                            <div class="resposta">
                                <p>Não, o orçamento é feito diretamente com o cliente. Sendo assim, vocês podem decidir valores, datas, local, etc.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="pergunta-resposta">
                            <div class="pergunta">
                                <p>como faço para receber avaliações?</p>
                                <span class="material-symbols-outlined">
                                    add
                                </span>
                            </div>
                            <div class="resposta">
                                <p>As avaliações são feitas através dos contratos que você registra com o cliente, após gerado, não esqueça de solicitar que ele avalie seu serviço!</p>
                            </div>
                        </div>
                        <hr>
                        <div class="pergunta-resposta">
                            <div class="pergunta">
                                <p>Posso contratar profissionais também?</p>
                                <span class="material-symbols-outlined">
                                    add
                                </span>
                            </div>
                            <div class="resposta">
                                <p> Sim, mesmo sendo profissional na plataforma, você pode usufruir dos benefícios como usuário e contratar outros profissionais.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="pergunta-resposta">
                            <div class="pergunta">
                                <p>Posso alterar os serviços que eu presto?</p>
                                <span class="material-symbols-outlined">
                                    add
                                </span>
                            </div>
                            <div class="resposta">
                                <p> Sim, através da aba "<a class="link_resposta" href="editarDados.html">Editar Perfil</a>" você pode adicionar ou alterar os seus serviços.</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
    </main>

</body>
<!-- rodapé -->
<footer class="footer">
    <div class="footer_left">
        <div class="footer__links">
            <a class="footer__link" href="https://www.instagram.com/inotech_ds/" target="__blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class=" bi-instagram"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>
                @inotech_ds
            </a>
            <a class="footer__link" href="mailto:tccinotec@gmail.com" target="__blank">
                <span class="material-symbols-outlined"> mail </span>
                tccinotec@gmail.com
            </a>
        </div>
    </div>


    <div class="footer_center">
        <div onclick="document.location='homeProf.php'" class="footer__image">

            <img src="logo/foxserv-branco.PNG" alt="FoxServ" class="footer_image">

            <div class="logo-header">
                <h1 class="logo"><a href="homeProf.php"> Fox<span class="foxserv">Serv</span></a></h1>
            </div>
        </div>
        <div class="bottom">Criado por INOTECH </div>
        <div class="copyright_png"><span class="copyright">
                copyright </span>
            2023 Todos os direitos reservados</div>
    </div>
    </div>
    <div class="footer_right">
        <div class="footer__links_right">
            <a class="footer__link" href="mailto:tccinotec@gmail.com" target="__blank">
                <span class="material-symbols-outlined"> help </span>
                Precisa de Ajuda?
            </a>
        </div>
    </div>

</footer>

</html>