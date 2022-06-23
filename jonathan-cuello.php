<?php
    $cant_self = (integer) count(explode('/', $_SERVER['PHP_SELF'])); 
    $php_self = (explode('/', $_SERVER['PHP_SELF'])); 
    if($_SERVER["HTTP_HOST"] === "localhost") {
        $index = 'index';
        if($cant_self === 5){
            $fix = "../../";
            $actual = $php_self[4];
            $cant_n = $cant_self-2;
        }
        if($cant_self === 4){ 
            $fix = "../";
            $actual = $php_self[3];
            $cant_n = $cant_self-2;
        } 
        if($cant_self === 3){ 
            $fix = "";
            $actual = $php_self[2];
            $cant_n = $cant_self-2;
        }  
    } else {
        $index = '/';
        if($cant_self === 4){
            $fix = "../../";
            $actual = $php_self[3];
            $cant_n = $cant_self-1;
            $index = '';
        }
        if($cant_self === 3){ 
            $fix = "../";
            $actual = $php_self[2];
            $cant_n = $cant_self-1;
            $index = '';
        }
        if($cant_self === 2){ 
            $fix = "";
            $actual = $php_self[1];
            $cant_n = $cant_self-1;
        } 
    }
    if($_SERVER['HTTP_HOST'] === "localhost") {
        $raiz_url = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/"."lienzo"; /// para el localhost 
    } else {
        $raiz_url = $_SERVER["REQUEST_SCHEME"]."://goldenmonkeyss.com"; /// para el servidor 
    }
    $page_actual = explode("/", (explode(".php", $_SERVER["PHP_SELF"])[0])); 
    $cant_p = count($page_actual)-($cant_n);
    $donde_estoy = $page_actual[$cant_p];
    $donde_estoy = ($donde_estoy=='index'?'':$donde_estoy);
    // echo '<pre>'; 
    // echo var_dump($datos_stdo);
    // echo '</pre>'; 
    include $fix.'templates/desc_titles.php';

    if($donde_estoy === 'nft'){
        $canocical = $raiz_url.'/'.$donde_estoy.'/?'.$_SERVER["QUERY_STRING"]; 
    }else{
        $canocical = $raiz_url.'/'.$donde_estoy;
    }
    $navs = '

    ';
    // col-md-2   col-lg-2
    $search = '

    ';
    $wallet = '

    ';
    $img_logo = '<img class="logo_nftl" src="'.$fix.'img/logos/jonathan-cuello.png" alt="jonathan-cuello logo">';
?> 
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
        <meta name="Language" content="es">
        <title>Artista Jonathan Cuello</title>
        <meta name="description" content="Arbol de Enlaces de Jonathan Cuello Artista NFT">
        <meta name="author" content="GoldenMonkeyss Technologies">
        <meta name="reply-to" content="administrator@goldenmonkeyss.com">
        <link rev="made" href="mailto:administrator@goldenmonkeyss.com">
        <meta name="copyright" content="goldenmonkeyss.com"> 
        <meta name="revisit-after" content="1 day">
        <link rel="canonical" href="https://goldenmonkeyss.com/jonathan-cuello">
        <meta name="robots" content="all">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="facebook-domain-verification" content="rtrjz0296j9xq4mfrgdjuv2sklvmxy" />

        <link rel="stylesheet" href="<?php echo $fix;?>css/bootstrap/bootstrap.min.css" >
        <link rel="stylesheet" href="<?php echo $fix;?>css/bootstrap/footers.css" >
        <link rel="stylesheet" href="<?php echo $fix;?>css/main.p_4.css">
        <link rel="stylesheet" href="<?php echo $fix;?>css/colors.css">
        
        <!-- INICIO Twitter Card data --> 
        <meta name="twitter:site" content="@NFTLegacies">
        <meta name="twitter:title" content="Artista Jonathan Cuello">
        <meta name="twitter:description" content="Arbol de Enlaces de Jonathan Cuello Artista NFT">
        <meta name="twitter:creator" content="@NFTLegacies">
        <meta name="twitter:image" content="<?php echo $raiz_url; ?>/img/seo/jonathan-cuello-600-600.png">
        <!-- FIN Twitter Card data --> 

        <!-- INICIO Open Graph data -->
        <meta property="og:title" content="Artista Jonathan Cuello">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://goldenmonkeyss.com/jonathan-cuello">  
        
        <meta property="og:image" content="<?php echo $raiz_url; ?>/img/seo/jonathan-cuello-600-600.png"> 
        <meta property="og:image:width" content="600">
        <meta property="og:image:height" content="600">   
        
        <meta property="og:image:type" content="image/png">   
        <meta property="og:image:alt" content="Jonathan Cuello Artista NFT"> 
        <meta property="og:description" content="Arbol de Enlaces de Jonathan Cuello Artista NFT">
        <meta property="og:site_name" content="GoldenMonkeyss">
        <!-- FIN Open Graph data --> 

        <!-- INICIO fav icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $fix; ?>img/logos_conf/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $fix; ?>img/logos_conf/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $fix; ?>img/logos_conf/favicon-16x16.png">
        <link rel="manifest" href="<?php echo $fix; ?>/site.webmanifest">
        <link rel="mask-icon" href="<?php echo $fix; ?>img/logos_conf/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="apple-mobile-web-app-title" content="GoldenMonkeyss">
        <meta name="application-name" content="GoldenMonkeyss">
        <meta name="msapplication-TileColor" content="#65a3ff">
        <meta name="theme-color" content="#65a3ff">
        <!-- FIN fav icons -->

        <style>
            .btn-discord a { 
                text-transform: initial!important; 
                color: #ffffff;  
                font-weight: 600; 
                font-size: 20px;
            }
            .btn-discord {
                border: 2px solid #5a4401;
                background: linear-gradient(to right, #7c5e04, 60%, #ad8704); 
                transition: all 0.25s;
            }
            .btn-discord:hover {
                box-shadow: 0 0 6px 4px #917204;
            }
            .logo_nftl { 
                max-width: 200px; 
            }
        </style>

    </head>
    <body>
        <!-- header  -->
        <header class="p-3 bg-dark text-white">

            <nav id="nav_ppal" class="navbar navbar-dark bg-gradient fixed-top" style="background: black;">
                <!-- Estatica   col-12 col-lg-auto me-lg-auto  --> 
                <div id="nav_stic" class="container-fluid justify-content-evenly">
                    <a class="navbar-brand col-12 text-center me-0" href="/"><?php echo $img_logo?></a> 
                    <ul class="nav mb-2 col-xl-6 col-5 justify-content-evenly mb-md-0">
                        <?php echo $navs;?>
                    </ul>
                </div>

                <!-- Aqui empieza el boton de responsive -->
                <div id="nav_resp" class="flex-column">
                    <div class="d-flex justify-content-evenly pb-1 gap-2">
                        <a class="navbar-brand text-center me-0" href="/"><?php echo $img_logo?></a> 
                    </div> 
                </div>
            </nav> 

        </header>

        <div class="b-example-divider mt-3"></div>

        <!-- Join Home  -->
        <button type="button" class="btn btn-discord btn-lg d-flex"><a href="https://goldenmonkeyss.com/" target="_blank">Home Page</a></button>

        <div class="b-example-divider"></div>

        <!-- Join Opensea  -->
        <button type="button" class="btn btn-discord btn-lg d-flex"><a href="https://opensea.io/nftlegacies" target="_blank"><img style="width: 30px;" src="<?php echo $fix;?>img/redes/opensea.svg" alt="Opensea"> Opensea.oi</a></button>
        
        <div class="b-example-divider"></div>

        <!-- Join Rarible  -->
        <button type="button" class="btn btn-discord btn-lg d-flex"><a href="https://rarible.com/user/0x7f2edafb5fbb7aeaeb9b182395889493895bf528" target="_blank"><img style="width: 30px;" src="<?php echo $fix;?>img/redes/rarible.svg" alt="Rarible"> Rarible.com</a></button>

        <div class="b-example-divider"></div>

        <!-- Join Oncyber  -->
        <button type="button" class="btn btn-discord btn-lg d-flex"><a href="https://oncyber.io/@nftlegacies" target="_blank"><img style="width: 30px;" src="<?php echo $fix;?>img/redes/oncyber.png" alt="Oncyber"> Oncyber.io</a></button>

        <div class="b-example-divider"></div>

        <!-- Join Tiwtter  -->
        <button type="button" class="btn btn-discord btn-lg d-flex"><a href="https://twitter.com/nftlegacies" target="_blank"><img style="width: 30px;" src="<?php echo $fix;?>img/redes/twitter.svg" alt="Twitter"> Tiwtter</a></button>
                    
        <div class="b-example-divider"></div> 

        <!-- Join Discord  -->
        <button type="button" class="btn btn-discord btn-lg d-flex"><a href="https://discord.com/invite/qygJAEKr" target="_blank"><img style="width: 30px;" src="<?php echo $fix;?>img/redes/discord.svg" alt="Discord"> Discord</a></button>
                    
        <div class="b-example-divider"></div> 

        <div class="container">
        
        </div>

        <script src="<?php echo $fix;?>js/jquery.min.js"></script>
        <script src="<?php echo $fix;?>js/bootstrap/bootstrap.bundle.min.js"></script>
    </body>
</html>