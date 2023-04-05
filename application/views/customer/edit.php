<div class="pagetitle">
  <h1>Edit Customer</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url()?>ds-customer">Customer</a></li>
      <li class="breadcrumb-item active">Edit Customer</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <form action="<?php echo base_url()?>ds-customer/edit?id=<?php echo $M_Customer[0]->customerNumber ?>" method="post">
  <div class="mb-3">
    <label class="form-label" for="customerName">Customer Name</label>
    <input value="<?php echo $M_Customer[0]->customerName ?>" required class="form-control" type="text" name="customerName" id="Product Name" placeholder="Customer Name">
  </div>

  <div class="mb-3">
    <label class="form-label" for="phone">Phone Number</label>
    <input value="<?php echo $M_Customer[0]->phone ?>" required class="form-control" placeholder="Phone Number" type="number_format" name="phone" id="phone">
  </div>

  <div class="mb-3">
    <label class="form-label" for="addressLine1">Address</label>
    <input value="<?php echo $M_Customer[0]->addressLine1 ?>" required class="form-control" placeholder="Address" type="text" name="addressLine1" id="addressLine1">
  </div>

  <div class="mb-3">
    <label class="form-label" for="city">City</label>
    <input value="<?php echo $M_Customer[0]->city ?>" required class="form-control" placeholder="City" type="text" name="city" id="city">
  </div>

  <div class="mb-3">
    <label class="form-label" for="postalCode">Postal Code</label>
    <input value="<?php echo $M_Customer[0]->postalCode ?>" required class="form-control" placeholder="Postal Code" type="number" name="postalCode" id="postalCode">
  </div>

  <div class="mb-3">
    <label class="form-label" for="country">Country</label>
    <input value="<?php echo $M_Customer[0]->country ?>" required class="form-control" placeholder="Country" type="text" name="country" id="country">
  </div>

  <div class="mb-3">
    <label class="form-label" for="salesRepEmployeeNumber">Sales ID</label>
    <select required class="form-control" name="salesRepEmployeeNumber" id="salesRepEmployeeNumber">
      <option value="" selected hidden>Select Sales ID</option>
      <?php foreach($M_Employees as $key => $employ) :?>
        <?php if($M_Customer[0]->salesRepEmployeeNumber == $employ->employeeNumber):?>
          <option selected value="<?php echo $employ->employeeNumber ?>"><?php echo $employ->firstName ?></option>
        <?PHP endif ?>
        <?php if($M_Customer[0]->salesRepEmployeeNumber != $employ->employeeNumber):?>
          <option value="<?php echo $employ->employeeNumber ?>"><?php echo $employ->firstName ?></option>
        <?PHP endif ?>
      <?php endforeach?>
    </select>
  </div>

  <div class="mb-3">
    <label class="form-label" for="creditLimit">Credit Limit</label>
    <input value="<?php echo $M_Customer[0]->creditLimit ?>" required class="form-control" placeholder="Credit Limit" type="number" name="creditLimit" id="creditLimit">
  </div>

  <div class="mb-3">
    <button class="btn btn-primary" type="submit">Save</button>
    <a class="btn btn-secondary"  href="<?php echo base_url() ?>ds-customer">Cancel</a>
  </div>
  </form>
</section>

<?php if (isset($message)):?>
  <script>
    <?php if($message == 'Update Data customer Successfully'): ?>
      swal("Success!", "<?php echo $message ?>", "success", {
        button: "Ok",
      });
    <?php endif ?>
    <?php if($message == 'Update Data Customer error !!'): ?>
      swal("Failed!", "<?php echo $message ?>", "error", {
        button: "Ok",
      });
    <?php endif ?>
  </script>
<?php endif?>
