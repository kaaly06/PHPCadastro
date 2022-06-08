<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">       
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Funcionario</title>
    </head>

<body>
     <table>
          <tr>
              <th></th>
              <th>Id</th>
              <th>nome</th>
              <th>genero</th>
              <th>email</th>
              <th>endereco</th>
              <th>telefone</th>
              <th>cargo</th>
          </tr>
          <?php foreach($model->rows as $item): ?>
          <tr>
              <td>
                    <a href="/funcionario/delete?id=<?=$item->id ?> ">X</a>
              </td>
              <td><?= $item->id ?></td>

              <td>
              <a href="/funcionario/form?id=<?= $item-> id ?>"><?= $item->nome?></a>
              </td>

              <td><?= $item->genero ?></td>
              <td><?= $item->email ?></td>
              <td><?= $item->endereco ?></td>
              <td><?= $item->telefone ?></td>
              <td><?= $item->cargo ?></td>
            </tr>
          <?php endforeach ?>
     </table>
</body>   
</html>