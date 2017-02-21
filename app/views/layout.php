<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
<!-- custom css -->
<link rel="stylesheet" type="text/css" href="app/assets/stylesheets/style.css">
<!-- primer css -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Primer/3.0.1/css/primer.css">
</head>
<body>

<div class="container">
<?
require_once 'src/Mustache/Autoloader.php';
Mustache_Autoloader::register();
require_once 'config/routes.php';
?>
</div>

</body>
<!-- main components -->
<script src="app/assets/javascript/app.js"></script>
</html>
