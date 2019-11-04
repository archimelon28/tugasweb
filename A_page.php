<?php 
	/**
	 * 
	 */
	class Page
	{
		public $content;
		public $title = "Admin Cake Shop";
		public $keywords = "Admmin Cake Shop";
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
			// $this->DisplayHeader();
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
				<!-- Google Fonts -->
			    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
			    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

			    <!-- Bootstrap Core Css -->
			    <link href="style/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

			    <!-- Waves Effect Css -->
			    <link href="style/admin/plugins/node-waves/waves.css" rel="stylesheet" />

			    <!-- Animation Css -->
			    <link href="style/admin/plugins/animate-css/animate.css" rel="stylesheet" />

			    <!-- Morris Chart Css-->
			    <link href="style/admin/plugins/morrisjs/morris.css" rel="stylesheet" />

			    <!-- Custom Css -->
			    <link href="style/admin/css/style.css" rel="stylesheet">

			    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
			    <link href="style/admin/css/themes/all-themes.css" rel="stylesheet" />

			    <!-- Jquery Core Js -->
			    <script src="style/admin/plugins/jquery/jquery.min.js"></script>

			    <!-- Bootstrap Core Js -->
			    <script src="style/admin/plugins/bootstrap/js/bootstrap.js"></script>

			    <!-- Select Plugin Js -->
			    <script src="style/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

			    <!-- Slimscroll Plugin Js -->
			    <script src="style/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

			    <!-- Waves Effect Plugin Js -->
			    <script src="style/admin/plugins/node-waves/waves.js"></script>

			    <!-- Jquery CountTo Plugin Js -->
			    <script src="style/admin/plugins/jquery-countto/jquery.countTo.js"></script>

			    <!-- Morris Plugin Js -->
			    <script src="style/admin/plugins/raphael/raphael.min.js"></script>
			    <script src="style/admin/plugins/morrisjs/morris.js"></script>

			    <!-- ChartJs -->
			    <script src="style/admin/plugins/chartjs/Chart.bundle.js"></script>

			    <!-- Flot Charts Plugin Js -->
			    <script src="style/admin/plugins/flot-charts/jquery.flot.js"></script>
			    <script src="style/admin/plugins/flot-charts/jquery.flot.resize.js"></script>
			    <script src="style/admin/plugins/flot-charts/jquery.flot.pie.js"></script>
			    <script src="style/admin/plugins/flot-charts/jquery.flot.categories.js"></script>
			    <script src="style/admin/plugins/flot-charts/jquery.flot.time.js"></script>

			    <!-- Sparkline Chart Plugin Js -->
			    <script src="style/admin/plugins/jquery-sparkline/jquery.sparkline.js"></script>

			    <!-- Custom Js -->
			    <script src="style/admin/js/admin.js"></script>
			    <script src="style/admin/js/pages/index.js"></script>

			    <!-- Demo Js -->
			    <script src="style/admin/js/demo.js"></script>
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
						<span class="menu-ic"><img src="style/users/images/menu2.png" alt=""></span>
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

		public function DisplayMenu($button)
		{
			echo "<nav>";
				while (list($name,$url) = each($button)) {
					$this->DisplayButton($name,$url,!$this->IsURLCurrentPage($url));
				}
			echo "</nav>\n";
		}		
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
			<div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
			<?php
		}
	}
?>