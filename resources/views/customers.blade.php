<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <!-- <form action="{{url('/')}}/customer" method="post"> -->
        <form action="{{$url}}" method="post">
            @csrf
            <div class="container">
                <h1 class="text-center">{{$title}}</h1>
                <div class="row">
                    <div class="form-group col-md-6 required">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{$customer!=Null ? $customer->name :''}}" class="form-control"
                            aria-describedby="helpId">
                        <span class="text-danger">
                            @error("name")
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6 required">
                        <label for="">Email</label>
                        <input type="text" name="email" value="{{$customer!=Null ? $customer->email :''}}" class="form-control"
                            aria-describedby="helpId">
                        <span class="text-danger">
                            @error("email") {{$message}} @enderror </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 required">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" aria-describedby="helpId">
                        <span class="text-danger">
                            @error("password") {{$message}} @enderror </span>
                    </div>
                    <div class="form-group col-md-6 required">
                        <label for="">Conform Password</label>
                        <input type="password" name="password_confirmation" class="form-control"
                            aria-describedby="helpId">
                        <span class="text-danger">
                            @error("password_confirmation") {{$message}} @enderror </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 required">
                        <label for="">Country</label>
                        <input type="text" name="country" value="{{$customer!=Null ? $customer->country :''}}" class="form-control"
                            aria-describedby="helpId">
                        <span class="text-danger">
                            @error("country") {{$message}} @enderror </span>
                    </div>
                    <div class="form-group col-md-6 required">
                        <label for="">state</label>
                        <input type="text" name="state" value="{{$customer!=Null ? $customer->state :''}}" class="form-control"
                            aria-describedby="helpId">
                        <span class="text-danger">
                            @error("state") {{$message}} @enderror </span>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="">Address</label>
                    <input type="text" name="address" value="{{$customer!=Null ? $customer->address :''}}" class="form-control"
                        aria-describedby="helpId">
                    <span class="text-danger">
                        @error("address") {{$message}} @enderror </span>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 required">
                        <label for="">Gender</label>
                        <input type="radio" name="gender" value="M" id="" class="form-control" {{$customer!=Null ? ($customer->gender=="M"?
                        "checked" :""):""}}
                        aria-describedby="helpId">Male
                        <input type="radio" name="gender" id="" value="F" class="form-control"  {{$customer!=Null ? ($customer->gender=="F"?
                        "checked" :""):""}}
                        aria-describedby="helpId">Female
                        <input type="radio" name="gender" id="" value="O" class="form-control"  {{$customer!=Null ? ($customer->gender=="O"?
                        "checked" :""):""}}
                        aria-describedby="helpId">Other

                        <span class="text-danger">
                            @error("gender") {{$message}} @enderror </span>
                    </div>
                    <div class="form-group col-md-6 required">
                        <label for="">Date of birth</label>
                        <input type="date" name="dob" id="" class="form-control" value="{{$customer!=Null ? $customer->dob :''}}"
                            aria-describedby="helpId">
                        <span class="text-danger">
                            @error("dob") {{$message}} @enderror </span>
                    </div>
                </div>
                <button class="btn btn-primary">
                    Submit
                </button>
            </div>
        </form>
    </div>

</body>

</html>