!DOCTYPE html>
<html>
<head>
<style>
p { background:yellow; }
</style>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>
<button>Showit</button>
<button>Removeit</button>
<p style="display:none">Hello Naveen! hello  How r u </p>
<script>
$("button").click(function () {
$("p").show("1999");
});
</script>
</body>
</html>