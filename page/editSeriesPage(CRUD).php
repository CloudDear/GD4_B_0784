<?php
 include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
solid #D40013; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 
0.19);" >
<h4 >EDIT SERIES</h4>
    <div class="countainer card-content w-50">
        <form action="../process/editSeriesProcess(CRUD).php" method="POST">
        <?php
            if(isset($_GET['id'])){

                include('../db.php');
                $id = $_GET['id'];

                $data = mysqli_query($con,"SELECT * FROM series WHERE id=$id") 
                or die(mysqli_error($con));
                if($data) {
                    if(mysqli_num_rows($data) > 0) {
                    $row = mysqli_fetch_assoc($data);   
                    $id = $row['id'];
                    $name = $row['name'];
                    $genre = $row['genre'];
                    $realease = $row['realease'];
                    $episode = $row['episode'];
                    $season = $row['season'];
                    $synopsis = $row['synopsis'];
                    }
                }
            }
                
            ?>
            
            <div>
                <input type="text" name="id" id="id" hidden value="<?php echo $id?>">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input class="form-control" id="name" name="name"aria-describedby="name" value=" <?php echo $name?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Genre</label>
                <select class="form-select" aria-label="Default select example" name="genre[]" size = 5 multiple="multiple" id="genre[]" value=" <?php echo $genre?>">
                    <option value="Action">Action</option>
                    <option value="Romance">Romance</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Thriller">Thriller</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Realease</label>
                <input class="form-control" id="realease"name="realease" aria-describedby="realease" value=" <?php echo $realease?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Episode</label>
                <input class="form-control" id="episode"name="episode" aria-describedby="episode" value=" <?php echo $episode?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Season</label>
                <input class="form-control" id="season"name="season" aria-describedby="season" value=" <?php echo $season?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Synopsis</label>
                <input class="form-control" id="synopsis"name="synopsis" aria-describedby="synopsis" value=" <?php echo $synopsis?>">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="editSeries">Edit</button>
            </div>
        </form>
    </div>
        </div>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>