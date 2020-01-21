<!doctype html>
<html>
<body>
  <h1>Number & Arithmetic Operator</h1>
  <p>PHP 안에서 숫자와 문자 데이터 타입 처리하는 법</p>
  <h2>1+1</h2>
  <?php
  echo 1+1;
  ?>
  <h2>2-1</h2>
  <?php
  echo 2-1;
 ?>
 <h2>2*2</h2>
 <?php
 echo 2*2;
 ?>
 <h2>4/2</h2>
 <?php
 echo 4/2;
 ?>

  <h1>String & String Operator</h1>
  <p>문자열 처리 방법: 따옴표를 이용한다(홑,쌍). 문자열 안에서 따옴표를 쓰고 싶은 경우 이스케이프(\)를 활용한다.</p>
  <?php
	  echo "Hello world<br/>Hello \"w\"orld";
   ?>
  <h2>concatenation operator</h2>
  <p>결합 연산자</p>
  <p>여러개의 문자열을 결합하고 싶을때는 문자열 사이에 . 을 써준다. </p>
  <?php
	 echo "Hello "."world";
  ?>
  <h2>String length function</h2>
  <p>문자열의 길이를 알려주는 php 내장함수 strlen()</p>
  <?php
	echo strlen("Hello world")."<br/>";
   ?>
  <?php
	$str = "Hello world";
	echo strlen($str);
   ?>
</body>
</html>