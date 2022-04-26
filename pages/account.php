<?php
    require_once('./class/class.Account.php');
    require_once('./class/class.Role.php');
    $objAccount = new Account();
    $objRole = new Role();
    $roleList = $objRole; //SelectAllRole()

    if(isset($_POST['btnSubmit'])){	
	
        $objAccount->nama = $_POST['nama'];
        $objAccount->email = $_POST['email'];
        $objAccount->password ='123456';
        $objAccount->idrole = $_POST['idrole'];
        
        if(isset($_GET['id'])){
            $objAccount->id = $_GET['id'];
            $objAccount->UpdateAccount();
        }
        else{	
            $cekEmail = $objAccount->ValidateEmail($_POST['email']);
        
            if($cekEmail)	
                echo "<script> alert('Email sudah terdaftar'); </script>";			
            else
                $objAccount->AddAccount();				
        }	
        
        if($objAccount->hasil){
            echo "<script> alert('".$objAccount->message."'); </script>";
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php?p=accountlist">'; 				
        }
        else{
            echo "<script> alert('Proses gagal. Silakan ulangi'); </script>";	
        }		
                    
    }
    else if(isset($_GET['id'])){	
        $objAccount->id = $_GET['id'];	
        $objAccount->SelectOneAccount();
    }

?>