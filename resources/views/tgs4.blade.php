<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Smallest Number</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<script>
    function smallestnumm() {
        var num1 = document.getElementById("num1").value;
        var num2 = document.getElementById("num2").value;
        var num3 = document.getElementById("num3").value;

        if (num1 <= num2) {
            if ( num1 <= num3)
                smallest = num1;
            else
                smallest = num3;
        } else {
            if ( num2 <= num3)
            smallest = num2;
            else
            smallest = num3;
        }
    return smallest;
}
        function printres() {
            document.getElementById("hasil").innerHTML = "The smallest number is " + smallestnumm();
        }
        function refpage() {
            window.location.reload();
        }
</script>

<body>
    <div class="container p-4 text-white ">
        <div class="container  bg-success text-center">
            <br>
            <h1>Smallest number finder !</h1>
            <p>Input the number u want to know which is the smallest among them </p>
            <div class="d-flex justify-content-center  flex-row">
                <div class="jumbotron bg-danger">

                    <div class="form-group">
                        <label for="num1">Number 1:</label>
                        <input type="number" class="form-control" id="num1" name="number1">
                    </div>
                    <div class="form-group">
                        <label for="num2">Number 2:</label>
                        <input type="number" class="form-control" id="num2" name="number2">
                    </div>
                    <div class="form-group">
                        <label for="num3">Number 3:</label>
                        <input type="number" class="form-control" id="num3" name="number3">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-dark" style="width: 200px;" id="decide"
                        onclick="printres();">Decide</button>
                        <br>
                        <br>
                    <button type="refresh" class = "btn btn-dark" style = "width: 175px;" id ="ref" onclick = "refpage();">Refresh </button>
                </div>
            </div>
        </div>
        <div class="container bg-dark text-center text-white">
            <h3 id="hasil"></h3>
        </div>
        <br>
    </div>

</body>

</html>
