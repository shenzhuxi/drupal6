<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php $i = 0; ?>
<div class='newsitems'>
<?php foreach ($rows as $id => $row): ?>
  
     <?php if($i!=0&&$i%2 == 0): ?>
  </div><div class='newsitems'>
    <?php endif; ?>
  <div class="<?php print  $classes[$id]; ?>">
    <?php print $row; ?>
  </div> 
<?php $i++; ?>
<?php endforeach; ?>
</div>