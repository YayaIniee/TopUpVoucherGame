<?php
	class Account extends Connection
	{
		private $id =0;
		private $nama='';
		private $email='';
		private $password='';			
		private $role='';	
		private $idrole=0;	
		private $hasil = false;
		private $message ='';

		public function __get($atribute) {
			if (property_exists($this, $atribute)) {
				return $this->$atribute;
			}
		}
	
		public function __set($atribut, $value){
			if (property_exists($this, $atribut)) {
					$this->$atribut = $value;
			}
		}


        public function AddAccount(){
			
			$sql = "INSERT INTO tblaccount(nama, email, password, role) 
		            values ('$this->nama', '$this->email', '$this->password', '$this->role')";
			$this->hasil = mysqli_query($this->connection, $sql);
			$this->id = $this->connection->insert_id;	
			
			if($this->hasil)
			   $this->message ='Data berhasil ditambahkan!';					
		    else
			   $this->message ='Data gagal ditambahkan!';
		}


        public function UpdateAccount(){
			$sql = "UPDATE tblaccount 
					SET nama = '$this->nama',
					email = '$this->email',
					password = '$this->password',
					idrole = '$this->idrole'					
					WHERE id = $this->id";
			$this->hasil = mysqli_query($this->connection, $sql);
			
			if($this->hasil)
			   $this->message ='Data berhasil diubah!';					
		    else
			   $this->message ='Data gagal diubah!';
		}


        public function DeleteAccount(){
			$sql = "DELETE FROM tblaccount WHERE id=$this->id";
			$this->hasil = mysqli_query($this->connection, $sql);
			
			if($this->hasil)
			   $this->message ='Data berhasil dihapus!';					
		    else
			   $this->message ='Data gagal dihapus!';				
		}


        public function SelectAllAccount(){
			$sql = "SELECT a.*, b.role FROM tblaccount a inner join tblrole b on a.idrole = b.id ORDER BY id ASC";
			$result = mysqli_query($this->connection, $sql);	
			$arrResult = Array();
			$count=0;
			if(mysqli_num_rows($result) > 0){				
				while ($data = mysqli_fetch_array($result))
				{
					$objAccount = new Account(); 
					$objAccount->id=$data['id'];
					$objAccount->nama=$data['nama'];
					$objAccount->email=$data['email'];
					$objAccount->password=$data['password'];			
					$objAccount->idrole=$data['idrole'];
					$objAccount->role=$data['role'];
					$arrResult[$count] = $objAccount;
					$count++;
				}
			}
			return $arrResult;			
		}

        public function SelectOneAccount(){
			$sql = "SELECT * FROM tblaccount WHERE id='$this->id'";
			$resultOne = mysqli_query($this->connection, $sql);	
			if(mysqli_num_rows($resultOne) == 1){
				$this->hasil = true;
				$data = mysqli_fetch_assoc($resultOne);
				$this->id=$data['id'];
				$this->nama = $data['nama'];				
				$this->email=$data['email'];
				$this->password=$data['password'];			
				$this->idrole=$data['idrole'];							
			}							
		}

        public function ValidateEmail($email){
			$sql = "SELECT a.*, b.id as idmember, c.role FROM tblaccount a LEFT JOIN tblmember b ON a.id = b.idaccount JOIN tblrole c on a.idrole = c.id WHERE email='$email'";    
			$resultOne = mysqli_query($this->connection, $sql);	
			if(mysqli_num_rows($resultOne) == 1){
				$this->hasil = true;
				$data = mysqli_fetch_assoc($resultOne);
				$this->id=$data['id'];
				$this->idmember=$data['idmember'];
				$this->nama = $data['nama'];				
				$this->email=$data['email'];
				$this->password=$data['password'];			
				$this->role=$data['role'];							
				$this->idrole=$data['idrole'];							
				return true;		
			}							
		}



    }


?>