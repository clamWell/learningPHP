<!doctype html>
<html>
<body>
	<h1>PHP의 URL 파라미터(parameter)</h1>
	<p>각 소프트웨어들은 소프트웨어의 성격에 따라 입력값과 출력값이 다르다.</p>
	<p>PHP는 웹어플리케이션을 위해 만들어진 언어다. 그렇다면 PHP의 입력값과 출력값은 무엇인가?</p>

	<?php
	
	?>	
	<h3>파라미터 값에 따라 화면에 보여지는 값을 바꾸고 싶다면?</h3>
	<p>PHP 웹어플리케이션에 이름 입력값을 주고, 그것을 PHP가 출력값으로 바꿔준다.</p>
	<p>입력값은 어떻게 줄까? 바로 <b>ULR 파라미터</b>로.</p> 
	<p>url 이후에 ?를 붙이고 KEY = VALUE("" = "")형식으로 입력값을 넘겨준다. 이것은 전 세계적인 약속이다.</p> 
	<p>안녕하세요</p>
	<p><?php echo $_GET['address']; ?>에 사시는 <?php echo $_GET['name']; ?>님</p>

	<p><b>입력갑의 예:</b> http://localhost/php/4.php?address=일산&name=유진</p>
	<p>이때 url로 전달된 입력값을 PHP 어플리케이션이 캐치, 변수로 가져올 수 있다:  $_GET </p>
	<p> $_GET 은 url 파라미터로 받은 값을 가져온다. 파라미터의 가져오고 싶은 key명을 배열로 담아준다. $_GET['address'] 는 url 파라미터에서 address라는 이름의 key의 value 값을 가져온다는 뜻이다.</p>

	<p><?php echo $_GET['title']; ?></p>
	
</body>
</html>