<?php 
	/**
	 * 
	 */
	class Page
	{
		public $content;
		public $title = "Cake Shop";
		public $keywords = "Cake Shop";
		public $button = array("Home" => "home.php","Food" => "food.php", "Transaction" => "transaction.php", "Contat" => "contact.php", "Login" => "login.php" );
		public function __set($name,$value)
		{
			$this->$name = $value;
		}
		public function Display()
		{
			echo "<html>\n<head>\n";
			$this->DisplayTitle();
			$this->DisplayKeywords();
			$this->DisplayStyles();
			echo "</head>\n<body>\n";
			$this->DisplayHeader();
			// $this->DisplayMenu($this->button);
			echo $this->content;
			$this->DisplayFooter();
			echo "</body>\n</html>";
		}
		public function DisplayTitle()
		{
			echo "<title>".$this->title."</title>";
		}
		public function DisplayKeywords()
		{
			echo "<meta name='keywords' content='".$this->keywords."'/'>";
		}
		public function DisplayStyles()
		{
			?>
				<!--Custom CSS -->
				<link href="style/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
				<link href="style/css/style.css" rel="stylesheet" type="text/css" media="all"/>
				<link rel="stylesheet" type="text/css" href="style/css/style2.css" />
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<meta name="keywords" content="Hot Cuisine Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
				Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
				<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
				<!--Fonts -->
				<link href='//fonts.googleapis.com/css?family=Ruluko' rel='stylesheet' type='text/css'>
				<link href='//fonts.googleapis.com/css?family=Work+Sans:400,600,500,700,800,900,200,300' rel='stylesheet' type='text/css' />
				<!--fonts -->
				<script type="text/javascript" src="style/js/jquery.js"></script>
			<?php
		}

		public function DisplayHeader()
		{
			?>
			<div class="top-navg ">
				<div class="container">
					<div class=" logo wow tada" data-wow-delay="0.3s">
						<a href="index.html"><img src="style/images/logo.png" alt=""></a>
					</div>
					<div class="navigation">	
						<span class="menu-ic"><img src="images/menu2.png" alt=""></span>
						<div class="menu menu-li">
							<ul class="menu-list">
								<li class="menu-item menu-item-current"><a href="index.html" class="menu-link">Home</a></li>
								<li class="menu-item"><a href="food.php" class="menu-link">Food</a></li>
								<li class="menu-item"><a href="codes.html" class="menu-link">Transaction</a></li>
								<li class="menu-item"><a href="login.php" class="menu-link">Login</a></li>
								<li class="menu-item"><a href="contact.html" class="menu-link">Contact</a></li>
							</ul>
						</div>

						 <script>
							   $( "span.menu-ic" ).click(function() {
								 $( ".navigation ul" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
					</div>
				</div>
			</div>
			<?php
		}

		// public function DisplayMenu($button)
		// {
		// 	echo "<nav>";
		// 		while (list($name,$url) = each($button)) {
		// 			$this->DisplayButton($name,$url,!$this->IsURLCurrentPage($url));
		// 		}
		// 	echo "</nav>\n";
		// }		
		public function IsURLCurrentPage($url)
		{
			if (strpos($_SERVER['PHP_SELF'],$url) === false){
				return false;
			}else {
				return true;
			}
		}

		public function DisplayButton($name,$url,$active=true)
		{
			if ($active) {?>
				<div class="menuitem">
					<a href="<?=$url?>">
						<img src="s-logo.gif" alt="" height="20" width="20">
						<span class="menutext"><?=$name?></span>
					</a>
				</div>
				<?php
			} else { ?>
				<div class="menuitem">
					<img src="side-logo.gif" alt="">
					<span class="menutext"><?=$name?></span>
				</div>
				<?php
			} 
		}
		public function DisplayFooter()
		{
			?>
			<div class="footer">
				<div class="container">
					<div class="footer-main">
						<div class="col-md-4 amet-sed wow bounceInDown" data-wow-delay="0.3s">
						<h4>Information</h4>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet .</p>
							<ul class="social">
								<li><span> </span>sector 21 , main road </li>
								<li class="phone"><span> </span> +71999-56985</li>
								<li class="mail"><a href="mailto:contact@Example.com"><span> </span> contact@Example.com</a></li>
							</ul>
						</div>
				 
						<div class="col-md-5 ftr-grid wow bounceInUp" data-wow-delay="0.3s">
						 	<h4>Newsletter</h4>
						 	<form>
						 		<input type="text"  placeholder="Email Address" required="">
						 		<input type="submit" value="subscribe">
					 		</form>
						</div>
						<div class="col-md-3 ftr-grid wow bounceInLeft" data-wow-delay="0.3s">
						 	<ul class="ftr-nav">
						 		<li><a href="index.html">Home</a></li>
								<li><a href="about.html">Food</a></li>
								<li><a href="services.html">Transaction</a></li>
								<li><a href="menu.html">Contact</a></li>
								<li><a href="contact.html">Login</a></li>
						 	</ul>
						</div>
			 			<div class="clearfix"> </div>
					</div>
				</div>
    		</div>
			<?php
		}
	}
?>