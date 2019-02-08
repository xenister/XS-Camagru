<?php
/**
 * User: abbenham
 * Date: 17/01/2019
 * Time: 12:36
 */
?>
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">-->

<link rel="stylesheet" href="/css/signpage.css"/>
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

<!--<div class="login-page">-->
<!--    <div class="form">-->
<!--        <h1 class="titlelogin"> Login </h1><br/>-->
<!--        --><?php //if (isset($_GET['msg'])) {
//            echo "<div id = \"form-error\" class=\"alert alert-primary\" role = \"alert\" >";
//            echo $_GET['msg'];
//            echo "</div >";
//         }; ?>
<!--        <form id="login-form" class="login-form" method="post">-->
<!--            <input type="text" placeholder="Username" name="login"required />-->
<!--            <input type="password" placeholder="Password" name="password" required/>-->
<!--            <button type="submit" name="submit">login</button>-->
<!---->
<!--            <p class="message">Not registered? <a href="?page=landing&action=register">Create an account</a></p>-->
<!--            <p class="passforgot"><a href="?page=forgot">Forgot Password ?</a></p>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->
<!--<script src="/js/login.js"></script>-->

<div class="card-content form">

    <div class="field">
        <label class="label">Username</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-success" type="text" placeholder="Username" name="login"required>
            <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
            <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
        </div>
        <p class="help is-success">This username is available</p>
    </div>

    <div class="field">
        <p class="control has-icons-left">
            <input class="input" type="password" placeholder="Password">
            <span class="icon is-small is-left">
      <i class="fas fa-lock"></i>
    </span>
        </p>
    </div>

    <div class="field">
        <p class="control has-icons-left">
            <input class="input" type="password" placeholder="Password">
            <span class="icon is-small is-left">
      <i class="fas fa-lock"></i>
    </span>
        </p>
    </div>

    <div class="field">
        <label class="label">Email</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-danger" type="email" placeholder="Email input" value="hello@">
            <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
            <span class="icon is-small is-right">
      <i class="fas fa-exclamation-triangle"></i>
    </span>
        </div>
        <p class="help is-danger">This email is invalid</p>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link">Submit</button>
        </div>
        <div class="control">
            <button class="button is-text">Cancel</button>
        </div>
    </div>
</div>


