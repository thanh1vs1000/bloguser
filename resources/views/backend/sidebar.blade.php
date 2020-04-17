<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">

                    <a class="nav-link" href="{{route('admin.home')}}"
                    >
                        <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                         TRANG GIỚI THIỆU</a
                    >

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                       aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-bars"></i></div>
                        MENU
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                        >
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                         data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="{{route('admin.menu.get.list')}}"><i class="fas fa-clipboard-list"></i>&nbsp;Danh sách</a>
                           <a class="nav-link" href="{{route('admin.menu.get.create')}}"><i class="fas fa-plus-circle"></i> &nbsp;Thêm mới</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#banner"
                             aria-expanded="false" aria-controls="banner">
                        <div class="sb-nav-link-icon"><i class="fas fa-camera-retro"></i></div>
                        BANNER
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                        >
                    </a>
                    <div class="collapse" id="banner" aria-labelledby="headingOne"
                         data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="{{route('admin.menu.get.listbanner')}}"><i class="fas fa-clipboard-list"></i>&nbsp;Danh sách</a>
                            <a class="nav-link" href="{{route('admin.menu.get.createbanner')}}"><i class="fas fa-plus-circle"></i> &nbsp;Thêm mới</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#project"
                       aria-expanded="false" aria-controls="project">
                        <div class="sb-nav-link-icon"><i class="fas fa-award"></i></div>
                        DỰ ÁN
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                        >
                    </a>
                    <div class="collapse" id="project" aria-labelledby="headingOne"
                         data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="{{route('admin.menu.get.list')}}"><i class="fas fa-clipboard-list"></i>&nbsp;Danh sách</a>
                            <a class="nav-link" href="{{route('admin.menu.get.create')}}"><i class="fas fa-plus-circle"></i> &nbsp;Thêm mới</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#hoso"
                       aria-expanded="false" aria-controls="hoso"
                    >
                        <div class="sb-nav-link-icon"><i class="fas fa-user-astronaut"></i></div>
                        HỒ SƠ
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                        >
                    </a>
                    <div class="collapse" id="hoso" aria-labelledby="headingTwo"
                         data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse"
                               data-target="#kinhnghiem" aria-expanded="false" aria-controls="kinhnghiem"
                            >Kinh nghiệm
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                >
                            </a>
                            <div class="collapse" id="kinhnghiem" aria-labelledby="headingOne"
                                 data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.about.get.listexp')}}"><i class="fas fa-clipboard-list"></i>&nbsp;Danh sách</a>
                                    <a class="nav-link" href="{{route('admin.about.get.createexp')}}"><i class="fas fa-plus-circle"></i> &nbsp;Thêm mới</a>

                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse"
                               data-target="#kynang" aria-expanded="false"
                               aria-controls="kynang"
                            > Kỹ năng
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                >
                            </a>
                            <div class="collapse" id="kynang" aria-labelledby="headingOne"
                                 data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="{{route('admin.about.get.listkynang')}}"><i class="fas fa-clipboard-list"></i>&nbsp;Danh sách</a>
                                    <a class="nav-link" href="{{route('admin.about.get.createkynang')}}"><i class="fas fa-plus-circle"></i> &nbsp;Thêm mới</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse"
                               data-target="#gioithieu" aria-expanded="false"
                               aria-controls="gioithieu"
                            > Giới thiệu
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                >
                            </a>
                            <div class="collapse" id="gioithieu" aria-labelledby="headingOne"
                                 data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="{{route('admin.about.get.listgioithieu')}}"><i class="fas fa-clipboard-list"></i>&nbsp;Danh sách</a>
                                    <a class="nav-link" href="{{route('admin.about.get.creategioithieu')}}"><i class="fas fa-plus-circle"></i> &nbsp;Thêm mới</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse"
                               data-target="#contact" aria-expanded="false"
                               aria-controls="contact"
                            > Sơ yếu lý lịch
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                >
                            </a>
                            <div class="collapse" id="contact" aria-labelledby="headingOne"
                                 data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="{{route('admin.about.get.listresume')}}"><i class="fas fa-clipboard-list"></i>&nbsp;Danh sách</a>
                                    <a class="nav-link" href="{{route('admin.about.get.createresume')}}"><i class="fas fa-plus-circle"></i> &nbsp;Thêm mới</a>

                                </nav>
                            </div>
                        </nav>
                    </div>




                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                       aria-expanded="false" aria-controls="collapsePages"
                    >
                        <div class="sb-nav-link-icon"><i class="far fa-address-card"></i></div>
                        LIÊN HỆ
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                        >
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                         data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse"
                               data-target="#linkcontact" aria-expanded="false" aria-controls="linkcontact"
                            >Link Liên Hệ
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                >
                            </a>
                            <div class="collapse" id="linkcontact" aria-labelledby="headingOne"
                                 data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="{{route('admin.contact.get.listlinkcontact')}}"><i class="fas fa-clipboard-list"></i>&nbsp;Danh sách</a>
                                    <a class="nav-link" href="{{route('admin.contact.get.createlinkcontact')}}"><i class="fas fa-plus-circle"></i> &nbsp;Thêm mới</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse"
                               data-target="#contact" aria-expanded="false"
                               aria-controls="contact"
                            >Địa chỉ Liên Hệ
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                >
                            </a>
                            <div class="collapse" id="contact" aria-labelledby="headingOne"
                                 data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="#"><i class="fas fa-clipboard-list"></i>&nbsp;Danh sách</a>
                                    <a class="nav-link" href="#"><i class="fas fa-plus-circle"></i> &nbsp;Thêm mới</a>

                                </nav>

                            </div>
                           <a class="nav-link" href="401.html"><i class="far fa-paper-plane"></i>&nbsp; Hòm thư</a>
                        </nav>
                    </div>



            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Thanh Dep Trai
            </div>
        </nav>
    </div>

</div>
