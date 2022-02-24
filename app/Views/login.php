
<?= $this->extend('Template/base') ?>
<?= $this->section('title')?>
<?= 'login' ?>
<?= $this->endSection() ?>

<?= $this->section('content')?>

<?php if(session()->getFlashData('message') !=null):?>
<div class="alert alert-success">
  <p><?php  session()->getFlashData('message') ?></p>
</div>
<?php endif; ?>
<form role="form" class="form-signin pb-5" method="POST" action="<?= base_url('login')?>">
 <div class="text-center">
   <h2 class="display-4 mb-3">Please Login</h2>
 </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Register</button> 
  <button type="submit" class="btn btn-primary">Sign In</button>
</form>

<?= $this->endSection()?>