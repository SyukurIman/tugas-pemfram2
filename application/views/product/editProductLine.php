<div class="pagetitle">
  <h1>Edit Product Lines</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Product</a></li>
      <li class="breadcrumb-item active">Edit Product Lines</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <form action="<?php echo base_url()?>ds-product/editProductLine?id=<?php echo $ProductLine[0]->productLine ?>" method="post">
  <div class="mb-3">
    <label class="form-label" for="productLine">Product Lines</label>
    <input value="<?php echo $ProductLine[0]->productLine ?>" required class="form-control" type="text" name="productLine" id="Product Lines" placeholder="productlines">
  </div>

  <div class="mb-3">
    <label class="form-label" for="textDescription">Description</label>
    <input value="<?php echo $ProductLine[0]->textDescription ?>" required class="form-control" placeholder="Description" type="text" name="textDescription" id="textDescription">
  </div>

  <div class="mb-3">
    <button class="btn btn-primary" type="submit">Save</button>
    <a class="btn btn-danger" href="<?php echo base_url() ?>dashboard?delete-id=<?php echo $ProductLine[0]->productLine?>">Delete</a>
    <a class="btn btn-warning " href="<?php echo base_url() ?>dashboard">Cancel</a>
  </div>
  </form>
</section>

<?php if (isset($message)):?>
  <script>
    <?php if($message == 'Update Data Product Line Successfully'): ?>
      swal("Success!", "<?php echo $message ?>", "success", {
        button: "Ok",
      });
    <?php endif ?>
    <?php if($message == 'Update Data Product Line error !!'): ?>
      swal("Failed!", "<?php echo $message ?>", "error", {
        button: "Ok",
      });
    <?php endif ?>
  </script>
<?php endif?>