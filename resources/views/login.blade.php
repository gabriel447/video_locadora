<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="d-flex justify-content-center align-items-center vh-100 bg-primary">
        <form class="col-6 bg-white rounded p-5" method="">
            <div class="form-group m-4">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group m-4">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group m-4 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary m-4"><a href="/home" class="text-white" style="text-decoration: none;">Submit</a></button>
        </form>
    </div>
</body>

</html>