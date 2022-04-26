<?php
	//require("authorization_admin.php");
	if (empty($_GET['p'])) {
		header("HTTP/1.0 400 Bad Request", true, 400);
		exit('400: Bad Request');
	} 
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h4 class="title">
                <span class="text">
                    <strong>Account List</strong>
                </span>
            </h4>
            <br>
            <a href="index.php?p=account" class="btn btn-primary">Add Account</a>
            <br><br>
            <table class="table">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>

                <?php
                    require_once('./class/class.Account.php');
                    $objAccount = new Account(); 		
		            $arrayResult = $objAccount->SelectAllAccount();
                    if(count($arrayResult) == 0){
                        echo '<tr><td colspan="4">Tidak ada data!</td></tr>';			
                    } else {
                        $no = 1;
                        foreach ($arrayResult as $dataAccount){
                            echo '<tr>';
                            echo '<td>'.$dataAccount->nama.'</td>';
                            echo '<td>'.$dataAccount->email.'</td>';	
                            echo '<td>'.$dataAccount->role.'</td>';
                            echo '<td>
                                    <a href="index.php?p=account&id='.$dataAccount.'" class="btn  btn-warning">Edit</a> | 
                                    <a href="index.php?p=deleteaccount&id='.$dataAccount.'"
                                    onclick="return confirm(\apakah anda yakin ingin menghapusnya?\')" class="btn btn-danger">Delete</a></td>';
                            echo '</tr>';
                            $no++;
                        }
                    }
                ?>

            </table>


            <a href="pages/report_userlist.php" class="btn btn-success">Download</a>;
            
        </div>
    </div>
</div>