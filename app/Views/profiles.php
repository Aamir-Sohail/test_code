<?= $this->extend('Template/base') ?>
<?php $this->section('title') ?>
 

<?php $this->endSection() ?>

<?php  $this->section('content')?>

<div class="col-md-12">
<div class="row">
  		<div class="col-sm-10"><h1><?= $username ?? 'N/A'?></h1></div>
    	<div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload">
      </div></hr><br>

               
          <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
          </div>
          
          
          
               
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
            	<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <div class="col-sm-1">
                <li class="active"><a href="profile">  Profile  </a></li></div>
                <div class="col-sm-2">
                <li><a href="editprofile">Edit Profile</a></li></div>
                <div class="col-sm-4">
                <li><a  href="change_password">Change Password</a></li></div>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="profile">
                <hr>
                <h2>Profile</h2>
</hr>
          <div class="row my-4">
              <div class="col-sm-12">
                  <strong> Full name: </strong>
                  <?= $name ?? 'N/A'?>

              </div>
          </div>

          <div class="row my-4">
              <div class="col-sm-6">
                  <strong> Email: </strong>
                  <?= $email ?? 'N/A'?>
              </div>
              
              <div class="col-sm-12">
                  <strong> Address: </strong>
                  <?= $address ?? 'N/A'?>  
              </div>
          </div>
          <div class="row my-4">
              <div class="col-sm-4">
                  <strong> City: </strong>
                  <?= $city ?? 'N/A'?>

              </div>
              <div class="col-sm-4">
                  <strong> state: </strong>
                  <?= $state ?? 'N/A'?>

              </div>
              <div class="col-sm-4">
                  <strong> Country </strong>
                  <?= $country ?? 'N/A'?>

              </div>
          </div>
          </div>

          

          
 
           

        </div><!--/col-9-->
    </div><!--/row-->
</div>

 


<?php  $this->endSection() ?>