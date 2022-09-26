<?php
    session_start();
    if(isset($_POST['insertSeries'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input

        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $realease = $_POST['realease'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];

        $query = mysqli_query($con," INSERT INTO series(name, genre, realease, episode, season, synopsis) VALUES('$name', '$genre', '$realease', '$episode', '$season', '$synopsis')") 
                or die(mysqli_error($con)); 

        if($query){
            echo
                '<script>
                alert("Insert Series Success"); 
                window.location = "../page/insertSeriesPage(CRUD).php"
                </script>';
        }else{
            echo
                '<script>
                alert("Edit Series Failed");
                window.location = "../page/insertSeriesPage(CRUD).php"
                </script>';
        }
        
        }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>