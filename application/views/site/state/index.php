<?php get_site_header(); ?>
<style>
    body {
            background-color:gray !important;
        }
</style>
<div class="text-center fs-1 text-danger fw-bold mt-2" style="text-shadow:1px 3px 0px black;">UTTAR PRADESH CUISINE</div>

<div class="my-3" style="height: 700px; background: url('<?= base_url('uploads/site/Uttar.png');?>') no-repeat center center/cover;background-size: 100% 100%;"></div>

<div class="text-center text-white fs-1 fw-bold py-3" style="text-shadow:2px 2px 0px red;">ABOUT</div>
<div class="text-center text-dark fs-1 fw-bold py-2" style="text-shadow:2px 2px 0px lawngreen;">ALL DISHES</div>

<div class="container py-4">
  <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">

    <div class="col">
      <div class="card h-100 border-0 shadow-sm overflow-hidden rounded-3">
        <a href="task289.html" class="d-block position-relative">
          <img src="https://www.archanaskitchen.com/images/archanaskitchen/0-Archanas-Kitchen-Recipes/Articles/Chakori_Warqui_Recipe_Flaky_Paratha_5.jpg" class="card-img-top" style="height:300px; object-fit:cover;">
          <div class="position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-50 text-light text-center py-2 fs-5 fw-bold">Warqi Paratha</div>
        </a>
      </div>
    </div>

    <div class="col">
      <div class="card h-100 border-0 shadow-sm overflow-hidden rounded-3">
        <a href="task290.html" class="d-block position-relative">
          <img src="https://www.foodfusion.com/wp-content/uploads/2019/08/Tawa-galawati-kabab-Recipe-by-Food-fusion-1.jpg?v=1587763228" class="card-img-top" style="height:300px; object-fit:cover;">
          <div class="position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-50 text-light text-center py-2 fs-5 fw-bold">Galawati Kebab</div>
        </a>
      </div>
    </div>

    <!-- repeat same pattern for rest -->

  </div>
</div>

<?php get_site_footer(); ?>
