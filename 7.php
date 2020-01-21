<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>PHP의 비교 연산자와 Booleans 데이터 타입</h1>
	<p>php의 Booleans은 javascript와 마찬가지로 true, false로 이뤄져있다. </p>
	
	<p>var_dump() 함수는 인자로 받은 원소의 데이터 타입을 출력해준다. 먼저 이 함수를 이용해 php의 데이터 타입을 살펴본다.</p>
	<h3>var_dump(1+1)</h3>
	<p><?php
		var_dump(1+1)
	?><br/>정수고 값은 2다.
	</p>

	<h3>var_dump("11")</h3>
	<p><?php
		var_dump("11");
	?><br/>문자열이고 길이는 2다</p>

	<h3>ar_dump(1==1)</h3>
	<p><?php
		var_dump(1==1);
	?><br/>불린값이고 값은 true다</p>
	
	<h3>ar_dump(1>=2)</h3>
	<p><?php
		var_dump(1>=2);
	?><br/>불린값이고 값은 false다</p>

	<h1>PHP에서 조건문 사용하기</H1>
	<h2>if</h2>
	<p>if문을 이용해 url 파라미터의 입력값을 활용해 화면 출력값을 달리해보기</p>
	<p>파라미터에 id 값이 있고 없고를 조건문으로 활용한다. isset() 함수를 활용한다. isset() 함수는 인자로 받은 변수가 지정이 되어있으면(setting되어있으면) true, 없으면 false 반환</p>
	<p>if문의 문법은 javascript와 동일하다.</p>
	<p style="font-weight:bold; color:blue; font-size: 30px;">
	<?php 
		if( isset($_GET['id']) ){
			echo $_GET['id']."님 환영합니다.";
		}else{
			echo "ID 입력값이 없습니다.";
		}
	?>
	</p>
	
  </body>
</html>