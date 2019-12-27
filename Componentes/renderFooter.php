<?php 
class RenderFooter
{
    public function __construct()
    {
        
    }
    
    public function renderFooter()
    {
        $footer = '
        <!-- BEGIN: Footer-->

        <footer class="page-footer footer footer-static footer-light navbar-border navbar-shadow blue-grey lighten-5 z-depth-1">
          <div class="footer-copyright">
            <div class="container"><span>&copy; 2019 <a href="https://ctrlsolucoes.com.br/" target="_blank">CTRL SOLUÇÕES</a> .</span></div>
          </div>
        </footer>
    
        <!-- END: Footer-->';

        return $footer;
    }
}

?>