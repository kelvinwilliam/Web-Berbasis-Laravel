<link rel="stylesheet" type="text/css" href="{{ asset('util.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('main.css') }}">


<div class="container-login100">
    <div class="wrap-login100 p-t-20 p-b-20">
        <form action="/postlogin" method="post">
            @csrf
            <span class="login100-form-title p-b-70">
                Welcome.
            </span>

            <div class="wrap-input100 validate-input m-t-30 m-b-35" data-validate="Enter username">
                <input class="input100" type="text" name="username" placeholder="Username">
            </div>

            <div class="wrap-input100 validate-input m-b-70" data-validate="Enter password">
                <input class="input100" type="password" name="password" placeholder="Password">
            </div>

            <div class="container-login100-form-btn">
                <button class="login100-form-btn m-b-20">
                    Login
                </button>

                <a href="/register" class="fs-17">
                    register
                </a>
            </div>
            <br>
        </form>
    </div>
    <div class="wrap-login100 p-t-20 p-b-20 m-l-130">
    <img style="width:100%" src="storage/covers/cover.jpg">
    </div>
</div>