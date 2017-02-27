<?php

$searchQuery = $_GET['q'];

$data = array
(
  array(
    'text'=>'Apple',
    'url'=> 'http://apple.com'),
  array(
    'text'=>'Bakers Delight',
    'url'=>'http://bakersdelight.co.nz'
    )

  );
// die(var_dump($data));
// foreach ($data as $term):
  ?>
  <!-- <a href="<?= $term['url'] ?>"><?= $term['text'] ?></a><br> -->
  <?php
// endforeach;
// die();

  require 'partials/header.php';
  require 'partials/navigation.php';
  ?>


  <!-- Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h4>Search results for <strong><?= $searchQuery;?></strong></h4>
        <!-- Displayed results -->

        <ul class="list-group">
          <?php
          foreach ($data as $term):
            ?>
          <!-- Single Result -->
          <li class="list-group-item notification-bar-fail m-b-1">
            <div class="notification-bar-details">
              
              <a href="$url" class="notification-bar-title">
                 <?= $term['text'] ?>
              </a>
              <span class="text-muted"><?= $term['url'] ?></span>
            </div>
          </li>
          <!-- End of single result -->
          <?php
          endforeach;
          ?>
          <!-- End of single result -->
        </ul>
      </div>
    </div>
  </div>

  <?php 
  require 'partials/search-footer.php';
  require 'partials/footer.php';
  ?>
