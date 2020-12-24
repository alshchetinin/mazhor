<?php
                        $title = get_field('title');
                        $description = get_field('description');
                        $buttonText = get_field('button-text');
                        $buttonLink = get_field('button-link');
                        $picture = get_field('picture');
                  
                  ?>

<div class="hero">
      <div class="hero__overlay hero__overlay_mobile"></div>
      <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODg2IiBoZWlnaHQ9IjE5MjAiIHZpZXdCb3g9IjAgMCA4ODYgMTkyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggb3BhY2l0eT0iMC4wNCIgZD0iTTQxOS40MDIgMTA3MS45OUwzNzEuNzYyIDkxMS45NzJIMzcwLjY1NEMzNzAuODM5IDkxNS43ODIgMzcxLjExNiA5MjEuNDk3IDM3MS40ODUgOTI5LjExN0MzNzEuODU0IDkzNi43MzcgMzcyLjIyNCA5NDQuOTI5IDM3Mi41OTMgOTUzLjY5MkMzNzIuOTYyIDk2Mi4yNjQgMzczLjE0NyA5NzAuMDc1IDM3My4xNDcgOTc3LjEyM1YxMDcxLjk5SDMzNS43NTVWODY3Ljk2NkgzOTIuODEyTDQzOS42MjEgMTAyMy45OUg0NDAuNDUyTDQ5MC4wMzEgODY3Ljk2Nkg1NDcuMDg4VjEwNzEuOTlINTA4LjAzNVY5NzUuNDA5QzUwOC4wMzUgOTY4LjkzMiA1MDguMTI3IDk2MS41MDIgNTA4LjMxMiA5NTMuMTJDNTA4LjY4MSA5NDQuNzM4IDUwOC45NTggOTM2LjgzMiA1MDkuMTQzIDkyOS40MDNDNTA5LjUxMiA5MjEuNzgzIDUwOS43ODkgOTE2LjA2OCA1MDkuOTc0IDkxMi4yNThINTA4Ljg2Nkw0NTcuOTAyIDEwNzEuOTlINDE5LjQwMloiIGZpbGw9ImJsYWNrIi8+Cjwvc3ZnPgo=" data-src="<?php echo $picture ?>" alt="" class="hero__bg lazy">
      <div class="wrapper">
            <div class="row">                  
                  <div class="hero__title">
                        <h1><?php echo $title?></h1>
                  </div>
                  <div class="hero__description">
                        <?php echo $description?>
                  </div>
                  <div class="hero__advantages">
                  <?php while( have_rows('hero-advantages') ): the_row(); 

                        // переменные
                        $icon = get_sub_field('icon');
                        $text = get_sub_field('text');
                        ?>
                        <div class="advantage">
                              <div class="advantage__icon"><img class="skip-lazy" src="<?php echo $icon?>" alt="" width="37px"></div>
                              <div class="advantage__text"><?php echo $text?></div>

                        </div>					

                  <?php endwhile; ?>
                  </div>
                  <div class="hero__button">
                        <a href="<?php echo $buttonLink ?>" class="button button-primary button-big"><?php echo $buttonText?></a>
                  </div>
            </div>
      </div>
</div>