<?php
    include '../component/sidebar.php';
    $query = mysqli_query($con, "SELECT * FROM users WHERE id = ". $_SESSION['user']['id']);
    $user = mysqli_fetch_assoc($query);
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
solid #D40013; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 
0.19);" >

    <div class="body d-flex justify-content-between">
    <h4 >MY PROFILE</h4>
        <a href="../page/dashboardPage.php"><i class="fa fa-arrow-left fa-2x" style="color: black" aria-hidden="false"></i></a>
    </div>
    <div class="card-body">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input class="form-control" id="name" name="name"aria-describedby="emailHelp" value=" <?php echo $user['name']?>" disabled>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                <input class="form-control" id="phonenum"name="phonenum" aria-describedby="emailHelp" value=" <?php echo $user['phonenum']?>" disabled>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Job</label>
                <select class="form-select" aria-label="Default select example" name="membership" id="membership" value="<?php echo $user['job']?>" disabled>
                    <option value="Chef">Chef</option>
                    <option value="Mechanic">Mechanic</option>
                    <option value="Lecturer">Lecturer</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input class="form-control" id="email"name="email" aria-describedby="emailHelp" value=" <?php echo $user['email']?>" disabled>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Membership</label>
                <select class="form-select" aria-label="Default select example" name="membership" id="membership" value=" <?php echo $user['membership']?>" disabled>
                    <option value="Reguler">Reguler</option>
                    <option value="Platinum">Platinum</option>
                    <option value="Gold">Gold</option>
                </select>
            </div>
        </form>
</div>