<div class="main-menu menu-fixed menu-dark menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href="{{ route('vendor.dashboard') }}"><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">الرئيسية </span></a>
            </li>




    <li class="nav-item"><i class="la la-group"></i>
        <span class="menu-title" data-i18n="nav.dash.main">المنتجات   </span>

        <span
            class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\Product::where('vendor_id',Auth::guard('vendor')->user()->id)->count()}}</span>

    <ul class="menu-content">
        <li class="active"><a class="menu-item" href="{{ route('vendor.Product') }}"
                              data-i18n="nav.dash.ecommerce"> عرض الكل </a>
        </li>
        <li class="breadcrumb-item active"><a  href="{{ route('vendor.Product.create') }}" data-i18n="nav.dash.crypto">اضافة منتج جديد </a>
        </li>
    </ul>
</li>




            <li class="nav-item active"><a href="{{ route('vendor.profile.edit',Auth::guard('vendor')->user()->id) }}"><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">الصفحة الشخصية</span></a>
            </li>

            <li class="nav-item active"><a href="{{ route('vendor.logout') }}"><i class="la la-mouse-pointer"></i><span
                class="menu-title" data-i18n="nav.add_on_drag_drop.main">تسجيل الخروج </span></a>
    </li>








    </div>
</div>

