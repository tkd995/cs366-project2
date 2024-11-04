<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: dashboard.php"); // Redirect to dashboard if already logged in
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University of Tennessee IT Help</title>
    <style>
        .campus-btn {
            background-color: #FFFFFF;
            font-weight: 700;
            color: #000000 !important;
            padding: 1pt 0;
            border: 2px solid;
            width: 90%;
            box-shadow: 3px 3px 7px 1px #bababa;
        }
        .campus-btn-1 { border-color: #ff8200 !important; }
        .campus-btn-2 { border-color: #e0aa0f !important; }
        .campus-btn-3 { border-color: #002649 !important; }
        .campus-btn-4 { border-color: #006a4d !important; }
        .campus-btn-5 { border-color: #c8102e !important; }
        .campus-not-sure { font-style: italic; text-align: center; }

        /* Responsive styles */
        @media only screen and (min-width: 600px) and (max-width: 989px) {
            .campus-full { margin-top: 10px; }
            .campus-text-large { margin-top: -10px; font-size: 3vw; }
            .campus-text-medium { margin: 5px; font-size: 2.25vw; }
            .campus-btn { font-size: 1.75vw; border-radius: 2.2vw; }
            .campus-not-sure { font-size: 1.75vw; }
        }
        @media only screen and (min-width: 990px) and (max-width: 1555px) {
            .campus-text-large { margin-top: -5px; font-size: 2vw; }
            .campus-text-medium { margin: 2px; font-size: 1.5vw; }
            .campus-btn { font-size: 1.17vw; border-radius: 2.2vw; }
            .campus-not-sure { font-size: 1.17vw; }
        }
        @media only screen and (min-width: 1556px) {
            .campus-text-large { margin-top: -5px; font-size: 31.1px; }
            .campus-text-medium { margin: 5px; font-size: 23.3px; }
            .campus-btn { border-radius: 18.2px; font-size: 18.2px; }
            .campus-not-sure { font-size: 18.2px; }
        }
    </style>
</head>
<body>
<div id="campus-box" class="box-light campus-box">
    <img src="https://cas.tennessee.edu/cas/themes/theme-ut/images/2fa-cas-background.png" alt="Background" class="campus-background-img">
    <div class="campus-text campus-full">
        <div class="campus-text-large">Get Help with Technology</div>
        <div class="campus-text-medium">Select your campus to learn more.</div>
        <div class="campus-btn-group">
            <div class="campus-btn-column">
                <a href="https://utk.teamdynamix.com/TDClient/2277/OIT-Portal/Home/" target="_blank" class="btn campus-btn campus-btn-1">UTK</a>
            </div>
            <div class="campus-btn-column">
                <a href="https://utc.teamdynamix.com/TDClient/2717/Portal/Home/" target="_blank" class="btn campus-btn campus-btn-2">UTC</a>
            </div>
            <div class="campus-btn-column">
                <a href="https://utm.teamdynamix.com/TDClient/2421/ITS-Portal/Home/" target="_blank" class="btn campus-btn campus-btn-3">UTM</a>
            </div>
            <div class="campus-btn-column">
                <a href="http://www.uthsc.edu/techconnect" target="_blank" class="btn campus-btn campus-btn-4">UTHSC</a>
            </div>
            <div class="campus-btn-column">
                <a href="https://utsouthern.teamdynamix.com/TDClient/260/Portal/Home/" target="_blank" class="btn campus-btn campus-btn-5">UTS</a>
            </div>
        </div>
        <div class="campus-not-sure">Not sure which campus to choose? <a href="https://utk.teamdynamix.com/TDClient/2277/OIT-Portal/KB/ArticleDet?ID=123066" target="_blank">Find out online</a>.</div>

        <!-- PHP Login Form -->
        <div class="login-form">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <div>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div>
                    <button type="submit" class="btn campus-btn campus-btn-1">Login</button>
                </div>
            </form>
            <div class="login-message">
                <!-- This will display success or error messages -->
                <?php
                if (isset($_GET['message'])) {
                    echo htmlspecialchars($_GET['message']);
                }
                ?>
            </div>
        </div>

    </div>
    <div class="campus-text campus-short">
        <div class="campus-mobile-link">Get Help with Technology<br><a href="https://utk.teamdynamix.com/TDClient/2277/OIT-Portal/KB/ArticleDet?ID=123066" target="_blank">Contact your campus IT HelpDesk here</a></div>
    </div>
</div>
<div style="clear: both"></div>
<div id="system-indicia">
    <p style="float: left"><a href="http://tennessee.edu">The University of Tennessee System</a>, a partner in <a href="http://www.tntransferpathway.org/">the Tennessee Transfer Pathway</a>.</p>
</div>
<script type='text/javascript' src='https://cas.tennessee.edu/cas/themes/theme-ut/js/utk-min.js'></script>
</body>
</html>
