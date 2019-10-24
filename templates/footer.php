<footer id="footer">
<p id="copyright">&copy; <?php echo get_copyright_date(2019); ?> EXAMPLE.</p>
</footer>
<?php
// コピーライトの年を返す
function get_copyright_date($then) {
	$now = date('Y');
	if ($then < $now) {
		return $then.'–'.$now;
	} else {
		return $then;
	}
}
?>