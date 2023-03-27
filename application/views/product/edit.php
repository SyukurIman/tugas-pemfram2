<div class="pagetitle">
  <h1>Edit Product</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Product</a></li>
      <li class="breadcrumb-item active">Edit Product</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <form action="<?php echo base_url()?>index.php/ds-product/edit?id=<?php echo $M_Product[0]->productCode ?>" method="post">
  <div class="mb-3">
    <label class="form-label" for="productName">Product Name</label>
    <input value="<?php echo $M_Product[0]->productName ?>" required class="form-control" type="text" name="productName" id="Product Name" placeholder="productName">
  </div>

  <div class="mb-3">
    <label class="form-label" for="productLine">Product Line</label>
    <select required class="form-control" name="productLine" id="productLine">
      <?php foreach($ProductLines as $key => $nameProdutLine) : ?> 
        <?php if($M_Product[0]->productLine == $nameProdutLine->productLine):?>
          <option value="<?php echo $nameProdutLine->productLine?>"><?php echo $nameProdutLine->productLine?></option>
        <?php endif ?>
        <?php if($M_Product[0]->productLine != $nameProdutLine->productLine): ?>
          <option value="<?php echo $nameProdutLine->productLine?>"><?php echo $nameProdutLine->productLine?></option>
        <?php endif ?>
      <?php endforeach?>
    </select>
  </div>

  <div class="mb-3">
    <label class="form-label" for="productScale">Product Scale</label>
    <input value="<?php echo $M_Product[0]->productScale ?>" required class="form-control" placeholder="Product Scale" type="text" name="productScale" id="productScale">
  </div>

  <div class="mb-3">
    <label class="form-label" for="productVendor">Product Vendor</label>
    <input value="<?php echo $M_Product[0]->productVendor ?>" required class="form-control" placeholder="Product Vendor" type="text" name="productVendor" id="productVendor">
  </div>

  <div class="mb-3">
    <label class="form-label" for="productDescription">Product Description</label>
    <input value="<?php echo $M_Product[0]->productDescription ?>" required class="form-control" placeholder="Product Description" type="text" name="productDescription" id="productDescription">
  </div>

  <div class="mb-3">
    <label class="form-label" for="quantityInStock">Quantity In Stock</label>
    <input value="<?php echo $M_Product[0]->quantityInStock ?>" required class="form-control" placeholder="Quantity In Stock" type="number" name="quantityInStock" id="quantityInStock">
  </div>

  <div class="mb-3">
    <label class="form-label" for="buyPrice">Buy Price</label>
    <input value="<?php echo $M_Product[0]->buyPrice ?>" required class="form-control" placeholder="Buy Price" type="number" name="buyPrice" id="buyPrice" >
  </div>

  <div class="mb-3">
    <label class="form-label" for="MSRP">MSRP</label>
    <input value="<?php echo $M_Product[0]->MSRP ?>" required class="form-control" placeholder="MSRP" type="number" name="MSRP" id="MSRP">
  </div>

  <div class="mb-3">
    <button class="btn btn-primary" type="submit">Save</button>
    <a class="btn btn-secondary"  href="<?php echo base_url() ?>index.php/ds-product/">Cancel</a>
  </div>
  </form>
</section>

<?php if (isset($message)):?>
  <script>
    <?php if($message == 'Update Data Product Successfully'): ?>
      swal("Success!", "<?php echo $message ?>", "success", {
        button: "Ok",
      });
    <?php endif ?>
    <?php if($message == 'Update Data Product error !!'): ?>
      swal("Failed!", "<?php echo $message ?>", "error", {
        button: "Ok",
      });
    <?php endif ?>
  </script>
<?php endif?>
