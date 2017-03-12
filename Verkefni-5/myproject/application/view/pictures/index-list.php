<p><?php echo print_r($fjoldi) ?></p>

<hr>

<?php foreach ($myndirListi as $key => $object): ?>

 <div>
  <a href="img?id=<?= $myndir[$key]->mynd_id ?>"><?php echo $myndirListi[$key]->myndaheiti ?></a>
 </div>

<hr>

<?php endforeach; ?>