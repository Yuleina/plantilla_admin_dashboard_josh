<?php $this->load->view('includes/header_view', $stylesheets);  ?>
<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
            <div id="container_demo">
                <a class="hiddenanchor" id="toregister"></a>
                <a class="hiddenanchor" id="tologin"></a>
                <a class="hiddenanchor" id="toforgot"></a>
                <div id="wrapper">
                    <div id="login" class="animate form">
                        <form  id="authentication" autocomplete="on" method="post">
                            <h3 class=" title-login">
                                <!-- <img src="<?php //echo base_url('lib\img\Bonanza-logo.png'); ?> " alt="Logo Bonanza"> -->
                                Bonanza</h3>
                            <div class="form-group ">
                                <label style="margin-bottom:0;" for="user1" class="uname control-label"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Usuario
                                </label>
                                <input id="user1" name="usuario" placeholder="Ingrese su usuario" value=""  />
                                <div class="col-sm-12">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label style="margin-bottom:0;" for="contra1" class="youpasswd"> <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Contraseña
                                </label>
                                <input type="password" id="contra1" name="contrasena" placeholder="Ingrese su contraseña" />
                                <div class="col-sm-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="remember-me" id="remember-me" value="remember-me" class="square-blue" /> Recordar mi cuenta
                                </label>
                            </div>
                            <p class="login button">
                                <input type="submit" value="Acceder" class="btn btn-success submit" />
                            </p>
                            <p class="change_link">
                                <a href="#toforgot" class="btn btn-responsive botton-alignment btn-warning btn-sm">Recuperar contraseña
                                </a>
                                <a href="#toregister" id="signup" class="btn btn-responsive botton-alignment btn-success btn-sm pull-right">Crear Cuenta
                                </a>
                            </p>
                        </form>
                    </div>
                    <div id="register" class="animate form">
                        <form action="index.html" id="register_here" autocomplete="on" method="post">
                            <h3 class="black_bg">
                                <!-- <img src="img/logo.png" alt="josh logo"> -->
                                <br>Sign Up</h3>
                            <div class="form-group">
                                <label style="margin-bottom:0;" for="first_name" class="youmail">
                                    <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> First Name
                                </label>
                                <input id="first_name" name="first_name" required type="text" placeholder="John" />
                            </div>
                            <div class="form-group">
                                <label style="margin-bottom:0;" for="last_name" class="youmail">
                                    <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Last Name
                                </label>
                                <input id="last_name" name="last_name" required type="text" placeholder="Doe" />
                            </div>
                            <div class="form-group">
                                <label style="margin-bottom:0;" for="email" class="youmail">
                                    <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> E-mail
                                </label>
                                <input id="email" name="email" placeholder="mysupermail@mail.com" />
                            </div>
                            <div class="form-group">
                                <label style="margin-bottom:0;" for="email" class="youmail">
                                    <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Confirm E-mail
                                </label>
                                <input id="email_confirm" name="email_confirm" placeholder="mysupermail@mail.com" />
                            </div>
                            <div class="form-group">
                                <label style="margin-bottom:0;" for="password" class="youpasswd">
                                    <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Password
                                </label>
                                <input id="password1" name="password" required type="password" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label style="margin-bottom:0;" for="password_confirm" class="youpasswd">
                                    <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Confirm Password
                                </label>
                                <input id="password_confirm" name="password_confirm" required type="password" placeholder="Confirm password" />
                            </div>
                            <p class="signin button">
                                <input type="submit" class="btn btn-success" value="Sign Up" />
                            </p>
                            <p class="change_link">
                                <a href="#tologin" class="btn btn-responsive botton-alignment btn-warning btn-sm to_register">Back
                                </a>
                            </p>
                        </form>
                    </div>
                    <div id="forgot" class="animate form">
                        <form action="index.html" id="reset_pw" autocomplete="on" method="post">
                            <h3 class="black_bg">
                                <!-- <img src="img/logo.png" alt="josh logo"> -->
                                <br>FORGOT PASSWORD</h3>
                            <p>
                                Enter your email address below and we'll send a special reset password link to your inbox.
                            </p>
                            <div class="form-group">
                                <label style="margin-bottom:0;" for="username2" class="youmai">
                                    <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Your email
                                </label>
                                <input id="username2" name="username2" placeholder="your@mail.com" />
                            </div>
                            <p class="login button reset_button">
                                <input type="submit" value="Reset Password" class="btn btn-raised btn-success btn-block" />
                            </p>
                            <p class="change_link">
                                <a href="#tologin" class="btn btn-raised btn-responsive botton-alignment btn-warning btn-sm to_register">Back
                                </a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

$this->load->view('includes/footer_view', $javascripts);
?>