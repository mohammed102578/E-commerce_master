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
                                            <li class="item " ><a href="#" title="{{ $vendor->name }}"> {{ $vendor->name }}  --  {{ $vendor->city }}</a>


                                            </li>
                                            @endforeach

                                            </ul>
                                        </div>
                                    </li>



                                    <li class="item  has-sub" ><span class="opener"></span><a href="#" title="  المنتجات الجديدة ">
                                        <i class="zmdi zmdi-library "></i>  <span class="latief">المنتجات الجديدة </span></a><div class="dropdown-menu" style="width:270px"><ul class="">


                                                @foreach ($products as $product)

                                                <li class="item " ><a href="{{ route('mainpage.product_page',$product->id) }}" title="{{ $product->title }}">{{ $product->title }}</a></li>

                                                @endforeach

                                            </ul></div></li>

                                    <li class="item  group" ><span class="opener"></span>
                                        <a href="" title="Categories">
                                            <i class="zmdi zmdi-group "></i>  <span class="latief">الاقسام  </span></a><div class="dropdown-menu" ><ul class="">




                                                <li class="item container group" ><div class="dropdown-menu" >

                                                    <ul class="">
@foreach ($maincategories as $maincategory)


<li class="item col-lg-3 col-md-3 html" ><span class="menu-title latief">{{ $maincategory->name }}</span><div class="menu-content"><ul class="col">

    @foreach ($maincategory->subCategories as $subcategory)


    <li class="latief"><a href="{{ route('mainpage.categoryProduct',$subcategory->id)}}"itle="HP Pavilion" >{{$subcategory->name}}</a></li>


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
                                 data-action="">
                                <form method="POST" action="{{ route('user.search') }}" id="searchbox" class="form-novadvancedsearch">
                                    @csrf
                                    <input type="hidden" name="fc" value="module">
                                    <input type="hidden" name="module" value="novadvancedsearch">
                                    <input type="hidden" name="controller" value="result">
                                    <input type="hidden" name="orderby" value="position" />
                                    <input type="hidden" name="orderway" value="desc" />

                                    <div class="input-group">
                                        <input type="text" id="search_query_top" class="search_query ui-autocomplete-input form-control" name="search"
                                        value="" placeholder="Search"/>




                                        <div class="input-group-btn nov_category_tree hidden-sm-down">

                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" value="" aria-expanded="false">
                                                <select name="id_category" class="form-control " style="width: 130px; border:navajowhite">
                                                    <option value="0" selected>اختر القسم</option>
                                                    @foreach ($subcategories as $subcategory)
                                                    <option value="{{ $subcategory->id}}">{{ $subcategory->name}}</option>
                                                    @endforeach
                                                </select>
                                            </button>

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
