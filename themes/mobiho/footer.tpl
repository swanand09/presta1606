{*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
 <!--Footer-->
  <div class="row footer">
    <div class="container">
      <div class="col-md-4">
        <div class="col-md-4"> <img src="img/besoin_aide_footer.png" alt="Besoin d'aide ?"></div>
        <div class="col-md-12">
          Besoin D'aide <br/>
          <span class='numero'>04-5800-5900</span>
          <span class='horaire'>Lun - Ven 8am - 6pm</span>
        </div>
        <div class="col-md-16"><a class='btn custom-btn-3' href="#">Email us</a></div>
      </div>
      <div class="col-md-4">
        <h2>SUPPORT</h2>
        <ul>
          <li><a href='#'>Service à la clientèle</a></li>
          <li><a href='#'>Expédition & retours</a></li>
          <li><a href='#'>Suivi de commande</a></li>
          <li><a href='#'>Sitemaps</a></li>
          <li><a href='#'>FAQ</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h2>MAGASIN</h2>
        <ul>
          <li><a href='#'>Téléphones</a></li>
          <li><a href='#'>Comprimés</a></li>
          <li><a href='#'>Accessoires</a></li>
          <li><a href='#'>Forfaits</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h2>&Agrave; PROPOS DE NOUS</h2>
        <ul>
          <li><a href='#'>Mobiho Essentiel</a></li>
          <li><a href='#'>Carrières</a></li>
          <li><a href='#'>Contactez-nous</a></li>
          <li><a href='#'>Notre engagement</a></li>
        </ul>
      </div>
      <div class="col-md-16">
        <img class='footer_logo' src="img/footer_logo.png" /> <span>Droit d'auteur © 2014 Mobiho Essentiel. Tous droits réservés.</span> <span class='text-right'><a href="#">Conditions d'utilisation</a> | <a href="#">Politique de confidentialité</a> </span>
      </div>
    </div>
  </div>
{*
{if !$content_only}
					</div><!-- #center_column -->
					{if isset($right_column_size) && !empty($right_column_size)}
						<div id="right_column" class="col-xs-12 col-sm-{$right_column_size|intval} column">{$HOOK_RIGHT_COLUMN}</div>
					{/if}
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<!-- Footer -->
			<div class="footer-container">
				<footer id="footer"  class="container">
					<div class="row">{$HOOK_FOOTER}</div>
				</footer>
			</div><!-- #footer -->
		</div><!-- #page -->
{/if}*}
{include file="$tpl_dir./global.tpl"}
	</body>
</html>