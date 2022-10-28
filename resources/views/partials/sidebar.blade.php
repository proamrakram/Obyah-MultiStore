<nav id="sidebar" class="sidebar-wrapper sidebar-dark">
    <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">
                <span class="sidebar-colored d-block p-2">
                    <img src="{{ asset('assets/images/Logo.png') }}" height="50" class='m-auto d-block ' alt="">
                </span>
            </a>
        </div>

        <div class="data-user-sidebar text-center mt-3">
            <div class="img">
                <img src="{{ asset('assets/images/img_user.png') }}" class="rounded-circle shadow avatar "
                    alt="">
            </div>
            <h5 class="mt-1 mb-0 h6 text-white">{{ auth()->user()->name }}</h5>
            <span class='main-color '>
                <i class="circle"></i>
                مدير
            </span>
        </div>

        <ul class="sidebar-menu">
            @if (auth()->user()->user_type == 'store_admin' || auth()->user()->user_type == 'store_employee')
                <li>
                    <a href="{{ route('store.home.index') }}">
                        <img src="{{ asset('assets/images/icon-dashboard.svg') }}" width='20'class='me-3'
                            alt="">
                        الرئيسية
                    </a>
                </li>
                <li class="sidebar-dropdown">
                    <a href="javascript:void(0)">
                        <img src="{{ asset('assets/images/icon/icon-product.svg') }}" width='20'class='me-3'
                            alt="">
                        المنتجات
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li><a href="{{ route('products.index') }}"> كل المنتجات </a></li>
                            <li><a href="{{ route('products.add.ready_made') }}"> اضافة منتج جاهز </a></li>
                            <li><a href="{{ route('products.add.custom_made') }}"> اضافة تصميم خاص </a></li>
                            <li><a href="{{ route('products.add.service_made') }}"> اضافة منتج خدمة </a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('store.sales.index') }}">
                        <img src="{{ asset('assets/images/icon/icon-sale.svg') }}" width='20' class='me-3'
                            alt="">
                        المبيعات
                    </a>
                </li>
                <li>
                    <a href="{{ route('store.orders.index') }}">
                        <img src="{{ asset('assets/images/icon/icon-3d-design.svg') }}" width='20' class='me-3'
                            alt="">
                        الطلبات
                    </a>
                </li>
                <li>
                    <a href="reports.php">
                        <i class="uil uil-analytics me-3 fs-4"></i>
                        التقارير
                    </a>
                </li>
                <li>
                    <a href="visits.php">
                        <i class="uil uil-eye me-3 fs-4"></i>
                        الزيارات
                    </a>
                </li>
                <li>
                    <a href="{{ route('store.customers.index') }}">
                        <img src="{{ asset('assets/images/icon/icon-clients.svg') }}" width='20' class='me-3'
                            alt="">
                        العملاء
                    </a>
                </li>
                <li class="sidebar-dropdown">
                    <a href="javascript:void(0)">
                        <img src="{{ asset('assets/images/icon/icon-marketing.svg') }}" width='20'class='me-3'
                            alt="">
                        التسويق بالعمولة
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li><a href="{{ route('affiliate.index') }}"> الكل </a></li>
                            <li><a href="{{ route('affiliate.add_affiliate') }}"> اضافة مسوق جديد </a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('store.copons.index') }}">
                        <img src="{{ asset('assets/images/icon/icon-coupon.svg') }}" width='18'class='me-3'
                            alt="">
                        كوبونات التخفيض
                    </a>
                </li>
                <li>
                    <a href="returns.php">
                        <img src="{{ asset('assets/images/icon/icon-returns.svg') }}" width='18'class='me-3'
                            alt="">
                        المرتجعات
                    </a>
                </li>

                <li>
                    <a href="{{ route('store.roles.index') }}">
                        <i class="uil uil-wrench" class='me-3'></i>
                        الصلاحيات
                    </a>
                </li>

                <li>
                    <a href="{{ route('store.packages.index') }}">
                        <img src="{{ asset('assets/images/icon/icon-packages.svg') }}" width='18'class='me-3'
                            alt="">
                        الباقات
                    </a>
                </li>

                <li>
                    <a href="{{ route('store.settings.index') }}">
                        <i class="uil uil-setting me-3"></i>
                        الضبط
                    </a>
                </li>
            @endif

            <!-- From Here Start Plathform Admin //// Remove This  (platfrom dashboard) this is to explain -->
            @if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'admin_employee')
                <li>
                    <a href="{{ route('admin.home.index') }}">
                        <img src="{{ asset('assets/images/icon-dashboard.svg') }}" width="20" class="me-3"
                            alt="">
                        الرئيسية
                    </a>
                </li>


                <li>
                    <a href="{{ route('admin.stores-types.index') }}">
                        <img src="{{ asset('assets/images/icon-user.svg') }}" width="20" class="me-3"
                            alt="">
                        إدارة المتاجر
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.stores.index') }}">
                        <img src="{{ asset('assets/images/icon-user.svg') }}" width="20" class="me-3"
                            alt="">
                        إدارة المشتركين - المتاجر
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.customers.index') }}">
                        <img src="{{ asset('assets/images/icon/icon-clients.svg') }}" width='20' class='me-3'
                            alt="">
                        العملاء
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.admins-store.index') }}">
                        <img src="{{ asset('assets/images/icon/icon-clients.svg') }}" width='20' class='me-3'
                            alt="">
                        مديري المتاجر
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.sales.index') }}">
                        <img src="{{ asset('assets/images/icon/icon-sale.svg') }}" width="20" class="me-3"
                            alt="">
                        المبيعات
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.orders.index') }}">
                        <img src="{{ asset('assets/images/icon/icon-3d-design.svg') }}" width="20"
                            class="me-3" alt="">
                        الطلبات
                    </a>
                </li>

                <li>
                    <a href="platform-profits.php">
                        <img src="{{ asset('assets/images/icon/icon-clients.svg') }}" width='18'class='me-3'
                            alt="">
                        الأرباح
                    </a>
                </li>

                <li>
                    <a href="returns.php">
                        <img src="{{ asset('assets/images/icon/icon-returns.svg') }}" width='18'class='me-3'
                            alt="">
                        المرتجعات
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.categories.index') }}">
                        <i class="uil uil-setting me-3"></i>
                        التصنيفات
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.packages.index') }}">
                        <img src="{{ asset('assets/images/icon/icon-packages.svg') }}" width='18'class='me-3'
                            alt="">
                        الباقات
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.roles.index') }}">
                        <i class="uil uil-wrench" class='me-3'></i>
                        الصلاحيات
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.settings.index') }}">
                        <i class="uil uil-setting me-3"></i>
                        الضبط
                    </a>
                </li>
            @endif

        </ul>
        <!-- sidebar-menu  -->
    </div>
    <!-- Sidebar Footer -->
    <ul class="sidebar-footer list-unstyled mb-4">
        <li class="d-flex justify-content-center mb-0 icon-help">
            <a href="" target="_blank" class="btn btn-icon btn-soft-light">
                <i class="uil uil-question-circle"></i>
                <small class="ms-1"> مساعدة </small>
            </a>
        </li>
    </ul>
    <!-- Sidebar Footer -->
</nav>
<!-- sidebar-wrapper -->
