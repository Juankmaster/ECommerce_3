<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ShUrRe
 */

?>

	</div>
     <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Comparte tus recetas con todos los del grupo.</h5>
                <p class="grey-text text-lighten-4"></p>
              </div>
             
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container center">
            © Copyright -JuankMaster- <?php echo Date('Y');?>
            </div>
          </div>
          <?php wp_footer(); ?>
        </footer>
     

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/materialize.min.js"></script>
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
              });
        </script>
        
	    </body>
	  </html>