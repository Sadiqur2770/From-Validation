<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>From Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <section>
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 m-auto">
                    <div class="head text-center bg-success text-white p-2">
                        <h1>
                            From Validation
                        </h1>
                    </div>
                    <form action="post.php" method="post" class="p-4" style="background:#ddd;">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Your Name</label>
                            <input type="text" class="form-control" name="fname">
                            <?php if(isset($_GET["name_err"])){ ?>
                            <div class="alert alert-danger mt-2" role="alert">
                                <?php echo $_GET["name_err"]; ?>
                            </div>
                            <?php } ?>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Your Email</label>
                            <input type="text" class="form-control" name="email">
                            <?php if(isset($_GET["email_err"])){ ?>
                            <div class="alert alert-danger mt-2" role="alert">
                                <?php echo $_GET["email_err"]; ?>
                            </div>
                            <?php } ?>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Your Phone No</label>
                            <input type="text" class="form-control" name="phone">
                            <?php if(isset($_GET["phone_err"])){ ?>
                            <div class="alert alert-danger mt-2" role="alert">
                                <?php echo $_GET["phone_err"]; ?>
                            </div>
                            <?php } ?>
                        </div>

                        <div class="mb-3 position-relative">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="pass">
                            <a onclick="showpass()" class="btn btn-success  position-absolute bottom-0 end-0">show</a>
                            <?php if(isset($_GET["pass_err"])){ ?>
                            <div class="alert alert-danger mt-2" role="alert">
                                <?php echo $_GET["pass_err"]; ?>
                            </div>
                            <?php } ?>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Retype Password</label>
                            <input type="password" class="form-control" name="repassword">
                            <?php if(isset($_GET["rpass_err"])){ ?>
                            <div class="alert alert-danger mt-2" role="alert">
                                <?php echo $_GET["rpass_err"]; ?>
                            </div>
                            <?php } ?>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" name="birthday">
                            <?php if(isset($_GET["birth_err"])){ ?>
                            <div class="alert alert-danger mt-2" role="alert">
                                <?php echo $_GET["birth_err"]; ?>
                            </div>
                            <?php } ?>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Gender</label> <br>
                            <input class="form-check-input ms-2" type="radio" name="gender" value="Male"> Male
                            <input class="form-check-input ms-2" type="radio" name="gender" value="Female"> Female
                            <input class="form-check-input ms-2" type="radio" name="gender" value="Others"> Others
                            <?php if(isset($_GET["gender_err"])){ ?>
                            <div class="alert alert-danger mt-2" role="alert">
                                <?php echo $_GET["gender_err"]; ?>
                            </div>
                            <?php } ?>
                        </div>

                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Country</label>
                            <select class="form-select" name="country">
                                <option value="">---</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="India">India</option>
                                <option value="USA">USA</option>
                            </select>
                            <?php if(isset($_GET["country_err"])){ ?>
                            <div class="alert alert-danger mt-2" role="alert">
                                <?php echo $_GET["country_err"]; ?>
                            </div>
                            <?php } ?>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                name="message"></textarea>
                            <?php if(isset($_GET["message_err"])){ ?>
                            <div class="alert alert-danger mt-2" role="alert">
                                <?php echo $_GET["message_err"]; ?>
                            </div>
                            <?php } ?>
                        </div>


                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Hobies</label>
                            <div class="form-check">
                                <input name="hobies[]" class="form-check-input" type="checkbox" value="Cricket">
                                <label class="form-check-label">
                                    Cricket
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="hobies[]" class="form-check-input" type="checkbox" value="Footbal">
                                <label class="form-check-label">
                                    Footbal
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="hobies[]" class="form-check-input" type="checkbox" value="Tenis">
                                <label class="form-check-label">
                                    Tenis
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="hobies[]" class="form-check-input" type="checkbox" value="Programming">
                                <label class="form-check-label">
                                    Programming
                                </label>
                            </div>
                            <?php if(isset($_GET["hobies_err"])){ ?>
                            <div class="alert alert-danger mt-2" role="alert">
                                <?php echo $_GET["hobies_err"]; ?>
                            </div>
                            <?php } ?>
                        </div>

                        <div class="mb-3 mt-4">
                            <div class="form-check">
                                <input name="terms" class="form-check-input" type="checkbox"
                                    value="Trems & Condition are OK">
                                <label class="form-check-label">
                                    Trems & Condition
                                </label>

                            </div>

                        </div>
                        <?php if(isset($_GET["terms_err"])){ ?>
                        <div class="alert alert-danger mt-2" role="alert">
                            <?php echo $_GET["terms_err"]; ?>
                        </div>
                        <?php } ?>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <?php if(isset($_GET["success"])){ ?>
                            <div class="alert alert-success mt-2" role="alert">
                                <?php echo $_GET["success"]; ?>
                            </div>
                            <?php } ?>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script>
    function showpass() {
        var pass = document.getElementById("pass");
        if (pass.type == "password") {
            pass.type = "text";
        } else {
            pass.type = "password";
        }
    }
    </script>
</body>

</html>