<html>
    <head>
        <!--<style>
        h1{color:#aacc22;}
        #main{width: 600px; height: 400px; border-radius: 10px; border:
            thin solid black; opacity: 0.6; margin: 50px;}
        label{margin: 5px; padding: 10px; font-family: serif; font-size: 12px;
        color: black; opacity: 0.3;}
        input{padding: 7px;}
        textarea{margin-left: 10px;}
        </style>-->
    </head>

<body>
<h1>C 글쓰기</h1>
<form action="29_writean.php" method="post">
<section id="main">
<br>
<label><br>이름</label> <input type="text" required name="irum"><p>
<label>비밀번호</label> <input type="password" length=5 required name="pwd"><p>
<label>제목</label> <input type="text" required name="title"><p>
<label>글내용</label> <textarea rows=10 cols=70 required name = "content"></textarea>
<input type="submit" value="등록하기"></section>
</form>


</body>
</html>