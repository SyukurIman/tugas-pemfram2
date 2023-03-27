<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Product</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section card dashboard">
  <div class="card-body">
    <h5 class="card-title">Data Product</h5>
    <div class="w-100 overflow-scroll">
      <table class="table table-borderless datatable align-middle" style="width: 100%; min-width: none;">
        <thead class="table-light align-middle">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Product Code</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Line</th>
            <th scope="col">Product Scale</th>
            <th scope="col">Product Vendor</th>
            <th scope="col">Product Description</th>
            <th scope="col">Quantity In Stock</th>
            <th scope="col">Buy Price</th>
            <th scope="col">MSRP</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $index = 1;?>
          <?php foreach ($M_Product as $key => $productList) : ?>
          <tr >
            <th scope="col" ><a href="#">#<?php echo $index++ ?></a></th>
            <td scope="col"><?php echo $productList->productCode ?></td>
            <td scope="col"><?php echo $productList->productName?></td>
            <td scope="col"><?php echo $productList->productLine?></td>
            <td scope="col"><?php echo $productList->productScale?></td>
            <td scope="col"><?php echo $productList->productVendor?></td>
            <td scope="col"><?php echo $productList->productDescription?></td>
            <td scope="col"><?php echo $productList->quantityInStock?></td>
            <td scope="col"><?php echo $productList->buyPrice?></td>
            <td scope="col"><?php echo $productList->MSRP?></td>
            <td scope="col">
              <a class="btn btn-success" style="font-size: smaller; margin-bottom: 5px;" href="<?php echo base_url() ?>index.php/ds-product/edit?id=<?php echo $productList->productCode ?>" value="" name="edit">Edit</a>
              <a class="btn btn-danger" style="font-size: smaller; " href="<?php echo base_url() ?>index.php/ds-product?delete_id=<?php echo $productList->productCode ?>" value="<?php echo $productList->productCode ?>" name="delete">Delete</a>
            </td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
    
  </div>
  
</section>

<?php if (isset($message)):?>
  <script>
    <?php if($message == 'Delete Data Product Successfully'): ?>
      swal("Success!", "<?php echo $message ?>", "success", {
        button: "Ok",
      });
    <?php endif ?>
    <?php if($message != 'Delete Data Product Successfully'): ?>
      swal("Failed!", "<?php echo $message ?>", "error", {
        button: "Ok",
      });
    <?php endif ?>
  </script>
<?php endif?>