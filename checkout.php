<html lang="en">
	<head>
		<title>Toys Niches</title>   
		<!--style.css, favcon, googlefont, materializecss-->
		<link href="styles/nichestyle.css" type="text/css" rel="stylesheet">       
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">  	
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
		
		<meta charset="utf-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<meta name="description" content=""> 
		<meta name="author" content=""> 
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 

	  <!--search modal-->
	  <div id="search-modal" class="modal">
		<div class="modal-content">
				<div class="input-field col s6">
					<form action="search.php" method="GET">
						<input placeholder="Search..." autofocus required type="text">
					</form>
				</div>
		</div>
	  </div>
									
		<!--navbar-->
		<div class="navbar-fixed">
			<nav id="nav-selector">
				<div class="nav-wrapper">
					<a href="index.php" class="brand-logo" id="website-logo"><i class="material-icons">whatshot</i></a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
						<ul class="right hide-on-med-and-down" id="tab-items">
							<li><a href="anime.php" id="niche-item-tab">Anime</a></li>
							<li><a href="books.php" id="niche-item-tab">Books</a></li>
							<li><a href="school.php" id="niche-item-tab">School</a></li>
							<li><a href="sports.php" id="niche-item-tab">Sports</a></li>
							<li><a href="media.php" id="niche-item-tab">Media</a></li>
							<li><a href="toys.php" id="niche-item-tab">Toys</a></li>
							<li><a href="games.php" id="niche-item-tab">Games</a></li>
							<li><a href="deals.php" id="special-deals-tab">Special Deals</a></li>
							<li><a href="#search-modal" class="modal-trigger"><i class="material-icons">search</i></a></li>
						</ul>
				</div>
			</nav>
		</div>
		
		<!--mobile sidenav-->
		<ul class="side-nav" id="mobile-demo">
			<li><a href="#search-modal" class="modal-trigger"><i class="material-icons">search</i>Search Niche</a></li>
			<li><a href="deals.php" id="niche-item-tab">Special Deals</a></li>
			<li><a href="anime.php" id="niche-item-tab">Anime</a></li>
			<li><a href="books.php" id="niche-item-tab">Books</a></li>
			<li><a href="school.php" id="niche-item-tab">School</a></li>
			<li><a href="sports.php" id="niche-item-tab">Sports</a></li>
			<li><a href="media.php" id="niche-item-tab">Media</a></li>
			<li><a href="toys.php" id="niche-item-tab">Toys</a></li>
			<li><a href="games.php" id="niche-item-tab">Games</a></li>
		</ul>
	</head>
	
	<body>
		
	</body>
	
	<footer class="page-footer" id="footer-page">
		<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 id="footer-header-text">About</h5>
						<p id="footer-sub-text">Niche is a service that allows for users to purchase 
						cheap items for their favorite hobbies, fandoms, and collections.</p>
						</div>
						<div class="col l4 offset-l2 s12">
						<h5 id="footer-header-text">Niches</h5>
						<ul>
						<li><a id="footer-sub-text" href="anime.php">Anime</a></li>
						<li><a id="footer-sub-text" href="books.php">Books</a></li>
						<li><a id="footer-sub-text" href="school.php">School</a></li>
						<li><a id="footer-sub-text" href="sports.php">Sports</a></li>
						<li><a id="footer-sub-text" href="media.php">Media</a></li>
						<li><a id="footer-sub-text" href="toys.php">Toys</a></li>
						<li><a id="footer-sub-text" href="games.php">Games</a></li>
						</ul>
					</div>
				</div>
		</div>
				<div class="footer-copyright" id="footer-trademark">
					<div class="container" id="footer-sub-text">
					Copyright &copy 2018 Niche Inc. All rights reserved.
					</div>
				</div>
	</footer>
	
		<!--jquery, materializejs-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	
	<script>
		//modal, collapseSideNav settings
		$('.modal').modal();
		$(".button-collapse").sideNav();
	</script>
</html>