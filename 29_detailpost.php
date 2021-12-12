<link rel = "stylesheet" href = "fndetailst.css">
<?php
$title=$_GET['title'];
$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"final");
mysqli_query($connect, 'set names utf8');
$selrec="select * from board where title='$title'";
$info=mysqli_query($connect,$selrec);
if(!$info) die("조회결과 없습니다.");
$data=mysqli_fetch_array($info);
?>
<form>
<div id='a1'>작성자<input type="text" value="<?=$data['irum']?>"></div>
<div id='a1'>글제목<input type="text" value="<?=$data['title']?>"></div>
<div id='b1'>글 내용</div>
<textarea cols=70 rows=15><?=$data['content']?></textarea>
</form>
<?php
$uprec="update board set hits=hits+1 where no=$data[no]";
$info2=mysqli_query($connect,$uprec);
mysqli_close($connect);
?>
<p><a href="javascript:history.back()">목록으로 이동</a></p>
</body></html>