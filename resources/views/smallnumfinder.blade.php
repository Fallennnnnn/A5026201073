<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Smallest Number Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    #header {
        border-bottom: 2px solid rgb(0, 0, 0);
        border-top: 2px solid rgb(0, 0, 0);
        border-right: 2px solid rgb(0, 0, 0);
        border-left: 2px solid rgb(0, 0, 0);
        border-radius: 30px;
        background-color: rgba(34, 30, 30, 0.712);
        color: white;
        text-align: center;
    }
    .container {
        padding-top: 50px;

    }
    #form {
        border-bottom: 2px solid rgb(0, 0, 0);
        border-top: 2px solid rgb(0, 0, 0);
        border-right: 2px solid rgb(0, 0, 0);
        border-left: 2px solid rgb(0, 0, 0);
        border-radius: 30px;
        background-color: rgb(129, 43, 129);
    }
    label {
        font-size: 21px;
        font-weight: bold;
    }
    .form-group {
        width: 45%;
        margin: auto;
    }
    body{
        background-image: url("https://wallpapercave.com/wp/wp7122273.jpg");
        background-size: cover;

    }
</style>
<script> function refwindow() {
    window.location.reload(true);
}
</script>
<body>
    <div class="container-fluid" >
        <div class="container">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10" id="header">
                    <br>
                    <h1>Smallest Number Finder !</h1>
                    <p>Input the number u want to know which is the smallest among them </p>
                    <form action = "smallnumres" method = "post">
                        @csrf
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <div class="container" id = "form">

                    <div class="form-group" >
                       <label for="num1">Number 1:</label>
                        <input type="number" class="form-control" id="num1" name="number1" autocomplete="off">
                        <br>
                    </div>
                    <div class="form-group">
                        <label for="num2">Number 2:</label>
                        <input type="number" class="form-control" id="num2" name="number2"autocomplete="off">
                        <br>
                    </div>
                    <div class="form-group">
                        <label for="num3">Number 3:</label>
                        <input type="number" class="form-control" id="num3" name="number3"autocomplete="off">
                        <br>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success" style="width: 200px;" id="decide"
                        >Decide</button>
                        <br>
                        <br>
                        <input type="button" value = "Refresh" class="btn btn-success" style="width: 200px;" id="ref" onclick="refwindow();"
                        >
                    <br><br>
                        </div>
                        <br><br>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
