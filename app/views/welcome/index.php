<?php
/**
 * Sample layout
 */

use Core\Language;

?>

<div class="page-header">
	<h1><?php echo $data['title'] ?></h1>
</div>

<p><?php echo $data['welcome_message'] ?></p>
<p><?php foreach ($data['data'] as $item) {
	echo $item->id . ' | ' . $item->name. ' | ' . $item->desc . '<br>';
} ?></p>

<a class="btn btn-md btn-success" href="<?php echo DIR;?>subpage/trang-con-1.html">
	<?php echo Language::show('open_subpage', 'Welcome'); ?>
</a>
