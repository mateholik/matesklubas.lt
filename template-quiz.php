<?php
/**
 * Template name: Quiz
 *
 * @package storefront
 */

get_header(); ?>
<script>
window.thinkingIcon = document.getElementById('thinkingIcon')
</script>

<div id="quiz" v-show="loaded" style="display: none" class="quiz-bg">
  <div class="quiz">

    <div class="quiz__block">
      <div class="quiz__loader">
        <div class="loading-bar">
          <div class="percentage" :style="{'width' : percentage + '%'}"></div>
          <div class="text">{{ percent }}%</div>
        </div>
      </div>
      <transition name="animation">
        <div v-for="stepData in stepsData" :key="stepData.id" v-if="step === stepData.id" class="quiz__content">
          <div class="quiz__question">
            {{ stepData.question }}
          </div>
          <div class="quiz__answers">
            <div v-for="(answer, index) in stepData.answers" :key="index" v-on:click="nextStep(answer.value)"
              class="quiz__answer-wrap">
              <div class="quiz__answer">
                {{ answer.string }}
              </div>
            </div>
          </div>
        </div>
      </transition>

      <transition name="animation">
        <div v-show="step === 7" class="quiz__content">
          <div class="quiz__question">
            Ruošiamas individualus pasiūlymas
          </div>
          <div class="quiz__answers">
            <div class="quiz__answer-wrap quiz__answer-wrap--last">
              <div class="quiz__answer quiz__answer--no-hover quiz__answer--loading">
                <img data-gif="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mate-loader.gif"
                  data-webp="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mate-loader.webp"
                  ref="thinkingIcon">
              </div>
            </div>
          </div>
        </div>
      </transition>

      <transition name="animation">
        <div v-if="showOffer.length > 0" class="quiz__content">
          <div class="quiz__question">
            Matės klubas rekomenduoja TAU:
          </div>
          <div v-if="showOffer === 'noob'">
            <?php
                        $noob_products_ids = get_field('noob');

                        $args = array(
                            'include' => $noob_products_ids,
                        );
                        $products = wc_get_products( $args ); ?>

            <div class="quiz__answers">
              <?php
                            foreach($products as $product) {
                                $thumb = $product->get_image();
                                $title = $product->get_title();
                                $link = get_permalink( $product->get_id() );
                                ?>
              <a href="<?php echo $link; ?>" target="_blank" class="quiz__answer-wrap">
                <div class="quiz__answer quiz__answer--offer quiz__answer--no-hover">
                  <div class="img">
                    <?php echo $thumb; ?>
                  </div>
                  <p class="title"><?php echo $title; ?></p>
                </div>
              </a>
              <?php } ?>
            </div>
          </div>

          <div v-if="showOffer === 'medium'">
            <?php
                        $medium_products_ids = get_field('medium');
                        $args = array(
                            'include' => $medium_products_ids,
                        );
                        $products = wc_get_products( $args ); ?>

            <div class="quiz__answers">
              <?php
                            foreach($products as $product) {
                                $thumb = $product->get_image();
                                $title = $product->get_title();
                                $link = get_permalink( $product->get_id() );
                                ?>
              <a href="<?php echo $link; ?>" target="_blank" class="quiz__answer-wrap">
                <div class="quiz__answer quiz__answer--offer quiz__answer--no-hover">
                  <div class="img">
                    <?php echo $thumb; ?>
                  </div>
                  <p class="title"><?php echo $title; ?></p>
                </div>
              </a>
              <?php } ?>
            </div>
          </div>

          <div v-if="showOffer === 'pro'">
            <?php
                        $pro_products_ids = get_field('pro');
                        $args = array(
                            'include' => $pro_products_ids,
                        );
                        $products = wc_get_products( $args ); ?>

            <div class="quiz__answers">
              <?php
                            foreach($products as $product) {
                                $thumb = $product->get_image();
                                $title = $product->get_title();
                                $link = get_permalink( $product->get_id() );
                                ?>
              <a href="<?php echo $link; ?>" target="_blank" class="quiz__answer-wrap">
                <div class="quiz__answer quiz__answer--offer quiz__answer--no-hover">
                  <div class="img">
                    <?php echo $thumb; ?>
                  </div>
                  <p class="title"><?php echo $title; ?></p>
                </div>
              </a>
              <?php } ?>
            </div>
          </div>

        </div>
      </transition>

    </div>
  </div>
  <br><br><br>
</div>

<?php get_footer();