

   
        <div class="container">
            <footer class="py-5">
                <!-- xs: 0,
                sm: 576px,
                md: 768px,
                lg: 992px,
                xl: 1200px,
                xxl: 1400px -->
                <div class="row">
                    <div class="col-lg-7">
                        <div id="pap_rep_footer" class="footer-text text-left position-relative">
                            <a href="<?php echo $fix.$index;?>"><?php echo $img_logo?></a>
                            <p class="text-justify">
                                <a class="list-group-item list-group-item-action bg-transparent text-white" style="text-align: justify;" href="<?php echo $fix.$index;?>">
                                    <?php echo $descripcion; ?>
                                </a>
                            </p>
                            <div class="d-flex justify-content-around">
                                <?php echo $redes; ?>
                            </div>
                            <hr class="invis">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 d-flex flex-column align-items-center">
                        <h4 class="mb-2 mt-4">Section</h4>
                        <div class="col-5 w-auto">
                            <ul class="nav flex-column">
                                <?php echo $navs;?>
                                <!-- <li><a href="<?php // echo $fix; ?>terms-conditions" class="nav-link px-2 <?php // echo $estoy = ($page_actual[$cant_p]=='terms-conditions'?'text-secondary':'text-white'); ?>">Terms and Conditions</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between pt-4 mt-4 border-top">
                    <p>&copy; 2022 GoldenMonkeyss.com</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-dark" href="<?php echo $fix;?>#"><svg class="bi" width="24" height="24"><use xlink:href="<?php echo $fix;?>#twitter"/></svg></a></li>
                        <li class="ms-3"><a class="link-dark" href="<?php echo $fix;?>#"><svg class="bi" width="24" height="24"><use xlink:href="<?php echo $fix;?>#instagram"/></svg></a></li>
                        <li class="ms-3"><a class="link-dark" href="<?php echo $fix;?>#"><svg class="bi" width="24" height="24"><use xlink:href="<?php echo $fix;?>#facebook"/></svg></a></li>
                    </ul>
                </div>
            </footer> 
        </div>
        
        <!-- <img class="fix_fondo_body" src="<?php // echo $fix; ?>img/logos/banner_long.png" alt="Fondo Panda GoldenMonkeyss"> -->
            
        <script src="<?php echo $fix;?>js/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script> 
        <script src="<?php echo $fix;?>js/main.js"></script>
        <script src="<?php echo $fix;?>js/jquery.countdown.min.js"></script>

        <script type="text/javascript">
            $('#count_down').countdown('2022/07/10', function(event) {
                // return false;
                $(this).html(event.strftime(''
                    // + '<span>%w</span> weeks '
                    + '<li><p class="numero">%D</p>Days</li>'
                    + '<li><p class="numero">%H</p>Hours</li>'
                    + '<li><p class="numero">%M</p>Minutes</li>'
                    + '<li><p class="numero">%S</p>Seconds</li>'
                ));
            });
        </script>
        <script src="<?php echo $fix;?>js/bootstrap/bootstrap.bundle.min.js"></script>
    </body>
</html>