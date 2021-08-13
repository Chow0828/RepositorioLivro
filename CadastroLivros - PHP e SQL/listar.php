<style>
    body{
    font-family: Arial, Helvetica, sans-serif;
    }

    table{
        border: 1px solid black;
        margin: auto;
        margin-top: 40px;
        text-align: center;
        background:#fafafa ;
    }
    td{
        border-right: 1px solid black;
        border-top: 1px solid black;
        border-bottom: 1px solid black;
    }

    td:nth-child(even) {
    background:lightgreen;
    }
    .field {
    display: flex;
    justify-content: center;
    margin: auto;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #DDD;
    border-radius: 5px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;

}
    .decoration{
    text-decoration: none;
    color: black;
    cursor: pointer;
}

</style>
<table>
    <thead>
        <td>Id</td>
        <td>Nome</td>
        <td>Ano</td>
        <td>Cadastro</td>
        <td>Exemplares</td>
        <td>Controles</td>
    </thead>
    <tbody>
<?php
include('conexao.php');

$sql = 'SELECT * FROM tb_livro ORDER BY nm_livro ASC';
$executa = $GLOBALS['con']->query($sql);
while($livro = $executa->fetch_array()){
    echo '<tr>
          <td>'.$livro['id_livro'].'</td>';
    echo '<td>'.$livro['nm_livro'].'</td>';
    echo '<td>'.date('Y',strtotime($livro['dt_ano'])).'</td>';
    echo '<td>'.date('Y',strtotime($livro['dt_cadastro'])).'</td>';
    echo '<td>'.$livro['qt_exemplares'].'</td>';
    echo '<td>
            <a href="excluir.php?id_livro='.$livro['id_livro'].'">Excluir</a>
          </td>
          </tr>';
        }
        ?>
    </tbody>
</table>
<br>
<button class="field"><a href="cadastrar.php" class="decoration">Cadastrar Livros</a></button>
  