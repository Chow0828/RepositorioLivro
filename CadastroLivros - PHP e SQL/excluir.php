<?php 
include('conexao.php');
ini_set('default_charset', 'utf-8');

if(isset($_GET['id_livro'])){

$sql = 'DELETE FROM tb_livro WHERE id_livro = '.$_GET['id_livro'];
$executa = $GLOBALS['con']->query($sql);
    if($executa){
        echo '<script>
                alert("Livro excluído");
                window.location = "listar.php"
              </script>';
    }else{
        echo 'Erro ao excluír livro: '.$GLOBALS['con']->error;
    }
}
?>