<?php 
	require ("page.php");

	$homepage = new Page();

	$homepage->content = "
<div class='main-grid-one1'  id='one'>
    <div class='home-banner'>
		<div class='dream-home-bann-main wow bounceInDown' data-wow-delay='0.3s'>
				<h1>Lorem ipsum dolor</h1>
				<span class='span-dream-bar'> </span>
				<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
    </div>
    <!--welcome-->
    <div class='welcome'>
		<div class='container'>
			<div class='welcome-main'>
				<div class='welcome-top'>
					<h3>Welcome</h3>
				</div>
				<div class='welcome-bottom'>
					<div class='col-md-6 welcome-left wow bounceInUp' data-wow-delay='0.3s'>
						<h4> Duis aute irure dolor in reprehenderit in voluptate</h4>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage</p>
					</div>
					
					   <div class='col-md-3 wel-img1 wow bounceInLeft' data-wow-delay='0.3s'>
						   <ul class='welcome-grid gr-welcome'>
								<li>
								   <h4 class='zero'>There are many variation!</h4>
								   <p class='zero'>Lorem ipsum dolor sit amet.</p>
								</li>
								<li><img class='top' src='style/images/r4.jpg' alt=''/></li>
							</ul>
					   </div>
						<div class='col-md-3 wel-img2 wow bounceInRight' data-wow-delay='0.3s'>
						  <ul class='welcome-grid'>
								<li>
								   <h4 class='zero'>There are many variation!</h4>
								   <p class='zero'>Lorem ipsum dolor sit amet.</p>
								</li>
								<li><img class='top' src='style/images/r5.jpg' alt=''/></li>
							</ul>
					   </div>
				  <div class='clearfix'> </div>
				</div>
			</div>
		</div>
	</div>
	<!--promiss-->
	<div class='promiss'>
		<div class='container'>
			<div class='promiss-main wow bounceInDown' data-wow-delay='0.3s'>
				<h3>Our Promises and  Values</h3>
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
			</div>
		</div>
	</div>

	<div class='furniture'>
		<div class='container'>

			<div class='furniture-main'>
				<div class='col-md-4 furniture-grid wow bounceInLeft' data-wow-delay='0.3s'>
					<figure>
						<img src='style/images/r1.jpg' alt='' class='img_responsive'>
					</figure>
					<h4><a href='single.html'>Take a trivial example </a></h4>
					<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.</p>
					
				</div>
				<div class='col-md-4 furniture-grid wow bounceInUp' data-wow-delay='0.3s'>
					<figure>
						<img src='style/images/r2.jpg' alt='' class='img_responsive'>
					</figure>
					<h4><a href='single.html'>Take a trivial example </a></h4>
					<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.</p>
				</div>
				<div class='col-md-4 furniture-grid wow bounceInUp' data-wow-delay='0.3s'>
					<figure>
						<img src='style/images/lobster.jpg' alt='' class='img_responsive'>
					</figure>
					<h4><a href='single.html'>Take a trivial example </a></h4>
					<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.</p>
				</div>
			 <div class='clearfix'> </div>
			</div>
		</div>
	</div>
	";
	// "<!-- page content -->
	$homepage->Display();	
 ?>