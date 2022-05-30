<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center mt-5 w-100 mx-0">
                <div class="col-md-7">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h5>Register</h5>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" action="<?= base_url('action_register') ?>" method="post">
                                <input type="hidden" name="register" value="yes">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" name="email" required id="email" placeholder="john@example.com">
                                    <label for="email">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="username" required id="username" placeholder="john doe">
                                    <label for="username">Username</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="password" required id="pass" placeholder="john">
                                    <label for="pass">Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="passconf" required id="pass2" placeholder="john">
                                    <label for="pass2">Re-Password</label>
                                </div>
                                <?php
                                if ($this->session->flashdata('error') != null) {
                                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . strip_tags($this->session->flashdata('error')) . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                                }
                                ?>

                                <div class="d-flex col-12 justify-content-between">
                                <button type="submit" class="btn btn-primary mt-3">Daftar</button>
                                <a href="<?= base_url('login') ?>" class="link-primary align-self-center">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>