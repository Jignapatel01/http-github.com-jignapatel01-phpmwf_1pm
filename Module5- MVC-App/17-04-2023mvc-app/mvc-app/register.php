<!-- register page modal -->
<div class="modal fade reg-form" role="dialog" id="reg">
    <div class="modal-dialog">
    <div class="modal-content">
<div class="container   shadow-sm  p-2">
    <form method="post">
        <h3 class="text-center  login-heading p-2">Register Form</h3>
        <hr class="border border-1 border-dark w-50 mx-auto">
        <div class="form-group col-md-9 mt-3 mx-auto">
            <input type="text" name="email" placeholder="Email *" required class="form-control">
        </div>
        <div class="form-group col-md-9 mt-3 mx-auto">
            <input type="password" name="pass" placeholder="Password *" required class="form-control">
        </div>
        <div class="form-group col-md-9 mt-3 mx-auto">
            <input type="password" name="cpass" placeholder="Confirm Password *" required class="form-control">
        </div>

        <div class="form-group col-md-9 mt-3 mx-auto">
            <input type="number" name="phone" placeholder="Phone *" required class="form-control">
        </div>

        <div class="form-group col-md-9 mt-3 mx-auto">
            <input type="file" name="photo" placeholder="Upload photo *" required class="form-control">
        </div>

        <div class="form-group col-md-9 mt-3 mx-auto">
            <textarea name="address" placeholder="Address *" required class="form-control"></textarea>
        </div>

        <div class="form-group col-md-9 mt-3 mx-auto">
            <input type="submit" name="register" class="btn btn-lg btn-success" value="Register">
            <input type="submit" name="reset" class="btn btn-lg btn-danger" value="Reset">
           
        </div>
    
        
        <div class="form-group col-md-9 mt-3 mx-auto">
            <b class="text-dark">Already have an account ? <a href="">Login here</a></b>
        </div>
        
    </form>
    </div>

        </div>
    </div>
</div>