<div class="pagetitle">
  <h1>Add Employee</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url()?>ds-employee">Employee</a></li>
      <li class="breadcrumb-item active">Add Employee</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <form action="<?php echo base_url()?>ds-employee/add" method="post">
    <div class="mb-3">
      <label class="form-label" for="firstName">First Name</label>
      <input required class="form-control" type="text" name="firstName" id="firstName" placeholder="First Name">
    </div>

    <div class="mb-3">
      <label class="form-label" for="lastName">Last Name</label>
      <input required class="form-control" placeholder="Last Name" type="text" name="lastName" id="lastName">
    </div>

    <div class="mb-3">
      <label class="form-label" for="email">Email</label>
      <input required class="form-control" placeholder="Email" type="text" name="email" id="email">
    </div>  

    <div class="mb-3">
      <label class="form-label" for="officeCode">Location Employee</label>
      <select required class="form-control" name="officeCode" id="officeCode">
        <option value="" selected hidden>Select Sales ID</option>
        <?php foreach($officeData as $key => $data) :?>
          <option value="<?php echo $data->officeCode ?>"><?php echo $data->city ?></option>
        <?php endforeach?>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label" for="jobTitle">Job Title</label>
      <input required class="form-control" placeholder="Job Title" type="text" name="jobTitle" id="jobTitle">
    </div>

    <div class="mb-3">
      <button class="btn btn-primary" type="submit">Save</button>
    </div>
  </form>
</section>

<?php if (isset($message)):?>
  <script>
    <?php if($message == 'Insert Data Employee Successfully'): ?>
      swal("Success!", "<?php echo $message ?>", "success", {
        button: "Ok",
      });
    <?php endif ?>
    <?php if($message == 'Insert Data Employee error !!'): ?>
      swal("Failed!", "<?php echo $message ?>", "error", {
        button: "Ok",
      });
    <?php endif ?>
  </script>
<?php endif?>