<html>
    <head>
        <title>My first PHP Website</title>
        <link rel="stylesheet" href="css/semantic.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery-3.1.1.min.js"</script>
        <script src="js/semantic.min.js"></script>
    </head>
    <body>
        <h2 class="ui dividing header">Login Page</h2>
        <a href="index.php">Click here to go back</a>
        <form class="ui form" action="checklogin.php" method="POST">
          <div class="field">
            <label>Username</label>
            <input type="text" name="username" required="required" />
          </div>
          <div class="field">
            <label>Password</label>
            <input type="password" name="password" required="required" /> <br/>
          </div>
          <button class="ui button submit" type="submit" value="Login"> Login </button>
        </form>
    </body>
</html>
