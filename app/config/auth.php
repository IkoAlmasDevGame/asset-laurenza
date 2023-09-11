<?php 

if(isset($_SESSION['statusCek'])){
    if(isset($_SESSION['id_user_cabang'])){
        if(isset($_SESSION['username'])){
            if(isset($_SESSION['bagian'])){
                if(isset($_SESSION['operasional'])){
                    if(isset($_SESSION['cabang'])){
                        if(isset($_SESSION['user_level'])){
                            if(isset($_SESSION['foto'])){
                                
                            }
                        }    
                    }
                }
            }    
        }
    }
}else{
    header("location:../tampilan/signin.php");
}

?>