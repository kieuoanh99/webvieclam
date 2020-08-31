<!DOCTYPE html>
<html>
<head>
<title>Joe Bloggs - Curriculum Vitae</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
<meta charset="UTF-8"> 

<link type="text/css" rel="stylesheet" href="admin/css/style.css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top">
<div id="cv" class="instaFade">
	<div class="mainDetails">
		<div id="headshot" class="quickFade">
			<input type="file" class="form-control-file" id="exampleFormControlFile1">
		</div>
		
		<div id="name">
			<h1><input type="text" id="hoten" name="hoten" placeholder="Tên đầy đủ"></h1><br>
			<input type="text" id="vitri" name="vitri" placeholder="Vị tí ứng tuyển">
			
		</div>
		
		<div id="contactDetails" class="quickFade delayFour">
			<ul>
				<li>Email: <input type="email" id="email" name="email" pattern="[A-Za-z]{3}" size="30" placeholder="abc@gmail.com"></li>
				<li>Số điện thoại: <input type="text" id="sdt" name="sdt" size="30" placeholder="0........"></li>
				<li>Địa chỉ: <input type="text" id="diachi" name="diachi" autofocus size="30" placeholder="địa chỉ"></li>
				<li>Giới tính: <select name="gt" id="gt">
									<option value="nam">Nam</option>
									<option value="nu">Nữ</option>
								</select></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Mục tiêu nghề nghiệp</h1>
				</div>
				<div class="sectionContent">
					<textarea id="autoresizing" cols="73" placeholder="0........"> </textarea> 
					 <script type="text/javascript"> 
						textarea = document.querySelector("#autoresizing"); 
						textarea.addEventListener('input', autoResize, false); 
					
						function autoResize() { 
							this.style.height = 'auto'; 
							this.style.height = this.scrollHeight + 'px'; 
						} 
					</script>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Kinh nghiệm làm việc</h1>
			</div>
			
			<div class="sectionContent">
				<article>
					<h2><input type="text" id="congty" name="congty" placeholder="Tên công ty......"></h2>
					<p class="subDetails"><input type="date" id="tg" name="tg">- <input type="date" id="tg" name="tg"></p>
					<p><input type="text" id="vitri" name="vitri" placeholder="Vị trí công việc"></p>
					<textarea id="autoresizing" cols="73" placeholder="0........"> </textarea> 
						<script type="text/javascript"> 
							textarea = document.querySelector("#autoresizing"); 
							textarea.addEventListener('input', autoResize, false); 
						
							function autoResize() { 
								this.style.height = 'auto'; 
								this.style.height = this.scrollHeight + 'px'; 
							} 
						</script>
				</article>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Kỹ năng</h1>
			</div>
			
				<div class="sectionContent">
					<textarea id="autoresizing" cols="73"  required placeholder="ádsfsd"> </textarea> 
					 <script type="text/javascript"> 
						textarea = document.querySelector("#autoresizing"); 
						textarea.addEventListener('input', autoResize, false); 
					
						function autoResize() { 
							this.style.height = 'auto'; 
							this.style.height = this.scrollHeight + 'px'; 
						} 
					</script>
				</div>
	
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Học vấn</h1>
			</div>
			
			<div class="sectionContent">
				<article>
					<h2><input type="text" id="truong" name="truong" pattern="[A-Za-z]{3}" size="30" placeholder="Tên trường đào tạo"></h2>
					<p class="subDetails"><input type="date" id="tghoc" name="tghoc" pattern="[A-Za-z]{3}" size="30"></p>
					<p><input type="text" id="bangcap" name="bangcap" pattern="[A-Za-z]{3}" size="30" placeholder="Tên bằng cấp"></p>
					<p><select name="xeploai" id="xeploai">
									<option value="nam">Giỏi</option>
									<option value="nu">Khá</option>
									<option value="nam">Trung bình</option>
								</select></p>
				</article>
			</div>
			<div class="clear"></div>
		</section>
	</div>
</div>
<input type="submit" value="Submit">
</body>
</html>