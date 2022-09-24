<?php
    session_start();
    if(isset($_POST['save'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $email = $_POST['email'];
        $name = $_POST['name'];
        $phonenum = $_POST['phonenum'];
        $job = $_POST['job'];

        $query = mysqli_query($con,"UPDATE users SET email='$email', name='$name', phonenum='$phonenum', job='$job' WHERE id = ". $_SESSION['user']['id']);

        if($query){
            echo
                '<script>
                alert("Edit Success"); 
                window.location = "../page/myProfile.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Edit Failed");
                </script>';
        }
        
        }else{
        echo
            '<script>
            window.location = "../page/myProfile.php"
            </script>';
    }
?>