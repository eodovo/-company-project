<? 
	session_start(); 

	@extract($_GET); 
  @extract($_POST); 
  @extract($_SESSION); 
?>
<!DOCTYPE HTML>
<html>
<head> 
<meta charset="utf-8">
<title>PR센터-회사소식</title>
<link rel="stylesheet" href="../common/css/common.css">
<link rel="stylesheet" href="../sub4/common/css/sub4common.css">
<link rel="stylesheet" href="./sub4_content2_1.css">
</head>

<body>
	<? include "../common/sub_header.html" ?>
<div class="main">
        <img src="../sub4/common/imgaes/main.jpg" alt="메인이미지">
        <h3>PR센터</h3>
    </div>

    <div class="subNav">
        <ul>
			<li ><a href="../concert/list.php">PR자료실</a></li>
            <li class="current"><a href="./list.php">회사소식</a></li>
			<li><a href="../sub4/sub4_3.html">FAQ</a></li>
            <li ><a href="../sub4/sub4_4.html">문의하기</a></li>

        </ul>
    </div>
	<article id="content">
	<div class="titleArea">
            <div class="lineMap">
                <span><i class="fa-solid fa-house"></i></span>&gt; <span>PR센터</span>&gt;
                <strong>회사소식</strong>
            </div>
            <h2>회사소식</h2>
			<p>롯데정밀화학 공지사항을 알려드립니다.</p>
        </div>
		<div class="contentArea">
		<form  name="board_form" method="post" action="insert.php?page=<?=$page?>&scale=<?=$scale?>"> 
		<div id="write_form">
			<div class="write_line"></div>
			<div id="write_row1">
				<div class="col1"> 닉네임 </div>
				<div class="col2"><?=$usernick?></div>
				<div class="col3"><input type="checkbox" name="html_ok" value="y"> HTML 쓰기</div>
			</div>
			<div class="write_line"></div>
			<div id="write_row2"><div class="col1"> 제목   </div>
			                     <div class="col2"><input type="text" name="subject" placeholder="제목을 입력해주세요"></div>
			</div>
			<div class="write_line"></div>
			<div id="write_row3"><div class="col1"> 내용   </div>
			                     <div class="col2"><textarea rows="15" cols="79" name="content"></textarea></div>
			</div>
			<div class="write_line"></div>
		</div>

		<div id="write_button"><input type="submit">
								<a href="list.php?page=<?=$page ?>&scale=<?=$scale ?>">취소</a>
		</div>
		</form>

	</div> 
  </div>
</article> 
<? include "../common/sub_footer.html" ?>
</body>
</html>