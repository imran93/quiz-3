<?php include("start.html") ?>
<?php
session_start();
if(isset($_GET['question'])){
	$question = preg_replace('/[^0-9]/', "", $_GET['question']);
	$next = $question + 1;
	$prev = $question - 1;
	if(!isset($_SESSION['qid_array']) && $question != 1){
		$msg = "Sorry! No cheating.";
		header("location: index.php?msg=$msg");
		exit();
	}

}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Quiz Page</title>
<script type="text/javascript">

}
xhr.send(vars);
		document.getElementById('counter_status').innerHTML = "";
		document.getElementById('btnSpan').innerHTML = '<h2>Times Up!</h2>';
		document.getElementById('btnSpan').innerHTML += '<a href="quiz.php?question=<?php echo $next; ?>">Click here now</a>';

	}
	secs--;
	var timer = setTimeout('countDown('+secs+',"'+elem+'")',1000);
}
</script>
<script>
function getQuestion(){
	var hr = new XMLHttpRequest();
		hr.onreadystatechange = function(){
		if (hr.readyState==4 && hr.status==200){
			var response = hr.responseText.split("|");
			if(response[0] == "finished"){
				document.getElementById('status').innerHTML = response[1];
			}
			var nums = hr.responseText.split(",");
			document.getElementById('question').innerHTML = nums[0];
			document.getElementById('answers').innerHTML = nums[1];
			document.getElementById('answers').innerHTML += nums[2];
		}
	}
hr.open("GET", "questions.php?question=" + <?php echo $question; ?>, true);
  hr.send();
}
function x() {
		var rads = document.getElementsByName("rads");
		for ( var i = 0; i < rads.length; i++ ) {
		if ( rads[i].checked ){
		var val = rads[i].value;
		return val;
		}
	}
}
function post_answer(){
	var p = new XMLHttpRequest();
			var id = document.getElementById('qid').value;
			var url = "userAnswers.php";
			var vars = "qid="+id+"&radio="+x();
			p.open("POST", url, true);
			p.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			p.onreadystatechange = function() {
		if(p.readyState == 4 && p.status == 200) {
			document.getElementById("status").innerHTML = '';
			var url = 'quiz.php?question=<?php echo $next; ?>';
			window.location = url;
	}
}
p.send(vars);
document.getElementById("status").innerHTML = "processing...";

}
</script>
<script>
window.oncontextmenu = function(){
	return false;
}
</script>
</head>

<body onLoad="getQuestion()">
<div id="status">
<div id="counter_status"></div>
<div id="question"></div>
<div id="answers"></div>
</div>
</body>
</html>

<?php include("slutt.html") ?>
