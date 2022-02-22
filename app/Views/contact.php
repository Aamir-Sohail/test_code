<?php

use Faker\Guesser\Name;
use PhpParser\Node\Stmt\Label;
?>



<?= $this->extend('Template/base') ?>
<?= $this->section('title')?>
<?= $title ?>
<?= $this->endSection() ?>
<?= $this->section('content')?>

<div class="col-md-6"> 



    <h1>Contact us <?= $email ?></h1>
     <?= $c_f['form_open'] ?>
     <div class="form-group">
           <?php if ($validator -> hasError('name')) : ?>
            <?= $validator->showError('name','my_single' )?>
           <?php endif; ?>
            <?= form_label('Enter Your Name')?>
            
           <?= $c_f['name']?>
     </div>
         
     <div class="form-group">
       <?= form_label('Enter Your Email')?>
      
           <?= $c_f['email']?>
           <?php if ($validator -> hasError('email')) : ?>
            <?= $validator->showError('email','my_single' )?>
           <?php endif; ?>
     </div>
           
     <div class="form-group">
     <?= form_label('Enter Your Message')?>
           <?= $c_f['message']?>
           <?php if ($validator -> hasError('name')) : ?>
            <?= $validator->showError('message','my_single' )?>
           <?php endif; ?>
     </div>
           
     <div class="form-group">
       <?= form_submit(['value' => 'Submit', 'class' => 'btn btn-primary'])?>
     </div>
           
</div>

</div>

<?= $this->endSection()?>
   