var $a2 = $('.video1');

$a2.on('mouseenter',function () {
	$a2.get(0).play();
});
$a2.on('mouseout', function () {
	$a2.get(0).pause();
});