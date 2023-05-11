<?php include('phpqrcode/qrlib.php');
if (isset($_REQUEST['submit']) and $_REQUEST['submit'] != "") {
	$PNG_TEMP_DIR = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR;



	//html PNG location prefix
	$PNG_WEB_DIR = 'uploads/';

	if (!file_exists($PNG_TEMP_DIR)) {
		mkdir($PNG_TEMP_DIR);
	}



	$filename = $PNG_WEB_DIR . time() . uniqid('-QR-') . '.png';

	//processing form input
	//remember to sanitize user input in real-life solution !!!
	$errorCorrectionLevel = $_REQUEST['level'];
	$matrixPointSize = $_REQUEST['size'];
	//default data

	$link = $_REQUEST['userdata'];

	QRcode::png($link, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
}
?>
<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"
	prefix="og: http://ogp.me/ns#" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>How to send an AJAX call using JQuery</title>

	<link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
		integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
		integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css" type="text/css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-6724419004010752",
			enable_page_level_ads: true
		});
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131906273-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());
		gtag('config', 'UA-131906273-1');
	</script>
</head>

<body>
	<div class="bg-light border-bottom shadow-sm sticky-top">
		<div class="container">
			<header class="blog-header py-1">
				<nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand text-muted p-0 m-0"
						href="">CODE</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li itemscope="itemscope" itemtype="index.html" id="menu-item-17" class="active nav-item"><a
									title="Home" href="../index.html" class="nav-link">Home</a></li>
						</ul>
					</div>
				</nav>
			</header>
		</div> <!--/.container-->
	</div>
	<div class="container my-2">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- demo top banner -->
		<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6724419004010752"
			data-ad-slot="6737619771" data-ad-format="auto" data-full-width-responsive="true"></ins>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>

	<div class="container">
		<div class="row justify-content-md-center">
			<div class="ml-2 col-sm-6">
				<?php if (isset($link) and $link != "") { ?>
					<div class="alert alert-success">QR creado para <strong>[
							<?php echo $link; ?>]
						</strong></div>
					<div class="text-center"><img src="<?php echo $PNG_WEB_DIR . basename($filename); ?>" /></div>
				<?php } ?>
				<form method="post">
					<div class="form-group">
						<label>Create QR</label>
						<input type="text" name="userdata" id="userdata" class="form-control"
							placeholder="Enter URL and create QR" required>
					</div>
					<div class="form-group">
						<label>QR Code Level</label>
						<select name="level" class="form-control">
							<option value="L">L - smallest</option>
							<option value="M" selected="">M</option>
							<option value="Q">Q</option>
							<option value="H">H - best</option>
						</select>
					</div>
					<div class="form-group">
						<label>QR Code Size</label>
						<select name="size" class="form-control">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4" selected>4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" value="Upload" class="btn btn-danger">
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="container">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- demo left sidebar -->
			<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6724419004010752"
				data-ad-slot="7706376079" data-ad-format="auto" data-full-width-responsive="true"></ins>
			<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</div>

	<!--Only these JS files are necessary-->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
		integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
		integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
		crossorigin="anonymous"></script>
</body>

</html>