<?php get_admin_header(); ?>

<style>
    .preview-img { width: 100px; height: 100px; object-fit: cover; margin: 5px; }
  </style>
<div class="content" id="main-content">
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Home Page</h5>
            </div>
            <div class="card-body">
                 <div class="container">
			    <h2 class="mb-4">Upload Slider Images</h2>
			    <form method="post" enctype="multipart/form-data" id="sliderForm">
			      <div class="mb-3">
			        <label for="sliderImages" class="form-label">Select Multiple Images</label>
			        <input type="file" class="form-control" id="sliderImages" name="slider_images[]" multiple accept="image/*">
			      </div>
			      <div id="sliderPreview" class="d-flex flex-wrap"></div>
			      <div class="d-flex flex-wrap">
			      <?php foreach ($slider_images as $img): ?>
				  <div class="position-relative me-2 mb-2">
				    <img src="<?= base_url($img->image_path) ?>" class="preview-img">
				    <button class="btn btn-sm btn-danger position-absolute top-0 end-0 removeSlider" data-id="<?= $img->id ?>">&times;</button>
				  </div>
				<?php endforeach; ?>
				</div>
			    </form>

			    <hr>

			    <h2 class="mb-4">Add Food Item</h2>
			    <form method="post" enctype="multipart/form-data" id="foodForm">
			      <div class="mb-3">
			        <label for="foodName" class="form-label">Food Name</label>
			        <input type="text" class="form-control" id="foodName" placeholder="Enter food name">
			      </div>

			      <div class="mb-3">
			        <label for="foodImage" class="form-label">Food Image</label>
			        <input type="file" class="form-control" id="foodImage" accept="image/*">
			        <div id="foodImagePreview" class="mt-2"></div>
			      </div>

			      <div class="mb-3">
			        <label for="foodLink" class="form-label">Food Page Link</label>
			        <input type="text" class="form-control" id="foodLink" placeholder="https://example.com">
			      </div>

			      <button type="button" class="btn btn-primary" id="addFoodBtn">Add Food Item</button>
			    </form>

			    <hr>

			    <h2 class="mb-4">Food Items Preview</h2>
			    <div id="foodItemsList" class="row g-3"></div>
			    <div class="d-flex flex-wrap">
				  <?php foreach ($food_items as $item): ?>
				    <div class="position-relative mb-3 col-md-3">
				      <div class="card h-100 d-flex me-2 flex-column">
				        <div class="position-relative">
				          <img src="<?= base_url($item->image_path) ?>" class="card-img-top" alt="<?= $item->name ?>">
				          <button class="btn btn-sm btn-danger rounded-circle position-absolute top-0 end-0 removeFood m-1" data-id="<?= $item->id ?>">
				            <i class="fa fa-times"></i>
				          </button>
				          <a href="<?= $item->link ?>" target="_blank" class="btn btn-sm bg-white rounded-circle position-absolute top-0 start-0 m-1">
				            <i class="fa fa-arrow-left text-success"></i>
				          </a>
				        </div>
				        <div class="card-body pb-2 pt-2 flex-fill d-flex flex-column justify-content-end">
				          <h5 class="card-title text-center mb-0"><?= $item->name ?></h5>
				        </div>
				      </div>
				    </div>
				  <?php endforeach; ?>
				</div>
			  </div>
            </div>
        </div>
    </div>
</div>

<?php get_admin_footer(); ?>


<script>
    // Upload slider images instantly
	$('#sliderImages').on('change', function() {
	  Array.from(this.files).forEach(file => {
	    let formData = new FormData();
	    formData.append('image', file);

	    $.ajax({
	      url: '<?= base_url("upload-slider-image") ?>',
	      type: 'POST',
	      data: formData,
	      contentType: false,
	      processData: false,
	      success: function(res) {
	        let data = JSON.parse(res);
	        if (data.status === 'success') {
	          let img = $(`
	            <div class="position-relative me-2 mb-2">
	              <img src="${data.path}" class="preview-img">
	              <button class="btn btn-sm btn-danger position-absolute top-0 end-0 removeSlider" data-id="${data.id}">&times;</button>
	            </div>
	          `);
	          $('#sliderPreview').append(img);
	        }
	      }
	    });
	  });
	});

	// Remove slider image
	$(document).on('click', '.removeSlider', function() {
	  let id = $(this).data('id');
	  let btn = $(this);
	  $.post('<?= base_url("delete-slider-image") ?>', {id: id}, function(res) {
	    let data = JSON.parse(res);
	    if (data.status === 'success') {
	      btn.closest('div').remove();
	    }
	  });
	});

	// Upload food item
	$('#addFoodBtn').on('click', function() {
	  let name = $('#foodName').val();
	  let link = $('#foodLink').val();
	  let imgInput = $('#foodImage')[0].files[0];

	  if (!name || !imgInput || !link) {
	    alert("Please fill all fields.");
	    return;
	  }

	  let formData = new FormData();
	  formData.append('name', name);
	  formData.append('link', link);
	  formData.append('food_image', imgInput);

	  $.ajax({
	    url: '<?= base_url("upload-food-item") ?>',
	    type: 'POST',
	    data: formData,
	    contentType: false,
	    processData: false,
	    success: function(res) {
	      let data = JSON.parse(res);
	      if (data.status === 'success') {
	        let col = $(`
	          <div class="col-md-3">
	            <div class="card">
	              <img src="${data.path}" class="card-img-top" alt="${data.name}">
	              <div class="card-body">
	                <h5 class="card-title">${data.name}</h5>
	                <a href="${data.link}" target="_blank" class="btn btn-primary btn-sm">Visit Page</a>
	                <button class="btn btn-danger btn-sm mt-2 removeFood" data-id="${data.id}">Remove</button>
	              </div>
	            </div>
	          </div>
	        `);
	        $('#foodItemsList').append(col);
	        $('#foodForm')[0].reset();
	        $('#foodImagePreview').html('');
	      } else {
	        alert(data.message);
	      }
	    }
	  });
	});

	// Remove food item
	$(document).on('click', '.removeFood', function() {
	  let id = $(this).data('id');
	  let card = $(this).closest('.col-md-3');

	  $.post('<?= base_url("delete-food-item") ?>', {id: id}, function(res) {
	    let data = JSON.parse(res);
	    if (data.status === 'success') {
	      card.remove();
	    }
	  });
	});

</script>