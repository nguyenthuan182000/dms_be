<?php $pageTitle='Kho lưu trữ biên bản họp'; ?>
<?php require_once($template_path.'header/header-master.php'); ?>
<!--index page start-->
<div class="pageWithSidebar">
    <?php require_once($template_path.'sidebar/sidebarHopGiaoBan/sidebarLeft.php'); ?>
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Kho lưu trữ Biên bản họp
                        </h5>
                        <div class="mainSection_card">
                            <div class="mainSection_content">
                                <div class="me-5" style="flex:1">Đơn vị: </div>
                                <div class="d-flex justify-content-start" style="flex:2"><strong>{{Session::get('department_name')}}</strong></div>
                            </div>
                            <div class="mainSection_content">
                                <div class="me-3">Trưởng đơn vị: </div>
                                <div class="d-flex justify-content-start"><strong>{{Session::get('user')['name']}}</strong></div>
                            </div>
                        </div>
                        <div id="mainSection_width" class="mainSection_thismonth d-flex align-items-center overflow-hidden">
                            <input id="thismonth" value="<?php echo date('H:i - d/m/Y'); ?>" class="form-control" type="text" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-title">Bảng lưu trữ biên bản họp</div>
                                    </div>
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="table-responsive dataTables_wrapper style_table-4">
                                                <table id="khoLuuTruBienBanHop" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>STT</th>
                                                            <th>Phân loại</th>
                                                            <th>Ngày cập nhật</th>
                                                            <th>Nội dung ( tiêu đề biên bản họp )</th>
                                                            <th>Xem biên bản họp</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">6</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">7</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">8</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">9</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">10</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">11</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">12</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">13</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">14</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">15</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">16</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">17</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">18</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi tiết</u></a>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('template.footer.footer')
        </div>
    </div>
    <?php require_once($template_path.'sidebar/sidebarHopGiaoBan/sidebarRight.php'); ?>
</div>

<!--end index page-->
<?php require_once($template_path.'footer/footer-hopGiaoBan.php'); ?>
