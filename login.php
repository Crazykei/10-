<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログイン </title>
    <link rel="stylesheet" href="login.css">
    <form method="post" action="add.php"></form>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>

<body class="align">

    <!-- <div class="blog_top_box"> -->

    <!-- </div> -->

    <div class="grid">

        <form action="https://httpbin.org/post" method="POST" action="login_act.php">

            <div class="form__field">
                <label for="lid">
                    <i class="fas fa-user-alt"></i>
                    <span class="hidden">LoginID</span></label>
                <input id="login__username" type="text" name="lid" class="form__input" placeholder="Username" required>
            </div>

            <div class="form__field">
                <label for="lpq"><span class="icon-lock"><span class="hidden">Password</span></label>
                <input id="lpw" type="password" name="password" class="form__input" placeholder="Password" required>
            </div>


            <!-- <div class="form__field">
                <label for="login__otp"><span class="icon-star"><span class="hidden">Secret</span></label>
                <input id="login__otp" type="text" name="otp" class="form__input" placeholder="Key">
            </div> -->



            <div class="form__field">
                <input type="submit" value="Log In">
            </div>

        </form>

        <p class="text--center">Not a member? <a href="talent.html">Sign up now</a> <span class="icon-pencil"></p>

    </div>

</body>

</html>