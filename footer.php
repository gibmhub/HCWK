      	</div>
      </div>
    </div>
	
	<div id="footer">
	
		<div class="container">
			<div id="extra">
			
				<div id="fb">
					<h3>Das Symposium auf Facebook</h3>
			
					<div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=214796535250344";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
					
					<div class="fb-like-box" data-href="http://www.facebook.com/HeidelbergerSymposium" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
				</div>
				
				<div id="sponsoren">
				    <h3>Unsere Sponsoren</h3>
					<ul>
						<?php
							include_once('data/sponsoren.php');
							$i = 0;
							foreach ($sponsoren as $sponsor) {
								if ($i%2==0) {
									echo '<div class="row">';
								}
								echo '<li class="'.$sponsor->klasse.'"><a href="'.$sponsor->link.'" target="_blank"><img src="/img/sponsoren/'.$sponsor->logo.'"></a></li>';
								if ($i==0) {
									$i++;
								}
								if ($i%2==1) {
									echo '</div>';
								}
								$i++;
							}
						?>
					</ul>
				</div>
				
				<div id="kontakt">
					<h3><a href="/kontakt">Kontakt</a></h3>
					<address>
					  <b>Heidelberger Club für Wirtschaft und Kultur</b><br>
					  Luisenstraße 3<br>
					  69115 Heidelberg<br>
					  <abbr title="Telefon">T:</abbr> 06221 / 70 71 90<br>
					  <a href="mailto:info@hcwk.de"><abbr title="Email">@:</abbr> info@hcwk.de</a>
					</address>
					<!-- TODO: enable
					<p>Pressematerial finden sie hier:<br>
					<a href="/presse">Presse</a></p>
					-->
				</div>

			</div>
					
			<div id="copyright">
				&copy; 2013 HCWK | <a href="/impressum">Impressum</a>
			</div>
		</div>
	</div>
    
  </body>
</html>