<div class="pagetitle">
  <h1>Add Product Lines</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Product</a></li>
      <li class="breadcrumb-item active">Add Product Lines</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <form action="<?php echo base_url()?>ds-product/addProductLine" method="post">
  <div class="mb-3">
    <label class="form-label" for="productLine">Product Lines</label>
    <input required class="form-control" type="text" name="productLine" id="Product Lines" placeholder="productlines">
  </div>

  <div class="mb-3">
    <label class="form-label" for="textDescription">Description</label>
    <input required class="form-control" placeholder="Description" type="text" name="textDescription" id="productScale">
  </div>

  

  <div class="mb-3">
    <button class="btn btn-primary" type="submit">Save</button>
  </div>
  </form>
</section>

<?php if (isset($message)):?>
  <script>
    <?php if($message == 'Insert Data Product Successfully'): ?>
      swal("Success!", "<?php echo $message ?>", "success", {
        button: "Ok",
      });
    <?php endif ?>
    <?php if($message == 'Insert Data Product error !!'): ?>
      swal("Failed!", "<?php echo $message ?>", "error", {
        button: "Ok",
      });
    <?php endif ?>
  </script>
<?php endif?>