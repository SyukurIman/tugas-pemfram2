<div class="pagetitle">
  <h1>Add Customer</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url()?>ds-customer">Customer</a></li>
      <li class="breadcrumb-item active">Add Customer</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <form action="<?php echo base_url()?>ds-customer/add" method="post">
    <div class="mb-3">
      <label class="form-label" for="customerName">Customer Name</label>
      <input required class="form-control" type="text" name="customerName" id="Product Name" placeholder="Customer Name">
    </div>

    <div class="mb-3">
      <label class="form-label" for="phone">Phone Number</label>
      <input required class="form-control" placeholder="Phone Number" type="number" name="phone" id="phone">
    </div>

    <div class="mb-3">
      <label class="form-label" for="addressLine1">Address</label>
      <input required class="form-control" placeholder="Address" type="text" name="addressLine1" id="addressLine1">
    </div>

    <div class="mb-3">
      <label class="form-label" for="city">City</label>
      <input required class="form-control" placeholder="City" type="text" name="city" id="city">
    </div>

    <div class="mb-3">
      <label class="form-label" for="postalCode">Postal Code</label>
      <input required class="form-control" placeholder="Postal Code" type="number" name="postalCode" id="postalCode">
    </div>

    <div class="mb-3">
      <label class="form-label" for="country">Country</label>
      <input required class="form-control" placeholder="Country" type="text" name="country" id="country">
    </div>

    <div class="mb-3">
      <label class="form-label" for="salesRepEmployeeNumber">Sales ID</label>
      <select required class="form-control" name="salesRepEmployeeNumber" id="salesRepEmployeeNumber">
        <option value="" selected hidden>Select Sales ID</option>
        <?php foreach($M_Employees as $key => $employ) :?>
          <option value="<?php echo $employ->employeeNumber ?>"><?php echo $employ->firstName ?></option>
        <?php endforeach?>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label" for="creditLimit">Credit Limit</label>
      <input required class="form-control" placeholder="Credit Limit" type="number" name="creditLimit" id="creditLimit">
    </div>

    <div class="mb-3">
      <button class="btn btn-primary" type="submit">Save</button>
    </div>
  </form>
</section>

<?php if (isset($message)):?>
  <script>
    <?php if($message == 'Insert Data Customer Successfully'): ?>
      swal("Success!", "<?php echo $message ?>", "success", {
        button: "Ok",
      });
    <?php endif ?>
    <?php if($message == 'Insert Data Customer error !!'): ?>
      swal("Failed!", "<?php echo $message ?>", "error", {
        button: "Ok",
      });
    <?php endif ?>
  </script>
<?php endif?>