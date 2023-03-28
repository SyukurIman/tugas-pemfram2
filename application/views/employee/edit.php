<div class="pagetitle">
  <h1>Add Employee</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Employee</a></li>
      <li class="breadcrumb-item active">Add Employee</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <form action="<?php echo base_url()?>ds-employee/edit?id=<?php echo $employeeData[0]->employeeNumber ?>" method="post">
    <div class="mb-3">
      <label class="form-label" for="firstName">First Name</label>
      <input value="<?php echo $employeeData[0]->firstName ?>" required class="form-control" type="text" name="firstName" id="firstName" placeholder="First Name">
    </div>

    <div class="mb-3">
      <label class="form-label" for="lastName">Last Name</label>
      <input value="<?php echo $employeeData[0]->lastName ?>" required class="form-control" placeholder="Last Name" type="text" name="lastName" id="lastName">
    </div>

    <div class="mb-3">
      <label class="form-label" for="email">Email</label>
      <input value="<?php echo $employeeData[0]->email ?>" required class="form-control" placeholder="Email" type="text" name="email" id="email">
    </div>  

    <div class="mb-3">
      <label class="form-label" for="officeCode">Location Employee</label>
      <select required class="form-control" name="officeCode" id="officeCode">
        <option value="" selected hidden>Select Sales ID</option>
        <?php foreach($officeData as $key => $data) :?>
          <?php if($employeeData[0]->officeCode == $data->officeCode): ?>
            <option selected value="<?php echo $data->officeCode ?>"><?php echo $data->city ?></option>
          <?php endif ?>
          <?php if($employeeData[0]->officeCode != $data->officeCode): ?>
            <option value="<?php echo $data->officeCode ?>"><?php echo $data->city ?></option>
          <?php endif ?>
        <?php endforeach?>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label" for="jobTitle">Job Title</label>
      <input value="<?php echo $employeeData[0]->jobTitle ?>" required class="form-control" placeholder="Job Title" type="text" name="jobTitle" id="jobTitle">
    </div>

    <div class="mb-3">
      <button class="btn btn-primary" type="submit">Save</button>
    </div>
  </form>
</section>

<?php if (isset($message)):?>
  <script>
    <?php if($message == 'Edit Data Employee Successfully'): ?>
      swal("Success!", "<?php echo $message ?>", "success", {
        button: "Ok",
      });
    <?php endif ?>
    <?php if($message == 'Edit Data Employee error !!'): ?>
      swal("Failed!", "<?php echo $message ?>", "error", {
        button: "Ok",
      });
    <?php endif ?>
  </script>
<?php endif?>