<x-guestuser-layout>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign In</h5>
                        <form class="form-signin" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-label-group">
                                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address"
                                    required autofocus>
                                <label for="inputEmail">Email address</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password"
                                    required>
                                <label for="inputPassword">Password</label>
                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" name="remember" for="remember_me" class="custom-control-input" id="remember_me">
                                <label class="custom-control-label" for="customCheck1" name="remember">Remember
                                    password</label>
                            </div>
                            <div>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign
                                    in</button>
                            </div>



                            <hr class="my-4">
                            <a href="{{ url('auth/google') }}" class="btn btn-lg btn-google btn-block text-uppercase"
                                style="color: white;"><img class="fab fa-google mr-2">Sign in with Google</a>
                            <a href="{{ url('auth/facebook') }}"
                                class="btn btn-lg btn-facebook btn-block text-uppercase" style="color: white;"><img
                                    class="fab fa-facebook-f mr-2">Sign in with
                                Facebook</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guestuser-layout>
