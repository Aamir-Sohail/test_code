<?= $this->extend('Template/base');?>


<form role="form" class="form-signin" method="POST" action="<?= base_url('user')?>">
<?= csrf_field() ?>
<div class="form-group">
    <label for="exampleInputFullName">Full Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputFullName" aria-describedby="FullNameHelp">
    <small id="FullNameHelp" class="form-text text-muted">We'll never share your FullName with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputUserName">User Name</label>
    <input type="text" name="username" class="form-control" id="exampleInputUserName" aria-describedby="UserNameHelp">
    <small id="UserNameHelp" class="form-text text-muted">We'll never share yourUserName with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <div class="form-group">
    <label for="exampleInputCPassword1">Confirm Password</label>
    <input type="password" name="password_confirmation" class="form-control" id="exampleInputCPassword1">
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Register</button> 
  <button type="submit" class="btn btn-primary">Sign In</button>
</form>