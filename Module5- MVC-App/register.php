
<!-- Registration form -->
<div class="container-fluid"> 
<div class="modal fade reg-form" role="dialog" id="register">
    <div class="modal-dialog">
        <div class="modal-content  bg-secondary">
            <!-- <div class="container  p-2"> -->
            <form method="post">
            <h3 class="text-white text-center login-heading"> Register Form</h3>
            <hr class="border border-1 bg-white w-50 mx-auto">
                <div class="form-group m-3 col-md-9 ">
                    <input type="text" name="name" placeholder="First and Last Name*" required class="form-control">
                </div>
                <div class="form-group  m-3 col-md-9 ">
                    <input type="password" name="password" placeholder="Password*" required class="form-control">
                </div>
                <div class="form-group  m-3 col-md-9 ">
                    <input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control">
                </div>
                <div class="form-group  m-3 col-md-9">
                    <textarea name="address" placeholder="Address" required class="form-control"></textarea>
                </div>
                <div class="form-group  m-3 col-md-9">
                    <input type="file" name="photo" placeholder="select photo" required class="form-control">
                </div>
                <div class="form-group  m-3 col-md-9 text-center">
                    <input type="number" name="phone" placeholder="phone" required class="form-control">
                </div>
                <div >
                    <input type="submit" name="submit" id="reg" value="Register" class="btn btn-success btn-md">
                    <input type="reset" name="reset" value="Reset" class="btn btn-danger btn-md">
                </div>
                <div class="text-white text-center m-3">
                    <b > Already have an account?</b> <a href="" data-bs-toggle="modal" data-bs-target="#login">Login</a>
                </div>
                
            </form>
        </div>
        </div>
    </div>
</div>
\