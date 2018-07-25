<html>
<head>
    <title>REST_FORM</title>
</head>
<body>
<form action="/api/rest/{{ $rest->id }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    ID:<input type="text" name="id" value="{{ $rest->id }}"><br>
    NAME:<input type="text" name="name" value="{{ $rest->name }}"><br>
    MESSAGE:<input type="text" name="message" value="{{ $rest->message }}"><br>
    <input type="submit" value="send">
</form>
</body>
</html>