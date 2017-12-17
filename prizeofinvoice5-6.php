<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>統一發票對獎-201705~06</title>
<!-- Bootstrap 3 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<!-- jQuery (Bootstrap 所有外掛均需要使用) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- 依需要參考已編譯外掛版本（如下），或各自獨立的外掛版本 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
h1 {text-align: center;}
table {
	border: 1px black solid;
	margin-left: auto;
	margin-right: auto;
}
form {text-align: center;}
p {text-align: center;}
img {
	display: block;
	margin: auto;
}
.Red {
	font-size: 24px; 
	line-height: 120%; 
	color: #ff0000; 
	font-weight: bold;
}
.input {
	display: inline;
	width: 10%;
	height: 25px;
}
.btn {
	padding: 0 10px;
	background-color: #D2D4D6;
}
</style>
<script type="text/javascript">
function focus() {
	document.form.number.focus();
}
function CheckForm() {
if (document.form.number.value == "") {
	alert("請輸入八位發票號碼！");
	document.form.number.focus();
	return false;
}
else if (document.form.number.value.length < 8 ) {
	alert("發票號碼不足八位數！");
	document.form.number.focus();
	return false;
}
else
	return true;
}
</script>
</head>
<body onload="focus()">
	<h1>統一發票對獎-201705~06</h1>
	<p>開獎日期：106年07月25日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;領獎期限：106年08月06日至106年11月05日</p>
	<table border="1" cellspacing="1" cellpadding="0">
		<tr>
			<th scope="col" style="text-align:center">獎別</th>
			<th scope="col" style="text-align:center">中獎號碼</th>
		</tr>
		<tr>
			<td style="text-align:center">特別獎</td>
			<td><span class="Red">99768846</span><br>同期統一發票收執聯 8 位數號碼與上列號碼相同者獎金 1,000 萬元</td>
		</tr>
		<tr>
			<td style="text-align:center">特獎</td>
			<td><span class="Red">83660478</span><br>同期統一發票收執聯 8 位數號碼與上列號碼相同者獎金 200 萬元</td>
		</tr>
		<tr>
			<td style="text-align:center">頭獎</td>
			<td><span class="Red">70628612、87596250、97294175</span><br>同期統一發票收執聯 8 位數號碼與上列號碼相同者獎金 20 萬元</td>
		</tr>
		<tr>
			<td style="text-align:center">二獎</td>
			<td>同期統一發票收執聯末 7 位數號碼與頭獎中獎號碼末 7 位相同者各得獎金 4 萬元&nbsp;&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">三獎</td>
			<td>同期統一發票收執聯末 6 位數號碼與頭獎中獎號碼末 6 位相同者各得獎金 1 萬元&nbsp;&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">四獎</td>
			<td>同期統一發票收執聯末 5 位數號碼與頭獎中獎號碼末 5 位相同者各得獎金 4 千元&nbsp;&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">五獎</td>
			<td>同期統一發票收執聯末 4 位數號碼與頭獎中獎號碼末 4 位相同者各得獎金 1 千元&nbsp;&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">六獎</td>
			<td>同期統一發票收執聯末 3 位數號碼與頭獎中獎號碼末 3 位相同者各得獎金 2 百元&nbsp;&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center">增開六獎</td>
			<td><span class="Red">904</span><br>同期統一發票收執聯末 3 位數號碼與上列號碼相同者各得獎金 2 百元</td>
		</tr>
	</table>
	<br>
	<form method="post" name="form" onSubmit="return CheckForm()">
		請輸入八位發票號碼：<input type="text" class="form-control input" name="number" maxlength="8"><br><br>
		<input type="submit" value="送出" class="btn btn-default">&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" value="重新填寫" class="btn btn-default">
	</form>
	<br>
</body>
</html>
<?php
	$special1 = "99768846";
	$special2 = "83660478";
	$first1 = "70628612";
	$first2 = "87596250";
	$first3 = "97294175";
	$second1 = substr($first1,1,7);
	$second2 = substr($first2,1,7);
	$second3 = substr($first3,1,7);
	$third1 = substr($first1,2,6);
	$third2 = substr($first2,2,6);
	$third3 = substr($first3,2,6);
	$forth1 = substr($first1,3,5);
	$forth2 = substr($first2,3,5);
	$forth3 = substr($first3,3,5);
	$fifth1 = substr($first1,4,4);
	$fifth2 = substr($first2,4,4);
	$fifth3 = substr($first3,4,4);
	$sixth1 = substr($first1,5,3);
	$sixth2 = substr($first2,5,3);
	$sixth3 = substr($first3,5,3);
	$sixth4 = "904";
	$number = @ $_POST["number"];
	$number2 = substr($number,1,7);
	$number3 = substr($number,2,6);
	$number4 = substr($number,3,5);
	$number5 = substr($number,4,4);
	$number6 = substr($number,5,3);
	if (isset($number) && ($number != "")) {
		if ($number == $special1) {
			echo "<p>恭喜你，中特別獎</p>";
			echo "<img src=\"Win.jpg\">";
		}
		elseif ($number == $special2) {
			echo "<p>恭喜你，中特獎</p>";
			echo "<img src=\"Win.jpg\">";
		}
		elseif ($number == $first1 || $number == $first2 || $number == $first3) {
			echo"<p>恭喜你，中頭獎</p>";
			echo "<img src=\"Win.jpg\">";
		}
		elseif ($number2 == $second1 || $number2 == $second2 || $number2 == $second3) {
			echo"<p>恭喜你，中二獎</p>";
			echo "<img src=\"Win.jpg\">";
		}
		elseif ($number3 == $third1 || $number3 == $third2 || $number3 == $third3) {
			echo"<p>恭喜你，中三獎</p>";
			echo "<img src=\"Win.jpg\">";
		}
		elseif ($number4 == $forth1 || $number4 == $forth2 || $number4 == $forth3) {
			echo"<p>恭喜你，中四獎</p>";
			echo "<img src=\"Win.jpg\">";
		}
		elseif ($number5 == $fifth1 || $number5 == $fifth2 || $number5 == $fifth3) {
			echo"<p>恭喜你，中五獎</p>";
			echo "<img src=\"Win.jpg\">";
		}
		elseif ($number6 == $sixth1 || $number6 == $sixth2 || $number6 == $sixth3 || $number6 == $sixth4) {
			echo"<p>恭喜你，中六獎</p>";
			echo "<img src=\"Win.jpg\">";
		}
		else {
			echo"<p>真可惜，沒中獎</p>";
			echo "<img src=\"Lose.jpg\">";
		}
	}
?>