<x-master>
<section class="form my-4 mx-5 pt-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="../global_assets/img/login.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3 text-danger">Campus Canteen</h1>
                    <h4>Sign into your account</h4>
                    <form action="{{route('user_login')}}" method="POST">
                        @csrf 
                        @method('post')
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" name="email" placeholder="Email-Address" class="form-control my-2 p-2">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="password" placeholder="*******" class="form-control my-2 p-2">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" class="btn btn-info mt-3 mb-5">Login</button>
                            </div>
                        </div>
                        <a href="#">Forgot Password</a>
                        <p>Don't have an account? <a href="{{route('registration')}}">Register here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-master>