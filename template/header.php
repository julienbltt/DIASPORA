<?php
	if (isset($_SESSION['id']) AND isset($_SESSION['email'])) 
		{
?>
			<header>
				<div id="titre"> 
					<a href="/espace_travail/DIASPORA"><img src="http://localhost/espace_travail/DIASPORA/design/img/BRAND/logo_titre.png" alt="Logo de la marque DIASPORA" /></a>
				</div>
				
				<div id="logo"> 
					<a href="/espace_travail/DIASPORA/panier"><img src="http://localhost/espace_travail/DIASPORA/design/img/BRAND/logo.png" alt="Logo " /></a>
				</div> 

				<nav>
					<ul>
						<li><a href="/espace_travail/DIASPORA/vetements">VETEMENTS</a></li>
						<li><a href="/espace_travail/DIASPORA/accessoires">ACCESSOIRES</a></li>
						<li><a href="/espace_travail/DIASPORA/mon_compte">Mon Compte</a></li>
					</ul>
				</nav>
			</header>
<?php
		}
		else
		{
?>
			<header>
				<div id="titre"> 
					<a href="/espace_travail/DIASPORA"><img src="http://localhost/espace_travail/DIASPORA/design/img/BRAND/logo_titre.png" alt="Logo de la marque DIASPORA" /></a>
				</div>
				
				<div id="logo"> 
					<a href="/espace_travail/DIASPORA/panier"><img src="http://localhost/espace_travail/DIASPORA/design/img/BRAND/logo.png" alt="Logo " /></a>
				</div> 

				<nav>
					<ul>
						<li><a href="/espace_travail/DIASPORA/vetements">VETEMENTS</a></li>
						<li><a href="/espace_travail/DIASPORA/accessoires">ACCESSOIRES</a></li>
						<li><a href="/espace_travail/DIASPORA/inscription">INSCRIPTION</a></li>
						<li><a href="/espace_travail/DIASPORA/inscription/connection.php">CONNECTION</a></li>
					</ul>
				</nav>
			</header>
<?php
		}
?>


























