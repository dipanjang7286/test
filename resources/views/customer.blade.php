<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Customer Registration</title>
</head>
<body>
    <form action="{{url('/')}}/register" method="post">
        @csrf
        <div class="container form-control mt-3">
            <h2 class="text-center">
                Registration
            </h2>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Full Name"
                    value="{{old('name')}}" aria-describedby="helpId">
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
                {{-- <small id="helpId" class="text-muted">Help Text</small> --}}
            </div>
            <div class="form-group mb-3">
                <label for="">Email ID</label>
                <input type="text" name="email" id="eid" class="form-control" placeholder="Enter Your Email Id"
                    value="{{old('email')}}" aria-describedby="helpId">
                <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                </span>
                {{-- <small id="helpId" class="text-muted">Help Text</small> --}}
            </div>
            <div class="form-group mb-3">
                <label for="">Password</label>
                <input type="password" name="password" id="pass" class="form-control" placeholder="Enter Password"
                    aria-describedby="helpId">
                <span class="text-danger">
                    @error('password')
                    {{$message}}
                    @enderror
                </span>
                {{-- <small id="helpId" class="text-muted">Help Text</small> --}}
            </div>
            <div class="form-group mb-3">
                <label for="">Confirm Password</label>
                <input type="password" name="password_confirmation" id="pass" class="form-control"
                    placeholder="Enter Password" aria-describedby="helpId">
                <span class="text-danger">
                    @error('password_confirmation')
                    {{$message}}
                    @enderror
                </span>
                {{-- <small id="helpId" class="text-muted">Help Text</small> --}}
            </div>
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
</html>