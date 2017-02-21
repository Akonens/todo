<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TEST</title>
  </head>
  <body>
    <span>{{ $diena }}</span>
    {{$id}}

    <span>{{ $piecinieks }}</span>
    <span>{{ $name }}</span>
    <span>{{ $lietotajs->name }}</span>

    <?php
$id = 2;

$data['id'] = $id;
$data['name'] = 'Nikita';
$data['surname'] = 'Lavruhins';
$data['name'] = 'Jaroslavs';

dd($data);
  </body>
</html>
