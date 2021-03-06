
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-secondary shadow-lg text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>
                            <form method="POST">
                                <div class="form-outline form-white mb-4">
                                    <input type="text" id="typeEmailX" name='username' class="form-control form-control-lg" placeholder="UserName" />
                                    <label class="form-label">UserName</label>

                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" id="typePasswordX" name='password' class="form-control form-control-lg" placeholder="***..." />
                                    <label class="form-label">Password</label>
                                </div>



                                <input class="btn btn-outline-light btn-lg px-5" name="submit" type="submit" value="Login">
                            </form>

                        </div>

                        <?php
                        if (isset($_POST['submit'])) {
                            $username = $_POST['username'];
                            $password = $_POST['password'];
   
                            $query =mysqli_query($db,"SELECT * FROM `admin` WHERE `admin_username` = '$username' AND `admin_password` = '$password'");
                            if($query->num_rows > 0){
                              
                                header("location:./includes/dashbordnews.php");
                            }
                            else{
                                echo "<p class='bg-danger'>Invalid Username or Password</p>";
                            }
                            
                            
                         
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>