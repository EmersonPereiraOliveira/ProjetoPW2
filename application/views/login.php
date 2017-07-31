<div class="container-fluid login" >
    <div class="container col-md-3 col-md-offset-3 loginTela" style="background-color:#FF0000">

        <form class="form-signin" method="POST" action="<?= base_url() ?>index.php/DashBoard/logar">
            <h2 class="form-signin-heading ">Entrar</h2>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        </form>

    </div> 
</div>