<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .route {
            display: flex;
            align-items: center;
            justify-content: end;
            padding: 10px 10px;
        }

        .con {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 90vh;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="route">
        <a href="{{ route('user.show') }}" class="btn btn-primary">All User</a>
    </div>
   <div class="con">
    <div class="card" style="width: 18rem;">
        <img src="https://cdn-icons-png.flaticon.com/512/666/666201.png" class="card-img-top" alt="...">
        <div class="card-body">
          <div class="d-flex justify-content-between"><h5 class="card-title">{{ $dataview->user_name }}</h5><h5 class="card-title">{{ $dataview->id }}</h5></div>
          <div class="d-flex justify-content-between">
            <p class="card-text">{{ $dataview->user_email }}</p>
          <p class="card-text">{{ $dataview->user_contact }}</p>
          </div>
          <p class="card-text">{{ $dataview->overview }}</p>
          <a href="#" class="btn btn-primary">{{ $dataview->role }}</a>
        </div>
      </div>
   </div>
</body>
</html>
