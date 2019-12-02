<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TheBookshelf</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>
<body>
	<header id="home">
		<div class="bg-img" style="background-image: url('./img/hu.jpg');">
			<div class="overlay"></div>
		</div>
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">
				<div class="navbar-header">
					<div class="navbar-brand">
						<a href="index.html">
							<img class="logo" src="img/logo.svg" alt="logo">
							<img class="logo-alt" src="img/logo.svg" alt="logo">
						</a>
					</div>
					<div class="nav-collapse">
						<span></span>
					</div>
				</div>
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="index.html">Home</a></li>
					<li class="has-dropdown"><a href="carti.php">Carti</a>
						<ul class="dropdown">
							<li><a href="adauga-carte.html">Adauga o carte</a></li>
							<li><a href="sterge-carte.html">Sterge o carte</a></li>
							<li><a href="modifica-carte.html">Modifica o carte</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="jucarii.php">Jucarii</a>
						<ul class="dropdown">
							<li><a href="adauga-jucarie.html">Adauga o jucarie</a></li>
							<li><a href="sterge-jucarie.html">Sterge o jucarie</a></li>
							<li><a href="modifica-jucarie.html">Modifica o jucarie</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="filme.php">Filme</a>
						<ul class="dropdown">
							<li><a href="adauga-film.html">Adauga un film</a></li>
							<li><a href="sterge-film.html">Sterge un film</a></li>
							<li><a href="modifica-film.html">Modifica un film</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="muzica.php">Muzica</a>
						<ul class="dropdown">
							<li><a href="adauga-muzica.html">Adauga</a></li>
							<li><a href="sterge-muzica.html">Sterge</a></li>
							<li><a href="modifica-muzica.html">Modifica</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="papetarie.php">Papetarie</a>
						<ul class="dropdown">
							<li><a href="adauga-papetarie.html">Adauga</a></li>
							<li><a href="sterge-papetarie.html">Sterge</a></li>
							<li><a href="modifica-papetarie.html">Modifica</a></li>
						</ul>
					</li>
					<li><a href="index.html">Logout</a></li>
				</ul>
      </div>
    </nav>
    <div class="home-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="home-content">
							<div class="container-fluid">
								<?php
							$host = "localhost";
							$username = "root";
							$password = "";
							$database = "librarie";

							try {

										$connect = new PDO("mysql:host=$host;dbname=$database", $username, $password);
										$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
										//echo "Database connection Done";
										$query = "SELECT * FROM muzica";
										$data = $connect->query($query);
										echo ' <table width="100%" height="100%" border="4" cellpadding="5" cellspacing="5" style="background-color:" bordercolor="#DEB887">
														<tr>
																<th>ID</th>
																<th>Nume</th>
																<th>Pret</th>
																<th>Stoc</th>
														</tr>';
									foreach($data as $row)
									{
										echo ' <tr>
																<td>'.$row["idmuzica"].'</td>
																<td>'.$row["nume"].'</td>
																<td>'.$row["pret"].'</td>
																<td>'.$row["stoc"].'</td>
													 </tr>';
									}
									echo '</table>';
									}

								catch(PDOException $error)
								{
									$error->getMessage();
								}
								?>
							</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</body>
  </html>
