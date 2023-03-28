<div class="pagetitle">
  <h1>Detail Order</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Detail Order</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section card dashboard">
  <div class="card-body">
    <h5 class="card-title">Detail Order</h5>
    <div class="w-100 overflow-scroll">
      <table class="table table-borderless datatable align-middle" style="width: 100%; min-width: none;">
        <thead class="table-light align-middle">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Order Number</th>
            <th scope="col">Product</th>
            <th scope="col">Quantity Ordered</th>
            <th scope="col">Price Each</th>
          </tr>
        </thead>
        <tbody>
          <?php $index = 1;?>
          <?php foreach ($orders as $key => $productList) : ?>
          <tr >
            <th scope="col" ><a href="#">#<?php echo $index++ ?></a></th>
            <td scope="col"><?php echo $productList->orderNumber ?></td>
            <td scope="col"><?php echo $productList->Product?></td>
            <td scope="col"><?php echo $productList->quantityOrdered?></td>
            <td scope="col"><?php echo $productList->priceEach?></td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
    
  </div>
  
</section>