<?php
    session_start();
    if(isset($_POST['editSeries'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $id = $_POST['id'];
        $name = $_POST['name'];
        $genre = "";
        foreach ($_POST['genre'] as $gnr) {
            $genre= $genre.$gnr."";
        }
        $realease = $_POST['realease'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];

        $query = mysqli_query($con," UPDATE series SET name='$name', genre='$genre', realease='$realease', episode='$episode',  season='$season', synopsis='$synopsis' WHERE id='$id'") 
        or die(mysqli_error($con)); 

        if($query){
            echo
                '<script>
                alert("Edit Series Success"); 
                window.location = "../page/listSeriesPage(CRUD).php"
                </script>';
        }else{
            echo
                '<script>
                alert("Edit Series Failed");
                window.location = "../page/listSeriesPage(CRUD).php"
                </script>';
        }
        
        }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>