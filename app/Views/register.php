
<?= $this->extend('Template/base') ?>
<?= $this->section('title')?>
<?= 'Register' ?>
<?= $this->endSection() ?>

<?= $this->section('content')?>

<form role="form" class="form-signin pb-5" method="POST" action="<?= base_url('user')?>">
<?= csrf_field()?>
<div class="text-center">
   <h2 class="display-4 mb-3">Please Register</h2>
 </div>
<div class="form-group">
    <label for="exampleInputFullName">Full Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputFullName" aria-describedby="FullNameHelp" 
    value="<?= old('name')?>">
    <small id="FullNameHelp" class="form-text text-muted">We'll never share your FullName with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputUserName">User Name</label>
    <input type="text" name="username" value="<?= old('username')?>" class="form-control" id="exampleInputUserName" aria-describedby="UserNameHelp">
    <small id="UserNameHelp" class="form-text text-muted">We'll never share yourUserName with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" value="<?= old('email')?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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

<?= $this->endSection()?>
   




