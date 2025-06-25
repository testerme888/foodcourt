<!DOCTYPE html>
<html lang="en">
<head>
  <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/site.css') ?>" rel="stylesheet">
  <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
  <link rel="icon" href="<?= base_url('uploads/admin/favicon.jpg') ?>" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <meta charset="utf-8" />
  <title><?= isset($title) ? $title : 'Samrit Food' ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<style>
  .topper {
    background-image: url('<?= base_url("uploads/site/finallogo.jpeg"); ?>');
  }
</style>

<body>

  <div class="topper"></div>

    <div class="navbar bg-black">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">

      <!-- Toggler button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Menus -->
      <div class="collapse navbar-collapse bg-black" id="collapsibleNavbar">

        <div class="upper">
          <ul>
            <li>
              <a href="#" class="j51">INDIAN REGIONAL CUISINE</a>
              <ul class="dropdown">
                <?php foreach (get_state() as $key => $value): ?>
                <li>
                  <a class="dropdown-item b67" href="<?= base_url('site/state/'.$value->id);?>"><?= ucwords($value->state);?></a>
                </li>
                <?php endforeach;?>
              </ul>
            </li>
          </ul>
        </div>

        <div class="u45">
          <ul>
            <li>
              <a href="#" class="j51">CONSULTENCY</a>
              <ul class="dropdown">
                <li><a class="dropdown-item b67" href="#">Nutrition Consultance</a></li>
                <li><a class="dropdown-item b67" href="#">Menu Plaining</a></li>
                <li><a class="dropdown-item b67" href="#">Cost Analysis</a></li>
                <li><a class="dropdown-item b67" href="#">Menu Engineering</a></li>
                <li><a class="dropdown-item b67" href="#">Sop Create</a></li>
                <li><a class="dropdown-item b67" href="#">Creative Food idea</a></li>
                <li><a class="dropdown-item b67" href="#">Low Budget Startup</a></li>
                <li><a class="dropdown-item b67" href="#">Food Persentation</a></li>
                <li><a class="dropdown-item b67" href="#">Online Food Classes</a></li>
                <li><a class="dropdown-item b67" href="#">Who To Control Food Wastage</a></li>
                <li><a class="dropdown-item b67" href="#">Recipes Priciny Analysts</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="u45">
          <ul>
            <li>
              <a href="#" class="j51">PRODUCT LIST</a>
              <ul class="dropdown">
                <li><a class="dropdown-item b67" href="task33.html">Indian Rustic Food</a></li>
                <li><a class="dropdown-item b67" href="#">Nutrition Consultancy</a></li>
                <li><a class="dropdown-item b67" href="task34.html">Indian Immunity Boasting Recipes</a></li>
                <li><a class="dropdown-item b67" href="task35.html">Indian Heart Healthy Recipes</a></li>
                <li><a class="dropdown-item b67" href="task36.html">Indian Weight Loss Food Recipes</a></li>
                <li><a class="dropdown-item b67" href="task37.html">Indian Gluten Free Dite Food Recipe</a></li>
                <li><a class="dropdown-item b67" href="task38.html">Indian Lactic Free Desserts</a></li>
                <li><a class="dropdown-item b67" href="task39.html">Indian Eatable Raw Foods</a></li>
                <li><a class="dropdown-item b67" href="task40.html">Indian Healthy Meals</a></li>
                <li><a class="dropdown-item b67" href="task41.html">Indian Kids Lunch Box Ideas</a></li>
                <li><a class="dropdown-item b67" href="task42.html">Indian Quick & Easy Meal</a></li>
                <li><a class="dropdown-item b67" href="task43.html">Indian Healthy Salads</a></li>
                <li><a class="dropdown-item b67" href="task44.html">World's Soups</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="u45">
          <ul>
            <li>
              <a href="#" class="j51">FUTURE FOOD</a>
              <ul class="dropdown">
                <li><a class="dropdown-item b67" href="#">Primix Product</a></li>
                <li><a class="dropdown-item b67" href="#">Ready To Eat Food</a></li>
                <li><a class="dropdown-item b67" href="task859.html">Fingre Food</a></li>
                <li><a class="dropdown-item b67" href="#">Dehydrated Food</a></li>
                <li><a class="dropdown-item b67" href="#">Micro Food</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="u45">
          <ul>
            <li>
              <a href="#" class="j51">CONTACT US</a>
              <ul class="dropdown">
                <li><a class="dropdown-item b67" href="#">Email</a></li>
                <li><a class="dropdown-item b67" href="#">Phone No</a></li>
                <li><a class="dropdown-item b67" href="#">Youtube</a></li>
                <li><a class="dropdown-item b67" href="#">Instagram</a></li>
                <li><a class="dropdown-item b67" href="#">Linkedin</a></li>
                <li><a class="dropdown-item b67" href="#">Whatsapp</a></li>
                <li><a class="dropdown-item b67" href="#">Facebook</a></li>
                <li><a class="dropdown-item b67" href="#">Twitter</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="upper1">
          <ul>
            <li>
              <a href="#" class="j51">SERVICES</a>
              <ul class="dropdown">
                <li><a class="dropdown-item b67" href="#">Food presentation</a></li>
                <li><a class="dropdown-item b67" href="#">Food safety</a></li>
                <li><a class="dropdown-item b67" href="#">Spices and herbs</a></li>
                <li><a class="dropdown-item b67" href="#">Planning and budgeting</a></li>
                <li><a class="dropdown-item b67" href="#">Food packaging</a></li>
                <li><a class="dropdown-item b67" href="#">Clearing plates</a></li>
                <li><a class="dropdown-item b67" href="#">Food service style</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="upper1">
          <ul>
            <li><a href="#" class="j51">HOME</a></li>
          </ul>
        </div>

        <div class="upper1">
          <nav class="">
            <div class="container-fluid">
              <form class="d-flex" role="search">
                <input class="form-control me-1 u78" type="search" placeholder="Search" aria-label="Search">
              </form>
            </div>
          </nav>
        </div>

      </div> <!-- collapse end -->

    </div>
  </nav>
</div>



