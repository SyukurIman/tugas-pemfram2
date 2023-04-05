<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url()?>ds-employee">Employee</a></li>
      <li class="breadcrumb-item active">Office</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section card dashboard">
  <div class="card-body">
    <h5 class="card-title">Data Office</h5>
    <div class="w-100 overflow-scroll">
      <table class="table table-borderless datatable align-middle" style="width: 100%; min-width: none;">
        <thead class="table-light align-middle">
          <tr>
            <th scope="col">#</th>
            <th scope="col">state</th>
            <th scope="col">city</th>
            <th scope="col">phone</th>
            <th scope="col">addressLine1</th>
            <th scope="col">addressLine2 </th>
            <th scope="col">country</th>
            <th scope="col">postalCode</th>
            <th scope="col">territory</th>
          </tr>
        </thead>
        <tbody>
          <?php $index = 1;?>
          <?php foreach ($data as $key => $dataList) : ?>
          <tr >
            <th scope="col" ><a href="#">#<?php echo $index++ ?></a></th>
            <td scope="col"><?php echo $dataList->state ?></td>
            <td scope="col"><?php echo $dataList->city?></td>
            <td scope="col"><?php echo $dataList->phone?></td>
            <td scope="col"><?php echo $dataList->addressLine1?></td>
            <td scope="col"><?php echo $dataList->addressLine2?></td>
            <td scope="col"><?php echo $dataList->country?></td>
            <td scope="col"><?php echo $dataList->postalCode?></td>
            <td scope="col"><?php echo $dataList->territory?></td>
            <td scope="col">
              <a class="btn btn-success" style="font-size: smaller; margin-bottom: 5px;" href="<?php echo base_url() ?>ds-employee/office_edit?id=<?php echo $dataList->officeCode ?>" value="" name="edit">Edit</a>
              <a class="btn btn-danger" style="font-size: smaller; " href="<?php echo base_url() ?>ds-employee/office?delete_id=<?php echo $dataList->officeCode ?>" value="<?php echo $dataList->officeCode ?>" name="delete">Delete</a>
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