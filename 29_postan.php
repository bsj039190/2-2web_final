<?php
$irum = $_POST['irum'];
$pwd = $_POST['pwd'];
$title = $_POST['title'];
$content = $_POST['content'];
$regdate=date('y-m-d');
$connect = mysqli_connect("localhost", "root", "");
mysqli_select_db($connect, "final");

mysqli_query($connect, 'set names utf-8');

$inrec = "insert into announce(irum, pwd, title, content, regdate, hits) values('$irum', '$pwd', '$title', '$content', '$regdate', 0)";
$info = mysqli_query($connect, $inrec);

if(!$info)
{
	die("글 등록 실패");
	echo "<a href='29_announce.php'>글목록으로</a>";
}
echo "작성 완료!";
mysqli_close($connect);

?>

<a href="29_announce.php">글목록으로</a>