<div class="cart">
    <div class="cart__container container">
        <div class="cart__container__header">
            Giỏ hàng
        </div>

        <span class="text-success">
            @if (Session::has('success'))
                {{ Session::get('success') }}
            @endif
        </span>
        @if (count($listProducts) != 0)
            <form method="POST" action="{{ route('order.pay') }}">
                @csrf
                @method("POST")
                <table class="cart__container__table">
                    <thead>
                        <th>Sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá tiền</th>
                        <th>Xóa</th>
                    </thead>

                    <tbody>
                        @foreach ($listProducts as $product)
                            <?php
                            $total += $product->price - ($product->price / 100) * $product->discount;
                            ?>
                            <tr>
                                <td><img src="{{ $product->thumbnail }}" alt=""></td>
                                <td><a style="color: #428bca"
                                        href="{{ route('products.detail', ['title' => $product->title]) }}"><strong>{{ $product->title }}</strong></a>
                                </td>
                                <td><input class="disable" type="number" name="amount" value="1"></td>
                                <td><strong>
                                        {{ number_format($product->price - ($product->price / 100) * $product->discount, 0, ',', ',') }}
                                    </strong>
                                </td>

                                <td>
                                    <a href="{{ route('cart.delete-id', ['id' => $product->id]) }}">Xóa</a>
                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            <td style="font-size: 24px" colspan="3"><strong>Tổng tiền</strong></td>
                            <td style="font-size: 24px" class="money" colspan="2">
                                <strong>{{ number_format($total, 0, ',', ',') }}</strong>
                            </td>
                        </tr>
                        <tr>
                        <td colspan="5">
                            <textarea textarea name="note" id="note" rows="2" placeholder="Ghi chú"></textarea>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="cart__container__overlay"></div>
                <div class="cart__container__confirm">
                    <h3 class="cart__container__confirm__title">Mời bạn kiểm tra lại thông tin</h3>


                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="email-label">Email</span>
                        </div>
                        <input type="text" class="form-control disable" id="email" name="email"
                            placeholder="Email..." value="{{ $user->email }}" aria-label="Email..."
                            aria-describedby="email-label">

                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="name-label">Họ và tên</span>
                        </div>
                        <input type="text" class="form-control disable" id="name" name="name"
                            placeholder="Họ và tên..." value="{{ $user->name }}" aria-label="Họ và tên..."
                            aria-describedby="name-label">

                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="name-label">Số điện thoại</span>
                        </div>
                        <input type="text" class="form-control disable" id="numberphone" name="numberphone"
                            placeholder="Họ và tên..." value="{{ $user->numberphone }}" aria-label="Số điện thoại..."
                            aria-describedby="name-label">

                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="name-label">Địa chỉ</span>
                        </div>
                        <input type="text" class="form-control disable" id="address" name="address"
                            placeholder="Họ và tên..." value="{{ $user->address }}" aria-label="Địa chỉ..."
                            aria-describedby="name-label">

                    </div>
                    <div class="cart__container__confirm__contain">
                        <button type="submit" class="cart__container__confirm__contain__pay btn btn-primary">Xác
                            nhận</button>
                        <a class="cart__container__confirm__contain__close cart-close-js  btn btn-danger">Hủy</a>
                    </div>
                </div>

                <div class="cart__container__button">
                    <div class="cart__container__button__pay">
                        Thanh toán
                    </div>

                </div>

                <input type="hidden" name="total" value="{{$total}}">
            </form>
        @else
            <h2 style="display: flex;">Bạn chưa mua sản phẩm nào của shop chúng tôi :(. Về <a style=" margin-left: 8px"
                    href="{{ route('home') }}"><strong>trang chủ</strong></a></h2>
        @endif
    </div>
</div>
