<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Token</title>
</head>

<body>

  <table cellpadding="10" cellspacing="0" border="1">
    <thead>
      <tr>
        <th>Token</th>
        <th>Token</th>
        <th>Token</th>
        <th>Token</th>
        <th>Token</th>
        <th>Token</th>
        <th>Token</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $index => $token)
        @if ($index % 7 == 0)
          </tr>
          <tr style="padding: 10px">
        @endif
        <td>{{ $token->token }}</td>
      @endforeach
      </tr>
    </tbody>
  </table>


</body>

</html>
