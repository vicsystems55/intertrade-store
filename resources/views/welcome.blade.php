
    @extends('layouts.base')

    @section('content')
   <!-- Start offcanvas filter sidebar -->
   <div class="offcanvas__filter--sidebar widget__area">
    <button type="button" class="offcanvas__filter--close" data-offcanvas>
        <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"></path></svg> <span class="offcanvas__filter--close__text">Close</span>
    </button>
    <div class="offcanvas__filter--sidebar__inner">
        <div class="single__widget widget__bg">
            <h2 class="widget__title position__relative h3">Search</h2>
            <form class="widget__search--form" action="#">
                <label>
                    <input class="widget__search--form__input border-0" placeholder="Search by" type="text">
                </label>
                <button class="widget__search--form__btn"  type="submit" aria-label="search button">
                    <svg class="widget__search--form__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                </button>
            </form>
        </div>
        <div class="single__widget widget__bg">
            <h2 class="widget__title position__relative h3">Categoriessss</h2>
            <example-component></example-component>
            <ul class="widget__categories--menu">
                <li class="widget__categories--menu__list">
                    <label class="widget__categories--menu__label d-flex align-items-center">
                        <img class="widget__categories--menu__img" src="assets/img/product/small-product1.webp" alt="categories-img">
                        <span class="widget__categories--menu__text">Denim Jacket</span>
                        <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                            <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                        </svg>
                    </label>
                    <ul class="widget__categories--sub__menu">
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product2.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Jacket, Women</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product3.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Woolend Jacket</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product4.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Western denim</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product5.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Mini Dresss</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="widget__categories--menu__list">
                    <label class="widget__categories--menu__label d-flex align-items-center">
                        <img class="widget__categories--menu__img" src="assets/img/product/small-product2.webp" alt="categories-img">
                        <span class="widget__categories--menu__text">Oversize Cotton</span>
                        <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" >
                            <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                        </svg>
                    </label>
                    <ul class="widget__categories--sub__menu">
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product2.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Jacket, Women</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product3.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Woolend Jacket</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product4.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Western denim</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product5.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Mini Dresss</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="widget__categories--menu__list">
                    <label class="widget__categories--menu__label d-flex align-items-center">
                        <img class="widget__categories--menu__img" src="assets/img/product/small-product3.webp" alt="categories-img">
                        <span class="widget__categories--menu__text">Dairy & chesse</span>
                        <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                            <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                        </svg>
                    </label>
                    <ul class="widget__categories--sub__menu">
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product2.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Jacket, Women</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product3.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Woolend Jacket</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product4.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Western denim</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product5.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Mini Dresss</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="widget__categories--menu__list">
                    <label class="widget__categories--menu__label d-flex align-items-center">
                        <img class="widget__categories--menu__img" src="assets/img/product/small-product4.webp" alt="categories-img">
                        <span class="widget__categories--menu__text">Shoulder Bag</span>
                        <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                            <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                        </svg>
                    </label>
                    <ul class="widget__categories--sub__menu">
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product2.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Jacket, Women</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product3.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Woolend Jacket</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product4.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Western denim</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product5.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Mini Dresss</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="single__widget price__filter widget__bg">
            <h2 class="widget__title position__relative h3">Filter By Price</h2>
            <form class="price__filter--form" action="#">
                <div class="price__filter--form__inner mb-15 d-flex align-items-center">
                    <div class="price__filter--group">
                        <label class="price__filter--label" for="Filter-Price-GTE2">From</label>
                        <div class="price__filter--input border-radius-5 d-flex align-items-center">
                            <span class="price__filter--currency">$</span>
                            <input class="price__filter--input__field border-0" id="Filter-Price-GTE2" name="filter.v.price.gte" type="number" placeholder="0" min="0" max="250.00">
                        </div>
                    </div>
                    <div class="price__divider">
                        <span>-</span>
                    </div>
                    <div class="price__filter--group">
                        <label class="price__filter--label" for="Filter-Price-LTE2">To</label>
                        <div class="price__filter--input border-radius-5 d-flex align-items-center">
                            <span class="price__filter--currency">$</span>
                            <input class="price__filter--input__field border-0" id="Filter-Price-LTE2" name="filter.v.price.lte" type="number" min="0" placeholder="250.00" max="250.00">
                        </div>
                    </div>
                </div>
                <button class="price__filter--btn primary__btn" type="submit">Filter</button>
            </form>
        </div>
        <div class="single__widget widget__bg">
            <h2 class="widget__title position__relative h3">Dietary Needs</h2>
            <ul class="widget__form--check">
                <li class="widget__form--check__list">
                    <label class="widget__form--check__label" for="check5">Denim shirt</label>
                    <input class="widget__form--check__input" id="check5" type="checkbox">
                    <span class="widget__form--checkmark"></span>
                </li>
                <li class="widget__form--check__list">
                    <label class="widget__form--check__label" for="check6">Need Winter</label>
                    <input class="widget__form--check__input" id="check6" type="checkbox">
                    <span class="widget__form--checkmark"></span>
                </li>
                <li class="widget__form--check__list">
                    <label class="widget__form--check__label" for="check7">Fashion Trends</label>
                    <input class="widget__form--check__input" id="check7" type="checkbox">
                    <span class="widget__form--checkmark"></span>
                </li>
                <li class="widget__form--check__list">
                    <label class="widget__form--check__label" for="check8">Oversize Cotton</label>
                    <input class="widget__form--check__input" id="check8" type="checkbox">
                    <span class="widget__form--checkmark"></span>
                </li>
            </ul>
        </div>
        <div class="single__widget widget__bg">
            <h2 class="widget__title position__relative h3">Top Rated Product</h2>
            <div class="product__sidebar">
                <div class="small__product d-flex align-items-center mb-20">
                    <div class="small__product--thumbnail position__relative">
                        <a class="small__product--link display-block" href="product-details.html">
                            <img class="small__product--img display-block" src="assets/img/product/small-product1.webp" alt="product-img">
                        </a>
                    </div>
                    <div class="small__product--content">
                        <h3 class="small__product--title h4"><a href="product-details.html">Advanced Analytic </a></h3>
                        <div class="small__product--price">
                            <span class="current__price">$245</span>
                            <span class="price__divided"></span>
                            <span class="old__price"> $356</span>
                        </div>
                        <ul class="rating small__product--rating d-flex">
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list"><span class="rating__list--text">( 5.0)</span></li>
                        </ul>
                    </div>
                </div>
                <div class="small__product d-flex align-items-center mb-20">
                    <div class="small__product--thumbnail position__relative">
                        <a class="small__product--link display-block" href="product-details.html">
                            <img class="small__product--img display-block" src="assets/img/product/small-product2.webp" alt="product-img">
                        </a>
                    </div>
                    <div class="small__product--content">
                        <h3 class="small__product--title h4"><a href="product-details.html">Advanced To Watch  </a></h3>
                        <div class="small__product--price">
                            <span class="current__price">$255</span>
                            <span class="price__divided"></span>
                            <span class="old__price"> $375</span>
                        </div>
                        <ul class="rating small__product--rating d-flex">
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list"><span class="rating__list--text">( 5.0)</span></li>
                        </ul>
                    </div>
                </div>
                <div class="small__product d-flex align-items-center">
                    <div class="small__product--thumbnail position__relative">
                        <a class="small__product--link display-block" href="product-details.html">
                            <img class="small__product--img display-block" src="assets/img/product/small-product3.webp" alt="product-img">
                        </a>
                    </div>
                    <div class="small__product--content">
                        <h3 class="small__product--title h4"><a href="product-details.html">Lorem ipsum dolor. </a></h3>
                        <div class="small__product--price">
                            <span class="current__price">$230</span>
                            <span class="price__divided"></span>
                            <span class="old__price"> $330</span>
                        </div>
                        <ul class="rating small__product--rating d-flex">
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list"><span class="rating__list--text">( 5.0)</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="single__widget widget__bg">
            <h2 class="widget__title position__relative h3">Brands</h2>
            <ul class="widget__tagcloud">
                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Wooden</a></li>
                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Chair</a></li>
                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Modern</a></li>
                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Fabric  </a></li>
                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Shoulder </a></li>
                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Winter</a></li>
                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Accessories</a></li>
                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Dress </a></li>
            </ul>
        </div>
    </div>
    </div>
    <!-- End offcanvas filter sidebar -->

    <!-- Start header area -->
    @include('inc.header')
    <!-- End header area -->


    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg" style="background-position: center left;">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content">
                            <h1 class="breadcrumb__content--title mb-10">{{$storeDetails->store_name}}</h1>
                            <ul class="breadcrumb__content--menu d-flex">
                                <li class="breadcrumb__content--menu__items"><a href="index.html">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text__dark">Shop </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start shop section -->
        <section class="shop__section section--padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="shop__header shop__header--style2 bg__gray--color d-flex align-items-center justify-content-between mb-30">
                            <button class="widget__filter--btn style2 align-items-center" data-offcanvas>
                                <svg  class="widget__filter--btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28" d="M368 128h80M64 128h240M368 384h80M64 384h240M208 256h240M64 256h80"/><circle cx="336" cy="128" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28"/><circle cx="176" cy="256" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28"/><circle cx="336" cy="384" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28"/></svg>
                                <span class="widget__filter--btn__text">Filter</span>
                            </button>
                            <div class="product__view--mode d-flex align-items-center">

                                <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
                                    <label class="product__view--label">Sort By :</label>
                                    <div class="select shop__header--select">
                                        <select class="product__view--select">
                                            <option selected value="1">Sort by latest</option>
                                            <option value="2">Sort by popularity</option>
                                            <option value="3">Sort by newness</option>
                                            <option value="4">Sort by  rating </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="product__view--mode__list">
                                    <div class="product__tab--one product__grid--column__buttons d-flex justify-content-center">
                                        <button class="product__grid--column__buttons--icons active" data-toggle="tab" aria-label="product grid btn" data-target="#product_grid">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 9 9">
                                                <g  transform="translate(-1360 -479)">
                                                <rect id="Rectangle_5725" data-name="Rectangle 5725" width="4" height="4" transform="translate(1360 479)" fill="currentColor"/>
                                                <rect id="Rectangle_5727" data-name="Rectangle 5727" width="4" height="4" transform="translate(1360 484)" fill="currentColor"/>
                                                <rect id="Rectangle_5726" data-name="Rectangle 5726" width="4" height="4" transform="translate(1365 479)" fill="currentColor"/>
                                                <rect id="Rectangle_5728" data-name="Rectangle 5728" width="4" height="4" transform="translate(1365 484)" fill="currentColor"/>
                                                </g>
                                            </svg>
                                        </button>
                                        <button class="d-none product__grid--column__buttons--icons " data-toggle="tab" aria-label="product list btn" data-target="#product_list">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 13 8">
                                                <g id="Group_14700" data-name="Group 14700" transform="translate(-1376 -478)">
                                                <g  transform="translate(12 -2)">
                                                    <g id="Group_1326" data-name="Group 1326">
                                                    <rect id="Rectangle_5729" data-name="Rectangle 5729" width="3" height="2" transform="translate(1364 483)" fill="currentColor"/>
                                                    <rect id="Rectangle_5730" data-name="Rectangle 5730" width="9" height="2" transform="translate(1368 483)" fill="currentColor"/>
                                                    </g>
                                                    <g id="Group_1328" data-name="Group 1328" transform="translate(0 -3)">
                                                    <rect id="Rectangle_5729-2" data-name="Rectangle 5729" width="3" height="2" transform="translate(1364 483)" fill="currentColor"/>
                                                    <rect id="Rectangle_5730-2" data-name="Rectangle 5730" width="9" height="2" transform="translate(1368 483)" fill="currentColor"/>
                                                    </g>
                                                    <g id="Group_1327" data-name="Group 1327" transform="translate(0 -1)">
                                                    <rect id="Rectangle_5731" data-name="Rectangle 5731" width="3" height="2" transform="translate(1364 487)" fill="currentColor"/>
                                                    <rect id="Rectangle_5732" data-name="Rectangle 5732" width="9" height="2" transform="translate(1368 487)" fill="currentColor"/>
                                                    </g>
                                                </g>
                                                </g>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <p class="product__showing--count">Showing {{$response->current_page}} - {{$response->to}} of {{$response->total}} results</p>
                        </div>
                        <div class="shop__product--wrapper">
                            <div class="tab_content">
                                <div id="product_grid" class="tab_pane active show">
                                    <div class="product__section--inner product__grid--inner">
                                        <div class="row row-cols-xl-3 row-cols-lg-3 row-cols-md-3 row-cols-2 mb--n30">

                                            @foreach ($response->data as $product)

                                            <div class="col custom-col-2 mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block" href="product-details.html">
                                                            <img class="product__card--thumbnail__img product__primary--img display-block" style="width: 410px; height: 410px; object-fit:cover;"  src="{{$product->img_url}}" alt="product-img">
                                                            <img class="product__card--thumbnail__img product__secondary--img display-block"  style="width: 410px; height: 410px; object-fit:cover;" src="{{$product->img_url}}"  alt="product-img">
                                                        </a>
                                                        <ul class="product__card--action d-flex align-items-center justify-content-center">
                                                            {{-- <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Wishlist" href="wishlist.html">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="22.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span>
                                                                </a>
                                                            </li> --}}
                                                            {{-- <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Quick View" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="24.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li> --}}
                                                            {{-- <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Compare" href="compare.html">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="19.51" height="18.443" viewBox="0 0 20 20" fill="currentColor">
                                                                        <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                                                                    </svg>
                                                                    <span class="visually-hidden">Compare</span>
                                                                </a>
                                                            </li> --}}
                                                        </ul>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">SALE</span>
                                                        </div>
                                                    </div>

                                                    <div class="product__card--content text-center">
                                                        <span class="product__card--meta__tag">General</span>
                                                        <h3 class="product__card--title"><a href="product-details.html">{{$product->name}} </a></h3>
                                                        <div class="product__card--price">
                                                            <span class="current__price">NGN {{number_format($product->price)}}</span>
                                                            <span class="price__divided"></span>
                                                            <span class="old__price"> NGN {{number_format($product->price * 1.3)}}.</span>
                                                        </div>
                                                    <addcart-component  productid="{{$product->id}}"></addcart-component>
                                                    </div>
                                                </article>
                                            </div>
                                            @endforeach


                                            {{-- <div class="col custom-col-2 mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail product__swiper--column1 swiper">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="product__card--thumbnail__link display-block" href="product-details.html">
                                                                    <img class="product__card--thumbnail__img product__primary--img display-block" src="assets/img/product/product3.webp" alt="product-img">
                                                                    <img class="product__card--thumbnail__img product__secondary--img display-block" src="assets/img/product/product4.webp" alt="product-img">
                                                                </a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="product__card--thumbnail__link display-block" href="product-details.html">
                                                                    <img class="product__card--thumbnail__img product__primary--img display-block" src="assets/img/product/product5.webp" alt="product-img">
                                                                    <img class="product__card--thumbnail__img product__secondary--img display-block" src="assets/img/product/product6.webp" alt="product-img">
                                                                </a>
                                                                <div class="product__badge">
                                                                    <span class="product__badge--items sale">SALE</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="product__card--action d-flex align-items-center justify-content-center">
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Wishlist" href="wishlist.html">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="22.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Quick View" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="24.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Compare" href="compare.html">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="19.51" height="18.443" viewBox="0 0 20 20" fill="currentColor">
                                                                        <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                                                                    </svg>
                                                                    <span class="visually-hidden">Compare</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="swiper__nav--btn swiper-button-next"></div>
                                                        <div class="swiper__nav--btn swiper-button-prev"></div>
                                                    </div>
                                                    <div class="product__card--content text-center">
                                                        <span class="product__card--meta__tag">Watch,Woman</span>
                                                        <h3 class="product__card--title"><a href="product-details.html">Advanced Analytic </a></h3>
                                                        <div class="product__card--price">
                                                            <span class="current__price">$245</span>
                                                            <span class="price__divided"></span>
                                                            <span class="old__price"> $356</span>
                                                        </div>
                                                        <a class="product__card--btn primary__btn" href="cart.html">Add To Card</a>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col custom-col-2 mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block" href="product-details.html">
                                                            <img class="product__card--thumbnail__img product__primary--img display-block" src="assets/img/product/product5.webp" alt="product-img">
                                                            <img class="product__card--thumbnail__img product__secondary--img display-block" src="assets/img/product/product6.webp" alt="product-img">
                                                        </a>
                                                        <ul class="product__card--action d-flex align-items-center justify-content-center">
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Wishlist" href="wishlist.html">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="22.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Quick View" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="24.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Compare" href="compare.html">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="19.51" height="18.443" viewBox="0 0 20 20" fill="currentColor">
                                                                        <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                                                                    </svg>
                                                                    <span class="visually-hidden">Compare</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">SALE</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__card--content text-center">
                                                        <span class="product__card--meta__tag">Watch,Woman</span>
                                                        <h3 class="product__card--title"><a href="product-details.html">Dolor sit consectetur. </a></h3>
                                                        <div class="product__card--price">
                                                            <span class="current__price">$245</span>
                                                            <span class="price__divided"></span>
                                                            <span class="old__price"> $356</span>
                                                        </div>
                                                        <a class="product__card--btn primary__btn" href="cart.html">Add To Card</a>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col custom-col-2 mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail product__swiper--column1 swiper">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="product__card--thumbnail__link display-block" href="product-details.html">
                                                                    <img class="product__card--thumbnail__img product__primary--img display-block" src="assets/img/product/product2.webp" alt="product-img">
                                                                    <img class="product__card--thumbnail__img product__secondary--img display-block" src="assets/img/product/product1.webp" alt="product-img">
                                                                </a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="product__card--thumbnail__link display-block" href="product-details.html">
                                                                    <img class="product__card--thumbnail__img product__primary--img display-block" src="assets/img/product/product4.webp" alt="product-img">
                                                                    <img class="product__card--thumbnail__img product__secondary--img display-block" src="assets/img/product/product3.webp" alt="product-img">
                                                                </a>
                                                                <div class="product__badge">
                                                                    <span class="product__badge--items sale">SALE</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="product__card--action d-flex align-items-center justify-content-center">
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Wishlist" href="wishlist.html">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="22.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Quick View" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="24.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Compare" href="compare.html">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="19.51" height="18.443" viewBox="0 0 20 20" fill="currentColor">
                                                                        <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                                                                    </svg>
                                                                    <span class="visually-hidden">Compare</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="swiper__nav--btn swiper-button-next"></div>
                                                        <div class="swiper__nav--btn swiper-button-prev"></div>
                                                    </div>
                                                    <div class="product__card--content text-center">

                                                        <span class="product__card--meta__tag">plug and play</span>
                                                        <h3 class="product__card--title"><a href="product-details.html">Lorem ipsum dolor sit.</a></h3>
                                                        <div class="product__card--price">
                                                            <span class="current__price">$278</span>
                                                            <span class="price__divided"></span>
                                                            <span class="old__price"> $376</span>
                                                        </div>
                                                        <a class="product__card--btn primary__btn" href="cart.html">Add To Card</a>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col custom-col-2 mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block" href="product-details.html">
                                                            <img class="product__card--thumbnail__img product__primary--img display-block" src="assets/img/product/product4.webp" alt="product-img">
                                                            <img class="product__card--thumbnail__img product__secondary--img display-block" src="assets/img/product/product3.webp" alt="product-img">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">SALE</span>
                                                        </div>
                                                        <ul class="product__card--action d-flex align-items-center justify-content-center">
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Wishlist" href="wishlist.html">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="22.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Quick View" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="24.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Compare" href="compare.html">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="19.51" height="18.443" viewBox="0 0 20 20" fill="currentColor">
                                                                        <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                                                                    </svg>
                                                                    <span class="visually-hidden">Compare</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product__card--content text-center">
                                                        <span class="product__card--meta__tag">Watch,Woman</span>
                                                        <h3 class="product__card--title"><a href="product-details.html"> Advanced Analytic</a></h3>
                                                        <div class="product__card--price">
                                                            <span class="current__price">$220</span>
                                                            <span class="price__divided"></span>
                                                            <span class="old__price"> $325</span>
                                                        </div>
                                                        <a class="product__card--btn primary__btn" href="cart.html">Add To Card</a>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col custom-col-2 mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block" href="product-details.html">
                                                            <img class="product__card--thumbnail__img product__primary--img display-block" src="assets/img/product/product6.webp" alt="product-img">
                                                            <img class="product__card--thumbnail__img product__secondary--img display-block" src="assets/img/product/product5.webp" alt="product-img">
                                                        </a>
                                                        <ul class="product__card--action d-flex align-items-center justify-content-center">
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Wishlist" href="wishlist.html">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="22.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Quick View" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="24.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Compare" href="compare.html">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="19.51" height="18.443" viewBox="0 0 20 20" fill="currentColor">
                                                                        <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                                                                    </svg>
                                                                    <span class="visually-hidden">Compare</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product__card--content text-center">
                                                        <span class="product__card--meta__tag">Watch,Woman</span>
                                                        <h3 class="product__card--title"><a href="product-details.html">Advanced To Watch </a></h3>
                                                        <div class="product__card--price">
                                                            <span class="current__price">$365</span>
                                                            <span class="price__divided"></span>
                                                            <span class="old__price"> $378</span>
                                                        </div>
                                                        <a class="product__card--btn primary__btn" href="cart.html">Add To Card</a>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col custom-col-2 mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block" href="product-details.html">
                                                            <img class="product__card--thumbnail__img product__primary--img display-block" src="assets/img/product/product3.webp" alt="product-img">
                                                            <img class="product__card--thumbnail__img product__secondary--img display-block" src="assets/img/product/product4.webp" alt="product-img">
                                                        </a>
                                                        <ul class="product__card--action d-flex align-items-center justify-content-center">
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Wishlist" href="wishlist.html">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="22.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Quick View" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="24.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Compare" href="compare.html">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="19.51" height="18.443" viewBox="0 0 20 20" fill="currentColor">
                                                                        <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                                                                    </svg>
                                                                    <span class="visually-hidden">Compare</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product__card--content text-center">
                                                        <span class="product__card--meta__tag">Watch,Woman</span>
                                                        <h3 class="product__card--title"><a href="product-details.html">Advanced Analytic </a></h3>
                                                        <div class="product__card--price">
                                                            <span class="current__price">$245</span>
                                                            <span class="price__divided"></span>
                                                            <span class="old__price"> $356</span>
                                                        </div>
                                                        <a class="product__card--btn primary__btn" href="cart.html">Add To Card</a>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col custom-col-2 mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block" href="product-details.html">
                                                            <img class="product__card--thumbnail__img product__primary--img display-block" src="assets/img/product/product2.webp" alt="product-img">
                                                            <img class="product__card--thumbnail__img product__secondary--img display-block" src="assets/img/product/product1.webp" alt="product-img">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">SALE</span>
                                                        </div>
                                                        <ul class="product__card--action d-flex align-items-center justify-content-center">
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Wishlist" href="wishlist.html">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="22.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Quick View" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="24.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Compare" href="compare.html">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="19.51" height="18.443" viewBox="0 0 20 20" fill="currentColor">
                                                                        <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                                                                    </svg>
                                                                    <span class="visually-hidden">Compare</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product__card--content text-center">
                                                        <span class="product__card--meta__tag">Watch,Woman</span>
                                                        <h3 class="product__card--title"><a href="product-details.html">Lorem ipsum dolor sit.</a></h3>
                                                        <div class="product__card--price">
                                                            <span class="current__price">$278</span>
                                                            <span class="price__divided"></span>
                                                            <span class="old__price"> $376</span>
                                                        </div>
                                                        <a class="product__card--btn primary__btn" href="cart.html">Add To Card</a>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col custom-col-2 mb-30 d-sm-none">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail product__swiper--column1 swiper">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="product__card--thumbnail__link display-block" href="product-details.html">
                                                                    <img class="product__card--thumbnail__img product__primary--img display-block" src="assets/img/product/product1.webp" alt="product-img">
                                                                    <img class="product__card--thumbnail__img product__secondary--img display-block" src="assets/img/product/product2.webp" alt="product-img">
                                                                </a>
                                                                <div class="product__badge">
                                                                    <span class="product__badge--items sale">SALE</span>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="product__card--thumbnail__link display-block" href="product-details.html">
                                                                    <img class="product__card--thumbnail__img product__primary--img display-block" src="assets/img/product/product4.webp" alt="product-img">
                                                                    <img class="product__card--thumbnail__img product__secondary--img display-block" src="assets/img/product/product3.webp" alt="product-img">
                                                                </a>
                                                                <div class="product__badge">
                                                                    <span class="product__badge--items sale">SALE</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="product__card--action d-flex align-items-center justify-content-center">
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Wishlist" href="wishlist.html">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="22.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Quick View" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="24.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Compare" href="compare.html">
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="19.51" height="18.443" viewBox="0 0 20 20" fill="currentColor">
                                                                        <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                                                                    </svg>
                                                                    <span class="visually-hidden">Compare</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="swiper__nav--btn swiper-button-next"></div>
                                                        <div class="swiper__nav--btn swiper-button-prev"></div>
                                                    </div>
                                                    <div class="product__card--content text-center">
                                                        <span class="product__card--meta__tag">Watch,Woman</span>
                                                        <h3 class="product__card--title"><a href="product-details.html">Advanced To Watch </a></h3>
                                                        <div class="product__card--price">
                                                            <span class="current__price">$245</span>
                                                            <span class="price__divided"></span>
                                                            <span class="old__price"> $356</span>
                                                        </div>
                                                        <a class="product__card--btn primary__btn" href="cart.html">Add To Card</a>
                                                    </div>
                                                </article>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="pagination__area bg__gray--color">
                                <nav class="pagination">
                                    <ul class="pagination__wrapper d-flex align-items-center justify-content-center">
                                        @foreach ($response->links as $link)



                                        @if (!$link->active )

                                            @if ($loop->first)

                                            <li class="pagination__list">
                                                <a href="{{str_replace(config('app.front_end_url').'/api/v1/productsx','',$link->url)}}" class="pagination__item--arrow  link ">
                                                    <svg xmlns="http://www.w3.org/2000/svg"  width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292"/></svg>
                                                    <span class="visually-hidden">pagination arrow</span>
                                                </a>
                                            <li>

                                            @elseif($loop->last)

                                            <li class="pagination__list">
                                                <a href="{{str_replace(config('app.front_end_url').'/api/v1/productsx','',$link->url)}}" class="pagination__item--arrow  link ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"/></svg>
                                                    <span class="visually-hidden">pagination arrow</span>
                                                </a>
                                            <li>

                                            @else


                                        <li class="pagination__list"><a href="{{str_replace(config('app.front_end_url').'/api/v1/productsx','',$link->url)}}" class="pagination__item link">{{$link->label}}</a></li>

                                            @endif


                                        @else

                                        <li class="pagination__list">
                                            <span class="pagination__item pagination__item--current">{{$link->label}}</span>
                                        </li>
                                        @endif

                                        {{-- @if ($loop->last)

                                        <li class="pagination__list">
                                            <a href="{{$link->url}}" class="pagination__item--arrow  link ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"/></svg>
                                                <span class="visually-hidden">pagination arrow</span>
                                            </a>
                                        <li>
                                        @endif --}}


                                        @endforeach


                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End shop section -->

    </main>

    <!-- Start footer section -->
    @include('inc.footer')
    <!-- End footer section -->

    <!-- Quickview Wrapper -->
    <div class="modal" id="modal1" data-animation="slideInUp">
        <div class="modal-dialog quickview__main--wrapper">
        <header class="modal-header quickview__header">
                <button class="close-modal quickview__close--btn" aria-label="close modal" data-close>✕ </button>
            </header>
            <div class="quickview__inner">
                <div class="row row-cols-lg-2 row-cols-md-2">
                    <div class="col">
                        <div class="quickview__gallery">
                            <div class="product__media--right__horizontal ">
                                <div class="product__media--preview__horizontal  swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="assets/img/product/product2.webp"><img class="product__media--preview__items--img" src="assets/img/product/product2.webp" alt="product-media-img"></a>
                                                <div class="product__badge">
                                                    <span class="product__badge--items sale">New</span>
                                                </div>
                                                <div class="product__media--view__icon">
                                                    <a class="product__media--view__icon--link glightbox" href="assets/img/product/product2.webp" data-gallery="product-media-preview">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 18 18">
                                                            <image  width="18" height="18" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAABHNCSVQICAgIfAhkiAAAAVhJREFUOE/llLtKA0EUhjdY+BD6ABaW3tIYTWEhiKKCCGIgqGhCgqXvoQFRQdBGERQvUaJFgilVRHwF8RWCWqzfD7OyjrPZ7R342HP2nP1n58yZSfm+/+F53ivUoAseoALtxirBIXiHLPSlEHrBaMGyEYzR+BXuwduHTgltYNzBKSxAM6HSAHknMAf9EqpjjEIGzmAK7mPE0sSrRkQ/cSWhIkZQE4kdwzxoAteQiCbMgeqqsSIhO3nEJK7xPLKC0/h7oT/5CbuEFByDCShDeKZNfC3lwp49SihiVdGv/6GQdm4WSlaxt/AvQ9vedteCZlsn68Aqr/pLPfenaVVsHcBt80HQbIv4txF75GravIQafKClDMKNq9kcgspXd0+CjlM1OLTXZu1LPNVwScYwSYcwA2kJPWJ8QQGekyiEcnqxd6BDQp8YupPOoRueYDdGME9c18gbjMv+BiJYeHc6xpjnAAAAAElFTkSuQmCC"/>
                                                        </svg>
                                                        <span class="visually-hidden">Media Gallery</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="assets/img/product/product1.webp"><img class="product__media--preview__items--img" src="assets/img/product/product1.webp" alt="product-media-img"></a>
                                                <div class="product__badge">
                                                    <span class="product__badge--items sale">New</span>
                                                </div>
                                                <div class="product__media--view__icon">
                                                    <a class="product__media--view__icon--link glightbox" href="assets/img/product/product1.webp" data-gallery="product-media-preview">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 18 18">
                                                            <image  width="18" height="18" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAABHNCSVQICAgIfAhkiAAAAVhJREFUOE/llLtKA0EUhjdY+BD6ABaW3tIYTWEhiKKCCGIgqGhCgqXvoQFRQdBGERQvUaJFgilVRHwF8RWCWqzfD7OyjrPZ7R342HP2nP1n58yZSfm+/+F53ivUoAseoALtxirBIXiHLPSlEHrBaMGyEYzR+BXuwduHTgltYNzBKSxAM6HSAHknMAf9EqpjjEIGzmAK7mPE0sSrRkQ/cSWhIkZQE4kdwzxoAteQiCbMgeqqsSIhO3nEJK7xPLKC0/h7oT/5CbuEFByDCShDeKZNfC3lwp49SihiVdGv/6GQdm4WSlaxt/AvQ9vedteCZlsn68Aqr/pLPfenaVVsHcBt80HQbIv4txF75GravIQafKClDMKNq9kcgspXd0+CjlM1OLTXZu1LPNVwScYwSYcwA2kJPWJ8QQGekyiEcnqxd6BDQp8YupPOoRueYDdGME9c18gbjMv+BiJYeHc6xpjnAAAAAElFTkSuQmCC"/>
                                                        </svg>
                                                        <span class="visually-hidden">Media Gallery</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="assets/img/product/product3.webp"><img class="product__media--preview__items--img" src="assets/img/product/product3.webp" alt="product-media-img"></a>
                                                <div class="product__badge">
                                                    <span class="product__badge--items sale">New</span>
                                                </div>
                                                <div class="product__media--view__icon">
                                                    <a class="product__media--view__icon--link glightbox" href="assets/img/product/product3.webp" data-gallery="product-media-preview">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 18 18">
                                                            <image  width="18" height="18" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAABHNCSVQICAgIfAhkiAAAAVhJREFUOE/llLtKA0EUhjdY+BD6ABaW3tIYTWEhiKKCCGIgqGhCgqXvoQFRQdBGERQvUaJFgilVRHwF8RWCWqzfD7OyjrPZ7R342HP2nP1n58yZSfm+/+F53ivUoAseoALtxirBIXiHLPSlEHrBaMGyEYzR+BXuwduHTgltYNzBKSxAM6HSAHknMAf9EqpjjEIGzmAK7mPE0sSrRkQ/cSWhIkZQE4kdwzxoAteQiCbMgeqqsSIhO3nEJK7xPLKC0/h7oT/5CbuEFByDCShDeKZNfC3lwp49SihiVdGv/6GQdm4WSlaxt/AvQ9vedteCZlsn68Aqr/pLPfenaVVsHcBt80HQbIv4txF75GravIQafKClDMKNq9kcgspXd0+CjlM1OLTXZu1LPNVwScYwSYcwA2kJPWJ8QQGekyiEcnqxd6BDQp8YupPOoRueYDdGME9c18gbjMv+BiJYeHc6xpjnAAAAAElFTkSuQmCC"/>
                                                        </svg>
                                                        <span class="visually-hidden">Media Gallery</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="assets/img/product/product4.webp"><img class="product__media--preview__items--img" src="assets/img/product/product4.webp" alt="product-media-img"></a>
                                                <div class="product__badge">
                                                    <span class="product__badge--items sale">New</span>
                                                </div>
                                                <div class="product__media--view__icon">
                                                    <a class="product__media--view__icon--link glightbox" href="assets/img/product/product4.webp" data-gallery="product-media-preview">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 18 18">
                                                            <image  width="18" height="18" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAABHNCSVQICAgIfAhkiAAAAVhJREFUOE/llLtKA0EUhjdY+BD6ABaW3tIYTWEhiKKCCGIgqGhCgqXvoQFRQdBGERQvUaJFgilVRHwF8RWCWqzfD7OyjrPZ7R342HP2nP1n58yZSfm+/+F53ivUoAseoALtxirBIXiHLPSlEHrBaMGyEYzR+BXuwduHTgltYNzBKSxAM6HSAHknMAf9EqpjjEIGzmAK7mPE0sSrRkQ/cSWhIkZQE4kdwzxoAteQiCbMgeqqsSIhO3nEJK7xPLKC0/h7oT/5CbuEFByDCShDeKZNfC3lwp49SihiVdGv/6GQdm4WSlaxt/AvQ9vedteCZlsn68Aqr/pLPfenaVVsHcBt80HQbIv4txF75GravIQafKClDMKNq9kcgspXd0+CjlM1OLTXZu1LPNVwScYwSYcwA2kJPWJ8QQGekyiEcnqxd6BDQp8YupPOoRueYDdGME9c18gbjMv+BiJYeHc6xpjnAAAAAElFTkSuQmCC"/>
                                                        </svg>
                                                        <span class="visually-hidden">Media Gallery</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="assets/img/product/product5.webp"><img class="product__media--preview__items--img" src="assets/img/product/product5.webp" alt="product-media-img"></a>
                                                <div class="product__badge">
                                                    <span class="product__badge--items sale">New</span>
                                                </div>
                                                <div class="product__media--view__icon">
                                                    <a class="product__media--view__icon--link glightbox" href="assets/img/product/product5.webp" data-gallery="product-media-preview">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 18 18">
                                                            <image  width="18" height="18" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAABHNCSVQICAgIfAhkiAAAAVhJREFUOE/llLtKA0EUhjdY+BD6ABaW3tIYTWEhiKKCCGIgqGhCgqXvoQFRQdBGERQvUaJFgilVRHwF8RWCWqzfD7OyjrPZ7R342HP2nP1n58yZSfm+/+F53ivUoAseoALtxirBIXiHLPSlEHrBaMGyEYzR+BXuwduHTgltYNzBKSxAM6HSAHknMAf9EqpjjEIGzmAK7mPE0sSrRkQ/cSWhIkZQE4kdwzxoAteQiCbMgeqqsSIhO3nEJK7xPLKC0/h7oT/5CbuEFByDCShDeKZNfC3lwp49SihiVdGv/6GQdm4WSlaxt/AvQ9vedteCZlsn68Aqr/pLPfenaVVsHcBt80HQbIv4txF75GravIQafKClDMKNq9kcgspXd0+CjlM1OLTXZu1LPNVwScYwSYcwA2kJPWJ8QQGekyiEcnqxd6BDQp8YupPOoRueYDdGME9c18gbjMv+BiJYeHc6xpjnAAAAAElFTkSuQmCC"/>
                                                        </svg>
                                                        <span class="visually-hidden">Media Gallery</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="assets/img/product/product6.webp"><img class="product__media--preview__items--img" src="assets/img/product/product6.webp" alt="product-media-img"></a>
                                                <div class="product__badge">
                                                    <span class="product__badge--items sale">New</span>
                                                </div>
                                                <div class="product__media--view__icon">
                                                    <a class="product__media--view__icon--link glightbox" href="assets/img/product/product6.webp" data-gallery="product-media-preview">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 18 18">
                                                            <image  width="18" height="18" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAABHNCSVQICAgIfAhkiAAAAVhJREFUOE/llLtKA0EUhjdY+BD6ABaW3tIYTWEhiKKCCGIgqGhCgqXvoQFRQdBGERQvUaJFgilVRHwF8RWCWqzfD7OyjrPZ7R342HP2nP1n58yZSfm+/+F53ivUoAseoALtxirBIXiHLPSlEHrBaMGyEYzR+BXuwduHTgltYNzBKSxAM6HSAHknMAf9EqpjjEIGzmAK7mPE0sSrRkQ/cSWhIkZQE4kdwzxoAteQiCbMgeqqsSIhO3nEJK7xPLKC0/h7oT/5CbuEFByDCShDeKZNfC3lwp49SihiVdGv/6GQdm4WSlaxt/AvQ9vedteCZlsn68Aqr/pLPfenaVVsHcBt80HQbIv4txF75GravIQafKClDMKNq9kcgspXd0+CjlM1OLTXZu1LPNVwScYwSYcwA2kJPWJ8QQGekyiEcnqxd6BDQp8YupPOoRueYDdGME9c18gbjMv+BiJYeHc6xpjnAAAAAElFTkSuQmCC"/>
                                                        </svg>
                                                        <span class="visually-hidden">Media Gallery</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__media--nav__horizontal swiper d-none">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img" src="assets/img/product/small-product1.webp" alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img" src="assets/img/product/small-product2.webp" alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img" src="assets/img/product/small-product3.webp" alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img" src="assets/img/product/small-product4.webp" alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img" src="assets/img/product/small-product1.webp" alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img" src="assets/img/product/small-product2.webp" alt="product-nav-img">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper__nav--btn swiper-button-next"></div>
                                <div class="swiper__nav--btn swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="quickview__info">
                            <form action="#">
                                <h2 class="product__details--info__title h4 mb-10">BASIC MICRO DAYS MONEY BACK.</h2>
                                <div class="product__details--info__rating d-flex align-items-center mb-10">
                                    <ul class="rating product__list--rating d-flex">
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list"><span class="rating__list--text text__secondary">( 5.0)</span></li>
                                    </ul>
                                </div>
                                <div class="quantity__product--price mb-10">
                                    <span class="current__price">$278</span>
                                    <span class="price__divided"></span>
                                    <span class="old__price"> $376</span>
                                </div>
                                <p class="product__details--info__desc mb-15">Lorem ipsum dolor sit amet consectetur the are adipisicing elit. Aut numquam ullam is sequi.</p>
                                <div class="product__variant">
                                    <div class="product__variant--list mb-12">
                                        <fieldset class="variant__input--fieldset d-none">
                                            <legend class="product__variant--title mb-8">Color :</legend>
                                            <div class="variant__color d-flex">
                                                <div class="variant__color--list">
                                                    <input id="color-red1" name="color" type="radio" checked>
                                                    <label class="variant__color--value red" for="color-red1" title="Red"><img class="variant__color--value__img" src="assets/img/product/small-product1.webp" alt="variant-color-img"></label>
                                                </div>
                                                <div class="variant__color--list">
                                                    <input id="color-red2" name="color" type="radio">
                                                    <label class="variant__color--value red" for="color-red2" title="Black"><img class="variant__color--value__img" src="assets/img/product/small-product2.webp" alt="variant-color-img"></label>
                                                </div>
                                                <div class="variant__color--list">
                                                    <input id="color-red3" name="color" type="radio">
                                                    <label class="variant__color--value red" for="color-red3" title="Pink"><img class="variant__color--value__img" src="assets/img/product/small-product3.webp" alt="variant-color-img"></label>
                                                </div>
                                                <div class="variant__color--list">
                                                    <input id="color-red4" name="color" type="radio">
                                                    <label class="variant__color--value red" for="color-red4" title="Orange"><img class="variant__color--value__img" src="assets/img/product/small-product4.webp" alt="variant-color-img"></label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="product__variant--list mb-15 d-none">
                                        <fieldset class="variant__input--fieldset">
                                            <legend class="product__variant--title mb-8">Weight :</legend>
                                            <ul class="variant__size d-flex">
                                                <li class="variant__size--list">
                                                    <input id="weight1" name="weight" type="radio" checked>
                                                    <label class="variant__size--value red" for="weight1">5 kg</label>
                                                </li>
                                                <li class="variant__size--list">
                                                    <input id="weight2" name="weight" type="radio">
                                                    <label class="variant__size--value red" for="weight2">3 kg</label>
                                                </li>
                                                <li class="variant__size--list">
                                                    <input id="weight3" name="weight" type="radio">
                                                    <label class="variant__size--value red" for="weight3">2 kg</label>
                                                </li>
                                            </ul>
                                        </fieldset>
                                    </div>
                                    <div class="product__variant--list quantity d-flex align-items-center mb-15">

                                        <button class="quickview__cart--btn primary__btn" type="submit">Add To Cart</button>
                                    </div>

                                </div>
                                <div class="quickview__social ">
                                    <label class="quickview__social--title">Social Share:</label> <br>
                                    <ul class="quickview__social--wrapper mt-0 d-flex">
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank" href="https://www.facebook.com/">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524" viewBox="0 0 7.667 16.524">
                                                    <path  data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank" href="https://twitter.com/">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384" viewBox="0 0 16.489 13.384">
                                                    <path  data-name="Path 303" d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z" transform="translate(-951.23 -1140.849)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank" href="https://www.instagram.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17.497" height="17.492" viewBox="0 0 19.497 19.492">
                                                    <path  data-name="Icon awesome-instagram" d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z" transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank" href="https://www.youtube.com/">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582" viewBox="0 0 16.49 11.582">
                                                    <path  data-name="Path 321" d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z" transform="translate(-951.269 -1359.8)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Quickview Wrapper End -->
    @endsection


