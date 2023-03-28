<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Employee</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section card dashboard">
  <div class="card-body">
    <h5 class="card-title">Data Employee</h5>
    <div class="w-100 overflow-scroll">
      <table class="table table-borderless datatable align-middle" style="width: 100%; min-width: none;">
        <thead class="table-light align-middle">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Employee Number</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Location Office</th>
            <th scope="col">Job Title</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $index = 1;?>
          <?php foreach ($data as $key => $dataList) : ?>
          <tr >
            <th scope="col" ><a href="#">#<?php echo $index++ ?></a></th>
            <td scope="col"><?php echo $dataList->employeeNumber ?></td>
            <td scope="col"><?php echo $dataList->firstName?></td>
            <td scope="col"><?php echo $dataList->lastName?></td>
            <td scope="col"><?php echo $dataList->email?></td>
            <td scope="col"><?php echo $dataList->locationEmployee?></td>
            <td scope="col"><?php echo $dataList->jobTitle?></td>
            <td scope="col">
              <a class="btn btn-success" style="font-size: smaller; margin-bottom: 5px;" href="<?php echo base_url() ?>ds-employee/edit?id=<?php echo $dataList->employeeNumber ?>" value="" name="edit">Edit</a>
              <a class="btn btn-danger" style="font-size: smaller; " href="<?php echo base_url() ?>ds-employee?delete_id=<?php echo $dataList->employeeNumber ?>" value="<?php echo $dataList->employeeNumber ?>" name="delete">Delete</a>
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
    <?php if($message == 'Delete Data Employee Successfully'): ?>
      swal("Success!", "<?php echo $message ?>", "success", {
        button: "Ok",
      });
    <?php endif ?>
    <?php if($message != 'Delete Data Employee Successfully'): ?>
      swal("Failed!", "<?php echo $message ?>", "error", {
        button: "Ok",
      });
    <?php endif ?>
  </script>
<?php endif?>