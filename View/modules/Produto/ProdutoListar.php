<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">       
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Produto</title>
    </head>

<body>
     <table>
          <tr>
              <th></th>
              <th>Id</th>
              <th>nome</th>
              <th>preco</th>  
              <th>descricao</th>      
          </tr>

          <?php foreach($model->rows as $item): ?>
          <tr>
              <td>
                    <a href="/produto/delete?id=<?=$item->id ?> ">X</a>
              </td>
              <td><?= $item->id ?></td>

              <td>
              <a href="/produto/form?id=<?= $item-> id ?>"><?= $item->nome?></a>
              </td>

              <td><?= $item->preco?></td>
              <td><?= $item->descricao ?></td>
            </tr>
          <?php endforeach ?>
     </table>
</body>   
</html>