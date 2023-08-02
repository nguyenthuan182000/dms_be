@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Kỹ Năng Nghiệp Vụ')

@section('header-style')
    <link rel="stylesheet" href="{{ asset('assets/plugins/jquery-treeSelect/cbtree.css') }}">
@endsection

@section('content')
    @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Kỹ Năng Nghiệp Vụ
                        </h5>
                        @include('template.components.sectionCard')
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table id="dsDinhMuc" class="table table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-nowrap text-center">STT</th>
                                                            <th class="text-nowrap">Tên kỹ năng nghiệp vụ</th>
                                                            <th class="text-nowrap">Mô tả/Diễn giải</th>
                                                            <th class="text-nowrap">Vị trí công việc</th>
                                                            <th class="text-nowrap">Cấp nhân sự</th>
                                                            <th class="text-nowrap"></th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody data-repeater-list="group-a">
                                                            <tr data-repeater-item>
                                                                <td>
                                                                    <div class="d-flex align-items-center justify-content-center">
                                                                        1
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title=""> Kỹ năng mềm</div>
                                                                </td>
                                                                <td>
                                                                    <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                                        Kỹ năng mềm hay còn gọi là Kỹ năng thực hành xã hội là thuật ngữ liên quan đến trí tuệ xúc cảm dùng để chỉ các kỹ năng quan trọng trong cuộc sống con người như: kỹ năng sống, giao tiếp, lãnh đạo, làm việc theo nhóm, kỹ năng quản lý thời gian, thư giãn, vượt qua khủng hoảng, sáng tạo và đổi mới
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                                        Trợ lý Marketing
                                                                    </div>

                                                                </td>
                                                                <td>
                                                                    <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                                        Nhân viên
                                                                    </div>
                                                                </td>

                                                                
                                                                <td>
                                                                    <div class="dotdotdot" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></div>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suaMoiDinhMuc">
                                                                                    <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                                                                    Sửa
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#xoaThuocTinh" data-repeater-delete>
                                                                                    <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" />
                                                                                    Xóa
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr data-repeater-item>
                                                                <td>
                                                                    <div class="d-flex align-items-center justify-content-center">
                                                                        1
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title=""> Kỹ năng mềm</div>
                                                                </td>
                                                                <td>
                                                                    <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                                        Kỹ năng mềm hay còn gọi là Kỹ năng thực hành xã hội là thuật ngữ liên quan đến trí tuệ xúc cảm dùng để chỉ các kỹ năng quan trọng trong cuộc sống con người như: kỹ năng sống, giao tiếp, lãnh đạo, làm việc theo nhóm, kỹ năng quản lý thời gian, thư giãn, vượt qua khủng hoảng, sáng tạo và đổi mới
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                                        Trợ lý Marketing
                                                                    </div>

                                                                </td>
                                                                <td>
                                                                    <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                                        Nhân viên
                                                                    </div>
                                                                </td>

                                                                
                                                                <td>
                                                                    <div class="dotdotdot" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></div>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suaMoiDinhMuc">
                                                                                    <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                                                                    Sửa
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#xoaThuocTinh" data-repeater-delete>
                                                                                    <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" />
                                                                                    Xóa
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr data-repeater-item>
                                                                <td>
                                                                    <div class="d-flex align-items-center justify-content-center">
                                                                        1
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title=""> Kỹ năng mềm</div>
                                                                </td>
                                                                <td>
                                                                    <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                                        Kỹ năng mềm hay còn gọi là Kỹ năng thực hành xã hội là thuật ngữ liên quan đến trí tuệ xúc cảm dùng để chỉ các kỹ năng quan trọng trong cuộc sống con người như: kỹ năng sống, giao tiếp, lãnh đạo, làm việc theo nhóm, kỹ năng quản lý thời gian, thư giãn, vượt qua khủng hoảng, sáng tạo và đổi mới
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                                        Trợ lý Marketing
                                                                    </div>

                                                                </td>
                                                                <td>
                                                                    <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                                        Nhân viên
                                                                    </div>
                                                                </td>

                                                                
                                                                <td>
                                                                    <div class="dotdotdot" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></div>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suaMoiDinhMuc">
                                                                                    <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                                                                    Sửa
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#xoaThuocTinh" data-repeater-delete>
                                                                                    <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" />
                                                                                    Xóa
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <!-- Modal Sửa Định Mức -->
                                                            <div class="modal fade" id="suaMoiDinhMuc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header text-center">
                                                                            <h5 class="modal-title w-100" id="exampleModalLabel">Sửa kỹ năng nghiệp vụ
                                                                            </h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <form action="" method="POST">
                                                                            @method('PUT')
                                                                            @csrf
                                                                            <div class="modal-body">

                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <input class="form-control" type="text"  name="name" data-bs-toggle="tooltip" data-bs-placement="top" title="Tên định mức" placeholder="Nhập tên định mức">
                                                                                    </div>
                                                                                    <div class="col-sm-12 mt-3">
                                                                                        <div class="mb-3">
                                                                                            <textarea class="form-control" name="description" data-bs-toggle="tooltip" data-bs-placement="top" title="Mô tả thực hiện" placeholder="Nhập mô tả thực hiện"></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <div class="mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Đơn vị phụ trách">

                                                                                            <select class="selectpicker" data-dropup-auto="false" name="departement_id" title="Đơn vị phụ trách" data-width="100%" data-live-search="true" data-live-search-placeholder="Tìm kiếm..." data-size="5">
                                                                                                
                                                                                                <option selected>1</option>
                                                                                                <option selected>1</option>
                                                                                                <option selected>1</option>
                                                                                                <option selected>1</option>
                                                                                                <option selected>1</option>
                                                                                                    
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="col-sm-6">
                                                                                        <div class="mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Vị trí phụ trách">
                                                                                            <select class="selectpicker" data-dropup-auto="false" name="position_id" title="Vị trí phụ trách" data-live-search="true" data-live-search-placeholder="Tìm kiếm..." data-size="5">
                                                                                                
                                                                                                <option  selected>1</option>
                                                                                                <option  selected>1</option>
                                                                                                <option  selected>1</option>
                                                                                                <option  selected>1</option>
                                                                                                <option  selected>1</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <div class="mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Manday">
                                                                                            <input class="form-control" type="number" name="manday" min="0" step="0.05" placeholder="Nhập Manday">
                                                                                        </div>
                                                                                    </div>


                                                                                </div>


                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                                                                                <button type="submit" class="btn btn-danger">Lưu</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- Xóa đinh mức --}}
                                                            <div class="modal fade" id="xoaThuocTinh" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title text-danger" id="exampleModalLabel">Xóa kỹ năng nghiệp vụ</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Bạn có thực sự muốn xoá kỹ năng nghiệp vụ này
                                                                            không?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                                                                            <form action="" method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit" class="btn btn-danger" id="deleteRowElement">Có, tôi muốn
                                                                                    xóa</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
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
    @include('template.sidebar.sidebarHopGiaoBan.sidebarRight')

    <!-- Modal Phản Hồi Vấn Đề -->
    <div class="modal fade" id="phanHoiVanDe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width:700px;">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Phản hồi vấn đề tồn đọng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 row">
                        <div class="col-sm-12 d-flex align-items-center">
                            <label for="staticEmail" class="col-form-label" style="padding-right:6px;">Vấn đề tồn đọng
                            </label>
                            <div class="w-100" style="flex:1;overflow:hidden">
                                <div contenteditable="true" readonly class="contenteditable" placeholder="Chưa hoàn thành báo cáo do abc chưa gửi thông"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-4 d-flex  align-items-center">
                            <label for="inputPassword" class="col-form-label" style="padding-right:18px;">Cấp giải
                                quyết</label>
                            <div class="w-100" style="flex:1">
                                <select class="form-select" aria-label="Default select example">
                                    <option value="2">Phòng ban</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex  align-items-center">
                            <label for="inputPassword" class="col-form-label" style="padding-right:6px;">Thời hạn</label>
                            <div class="w-100" style="flex:1">
                                <input id="datetimepicker3" readonly value="<?php echo date('d/m/Y'); ?>" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-5 d-flex  align-items-center">
                            <label for="inputPassword" class="col-form-label" style="padding-right:6px;">Trạng
                                thái</label>
                            <div class="w-100" style="flex:1">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected hidden>Chọn trạng thái</option>
                                    <option>Đã có hướng giải quyết</option>
                                    <option>Đã giải quyết</option>
                                    <option>Không thể giải quyết</option>
                                    <option>Không xác định được nguyên nhân</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-12 d-flex  align-items-center">
                            <label for="inputPassword" class="col-form-label" style="padding-right:10px;border-radius:4px">Phản hồi vấn đề</label>
                            <div class="w-100" style="flex:1;overflow:hidden">
                                <div contenteditable="true" class="contenteditable" placeholder="Vui lòng phản hồi vấn đề tại đây"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger">Gửi</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal Thêm Định Mức -->
    <div class="modal fade" id="themMoiDinhMuc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Thêm kỹ năng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <input class="form-control" required type="text" required placeholder="Tên đầu việc *" name="name">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <select class="selectpicker" data-dropup-auto="false" required title="Thuộc nhóm việc" name="" data-width="100%" data-live-search="true" data-live-search-placeholder="Tìm kiếm..." data-size="5">
                                        <option>1</option>
                                        <option>1</option>
                                        <option>1</option>
                                        <option>1</option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Mô tả/Diễn giải" name="description"></textarea>
                                </div>
                            </div>
                            {{-- <div class="col-sm-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control comboTreeInputBox" name="description"
                                        id="thuocDonVi" placeholder="Đơn vị phụ trách *">
                                </div>
                            </div> --}}

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <select class="selectpicker" data-dropup-auto="false" required title="Phòng ban phụ trách *" name="departement_id" data-width="100%" data-live-search="true" data-live-search-placeholder="Tìm kiếm..." data-size="5">
                                        
                                        <option value="">1</option>
                                        <option value="">1</option>
                                        <option value="">1</option>
                                        <option value="">1</option>
                                        <option value="">1</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <select class="selectpicker" data-dropup-auto="false" required title="Vị trí phụ trách *" name="position_id" data-width="100%" data-live-search="true" data-live-search-placeholder="Tìm kiếm..." data-size="5">
                                            <option >1</option>
                                            <option >1</option>
                                            <option >1</option>
                                            <option >1</option>
                                            <option >1</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <input class="form-control" required type="number" min="0" step="0.05" oninput="onInput(this)" placeholder="Thời lượng manday *" name="manday">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="mb-3">
                                    <select class="selectpicker" data-dropup-auto="false" title="Chọn chỉ số key" data-live-search="true" data-size="5" name="">
                                        
                                        <option >1</option>
                                        <option >1</option>
                                        <option >1</option>
                                        <option >1</option>
                                        <option >1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <select id="onChangeDonVi" class="selectpicker" data-dropup-auto="false" title="Chọn đơn vị tính" name="unit_id" data-live-search="true" data-size="5">
                                        
                                        <option >1</option>
                                        <option >1</option>
                                        <option >1</option>
                                        <option >1</option>
                                        <option >1</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-danger">Lưu</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Modal Thêm Đơn vị -->
    <div class="modal fade" id="themDonVi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Thêm Đơn vị</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12 mb-3">
                                <input class="form-control" type="text" placeholder="Nhập tên đơn vị" name="name">
                            </div>

                            <div class="col-sm-12">
                                <textarea class="form-control" placeholder="Nhập mô tả đơn vị" name="description"></textarea>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#themMoiDinhMuc">Hủy</button>
                        <button type="submit" class="btn btn-danger">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('footer-script')
    <!-- ChartJS -->
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0.js') }}"></script>

    <script src="{{ asset('assets/plugins/jquery-datetimepicker/custom-datetimepicker.js') }}"></script>

    <script src="{{ asset('/assets/js/chart_hopgiaoban/doughnutChiSo.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-treeSelect/cbtree.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        var data = [{
            id: 0,
            title: 'Công ty Cổ phần Mastertran',
            subs: [{
                    id: 00,
                    title: 'Khối Kinh doanh',
                    subs: [{
                        id: 000,
                        title: 'Kênh OTC',
                        subs: [{
                            id: 0000,
                            title: 'Vùng 1: Hà Nội và Tây Bắc'
                        }, {
                            id: 0001,
                            title: 'Vùng 2: Duyên Hải + Đông Bắc'
                        }, {
                            id: 0002,
                            title: 'Vùng 3: Miền Trung'
                        }, {
                            id: 0003,
                            title: 'Vùng 4: Tây Nguyên'
                        }, {
                            id: 0004,
                            title: 'Vùng 5: HCM và Miền Đông'
                        }, {
                            id: 0005,
                            title: 'Vùng 6: Miền Tây'
                        }]
                    }, {
                        id: 001,
                        title: 'Kênh ETC',
                        subs: [{
                            id: 0010,
                            title: 'ETC miền Bắc'
                        }, {
                            id: 0011,
                            title: 'ETC miền Trung'
                        }, {
                            id: 0012,
                            title: 'ETC miền Nam'
                        }]
                    }, {
                        id: 002,
                        title: 'Kênh MT',
                        subs: [{
                            id: 0020,
                            title: 'MT miền Bắc'
                        }, {
                            id: 0021,
                            title: 'MT miền Trung'
                        }, {
                            id: 0022,
                            title: 'MT miền Nam'
                        }]
                    }, {
                        id: 003,
                        title: 'Kênh online',
                        subs: [{
                            id: 0030,
                            title: 'Đại lý online'
                        }, {
                            id: 0031,
                            title: 'Bán lẻ online'
                        }]
                    }, {
                        id: 004,
                        title: 'Kênh TMĐT'
                    }]

                },
                {
                    id: 01,
                    title: 'Khối Marketing',
                    subs: [{
                        id: 010,
                        title: 'Quản tri Nhãn & Đào tạo'
                    }, {
                        id: 011,
                        title: 'Digital Marketing'
                    }, {
                        id: 012,
                        title: 'Trade Marketing'
                    }, {
                        id: 013,
                        title: 'Truyền thông & Sáng tạo nội dung'
                    }]
                },
                {
                    id: 02,
                    title: 'Khối văn phòng',
                    subs: [{
                        id: 020,
                        title: 'Kế toán'
                    }, {
                        id: 021,
                        title: 'Tài chính'
                    }, {
                        id: 022,
                        title: 'Hành chính nhân sự',
                        subs: [{
                            id: 0220,
                            title: 'Hành chính'
                        }, {
                            id: 0221,
                            title: 'Nhân sự'
                        }, {
                            id: 0222,
                            title: 'Công nghệ thông tin (IT)'
                        }]
                    }, {
                        id: 023,
                        title: 'Dịch vụ bán hàng'
                    }, {
                        id: 024,
                        title: 'Cung ứng/Mua hàng'
                    }, {
                        id: 025,
                        title: 'Kho & giao vận',
                        subs: [{
                            id: 0250,
                            title: 'Kho'
                        }, {
                            id: 0251,
                            title: 'Giao vận'
                        }]
                    }]
                }
            ]

        }];

        var comboTree1, comboTree2

        $(document).ready(function($) {
            comboTree1 = $('#thuocDonVi').comboTree({
                source: data,
                isMultiple: false,
                cascadeSelect: true
            });

            comboTree2 = $('#filter_thuocDonVi').comboTree({
                source: data,
                isMultiple: false,
                cascadeSelect: true
            });
            console.log(comboTree1);


        });
    </script>

    <script>
        const targetTable = $('#dsDinhMuc').DataTable({
            paging: true,
            ordering: true,
            order: [
                [0, 'desc']
            ],
            pageLength: 20,
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ bản ghi',
                infoEmpty: 'Hiện tại chưa có bản ghi nào',
                search: 'Tìm kiếm biên bản',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchPlaceholder: 'Tìm kiếm kỹ năng ...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: "_MENU_ bản ghi trên trang",
            },
            dom: '<"d-flex justify-content-between mb-3"<"action_wrapper"><"d-flex align-items-center"f<"card-title-wrapper">>>rt<"dataTables_bottom"i<"d-flex align-items-center justify-content-between"lp>>',
        });
        $('div.action_wrapper').html(`
        <div class="action_wrapper d-flex">
            <div class="action_export">
                <select class="selectpicker" data-dropup-auto="false" title="Đơn vị phụ trách " data-actions-box="true" data-size="5" data-live-search="true" data-live-search-placeholder="Tìm kiếm...">
                        <option value="1">Ban Giám Đốc</option>
                        <option value="2">Ban Kiểm soát</option>
                        <option value="3">Phòng Dịch vụ bán hàng</option>
                        <option value="4">Bộ phận Kho Vận</option>
                        <option value="5">Phòng Kế toán</option>
                        <option value="6">Cung ứng MTT</option>
                        <option value="7">Phòng marketing</option>
                        <option value="8">Phòng quản trị nhãn và đào tạo</option>
                </select>
            </div>
        </div>
    `);
        $('div.card-title-wrapper').html(`
        <div class="d-flex justify-content-between align-items-center">

            <div class="main_action ms-3">
                @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                <button id="exporttable" class="btn btn-danger me-3" data-bs-toggle="modal"
                    data-bs-target="#themMoiDinhMuc">
                    Thêm kỹ năng
                </button>
                @endif
                <button id="exporttable" class="btn btn-outline-danger" data-bs-toggle="tooltip"
                    data-bs-placement="top" title="Xuất file Excel">
                    <i class="bi bi-download"></i>
                    Xuất Excel
                </button>
            </div>
        </div>
    `);
    </script>

    <script>
        $('#onChangeDonVi').change(function() {
            var opval = $(this).val();
            if (opval == "themDonVi") {
                $('#themDonVi').modal("show");
                $('#themMoiDinhMuc').modal("hide");
            }
        });
    </script>

    <script>
        function onInput(event) {
            let value = parseFloat(event.value);
            if (Number.isNaN(value)) {
                document.getElementById('input-1').value = "0.00";
            } else {
                document.getElementById('input-1').value = value.toFixed(2);
            }
        }
    </script>
@endsection
