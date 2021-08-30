<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Report
        </h1>
    </section>
    <!-- Top menu -->
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box">
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php
                            $data_case_type = array();
                            //chart data format
                            foreach ($queryreport as $k) {
                                $data_case_type[] = "['" . $k->case_type . "'" . ", " . $k->casetotal . "]";
                            }
                            //cut last commar
                            $data_case_type = implode(",", $data_case_type);
                            ?>
                            <script type="text/javascript">
                                google.charts.load('current', {
                                    'packages': ['corechart']
                                });
                                google.charts.setOnLoadCallback(drawChart);

                                function drawChart() {
                                    var data = google.visualization.arrayToDataTable([
                                        ['Task', 'จำนวนงานแยกตามประเภท'],
                                        <?php echo $data_case_type; ?>
                                    ]);
                                    var options = {
                                        title: 'จำนวนงานแยกตามประเภท',
                                        seriesType: 'bars',

                                    };
                                    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                                    chart.draw(data, options);
                                }
                            </script>

                            <div id="chart_div" style="width: 100%; height: 100%;"></div>

                            <h3>::จำนวนงานแยกตามประเภท::</h3>
                            <table class="table table-bordered table-striped" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row" class="info">
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">#</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 75%;">ประเภทงานซ่อม</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">จำนวน</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">view</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($queryreport as $rsr) { ?>
                                        <tr role="row">
                                            <td align="center">#</td>
                                            <td><?= $rsr->case_type; ?></td>
                                            <td align="center"><?= $rsr->casetotal; ?></td>
                                            <td align="center"><a href="<?php echo site_url('jobs/bycasetype/'); ?>?case_type=<?php echo $rsr->case_type; ?>" class="btn btn-info btn-xs" target="_blank"> view </a></td>
                                        </tr>
                                    <?php  } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            //echo $query;
                            $case_statusID = array();
                            foreach ($querystatus as $s) {

                                //status name
                                if ($s->case_statusID == 1) {
                                    $statusname = 'รอดำเนินการ';
                                } elseif ($s->case_statusID == 2) {
                                    $statusname = 'กำลังดำเนินการ';
                                } elseif ($s->case_statusID == 3) {
                                    $statusname = 'เสร็จสิ้น';
                                } else {
                                    $statusname = 'ยกเลิก';
                                }

                                //chart data format
                                $case_statusID[] = "['" . $statusname . "'" . ", " . $s->statustotal . "]";
                            }
                            //cut last commar
                            $case_statusID = implode(",", $case_statusID);
                            ?>
                            <script type="text/javascript">
                                google.charts.load('current', {
                                    'packages': ['corechart']
                                });
                                google.charts.setOnLoadCallback(drawChart);

                                function drawChart() {
                                    var data = google.visualization.arrayToDataTable([
                                        ['Task', 'จำนวนงานแยกตามสถานะ'],
                                        <?php echo $case_statusID; ?>
                                    ]);
                                    var options = {
                                        title: 'จำนวนงานแยกตามสถานะ',
                                        seriesType: 'bars',

                                    };
                                    var chart = new google.visualization.ComboChart(document.getElementById('chart_div2'));
                                    chart.draw(data, options);
                                }
                            </script>

                            <div id="chart_div2" style="width: 100%; height: 100%;"></div>

                            <h3>::จำนวนงานแยกตามสถานะ::</h3>
                            <table class="table table-bordered table-striped" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row" class="danger">
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">#</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 75%;">ประเภทงานซ่อม</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">จำนวน</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">view</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($querystatus as $rss) { ?>
                                        <tr role="row">
                                            <td align="center">#</td>
                                            <td>
                                                <?php
                                                if ($rss->case_statusID == 1) {
                                                    echo 'รอดำเนินการ';
                                                    $case_statusID = 'รอดำเนินการ';
                                                } elseif ($rss->case_statusID == 2) {
                                                    echo 'กำลังดำเนินการ';
                                                    $case_statusID = 'กำลังดำเนินการ';
                                                } elseif ($rss->case_statusID == 3) {
                                                    echo 'เสร็จสิ้น';
                                                    $case_statusID = 'เสร็จสิ้น';
                                                } else {
                                                    echo 'ยกเลิก';
                                                    $case_statusID = 'ยกเลิก';
                                                }
                                                ?>
                                            </td>
                                            <td align="center"><?= $rss->statustotal; ?></td>
                                            <td align="center"><a href="<?php echo site_url('jobs/bystatus/' . $rss->case_statusID) ?>?status=<?php echo $case_statusID; ?>" class="btn btn-info btn-xs"> view </a></td>
                                        </tr>
                                    <?php  } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p> * view ให้ไปต่อยอดเอาเองนะครับ ดูตัวอย่างจากหน้าแสดงงานตามสถานะ (Controller/Jobs) </p>
                </div>
            </div><!-- /.box-body -->
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->