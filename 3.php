<!doctype html>
<html>
<body>
	<h1>PHP의 변수</h1>
	<p>PHP에서는 달러표시($)로 변수를 지정한다. 즉 PHP 코드안에서 $로 시작하는 것은 다 변수이다. </p>

	<?php
		$a = 1;
		echo  $a + 1; 
	?>

	<p> 문자열을 변수안에 담아 활용하기</p>
	<p> $name = "EUGENE";</p>
	<p>이후 문자열 데이터 사이사이에 변수($name)를 결합 연산자를 이용해 연결해준다.</p>
	<?php
    $name = "EUGENE";
    echo "결과: "."Lorem ipsum dolor sit amet, consectetur ".$name." adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco ".$name." laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore egoing eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. by ".$name;
    ?>
</body>
</html>