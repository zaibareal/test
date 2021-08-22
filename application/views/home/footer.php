  <!--start  footer -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12">
        <p align="center" class="myfooter"> helpdesk system by devbanban.com @2020 <br>
          Using CodeIgniter Framework </p>
        <p align="center">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
      </div>
    </div>
  </div>
  <!--end  footer -->


  </body>

  </html>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="<?php echo base_url(); ?>asset/bt4/js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/bt4/js/bootstrap.min.js"></script>


  <script type="text/javascript">
    <?php if ($this->session->flashdata('save_success')) : ?>
      swal("", "บันทึกข้อมูลเรียบร้อยแล้ว", "success");
    <?php endif; ?>
    <?php if ($this->session->flashdata('login_error')) : ?>
      swal("", "Username or Password ไม่ถูกต้อง !!", "warning");
    <?php endif; ?>
    <?php if ($this->session->flashdata('logout_success')) : ?>
      swal("", "คุณออกจากระบบเรียบร้อยแล้ว", "success");
    <?php endif; ?>
  </script>