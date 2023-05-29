<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 14</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header text-center">Module 15 Assignment Form</div>
                    <div class="card-body">
                        <p class="text-success text-center"></p>
                        <form action="{{url('form-submit')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" required name="name"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" required name="email"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" required name="password"/>
                                </div>
                            </div>
                            <div class="py-3"></div>
                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success px-5" name="btn"
                                           value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>