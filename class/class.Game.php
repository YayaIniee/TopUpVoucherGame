<?php 
	
   class Game extends Connection
   {
	public $id='';
	public $name = '';
	public $genre = '';
    public $foto = '';
       
       public $hasil = false;
	public $message ='';



    public function AddGame(){
        $sql = "INSERT INTO tblgame(id, nama, genre) 
                values ('$this->id', '$this->nama', '$this->genre)";
        $this->hasil = mysqli_query($this->connection, $sql);
        
        if($this->hasil)
           $this->message ='Data berhasil ditambahkan!';					
        else
           $this->message ='Data gagal ditambahkan!';	
    }

    public function UpdateGame(){
        $sql = "UPDATE tblgame SET nama ='$this->nama',
                genre = '$this->genre',
                WHERE id = $this->id";
        $this->hasil = mysqli_query($this->connection, $sql);
        
        if($this->hasil)
           $this->message ='Data berhasil diubah!';					
        else
           $this->message ='Data gagal diubah!';	
    }

    public function DeleteGame(){
        $sql = "DELETE FROM tblgame WHERE id=$this->id";
        $this->hasil = mysqli_query($this->connection, $sql);
        
        if($this->hasil)
           $this->message ='Data berhasil dihapus!';					
        else
           $this->message ='Data gagal dihapus!';	
    }

    public function SelectAllGame(){
        $sql = "SELECT * FROM tblgame";
        $result = mysqli_query($this->connection, $sql);
        $arrResult = Array();
        $count=0;
        
        if(mysqli_num_rows($result) > 0){
            while($data=mysqli_fetch_array($result)){
                $objGame = new Game();
                $objGame->id=$data['id'];
                $objGame->name=$data=['name'];
                $objGame->genre=$data=['genre'];
                $arrResult[$count] = $objGame;
				$count++; 
            }
        }
    }

    public function SelectOneGame(){
        $sql = "SELECT * FROM tblgame WHERE id='$this->id'";
        $resultOne =mysqli_query($this->connection, $sql);

        if(mysqli_num_rows($resultOne) == 1){
            $this->hasil = true;
            $data = mysqli_fetch_assoc($resultOne);
            $this->name=$data['name'];
            $this->genre=$data['genre'];
        }
    }


   }

	 
?>
