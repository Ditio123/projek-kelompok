<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head> 
<body>
    <div class="card-header border-bottom-0">
      <h2 class="text-bold">Buat Akun</h2>
        <h6>Sudah memiliki akun? <a href="./index.php">Masuk</a></h6>
    </div>

    <div class="card-body">
        <div class="form-group">
          <label class="font-weight-light" for="name">Nama Lengkap</label>
          <input type="text" class="form-control form-control-border bg-transparent text-white" id="name" name="name">
        </div>
        <div class="form-group">          
          <label class="font-weight-light" for="username">Username</label>
          <input type="text" class="form-control form-control-border bg-transparent text-white" id="username" name="username">
        </div>
        <div class="form-group">          
          <label class="font-weight-light" for="email">Email</label>
          <input type="text" class="form-control form-control-border bg-transparent text-white" id="email" name="email">
        </div>
        <div class="form-group">          
          <label class="font-weight-light" for="password">Password</label>
          <input type="password" class="form-control form-control-border bg-transparent text-white" id="password" name="password">
        </div>
        <div class="form-group">          
          <label class="font-weight-light" for="repassword">Re-password</label>
          <input type="password" class="form-control form-control-border bg-transparent text-white" id="repassword" name="password2">
        </div>        
      </div>      
      <div class="card-footer border-top-0 bg-transparent">     
        <button type="submit" class="btn btn-primary btn-flat float-right">Daftar</button>
      </div>
</body>
</html>