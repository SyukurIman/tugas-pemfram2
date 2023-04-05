<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url()?>ds-customer">Customer</a></li>
      <li class="breadcrumb-item active">Payment</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section card dashboard">
  <div class="card-body">
    <h5 class="card-title">Data Payment</h5>
    <div class="w-100 overflow-scroll">
      <table class="table table-borderless datatable align-middle" style="width: 100%; min-width: none;">
        <thead class="table-light align-middle">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Customer Number</th>
            <th scope="col">Check Number</th>
            <th scope="col">Payment Date</th>
            <th scope="col">Amount</th>
          </tr>
        </thead>
        <tbody>
          <?php $index = 1;?>
          <?php foreach ($M_Customer as $key => $productList) : ?>
          <tr >
            <th scope="col" ><a href="#">#<?php echo $index++ ?></a></th>
            <td scope="col"><?php echo $productList->customerNumber ?></td>
            <td scope="col"><?php echo $productList->checkNumber?></td>
            <td scope="col"><?php echo $productList->paymentDate?></td>
            <td scope="col"><?php echo $productList->amount?></td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
    
  </div>
  
</section>