<link rel = "stylesheet" href = "fnboardst.css">
<body>
<h1>AFD 자유 게시판 </h1>
<table><tr>
  <th>NO</th><th>제목</th><th>작성자</th><th>작성일</th><th>조회</th>
  </tr>
<?php
$connect=mysqli_connect("localhost","root","");

mysqli_select_db($connect,"final");
mysqli_query($connect, 'set names utf8');
//$page=1;
//페이지 정보 코드수정작업
if(empty($_GET['page'])){$page=1;}
else
{$page=$_GET['page'];}
$line_page=5;
$block_page=3;
$s1="select * from board";
$result=mysqli_query($connect, $s1);
$totrow=mysqli_num_rows($result);
$totpage=ceil($totrow/$line_page);
$totblock=ceil($totpage/$block_page);
$cblock=ceil($page/$block_page);
$frow=($page-1)*$line_page;
$selrec="select * from board order by no desc limit $frow,$line_page";
$info=mysqli_query($connect, $selrec);
while($rowinfo=mysqli_fetch_array($info))
{
	echo "<tr>";
	echo "<td> $rowinfo[no] </td>";
    echo "<td> <a href='29_detailfr.php?title=$rowinfo[title]'> $rowinfo[title] </a></td>";
	echo "<td> $rowinfo[irum] </td>";
	echo "<td> $rowinfo[regdate] </td>";
	echo "<td> $rowinfo[hits] </td>";
	echo "</tr>";}
mysqli_close($connect);
?>
</table></body>
<?php
// 페이지 블럭 설정과 링크 작업 코드 추가
$fpage=(($cblock-1)*$block_page)+1;
$lpage=min($totpage,$cblock*$block_page);
if($cblock>1)
{
   $prvblock=($cblock-1)*$block_page;
   echo "<a href='34_board.php?page=$prvblock'>◀이전</a>";
}
for($i=$fpage;$i<=$lpage;$i++)
{
	if($i==$page) echo "<b id='ab'>[$i]</b>";
	else  echo "<a href='34_board.php?page=$i'>[$i]</a>";
}
if($cblock<$totblock)
{
	$nxtblock=($cblock+1)*$block_page;
	echo "<a href='34_board.php?page=$nxtblock'>다음▶</a>";
}
?>

<button><a target="iframe1" href="29_writefr.html?board_id=notice">글 쓰기</a></button>