<?php
/**
 * Sample layout
 */

use Helpers\Assets;
use Helpers\Url;
use Helpers\Hooks;
use Core\View;

//initialise hooks
$hooks = Hooks::get();
?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>
	<!-- Site meta -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $hooks->run('meta'); ?>
	<title><?php echo $data['title'].' - '.SITETITLE; ?></title>
	<?php
	Assets::css(array(
		Url::templatePath() . 'css/bootstrap.min.css',
		'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
		'http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic',
		Url::templatePath() . 'font-awesome/css/font-awesome.min.css',
		Url::templatePath() . 'css/animate.min.css',
		Url::templatePath() . 'css/creative.css',
	));
	$hooks->run('css');
	?>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top">
	<?php $hooks->run('afterBody');
	View::render(View::$controller . '/' . View::$action, $data);
	Assets::js(array(
		Url::templatePath() . 'js/jquery.js',
		Url::templatePath() . 'js/bootstrap.min.js',
		Url::templatePath() . 'js/jquery.easing.min.js',
		Url::templatePath() . 'js/jquery.fittext.js',
		Url::templatePath() . 'js/wow.min.js',
		Url::templatePath() . 'js/creative.js',
	));
	$hooks->run('js');
	$hooks->run('footer');
	?>
</body>
</html>