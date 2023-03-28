<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo base_url() ?>dashboard">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
  
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?php echo base_url() ?>ds-product/addProductLine">
          <i class="bi bi-circle"></i><span>Add Product Line</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url() ?>ds-product/add">
          <i class="bi bi-circle"></i><span>Add Product</span>
        </a>
      </li>
      <li>
        <a class="nav-link collapsed" href="<?php echo base_url() ?>ds-product">
          <i class="bi bi-circle"></i><span>Data Product</span>
        </a>
      </li>
    </ul>
  </li><!-- End Product Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Customers</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?php echo base_url() ?>ds-customer/add">
          <i class="bi bi-circle"></i><span>Add New Customer</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url() ?>ds-customer">
          <i class="bi bi-circle"></i><span>Data Customer</span>
        </a>
      </li>
    </ul>
  </li>
  <!-- End Customers Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#employee-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-person-lines-fill"></i><span>Employee</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="employee-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?php echo base_url() ?>ds-employee/add_office">
          <i class="bi bi-circle"></i><span>Add Office</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url() ?>ds-employee/add">
          <i class="bi bi-circle"></i><span>Add Employee</span>
        </a>
      </li>
      <li>
        <a class="nav-link collapsed" href="<?php echo base_url() ?>ds-employee">
          <i class="bi bi-circle"></i><span>Data Employee</span>
        </a>
      </li>
    </ul>
  </li><!-- End Employee Nav -->

  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo base_url() ?>profile">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-faq.html">
      <i class="bi bi-question-circle"></i>
      <span>F.A.Q</span>
    </a>
  </li><!-- End F.A.Q Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-contact.html">
      <i class="bi bi-envelope"></i>
      <span>Contact</span>
    </a>
  </li><!-- End Contact Page Nav -->

</ul>