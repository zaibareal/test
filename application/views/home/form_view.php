<div class="container">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12">
      <h3 class="jumbotron" style="margin-bottom: 0px;">
        ::Form แจ้งซ่อมฯ V 1.2::
      </h3>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col col-sm-12 col-md-12">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d6d4d0;">
        <a class="navbar-brand" href="<?= site_url(''); ?>">HelpDesk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?= site_url(''); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?= site_url('form/allcase'); ?>">ติดตามงาน</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="" target="_blank">คอร์สออนไลน์สอน CodeIgniter</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?= site_url('login'); ?>">Login</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</div>
<div class="container" style="margin-top: 50px">
  <div class="row">
    <div class="col-sm-2 col-md-2"></div>
    <div class="col col-sm-10 col-md-10">

      <form action="<?= site_url('form/adding'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group col col-md-7">
          <label>ประเภทปัญหา</label>
          <select name="case_type" class="form-control" required>

            <?php if (set_value('case_type') != '') { ?>
              <option value="<?= set_value('case_type'); ?>"><?= set_value('case_type'); ?></option>
            <?php } else {
              echo '<option value="">Choose...</option>';
            }
            ?>

            <option value="อุปกรณ์ไอที">-อุปกรณ์ไอที-</option>
            <option value="ประปา">-ประปา-</option>
            <option value="อาคาร">-อาคาร-</option>
            <option value="เครื่องใช้ไฟฟ้า">-เครื่องใช้ไฟฟ้า-</option>
          </select>
        </div>

        <div class="form-group col col-md-7">
          <label>รายละเอียดปัญหา</label>
          <textarea name="case_detail" class="form-control" required minlength="5" placeholder="*ต้องการข้อมูล"><?= set_value('case_detail'); ?></textarea>
          <span class="fr"><?= form_error('case_detail'); ?></span>
        </div>
        <div class="form-group col col-md-7">
          <label>สถานที่</label>
          <textarea name="case_loc" class="form-control" required minlength="5" placeholder="*ระบุตึก ชั้น ห้อง สถานที่ให้ครบถ้วน"><?= set_value('case_loc'); ?></textarea>
          <span class="fr"><?= form_error('case_loc'); ?></span>
        </div>
        <div class="form-group col col-md-5">
          <label>ชื่อผู้แจ้ง</label>
          <input type="text" name="p_name" class="form-control" required minlength="3" placeholder="*ต้องการข้อมูล" value="<?= set_value('p_name'); ?>">
          <span class="fr"><?= form_error('p_name'); ?></span>
        </div>
        <div class="form-group col col-md-5">
          <label>อีเมลผู้แจ้ง</label>
          <input type="email" name="p_email" class="form-control" required placeholder="*ต้องการข้อมูล" value="<?= set_value('p_email'); ?>">
          <span class="fr"><?= form_error('p_email'); ?></span>
        </div>
        <div class="form-group col  col-md-5">
          <label>ภาพประกอบ (บังคับ)</label>
          <input type="file" name="p_img" class="form-control" accept="image/*" required>
          <span class="fr"><?= $error; ?></span>
        </div>
        <div class="form-group col col-md-5">
          <button type="submit" class="btn btn-primary" style="width: 100%">แจ้งซ่อม</button>
        </div>
      </form>
    </div>
  </div>
</div>