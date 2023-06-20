{{-- {{dd($product_attributes[1][0])}} --}}

<header class="header">
    <div class="header__container container">
        <div class="header__container__logo">
            <a href="{{ route('home') }}">

                <img src="{{asset('./assets/clients/images/logo.png')}}" alt=""
                    class="header__container__logo__image header__desktop">
            </a>
            <div class="header__container__logo__menu">
                <i class="fa-solid fa-bars header__container__logo__menu__icon"></i>

            </div>

            <a href="{{ route('home') }}" class="header__container__href">
                <img src="https://theme.hstatic.net/1000026716/1000440777/14/logo-icon-01.svg?v=28822" alt=""
                    class="header__container__mobile__logo">
            </a>
        </div>
        <div class="header__container__search">
            <form action="{{ route('search.keyword') }}" method="GET" class="header__container__search__form">
                @csrf
                @method("GET")
                <input placeholder="Nhập mã hoặc tên sản phẩm..." type="text" id="keyword "name="keyword"
                    class="header__container__search__form__input">
                <button class="header__container__search__form__button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>

        <div class="header__container__feature">
            <div class="header__container__feature__list">
                @if ($user)
                    <a href="{{ route('auth.user-profile') }}" class="header__container__feature__list__item">
                        <i class="fa-solid fa-user"></i>
                        <p>
                            Trang cá nhân

                        </p>
                    </a>

                    @if (Session()->has('admin'))
                        <a href="{{ route('auth.manager-manage') }}" class="header__container__feature__list__item">
                            <i class="fa-solid fa-list-check"></i>
                            <p>
                                Quản lí
                            </p>
                        </a>
                    @endif
                @else
                    <a href="{{ route('login.registration') }}" class="header__container__feature__list__item  ">
                        <i class="fa-solid fa-registered"></i>
                        <p>
                            Đăng kí

                        </p>
                    </a>
                    <a href="{{ route('login.index') }}" class="header__container__feature__list__item  ">
                        <i class="fa-solid fa-circle-user"></i>
                        <p>
                            Đăng nhập

                        </p>
                    </a>
                @endif

                <a href="{{ route('cart.index') }}"
                    class="header__container__feature__list__item header__container__feature__list__item-mobile">
                    <i class="fa-solid fa-cart-shopping fa-flip-horizontal"></i>
                    @if (Session()->has('listProductId'))
                        <span
                            class="header__container__feature__list__item__count">{{ count(Session()->get('listProductId')) }}</span>
                    @endif
                    <p>
                        Giỏ hàng
                    </p>
                </a>


                <a href="/" class="header__container__feature__list__item  ">
                    <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                    <p>
                        Lịch sử mua hàng
                    </p>
                </a>


            </div>
        </div>
    </div>

    <hr>
    <div class="header__function container">
        <div class="header__function__categories">
            <div class="header__function__categories__content">
                <i class="fa-solid fa-bars"></i>
                <h6 class="header__function__categories__content__text">
                    Danh mục sản phẩm
                </h6>
            </div>

            <div class="header__function__categories__menu">
                <div class="header__function__categories__menu__list">
                    @foreach ($categories as $category)
                        <a href="{{ route('search.category-name', ['category' => $category->name]) }}"
                            class="header__function__categories__menu__list__item">
                            <div class="header__function__categories__menu__list__item__content">
                                <i class="fa-solid fa-laptop"></i>
                                <p class="header__function__categories__menu__list__item__content__text">
                                    {{ $category->name }}
                                </p>

                                <div class="header__function__categories__menu__list__item__content__icon">
                                    <i class="fa-solid fa-chevron-right "></i>
                                </div>
                            </div>
                            {{-- <div class="header__function__categories__menu__list__item__submenu">
                                @foreach ($category->attribute_details->groupBy('property_id')->all() as $property)
                                    <div class="header__function__categories__menu__list__item__submenu__subcontent">

                                        <div
                                            class="header__function__categories__menu__list__item__submenu__subcontent__title">
                                            {{ $property[0]->properties->name }}
                                            <div
                                                class="header__function__categories__menu__list__item__submenu__subcontent__list">
                                                @foreach ($category->attribute_details->groupBy('attribute_id')->all() as $attribute)
                                                    <a href="{{ route('search.attribute', ['attribute' => $attribute[0]->attributes->name]) }}"
                                                        class="header__function__categories__menu__list__item__submenu__subcontent__list__item">
                                                        {{ $attribute[0]->attributes->name }}
                                                    </a>
                                                @endforeach

                                            </div>
                                        </div>


                                    </div>
                                @endforeach
                            </div> --}}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="header__function__guide">
            <div class="header__function__guide__mobile">
                Thông tin
            </div>
            <a href="" class="header__function__guide__item">
                <i class="fa-solid fa-hand-holding-dollar"></i>
                Hướng dẫn thanh toán
            </a>

            <a href="" class="header__function__guide__item">
                <i class="fa-solid fa-hand-holding-dollar"></i>
                Hướng dẫn trả góp
            </a>

            <a href="" class="header__function__guide__item">
                <i class="fa-solid fa-toolbox"></i>
                Chính sách bảo hành
            </a>

            <a href="" class="header__function__guide__item">
                <i class="fa-solid fa-truck-fast"></i>
                Chính sách vận chuyển
            </a>
        </div>
    </div>

    {{-- <div class="header__mobile__overlay"></div>
    <div class="header__mobile">
        <div class="header__mobile__container container">
            <div class="header__mobile__container__title">
                Tạ Thạch Lỗi
            </div>

            <div class="header__mobile__container__login">
                <a href="/" class="header__mobile__container__login__register">
                    <i class="fa-solid fa-user"></i>
                    Đăng kí</a>


                <a href="/" class="header__mobile__container__login__log">
                    <i class="fa-solid fa-right-to-bracket"></i>Đăng nhập</a>
            </div>

            <div class="header__mobile__container__categories">
                <div class="header__mobile__container__categories__title">
                    Danh mục
                </div>

                @foreach ($categories as $category)
                    <div class="header__mobile__container__categories__category">
                        <div class="header__mobile__container__categories__category__content">
                            <div class="header__mobile__container__categories__category__content__container">
                                <div class="header__mobile__container__categories__category__text__title">
                                    <i class="fas fa-tv"></i>
                                    {{ $category->name }}
                                </div>
                                <i
                                    class="fa-solid fa-chevron-right header__mobile__container__categories__category__content__container__icon"></i>
                            </div>
                            <div class="header__mobile__container__categories__category__content__menu">
                                @foreach ($category->attribute_details->groupBy('property_id')->all() as $property)
                                    <div class="header__mobile__container__categories__category__content__menu__item">
                                        <div
                                            class="header__mobile__container__categories__category__content__menu__item__subcontent">
                                            <div
                                                class="header__mobile__container__categories__category__content__menu__item__subcontent__title">
                                                {{ $property[0]->properties->name }}
                                                <i class="fas fa-caret-down"></i>

                                            </div>

                                            <div
                                                class="header__mobile__container__categories__category__content__menu__item__subcontent__list">
                                                @foreach ($category->attribute_details->groupBy('attribute_id')->all() as $attribute)
                                                    <a href="{{ route('search.attribute', ['attribute' => $attribute[0]->attributes->name]) }}"
                                                        class="header__function__categories__menu__list__item__submenu__subcontent__list__item">
                                                        {{ $attribute[0]->attributes->name }}
                                                    </a>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


            <div class="header__mobile__container__information">
                <div class="header__mobile__container__information__title">
                    Thông tin
                </div>

                <div class="header__mobile__container__information__list">
                    <a href="/" class="header__mobile__container__information__list__item">
                        <i class="fa-solid fa-phone"></i>
                        <div class="header__mobile__container__information__list__item__content">
                            123456789
                        </div>
                    </a>

                    <a href="/" class="header__mobile__container__information__list__item">
                        <i class="fa-brands fa-facebook-messenger"></i>
                        <div class="header__mobile__container__information__list__item__content">
                            Tư vấn mua hàng
                        </div>
                    </a>

                    <a href="/" class="header__mobile__container__information__list__item">
                        <i class="fa-solid fa-gift"></i>
                        <div class="header__mobile__container__information__list__item__content">
                            Tổng hợp khuyến mãi
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
</header>
