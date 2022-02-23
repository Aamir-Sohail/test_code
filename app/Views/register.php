
<?= $this->extend('Template/base') ?>
<?= $this->section('title')?>
<?= 'Register' ?>
<?= $this->endSection() ?>

<?= $this->section('content')?>

  <?php 
       $errors =null;  
  if(session()->getFlashdata('errors')!= null): 
  $errors =session()->getFlashData('errors');
  endif;
  ?>


<form role="form" class="form-signin pb-5" method="POST" action="<?= base_url('register')?>"> 
<?= csrf_field()?>
<div class="text-center">
   <h2 class="display-4 mb-3">Please Register</h2>
 </div>
<div class="form-group">
    <label for="exampleInputFullName">Full Name</label>
    <input type="text" name="name" <?= $errors != null AND isset ($errors ['name']) ? 'is-invalid' : 'is-valid' ?> class="form-control" id="exampleInputFullName"  aria-describedby="FullNameHelp" 
    value="<?= old('name')?>" required >
    <?php if($errors !=null AND isset($errors['name'])): ?>
      <p class="invalid-feedback"><?php $errors['name'] ?></p>
      <?php endif ;?>
  </div>

  <div class="form-group">
    <label for="exampleInputUserName">User Name</label>
    <input type="text" name="username" value="<?= old('username')?>" class="form-control" id="exampleInputUserName"
     <?=$errors != null AND isset ($errors ['username']) ? 'is-invalid' : 'is-valid' ?>   aria-describedby="UserNameHelp" required >
     <?php if($errors !=null AND isset($errors['username'])): ?>
      <p class="invalid-feedback"><?php $errors['username'] ?></p>
      <?php endif ;?>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" value="<?= old('email')?>" class="form-control" id="exampleInputEmail1"  
     <?= $errors != null AND isset ($errors ['email']) ? 'is-invalid' : 'is-valid' ?>  aria-describedby="emailHelp" required>
     <?php if($errors !=null AND isset($errors['email'])): ?>
      <p class="invalid-feedback"><?php $errors['email'] ?></p>
      <?php endif ;?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1"
    <?= $errors != null AND isset ($errors ['password']) ? 'is-invalid' : 'is-valid' ?>  required>
    <?php if($errors !=null AND isset($errors['password'])): ?>
      <p class="invalid-feedback"><?php $errors['password'] ?></p>
      <?php endif ;?>
  </div>
  
  <div class="form-group">
    <label for="exampleInputCPassword1">Confirm Password</label>
    <input type="password" name="pass_confirm" class="form-control" id="exampleInputCPassword1"
    <?= $errors != null AND isset ($errors ['pass_confirm']) ? 'is-invalid' : 'is-valid' ?>  required>
    <?php if($errors !=null AND isset($errors['pass_confirm'])): ?>
      <p class="invalid-feedback"><?php $errors['pass_confirm'] ?></p>
      <?php endif ;?>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Register</button> 
  <button type="submit" class="btn btn-primary">Sign In</button>
</form>

<?= $this->endSection()?>
   




