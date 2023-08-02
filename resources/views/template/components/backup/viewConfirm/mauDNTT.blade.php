@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Mẫu đề nghị thanh toán')

@section('content')
    @include('template.sidebar.sidebarMaster.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="card_template-wrapper mb-3">
                        <div class="card_template-body">
                            <div class="card_template-body-top">
                                <div class='row mb-3'>
                                    <div class="col-2 d-flex align-items-center justify-content-center flex-column">
                                        <a class=" ">
                                            <img class="header_logo" src="{{ env('LOGO_URL', '') }}" />
                                        </a>
                                        <div class="card_template-title fst-italic">BM001.QT07/20</div>
                                    </div>
                                    <div class="col-8 d-flex align-items-center justify-content-center flex-column" >
                                        <div class="card_template-heading">Đề nghị thanh toán</div>
                                        <div class="card_template-heading-mini">Request for payment</div>
                                        <div class="card_template-heading-mini">Mã: {{ time() }}</div>
    
                                    </div>
                                    <div class="col-2">
                                        <div class="card_template-title fst-italic d-flex align-items-center justify-content-center">
                                            <div class="text-nowrap">Số/No:</div>
                                            <div class="card_template-sub with_input d-flex justify-content-center align-items-center"">
                                                <input type="text" value="12345678" class="form-control">
                                            </div>
                                        </div>
                                        <div class="card_template-title fst-italic d-flex align-items-center justify-content-center">
                                            <div class="text-nowrap">Ngày/Date:</div>
                                            <div class="card_template-sub with_input d-flex justify-content-center align-items-center"">
                                                <input type="text" value="22/04/2023" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card_template-body-middle">
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Người đề nghị/Requester:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" value="{{ Session::get('user')['name'] }}" class="form-control">
                                            </span>
                                        </div> 
                                    </div>
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Bộ phận/Department:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" value="{{Session::get('department_name') ?? ''}}"class="form-control">
                                            </span>
                                        </div> 
                                    </div>
                                    <div class="mb-3 col-12">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Nội dung thanh toán/Contents of payment:    </div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" value="Thanh toán hóa đơn" class="form-control">
                                            </span>
                                        </div> 
                                    </div>
                                    <div class="mb-3 col-12">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Số tiền/Amount</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" value="1.000.000 VNĐ" class="form-control">
                                            </span>
                                        </div> 
                                        <div class="card_template-mini with_form mt-3">
                                            <input type="text" value="( Một triệu việt nam đồng )"class="form-control fst-italic">
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Người nhận tiền/Receiver:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" pvalue="Nguyễn Ngọc Bảo" class="form-control">
                                            </span>
                                        </div> 
                                    </div>
                                    <div class="mb-3 col-12">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Hình thức thanh toán/Payment method:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" pvalue="Chuyển khoản" class="form-control">
                                            </span>
                                        </div> 
                                    </div>
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title  with_form">
                                            <div class="text-nowrap">Số tài khoản/Account number:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" value="6287999999"class="form-control">
                                            </span>
                                        </div> 
                                    </div>
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title  with_form">
                                            <div class="text-nowrap">Tại ngân hàng/with bank:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" value="Techcombank"class="form-control">
                                            </span>
                                        </div> 
                                    </div>

                                    <div class="mb-3 col-12">
                                        <div class="card_template-title  with_form">
                                            <div class="text-nowrap">Tệp đính kèm/Attached files:</div>
                                            
                                        </div> 
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="d-flex flex-column">
                                            <ul class="modal_upload-list">
                                                <li>
                                                    <a href="#" target="_blank">
                                                        <i class="bi bi-link-45deg"></i> Link file 1
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank">
                                                        <i class="bi bi-link-45deg"></i> Link file 2
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank">
                                                        <i class="bi bi-link-45deg"></i> Link file 3
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card_template-body-bottom">
                                <div class="row">
                                    <div class="col">
                                        <div class="card_template-title text-center">Người đề nghị/</div>
                                        <div class="card_template-title text-center">Applicant</div>
                                        <div class=" d-flex align-items-center justify-content-center" style="height: 100px; ">
                                            <div class="card_template-title fw-normal">
                                                <img width="100" src="{{ asset('/assets/img/sign-temp.jpg') }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card_template-title text-center">Phụ trách bộ phận/</div>
                                        <div class="card_template-title text-center">Head of Department</div>

                                        <div class=" d-flex align-items-center justify-content-center" style="height: 100px; ">
                                            <div class="">
                                                <button type="button" class="btn btn-outline-primary fs-6" data-bs-toggle="modal" data-bs-target="#confirmSign">Chèn chữ ký</button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col">
                                        <div class="card_template-title text-center">Kế toán kiểm soát/</div>
                                        <div class="card_template-title text-center">Chief Accountant</div>
                                        <div class=" d-flex align-items-center justify-content-center" style="height: 100px; ">
                                            <div class="">
                                                <button type="button" class="btn btn-outline-primary fs-6" data-bs-toggle="modal" data-bs-target="#confirmSign">Chèn chữ ký</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card_template-title text-center">Phê duyệt/</div>
                                        <div class="card_template-title text-center">Approved by</div>
                                        <div class=" d-flex align-items-center justify-content-center" style="height: 100px; ">
                                            <div class="">
                                                <button type="button" class="btn btn-outline-primary fs-6" data-bs-toggle="modal" data-bs-target="#confirmSign">Chèn chữ ký</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="card_template-wrapper mb-3">
                        <div class="card_template-body">
                            <div class="card_template-body-top">
                                <div class='row mb-3'>
                                    <div class="col-2 d-flex align-items-center justify-content-center flex-column">
                                        <a class=" ">
                                            <img class="header_logo" src="{{ env('LOGO_URL', '') }}" />
                                        </a>
                                        <div class="card_template-title fst-italic">BM003.QT07/20</div>
                                    </div>
                                    <div class="col-8 d-flex align-items-center justify-content-center flex-column" >
                                        <div class="card_template-heading">Bảng kê đề nghị</div>
                                        <div class="card_template-heading-mini">Mã: {{ time() }}-BK</div>
                                    </div>
                                    <div class="col-2 card_template-topRight">
                                        <div class="card_template-title fst-italic d-flex align-items-center justify-content-center">
                                            <div class="text-nowrap">Ngày/Date:</div>
                                            <div class="card_template-sub with_input d-flex justify-content-center align-items-center"">
                                                <input type="text" value="21/04/2023" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card_template-body-middle">
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title with_form">
                                             <div class="text-nowrap">Người đề nghị/Requester:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" value="{{ Session::get('user')['name'] }}" class="form-control">
                                            </span>
                                        </div> 
                                    </div>
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title with_form">
                                             <div class="text-nowrap">Công việc:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" value="{{Session::get('department_name') ?? ''}}"class="form-control">
                                            </span>
                                        </div> 
                                    </div>
                                    
                                    <div class="table-responsive DNTT_repeater">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center" style="width:2%">STT</th>
                                                    <th scope="col" class="text-center" style="width:10%">Số chứng từ</th>
                                                    <th scope="col" class="text-center" style="width:33%">Nội dung</th>
                                                    <th scope="col" class="text-center" style="width:17%">Số tiền</th>
                                                    <th scope="col" class="text-center" style="width:36%">Ghi chú</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody data-repeater-list="DNTT_list">
                                                <tr data-repeater-item>
                                                    <td scope="row"  class="text-center">
                                                        <div>
                                                            1
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" value="12346789" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" value="Cần thanh toán gấp" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div>
                                                            <input type="text" value="1.000.000 VNĐ"class="form-control text-end">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" value="Không có ghi chú"class="form-control">
                                                        </div>
                                                    </td>
                                                    
                                                </tr>
                                            </tbody>
                                               
                                        </table>
                                        {{-- <div class="d-flex justify-content-start">
                                            <div role="button" class="fs-5 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="card_template-body-bottom">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col">
                                        <div class="card_template-title text-center">Người đề nghị</div>
                                        <div class="card_template-title text-center">Applicant</div>
                                        <div class=" d-flex align-items-center justify-content-center" style="height: 100px; ">
                                            <div class="card_template-title fw-normal">
                                                <img width="100" src="{{ asset('/assets/img/sign-temp.jpg') }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card_template-footer">
                            <a href="/de-nghi-thanh-toan" type="button" class="btn btn-outline-danger ps-5 pe-5">Quay lại</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            @include('template.footer.footer')
        </div>
    </div>
    @include('template.sidebar.sidebarDeXuat.sidebarRight')



    {{-- Modal Confirm --}}
    <div class="modal fade" id="conFirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Xác nhận yêu cầu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="" action="" id="myForm">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div>Bạn đã chắc chắn với thông tin đề nghị chưa</div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Xem lại</button>
                        <button type="button" class="btn btn-danger">Gửi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Modal Sign --}}
    <div class="modal fade" id="confirmSign" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Ý kiến phản hồi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="" action="" id="myForm">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3 col-12 col-md-12 d-flex justify-content-between align-items-center funkyradio">
                                <div class="funkyradio-danger">
                                    <input type="radio" name="radio" id="confirmRadio" />
                                    <label for="confirmRadio">Xác nhận</label>
                                </div>
                                <div class="funkyradio-danger">
                                    <input type="radio" name="radio" id="destroyRadio" />
                                    <label for="destroyRadio">Từ chối</label>
                                </div>
                            </div>

                            <div class="mb-3 col-12 col-md-12 showSign">
                                <img width="100" src="{{ asset('/assets/img/sign-temp.jpg') }}" />
                            </div>

                            <div class="mb-3 col-12 col-md-12 showFormYKien">
                                <textarea name="" id="" cols="5" class="form-control" placeholder="Nhập ý kiến"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger pe-5 ps-5">Xác nhận</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('footer-script')
    
    <!-- Plugins -->
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/repeater.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/custom-repeater.js') }}"></script>

     <!-- Chart Js -->
     <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.js') }}"></script>
     <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0.js') }}"></script>
     <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0.js') }}"></script>
     
     <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_khachHangActive.js') }}"></script>
     <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_khachHangMoi.js') }}"></script>
     <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_soDonHang.js') }}"></script>
     <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_doanhSo.js') }}"></script>
     <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_nhanSu.js') }}"></script>
     <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_chiPhi.js') }}"></script>
 
     <script type="text/javascript" src="{{ asset('/assets/js/components/selectMulWithLeftSidebar.js') }}"></script>

    <script>
        const targetTable = $('#dsDaoTao').DataTable({
            paging: true,
            ordering: false,
            order: [
                [0, 'desc']
            ],
            pageLength: 25,
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ bản ghi',
                infoEmpty: 'Hiện tại chưa có bản ghi nào',
                search: 'Tìm kiếm',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchvalue: 'Tìm kiếm...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: "_MENU_ bản ghi trên trang",
            },
            dom: '<"d-flex justify-content-between mb-3"<"card-title-left"><"d-flex "<"card-title-right justify-content-end">f>>rt<"dataTables_bottom"i<"d-flex align-items-center justify-content-between"lp>>',
        });
        $('div.card-title-left').html(`
            <div class="action_wrapper">
                <select id="filter_status"  class="selectpicker filter_status" data-dropup-auto="false" title="Lọc chủ đề">
                    <option value="all">Tất cả</option>
                </select>
            </div>
        `);
        $('div.card-title-right').html(`
            <div class="action_wrapper">
                @if (session('user')['role'] == 'admin')
                <div class="action_export me-3">
                    <button class="btn btn-danger d-block testCreateUser" data-bs-toggle="modal"
                        data-bs-target="#taoDeXuat">Tạo đề xuất</button>
                </div>
                @endif
            </div>
        `);
    </script>

    <script>
        updateList = function(e) {
            const input = e.target;
            const outPut = input.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector(
                '.modal_upload-list');
            const notSupport = outPut.parentNode.querySelector('.alertNotSupport');

            let children = '';
            console.log(children);
            const allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
            const maxFileSize = 10485760; //10MB in bytes

            for (let i = 0; i < input.files.length; ++i) {
                const file = input.files.item(i);
                //allowedTypes.includes(file.type) &&
                if (file.size <= maxFileSize) {
                    children += `<li>
            <span class="fs-5">
                <i class="bi bi-link-45deg"></i> ${file.name}
            </span>
            <span class="modal_upload-remote" onclick="removeFileFromFileList(event, ${i})">
                <img style="width:18px;height:18px" src="{{ asset('assets/img/trash.svg') }}" />
            </span>
        </li>`;
                } else {

                    notSupport.style.display = 'block';
                    setTimeout(() => {
                        notSupport.style.display = 'none';
                    }, 3500);
                }
            }
            outPut.innerHTML = children;
        }

        //delete file from input
        function removeFileFromFileList(event, index) {
            const deleteButton = event.target;
            //get tag name
            const tagName = deleteButton.tagName.toLowerCase();
            let liEl;
            if (tagName == "img") {
                liEl = deleteButton.parentNode.parentNode;
            }
            if (tagName == "span") {
                liEl = deleteButton.parentNode;
            }

            const inputEl = liEl.parentNode.parentNode.querySelector('.modal_upload-input');
            const dt = new DataTransfer()

            const {
                files
            } = inputEl

            for (let i = 0; i < files.length; i++) {
                const file = files[i]
                if (index !== i)
                    dt.items.add(file) // here you exclude the file. thus removing it.
            }

            inputEl.files = dt.files // Assign the updates list
            liEl.remove();
        }

        function removeUploaded(event) {
            const deleteButton = event.target;
            //get tag name
            const tagName = deleteButton.tagName.toLowerCase();
            let liEl;
            if (tagName == "img") {
                liEl = deleteButton.parentNode.parentNode;
            }
            if (tagName == "span") {
                liEl = deleteButton.parentNode;
            }
            liEl.remove();
        }
    </script>
    <script>
        const select = document.querySelector('#filter_status');
        const rows = document.querySelectorAll('.table-row');

        select.addEventListener('change', () => {
            const selectedStatusId = select.value;

            rows.forEach(row => {
                const statusId = row.getAttribute('data-status-id');
                if (selectedStatusId === 'all' || selectedStatusId === statusId) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
    <script>
        function filterTable() {
            var input, filter, table, rows, status_id;
            input = document.getElementById("search-input");
            filter = input.value.toUpperCase();
            table = document.getElementById("table");
            rows = table.getElementsByTagName("tr");
            status_id = document.querySelector(".filter_status").value;
            for (var i = 0; i < rows.length; i++) {
                var row = rows[i];
                var cols = row.getElementsByTagName("td");
                var display = false;
                var statusValue = cols[5].innerText;
                if (status_id === "all" || statusValue === status_id) {
                    if (filter === "") {
                        display = true;
                    } else {
                        for (var j = 0; j < cols.length; j++) {
                            var col = cols[j];
                            if (col.innerText.toUpperCase().indexOf(filter) > -1) {
                                display = true;
                                break;
                            }
                        }
                    }
                }
                if (display) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }
        }
    </script>


<script>
      $(document).ready(function() {
  // Hide the text areas initially
  $('.showSign, .showFormYKien').hide();
  
  // Attach event listeners to radio buttons using a loop
  $('input[type="radio"][name="radio"]').each(function() {
    $(this).click(function() {
      var selectedRadio = $(this).attr('id');
      
      if (selectedRadio === 'confirmRadio') {
        $('.showSign').show();
        $('.showFormYKien').hide();
      } else if (selectedRadio === 'destroyRadio') {
        $('.showFormYKien').show();
        $('.showSign').hide();
      }
    });
  });
});
</script>
@endsection
