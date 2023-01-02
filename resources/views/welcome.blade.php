<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    </head>
    <body>
    <div class="container mt-5 ">
        <form class="row g-3" action="{{ route('employee.create') }}" method='POST'>
            @csrf
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">job title</label>
                <input type="text" name="jobtitle" class="form-control" placeholder="job title" id="inputPassword4">
            </div>
            <div class="col-md-6">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-md-6">
                <label for="inputAddress2" class="form-label">Age </label>
                <input type="text" name="age" class="form-control" id="inputAddress2" placeholder="age">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="inputCity" placeholder="Email">
            </div>
            <div class="col-md-6">
                <label for="inputState" class="form-label">phone number</label>
                <input type="text" name="phonenumber" class="form-control" id="inputCity" placeholder="phone number">

            </div>

            <div class="col-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
