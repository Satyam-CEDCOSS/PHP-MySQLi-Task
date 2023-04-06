<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <header>
        <div class="card">
        <img src="./image/img.jpg" alt="image" class="img-center" />
        <div class="card-img-overlay">
          <h2 class="card-title">Welcome User</h2>
          <table class="header__table">
            <thead>
                <tr>
                <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody id="table_body"></tbody>
          </table>
        </div>
        </div>
    </header>
</body>
<script src="./JS/script.js"></script>
</html>