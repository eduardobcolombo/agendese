<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery UI Datepicker - Icon trigger</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
$( "#datepicker" ).datepicker({
showOn: "button",
buttonImage: "images/calendar.gif",
buttonImageOnly: true,
buttonText: "Select date"
});
});
</script>
</head>
<body>
<p>Date: <input type="text" id="datepicker"></p>
</body>
</html>