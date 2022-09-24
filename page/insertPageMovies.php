<?php
    include '../component/sidebar.php';
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
solid #D40013; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
    <div class="body d-flex justify-content-between">
        <h4 >Insert List Movies</h4>
    </div>
    <hr>
    <form action="../process/listMoviesProcess.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Nama Movie</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" required>
        </div>
        <div class="mb-3">
            <label for="realese" class="form-label">Release</label>
            <input type="text" class="form-control" id="realese" name="realese" required>
        </div>
        <div class="mb-3">
            <label for="season" class="form-label">Season</label>
            <input type="text" class="form-control" id="season" name="season" required>
        </div>
        <div class="mb-3">
            <label for="synopsis" class="form-label">Synopsis</label>
            <textarea class="form-control" rows="3" id="synopsis" name="synopsis" required></textarea>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary" name="insert">Tambah</button>
        </div>

    </form>
    
        
</div>