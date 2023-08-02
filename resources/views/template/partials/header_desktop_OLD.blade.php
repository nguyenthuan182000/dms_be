<div class="header_menu">
    <ul class="header_menu-list">
        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub {{ request()->routeIs('assignTask.list') ? 'active' : '' }}"
                href="#">
                <i class="bi bi-compass"></i>
                <span>Kế hoạch & Giao việc</span>
            </a>
            <ul id="header_submenu">

                @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                    <li class="header_submenu-items">
                        <a href="#" class="header_submenu-link">
                            Kế hoạch
                        </a>
                        <a href="{{ route('assignTask.list') }}"
                            class="header_submenu-link {{ request()->routeIs('assignTask.list') ? 'active' : '' }}">
                            Giao Việc
                        </a>
                        {{-- <ul class="header_more">
                            <li class="header_more-item">
                                <a href="#" class="header_more-link">Giao việc định mức</a>
                            </li>
                            <li class="header_more-item">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#giaoNhiemVuPhatSinhGlobal" class="header_more-link">Giao việc phát sinh</a>
                            </li>
                        </ul> --}}
                    </li>
                @endif

            </ul>
        </li>

        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub {{ request()->routeIs('meeting.open', 'meeting.archives', 'joinMeeting') ? 'active' : '' }}"
                href="#">
                <i class="bi bi-people"></i>
                <span>Họp đơn vị</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items more position-relative">
                    <a href="{{ route('meeting.open') }}"
                        class="header_submenu-link more_btn {{ request()->routeIs('meeting.open') ? 'active' : '' }}">
                        Danh sách cuộc họp
                        {{-- <i class="bi bi-chevron-right"></i> --}}
                    </a>
                    {{-- <ul class="header_more">
                        @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                            <li class="header_more-item">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#taoCuocHop" class="header_more-link">Tạo cuộc họp</a>
                            </li>
                        @endif
                        <li class="header_more-item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#thamGiaCuocHop" class="header_more-link">Tham gia họp</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/danh-sach-cuoc-hop/cuoc-hop-dang-dien-ra" class="header_more-link {{ request()->is('danh-sach-cuoc-hop/*') ? 'active' : '' }}">Cuộc họp đang
                                diễn ra</a>
                        </li>
                    </ul> --}}
                </li>
                <li class="header_submenu-items">
                    <a href="{{ route('meeting.archives') }}"
                        class="header_submenu-link {{ request()->routeIs('meeting.archives') ? 'active' : '' }}">Kho
                        biên bản họp</a>
                </li>
            </ul>
        </li>

        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub" href="#">
                <i class="bi bi-person-add"></i>
                <span>Quản lý nhân sự</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items">
                    <a href="{{ route('user.list') }}" class="header_submenu-link">Danh sách nhân sự</a>
                </li>
                <li class="header_submenu-items">
                    <a href="/ho-so-nhan-vien" class="header_submenu-link">Hồ sơ nhân sự</a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Đánh giá thi đua <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="#" class="header_more-link">Khen thưởng</a>
                        </li>
                        <li class="header_submenu-items">
                            <a href="#" class="header_submenu-link">Kỉ luật</a>
                        </li>
                    </ul>
                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link more_btn {{ request()->is('danh-sach-danh-gia', 'kho-bien-ban-danh-gia') ? 'active' : '' }}">
                        Đào tạo & Huấn luyện <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">

                        <li class="header_more-item">
                            <a href="/danh-sach-danh-gia"
                                class="header_more-link {{ request()->is('danh-sach-danh-gia') ? 'active' : '' }}">Danh
                                sách đánh giá</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/kho-bien-ban-danh-gia"
                                class="header_more-link {{ request()->is('kho-bien-ban-danh-gia') ? 'active' : '' }}">Kho
                                biên bản đánh giá</a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">Đề nghị tuyển dụng</a>
                </li>
            </ul>
        </li>

        <li class="header_menu-item">
            <a class="header_menu-link" href="#">
                <i class="bi bi-journal-arrow-up"></i>
                <span>DWT & KPI</span>
            </a>
            <ul id="header_submenu">

                <li class="header_submenu-items">
                    <a href="/dashboard_admin" class="header_submenu-link">Xây dựng KPI </a>
                </li>
                <li class="header_submenu-items">
                    <a href="/kho-key" class="header_submenu-link">Kho chỉ số key</a>
                </li>
                <li class="header_submenu-items">
                    <a href="/dashboard_admin" class="header_submenu-link">Lịch sử điều chỉnh</a>
                </li>
            </ul>
        </li>
        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub" href="#">
                <i class="bi bi-shield-lock"></i>
                <span>Kiểm soát NV & CV</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items">
                    <a href="/su-co-phat-sinh" class="header_submenu-link">Sự cố phát sinh</a>
                </li>
                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">Phản ánh</a>
                </li>
            </ul>
        </li>
        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub" href="#">
                <i class="bi bi-list-check"></i>
                <span>Đề xuất & Xét duyệt</span>
            </a>
            <ul id="header_submenu">
                {{-- <li class="header_submenu-items more position-relative">
                    <a href="{{ route('listPropose.list') }}" class="header_submenu-link more_btn">
                        Danh sách đề xuất <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="#" class="header_more-link">Mua sắm</a>
                        </li>
                        <li class="header_submenu-items">
                            <a href="#" class="header_submenu-link">Công tác</a>
                        </li>
                        <li class="header_submenu-items">
                            <a href="#" class="header_submenu-link">Tuyển dụng</a>
                        </li>
                        <li class="header_submenu-items">
                            <a href="#" class="header_submenu-link">Sự cố và ý kiến</a>
                        </li>
                        <li class="header_submenu-items">
                            <a href="#" class="header_submenu-link">Văn bản</a>
                        </li>
                    </ul>
                </li> --}}
                <li class="header_submenu-items">
                    <a href="/de-xuat-theo-mau" class="header_submenu-link">Đề xuất theo mẫu</a>
                </li>
                <li class="header_submenu-items">
                    <a href="/de-xuat-mo" class="header_submenu-link">Đề xuất mở</a>
                </li>
                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">Lịch sử phản hồi</a>
                </li>
            </ul>
        </li>
        <li class="header_menu-item">
            <a class="header_menu-link" href="/danh-sach-van-ban-dieu-hanh">
                <i class="bi bi-share"></i>
                <span>Văn bản điều hành</span>
            </a>
        </li>

        <li class="header_menu-item">
            <a href="#" class="header_menu-link menu_btn-sub {{ request()->routeIs('department.list', 'position.list', 'positionOri.list', 'positionLevel.list', 'equimentPack.list', 'target.list', 'targetDetailForm.list', 'key.list', 'units.list') ? 'active' : '' }}">
                <i class="bi bi-gear"></i>
                <span>Cấu hình</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link more_btn {{ request()->routeIs('department.list', 'position.list', 'positionOri.list', 'positionLevel.list', 'equimentPack.list') ? 'active' : '' }}">
                        Hồ sơ đơn vị <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="{{ route('department.list') }}"
                                class="header_more-link {{ request()->routeIs('department.list') ? 'active' : '' }}">Cơ
                                cấu
                                đơn vị</a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('position.list') }}"
                                class="header_more-link {{ request()->routeIs('position.list') ? 'active' : '' }}">Danh
                                sách vị
                                trí</a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('positionOri.list') }}"
                                class="header_more-link {{ request()->routeIs('positionOri.list') ? 'active' : '' }}">Danh
                                sách cấp
                                tổ chức</a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('positionLevel.list') }}"
                                class="header_more-link {{ request()->routeIs('positionLevel.list') ? 'active' : '' }}">Danh
                                sách cấp
                                nhân sự</a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('equimentPack.list') }}"
                                class="header_more-link {{ request()->routeIs('equimentPack.list') ? 'active' : '' }}">Danh
                                mục gói
                                trang bị</a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn {{ request()->routeIs('user.list') ? 'active' : '' }}">
                        Hồ sơ nhân viên <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="{{ route('user.list') }}"
                                class="header_more-link {{ request()->routeIs('user.list') ? 'active' : '' }}">
                                Danh sách thành viên
                            </a>
                        </li>
                        <li class="header_submenu-items">
                            <a href="#" class="header_submenu-link">Chữ ký</a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items">
                    <a href="/mo-ta-cong-viec" class="header_submenu-link">Mô tả công việc</a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link more_btn {{ request()->routeIs('target.list', 'targetDetailForm.list', 'key.list', 'units.list') ? 'active' : '' }}">
                        Định mức lao động <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="{{ route('target.list') }}"
                                class="header_more-link {{ request()->routeIs('target.list') ? 'active' : '' }}">
                                Định mức
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('targetDetailForm.list') }}"
                                class="header_more-link {{ request()->routeIs('targetDetailForm.list') ? 'active' : '' }}">
                                Mẫu nhiệm vụ
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('key.list') }}"
                                class="header_more-link {{ request()->routeIs('key.list') ? 'active' : '' }}">
                                Chỉ số kinh doanh
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('units.list') }}" class="header_more-link {{ request()->routeIs('units.list') ? 'active' : '' }}">
                                Danh mục đơn vị tính
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">Quy trình<i
                            class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="/ky-nang-nghiep-vu" class="header_more-link">Kỹ Năng Nghiệp Vụ</a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">Phân quyền người dùng</a>
                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">Dashboard<i
                        class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="/dashboard_admin" class="header_submenu-link">Dashboard quản trị</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/dashboard_human_resources" class="header_submenu-link">Human Resources Dashboard</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/dashboard_weekly" class="header_submenu-link">Weekly & YTD Sale Statistics</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/dashboard_report" class="header_submenu-link">Department Store Staff and Income Report</a>
                        </li>
                    </ul>
                </li>

                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">Cấu hình hiển thị</a>
                </li>

                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">Cấu hình thông tin doanh nghiệp</a>
                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Biểu đồ <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="/danh-sach-key-chart" class="header_more-link">Danh sách key chart</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/kho-chart" class="header_more-link">Kho chart</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </li>
    </ul>
</div>
