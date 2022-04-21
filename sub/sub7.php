<div id="sub7" class="kepala7" data-stellar-background-ratio="0.5">

</div>

      <?php
          $hasil=$kon->query("SELECT * from jokes");

          if($hasil->num_rows):
              $rows = $hasil->fetch_ALL(MYSQLI_ASSOC);
              $no=1;
              ?>
              <?php foreach ($rows as $row):?>

                          <div class="ui divider"></div>
                      <div class="ui divided items">

                        <div class="item">
                          <div class="ui middle aligned small image">
                            <img src="img/<?php echo rand(1,34); ?>.jpg">
                          </div>
                          <div class="middle aligned content">
                            "<?php  echo $row['joke']; ?>"
                          </div>
                        </div>



                      </div>


              <?php endforeach; ?>
        <?php endif; ?>
