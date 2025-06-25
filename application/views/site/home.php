<?php get_site_header();?>

<div class="swiper mySwiper">
  <div class="swiper-wrapper">
     <?php foreach ($slider_images as $img): ?>
    <div class="swiper-slide"><img src="<?= base_url($img->image_path) ?>" width="100%" height="300px"></div>
    <?php endforeach; ?>
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-pagination"></div>
</div>
<style>
  .logo {
    background-image: url('<?= base_url("uploads/site/samrit icone.jpeg"); ?>');
  }
</style>
<div class="container">
    <div class="b20">

        <i class="i57">"I love indian food - it' my favourite auisine. I love the mixture if spices and the subtle flavours.<p class="g68"style="color:red;text-align:center;">It's really exotic; the spices are so sensuous."----joe Perry</p></i>
        
    </div>

    <!-- logo-->
    <div class="logo"></div>


    <!--logo-->
    <div class="b99">
        <h1 class="main"><b class="p46">SAMRIT</b></h1>
        <m class="maintain">
            <i>Our Object is to Beutify,Maintains Preserve the Traditional Style Of Our Cuntry Society. So that We Can Give Our Traditional Food Style as Inheritance to our Future Generation And Society. With This Aim to Modernize the Heritage of Our Cuntry And Present it in a very Simple Style, We will move farword with the Co-Operation of all of you; -- JAI HIND !</i>
        </m>
    </div>
    <div class="b21">
        <?php foreach ($food_items as $item): ?>
        <div class="f1"><a href="<?= $item->link ?>"><img src="<?= base_url($item->image_path) ?>" width="100%"height="300px"style="border-radius:10px;">  </a></div>
        <?php endforeach; ?>
    </div>
</div>

<?php get_site_footer();?>