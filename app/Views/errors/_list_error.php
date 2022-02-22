<?php
if(!empty ($error)) : ?>   
<div class="errors" role="alert"></div>
<ul class=" alert alert-danger">

<?php foreach($error as $error) : ?>
    <li><?php esc($error)  ?>
    <?php endforeach ?>
</ul>
</div>
<?php endif ?>