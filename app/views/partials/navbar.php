<nav class="navbar navbar-expand-lg mb-3">
    <div class="container">
        <a class="navbar-brand" href="<?php echo URL_ROOT; ?>"><?php echo APP_NAME; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
            <?php if (isset($_SESSION['user_name'])) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL_ROOT; ?>/users/logout">Log out</a>
                </li>
                <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL_ROOT; ?>/users/register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL_ROOT; ?>/users/login">Login</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>