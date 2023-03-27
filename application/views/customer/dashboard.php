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
            <th scope="col">Customer Number</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">City</th>
            <th scope="col">Postal Code</th>
            <th scope="col">Country</th>
            <th scope="col">Sales ID</th>
            <th scope="col">Credit Limit</th>
            <th scope="col">Total Payment</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $index = 1;?>
          <?php foreach ($M_Customer as $key => $productList) : ?>
          <tr >
            <th scope="col" ><a href="#">#<?php echo $index++ ?></a></th>
            <td scope="col"><?php echo $productList->customerNumber ?></td>
            <td scope="col"><?php echo $productList->customerName?></td>
            <td scope="col"><?php echo $productList->phone?></td>
            <td scope="col"><?php echo $productList->addressLine1?></td>
            <td scope="col"><?php echo $productList->city?></td>
            <td scope="col"><?php echo $productList->postalCode?></td>
            <td scope="col"><?php echo $productList->country?></td>
            <td scope="col"><?php echo $productList->salesRepEmployeeNumber?></td>
            <td scope="col"><?php echo $productList->creditLimit?></td>
            <td scope="col"><a style="text-decoration: underline;" href="<?php echo base_url() ?>ds-customer/history-payment?id=<?php echo $productList->customerNumber ?>"><?php echo $productList->countPayment ?></a> </td>
            <td scope="col">
              <a class="btn btn-success" style="font-size: smaller; margin-bottom: 5px;" href="<?php echo base_url() ?>ds-customer/edit?id=<?php echo $productList->customerNumber ?>" value="" name="edit"  >Edit</a>
              <a class="btn btn-danger" style="font-size: smaller; " href="<?php echo base_url() ?>ds-customer?delete_id=<?php echo $productList->customerNumber ?>" value="<?php echo $productList->customerNumber ?>" name="delete">Delete</a>
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
    <?php if($message == 'Delete Data Customer Successfully'): ?>
      swal("Success!", "<?php echo $message ?>", "success", {
        button: "Ok",
      });
    <?php endif ?>
    <?php if($message != 'Delete Data Customer Successfully'): ?>
      swal("Failed!", "<?php echo $message ?>", "error", {
        button: "Ok",
      });
    <?php endif ?>
  </script>
<?php endif?>