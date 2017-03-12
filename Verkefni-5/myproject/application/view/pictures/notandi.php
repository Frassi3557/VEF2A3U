<?php foreach ($notendur as $key => $object): ?>

  <?php if($_GET["id"] == intval($key+1)): ?>
  
  <?php foreach ($myndir as $key => $object): ?>

    <?php if($myndir[$key]->notandi_id == $_GET["id"]): ?>
    <div>
      <h1 class="title"><?php echo $myndir[$key]->myndaheiti ?></h1>
      <img src="<?= $myndir[$key]->skraarheiti ?>">
    </div>

    <?php endif; ?>

  
  <?php endforeach; ?>

  <?php endif; ?>

<?php endforeach; ?>