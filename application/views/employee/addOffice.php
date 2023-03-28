<div class="pagetitle">
  <h1>Add Office</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Employee</a></li>
      <li class="breadcrumb-item active">Add Office</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <form action="<?php echo base_url()?>ds-employee/add_office" method="post">
    <div class="mb-3">
      <label class="form-label" for="city">City</label>
      <input required class="form-control" type="text" name="city" id="firstName" placeholder="First Name">
    </div>

    <div class="mb-3">
      <label class="form-label" for="phone">Phone</label>
      <input required class="form-control" placeholder="phone" type="text" name="phone" id="lastName">
    </div>

    <div class="mb-3">
      <label class="form-label" for="addressLine1">Address Line1</label>
      <input required class="form-control" placeholder="addressLine1" type="text" name="addressLine1" id="email">
    </div>  

    <div class="mb-3">
      <label class="form-label" for="addressLine2">Address Line2</label>
      <input required class="form-control" placeholder="addressLine2" type="text" name="addressLine2" id="email">
    </div>

    <div class="mb-3">
      <label class="form-label" for="state">state</label>
      <input required class="form-control" placeholder="state" type="text" name="state" id="jobTitle">
    </div>

    <div class="mb-3">
      <label class="form-label" for="country">country</label>
      <input required class="form-control" placeholder="country" type="text" name="country" id="jobTitle">
    </div>

    <div class="mb-3">
      <label class="form-label" for="postalCode">postalCode</label>
      <input required class="form-control" placeholder="postalCode" type="text" name="postalCode" id="jobTitle">
    </div>

    <div class="mb-3">
      <label class="form-label" for="territory">territory</label>
      <input required class="form-control" placeholder="territory" type="text" name="territory" id="jobTitle">
    </div>

    <div class="mb-3">
      <button class="btn btn-primary" type="submit">Save</button>
    </div>
  </form>
</section>

<?php if (isset($message)):?>
  <script>
    <?php if($message == 'Insert Data Office Successfully'): ?>
      swal("Success!", "<?php echo $message ?>", "success", {
        button: "Ok",
      });
    <?php endif ?>
    <?php if($message == 'Insert Data Office error !!'): ?>
      swal("Failed!", "<?php echo $message ?>", "error", {
        button: "Ok",
      });
    <?php endif ?>
  </script>
<?php endif?>