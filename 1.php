
<!doctype html>
<html>
  <body>
    <!-- 현재의 시간을 나타내라는 php 문법 -->
	<?php
      echo date('Y-m-d H:i:s'); 
    ?>	

	<h3>.html 문서</h3>
	<p>클라이언트(브라우저)에서 index.html 파일을 웹서버에 요청하면, 웹서버는 요청 파일의 확장자가 .html 이기 때문에 이를 스스로 처리할 수 있음을 안다. 서버는 자신의 디렉토리(일반적으로 메모리의 htdocs아래)에서 html 파일을 찾아 읽은 후 그것을 브라우저에게 다시 전송해준다(response). 이후 브라우저는 전송받은 html 파일을 읽어 화면에 띄어준다.</p>

	<h3>.php 문서</h3>
	<p>반면 클라이언트(브라우저)에서 index.php 파일을 웹서버에 요청하면, 웹서버는 이를 처리하는 작업을 php 프로그램에게 먼저 넘겨준다. php는 넘겨받은 .php 문서를 읽고 자신의 문법에 따라 작업을 마친 뒤 html 문서를 생성한다. 이후 웹서버가 생성된 html문서를 받아 클라이언트(브라우저)에게 다시 돌려준다.</p>
  </body>
</html>