<?php
include('connection.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<header>

</header>
<main>
    <div class="container">
        <form action="/" method="POST" autocomplete="off">
            <div class="form-group row">
                <label for="inputUsername" class="col-sm-2 col-form-label-sm">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="username" class="form-control-sm" id="inputUsername" placeholder="input Username">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label-sm">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control-sm" id="inputEmail" placeholder="input Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label-sm">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control-sm" id="inputPassword" placeholder="input Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="repeatPassword" class="col-sm-2 col-form-label-sm">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="passwordRepeat" class="form-control-sm" id="repeatPassword" placeholder="repeat Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputFirstname" class="col-sm-2 col-form-label-sm">First name</label>
                <div class="col-sm-10">
                    <input type="text" name="firstName" class="form-control-sm" id="inputFirstname" placeholder="input First name">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputLastname" class="col-sm-2 col-form-label-sm">Last name</label>
                <div class="col-sm-10">
                    <input type="text" name="lastName" class="form-control-sm" id="inputLastname" placeholder="input Last name">
                </div>
            </div>
            <div class="form-group row">
                <label for="age" class="col-sm-2 col-form-label-sm">Age</label>
                <div class="col-sm-10">
                    <input type="number" name="age" class="form-control-sm" id="age">
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label-sm col-sm-2 pt-0">Gender</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="genderMale" value="male" checked>
                            <label class="form-check-label" for="genderMale">
                                male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="female">
                            <label class="form-check-label" for="genderFemale">
                                female
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Sing up</button>
                </div>
            </div>
        </form>
    </div>

</main>

<footer>

</footer>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>