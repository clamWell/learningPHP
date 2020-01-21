<!doctype html>
<html>
<body>
	<h1>PHP의 함수</h1>
	<p>PHP 함수를 어떻게 사용하는가? 다른 사용자들이 만들어논 함수 중 필요한 함수를 어떻게 찾을 수 있을까?</p>

	<?php
		$str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. 


		sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
		echo $str;
	?>	

	<h2>strlen()</h2>
	<p>strlen()은 괄호로 받은 인자(문자열)의 원소갯수를 세서 그 값을 반환해준다.</p>
	<?php
		echo strlen($str);
    ?>

	<h2>nl2br</h2>
	<p>이 함수는 문자열 안에 줄바꿈을 br 태그로 변환해준다.</p>
	<?php
		echo nl2br($str);
    ?>

</body>
</html>