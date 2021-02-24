<?php
$title = get_field('title');
$description = get_field('description');


?>

<section class="introduction" id="introduction">
      <div class="wrapper">
            <div class="row">
                  <div class="headline-section">
                        <h2 class="headline-section__title">
                              <?php echo $title ?>
                        </h2>
                        <p><?php echo $description ?></p>
                  </div>
            </div>
            <div class="row">
                  <div class="introduction-item">
                        <div class="introduction-item__number"><span>5793</span></div>
                        <div class="introduction-item__text">
                        Количество активных пользователей 
                        </div>

                  </div>
                  <div class="introduction-item">
                        <div class="introduction-item__number"><span>71</span></div>
                        <div class="introduction-item__text">
                        Количество подключенных домов 
                        </div>

                  </div>

                  <div class="introduction-item">
                        <div class="introduction-item__number"><span>97</span>%</div>
                        <div class="introduction-item__text">
                        Жителей новостроек используют Мажордом
                        </div>

                  </div>
                  <div class="introduction-item">
                        <div class="introduction-item__number"><span>4</span>.<span>4</span></div>
                        <div class="introduction-item__text">
                        Индекс удовлетворённости жильцов качеством сервисного обслуживания (CSI) 
                        </div>

                  </div>

            </div>
      </div>
</section>