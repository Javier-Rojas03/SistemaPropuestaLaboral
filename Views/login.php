<main class="d-flex align-items-center justify-content-center height-100">
    <div class="content">
        <header align="center">
            <h2>Welcome!</h2>
        </header>

        <form action="<?php echo FRONT_ROOT."Student/ShowMenu" ?>" method="post" class="login-form bg-dark-alpha p-5 bg-light">
            <div class="form-group">
                <label for="">Email</label>
                <input type="mail" name="email" class="form-control form-control-lg" placeholder="Please enter your email" required></input>
            </div>
            <button class="btn btn-primary btn-block btn-lg" type="submit">Login</button>
        </form>

    </div>

</main>