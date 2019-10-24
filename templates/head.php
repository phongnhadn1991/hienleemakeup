<!DOCTYPE html>
<html class="<?php echo $htmlClass; ?>" lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<meta charset="utf-8">
<title>HienLee Makeup</title>
<meta name="keywords" content="<?php echo $meta['keywords']; ?>">
<meta name="description" content="<?php echo $meta['description']; ?>">
<meta name="viewport" content="width=device-width, initial-scale=0.0, minimum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<link rel="index" href="<?php echo LOCATION; ?>">

<?php if(file_exists(__DIR__.'/../favicon.ico')) : ?>
<!-- favicon -->
<link rel="shortcut icon" href="<?php echo LOCATION.'favicon.ico'; ?>">
<?php endif; ?>

<?php if(file_exists(__DIR__.'/../apple-touch-icon.png')) : ?>
<!-- apple-touch-icon -->
<link rel="apple-touch-icon" href="<?php echo LOCATION.'apple-touch-icon.png'; ?>">
<?php endif; ?>

<!-- Open graph tags -->
<meta property="fb:app_id" content="<?php echo FB_APPID; ?>">
<meta property="og:site_name" content="<?php echo TITLE; ?>">
<meta property="og:title" content="<?php echo $meta['title']; ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . @$_SERVER["HTTP_HOST"] . htmlspecialchars( strip_tags( @$_SERVER["REQUEST_URI"] )); ?>">
<meta property="og:description" content="<?php echo $meta['description']; ?>">
<?php if(file_exists(__DIR__.'/../ogp.jpg')) : ?>
<meta property="og:image" content="<?php echo LOCATION.'ogp.jpg'; ?>">
<?php endif; ?>
