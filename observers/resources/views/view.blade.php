<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .route {
            display: flex;
            align-items: center;
            justify-content: end;
            padding: 10px 10px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="route">
        <a href="/" class="btn btn-primary">Form Page</a>
    </div>
    <div class="p-5 d-flex justify-content-center gap-2">

        <div class="card p-3" style="width: 100%">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">USER NAME</th>
                        <th scope="col">USER EMAIL</th>
                        <th scope="col">USER CONTACT</th>
                        <th scope="col">USER OVERVIEW</th>
                        <th scope="col">USER ROLE</th>
                    </tr>
                </thead>
                @foreach ($user as $key => $value)
                    <tbody>
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->user_name }}</td>
                            <td>{{ $value->user_email }}</td>
                            <td>{{ $value->user_contact }}</td>
                            <td>{{ $value->overview }}</td>
                            <td>{{ $value->role_type == 'App\Models\Reseller' ? 'Resaller' : 'Supplier' }}</td>
                            <td>
                                @php $role = $value->roleable; @endphp
                                {{ dd($role) }}
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>

    </div>
</body>

</html>
