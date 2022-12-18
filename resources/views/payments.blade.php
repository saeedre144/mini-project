<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>payments</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<h1>payments:</h1>

<h1>List of payments:</h1>

<table>
    <tr>
        <th>#</th>
        <th>Crypto symbol</th>
        <th>Amount</th>
        <th>time</th>
    </tr>
    @foreach($payments as $payment)
        <tr>
            <td></td>
            <td>{{$payment->symbol}}</td>
            <td>{{$payment->amount}}</td>
            <td>{{$payment->created_at}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
