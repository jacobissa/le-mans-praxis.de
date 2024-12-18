<?php
$website_version = "5.0.22";
$website_date = "10.12.2024";
$css_version = "5.0.2";
$js_version = "5.0.7";
$favicon_version = "5.0.5";
$img_version = "5.0.5";
$jquery_version = "3.6.1";
$bootstrap_version = "5.2.0";
$bootstrap_icons_version = "1.9.1";
$flag_icons_version = "6.6.3";
$jost_font_version = "3.5.0";
?>
<!DOCTYPE html>
<html lang="de" dir="ltr" prefix="og: https://ogp.me/ns#">

<!--
#=====================================================
# Webdesigner & Developer:      Jacob Issa
# Version:                      <?php echo $website_version . PHP_EOL; ?>
# Date:                         <?php echo $website_date . PHP_EOL; ?>
#=====================================================
-->

<head>
	<title>Le Mans Praxis</title>

	<!-- Meta Tags -->
	<meta charset="UTF-8">
	<meta name="title" content="Le Mans Praxis">
	<meta name="description" content="Le Mans Praxis, Hausarzt Praxis, Dr. Gabie Issa, Facharzt, Innere Medizin, Hausarzt, Internist, Le-Mans-Wall 9, Paderborn, Germany">
	<meta name="copyright" content="Le Mans Praxis">
	<meta name="keywords" content="Le Mans Praxis, Hausarzt Praxis, Dr. Gabie Issa, Facharzt, Innere Medizin, Hausarzt, Internist, Le-Mans-Wall 9, Paderborn, Germany">
	<meta name="author" content="Jacob Issa">
	<meta name="theme-color" content="#f8f9fa">
	<meta name="color-scheme" content="light dark">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Favicon -->
	<link rel="icon" type="image/svg+xml" href="./img/favicon/favicon.svg?v=<?php echo $favicon_version; ?>">
	<link rel="mask-icon" type="image/svg+xml" href="./img/favicon/mask-icon.svg?v=<?php echo $favicon_version; ?>" color="#000000">
	<link rel="shortcut icon" type="image/svg+xml" href="./img/favicon/favicon.svg?v=<?php echo $favicon_version; ?>">
	<link rel="apple-touch-icon" type="image/png" href="./img/favicon/apple-touch-icon.png?v=<?php echo $favicon_version; ?>">
	<link rel="manifest" type="application/manifest+json" href="./site.webmanifest?v=<?php echo $favicon_version; ?>">

	<!-- Open Graph -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://le-mans-praxis.de">
	<meta property="og:title" content="Le Mans Praxis, Dr. Gabie Issa">
	<meta property="og:description" content="Dr. Gabie Issa, Facharzt, Innere Medizin, Hausarzt, Internist, Le-Mans-Wall 9, Paderborn, Germany">
	<meta property="og:locale" content="de_DE">
	<meta property="og:locale:alternate" content="en_US">
	<meta property="og:locale:alternate" content="ar_AR">
	<meta property="og:image" content="https://le-mans-praxis.de/img/home/team.jpg?v=<?php echo $img_version; ?>">
	<meta property="og:image:alt" content="Le Mans Praxis">
	<meta property="og:image:type" content="image/jpeg" />

	<!-- Twitter -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:url" content="https://le-mans-praxis.de">
	<meta name="twitter:title" content="Le Mans Praxis">
	<meta name="twitter:description" content="Dr. Gabie Issa, Facharzt, Innere Medizin, Hausarzt, Internist, Le-Mans-Wall 9, Paderborn, Germany">
	<meta name="twitter:image:secure_url" content="https://le-mans-praxis.de/img/home/team.jpg?v=<?php echo $img_version; ?>">
	<meta name="twitter:image:alt" content="Le Mans Praxis">

	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap/css/bootstrap.min.css?v=<?php echo $bootstrap_version; ?>">
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap-icons/bootstrap-icons.css?v=<?php echo $bootstrap_icons_version; ?>">
	<link rel="stylesheet" type="text/css" href="./lib/flag-icons/flag-icons.css?v=<?php echo $flag_icons_version; ?>">
	<link rel="stylesheet" type="text/css" href="./lib/jost/jost.css?v=<?php echo $jost_font_version; ?>" />
	<link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo $css_version; ?>">
</head>

<body>
	<!-- Header -->
	<div class="mb-3 pb-3">
		<nav id="my-header" class="navbar fixed-top navbar-expand-md shadow mb-3 pb-3 text-dark bg-light">
			<div class="container-fluid">
				<button type="button" class="btn btn-link navbar-brand ms-3 d-flex flex-nowrap text-dark" id="my-btn-logo" aria-label="Logo">
					<img class="align-self-center me-1 img-fluid" src="./img/favicon/favicon.svg?v=<?php echo $favicon_version; ?>" alt="Le Mans Praxis" width="61.23" height="50" style="height: 50px;">
					<div class="align-self-center" data-i18n-key="title">Le Mans Praxis</div>
				</button>
				<button type="button" class="btn btn-link navbar-toggler text-dark collapsed text-dark" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar" id="my-btn-toggler" aria-label="Toggle navigation">
					<span class="bi bi-x-lg fs-2"></span>
					<span class="bi bi-list fs-2"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
					<ul class="nav navbar-nav nav-fill ps-3 pe-3">
						<li class="nav-item flex-fill d-flex align-items-center text-center">
							<button type="button" class="btn btn-link nav-link text-dark" id="my-btn-home" data-i18n-key="home">Home</button>
						</li>
						<li class="nav-item flex-fill d-flex align-items-center text-center">
							<button type="button" class="btn btn-link nav-link text-dark" id="my-btn-team" data-i18n-key="team">Praxisteam</button>
						</li>
						<li class="nav-item flex-fill d-flex align-items-center text-center">
							<button type="button" class="btn btn-link nav-link text-dark" id="my-btn-services" data-i18n-key="services">Leistungen</button>
						</li>
						<li class="nav-item flex-fill d-flex align-items-center text-center">
							<button type="button" class="btn btn-link nav-link text-dark" id="my-btn-darkmode" aria-label="Dark Mode"><span class="bi bi-moon fs-4"></span></button>
						</li>
						<!--
						<li class="nav-item flex-fill d-flex align-items-center text-center">
							<button type="button" class="btn btn-link nav-link text-dark" id="my-btn-whatsapp" aria-label="WhatsApp" onclick="window.open('https://wa.me/message/OYD6HHINQVU5E1' , '_blank')"><span class="bi bi-whatsapp fs-4"></span></button>
						</li>
                        <li class="dropdown nav-item flex-fill d-flex align-items-cente text-center flex-wrap">
                            <button class="dropdown-toggle btn btn-link nav-link text-dark" type="button"
                                id="my-btn-translate" data-bs-toggle="dropdown" aria-expanded="false"><span
                                    class="bi bi-translate fs-4"></span></button>
                            <ul class="dropdown-menu dropdown-menu-end container-fluid mt-0 p-0"
                                aria-labelledby="my-btn-translate" style="min-width: fit-content;">
                                <li><button type="button" onclick="setLanguage('de')"
                                        class="dropdown-item btn btn-link text-dark d-inline-flex justify-content-between align-items-center">Deutsch
                                        <span class="badge d-inline-flex"><span class="fi fi-de"></span></span></button>
                                </li>
                                <li><button type="button" onclick="setLanguage('en')"
                                        class="dropdown-item btn btn-link text-dark d-inline-flex justify-content-between align-items-center">English
                                        <span class="badge d-inline-flex"><span class="fi fi-us"></span></span></button>
                                </li>
                                <li><button type="button" onclick="setLanguage('ar')"
                                        class="dropdown-item btn btn-link text-dark d-inline-flex justify-content-between align-items-center">العربية
                                        <span class="badge d-inline-flex"><span class="fi fi-ae"></span></span></button>
                                </li>
                            </ul>
                        </li>
                        -->
					</ul>
				</div>
			</div>
		</nav>
	</div>

	<!-- Content -->
	<div id="my-content" class="container mt-5 pt-5 mb-3 pb-3">
		<!-- Home Page -->
		<div id="my-content-home">
			<!-- Info -->
			<div class="container my-3 p-4">
				<div class="d-flex flex-column">
					<h1 class="display-3 fw-bolder py-2 px-0 text-center user-select-all" data-i18n-key="title">Le Mans
						Praxis</h1>
					<h2 class="h3 py-2 px-0 text-center">
						<span class="d-none d-sm-inline-block user-select-none">&#8211;</span>
						<span class="user-select-all" data-i18n-key="subtitle">Hausärztliche Versorgung</span>
						<span class="d-none d-sm-inline-block user-select-none">&#8211;</span>
					</h2>
					<h3 class="h2 fw-bold py-2 px-0 text-center user-select-all" data-i18n-key="doctor">Dr. Gabie Issa</h3>
					<h4 class="py-2 px-0 text-center user-select-all" data-i18n-key="position">Facharzt für Innere
						Medizin
					</h4>
				</div>
			</div>

			<!-- Main photo -->
			<div class="container my-3 p-4">
				<div class="row mx-0">
					<picture>
						<source srcset="./img/home/team.webp?v=<?php echo $img_version; ?>" type="image/webp">
						<img class="img-fluid img-thumbnail rounded p-1 mx-auto shadow" src="./img/home/team.jpg?v=<?php echo $img_version; ?>" alt="Le Mans Praxis" width="4896" height="3688" />
					</picture>
				</div>
			</div>

			<!-- Öffnungszeiten -->
			<div class="container my-3 p-4">
				<div class="h1 fs-1 fw-bolder my-2 py-2 text-center user-select-none" data-i18n-key="hours">
					Öffnungszeiten</div>
				<div class="row my-2 py-2 g-3 mx-0 user-select-none">
					<div class="row d-flex flex-row justify-content-between mx-auto bg-light text-dark py-3 my-2 border rounded">
						<div class="col-4 col-sm-6 col-md px-3" data-i18n-key="monday">Montag</div>
						<div class="col col-sm-6 col-md-4 px-3 text-wrap">
							8&#8211;12&nbsp;&#38;&nbsp;14&#8211;17&nbsp;Uhr
						</div>
					</div>
					<div class="row d-flex flex-row justify-content-between mx-auto bg-light text-dark p-3 my-2 border rounded">
						<div class="col-4 col-sm-6 col-md px-3" data-i18n-key="tuesday">Dienstag</div>
						<div class="col col-sm-6 col-md-4 px-3 text-wrap">
							8&#8211;12&nbsp;&#38;&nbsp;14&#8211;17&nbsp;Uhr
						</div>
					</div>
					<div class="row d-flex flex-row justify-content-between mx-auto bg-light text-dark p-3 my-2 border rounded">
						<div class="col-4 col-sm-6 col-md px-3" data-i18n-key="wednesday">Mittwoch</div>
						<div class="col col-sm-6 col-md-4 px-3 text-wrap">8&#8211;12&nbsp;Uhr</div>
					</div>
					<div class="row d-flex flex-row justify-content-between mx-auto bg-light text-dark p-3 my-2 border rounded">
						<div class="col-4 col-sm-6 col-md px-3" data-i18n-key="thursday">Donnerstag</div>
						<div class="col col-sm-6 col-md-4 px-3 text-wrap">
							8&#8211;12&nbsp;&#38;&nbsp;14&#8211;18&nbsp;Uhr
						</div>
					</div>
					<div class="row d-flex flex-row justify-content-between mx-auto bg-light text-dark p-3 my-2 border rounded">
						<div class="col-4 col-sm-6 col-md px-3" data-i18n-key="friday">Freitag</div>
						<div class="col col-sm-6 col-md-4 px-3 text-wrap">8&#8211;12&nbsp;Uhr</div>
					</div>
				</div>
			</div>

			<!-- Kontakt -->
			<div class="container my-3 p-4">
				<div class="h1 fs-1 fw-bolder p-2 text-center user-select-none">Kontakt</div>
				<div class="py-2 text-center user-select-none">
					* Nur für Vereinbarung von Terminen, Bestellung von Rezepten &
					Überweisungen sowie Transport von Unterlagen!
				</div>
				<div class="py-2 text-center user-select-none">
					Medizinische Fragen können per Fax, WhatsApp oder E-Mail leider nicht
					beantwortet werden!
				</div>
				<div class="row my-2 py-2 g-3 mx-0 user-select-none">
					<div class="row d-flex flex-row justify-content-between mx-auto bg-light text-dark p-3 my-2 border rounded">
						<div class="col-4 col-sm-6 col-md px-3">
							<span class="bi bi-telephone"></span>
							<span class="fw-semibold" data-i18n-key="phone">Telefon</span>
						</div>
						<div class="col col-sm-6 col-md-4 px-3 text-wrap">
							<a class="link-dark" href="tel:+495251281331">05251281331</a>
						</div>
					</div>
					<div class="row d-flex flex-row justify-content-between mx-auto bg-light text-dark p-3 my-2 border rounded">
						<div class="col-4 col-sm-6 col-md px-3">
							<span class="bi bi-printer"></span>
							<span class="fw-semibold" data-i18n-key="fax">Fax *</span>
						</div>
						<div class="col col-sm-6 col-md-4 px-3 text-wrap">
							<a class="link-dark" href="tel:+4952516829234">052516829234</a>
						</div>
					</div>
					<div class="row d-flex flex-row justify-content-between mx-auto bg-light text-dark p-3 my-2 border rounded">
						<div class="col-4 col-sm-6 col-md px-3">
							<span class="bi bi-envelope"></span>
							<span class="fw-semibold" data-i18n-key="email">E-Mail *</span>
						</div>
						<div class="col col-sm-6 col-md-4 px-3 text-wrap">
							<a class="link-dark" id="home-email">Error decrypting email</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Address -->
			<div class="container my-3 p-4">
				<div class="h1 fs-1 fw-bolder p-2 text-center user-select-none">Adresse</div>
				<div class="fs-5 fs-sm-3 fw-bold py-2 px-0 text-center user-select-all">
					<span class="d-inline-block">Le-Mans-Wall 9,</span>
					<span class="d-inline-block">33098 Paderborn</span>
				</div>
				<picture>
					<source srcset="./img/home/map.webp?v=<?php echo $img_version; ?>" type="image/webp">
					<img class="img-fluid img-thumbnail rounded mx-auto d-block" src="./img/home/map.png?v=<?php echo $img_version; ?>" onclick="window.open('https://g.page/dr-gabie-issa' , '_blank')" alt="Dr. Gabie Issa, Le-Mans-Wall 9, 33098 Paderborn, Germany" width="2564" height="960" style="min-height: 400px; object-fit: cover; object-position: center; cursor: pointer;" />
				</picture>
			</div>
		</div>

		<!-- Team Page -->
		<div id="my-content-team">
			<!-- Title -->
			<div class="container my-3 p-4">
				<div class="row justify-content-center">
					<div class="h1 fs-1 fw-bolder p-2 text-center user-select-none" data-i18n-key="team">Praxisteam
					</div>
				</div>
			</div>
			<!-- Doctor -->
			<div class="container my-3 p-4">
				<div class="row d-flex justify-content-center mx-0">
					<div class="card border shadow col-12 col-md-6 col-lg-4 px-0 mx-3">
						<picture>
							<source srcset="./img/team/issa.webp?v=<?php echo $img_version; ?>" type="image/webp">
							<img class="card-img-top" src="./img/team/issa.jpg?v=<?php echo $img_version; ?>" alt="Dr. Gabie Issa" width="979" />
						</picture>
						<div class="card-body">
							<h5 class="card-title text-center fw-bold user-select-all" data-i18n-key="doctor">Dr. Gabie
								Issa</h5>
							<p class="card-text text-center user-select-all" data-i18n-key="position">Facharzt für
								Innere Medizin
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Nurses -->
			<div class="container my-3 p-4">
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 d-flex justify-content-center mx-0">
					<div class="card border shadow col-12 col-md-5 col-lg-3 px-0 mx-3">
						<picture>
							<source srcset="./img/team/zuka.webp?v=<?php echo $img_version; ?>" type="image/webp">
							<img class=" card-img-top" src="./img/team/zuka.jpg?v=<?php echo $img_version; ?>" alt="Nexharie Zuka" width="696" />
						</picture>
						<div class="card-body">
							<h5 class="card-title text-center fw-bold user-select-all">Nexharie Zuka</h5>
							<p class="card-text text-center user-select-all" data-i18n-key="nurse">Medizinische
								Fachangestellte
							</p>
						</div>
					</div>
					<div class="card border shadow col-12 col-md-5 col-lg-3 px-0 mx-3">
						<picture>
							<source srcset="./img/team/ischuh.webp?v=<?php echo $img_version; ?>" type="image/webp">
							<img class=" card-img-top" src="./img/team/ischuh.jpg?v=<?php echo $img_version; ?>" alt="Simone Ischuh" width="696" />
						</picture>
						<div class="card-body">
							<h5 class="card-title text-center fw-bold user-select-all">Simone Ischuh</h5>
							<p class="card-text text-center user-select-all" data-i18n-key="nurse">Medizinische
								Fachangestellte
							</p>
						</div>
					</div>
					<div class="card border shadow col-12 col-md-5 col-lg-3 px-0 mx-3">
						<picture>
							<source srcset="./img/team/ewers.webp?v=<?php echo $img_version; ?>" type="image/webp">
							<img class=" card-img-top" src="./img/team/ewers.jpg?v=<?php echo $img_version; ?>" alt="Sabrina Ewers" width="696" />
						</picture>
						<div class="card-body">
							<h5 class="card-title text-center fw-bold user-select-all">Sabrina Ewers</h5>
							<p class="card-text text-center user-select-all" data-i18n-key="nurse">Medizinische
								Fachangestellte
							</p>
						</div>
					</div>
					<div class="card border shadow col-12 col-md-5 col-lg-3 px-0 mx-3">
						<picture>
							<source srcset="./img/team/idrizaj.webp?v=<?php echo $img_version; ?>" type="image/webp">
							<img class=" card-img-top" src="./img/team/idrizaj.jpg?v=<?php echo $img_version; ?>" alt="Florida Idrizaj" width="696" />
						</picture>
						<div class="card-body">
							<h5 class="card-title text-center fw-bold user-select-all">Florida Idrizaj</h5>
							<p class="card-text text-center user-select-all" data-i18n-key="nurse">Medizinische
								Fachangestellte
							</p>
						</div>
					</div>
					<div class="card border shadow col-12 col-md-5 col-lg-3 px-0 mx-3">
						<picture>
							<source srcset="./img/team/akcay.webp?v=<?php echo $img_version; ?>" type="image/webp">
							<img class=" card-img-top" src="./img/team/akcay.jpg?v=<?php echo $img_version; ?>" alt="Gülbahar Akcay" width="696" />
						</picture>
						<div class="card-body">
							<h5 class="card-title text-center fw-bold user-select-all">Gülbahar Akcay</h5>
							<p class="card-text text-center user-select-all" data-i18n-key="nurse">Medizinische
								Fachangestellte
							</p>
						</div>
					</div>
					<div class="card border shadow col-12 col-md-5 col-lg-3 px-0 mx-3">
						<picture>
							<source srcset="./img/team/tegethoff.webp?v=<?php echo $img_version; ?>" type="image/webp">
							<img class=" card-img-top" src="./img/team/tegethoff.jpg?v=<?php echo $img_version; ?>" alt="Julia Tegethoff" width="696" />
						</picture>
						<div class="card-body">
							<h5 class="card-title text-center fw-bold user-select-all">Julia Tegethoff</h5>
							<p class="card-text text-center user-select-all" data-i18n-key="trainee">Auszubildende
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Services Page -->
		<div id="my-content-services">
			<div class="container my-3 p-4">
				<div class="row justify-content-center">
					<div class="h1 fs-1 fw-bolder p-2 text-center user-select-none" data-i18n-key="services">Leistungen
					</div>
				</div>
			</div>
			<div class="container my-3 p-4">
				<div class="row justify-content-center user-select-none">
					<p>
						<strong>–&nbsp;Gesundheitsuntersuchung</strong> ab dem 18. Lebensjahr (Check-Up 18 und
						35)<br>
						<br>
						<strong>–&nbsp;Hautkrebsvorsorge-Untersuchung<br></strong><br>
						<strong>–&nbsp;Krebsvorsorge-Untersuchung</strong> bei Männern ab dem 45. Lebensjahr<br>
						<br>
						<strong>–&nbsp;Jugend-Gesundheitsuntersuchung</strong> im Jugendalter von 12 bis 14 Jahre
						(J1)<br>
						<br>
						<strong>–&nbsp;Untersuchungen nach §32 Jugendarbeitsschutzgesetz<br></strong><br>
						<strong>– Impfberatung und Impfungen nach STIKO<br></strong><br>
						<strong>–&nbsp;Labor-Untersuchungen</strong> (Blut, Urin, Stuhl sowie Abstriche) inklusive
						Darmkrebsfrüherkennung mit
						iFOPT ab dem 50. Lebensjahr (Stuhltest auf nicht sichtbares Blut im Stuhl)<br>
						<br>
						<strong>–&nbsp;EKG<br></strong><br>
						<strong>–&nbsp;Lungenfunktionstest</strong> (Spirometrie)<br>
						<br>
						<strong>–&nbsp;Langzeit-Blutdruckmessung<br></strong><br>
						<strong>–&nbsp;Langzeit-EKG<br></strong><br>
						<strong>–&nbsp;Belastungs-EKG</strong> (Ergometrie)<br>
						<br>
						<strong>–&nbsp;Ultraschall der Bauchorgane<br></strong><br>
						<strong>–&nbsp;Ultralschall der Hauptschlagader</strong> bei Männern ab dem 65. Lebensjahr
						(Screening der Bauchsorta zur
						Früherkennung von Bauchaortenaneurysmen "Ausbuchtung der Bauchschlagader")<br>
						<br>
						<strong>–&nbsp;Ultraschall der Schilddrüsen<br></strong><br>
						<strong>–&nbsp;Ultraschall des Brustkorbes<br></strong><br>
						<strong>–&nbsp;DMP (Disease-Management-Programme)</strong> für den Patienten mit den
						folgenden
						chronischen
						Erkrankungen:<br>
						<br>
						<em>&nbsp; &nbsp; &nbsp;- Asthma bronchiale</em><br>
						<em><br>
							&nbsp; &nbsp; &nbsp;- Diabetes mellitus Typ 2 (Zuckerkrankheit)</em><br>
						<em><br>
							&nbsp; &nbsp; &nbsp;- Koronare Herzkrankheit (KHK); (Erkrankung der
							Herzkranzgefäße)</em><br>
						<em><br>
							&nbsp; &nbsp; &nbsp;- Chronisch obstruktive Lungenerkrankung (COPD) (s.g.
							Raucherlunge)</em><br>
						<em><br>
							&nbsp; &nbsp; &nbsp;- Herzinsuffizienz (Herzschwäche)</em><br>
						<br>
						<strong>–</strong> Sowie <strong>Individuelle Gesundheitsleistungen (IGeL):</strong><br>
						<br>
						<em>&nbsp; &nbsp; &nbsp;- Berufstauglichkeits-Untersuchung</em><br>
						<em><br>
							&nbsp; &nbsp; &nbsp;- Reise-Impfberatung</em><br>
						<em><br>
							&nbsp; &nbsp; &nbsp;- Sporttauglichkeits-Untersuchung</em><br>
						<br>
					</p>
				</div>
			</div>
		</div>

		<!-- Privacy Page -->
		<div id="my-content-privacy">
			<div class="container my-3 p-4">
				<div class="row justify-content-center">
					<div class="h1 fs-1 fw-bolder p-2 text-center user-select-none">Datenschutz</div>
				</div>
			</div>
			<div class="container my-3 p-4">
				<div class="row justify-content-center user-select-none">
					<p>
						Wir freuen uns sehr über Ihr Interesse an unserem Unternehmen. Datenschutz hat einen
						besonders
						hohen Stellenwert für
						die Geschäftsleitung der Le-Mans-Praxis. Eine Nutzung der Internetseiten der Le-Mans-Praxis
						ist
						grundsätzlich ohne
						jede Angabe personenbezogener Daten möglich. Sofern eine betroffene Person besondere
						Services
						unseres Unternehmens
						über unsere Internetseite in Anspruch nehmen möchte, könnte jedoch eine Verarbeitung
						personenbezogener Daten
						erforderlich werden. Ist die Verarbeitung personenbezogener Daten erforderlich und besteht
						für
						eine solche
						Verarbeitung keine gesetzliche Grundlage, holen wir generell eine Einwilligung der
						betroffenen
						Person ein.
					</p>
					<p>
						Die Verarbeitung personenbezogener Daten, beispielsweise des Namens, der Anschrift,
						E-Mail-Adresse oder
						Telefonnummer einer betroffenen Person, erfolgt stets im Einklang mit der
						Datenschutz-Grundverordnung und in
						Übereinstimmung mit den für die Le-Mans-Praxis geltenden landesspezifischen
						Datenschutzbestimmungen. Mittels dieser
						Datenschutzerklärung möchte unser Unternehmen die Öffentlichkeit über Art, Umfang und Zweck
						der
						von uns erhobenen,
						genutzten und verarbeiteten personenbezogenen Daten informieren. Ferner werden betroffene
						Personen mittels dieser
						Datenschutzerklärung über die ihnen zustehenden Rechte aufgeklärt.
					</p>
					<p>
						Die Le-Mans-Praxis hat als für die Verarbeitung Verantwortlicher zahlreiche technische und
						organisatorische
						Maßnahmen umgesetzt, um einen möglichst lückenlosen Schutz der über diese Internetseite
						verarbeiteten
						personenbezogenen Daten sicherzustellen. Dennoch können Internetbasierte Datenübertragungen
						grundsätzlich
						Sicherheitslücken aufweisen, sodass ein absoluter Schutz nicht gewährleistet werden kann.
						Aus
						diesem Grund steht es
						jeder betroffenen Person frei, personenbezogene Daten auch auf alternativen Wegen,
						beispielsweise telefonisch, an
						uns zu übermitteln.
					</p>
					<h4>
						1. Begriffsbestimmungen
					</h4>
					<p>
						Die Datenschutzerklärung der Le-Mans-Praxis beruht auf den Begrifflichkeiten, die durch den
						Europäischen
						Richtlinien- und Verordnungsgeber beim Erlass der Datenschutz-Grundverordnung (DS-GVO)
						verwendet
						wurden. Unsere
						Datenschutzerklärung soll sowohl für die Öffentlichkeit als auch für unsere Kunden und
						Geschäftspartner einfach
						lesbar und verständlich sein. Um dies zu gewährleisten, möchten wir vorab die verwendeten
						Begrifflichkeiten
						erläutern.
					</p>
					<p>
						Wir verwenden in dieser Datenschutzerklärung unter anderem die folgenden Begriffe:
					</p>
					<ul style="list-style: none">
						<li>
							<h4>
								a) personenbezogene Daten
							</h4>
							<p>
								Personenbezogene Daten sind alle Informationen, die sich auf eine identifizierte
								oder
								identifizierbare
								natürliche Person (im Folgenden „betroffene Person“) beziehen. Als identifizierbar
								wird
								eine natürliche
								Person angesehen, die direkt oder indirekt, insbesondere mittels Zuordnung zu einer
								Kennung wie einem Namen,
								zu einer Kennnummer, zu Standortdaten, zu einer Online-Kennung oder zu einem oder
								mehreren besonderen
								Merkmalen, die Ausdruck der physischen, physiologischen, genetischen, psychischen,
								wirtschaftlichen,
								kulturellen oder sozialen Identität dieser natürlichen Person sind, identifiziert
								werden
								kann.
							</p>
						</li>
						<li>
							<h4>
								b) betroffene Person
							</h4>
							<p>
								Betroffene Person ist jede identifizierte oder identifizierbare natürliche Person,
								deren
								personenbezogene
								Daten von dem für die Verarbeitung Verantwortlichen verarbeitet werden.
							</p>
						</li>
						<li>
							<h4>
								c) Verarbeitung
							</h4>
							<p>
								Verarbeitung ist jeder mit oder ohne Hilfe automatisierter Verfahren ausgeführte
								Vorgang
								oder jede solche
								Vorgangsreihe im Zusammenhang mit personenbezogenen Daten wie das Erheben, das
								Erfassen,
								die Organisation,
								das Ordnen, die Speicherung, die Anpassung oder Veränderung, das Auslesen, das
								Abfragen,
								die Verwendung, die
								Offenlegung durch Übermittlung, Verbreitung oder eine andere Form der
								Bereitstellung,
								den Abgleich oder die
								Verknüpfung, die Einschränkung, das Löschen oder die Vernichtung.
							</p>
						</li>
						<li>
							<h4>
								d) Einschränkung der Verarbeitung
							</h4>
							<p>
								Einschränkung der Verarbeitung ist die Markierung gespeicherter personenbezogener
								Daten
								mit dem Ziel, ihre
								künftige Verarbeitung einzuschränken.
							</p>
						</li>
						<li>
							<h4>
								e) Profiling
							</h4>
							<p>
								Profiling ist jede Art der automatisierten Verarbeitung personenbezogener Daten, die
								darin besteht, dass
								diese personenbezogenen Daten verwendet werden, um bestimmte persönliche Aspekte,
								die
								sich auf eine
								natürliche Person beziehen, zu bewerten, insbesondere, um Aspekte bezüglich
								Arbeitsleistung,
								wirtschaftlicher Lage, Gesundheit, persönlicher Vorlieben, Interessen,
								Zuverlässigkeit,
								Verhalten,
								Aufenthaltsort oder Ortswechsel dieser natürlichen Person zu analysieren oder
								vorherzusagen.
							</p>
						</li>
						<li>
							<h4>
								f) Pseudonymisierung
							</h4>
							<p>
								Pseudonymisierung ist die Verarbeitung personenbezogener Daten in einer Weise, auf
								welche die
								personenbezogenen Daten ohne Hinzuziehung zusätzlicher Informationen nicht mehr
								einer
								spezifischen
								betroffenen Person zugeordnet werden können, sofern diese zusätzlichen Informationen
								gesondert aufbewahrt
								werden und technischen und organisatorischen Maßnahmen unterliegen, die
								gewährleisten,
								dass die
								personenbezogenen Daten nicht einer identifizierten oder identifizierbaren
								natürlichen
								Person zugewiesen
								werden.
							</p>
						</li>
						<li>
							<h4>
								g) Verantwortlicher oder für die Verarbeitung Verantwortlicher
							</h4>
							<p>
								Verantwortlicher oder für die Verarbeitung Verantwortlicher ist die natürliche oder
								juristische Person,
								Behörde, Einrichtung oder andere Stelle, die allein oder gemeinsam mit anderen über
								die
								Zwecke und Mittel
								der Verarbeitung von personenbezogenen Daten entscheidet. Sind die Zwecke und Mittel
								dieser Verarbeitung
								durch das Unionsrecht oder das Recht der Mitgliedstaaten vorgegeben, so kann der
								Verantwortliche
								beziehungsweise können die bestimmten Kriterien seiner Benennung nach dem
								Unionsrecht
								oder dem Recht der
								Mitgliedstaaten vorgesehen werden.
							</p>
						</li>
						<li>
							<h4>
								h) Auftragsverarbeiter
							</h4>
							<p>
								Auftragsverarbeiter ist eine natürliche oder juristische Person, Behörde,
								Einrichtung
								oder andere Stelle,
								die personenbezogene Daten im Auftrag des Verantwortlichen verarbeitet.
							</p>
						</li>
						<li>
							<h4>
								i) Empfänger
							</h4>
							<p>
								Empfänger ist eine natürliche oder juristische Person, Behörde, Einrichtung oder
								andere
								Stelle, der
								personenbezogene Daten offengelegt werden, unabhängig davon, ob es sich bei ihr um
								einen
								Dritten handelt
								oder nicht. Behörden, die im Rahmen eines bestimmten Untersuchungsauftrags nach dem
								Unionsrecht oder dem
								Recht der Mitgliedstaaten möglicherweise personenbezogene Daten erhalten, gelten
								jedoch
								nicht als Empfänger.
							</p>
						</li>
						<li>
							<h4>
								j) Dritter
							</h4>
							<p>
								Dritter ist eine natürliche oder juristische Person, Behörde, Einrichtung oder
								andere
								Stelle außer der
								betroffenen Person, dem Verantwortlichen, dem Auftragsverarbeiter und den Personen,
								die
								unter der
								unmittelbaren Verantwortung des Verantwortlichen oder des Auftragsverarbeiters
								befugt
								sind, die
								personenbezogenen Daten zu verarbeiten.
							</p>
						</li>
						<li>
							<h4>
								k) Einwilligung
							</h4>
							<p>
								Einwilligung ist jede von der betroffenen Person freiwillig für den bestimmten Fall
								in
								informierter Weise
								und unmissverständlich abgegebene Willensbekundung in Form einer Erklärung oder
								einer
								sonstigen eindeutigen
								bestätigenden Handlung, mit der die betroffene Person zu verstehen gibt, dass sie
								mit
								der Verarbeitung der
								sie betreffenden personenbezogenen Daten einverstanden ist.
							</p>
						</li>
					</ul>
					<h4>
						2. Name und Anschrift des für die Verarbeitung Verantwortlichen
					</h4>
					<p>
						Verantwortlicher im Sinne der Datenschutz-Grundverordnung, sonstiger in den Mitgliedstaaten
						der
						Europäischen Union
						geltenden Datenschutzgesetze und anderer Bestimmungen mit datenschutzrechtlichem Charakter
						ist
						die:
					</p>
					<p>
						Praxis Dr. Gabie Issa<br>
						Le-Mans-Wall 9<br>
						33098 Paderborn<br>
						Deutschland<br>
						Telefon: 05251-281331<br>
						Fax: 05251-6829234<br>
						E-Mail: <bdi id="privacy-email">Error decrypting email</bdi><br>
					</p>
					<h4>
						3. Erfassung von allgemeinen Daten und Informationen
					</h4>
					<p>
						Die Internetseite der Le-Mans-Praxis erfasst mit jedem Aufruf der Internetseite durch eine
						betroffene Person oder
						ein automatisiertes System eine Reihe von allgemeinen Daten und Informationen. Diese
						allgemeinen
						Daten und
						Informationen werden in den Logfiles des Servers gespeichert. Erfasst werden können die (1)
						verwendeten Browsertypen
						und Versionen, (2) das vom zugreifenden System verwendete Betriebssystem, (3) die
						Internetseite,
						von welcher ein
						zugreifendes System auf unsere Internetseite gelangt (sogenannte Referrer), (4) die
						Unterwebseiten, welche über ein
						zugreifendes System auf unserer Internetseite angesteuert werden, (5) das Datum und die
						Uhrzeit
						eines Zugriffs auf
						die Internetseite, (6) eine Internet-Protokoll-Adresse (IP-Adresse), (7) der
						Internet-Service-Provider des
						zugreifenden Systems und (8) sonstige ähnliche Daten und Informationen, die der
						Gefahrenabwehr
						im Falle von
						Angriffen auf unsere informationstechnologischen Systeme dienen.
					</p>
					<p>
						Bei der Nutzung dieser allgemeinen Daten und Informationen zieht die Le-Mans-Praxis keine
						Rückschlüsse auf die
						betroffene Person. Diese Informationen werden vielmehr benötigt, um (1) die Inhalte unserer
						Internetseite korrekt
						auszuliefern, (2) die Inhalte unserer Internetseite sowie die Werbung für diese zu
						optimieren,
						(3) die dauerhafte
						Funktionsfähigkeit unserer informationstechnologischen Systeme und der Technik unserer
						Internetseite zu
						gewährleisten sowie (4) um Strafverfolgungsbehörden im Falle eines Cyberangriffes die zur
						Strafverfolgung
						notwendigen Informationen bereitzustellen. Diese anonym erhobenen Daten und Informationen
						werden
						durch die
						Le-Mans-Praxis daher einerseits statistisch und ferner mit dem Ziel ausgewertet, den
						Datenschutz
						und die
						Datensicherheit in unserem Unternehmen zu erhöhen, um letztlich ein optimales Schutzniveau
						für
						die von uns
						verarbeiteten personenbezogenen Daten sicherzustellen. Die anonymen Daten der
						Server-Logfiles
						werden getrennt von
						allen durch eine betroffene Person angegebenen personenbezogenen Daten gespeichert.
					</p>
					<h4>
						4. Routinemäßige Löschung und Sperrung von personenbezogenen Daten
					</h4>
					<p>
						Der für die Verarbeitung Verantwortliche verarbeitet und speichert personenbezogene Daten
						der
						betroffenen Person nur
						für den Zeitraum, der zur Erreichung des Speicherungszwecks erforderlich ist oder sofern
						dies
						durch den Europäischen
						Richtlinien- und Verordnungsgeber oder einen anderen Gesetzgeber in Gesetzen oder
						Vorschriften,
						welchen der für die
						Verarbeitung Verantwortliche unterliegt, vorgesehen wurde.
					</p>
					<p>
						Entfällt der Speicherungszweck oder läuft eine vom Europäischen Richtlinien- und
						Verordnungsgeber oder einem anderen
						zuständigen Gesetzgeber vorgeschriebene Speicherfrist ab, werden die personenbezogenen Daten
						routinemäßig und
						entsprechend den gesetzlichen Vorschriften gesperrt oder gelöscht.
					</p>
					<h4>
						5. Rechte der betroffenen Person
					</h4>
					<ul style="list-style: none;">
						<li>
							<h4>
								a) Recht auf Bestätigung
							</h4>
							<p>
								Jede betroffene Person hat das vom Europäischen Richtlinien- und Verordnungsgeber
								eingeräumte Recht, von dem
								für die Verarbeitung Verantwortlichen eine Bestätigung darüber zu verlangen, ob sie
								betreffende
								personenbezogene Daten verarbeitet werden. Möchte eine betroffene Person dieses
								Bestätigungsrecht in
								Anspruch nehmen, kann sie sich hierzu jederzeit an einen Mitarbeiter des für die
								Verarbeitung
								Verantwortlichen wenden.
							</p>
						</li>
						<li>
							<h4>
								b) Recht auf Auskunft
							</h4>
							<p>
								Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom
								Europäischen Richtlinien-
								und Verordnungsgeber gewährte Recht, jederzeit von dem für die Verarbeitung
								Verantwortlichen unentgeltliche
								Auskunft über die zu seiner Person gespeicherten personenbezogenen Daten und eine
								Kopie
								dieser Auskunft zu
								erhalten. Ferner hat der Europäische Richtlinien- und Verordnungsgeber der
								betroffenen
								Person Auskunft über
								folgende Informationen zugestanden:
							</p>
							<ul style="list-style: square;">
								<li>die Verarbeitungszwecke
								</li>
								<li>die Kategorien personenbezogener Daten, die verarbeitet werden
								</li>
								<li>die Empfänger oder Kategorien von Empfängern, gegenüber denen die
									personenbezogenen
									Daten offengelegt
									worden sind oder noch offengelegt werden, insbesondere bei Empfängern in
									Drittländern oder bei
									internationalen Organisationen
								</li>
								<li>falls möglich die geplante Dauer, für die die personenbezogenen Daten
									gespeichert
									werden, oder, falls
									dies nicht möglich ist, die Kriterien für die Festlegung dieser Dauer
								</li>
								<li>das Bestehen eines Rechts auf Berichtigung oder Löschung der sie betreffenden
									personenbezogenen Daten
									oder auf Einschränkung der Verarbeitung durch den Verantwortlichen oder eines
									Widerspruchsrechts gegen
									diese Verarbeitung
								</li>
								<li>das Bestehen eines Beschwerderechts bei einer Aufsichtsbehörde
								</li>
								<li>wenn die personenbezogenen Daten nicht bei der betroffenen Person erhoben
									werden:
									Alle verfügbaren
									Informationen über die Herkunft der Daten
								</li>
								<li>das Bestehen einer automatisierten Entscheidungsfindung einschließlich Profiling
									gemäß Artikel 22 Abs.1
									und 4 DS-GVO und — zumindest in diesen Fällen — aussagekräftige Informationen
									über
									die involvierte Logik
									sowie die Tragweite und die angestrebten Auswirkungen einer derartigen
									Verarbeitung
									für die betroffene
									Person
								</li>
							</ul>
							<p>
								Ferner steht der betroffenen Person ein Auskunftsrecht darüber zu, ob
								personenbezogene
								Daten an ein
								Drittland oder an eine internationale Organisation übermittelt wurden. Sofern dies
								der
								Fall ist, so steht
								der betroffenen Person im Übrigen das Recht zu, Auskunft über die geeigneten
								Garantien
								im Zusammenhang mit
								der Übermittlung zu erhalten.
							</p>
							<p>
								Möchte eine betroffene Person dieses Auskunftsrecht in Anspruch nehmen, kann sie
								sich
								hierzu jederzeit an
								einen Mitarbeiter des für die Verarbeitung Verantwortlichen wenden.
							</p>
						</li>
						<li>
							<h4>
								c) Recht auf Berichtigung
							</h4>
							<p>
								Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom
								Europäischen Richtlinien-
								und Verordnungsgeber gewährte Recht, die unverzügliche Berichtigung sie betreffender
								unrichtiger
								personenbezogener Daten zu verlangen. Ferner steht der betroffenen Person das Recht
								zu,
								unter
								Berücksichtigung der Zwecke der Verarbeitung, die Vervollständigung unvollständiger
								personenbezogener Daten
								— auch mittels einer ergänzenden Erklärung — zu verlangen.
							</p>
							<p>
								Möchte eine betroffene Person dieses Berichtigungsrecht in Anspruch nehmen, kann sie
								sich hierzu jederzeit
								an einen Mitarbeiter des für die Verarbeitung Verantwortlichen wenden.
							</p>
						</li>
						<li>
							<h4>
								d) Recht auf Löschung (Recht auf Vergessen werden)
							</h4>
							<p>
								Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom
								Europäischen Richtlinien-
								und Verordnungsgeber gewährte Recht, von dem Verantwortlichen zu verlangen, dass die
								sie
								betreffenden
								personenbezogenen Daten unverzüglich gelöscht werden, sofern einer der folgenden
								Gründe
								zutrifft und soweit
								die Verarbeitung nicht erforderlich ist:
							</p>
							<ul style="list-style: square;">
								<li>Die personenbezogenen Daten wurden für solche Zwecke erhoben oder auf sonstige
									Weise
									verarbeitet, für
									welche sie nicht mehr notwendig sind.
								</li>
								<li>Die betroffene Person widerruft ihre Einwilligung, auf die sich die Verarbeitung
									gemäß Art. 6 Abs. 1
									Buchstabe a DS-GVO oder Art. 9 Abs. 2 Buchstabe a DS-GVO stützte, und es fehlt
									an
									einer anderweitigen
									Rechtsgrundlage für die Verarbeitung.
								</li>
								<li>Die betroffene Person legt gemäß Art. 21 Abs. 1 DS-GVO Widerspruch gegen die
									Verarbeitung ein, und es
									liegen keine vorrangigen berechtigten Gründe für die Verarbeitung vor, oder die
									betroffene Person legt
									gemäß Art. 21 Abs. 2 DS-GVO Widerspruch gegen die Verarbeitung ein.
								</li>
								<li>Die personenbezogenen Daten wurden unrechtmäßig verarbeitet.
								</li>
								<li>Die Löschung der personenbezogenen Daten ist zur Erfüllung einer rechtlichen
									Verpflichtung nach dem
									Unionsrecht oder dem Recht der Mitgliedstaaten erforderlich, dem der
									Verantwortliche
									unterliegt.
								</li>
								<li>Die personenbezogenen Daten wurden in Bezug auf angebotene Dienste der
									Informationsgesellschaft gemäß
									Art. 8 Abs. 1 DS-GVO erhoben.
								</li>
							</ul>
							<p>
								Sofern einer der oben genannten Gründe zutrifft und eine betroffene Person die
								Löschung
								von
								personenbezogenen Daten, die bei der Le-Mans-Praxis gespeichert sind, veranlassen
								möchte, kann sie sich
								hierzu jederzeit an einen Mitarbeiter des für die Verarbeitung Verantwortlichen
								wenden.
								Der Mitarbeiter der
								Le-Mans-Praxis wird veranlassen, dass dem Löschverlangen unverzüglich nachgekommen
								wird.
							</p>
							<p>
								Wurden die personenbezogenen Daten von der Le-Mans-Praxis öffentlich gemacht und ist
								unser Unternehmen als
								Verantwortlicher gemäß Art. 17 Abs. 1 DS-GVO zur Löschung der personenbezogenen
								Daten
								verpflichtet, so
								trifft die Le-Mans-Praxis unter Berücksichtigung der verfügbaren Technologie und der
								Implementierungskosten
								angemessene Maßnahmen, auch technischer Art, um andere für die Datenverarbeitung
								Verantwortliche, welche die
								veröffentlichten personenbezogenen Daten verarbeiten, darüber in Kenntnis zu setzen,
								dass die betroffene
								Person von diesen anderen für die Datenverarbeitung Verantwortlichen die Löschung
								sämtlicher Links zu diesen
								personenbezogenen Daten oder von Kopien oder Replikationen dieser personenbezogenen
								Daten verlangt hat,
								soweit die Verarbeitung nicht erforderlich ist. Der Mitarbeiter der Le-Mans-Praxis
								wird
								im Einzelfall das
								Notwendige veranlassen.
							</p>
						</li>
						<li>
							<h4>
								e) Recht auf Einschränkung der Verarbeitung
							</h4>
							<p>
								Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom
								Europäischen Richtlinien-
								und Verordnungsgeber gewährte Recht, von dem Verantwortlichen die Einschränkung der
								Verarbeitung zu
								verlangen, wenn eine der folgenden Voraussetzungen gegeben ist:
							</p>
							<ul style="list-style: square;">
								<li>Die Richtigkeit der personenbezogenen Daten wird von der betroffenen Person
									bestritten, und zwar für
									eine Dauer, die es dem Verantwortlichen ermöglicht, die Richtigkeit der
									personenbezogenen Daten zu
									überprüfen.
								</li>
								<li>Die Verarbeitung ist unrechtmäßig, die betroffene Person lehnt die Löschung der
									personenbezogenen Daten
									ab und verlangt stattdessen die Einschränkung der Nutzung der personenbezogenen
									Daten.
								</li>
								<li>Der Verantwortliche benötigt die personenbezogenen Daten für die Zwecke der
									Verarbeitung nicht länger,
									die betroffene Person benötigt sie jedoch zur Geltendmachung, Ausübung oder
									Verteidigung von
									Rechtsansprüchen.
								</li>
								<li>Die betroffene Person hat Widerspruch gegen die Verarbeitung gem. Art. 21 Abs. 1
									DS-GVO eingelegt und es
									steht noch nicht fest, ob die berechtigten Gründe des Verantwortlichen gegenüber
									denen der betroffenen
									Person überwiegen.
								</li>
							</ul>
							<p>
								Sofern eine der oben genannten Voraussetzungen gegeben ist und eine betroffene
								Person
								die Einschränkung von
								personenbezogenen Daten, die bei der Le-Mans-Praxis gespeichert sind, verlangen
								möchte,
								kann sie sich hierzu
								jederzeit an einen Mitarbeiter des für die Verarbeitung Verantwortlichen wenden. Der
								Mitarbeiter der
								Le-Mans-Praxis wird die Einschränkung der Verarbeitung veranlassen.
							</p>
						</li>
						<li>
							<h4>
								f) Recht auf Datenübertragbarkeit
							</h4>
							<p>
								Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom
								Europäischen Richtlinien-
								und Verordnungsgeber gewährte Recht, die sie betreffenden personenbezogenen Daten,
								welche durch die
								betroffene Person einem Verantwortlichen bereitgestellt wurden, in einem
								strukturierten,
								gängigen und
								maschinenlesbaren Format zu erhalten. Sie hat außerdem das Recht, diese Daten einem
								anderen Verantwortlichen
								ohne Behinderung durch den Verantwortlichen, dem die personenbezogenen Daten
								bereitgestellt wurden, zu
								übermitteln, sofern die Verarbeitung auf der Einwilligung gemäß Art. 6 Abs. 1
								Buchstabe
								a DS-GVO oder Art. 9
								Abs. 2 Buchstabe a DS-GVO oder auf einem Vertrag gemäß Art. 6 Abs. 1 Buchstabe b
								DS-GVO
								beruht und die
								Verarbeitung mithilfe automatisierter Verfahren erfolgt, sofern die Verarbeitung
								nicht
								für die Wahrnehmung
								einer Aufgabe erforderlich ist, die im öffentlichen Interesse liegt oder in Ausübung
								öffentlicher Gewalt
								erfolgt, welche dem Verantwortlichen übertragen wurde.
							</p>
							<p>
								Ferner hat die betroffene Person bei der Ausübung ihres Rechts auf
								Datenübertragbarkeit
								gemäß Art. 20 Abs. 1
								DS-GVO das Recht, zu erwirken, dass die personenbezogenen Daten direkt von einem
								Verantwortlichen an einen
								anderen Verantwortlichen übermittelt werden, soweit dies technisch machbar ist und
								sofern hiervon nicht die
								Rechte und Freiheiten anderer Personen beeinträchtigt werden.
							</p>
							<p>
								Zur Geltendmachung des Rechts auf Datenübertragbarkeit kann sich die betroffene
								Person
								jederzeit an einen
								Mitarbeiter der Le-Mans-Praxis wenden.
							</p>
						</li>
						<li>
							<h4>
								g) Recht auf Widerspruch
							</h4>
							<p>
								Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom
								Europäischen Richtlinien-
								und Verordnungsgeber gewährte Recht, aus Gründen, die sich aus ihrer besonderen
								Situation ergeben, jederzeit
								gegen die Verarbeitung sie betreffender personenbezogener Daten, die aufgrund von
								Art. 6
								Abs. 1 Buchstaben e
								oder f DS-GVO erfolgt, Widerspruch einzulegen. Dies gilt auch für ein auf diese
								Bestimmungen gestütztes
								Profiling.
							</p>
							<p>
								Die Le-Mans-Praxis verarbeitet die personenbezogenen Daten im Falle des Widerspruchs
								nicht mehr, es sei
								denn, wir können zwingende schutzwürdige Gründe für die Verarbeitung nachweisen, die
								den
								Interessen, Rechten
								und Freiheiten der betroffenen Person überwiegen, oder die Verarbeitung dient der
								Geltendmachung, Ausübung
								oder Verteidigung von Rechtsansprüchen.
							</p>
							<p>
								Verarbeitet die Le-Mans-Praxis personenbezogene Daten, um Direktwerbung zu
								betreiben, so
								hat die betroffene
								Person das Recht, jederzeit Widerspruch gegen die Verarbeitung der personenbezogenen
								Daten zum Zwecke
								derartiger Werbung einzulegen. Dies gilt auch für das Profiling, soweit es mit
								solcher
								Direktwerbung in
								Verbindung steht. Widerspricht die betroffene Person gegenüber der Le-Mans-Praxis
								der
								Verarbeitung für
								Zwecke der Direktwerbung, so wird die Le-Mans-Praxis die personenbezogenen Daten
								nicht
								mehr für diese Zwecke
								verarbeiten.
							</p>
							<p>
								Zudem hat die betroffene Person das Recht, aus Gründen, die sich aus ihrer
								besonderen
								Situation ergeben,
								gegen die sie betreffende Verarbeitung personenbezogener Daten, die bei der
								Le-Mans-Praxis zu
								wissenschaftlichen oder historischen Forschungszwecken oder zu statistischen Zwecken
								gemäß Art. 89 Abs. 1
								DS-GVO erfolgen, Widerspruch einzulegen, es sei denn, eine solche Verarbeitung ist
								zur
								Erfüllung einer im
								öffentlichen Interesse liegenden Aufgabe erforderlich.
							</p>
							<p>
								Zur Ausübung des Rechts auf Widerspruch kann sich die betroffene Person direkt an
								jeden
								Mitarbeiter der
								Le-Mans-Praxis oder einen anderen Mitarbeiter wenden. Der betroffenen Person steht
								es
								ferner frei, im
								Zusammenhang mit der Nutzung von Diensten der Informationsgesellschaft, ungeachtet
								der
								Richtlinie
								2002/58/EG, ihr Widerspruchsrecht mittels automatisierter Verfahren auszuüben, bei
								denen
								technische
								Spezifikationen verwendet werden.
							</p>
						</li>
						<li>
							<h4>
								h) Automatisierte Entscheidungen im Einzelfall einschließlich Profiling
							</h4>
							<p>
								Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom
								Europäischen Richtlinien-
								und Verordnungsgeber gewährte Recht, nicht einer ausschließlich auf einer
								automatisierten Verarbeitung —
								einschließlich Profiling — beruhenden Entscheidung unterworfen zu werden, die ihr
								gegenüber rechtliche
								Wirkung entfaltet oder sie in ähnlicher Weise erheblich beeinträchtigt, sofern die
								Entscheidung (1) nicht
								für den Abschluss oder die Erfüllung eines Vertrags zwischen der betroffenen Person
								und
								dem Verantwortlichen
								erforderlich ist, oder (2) aufgrund von Rechtsvorschriften der Union oder der
								Mitgliedstaaten, denen der
								Verantwortliche unterliegt, zulässig ist und diese Rechtsvorschriften angemessene
								Maßnahmen zur Wahrung der
								Rechte und Freiheiten sowie der berechtigten Interessen der betroffenen Person
								enthalten
								oder (3) mit
								ausdrücklicher Einwilligung der betroffenen Person erfolgt.
							</p>
							<p>
								Ist die Entscheidung (1) für den Abschluss oder die Erfüllung eines Vertrags
								zwischen
								der betroffenen Person
								und dem Verantwortlichen erforderlich oder (2) erfolgt sie mit ausdrücklicher
								Einwilligung der betroffenen
								Person, trifft die Le-Mans-Praxis angemessene Maßnahmen, um die Rechte und
								Freiheiten
								sowie die berechtigten
								Interessen der betroffenen Person zu wahren, wozu mindestens das Recht auf Erwirkung
								des
								Eingreifens einer
								Person seitens des Verantwortlichen, auf Darlegung des eigenen Standpunkts und auf
								Anfechtung der
								Entscheidung gehört.
							</p>
							<p>
								Möchte die betroffene Person Rechte mit Bezug auf automatisierte Entscheidungen
								geltend
								machen, kann sie
								sich hierzu jederzeit an einen Mitarbeiter des für die Verarbeitung Verantwortlichen
								wenden.
							</p>
						</li>
						<li>
							<h4>
								i) Recht auf Widerruf einer datenschutzrechtlichen Einwilligung
							</h4>
							<p>
								Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom
								Europäischen Richtlinien-
								und Verordnungsgeber gewährte Recht, eine Einwilligung zur Verarbeitung
								personenbezogener Daten jederzeit zu
								widerrufen.
							</p>
							<p>
								Möchte die betroffene Person ihr Recht auf Widerruf einer Einwilligung geltend
								machen,
								kann sie sich hierzu
								jederzeit an einen Mitarbeiter des für die Verarbeitung Verantwortlichen wenden.
							</p>
						</li>
					</ul>
					<h4>
						6. Rechtsgrundlage der Verarbeitung
					</h4>
					<p>
						Art. 6 I lit. a DS-GVO dient unserem Unternehmen als Rechtsgrundlage für
						Verarbeitungsvorgänge,
						bei denen wir eine
						Einwilligung für einen bestimmten Verarbeitungszweck einholen. Ist die Verarbeitung
						personenbezogener Daten zur
						Erfüllung eines Vertrags, dessen Vertragspartei die betroffene Person ist, erforderlich, wie
						dies beispielsweise bei
						Verarbeitungsvorgängen der Fall ist, die für eine Lieferung von Waren oder die Erbringung
						einer
						sonstigen Leistung
						oder Gegenleistung notwendig sind, so beruht die Verarbeitung auf Art. 6 I lit. b DS-GVO.
						Gleiches gilt für solche
						Verarbeitungsvorgänge die zur Durchführung vorvertraglicher Maßnahmen erforderlich sind,
						etwa in
						Fällen von Anfragen
						zur unseren Produkten oder Leistungen. Unterliegt unser Unternehmen einer rechtlichen
						Verpflichtung durch welche
						eine Verarbeitung von personenbezogenen Daten erforderlich wird, wie beispielsweise zur
						Erfüllung steuerlicher
						Pflichten, so basiert die Verarbeitung auf Art. 6 I lit. c DS-GVO. In seltenen Fällen könnte
						die
						Verarbeitung von
						personenbezogenen Daten erforderlich werden, um lebenswichtige Interessen der betroffenen
						Person
						oder einer anderen
						natürlichen Person zu schützen. Dies wäre beispielsweise der Fall, wenn ein Besucher in
						unserem
						Betrieb verletzt
						werden würde und daraufhin sein Name, sein Alter, seine Krankenkassendaten oder sonstige
						lebenswichtige
						Informationen an einen Arzt, ein Krankenhaus oder sonstige Dritte weitergegeben werden
						müssten.
						Dann würde die
						Verarbeitung auf Art. 6 I lit. d DS-GVO beruhen. Letztlich könnten Verarbeitungsvorgänge auf
						Art. 6 I lit. f DS-GVO
						beruhen. Auf dieser Rechtsgrundlage basieren Verarbeitungsvorgänge, die von keiner der
						vorgenannten Rechtsgrundlagen
						erfasst werden, wenn die Verarbeitung zur Wahrung eines berechtigten Interesses unseres
						Unternehmens oder eines
						Dritten erforderlich ist, sofern die Interessen, Grundrechte und Grundfreiheiten des
						Betroffenen
						nicht überwiegen.
						Solche Verarbeitungsvorgänge sind uns insbesondere deshalb gestattet, weil sie durch den
						Europäischen Gesetzgeber
						besonders erwähnt wurden. Er vertrat insoweit die Auffassung, dass ein berechtigtes
						Interesse
						anzunehmen sein
						könnte, wenn die betroffene Person ein Kunde des Verantwortlichen ist (Erwägungsgrund 47
						Satz 2
						DS-GVO).
					</p>
					<h4>
						7. Berechtigte Interessen an der Verarbeitung, die von dem Verantwortlichen oder einem
						Dritten
						verfolgt werden
					</h4>
					<p>
						Basiert die Verarbeitung personenbezogener Daten auf Artikel 6 I lit. f DS-GVO ist unser
						berechtigtes Interesse die
						Durchführung unserer Geschäftstätigkeit zugunsten des Wohlergehens all unserer Mitarbeiter
						und
						unserer
						Anteilseigner.
					</p>
					<h4>
						8. Dauer, für die die personenbezogenen Daten gespeichert werden
					</h4>
					<p>
						Das Kriterium für die Dauer der Speicherung von personenbezogenen Daten ist die jeweilige
						gesetzliche
						Aufbewahrungsfrist. Nach Ablauf der Frist werden die entsprechenden Daten routinemäßig
						gelöscht,
						sofern sie nicht
						mehr zur Vertragserfüllung oder Vertragsanbahnung erforderlich sind.
					</p>
					<h4>
						9. Gesetzliche oder vertragliche Vorschriften zur Bereitstellung der personenbezogenen
						Daten;
						Erforderlichkeit für
						den Vertragsabschluss; Verpflichtung der betroffenen Person, die personenbezogenen Daten
						bereitzustellen; mögliche
						Folgen der Nichtbereitstellung
					</h4>
					<p>
						Wir klären Sie darüber auf, dass die Bereitstellung personenbezogener Daten zum Teil
						gesetzlich
						vorgeschrieben ist
						(z.B. Steuervorschriften) oder sich auch aus vertraglichen Regelungen (z.B. Angaben zum
						Vertragspartner) ergeben
						kann. Mitunter kann es zu einem Vertragsschluss erforderlich sein, dass eine betroffene
						Person
						uns personenbezogene
						Daten zur Verfügung stellt, die in der Folge durch uns verarbeitet werden müssen. Die
						betroffene
						Person ist
						beispielsweise verpflichtet uns personenbezogene Daten bereitzustellen, wenn unser
						Unternehmen
						mit ihr einen Vertrag
						abschließt. Eine Nichtbereitstellung der personenbezogenen Daten hätte zur Folge, dass der
						Vertrag mit dem
						Betroffenen nicht geschlossen werden könnte. Vor einer Bereitstellung personenbezogener
						Daten
						durch den Betroffenen
						muss sich der Betroffene an einen unserer Mitarbeiter wenden. Unser Mitarbeiter klärt den
						Betroffenen
						einzelfallbezogen darüber auf, ob die Bereitstellung der personenbezogenen Daten gesetzlich
						oder
						vertraglich
						vorgeschrieben oder für den Vertragsabschluss erforderlich ist, ob eine Verpflichtung
						besteht,
						die personenbezogenen
						Daten bereitzustellen, und welche Folgen die Nichtbereitstellung der personenbezogenen Daten
						hätte.
					</p>
					<h4>
						10. Bestehen einer automatisierten Entscheidungsfindung
					</h4>
					<p>
						Als verantwortungsbewusstes Unternehmen verzichten wir auf eine automatische
						Entscheidungsfindung oder ein
						Profiling.
					</p>
					<p>
						Diese Datenschutzerklärung wurde durch den Datenschutzerklärungs-Generator der DGD Deutsche
						Gesellschaft für
						Datenschutz GmbH, die als <a onclick="window.open('https://dg-datenschutz.de/datenschutz-dienstleistungen/externer-datenschutzbeauftragter' , '_blank')">Externer
							Datenschutzbeauftragter Bayern</a> tätig ist, in
						Kooperation
						mit dem <a onclick="window.open('https://www.wbs-law.de' , '_blank')">Datenschutz Anwalt
							Christian
							Solmecke</a> erstellt.
					</p>
					<!--
                    <h4>
                        0. Cookies
                    </h4>
                    <p>
                        Die Internetseiten der Le-Mans-Praxis verwenden Cookies. Cookies sind Textdateien, welche
                        über einen Internetbrowser auf einem Computersystem abgelegt und gespeichert werden.
                    </p>
                    <p>
                        Zahlreiche Internetseiten und Server verwenden Cookies. Viele Cookies enthalten eine
                        sogenannte Cookie-ID. Eine Cookie-ID ist eine eindeutige Kennung des Cookies. Sie besteht
                        aus einer Zeichenfolge, durch welche Internetseiten und Server dem konkreten Internetbrowser
                        zugeordnet werden können, in dem das Cookie gespeichert wurde. Dies ermöglicht es den
                        besuchten Internetseiten und Servern, den individuellen Browser der betroffenen Person von
                        anderen Internetbrowsern, die andere Cookies enthalten, zu unterscheiden. Ein bestimmter
                        Internetbrowser kann über die eindeutige Cookie-ID wiedererkannt und identifiziert werden.
                    </p>
                    <p>
                        Durch den Einsatz von Cookies kann die Le-Mans-Praxis den Nutzern dieser Internetseite
                        nutzerfreundlichere Services bereitstellen, die ohne die Cookie-Setzung nicht möglich wären.
                    </p>
                    <p>
                        Mittels eines Cookies können die Informationen und Angebote auf unserer Internetseite im
                        Sinne des Benutzers optimiert werden. Cookies ermöglichen uns, wie bereits erwähnt, die
                        Benutzer unserer Internetseite wiederzuerkennen. Zweck dieser Wiedererkennung ist es, den
                        Nutzern die Verwendung unserer Internetseite zu erleichtern. Der Benutzer einer
                        Internetseite, die Cookies verwendet, muss beispielsweise nicht bei jedem Besuch der
                        Internetseite erneut seine Zugangsdaten eingeben, weil dies von der Internetseite und dem
                        auf dem Computersystem des Benutzers abgelegten Cookie übernommen wird. Ein weiteres
                        Beispiel ist das Cookie eines Warenkorbes im Online-Shop. Der Online-Shop merkt sich die
                        Artikel, die ein Kunde in den virtuellen Warenkorb gelegt hat, über ein Cookie.
                    </p>
                    <p>
                        Die betroffene Person kann die Setzung von Cookies durch unsere Internetseite jederzeit
                        mittels einer entsprechenden Einstellung des genutzten Internetbrowsers verhindern und damit
                        der Setzung von Cookies dauerhaft widersprechen. Ferner können bereits gesetzte Cookies
                        jederzeit über einen Internetbrowser oder andere Softwareprogramme gelöscht werden. Dies ist
                        in allen gängigen Internetbrowsern möglich. Deaktiviert die betroffene Person die Setzung
                        von Cookies in dem genutzten Internetbrowser, sind unter Umständen nicht alle Funktionen
                        unserer Internetseite vollumfänglich nutzbar.
                    </p>

                    <h4>
                        0. Datenschutzbestimmungen zu Einsatz und Verwendung von Google Analytics (mit
                        Anonymisierungsfunktion)
                    </h4>
                    <p>
                        Der für die Verarbeitung Verantwortliche hat auf dieser Internetseite die Komponente Google
                        Analytics (mit Anonymisierungsfunktion) integriert. Google Analytics ist ein
                        Web-Analyse-Dienst. Web-Analyse ist die Erhebung, Sammlung und Auswertung von Daten über das
                        Verhalten von Besuchern von Internetseiten. Ein Web-Analyse-Dienst erfasst unter anderem
                        Daten darüber, von welcher Internetseite eine betroffene Person auf eine Internetseite
                        gekommen ist (sogenannte Referrer), auf welche Unterseiten der Internetseite zugegriffen
                        oder wie oft und für welche Verweildauer eine Unterseite betrachtet wurde. Eine Web-Analyse
                        wird überwiegend zur Optimierung einer Internetseite und zur Kosten-Nutzen-Analyse von
                        Internetwerbung eingesetzt.
                    </p>
                    <p>
                        Betreibergesellschaft der Google-Analytics-Komponente ist die Google Ireland Limited, Gordon
                        House, Barrow Street, Dublin, D04 E5W5, Ireland.
                    </p>
                    <p>
                        Der für die Verarbeitung Verantwortliche verwendet für die Web-Analyse über Google Analytics
                        den Zusatz "_gat._anonymizeIp". Mittels dieses Zusatzes wird die IP-Adresse des
                        Internetanschlusses der betroffenen Person von Google gekürzt und anonymisiert, wenn der
                        Zugriff auf unsere Internetseiten aus einem Mitgliedstaat der Europäischen Union oder aus
                        einem anderen Vertragsstaat des Abkommens über den Europäischen Wirtschaftsraum erfolgt.
                    </p>
                    <p>
                        Der Zweck der Google-Analytics-Komponente ist die Analyse der Besucherströme auf unserer
                        Internetseite. Google nutzt die gewonnenen Daten und Informationen unter anderem dazu, die
                        Nutzung unserer Internetseite auszuwerten, um für uns Online-Reports, welche die Aktivitäten
                        auf unseren Internetseiten aufzeigen, zusammenzustellen, und um weitere mit der Nutzung
                        unserer Internetseite in Verbindung stehende Dienstleistungen zu erbringen.
                    </p>
                    <p>
                        Google Analytics setzt ein Cookie auf dem informationstechnologischen System der betroffenen
                        Person. Was Cookies sind, wurde oben bereits erläutert. Mit Setzung des Cookies wird Google
                        eine Analyse der Benutzung unserer Internetseite ermöglicht. Durch jeden Aufruf einer der
                        Einzelseiten dieser Internetseite, die durch den für die Verarbeitung Verantwortlichen
                        betrieben wird und auf welcher eine Google-Analytics-Komponente integriert wurde, wird der
                        Internetbrowser auf dem informationstechnologischen System der betroffenen Person
                        automatisch durch die jeweilige Google-Analytics-Komponente veranlasst, Daten zum Zwecke der
                        Online-Analyse an Google zu übermitteln. Im Rahmen dieses technischen Verfahrens erhält
                        Google Kenntnis über personenbezogene Daten, wie der IP-Adresse der betroffenen Person, die
                        Google unter anderem dazu dienen, die Herkunft der Besucher und Klicks nachzuvollziehen und
                        in der Folge Provisionsabrechnungen zu ermöglichen.
                    </p>
                    <p>
                        Mittels des Cookies werden personenbezogene Informationen, beispielsweise die Zugriffszeit,
                        der Ort, von welchem ein Zugriff ausging und die Häufigkeit der Besuche unserer
                        Internetseite durch die betroffene Person, gespeichert. Bei jedem Besuch unserer
                        Internetseiten werden diese personenbezogenen Daten, einschließlich der IP-Adresse des von
                        der betroffenen Person genutzten Internetanschlusses, an Google in den Vereinigten Staaten
                        von Amerika übertragen. Diese personenbezogenen Daten werden durch Google in den Vereinigten
                        Staaten von Amerika gespeichert. Google gibt diese über das technische Verfahren erhobenen
                        personenbezogenen Daten unter Umständen an Dritte weiter.
                    </p>
                    <p>
                        Die betroffene Person kann die Setzung von Cookies durch unsere Internetseite, wie oben
                        bereits dargestellt, jederzeit mittels einer entsprechenden Einstellung des genutzten
                        Internetbrowsers verhindern und damit der Setzung von Cookies dauerhaft widersprechen. Eine
                        solche Einstellung des genutzten Internetbrowsers würde auch verhindern, dass Google ein
                        Cookie auf dem informationstechnologischen System der betroffenen Person setzt. Zudem kann
                        ein von Google Analytics bereits gesetzter Cookie jederzeit über den Internetbrowser oder
                        andere Softwareprogramme gelöscht werden.
                    </p>
                    <p>
                        Ferner besteht für die betroffene Person die Möglichkeit, einer Erfassung der durch Google
                        Analytics erzeugten, auf eine Nutzung dieser Internetseite bezogenen Daten sowie der
                        Verarbeitung dieser Daten durch Google zu widersprechen und eine solche zu verhindern.
                        Hierzu muss die betroffene Person ein Browser-Add-On unter dem Link
                        https://tools.google.com/dlpage/gaoptout herunterladen und installieren. Dieses
                        Browser-Add-On teilt Google Analytics über JavaScript mit, dass keine Daten und
                        Informationen zu den Besuchen von Internetseiten an Google Analytics übermittelt werden
                        dürfen. Die Installation des Browser-Add-Ons wird von Google als Widerspruch gewertet. Wird
                        das informationstechnologische System der betroffenen Person zu einem späteren Zeitpunkt
                        gelöscht, formatiert oder neu installiert, muss durch die betroffene Person eine erneute
                        Installation des Browser-Add-Ons erfolgen, um Google Analytics zu deaktivieren. Sofern das
                        Browser-Add-On durch die betroffene Person oder einer anderen Person, die ihrem Machtbereich
                        zuzurechnen ist, deinstalliert oder deaktiviert wird, besteht die Möglichkeit der
                        Neuinstallation oder der erneuten Aktivierung des Browser-Add-Ons.
                    </p>
                    <p>
                        Weitere Informationen und die geltenden Datenschutzbestimmungen von Google können unter
                        https://www.google.de/intl/de/policies/privacy/ und unter
                        http://www.google.com/analytics/terms/de.html abgerufen werden. Google Analytics wird unter
                        diesem Link https://www.google.com/intl/de_de/analytics/ genauer erläutert.
                    </p>
                    -->
				</div>
			</div>
		</div>

		<!-- Imprint -->
		<div id="my-content-imprint">
			<div class="container my-3 p-4">
				<div class="row justify-content-center">
					<div class="h1 fs-1 fw-bolder p-2 text-center user-select-none">Impressum</div>
				</div>
			</div>
			<div class="container my-3 p-4">
				<div class="row justify-content-center user-select-none">
					<h4>Angaben gemäß §5 TMG:</h4>
					<p>
						Dr. Gabie Issa<br>
						Facharzt für Innere Medizin<br>
						Le-Mans-Wall 9<br>
						33098 Paderborn<br>
						Telefon: 05251-281331<br>
						Fax: 05251-6829234<br>
						E-Mail: <bdi id="impressum-email">Error decrypting email</bdi><br>
					</p>

					<h4>Gesetzliche Berufsbezeichnungen:</h4>
					<p>
						Facharzt für Innere Medizin<br>
						Berufsbezeichnung verliehen in der Bundesrepublik Deutschland durch die Ärztekammer
						Westfalen-Lippe.
					</p>
					<h4>Zuständige Aufsichtsbehörde:</h4>
					<p>
						Kassenärztliche Vereinigung Westfalen-Lippe<br>
						Robert-Schimrigk-Str. 4-6<br>
						44141 Dortmund<br>
						Telefon: 0231-9432-0<br>
						Fax: 0231-9432-5555<br>
						E-Mail: kvinfo@kvwl.de<br>
					</p>
					<h4>Ärztekammer:</h4>
					<p>
						Ärztekammer Westfalen-Lippe<br>
						Gartenstr. 210-214<br>
						41847 Münster<br>
						Telefon: 0251-929-0<br>
						Fax 0251-929-2999<br>
						E-Mail: posteingang@aekwl.de<br>
					</p>
					<h4>Berufsordnung der Ärztekammer Westfalen-Lippe:</h4>
					<p>
						Die berufsrechtlichen Regelungen sind über die Internetseiten der Ärztekammer
						Westfalen-Lippe
						zugänglich. Der
						direkte Link lautet:<br>
						https://www.aekwl.de/fileadmin/rechtsabteilung/doc/Berufsordnung.pdf
					</p>
					<h4>Heilberufsgesetz Nordrhein-Westfalen:</h4>
					<p>
						Das Heilberufsgesetz ist über die Internetseiten der Ärztekammer Westfalen-Lippe zugänglich.
						Der
						direkte Link
						lautet:<br>
						https://www.aekwl.de/fileadmin/user_upload/aekwl/recht/Heilberufsgesetz_NW_2020_fin.pdf
					</p>
					<h4>Haftung für Inhalte:</h4>
					<p>
						Die Inhalte unserer Seiten wurden mit größter Sorgfalt erstellt. Für die Richtigkeit,
						Vollständigkeit und Aktualität
						der Inhalte können wir jedoch keine Gewähr übernehmen. Als Diensteanbieter sind wir gemäß §
						7
						Abs.1 TMG für eigene
						Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG
						sind wir als
						Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde
						Informationen
						zu überwachen oder
						nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen
						zur
						Entfernung oder
						Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon
						unberührt.
						Eine diesbezügliche
						Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung
						möglich.
						Bei Bekanntwerden
						von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.
					</p>
					<h4>Haftung für Links:</h4>
					<p>Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen
						Einfluss
						haben. Deshalb
						können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der
						verlinkten Seiten ist stets
						der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten
						wurden
						zum Zeitpunkt der
						Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt
						der
						Verlinkung nicht
						erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne
						konkrete
						Anhaltspunkte einer
						Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir
						derartige
						Links umgehend
						entfernen.
					</p>
					<h4>Urheberrecht:</h4>
					<p>
						Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem
						deutschen Urheberrecht.
						Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der
						Grenzen
						des Urheberrechtes
						bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und
						Kopien dieser Seite sind
						nur für den privaten, nicht kommerziellen Gebrauch gestattet. Soweit die Inhalte auf dieser
						Seite nicht vom
						Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden
						Inhalte Dritter als solche
						gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden,
						bitten
						wir um einen
						entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige
						Inhalte
						umgehend entfernen.
					</p>
					<h4>EU-Streitbeilegung:</h4>
					<p>
						Die Europäische Kommission stellt unter https://ec.europa.eu/consumers/odr/ eine Plattform
						zur
						Online-Streitbeilegung bereit, die Verbraucher für die Beilegung einer Streitigkeit nutzen
						können und auf der
						weitere Informationen zum Thema Streitschlichtung zu finden sind.
					</p>
					<h4>Hinweis nach §36 Verbraucherstreitbeilegungsgesetz (VSBG):</h4>
					<p>
						Wir sind weder verpflichtet noch dazu bereit, im Falle einer Streitigkeit mit einem
						Verbraucher
						an einem
						Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.
					</p>
					<h4>Bildnachweis:</h4>
					<p>
						&copy; Google Maps
					</p>
					<h4>Webdesigner & Developer:</h4>
					<p>
						<a style="cursor: pointer;" onclick="window.open('https://jacobissa.com' , '_blank')">Jacob Issa</a>
					</p>
				</div>
			</div>
		</div>

	</div>

	<!-- Footer -->
	<div id="my-footer">
		<div class="container-fluid d-flex justify-content-between align-items-center flex-nowrap mt-3 py-3 bg-secondary text-white">
			<div class="px-2 text-center user-select-none">&copy; Le Mans Praxis 2022</div>
			<div class="d-flex flex-row flex-nowrap justify-content-between">
				<div class="px-2 text-center">
					<button type="button" class="btn btn-link nav-link" id="my-btn-privacy">Datenschutz</button>
				</div>
				<div class="px-2 text-center">
					<button type="button" class="btn btn-link nav-link" id="my-btn-imprint">Impressum</button>
				</div>
			</div>
			<div class="text-end">
				<button class="btn btn-link text-light p-0" id="my-btn-footer-top" title="Go to top">
					<span class="bi bi-arrow-up-circle fs-2"></span>
				</button>
			</div>
		</div>
	</div>


	<!-- Modal -->
	<div id="my-modal">
		<button class="position-fixed end-0 bottom-0 btn btn-link text-dark rounded-circle" id="my-btn-floating-top" title="Go to Top">
			<span class="bi bi-arrow-up-circle fs-2"></span>
		</button>
	</div>

	<script src="./lib/bootstrap/js/bootstrap.min.js?v=<?php echo $bootstrap_version; ?>"></script>
	<script src="./lib/jquery/jquery.min.js?v=<?php echo $jquery_version; ?>"></script>
	<script src="./js/script.js?v=<?php echo $js_version; ?>"></script>
	<script src="./js/darkmode.js?v=<?php echo $js_version; ?>"></script>
	<!-- <script src="./js/i18n.js?v=<?php echo $js_version; ?>"></script> -->
</body>

</html>