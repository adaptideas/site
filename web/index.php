<?php include("common/header.php"); ?>

<section class="main" id="destaques">
	<section id="slider">
		<div id="featured"> 
		     <img src="images/scrum.jpg" alt="Scrum" />
		     <img src="images/scrum2.jpg"  alt="Scrum" />
		     <img src="images/scrum3.jpg" alt="Scrum" />
		</div>
	</section>
	<section id="social-networks">
		<h1>Redes Sociais</h1>
		<p><a href="http://www.facebook.com/procurandocursos.com.br" title="Ir para Facebook" target="_blank"><img src="images/facebook_icon.png" alt="Facebook" /></a> AdaptIdeas no <a href="http://www.facebook.com/procurandocursos.com.br" title="Ir para Facebook" target="_blank">Facebook</a></p>
		<p><a href="https://twitter.com/adaptideas" title="Ir para Twitter" target="_blank"><img src="images/twitter_icon.png" alt="Twitter" /></a> AdaptIdeas no <a href="https://twitter.com/adaptideas" title="Ir para Twitter" target="_blank">Twitter</a></p>
		<p><a href="#" title="Ir para Google+" target="_blank"><img src="images/googleplus_icon.png" alt="Google+" /></a> AdaptIdeas no <a href="#" title="Ir para Google+" target="_blank">Google+</a></p>
	</section>
	<div class="grid-1">
		<h1>Depoimentos de Clientes</h1>
		<p class="testimony">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et viverra urna. Aenean blandit tortor dignissim mi porta blandit. Aenean pharetra tortor nec sem fermentum convallis."<br /><span>Mark Zuckerberg, CEO Facebook.</span></p>
		<p class="testimony">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et viverra urna. Aenean blandit tortor dignissim mi porta blandit. Aenean pharetra tortor nec sem fermentum convallis."<br /><span>Mark Zuckerberg, CEO Facebook.</span></p>
		<p class="testimony">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et viverra urna. Aenean blandit tortor dignissim mi porta blandit. Aenean pharetra tortor nec sem fermentum convallis."<br /><span>Mark Zuckerberg, CEO Facebook.</span></p>
	</div>
	<div class="grid-2">
		<h1>Twitter</h1>
		<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
		<script>
		new TWTR.Widget({
		  version: 2,
		  type: 'profile',
		  rpp: 4,
		  interval: 30000,
		  width: 'auto',
		  height: 400,
		  theme: {
		    shell: {
		      background: 'transparent',
		      color: '#444444'
		    },
		    tweets: {
		      background: 'tranparent',
		      color: '#444444',
		      links: '#f5834e'
		    }
		  },
		  features: {
		    scrollbar: false,
		    loop: false,
		    live: false,
		    behavior: 'all'
		  }
		}).render().setUser('thomasnunes').start();
		</script>
	</div>
	<h1>Clientes</h1>
	<ul id="clients">
		<li><img src="http://www.rdgseguros.com.br/image/porto.jpg" alt="cliente 1" /></li>
		<li><img src="http://www.rdgseguros.com.br/image/porto.jpg" alt="cliente 2" /></li>
		<li><img src="http://www.rdgseguros.com.br/image/porto.jpg" alt="cliente 3" /></li>
	</ul>
</section>
	
<?php include("common/footer.php"); ?>