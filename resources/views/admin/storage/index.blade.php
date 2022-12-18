<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>


<h1>List of assets:</h1>

<table>
    <tr>
        <th>#</th>
        <th>Crypto symbol</th>
        <th>Amount</th>
    </tr>
    @foreach($storages as $storage)
        <tr>
            <td></td>
            <td>{{$storage->symbol}}</td>
            <td>{{$storage->amount}}</td>
        </tr>
    @endforeach
</table>


</body>
</html>




