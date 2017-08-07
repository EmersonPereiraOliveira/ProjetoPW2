
<div>

    <div style= "padding-left:  500px">
        <img src="<?= base_url()?>/assets/img/peso.png" class="img-responsive" class="fitness">
   
    </div>
</div>



<div class="container-fluid login" >
    <div class="container col-md-3 col-md-offset-3 loginTela" style="background-color:#BA55D3">

        <form class="form-signin" method="POST" action="<?= base_url() ?>index.php/IsLogged">
            <h2 class="form-signin-heading "style="color:#FFFFFF">Entrar</h2>
            <label for="inputEmail" class="sr-only"style="color:#FFFFFF">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
            <label for="inputPassword" class="sr-only"style="color:#FFFFFF">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"style="color:#FFFFFF"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit"style="color:#FFFFFF">Entrar</button>
        </form>

    </div> 
</div>
    
