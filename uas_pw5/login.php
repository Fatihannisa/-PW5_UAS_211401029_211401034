<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body background="gambar.jpg">

<style type="text/css">
.jumbotron {
    background-image:url("gambar.jpg");
}
</style>

    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>LOGIN HERE</h2>
                <div class="underline-title"></div>
            </div>
            <form method="post" class="form" action="ceklogin.php">
                <label for="user-username" style="padding-top: 13px;">
                    &nbsp;Username
                </label>
                <input id="user-username" class="form-content" type="username" name="username" autocomplete="on"
                    required>
                <div class="form-border"></div>

                <label for="user-password" style="padding-top: 22px;">
                    &nbsp;Password
                </label>
                <input id="user-password" class="form-content" type="password" name="password" required>
                <div class="form-border"></div>

                <a href="#">
                    <legend id="forgot-pass">Forgot password?</legend>
                </a>
                <input id="submit-btn" type="submit" name="submit" value="LOGIN">
                <a href="#" id="signup">Don't have account yet?</a>
            </form>
        </div>
    </div>
</body>

</html>