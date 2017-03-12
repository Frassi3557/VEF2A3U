<?php foreach ($myndirListi as $key => $object): ?>
  <?php $authorId = $myndir[$key]->notandi_id; ?>

  <div class="birtamynd">
    <?php if($_GET["id"] == intval($key+1)): ?>
    <img src="<?= $myndirListi[$key]->skraarheiti ?>">
    
    <div class="birtamynd-info">
      
      <h1 class="title"><?php echo $myndirListi[$key]->myndaheiti ?></h1>
      <p class="description"><?php echo $myndirListi[$key]->textalysing ?></p>
      <p class="author"><?php echo $notendur[intval($authorId-1)]->nafn ?></p>
      
    </div>
    
    <?php endif; ?>
    
  </div>
  
<?php endforeach; ?>
