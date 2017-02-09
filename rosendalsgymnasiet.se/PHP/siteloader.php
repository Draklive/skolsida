<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Test</title>
		<link rel="icon" type="image/png" href="resources/images/favicon.png">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<style>
			body
			{
				margin:0;
				background:white;
			}
			.nav-font
			{
				font-size:1.4rem;
				padding:0.8rem;
				display:block;
				font-family: "Segoe UI", Arial, sans-serif;
			}
			#header
			{
				background:#9c1c25;
				width:100%;
				overflow: auto;
			}
			#navigation
			{
				color:white;
				text-align:center;
			}
			input[type=checkbox]:checked ~ ul
			{
				display: block;
			}
			.sub-list
			{
				display:none;
			}
			.checkbox-list
			{
				display:none;
			}
			#toggle-menu
			{
				float:right;
				color:white;
				text-align:center;
				display:block;
				width:1.8rem;
				height:1.8rem;
			}
			#toggle-menu:hover
			{
				background:#ac1c25;
			}
			.container
			{
				padding:1rem;
			}
			.inverted
			{
				color:white;
				background:black;
			}
			.large > h2
			{
				font-size:2.5rem;
			}
			.large > h3
			{
				font-size:1.5rem;
			}
			.large > p
			{
				font-size:1.5rem;
			}
			ul
			{
				list-style-type: none;
				margin: 0;
				padding: 0;
				width: 100%;
				display:none;
			}
			li a
			{
				color:white;
				text-decoration: none;
			}
			li a:hover
			{
				background:#555555;
			}
			li
			{
				background:#404040;
			}
			.sub-list-item
			{
				background:#808080;
			}
			#logga:hover
			{
				background:#ac1c25;
			}
			#logga
			{
				float:left;

				height:100%
			}
			#org-image
			{
				float:left;
				height:2.3rem;
				width:2.3rem;
				margin:0.5rem;
				background-image: url('../resources/images/logga-white.png');
				background-repeat: no-repeat;
				background-size: contain;
			}
			#org-name
			{
				float:left;
			}
			#start
			{
				color:white;
				display:block;
			}
			#list
			{
				overflow:auto;
			}
			@media only screen and (min-width: 820px)
			{
				.nav-font
				{
					font-size:2rem;
					padding:1rem;
				}
				li
				{
					dosplay:inline-block;
					background:transparent;
					float:left;
				}
				#navigation
				{
					display:block;
					overflow:auto;
					float:right;
				}
				ul
				{
					display:block;
				}
				#toggle-menu
				{
					display:none;
				}
				li a:hover
				{
					background:#ac1c25;
				}
				#org-image
				{
					height:3.5rem;
					width:3.5rem;
					margin:0.5rem;
				}
			}
			footer
			{
				text-align:center;
			}
			address
			{
				display:inline-block;
			}
		</style>
	</head>
	<body>
		<header>
			<div id="header">
				<label id="toggle-menu" for="menu-check-input-0" class="nav-font">
					<div style="width 90%; height:90%">
						<div style="height:22.2222%; background:white; border-radius:100px"></div>
						<div style="height:22.2222%"></div>
						<div style="height:22.2222%; background:white; border-radius:100px"></div>
						<div style="height:22.2222%"></div>
						<div style="height:22.2222%; background:white; border-radius:100px"></div>
					</div>
				</label>
				<div id="logga">
					<a id="start" href="." onclick="loadPage('start')">
						<div id="org-image"></div>
						<div id="org-name"><strong class="nav-font">Rosendalsgymnasiet</strong></div>
					</a>
				</div>
				
				<nav id="navigation">
					<input class="checkbox-list" type="checkbox" id="menu-check-input-0"></input>
					<ul id="list">
						<li class="list-container">
							<a class="list-item nav-font" id="skolan" href="skolan" onclick="switchPage('skolan')">Skolan</a>
							<label for="menu-check-input-1" class="nav-font" style="">
								<div style="min-height:100px;"></div>
							</label>
							<input class="checkbox-list" type="checkbox" id="menu-check-input-1"></input>
							<ul class="sub-list">
								<li class="sub-list-item"><a class="nav-font" id="skolan" href="sida1">sida1</a></li>
								<li class="sub-list-item"><a class="nav-font" id="program" href="sida2">sida2</a></li>
								<li class="sub-list-item"><a class="nav-font" id="rosnet" href="sida3">sida3</a></li>
							</ul>
						</li>
						
						<li class="list-container">
							<a class="list-item nav-font" id="program" href="program" onclick="switchPage('program')">Program</a>
							<input class="checkbox-list" type="checkbox" id="menu-check-input-2"></input>
							<ul class="sub-list">
								<li class="sub-list-item"><a class="nav-font" id="skolan" href="sida1">sida1</a></li>
								<li class="sub-list-item"><a class="nav-font" id="program" href="sida2">sida2</a></li>
								<li class="sub-list-item"><a class="nav-font" id="rosnet" href="sida3">sida3</a></li>
							</ul>
						</li>
						
						<li class="list-container">
							<a class="list-item nav-font" id="rosnet" href="http://rosnet.rosendalsgymnasiet.se">Rosnet</a>
							<input class="checkbox-list" type="checkbox" id="menu-check-input-3"></input>
							<ul class="sub-list">
								<li class="sub-list-item"><a class="nav-font" id="skolan" href="sida1">sida1</a></li>
								<li class="sub-list-item"><a class="nav-font" id="program" href="sida2">sida2</a></li>
								<li class="sub-list-item"><a class="nav-font" id="rosnet" href="sida3">sida3</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</header>
		<section id="content">
			<?php
			/*
			$page_directory = htmlspecialchars($_GET["name"]);
			if(empty($page_directory))
			{
				$filepath = "../pages/start.html";
			}
			else
			{
				$filepath = "../pages/" . $page_directory . ".html";
			}
			readfile($filepath);
			*/
			?>
		</section>
		<footer>
			<hr>
			<address>
				Rosendalsgymnasiet<br> 
				Husargatan 8<br>
				753 75 Uppsala<br>
				018-727 33 30<br>
			</address>
		</footer>
	<!-- <script src="../getPage.js"></script> -->
	</body>
</html>
