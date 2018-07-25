<html>
<head>
    <title>REST_FORM</title>
</head>
<body>
<form action="/api/rest" method="POST">
    {{ csrf_field() }}
    NAME:<input type="text" name="name"><br>
    MESSAGE:<input type="text" name="message"><br>
    <input type="submit" value="send">
</form>
</body>
</html>