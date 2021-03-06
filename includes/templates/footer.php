
    <footer class="site-footer">
        <div class="contenedor clearfix">
            <div class="footer-informacion">
                <h3>Sobre <span>PdeWebCamp</span></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, asperiores voluptatem, cum incidunt ipsum natus distinctio quisquam reiciendis autem qui aliquid iusto consectetur, quos quo quia ex? Tenetur, amet deleniti.</p>
            </div>
            <div class="ultimos-tweets">
                <h3>Ultimos <span>Tweets</span></h3>
                <a class="twitter-timeline" data-lang="es" data-height="400" href="https://twitter.com/pdewebcamp?ref_src=twsrc%5Etfw">Tweets by pdewebcamp</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="menu">
                <h3>REdes <span>Sociales</span></h3>
                <nav class="redes-sociales">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-pinterest-p"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </nav>
            </div>

        </div>


        <p class="copyright">Todos los derechos Reservados PDEWEBCAMP 2020</p>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js
  "></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-3.5.1.min.js"><\/script>')
    </script>
    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/mapa.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.lettering.js"></script>
    <?php 
        $archivo = basename($_SERVER['PHP_SELF']);
        $pagina = str_replace('.php', "", $archivo);
        if($pagina == 'invitados' || $pagina == 'index'){
            echo '<script src="js/jquery.colorbox-min.js"></script>';
        }else if($pagina == 'conferencia'){
            echo '<script src="js/lightbox.js"></script>';
        }
    ?>



    
    
    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('set', 'anonymizeIp', true);
        ga('set', 'transport', 'beacon');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
    <?php
	// Guarda todo el contenido a un archivo
	$fp = fopen($archivoCache, 'w');
	fwrite($fp, ob_get_contents());
	fclose($fp);
	// Enviar al navegador
	ob_end_flush();
?>
</body>

</html>

