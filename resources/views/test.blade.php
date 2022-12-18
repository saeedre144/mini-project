<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mini-project</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>

{{--------------------DATA of CRYPTOs ------------------------}}


<h1>The first 20 of cryptos  order by MARKET-CAP:</h1>
<table>
    <tr>
        <th>#</th>
        <th>crypto name</th>
        <th>crypto symbol</th>
        <th>price (usd)</th>
    </tr>
    @foreach($matches as $match)
    <tr>
        <td></td>
        <td>{{$match->id }}</td>
        <td>{{$match->symbol }}</td>
        <td>{{$match->current_price}}</td>
    </tr>
    @endforeach
</table>



{{--------------PURCHASE SECTION------------------------}}



<h2>purchase a CRYPTO:</h2>

<p>please select amount and crypto name:</p>

<form action="{{url('test')}}" method="post">
    @csrf
    <label for="amount">amount:</label>
    <input type="text" id="amount" name="amount" /><br>
    <br>
    <label for="symbol">Choose a crypto:</label>
    <select name="symbol" id="symbol">
        @foreach($matches as $match)
        <option value="{{$match->symbol}}">{{$match->symbol}}</option>
        @endforeach
    </select>
    <br><br>

    <input type="submit" value="purchase">

</form>


</body>
</html>
