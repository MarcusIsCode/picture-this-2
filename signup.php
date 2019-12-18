<?php

require __DIR__.'/views/header.php';

displayError();

?>

<article>
    <h1>Sign up:</h1>

    <form action="app/users/signup.php" method="post">
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="email@email.com" required>
            <small class="form-text text-muted">Please provide your email address.</small>
        </div><!-- /form-group -->

        <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" type="name" name="name" id="name" placeholder="" required>
            <small class="form-text text-muted">Please provide your full name.</small>
        </div><!-- /form-group -->

        <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-control" type="password" name="password" id="password" required>
            <small class="form-text text-muted">Please provide your password (passphrase).</small>
        </div><!-- /form-group -->

        <button type="submit">Sign up</button>
    </form>
</article>

<?php require __DIR__.'/views/footer.php'; ?>
