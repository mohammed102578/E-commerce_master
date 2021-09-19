<style>
@import url(https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css);
.latief{
font-family: 'Lateef', serif;
font-size: 18px;

}

</style>

<div class="header-bottom hidden-sm-down">
    <div class="container">
        <div class="row d-flex align-items-center">



            <div class="col-lg-12 col-md-12 header-menu d-flex align-items-center justify-content-start">
                <div class="header-menu-search d-flex justify-content-between w-100 align-items-center">

                    <div id="_desktop_top_menu">

                        <!-- begin modules/novmegamenu/views/templates/Home hook/novmegamenu.tpl -->
                        <nav id="nov-megamenu" class="clearfix">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div id="megamenu" class="nov-megamenu clearfix">
                                <ul class="menu level1">

                                    <li class="item home-page has-sub" ><span class="opener">

                                    </span>
                                    <a href="?home" title="Home"><i class="zmdi zmdi-home ">
                                        </i>  <span class="latief">المتاجر </span>
                                    </a>
                                    <div class="dropdown-menu" style="width:200px">
                                        <ul class="">


                                            @foreach ($vendors as $vendor)
                                            <li class="item " ><a href="?home=home_1" title="{{ $vendor->name }}"> {{ $vendor->name }}</a></li>
                                            @endforeach

                                            </ul>
                                        </div>
                                    </li>



                                    <li class="item  has-sub" ><span class="opener"></span><a href="#" title="Blog">
                                        <i class="zmdi zmdi-library "></i>  <span class="latief">المنتجات الجديدة </span></a><div class="dropdown-menu" style="width:270px"><ul class=""><li class="item " ><a href="/savemart/en/index.php?fc=module&amp;module=smartblog&amp;id_post=14&amp;controller=details" title="Blog detail">Blog detail</a></li>


                                                @foreach ($products as $product)

                                                <li class="item " ><a href="/savemart/blog.html?index.php&amp;cateblog_type=list&amp;cateblog_columns=1&amp;cateblog_layout=layout-one-column" title="{{ $product->title }}">{{ $product->title }}</a></li>

                                                @endforeach

                                            </ul></div></li>

                                    <li class="item  group" ><span class="opener"></span>
                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/2-الصفحة-الرئيسية" title="Categories">
                                            <i class="zmdi zmdi-group "></i>  <span class="latief">الاقسام  </span></a><div class="dropdown-menu" ><ul class="">




                                                <li class="item container group" ><div class="dropdown-menu" >

                                                    <ul class="">
@foreach ($maincategories as $maincategory)


<li class="item col-lg-3 col-md-3 html" ><span class="menu-title latief">{{ $maincategory->name }}</span><div class="menu-content"><ul class="col">

    @foreach ($maincategory->subCategories as $subcategory)


    <li class="latief"><a href="#" class="latief" title="HP Pavilion" >{{$subcategory->name}}</a></li>


    @endforeach

</ul></div>
</li>

@endforeach


























                                                                </ul></div></li>
                                                <li class="item container group" ><div class="dropdown-menu" ><ul class=""><li class="item  html" ><div class="menu-content"><div class="row">
                                                                        <div class="col-12 col-lg-4 col-md-4 mt-xs-10 text-center"><a href="#"><img class="img-fluid" src="http://images.vinovathemes.com/prestashop_savemart/banner-mega-1.jpg" alt="menu-banner-1" /></a></div>
                                                                        <div class="col-4 col-lg-4 col-md-4 mt-xs-10 text-center"><a href="#"><img class="img-fluid" src="http://images.vinovathemes.com/prestashop_savemart/banner-mega-2.jpg" alt="menu-banner-2" /></a></div>
                                                                        <div class="col-4 col-lg-4 col-md-4 mt-xs-10 text-center"><a href="#"><img class="img-fluid" src="http://images.vinovathemes.com/prestashop_savemart/banner-mega-3.jpg" alt="menu-banner-3" /></a></div>
                                                                    </div></div></li></ul></div></li>
                                            </ul></div></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- end modules/novmegamenu/views/templates/hook/novmegamenu.tpl -->

                    </div>

                    <div class="advencesearch_header">
                        <span class="toggle-search hidden-lg-up"><i class="zmdi zmdi-search"></i></span>
                        <div id="_desktop_search" class="contentsticky_search">

                            <!-- begin modules/novadvancedsearch/novadvancedsearch-top.tpl -->
                            <!-- block seach mobile -->
                            <!-- Block search module TOP -->
                            <div id="desktop_search_content"
                                 data-id_lang="6"
                                 data-ajaxsearch="1"
                                 data-novadvancedsearch_type="top"
                                 data-instantsearch=""
                                 data-search_ssl=""
                                 data-link_search_ssl="http://demo.bestprestashoptheme.com/savemart/ar/بحث"
                                 data-action="http://demo.bestprestashoptheme.com/savemart/ar/module/novadvancedsearch/result">
                                <form method="get" action="http://demo.bestprestashoptheme.com/savemart/ar/module/novadvancedsearch/result" id="searchbox" class="form-novadvancedsearch">
                                    <input type="hidden" name="fc" value="module">
                                    <input type="hidden" name="module" value="novadvancedsearch">
                                    <input type="hidden" name="controller" value="result">
                                    <input type="hidden" name="orderby" value="position" />
                                    <input type="hidden" name="orderway" value="desc" />
                                    <input type="hidden" name="id_category" class="id_category" value="0" />
                                    <div class="input-group">
                                        <input type="text" id="search_query_top" class="search_query ui-autocomplete-input form-control" name="search_query" value="" placeholder="Search"/>

                                        <div class="input-group-btn nov_category_tree hidden-sm-down">
                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" value="" aria-expanded="false">
                                                CATEGORIES
                                            </button>
                                            <ul class="dropdown-menu list-unstyled">
                                                <li class="dropdown-item active" data-value="0"><span>All Categories</span></li>
                                                <li class="dropdown-item " data-value="2"></li>
                                                <ul class="list-unstyled pl-5">
                                                    <li class="dropdown-item" data-value="3" >
                                                        <span>Computer &amp; Networking</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="10" >
                                                        <span>-- USB</span>
                                                        <ul class="list-unstyled">
                                                            <li class="dropdown-item" data-value="11" >
                                                                <span>---- USB Kingston</span>
                                                            </li>
                                                            <li class="dropdown-item" data-value="12" >
                                                                <span>---- USB Sandisk</span>
                                                            </li>
                                                            <li class="dropdown-item" data-value="13" >
                                                                <span>---- USB Samsung</span>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-item" data-value="14" >
                                                        <span>-- Hard Disk</span>
                                                        <ul class="list-unstyled">
                                                            <li class="dropdown-item" data-value="19" >
                                                                <span>---- Hard Disk Drive</span>
                                                            </li>
                                                            <li class="dropdown-item" data-value="20" >
                                                                <span>---- Solid State Drives</span>
                                                            </li>
                                                            <li class="dropdown-item" data-value="21" >
                                                                <span>---- SATA</span>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-item" data-value="15" >
                                                        <span>-- Modem WIFI</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="16" >
                                                        <span>-- Keyboard</span>
                                                        <ul class="list-unstyled">
                                                            <li class="dropdown-item" data-value="22" >
                                                                <span>---- Keyboard 1</span>
                                                            </li>
                                                            <li class="dropdown-item" data-value="23" >
                                                                <span>---- Keyboard 2</span>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-item" data-value="17" >
                                                        <span>-- Mouse</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="18" >
                                                        <span>-- Monitor</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="6" >
                                                        <span>Laptop &amp; Accessories</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="7" >
                                                        <span>-- Laptop 1</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="8" >
                                                        <span>-- Laptop 2</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="9" >
                                                        <span>Smartphone &amp; Tablet</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="24" >
                                                        <span>-- Apple</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="25" >
                                                        <span>-- Samsung</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="26" >
                                                        <span>-- Motorola</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="27" >
                                                        <span>-- Chargers</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="4" >
                                                        <span>Home Appliance</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="5" >
                                                        <span>Camera &amp; Photo</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="28" >
                                                        <span>-- Camera 1</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="29" >
                                                        <span>-- Camera 2</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="30" >
                                                        <span>-- Photo 1</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="31" >
                                                        <span>-- Photo 2</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="32" >
                                                        <span>Audio</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="33" >
                                                        <span>-- Headphone</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="34" >
                                                        <span>-- Wireless Speaker</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="35" >
                                                        <span>-- Bluetooth Speaker</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="36" >
                                                        <span>-- Mini Speaker</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="37" >
                                                        <span>-- Sound Card</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="38" >
                                                        <span>-- إكسسوارات</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="39" >
                                                        <span>-- Earbuds and  In-ear</span>
                                                    </li>
                                                </ul>
                                            </ul>
                                        </div>

                                        <span class="input-group-btn">
				 <button class="btn btn-secondary" type="submit" name="submit_search"><i class="material-icons">search</i></button>
			</span>
                                    </div>

                                </form>
                            </div>
                            <!-- /Block search module TOP -->

                            <!-- end modules/novadvancedsearch/novadvancedsearch-top.tpl -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
