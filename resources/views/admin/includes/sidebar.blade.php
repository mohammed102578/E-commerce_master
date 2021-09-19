<div class="main-menu menu-fixed menu-dark menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href="{{ route('admin.dashboard') }}"><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main" style="font-family: 'Lateef', serif;
                        ">الرئيسية </span></a>
            </li>



            <li class="nav-item"><i class="la la-male"></i>
                <span class="menu-title" data-i18n="nav.dash.main" style="font-family: 'Lateef', serif;
                ">المتاجر  </span>
                <span
                    class="badge badge badge-success badge-pill float-right mr-2">{{App\Models\Vendor::count()}}</span>

            <ul class="menu-content">
                <li class="active"><a class="menu-item" href="{{route("admin.vendors")}}"
                                      data-i18n="nav.dash.ecommerce" style="font-family: 'Lateef', serif;
                                      "> عرض الكل </a>
                </li>
                <li class="breadcrumb-item active"><a href="{{ route("admin.vendors.create") }}" data-i18n="nav.dash.crypto" style="font-family: 'Lateef', serif;
                    ">أضافة
                        متجر  </a>
                </li>
            </ul>
        </li>


        <li class="nav-item"><i class="la la-group"></i>
            <span class="menu-title" data-i18n="nav.dash.main" style="font-family: 'Lateef', serif;
            ">الاقسام الرئيسيه </span>
            <span
                class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\MainCategory::defaultCategory()->count()}}</span>

        <ul class="menu-content">
            <li class="active"><a class="menu-item" href="{{ route('admin.MainCategory') }}"
                                  data-i18n="nav.dash.ecommerce" style="font-family: 'Lateef', serif;
                                  "> عرض الكل </a>
            </li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.MainCategory.create') }}" data-i18n="nav.dash.crypto">أضافة
                     قسم جديد </a>
            </li>
        </ul>
    </li>



    <li class="nav-item"><i class="la la-group"></i>
        <span class="menu-title" data-i18n="nav.dash.main" style="font-family: 'Lateef', serif;
        ">الاقسام الفرعية   </span>
        <span
            class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\SubCategory::count()}}</span>

    <ul class="menu-content">
        <li class="active"><a class="menu-item" href="{{ route('admin.SubCategory') }}"
                              data-i18n="nav.dash.ecommerce" style="font-family: 'Lateef', serif;
                              "> عرض الكل </a>
        </li>
        <li class="breadcrumb-item active"><a  href="{{ route('admin.SubCategory.create') }}" data-i18n="nav.dash.crypto" style="font-family: 'Lateef', serif;
            ">أضافة
                قسم فرعي جديد </a>
        </li>
    </ul>
</li>




            <li class="nav-item  open ">
                <a href=""><i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main" style="font-family: 'Lateef', serif;
                    ">لغات الموقع </span>
                    <span
                        class="badge badge badge-info badge-pill float-right mr-2">{{App\Models\language::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{ route('admin.languages') }}"
                                          data-i18n="nav.dash.ecommerce" style="font-family: 'Lateef', serif;
                                          "> عرض الكل </a>
                    </li>


                     <li class="breadcrumb-item active"><a href="{{route('admin.languages.create')}}" style="font-family: 'Lateef', serif;
                        "> اختيار لغة جديدة</a>
                    </li>
                </ul>
            </li>





            <li class="nav-item"><i class="la la-group"></i>
                <span class="menu-title" data-i18n="nav.dash.main" style="font-family: 'Lateef', serif;
                ">المنتجات </span>
                <span
                    class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\SubCategory::count()}}</span>
            </li>







    </div>
</div>

