<?php require APP_ROOT . '/views/partials/header.php'; ?>
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Register</h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo URL_ROOT; ?>/users/register" method="post">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Enter Name"
                                   class="form-control form-control-sm <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['name']; ?>">
                            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email"
                                   class="form-control form-control-sm <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['email']; ?>">
                            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password"
                                   class="form-control form-control-sm <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['password']; ?>">
                            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                        </div>
                        <div class="form-group">
                            <input type="password" name="confirm_password" placeholder="Confirm Password"
                                   class="form-control form-control-sm <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['confirm_password']; ?>">
                            <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
                        </div>

                        <div class="row">
                            <div class="col">
                                <input type="submit" value="Register" class="btn btn-primary btn-block">
                            </div>
                            <div class="col">
                                <a href="<?php echo URL_ROOT; ?>users/login">Have an account? Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require APP_ROOT . '/views/partials/footer.php'; ?>