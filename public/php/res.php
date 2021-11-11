<!DOCTYPE html>
<html lang = "en">

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
      body {
        background-image: url("https://wallpapercave.com/wp/wp7122273.jpg");
        background-size: cover;
        
    }
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
        padding-top: 120px;
    }
    p {
      font-size: 21px;
    }
   
 </style>
<body>
    <?php 

        $num1 = $_POST["number1"];
        $num2 = $_POST["number2"];
        $num3 = $_POST["number3"];
        
        function smallestnum() {

        global $num1,$num2,$num3;

        $smallest = $num1;
        if ($num1 <= $num2) {
            if ( $num1 <= $num3)
                $smallest = $num1;
            else 
                $smallest = $num3;
        } else {
            if ( $num2 <= $num3)
            $smallest = $num2;
            else 
            $smallest = $num3;
        }
        echo $smallest;
    }
    ?>
     <div class="container-fluid" id="background">
        <div class="container">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10" id="header">
                    <br>
                    <h1><b>RESULT</b> </h1>
                    <p>THE NUMBERS</p>
                        <div class="card-deck">
                            <div class="card bg-primary">
                              <div class="card-body text-center">
                                <h2 class="card-header "><?php echo $num1 ?></h2>
                              </div>
                            </div>
                            <div class="card bg-warning">
                              <div class="card-body text-center">
                                <h2 class="card-header "><?php echo $num2 ?></h2>
                              </div>
                            </div>
                            <div class="card bg-success">
                              <div class="card-body text-center">
                                <h2 class="card-header "><?php echo $num3 ?></h2>
                              </div>
                            </div>
                          </div>
                          <br>
                          <p>THE SMALLEST NUMBER AMONG 3 NUMBERS </p>
                            <div class="card-deck">
                                <div class="card bg-primary">
                                  <div class="card-body text-center">
                                    <h2 class="card-header"><?php smallestnum(); ?></h2>
                                  </div>
                                  
                          </div>
                          <br><br>
                          </div>
                          <br><br>
                          <form action = "indexbaru.html">
                          <button type="submit" class="btn btn-success" style="width: 200px;" id="sub">Re-Calculate</button>
                          </form>
                          <br><br>
                          </div>
                          <br><br>
                          </div>
                          
            </div>
        </div>
    </div>

</body> 
</html>