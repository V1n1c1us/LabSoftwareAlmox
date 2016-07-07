<?php
include '../DB/connect.php';
$output = '';
$sql = "SELECT * FROM produto ORDER BY idProduto";
$result = $conn->prepare($sql);
$result->execute() or die("<div class='alert alert-danger'>Erro ao pesquisar</div>");
$row = $result->rowCount();
$output .= '
      <div class="table-responsive">
           <table class="table table-bordered">
                <tr>
                     <th width="10%">Id</th>
                     <th width="40%">First Name</th>
                     <th width="40%">Last Name</th>
                </tr>';
if(($row) > 0)
{
    while($row = $result->fetch())
    {
        $output .= '
                <tr>
                     <td>'.$row["idproduto"].'</td>
                     <td class="quantidade" data-id1="'.$row["idproduto"].'" contenteditable>'.$row["quantidade"].'</td>
                     <td class="descricao" contenteditable>'.$row["descricaoproduto"].'</td>
                </tr>
           ';
    }
    $output .= '
           <tr>
                <td></td>
                <td id="quantidade" contenteditable></td>
                <td id="descricao" contenteditable></td>
           </tr>
      ';
}
else
{
    $output .= '<tr>
                          <td colspan="4">Data not Found</td>
                     </tr>';
}
$output .= '</table>
      </div>';
echo $output;
?>
