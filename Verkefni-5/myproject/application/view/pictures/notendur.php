<?php foreach ($notendur as $key => $object): ?>

 <div>
  <a href="notandi?id=<?= $notendur[$key]->notandi_id ?>"><?php echo $notendur[$key]->nafn ?></a>
 </div>

<hr>

<?php endforeach; ?>