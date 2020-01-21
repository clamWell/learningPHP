<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>WEB</h1>
    <ol>
      <li><a href="6.php?id=HTML">HTML</a></li>
      <li><a href="6.php?id=CSS">CSS</a></li>
      <li><a href="6.php?id=JavaScript">JavaScript</a></li>
    </ol>

	<p>아래의 제목의 텍스트는 url 파라미터를 넘겨 받아 보여준다.</p>
    <h2>
      <?php
        echo $_GET['id'];
      ?>
    </h2>
	<p style="background:#eee; margin: 50px 0; font-weight:bold;">
		<?php
			echo file_get_contents("data/".$_GET['id'].".txt");
		 ?>
	</p>    

	 <p>별도의 디렉토리(data)안에 있는 파일을 읽어서 파일의 내용을 보여주는 것.</p>
	 <p>id값에 해당하는 파일의 내용을 읽어오는 php의 내장함수는?</p>
	 <p>file_get_contents(""): ()안으로 파일 경로를 전달해준다.</p>

	<ul style="margin-top:100px;">
		<h2>file_get_contents("") 함수의 인자 사용법</h2>
		<p>file_get_contents('./file.txt', true, $context, 1, 8);</p>
		<li>첫번째 인자: $filename = 파일 혹은 URL를 통해 해당 데이터를 읽어 올수 있다.</li>
		<li>$use_include_path = 참조(include)된 내용까지 읽어 올지를 결정한다. true 혹은 false 를 인자로 받는다. </li>
		<li>$context = request 헤더 정보를 입력해줄 수 있다.</li>
		<li>$offset = 몇번째 데이터 부터 읽어올지 결정한다. </li>
		<li>$maxlen = 최대 얼마나 많은 양을 읽어 올지 결정한다.</li>
	</ul>

	<p>
	<?php 
		$file = file_get_contents('http://www.google.com/');
		echo $file;
	?>	
	</p>
  </body>
</html>