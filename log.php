          <!-- HEAD SECTION -->
<?php        include('includes/log_head.php');      ?>


<div class="login_page">
        <div class="container">
            <form action="" method="POST">
            <div class="row">
                 <div class="col-md-6 offset-md-3">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" class="btn" name="submit" value="LOG IN">
                    </div>
                 </div>

            </div>
           </form>
        </div>
    </div>

                 <!-- script SECTION -->
    <?php        include('includes/script.php');      ?>