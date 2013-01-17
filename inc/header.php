<!doctype html>

<head>
	<meta charset="utf-8">
	<title>Alpha Project</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="Certified Square">

	<link href="css/screen.css" rel="stylesheet" type="text/css" media="screen">
	<script src="/js/jquery.js"></script>
	<script src="/js/plugins.js"></script>
	<script src="/js/main.js"></script>
	<script src="/js/holder.js"></script>
</head>

<body id="<?= basename($_SERVER['PHP_SELF'], ".php")?>">
	<div id="wrap">
		<header>
			<div class="wrap">
				<div class="row">
					<a href="/" title="Return to the homepage" id="logo">
						<img src="holder.js/140x100" alt="Site Name logo" />
					</a>

					<h1 class="site-title">Alpha Project</h1>
	                <?php include 'inc/nav.php' ?>
	            </div>
			</div>
		</header>
