<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>20181059 배승준</title>
	
  <link rel = "stylesheet" href = "fnst.css">
 </head>
 <body style="overflow-x: hidden; background-image: url('mario.png')">

<header>
      <h1>
        All For Dev
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

      </h1>
</header>


    <?php

    if($_SESSION['nicname']){
 
    echo "<nav align=right>
      안녕하세요 ".$_SESSION['nicname']."님&nbsp&nbsp&nbsp
      <a href='29_logout.php'><nav align=right>로그아웃&nbsp&nbsp&nbsp</nav></a>
    </nav>";
 
    }
    else{
    ?>
    <nav>

      <a href="29_member.html"><nav align=right>회원가입</nav></a>
      <a href="29_login.html"><nav align=right>로그인</nav></a>
    </nav>
    <?php
    }
    ?>
    <aside id="left">
      <h4>&nbsp&nbsp&nbsp카테고리</h4>
      <ul>
		<li><a target="iframe1" href="29_intro.html?board_id=notice">홈화면</a></li>
        <li><a target="iframe1" href="29_announce.php?board_id=notice">공지사항</a></li>
        <li><a target="iframe1" href="29_board.php?board_id=board">자유게시판</a></li>
        <li><a target="iframe1" href="29_C.php?board_id=music">C</a></li>
        <li><a target="iframe1" href="29_html.php?board_id=movie">html</a></li>
      </ul>
    </aside>

	<br><br><br>
    <section id="main">
      <article id="article1">
        <iframe name="iframe1" src="29_intro.html" width="1000px" height="700px" seamless></iframe>
      </article>
    </section>
  </body>
</html>