<?= $this->extend('Template/base') ?>
<?php $this->section('title') ?>
 
<h1>Edit Profile</h1>

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
          </div>
          <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <div class="col-sm-1">
                <li class="active"><a  href="profiles">  Profile  </a></li></div>
                <div class="col-sm-2">
                <li><a href="editprofile">Edit Profile</a></li></div>
                <div class="col-sm-4">
                <li><a  href="change_password">Change Password</a></li></div>
              </ul>
          

            <div class="tab-content">
            <div class="tab-pane active" id="editprofile">

                <hr/>
                <h2>Edit Profile</h2>
</hr>
                    <?php if(allowedEdit($username)):?>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                      <div class="col-xs-12">

                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                      <div class="col-xs-12">


                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>

                          <div class="col-xs-12">

                              <label for="email"><h4>Address</h4></label>
                              <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" title="enter your Address.">
                          </div>
                      </div>
                      <div class="form-group">
                      <div class="col-xs-12">

                              <label for="city"><h4>City</h4></label>
                              <input type="text" class="form-control" id="city" name="city" placeholder="Enter the City" title="enter a City">
                          </div>
                          <div class="col-xs-12">
                              <label for="state"><h4>State</h4></label>
                              <input type="text" class="form-control" id="state" placeholder="Enter the State" title="enter a State">
                          </div>
                          <div class="col-xs-12">
                          
                              <label for="Country"><h4>Country</h4></label>
                              <input type="text" class="form-control" name="country" id="country" placeholder="Country Name" title="enter a Country">
                          </div>
                      </div>
                   
                      
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
                  <?php   else: ?>
                    <h2>YOu are Not Login</h2>
                  <?php endif; ?>
            </div>
          </div>
          </div>
    </div>
</div>
<?php $this->endSection() ?>
