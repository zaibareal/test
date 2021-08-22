<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <h3 class="jumbotron" style="margin-bottom: 0px;">
                ::รายละเอียดการแจ้งซ่อม::
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
                        <li class="nav-item">
                            <a class="nav-link" href="" target="_blank">คอร์สออนไลน์สอน CodeIgniter</a>
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
            <form class="form-horizontal">
                <div class="form-group row">
                    <div class="col-12 col-sm-2">
                        <label>CaseID</label>
                        <input type="number" name="id" class="form-control" value="<?= $rs_detail->id; ?>" disabled>
                    </div>
                    <div class="col-12 col-sm-4">
                        <label>Status</label>
                        <?php
                        $st = $rs_detail->case_statusID;
                        if ($st == 1) {
                            $stMsg = 'รอดำเนินการ';
                        } elseif ($st == 2) {
                            $stMsg = 'อยู่ระหว่างดำเนินการ';
                        } elseif ($st == 3) {
                            $stMsg = 'ส่งซ่อมภายนอก';
                        } elseif ($st == 4) {
                            $stMsg = 'ดำเนินการเสร็จสิ้น';
                        } else {
                            $stMsg = 'ยกเลิก';
                        }
                        ?>
                        <input type="text" style="color:red;" class="form-control" value="<?= $stMsg; ?>" disabled>
                    </div>
                </div>
                <div class="form-group  row col col-sm-7">
                    <label>ประเภทปัญหา</label>
                    <select name="case_type" class="form-control" disabled>
                        <option value="<?= $rs_detail->case_type; ?>"><?= $rs_detail->case_type; ?></option>
                    </select>
                </div>
                <div class="form-group row col col-sm-7">
                    <label>รายละเอียดปัญหา</label>
                    <textarea name="case_detail" class="form-control" disabled><?= $rs_detail->case_detail; ?></textarea>
                </div>
                <div class="form-group row col col-sm-7">
                    <label>สถานที่</label>
                    <textarea name="case_loc" class="form-control" disabled><?= $rs_detail->case_loc; ?></textarea>
                </div>
                <div class="form-group row col col-sm-5">
                    <label>ชื่อผู้แจ้ง</label>
                    <input type="text" name="p_name" class="form-control" disabled value="<?= $rs_detail->p_name; ?>">
                </div>
                <div class="form-group row col col-sm-5">
                    <label>อีเมลผู้แจ้ง</label>
                    <input type="email" name="p_email" class="form-control" disabled value="<?= $rs_detail->p_email; ?>">

                </div>
                <div class="form-group row col  col-sm-7">
                    <label>ภาพประกอบ</label>
                    <img src="<?= base_url('./asset/uploads/' . $rs_detail->p_img); ?>" width="100%">
                </div>
                <div class="form-group  col col-sm-5">
                    <br><br>
                    <a href="<?= site_url(''); ?>" class="btn btn-primary">กลับหน้าหลัก </a>
                </div>
            </form>
        </div>

    </div>
</div>