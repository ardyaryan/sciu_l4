@include('header')
<div class="container" style="text-align: center;margin-bottom: 40px;">
    <div class="col-md-3">
    </div>
    <div class="col-md-6" style="text-align: left" >
        <p id="login_message"></p>
        <div class="" >
            <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" class="form-control" id="user_name" aria-describedby="emailHelp" placeholder="Enter User Name" value="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" value="">
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Remember me
                </label>
            </div>
            <button type="button" id="login" class="btn btn-primary btn-block">Login</button>
            <br>
            <a href="forgot_password.php">Forgotten your username or password?</a>
            <br><br>
            <small class="form-text text-muted">Some courses may allow guest access</small>
            <button type="button"  class="btn btn-block">Login as guest</button>

        </div>
    </div>
</div>
@include('footer')

<script type="text/javascript" src="{{ asset('js/sciu/login.js') }}"></script>