{{--  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .route {
            display: flex;
            align-items: center;
            justify-content: end;
            padding: 10px 10px;
        }

        .sub {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href="{{ route('user.show') }}" class="btn btn-primary">Show Users all data</a>
                </form>
            </div>
        </div>
    </nav>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="p-5">

        <div class="card p-3">
            <form class="row g-3" action="{{ route('form.create') }}" method="POST" enctype="multipart/form-data">
                <h3 class="text-center">User Form</h3>
                @csrf
                <div class="col-12">
                    <label for="inputAddress" class="form-label">User_Name</label>
                    <input type="text" name="name" class="form-control" id="inputAddress"
                        placeholder="Enter Name">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">User_Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4"
                        placeholder="Enter Email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">User_Contact</label>
                    <input type="text" name="contact" class="form-control" id="inputPassword4"
                        placeholder="Enter Contact">
                    @error('contact')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="inputState" class="form-label">Role</label>
                    <select id="inputState" name="role_type" class="form-select">
                        <option selected disabled>Choose...</option>
                        <option value="1">Reseller</option>
                        <option value="2">Supplier</option>
                    </select>
                    @error('role_type')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Addess</label>
                    <textarea name="address" class="form-control" cols="30" rows="2.5" placeholder="Enter address"></textarea>
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="inputState" class="form-label">Gender</label>
                    <select id="inputState" name="gender" class="form-select">
                        <option selected disabled>Choose...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    @error('gender')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Overview</label>
                    <textarea name="overview" class="form-control" cols="30" rows="2.5" placeholder="Enter Overview"></textarea>
                    @error('overview')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12 sub">
                    <button type="submit" style="width: 100%" class="btn btn-primary">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>  --}}


<html lang="en">

<head>
    <title>How to Image Upload and Crop in Laravel with Ajax</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="container">
        <div class="card" style="max-height: 500px;">
            <div class="card-header bg-primary text-center text-white">How to Image Upload and Crop in Laravel with Ajax
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4 text-center">
                        <div id="upload-demo"></div>
                    </div>
                    <div class="col-md-4" style="padding:5%;">
                        <strong>Select image to crop:</strong>
                        <input type="file" name="name" id="image">

                        <button class="btn btn-success btn-block upload-image" style="margin-top:2%">Cropping
                            Image</button>
                    </div>

                    <div class="col-md-4">
                        <div id="preview-crop-image" style="width:300px;padding:50px 50px;height:300px;"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var resize = $('#upload-demo').croppie({
            enableExif: true,
            enableOrientation: true,
            viewport: { // Default { width: 100, height: 100, type: 'square' }
                width: 200,
                height: 200,
                type: 'circle' //square
            },
            boundary: {
                width: 300,
                height: 300
            }
        });
        $('#image').on('change', function() {
            var reader = new FileReader();
            reader.onload = function(e) {
                resize.croppie('bind', {
                    url: e.target.result
                }).then(function() {
                    console.log('jQuery bind complete');
                });
            }
            reader.readAsDataURL(this.files[0]);
        });
        $('.upload-image').on('click', function(ev) {
            resize.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(img) {
                $.ajax({
                    url: "{{ route('form.create') }}",
                    type: "POST",
                    data: {
                        "user_name": img
                    },
                    success: function(data) {
                        html = '<img src="' + img + '" />';
                        $("#preview-crop-image").html(html);
                    }
                });
            });
        });
    </script>


</body>

</html>
