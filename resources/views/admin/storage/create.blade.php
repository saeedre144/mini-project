<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>storage</h1>
<h3>create new asset:</h3>

<form action="{{ route('storage.store') }}" method="post" >
    @csrf

    <label for="symbol">crypto:</label>
    <input type="text" id="symbol" name="symbol" /><br>
    <br>
    <br>

    <label for="amount">amount:</label>
    <input type="number" id="amount" name="amount" /><br>
    <br>
    <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>


