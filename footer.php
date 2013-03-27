<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
      <footer id="colophon" role="contentinfo">

        <div class="wrapper">
          <div class="about">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/logo_ufrgs.png">
            <p class="nupacs">
              Departamento de Antrologia<br>
              NUPACS &mdash; Núcleo de Pesquisa em Antropologia do Corpo e da Saúde
            </p>

            <p class="contact">
              Av. Bento Gonçalves, 9500 – Prédio 43311, Bloco AI, Sala 104A
              CEP 91509-900 – Porto Alegre, RS, Brasil &mdash;
              Telefone/fax: +55 (51) 3308-6638<br>
              ofachelleal@gmail.com
            </p>
          </div>

          <div class="license">
            <p>
              Todo o conteúdo do site está disponível sobre a licença Creative
              Commons Attribution 3.0 não adaptada.
            </p>

            <img src="http://i.creativecommons.org/l/by/3.0/80x15.png">

            <p>
              O código deste site é livre, licenciado
              sob <a href="http://www.gnu.org/licenses/agpl.html">Affero
              GPL</a> </p><p>Acesse pelo nosso <a href="http://git.comum.org/web/p/cf.git">repositório</a>
            </p>
          </div>

          <span class="clear"></span>
        </div>

      </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>