<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Form Validation</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <script>
        function validateForms(){
            var name = document.forms["formega"]["name"];
            var email = document.forms["formega"]["email"];
            var password = document.forms["formega"]["password"];
            var telephone = document.forms["formega"]["telephone"];
            var course = document.forms["formega"]["course"];
            var zipcode = document.forms["formega"]["zipcode"];

            if (name.value == ""){
                alert("Fill this Name Field Properly!")
                name.focus();
                return false;
            }
            if (email.value == "") {
                alert("Please Fill This Email Field Correctly")
                email.focus();
                return false;
            }
            if (password.value == "") {
                alert("Please Fill This Password Field Correctly")
                password.focus();
                return false;
            }
            if(telephone.value == "") {
                alert("Please Fill Telephone Field Properly")
                telephone.focus();
                return false;
            }
            if(course.value == 0) {
                alert("Please Choose Your Course Correctly")
                course.focus();
                return false;
            }
            if(zipcode.value == ""){
                alert("Please Fill Zipcode Field Properly")
                zipcode.focus();
                return false;
            }
        }
    </script>
    <style>
        #req {
            color:red;
            font-size: medium;
        }
        #background {
            background-image: url("https://www.onlygfx.com/wp-content/uploads/2021/04/white-triangle-pattern-seamless-background-1.jpg");
            background-size: cover;
        }
        .container {
            padding-top: 60px;
            padding-bottom: 100px;
        }
        #formborder {
            border-bottom: 2px solid rgb(0, 0, 0);
            border-top: 2px solid rgb(0, 0, 0);
            border-right :2px solid rgb(0, 0, 0);
            border-left:2px solid rgb(0, 0, 0);
            border-radius: 15px 15px 15px 15px;
            background-color: white;

        }
    </style>
    <body>
        <div class="container-fluid" id = "background">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8" id = "formborder">
                    <div class="row">
                        <div class="col-sm">
                            <h2 class = "text-center">FORM REGISTRATION</h2>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-10">
                            <p id = "req">*All Fields Are Required*</p>
                            <form name = "formega" action ="https://github.com/dragoonega/PWEB-A-073/" onsubmit ="return validateForms()">

                                <!--FullName-->
                                <div class="form-group">
                                    <label for = "name">Full Name:</label>
                                    <input type = "text" class = "form-control" id = "name" placeholder = "Enter name" name = "name" pattern ="^[A-Za-z]+${200}" title = "Alphabet Only.No Special Characters.">
                                    </div>
                                    <!-- Email -->
                                    <div class="form-group">
                                        <label for = "email">Email Address:</label>
                                        <input type = "text" class = "form-control" id = "email" placeholder=" Enter email" name = "email" pattern = [a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$ title = "ex = dragoon.fernanda12@gmail.com">
                                        </div>
                                        <!--password-->
                                        <div class="form-group">
                                            <label for ="password">Password:</label>
                                            <input type = "password" class = "form-control" id = "pwd" placeholder = "Enter password" name = "password"
                                            pattern = ".{8,16}" title = "Only 8-16 Characters">
                                        </div>

                                        <!-- Telephone-->
                                        <div class="form-group">
                                            <label for = "telephone">Telephone:</label>
                                            <input type = "text" class = "form-control" id ="tele"
                                            placeholder = "Enter telephone" name = "telephone"
                                            pattern ="[0-9].{6,}" title = "Number only,and minimum 7 digits.">
                                            </div>
                                            <!-- course-->
                                            <div class="form-group">
                                                <label for = "course">Select Your Course:</label>
                                                <select class = "form-control" type = "text" id ="course" name = "course">
                                                    <option value="0">Choose Your Course</option>
                                                    <option value ="1">BTECH</option>
                                                    <option value ="2">BBA</option>
                                                    <option value = "3">BCA</option>
                                                    <option value = "4">B COM</option>
                                                    <option value = "5">GEEKFORGEEKS</option>
                                                </select>
                                            </div>

                                            <!--zipcode-->
                                            <div class="form-group">
                                                <label for = "zipcode">Zip code:</label>
                                                <input type = "text" class = "form-control" id ="zip" placeholder = "Enter zipcode" name ="zipcode" pattern ="[0-9]{6}" title = "Numbers only with 6 digits.">
                                            </div>
                                            <br>
                                            <input type = "submit" value = "Submit" name = "submit"></input>
                                            <input type = "reset" value = "Reset" name = "reset"></input>
                                        </form>
                                        <br>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </div>
    </body>
</html>
