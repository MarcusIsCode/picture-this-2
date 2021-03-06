<?php require __DIR__.'/views/header.php'; ?>

<div class="form login">
    <h1 class="login">Picture this!</h1>
    <p class="error"> <?php displayError(); ?> </p>

    <form action="app/users/signup.php" method="post">
        <div class="form-group">
            <input class="form-control" type="email" name="email" id="email" placeholder="Email" required>
        </div>

        <div class="form-group">
            <input class="form-control" type="name" name="name" id="name" placeholder="Full name" required>
        </div>

        <div class="form-group">
            <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
        </div>

        <button class="purple-btn" type="submit">Sign up</button>
    </form>

    <div class="question">
        <h3>Already have an account?</h3>
        <a href="login.php"><button class="signup-btn">Log in</button></a>
    </div>
</div>

<?php require __DIR__.'/views/footer.php'; ?>
