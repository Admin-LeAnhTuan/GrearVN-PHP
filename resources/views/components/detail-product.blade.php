<div class="detail">
    <div class="detail__container container">
        <div class="detail__container__left">
            <img src="{{ $product->thumbnail }}" alt="">
        </div>

        <div class="detail__container__right">
            <div class="detail__container__right__title">
                {{ $product->title }}
            </div>

            <div class="detail__container__right__promotion">
                <div class="detail__container__right__promotion__title">
                    Khuyến mãi:
                </div>

                <div class="detail__container__right__promotion__list">
                    <div class="detail__container__right__promotion__list__item">
                        + Mua thêm RAM giảm ngay 500,000đ
                    </div>

                    <div class="detail__container__right__promotion__list__item">
                        + Nâng cấp SSD giảm ngay 300.000đ
                    </div>

                    <div class="detail__container__right__promotion__list__item">
                        + Mua Ghế E-Dra tặng Bàn E-Dra trị giá 2,390,000đ.
                    </div>

                    <div class="detail__container__right__promotion__list__item">
                        + Giảm ngay 100.000đ khi mua chuột Logitech G203, G102, TUF Gaming M3 kèm PC.
                    </div>
                </div>
            </div>
            <div class="detail__container__right__promotion">
                <div class="detail__container__right__promotion__title">
                    ƯU ĐÃI KHI MUA KÈM PC TẠI GEARVN
                </div>

                <div class="detail__container__right__promotion__list">
                    <div class="detail__container__right__promotion__list__item">
                        ⭐ Giảm ngay 100,000đ khi mua thêm màn hình máy tính.
                    </div>

                    <div class="detail__container__right__promotion__list__item">
                        ⭐ Giảm ngay 150,000đ khi mua thêm ghế.
                    </div>

                    <div class="detail__container__right__promotion__list__item">
                        ⭐ Giảm ngay 50,000đ mỗi loại khi mua thêm chuột, phím, tai nghe.
                    </div>
                </div>
            </div>


            <div class="detail__container__right__price">
                <div class="detail__container__right__price__contain">
                    <div class="detail__container__right__price__contain__title">
                        Giá Cũ:
                    </div>
                    <div class="detail__container__right__price__contain__money old money">
                        {{ number_format($product->price, 0, ',', ',') }}
                    </div>

                </div>

                <div class="detail__container__right__price__contain">
                    <div class="detail__container__right__price__contain__title">
                        Giá Mới:
                    </div>
                    <div class="detail__container__right__price__contain__money new money">
                        {{ number_format($product->price - ($product->price / 100) * $product->discount, 0, ',', ',') }}
                    </div>

                </div>

            </div>

            <div class="detail__container__right__button">
                <form action="{{route('products.order', $product->title)}}" method="post">
                    @method("post")
                    <input type="hidden" name="title" value="{{$product->title}}">
                    @csrf
                    <button type="submit" class="detail__container__right__button__href">Đặt hàng</button>
                </form>
            </div>
        </div>

    </div>

</div>
