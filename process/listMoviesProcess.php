<?php
    
    if(isset($_POST['insert'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $realese = $_POST['realese'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];
    
        $query = mysqli_query($con, "INSERT INTO movies(name, genre, realese, season, synopsis)
            VALUES ('$name', '$genre', '$realese', '$season', '$synopsis')")
            or die(mysqli_error($con));

        if($query){
            echo
                '<script>
                alert("Insert Success"); 
                window.location = "../page/myProfile.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Insert Failed");
                </script>';
        }
        
        }
?>