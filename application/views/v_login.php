<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>

    <div class="row justify-content-center mt-5 w-100 mx-0">
        <div class="col-md-4 ">
            <div class="card card-primary">
                <div class="card-header">
                    login
                </div>
                <div class="card-body">
                    <form method="post" action="<?= base_url('login_aksi'); ?>">
                        <div class="from-group">
                            <label for="username">Username</label>
                            <input id="username" type="text" name="username" class="form-control" autocomplete="off">
                            <small><span class="text-danger"><?= form_error('username'); ?></span></small>
                        </div>
                        <div class="from-group mt-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" autocomplete="off">
                            <small><span class="text-danger"><?= form_error('password'); ?></span></small>
                        </div>
                        <?php
                        if ($this->session->flashdata('message') != null) {
                            echo '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">' . strip_tags($this->session->flashdata('message')) . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        }
                        ?>
                        <?php if ($this->session->flashdata('error') != null) : ?>
                            <div class="alert alert-danger mt-5" role="alert">
                                <?= $this->session->flashdata('error') ?>
                            </div>
                        <?php endif ?>
                        <?php if ($this->session->flashdata('success') != null) : ?>
                            <div class="alert alert-success mt-5" role="alert">
                                <?= $this->session->flashdata('success') ?>
                            </div>
                        <?php endif ?>
                        <div class="d-flex col-12 justify-content-between items-align-center">
                        <button type="submit" class="btn btn-primary mt-3">Login</button>
                        <a href="<?= base_url('register') ?>" class="link-primary align-self-center">Register</a>
                        <a href="<?= base_url('lupapw') ?>" class="link-primary align-self-center">Lupa Password</a>
                        </div>
                    </form>
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