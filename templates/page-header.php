<?php use Roots\Sage\Titles; ?>

<?php if(is_404()) : ?>
<div class="page-header">
  <h1>Error 404 - Page not Found</h1>
</div>
<?php else :?>
<div class="page-header">
  <h1><?= Titles\title(); ?></h1>
</div>
<?php endif; ?>
