<link rel="stylesheet" type="text/css" href="{{ asset('util.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('main.css') }}">


<div class="container-login100">
    <div class="wrap-login100 m-r-150">
        <img style="width:150%" src="storage/covers/cover2.jpg">
    </div>
    <div class="wrap-login100 p-t-25 p-b-20  m-l-200">
        <form action="/postregister" method="post">
            @csrf
            <span class="login100-form-title p-b-30">
                Register.
            </span>

            <div class="wrap-input100 validate-input m-t-10 m-b-30" data-validate="Enter name">
                <input class="input100" type="text" name="name" placeholder="Name">
            </div>

            <div class="wrap-input100 validate-input m-b-30" data-validate="Enter username">
                <input class="input100" type="text" name="username" placeholder="Username">
            </div>

            <div class="wrap-input100 validate-input m-b-30" data-validate="Enter username">
                <input class="input100" type="password" name="password" placeholder="Password">
            </div>

            <div class="wrap-input100 validate-input m-b-70" data-validate="Enter password">
                <input class="input100" type="password" name="confirm" placeholder="Confirm Password">
            </div>

            <div class="container-login100-form-btn">
                <button class="login100-form-btn m-b-20">
                    Register
                </button>

                <a href="/login" class="fs-17">
                    back
                </a>
            </div>
        </form>
    </div>
</div>