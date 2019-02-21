<?php
include 'head.php';
//include 'process.php';

?>
<body>
<header>
    <?php
    include 'process.php';
    ?>
</header>
<main>
    <div class="container w-50">
         <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        <!--<form action="process.php" method="POST">-->
            <div class="form-row my-3">
                <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="username" class="form-control col-sm-6 <?php echo addValidClass($usernameErr) ?>"
                           id="inputUsername" placeholder="input Username" required>
                    <div class="valid-feedback">good job!</div>
                    <div class="invalid-feedback"><?php echo $usernameErr ?></div>
                </div>
            </div>
            <div class="form-row my-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control col-sm-6 <?php echo addValidClass($emailErr)?>"
                           id="inputEmail" placeholder="input Email" required>
                    <div class="valid-feedback">good job!</div>
                    <div class="invalid-feedback"><?php echo $emailErr ?></div>
                </div>
            </div>
            <div class="form-row my-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control col-sm-6 <?php echo addValidClass($passwordErr)?>"
                           id="inputPassword" placeholder="input Password" required>
                    <div class="valid-feedback">good job!</div>
                    <div class="invalid-feedback"><?php echo $passwordErr ?></div>
                </div>
            </div>

            <div class="form-row my-3">
                <label for="passwordRepeat" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="passwordRepeat" class="form-control col-sm-6 <?php echo addValidClass($passwordRepeatErr)?>"
                           id="passwordRepeat" placeholder="repeat Password" required>
                    <div class="valid-feedback">good job!</div>
                    <div class="invalid-feedback"><?php echo $passwordRepeatErr ?></div>
                </div>
            </div>

            <div class="form-row my-3">
                <label for="inputFirstname" class="col-sm-2 col-form-label">First name</label>
                <div class="col-sm-10">
                    <input type="text" name="firstName" class="form-control col-sm-6 <?php echo addValidClass($firstNameErr)?>"
                           id="inputFirstname" placeholder="input First name" required>
                    <div class="valid-feedback">good job!</div>
                    <div class="invalid-feedback"><?php echo $firstNameErr ?></div>
                </div>
            </div>

            <div class="form-row my-3">
                <label for="inputLastname" class="col-sm-2 col-form-label">Last name</label>
                <div class="col-sm-10">
                    <input type="text" name="lastName" class="form-control col-sm-6 <?php echo addValidClass($lastNameErr)?>"
                           id="inputLastname" placeholder="input Last name" required>
                    <div class="valid-feedback">good job!</div>
                    <div class="invalid-feedback"><?php echo $lastNameErr ?></div>
                </div>
            </div>

            <div class="form-row my-3">
                <label for="age" class="col-sm-2 col-form-label-sm">Age</label>
                <div class="col-sm-10">
                    <input type="number" name="age" class="form-control col-sm-2 <?php echo addValidClass($ageErr)?>"
                           id="age" required>
                    <div class="valid-feedback">good job!</div>
                    <div class="invalid-feedback"><?php echo $ageErr ?></div>
                </div>
            </div>

            <fieldset class="form-row my-3">
                    <legend class="col-sm-2 col-form-label-sm">Gender</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="genderMale" value="male"
                                   checked>
                            <label class="form-check-label" for="genderMale">male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="genderFemale"
                                   value="female">
                            <label class="form-check-label" for="genderFemale">female</label>
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