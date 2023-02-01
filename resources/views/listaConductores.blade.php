<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listaConductores</title>
</head>
<body>
<table>
    <tr>
      <th>Nombre</th>
      <th>Apellidos</th>

    </tr>
   @foreach($drivers as $driver)
    <tr>
        <td>$driver->nombre</td>
        <td>$driver->apellidos</td>

    </tr>
@endforeach
  </table>
</body>
</html>