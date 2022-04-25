<?php
    require_once('./class/class.Game.php');
    $objGame = new Game();
    if(isset($_POST['btnSubmit'])){
        $objGame->id = $_POST['id'];
        $objGame->name = $_POST['name'];
        $objGame->genre = $_POST['genre'];
            if(isset($_GET['id'])){
                $objGame->id=$_GET['id'];
                $objGame->UpdateGame();
            } else{
                $objGame->AddGame();
            }
            echo "<script>alert('$objGame->message');</script>"
            if($objGame->hasil){
                echo '<script> window.location = "index.php?p=gamelist";</script>';
            } else if(isset($_GET['id'])){
                $objGame->id=$_GET['id'];
                $objGame->SelectOneGame()
            }
    }
?>
<h4 class="title">
    <span class="text">
        <strong>Game</strong>
    </span>
</h4>
<form action="" method="POST">
    <table class="table">
        <tr>
            <td>ID</td>
            <td>:</td>
            <td><input type="text" class="form-control" name="id" 
            value="<?php echo $objGame->id; ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" class="form-control" id="name" name="name"
            value="<?php echo $objGame->name; ?>"></td>
        </tr>
        <tr>
            <td>Genre</td>
            <td>:</td>
            <td><input type="text" class="form-control" id="genre" name="genre"
            value="<?php echo $objGame->genre; ?>"></td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td><input type="submit" class="btn btn-success" value="Save" name="btnSubmit">
            <a href="index.php?p=gamelist" class="btn btn-warning">Cancel</a></td>
        </tr>
    </table>
</form>
