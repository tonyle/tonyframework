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
	<?php $hooks->run('meta'); ?>
	<title><?php echo $data['title'].' - '.SITETITLE; ?></title>
	<?php
	Assets::css(array(
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css',
		Url::templatePath() . 'css/style.css',
	));
	$hooks->run('css');
	?>
</head>
<body>
	<div class="container">
	<?php $hooks->run('afterBody');
	View::render(View::$controller . '/' . View::$action, $data);
	Assets::js(array(
		Url::templatePath() . 'js/jquery.js',
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'
	));
	$hooks->run('js');
	$hooks->run('footer');
	?>
	</div>
</body>
</html>