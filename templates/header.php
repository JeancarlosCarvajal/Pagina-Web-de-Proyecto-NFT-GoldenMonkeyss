
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
        $raiz_url = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/"."legado"; /// para el localhost 
    } else {
        $raiz_url = $_SERVER["REQUEST_SCHEME"]."://GoldenMonkeyss.com"; /// para el servidor 
    }
    $page_actual = explode("/", (explode(".php", $_SERVER["PHP_SELF"])[0])); 
    $cant_p = count($page_actual)-($cant_n);
    $donde_estoy = $page_actual[$cant_p];
    $donde_estoy = ($donde_estoy=='index'?'':$donde_estoy);

    include $fix.'templates/desc_titles.php';

    if($donde_estoy === 'nft'){
        $canocical = $raiz_url.'/'.$donde_estoy.'/?'.$_SERVER["QUERY_STRING"]; 
    }else{
        $canocical = $raiz_url.'/'.$donde_estoy;
    }
    $navs = '
        <li><a href="'.$fix.$index.'" class="nav-link px-2 '.$estoy = ($page_actual[$cant_p]=='index'?'text-secondary':'text-white').' ">Home</a></li>  
    ';
 
    $search = '
        <form class="d-flex me-3 col-lg-3 col-12">
            <input class="form-control me-2" type="number" placeholder="NFTP Token Id" aria-label="Search" style="width: -webkit-fill-available;">
            <button id="search_btn" class="btn btn-outline-success search_btn" type="submit">Search</button>
        </form>
    ';
    $img_logo = '<img class="logo_nftl" src="'.$fix.'img/logos/goldenmonkeyss.png" alt="GoldenMonkeyss logo">';
    $redes = '          
        <a href="https://opensea.io/nftlegacies" target="_blank" data-toggle="tooltip" data-animation="false" data-placement="bottom" title="" data-original-title="Twitter"><img style="width: 30px;" src="'.$fix.'img/redes/opensea.svg" alt="Opensea"></a>
        <a href="https://rarible.com/user/0x7f2edafb5fbb7aeaeb9b182395889493895bf528" target="_blank" data-toggle="tooltip" data-animation="false" data-placement="bottom" title="" data-original-title="Twitter"><img style="width: 30px;" src="'.$fix.'img/redes/rarible.svg" alt="Rarible"></a>
        <a href="https://oncyber.io/@nftlegacies" target="_blank" data-toggle="tooltip" data-animation="false" data-placement="bottom" title="" data-original-title="Twitter"><img style="width: 30px;" src="'.$fix.'img/redes/oncyber.png" alt="Oncyber"></a>
        <a href="https://discord.com/invite/qygJAEKr" target="_blank" data-toggle="tooltip" data-animation="false" data-placement="bottom" title="" data-original-title="Twitter"><img style="width: 30px;" src="'.$fix.'img/redes/discord.png" alt="discord"></a>
        <a href="https://twitter.com/nftlegacies" target="_blank" data-toggle="tooltip" data-animation="false" data-placement="bottom" title="" data-original-title="Twitter"><img style="width: 30px;" src="'.$fix.'img/redes/twitter.png" alt="Twitter"></a>
        <a href="https://www.instagram.com/nftlegacies?r=nametag" target="_blank" data-toggle="tooltip" data-animation="false" data-placement="bottom" title="" data-original-title="Instagram"><img style="width: 30px;" src="'.$fix.'img/redes/instagram.png" alt="Instagram"></a> 
    ';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
        <meta name="Language" content="en">
        <title><?php echo $titles; ?></title>
        <meta name="description" content="<?php echo $descripcion; ?>">
        <meta name="author" content="GoldenMonkeyss Technologies">
        <meta name="reply-to" content="administrator@GoldenMonkeyss.com">
        <link rev="made" href="mailto:administrator@GoldenMonkeyss.com">
        <meta name="copyright" content="GoldenMonkeyss.com"> 
        <meta name="revisit-after" content="1 day">
        <link rel="canonical" href="<?php echo $canocical; ?>">
        <meta name="robots" content="all">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 

        <link rel="stylesheet" href="<?php echo $fix;?>css/bootstrap/bootstrap.min.css" >
        <link rel="stylesheet" href="<?php echo $fix;?>css/bootstrap/footers.css" >
        <link rel="stylesheet" href="<?php echo $fix;?>css/main.p_4.css"> 
        
        <!-- INICIO Twitter Card data --> 
        <meta name="twitter:site" content="@nftlegacies">
        <meta name="twitter:title" content="<?php echo $titles; ?>">
        <meta name="twitter:description" content="<?php echo $descripcion; ?>">
        <meta name="twitter:creator" content="@nftlegacies">
        <meta name="twitter:image" content="<?php echo $raiz_url; ?>/img/seo/logo-500-500.png">
        <!-- FIN Twitter Card data --> 

        <!-- INICIO Open Graph data -->
        <meta property="og:title" content="<?php echo $titles; ?>">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://GoldenMonkeyss.com"> 
         
        
        <meta property="og:image" content="<?php echo $raiz_url; ?>/img/seo/logo-500-500.png"> 
        <meta property="og:image:width" content="500">
        <meta property="og:image:height" content="500">   
        
        <meta property="og:image:type" content="image/png">   
        <meta property="og:image:alt" content="GoldenMonkeyss Collection"> 
        <meta property="og:description" content="<?php echo $descripcion; ?>">
        <meta property="og:site_name" content="GoldenMonkeyss">
        <!-- FIN Open Graph data --> 

        <!-- INICIO fav icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $fix; ?>img/logos_conf/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $fix; ?>img/logos_conf/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $fix; ?>img/logos_conf/favicon-16x16.png">
        <link rel="manifest" href="<?php echo $raiz_url; ?>/site.webmanifest">
        <link rel="mask-icon" href="<?php echo $fix; ?>img/logos_conf/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="apple-mobile-web-app-title" content="GoldenMonkeyss">
        <meta name="application-name" content="GoldenMonkeyss">
        <meta name="msapplication-TileColor" content="#ffc40d">
        <meta name="theme-color" content="#ffffff">
        <!-- FIN fav icons -->

    </head>
    <body>
        <header class="p-3 text-white">
            <nav id="nav_ppal" class="navbar navbar-dark fixed-top">

                <!-- Estatica   col-12 col-lg-auto me-lg-auto  --> 
                <div id="nav_stic" class="container-fluid" style="backdrop-filter: blur(5px);">
                    <a class="navbar-brand col-2 text-center me-0" href="<?php echo $fix.$index?>"><?php echo $img_logo?></a>
                    <ul class="nav mb-2 col-5 justify-content-evenly mb-md-0">
                        <?php echo $navs;?>
                    </ul>
                    <div class="d-flex col-4 justify-content-around">
                        <?php echo $redes;?>
                     </div>
                </div>

                <!-- Aqui empieza el boton de responsive -->
                <div id="nav_resp" class="flex-column">
                    <div class="d-flex justify-content-around pb-1 gap-2">
                        <a class="navbar-brand text-center me-0" href="<?php echo $fix.$index?>"><?php echo $img_logo?></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><a class="navbar-brand" href="<?php echo $fix.$index?>"><?php echo $img_logo?></a></h5>
                                <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <?php echo $navs;?>
                                </ul>
                                <div class="d-flex justify-content-around pt-4">
                                    <?php echo $redes;?>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>

            </nav>
        </header>
        <div class="b-example-divider fix-banner-top"></div>
        <img id="img_banner" class="img_banner" src="" alt="Banner GoldenMonkeyss">
        <img style="box-shadow: -3px -6px 14px 0px #8c740a; height: 20px;" class="img_banner m-0" src="<?php echo $fix; ?>img/logos/gala_fina_3.png" alt="Galaxia GoldenMonkeyss">
 