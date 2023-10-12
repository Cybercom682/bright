<?php
require (dirname(__DIR__) . '/includes/defines.php');
require (dirname(__DIR__) . '/includes/config.php');
require (dirname(__DIR__) . '/includes/vendor/autoload.php');
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Install - Bright v1.0.0.1a</title>
        <link rel="icon" type="image/x-icon" href="./media/icon.ico">
        <meta charset="utf-8">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.1.9/p5.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.trunk.min.js"></script>
    </head>
    <body>
        <div id="bg" class="container-fluid p-3 d-flex" style="min-height: 100vh;">
            <img class="fixed-top" src="./media/logo.png" style="left: 2rem;filter: invert();" height="100" width="150">
            <div class="container  my-auto" style="min-height: 50vh;">
                <form id="wizardForm" class="shadow rounded p-3" style="min-height: 50vh; background: rgba(255,255,255,0.34)">
                    <div class="form-step" id="step1">
                        <div class="form-group overflow-auto border-bottom border-secondary rounded p-3" style="max-height: 40vh; min-height: 40vh; background: #ffffff57;">
                            <p><?php
                                $file = __DIR__ . '/ReadMe.md';

                                if (file_exists($file) && is_readable($file)) {
                                    $fileContent = file_get_contents($file);

                                    $markdown = new Parsedown();
                                    echo $markdown->parse($fileContent);
                                }
                                ?></p>
                        </div>
                        <button class="btn btn-primary mt-3" id="nextStep1">Start Installation</button>
                    </div>
                    <div class="form-step position-relative" id="step2" style="display: none;">
                        <div class="form-group overflow-auto border-bottom border-secondary rounded p-3" style="max-height: 40vh; min-height: 40vh; background: #ffffff57;">
                            <h3 class="border-bottom border-secondary">Database Connection</h3>
                            <div class="row">
                                <div class="col-9 mb-2">
                                    <label for="server">Server:</label>
                                    <input type="text" class="form-control" id="server" placeholder="localhost">
                                </div>
                                <div class="col-3 mb-2">
                                    <label for="port">Port:</label>
                                    <input type="text" class="form-control" id="port" placeholder="8443">
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="dbname">Db_Name:</label>
                                    <input type="text" class="form-control" id="dbname" placeholder="bright_database">
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="user">User:</label>
                                    <input type="text" class="form-control" id="user" placeholder="sqlAdmin">
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="pass">Password:</label>
                                    <input type="password" class="form-control" id="pass" placeholder="pass123!#">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3" id="prevStep2">Previous</button>
                        <button class="btn btn-primary mt-3" id="nextStep2">Next</button>
                        <button class="btn btn-warning mt-3 ms-auto position-absolute" id="checkConn" style="right:0;">Check Connection</button>
                    </div>
                    <div class="form-step" id="step3" style="display: none;">
                        <div class="form-group overflow-auto border-bottom border-secondary rounded p-3" style="max-height: 40vh; min-height: 40vh; background: #ffffff57;">
                            <h3 class="border-bottom border-secondary">Create Administrator-Account</h3>
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <span>Please create an Admin-Account to use the Bright Backend.</span>
                                    <input type="hidden" name="rights_a" value="administrator">
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="user_a">User:</label>
                                    <input type="text" class="form-control" id="user_a" placeholder="admin">
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="pass_a">Password:</label>
                                    <input type="password" class="form-control" id="pass_a" placeholder="pass123!#Backend">
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="email_a">E-Mail:</label>
                                    <input type="text" class="form-control" id="email_a" placeholder="forRestore@yourAccount.com">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3" id="prevStep3">Previous</button>
                        <button class="btn btn-success mt-3" type="submit">Start Integration</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
    <script>
        VANTA.TRUNK({
            el: '#bg',
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0x336f98
        })
        $(document).ready(function () {
            var currentStep = 1;

            $("#nextStep1").click(function () {
                $("#step1").hide();
                $("#step2").show();
                currentStep = 2;
            });

            $("#prevStep2").click(function () {
                $("#step2").hide();
                $("#step1").show();
                currentStep = 1;
            });

            $("#nextStep2").click(function () {
                $("#step2").hide();
                $("#step3").show();
                currentStep = 3;
            });

            $("#prevStep3").click(function () {
                $("#step3").hide();
                $("#step2").show();
                currentStep = 2;
            });

            $("#wizardForm").submit(function (e) {
                e.preventDefault();
            });
        });
    </script>
</html>