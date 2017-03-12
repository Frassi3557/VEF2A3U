<a href=""></a>

<?php foreach ($myndir as $key => $object): ?>

  <?php $authorId = $myndir[$key]->notandi_id; ?>

 <div class="image-box">
  <h1 class="title"><?php echo $myndir[$key]->myndaheiti ?></h1>
  <img class="image" src="<?= $myndir[$key]->skraarheiti ?>">
  <p class="description"><?php echo $myndir[$key]->textalysing ?></p>
  <p class="author"><?php echo $notendur[intval($authorId-1)]->nafn ?></p>
 </div>
<?php endforeach; ?>