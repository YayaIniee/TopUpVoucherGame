
<h4 class="title">
    <span class="text">
        <strong>
            Game List
        </strong>
    </span>
</h4>
<a href="index.php?p=game" class="btn btn-Go">Add</a>
<table class="table table-bodered">
    <tr>
        <th>No.</th>
        <th>Nama Game</th>
        <th>Genre</th>
        <th>Action</th>
    </tr>

    <?php
        require_once('./class/class.Game.php');
        $objGame = new Game();
        $arrayResult = $objGame->SelectAllGame();
        
        if(count($arrayResult) == 0){
            echo '<tr><td colspan="5">Tidak ada data!</td></tr>';
        } else{
            $no = 1;
            foreach($arrayResult as $dataGame){
                echo '<tr>';
                echo '<td>'.$no.'</td>';
                echo '<td>'.$dataGame->id.'</td>';
                echo '<td>'.$dataGame->name.'</td>';
                echo '<td>'.$dataGame->genre.'</td>';
                echo '<td>
                        <a href="index.php?p=game&id='.$dataGame->id.'" class="btn btn-success">Edit</a> | <a href="index.php?p=deletegame&id='.$dataGame->id.'" onclick="return confirm(\'Apakah anda yakin ingin menghapus\')">Delete</a></td>';            
                echo '</tr>';
                $no++;
            }
        }
    ?>

</table>