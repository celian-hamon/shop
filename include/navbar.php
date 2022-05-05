<nav>
    <div class="logo">
        <a href="index.php">ESHOP</a>

    </div>
    <div class="links">
        <?php
        if (isset($_SESSION['loggedUser'])) {
            echo "<div id='name'>Bonjour <b>" . $user->USER_FNAME . " " . $user->USER_LNAME . "</b></div>";
            echo "<a href='index.php'>Home</a>
            <a href='logout'>Logout</a>";
            if ($user->USER_ADMIN === 1) {
                echo "<a href='admin'>Admin</a>";
            }
        } else {
            echo '<a href="index.php">Home</a>
            <a href="login.php">Login</a>';
        }
        ?>
        <a href="">Account</a>
    </div>
</nav>