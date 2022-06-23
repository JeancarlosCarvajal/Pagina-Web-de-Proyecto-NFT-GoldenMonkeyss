
document.addEventListener("DOMContentLoaded", async function () {

    // INICIO todo relacionado a Creacion de Imagenes en el Lienzo
    
    let click_conect = false,
        Url_actuaal = window.location.pathname, // me da la ubicacion actual y su path
        Url_actual = Url_actuaal.split("/"), /// desglosa en una rray separado por
        currentAccount = null,
        nav_ppal = document.getElementById('nav_ppal'),
        boton_con = document.querySelectorAll('.conectar_class'),
        ubic = false, // true es mainnet y false es testnet
        cant_self = Url_actual.length;
        if(Url_actual[1] === "legado") { /// en el servidor  
            var url = 'http://localhost/legado/nft/';
            if(cant_self === 5){ /// en local es 5 
                fix = "../../"; 
            }
            if(cant_self === 4){ 
                fix = "../"; 
            } 
            if(cant_self === 3){ 
                fix = ""; 
            }  
        } else {
            var url = 'https://goldenmonkeyss.com/nft/';
            if(cant_self === 4){ /// en local es 5 
                fix = "../../"; 
            }
            if(cant_self === 3){ 
                fix = "../"; 
            } 
            if(cant_self === 2){ 
                fix = ""; 
            }
        }
    let link_meta = '<a href="https://metamask.io/" aria-current="page" target="_blank" class="brand-link w-nav-brand w--current"><img style="width: 120px;" src="'+fix+'img/otros/mm-logo.svg" width="211" alt="" class="image-3"></a>';
    if(ubic === true){
        var link_polygon_oficial = 'https://polygonscan.com/',
            link_opensea_oficial = 'https://opensea.io/assets/matic/',
            link_red_oficial = 'https://polygon-rpc.com/';
    }else{
        var link_polygon_oficial = 'https://mumbai.polygonscan.com/',
            link_opensea_oficial = 'https://testnets.opensea.io/assets/mumbai/',
            link_red_oficial = 'https://rpc-mumbai.maticvigil.com/';
    }
    /// INICIO activar tool tips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    // FIN activar tooltips

    // URI test 50 ipfs://QmRkvw69RnKCPxrjxHzvF6q729qwBLLAzaHQ9BqpiZD4aw/

    // INI waypoint
    // fade opacity
    $('.fix_centra_road, .fix_img_road_new, .fix_p_road, .letra_road')
    .css('opacity', 0) // immediately hide element
    .waypoint(function(direction) {
      if (direction === 'down') {
        $(this.element).animate({ opacity: 1 }, "slow" )
      }
      else {
        $(this.element).animate({ opacity: 0 }, "slow" )
      }
    }, {
      offset: 'bottom-in-view'
    }); 

    // left to right
    $('.anima_left_to_right')
    .css('left', "-=500px") // immediately hide element
    .waypoint(function(direction) {
        if (direction === 'down') {
            $(this.element).animate({ "left": "+=500px" }, 500 )
        }
        else {
            $(this.element).animate({ "left": "-=500px" }, 500 )
        }
    }, {
        offset: 'bottom-in-view'
    });

    // right to left
    $('.anima_right_to_left')
    .css('right', "-=500px") // immediately hide element
    .waypoint(function(direction) {
        if (direction === 'down') {
            $(this.element).animate({ "right": "+=500px" }, 500 )
        }
        else {
            $(this.element).animate({ "right": "-=500px" }, 500 )
        }
    }, {
        offset: 'bottom-in-view'
    }); 
    // FIn Waypoint
    
 
});

 