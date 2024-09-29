<!DOCTYPE html>
<html>
<head>
    <title>PHP Fundamentals Activity</title>
</head>
<body>
    <?php session_start(); ?>

    <form method="POST">
        <p>Username:
            <input type="text" name="firstName" size="15" maxlength="15" required/>
        </p>

        <p>Password:
            <input type="password" name="password" size="15" maxlength="15" required/>
        </p>

        <p>
            <button type="submit" formaction="handleform_sessionvariable.php" name="loginBtn">Login</button>
        </p>
    </form>

    <?php if (isset($_SESSION['firstName'])): ?>
        <form method="POST" action="unset_sessionvariable.php">
            <p>
                <button type="submit">Logout</button>
            </p>
        </form>
    <?php endif; ?>

    <?php

        if (isset($_SESSION['firstName'])) {
            echo "<p>Logged in as: " . htmlspecialchars($_SESSION['firstName']) . "</p>";
        }

        if (isset($_SESSION['password'])) {
            echo "<p>Password: " . htmlspecialchars($_SESSION['password']) . "</p>";
        }
    ?>
</body>
</html>
