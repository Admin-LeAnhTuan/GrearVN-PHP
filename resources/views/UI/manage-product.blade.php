@extends('clients')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/clients/css/manage.css') }}">
@endsection

@section('content')
    <div class="manage">
        <div class="manage__container container">
            <span class="text-danger">
                @error('title')
                    {{ $message }}
                @enderror

                @error('category_id')
                    {{ $message }}
                @enderror

                
                @error('price')
                    {{ $message }}
                @enderror

                
                @error('thumbnail')
                    {{ $message }}
                @enderror

                
                @error('description')
                    {{ $message }}
                @enderror
            </span>

            <span class="text-success">
                @if (Session::has('success'))
                    {{ Session::get('success') }}
                @endif
            </span>

            <div class="manage__container__function">
                <a href="{{ route('manage.product') }}" class="manage__container__function__item btn btn-link">Quản lý sản
                    phẩm</a>
                <a href="{{ route('manage.category') }}" class="manage__container__function__item btn btn-link">Quản lý Loại
                    sản phẩm</a>
                <a href="{{ route('auth.manager-manage') }}" class="manage__container__function__item btn btn-link">Quản lý
                    Khách hàng</a>
                <a href="{{ route('manage.order') }}" class="manage__container__function__item btn btn-link">Quản lý
                    Hóa đơn</a>
            </div>


            <div class="manage__container__curd">
                <div style="display: flex; justify-content: right; margin: 20px;" class="manage__container__crud__contain">
                    <button class="manage__container__crud__button btn btn-primary ">Thêm</button>
                </div>

                <form action="{{ route('manage.add-product') }}" method="POST" class="manage__container__crud__form">
                    @csrf
                    @method('POST')
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" for="title"><strong>Tên sản phẩm</strong></span>
                        </div>
                        <input type="text" class="form-control" id="title" name="title"
                            placeholder="Tên sản phẩm..." value="" aria-label="Tên sản phẩm..."
                            aria-describedby="name-label">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" for="category_id"><strong>Tên Thể loại</strong></span>
                        </div>
                        <select class="form-select" id="category_id" name="category_id" aria-label="Default select example">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" for="price"><strong>Gía tiền</strong></span>
                        </div>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Gía tiền..."
                            value="0" aria-label="Gía tiền..." aria-describedby="name-label">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" for="thumbnail"><strong>Đường dẫn hình ảnh</strong></span>
                        </div>
                        <input type="text" class="form-control" id="thumbnail" name="thumbnail"
                            placeholder="Đường dẫn hình ảnh..." value="" aria-label="Đường dẫn hình ảnh..."
                            aria-describedby="name-label">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" for="discount"><strong>% giảm giá</strong></span>
                        </div>
                        <input type="text" class="form-control" id="discount" name="discount"
                            placeholder="% giảm giá..." value="" aria-label="% giảm giá..."
                            aria-describedby="name-label">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" for="description"><strong>Miêu tả</strong></span>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" name="description" id="description" placeholder="Miêu tả sản phẩm ...."
                                style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Miêu tả sản phẩm</label>
                        </div>
                    </div>

                    <div class="manage__container__curd__form__submit">
                        <button type="submit"class="manage__change__confirm__item btn btn-primary">Thêm</button>
                        <div class="manage__change__confirm__item manage-close-change-js  btn btn-danger">Hủy</div>
                    </div>
                </form>
            </div>

            <table class="manage__container__table">
                <thead>
                    <th>Tên sản phẩm</th>
                    <th>Thể loại</th>
                    <th>Giá tiền</th>
                    <th>Hình ảnh</th>
                    <th>Giảm giá</th>
                    <th>Mô tả</th>
                    <th>Chức năng</th>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        @if ($product->deleted_at == null)
                            <tr>
                                <td class="manage__container__table__title">{{ $product->title }}</td>
                                <td class="manage__container__table__category">{{ $product->categories->name }}</td>
                                <td class="manage__container__table__price">
                                    {{ number_format($product->price, 0, ',', ',') }}</td>
                                <td><img class="manage__container__table__thumbnail" src="{{ $product->thumbnail }}"
                                        alt=""></td>
                                <td class="manage__container__table__discount">{{ $product->discount }}</td>
                                <td class="manage__container__table__description">{{ $product->description }}</td>

                                <td><a class="manage__container__table__change btn btn-primary">Sửa</a>
                                    <a class="manage__container__table__logout btn btn-danger">Xóa</a>
                                </td>
                                <input type="hidden" class="manage__container__table__id"
                                    name="user__id__{{ $product->id }}" id="user__id__{{ $product->id }}"
                                    value="{{ $product->id }}">
                                <div class="manage__logout">
                                    <h3 class="manage__logout__title">Bạn có muốn xóa sản phẩm này ?</h3>
                                    <h4 class="manage__logout__content">Sản phẩm này sẽ biến mất vĩnh viễn</h4>
                                    <div class="manage__logout__confirm">
                                        <a href="{{ route('manage.delete-product', ['id' => $product->id]) }}"
                                            class="manage__logout__confirm__item btn btn-danger">Xóa</a>
                                        <a class="manage__logout__confirm__item manage-close-js  btn btn-primary">Hủy</a>
                                    </div>
                                </div>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>

            {{ $products->links() }}
        </div>
        <div class="manage__overlay"></div>
        <div class="manage__change">
            <h3 class="manage__change__title">Bạn có muốn Thay đổi thông tin</h3>
            <form action="{{ route('manage.update-product') }}" method="POST" class="">
                @csrf
                @method('PUT')
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="title"><strong>Tên sản phẩm</strong></span>
                    </div>
                    <input type="text" class="form-control" id="title_c" name="title"
                        placeholder="Tên sản phẩm..." value="" aria-label="Tên sản phẩm..."
                        aria-describedby="name-label">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="category_id"><strong>Tên Thể loại</strong></span>
                    </div>
                    <select class="form-select" id="category_id_c" name="category_id"
                        aria-label="Default select example">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="price"><strong>Gía tiền</strong></span>
                    </div>
                    <input type="number" class="form-control" id="price_c" name="price" placeholder="Gía tiền..."
                        value="0" aria-label="Gía tiền..." aria-describedby="name-label">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="thumbnail"><strong>Đường dẫn hình ảnh</strong></span>
                    </div>
                    <input type="text" class="form-control" id="thumbnail_c" name="thumbnail"
                        placeholder="Đường dẫn hình ảnh..." value="" aria-label="Đường dẫn hình ảnh..."
                        aria-describedby="name-label">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="discount"><strong>% giảm giá</strong></span>
                    </div>
                    <input type="text" class="form-control" id="discount_c" name="discount"
                        placeholder="% giảm giá..." value="" aria-label="% giảm giá..."
                        aria-describedby="name-label">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="description"><strong>Miêu tả</strong></span>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" name="description" id="description_c" placeholder="Miêu tả sản phẩm ...."
                            style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Miêu tả sản phẩm</label>
                    </div>
                </div>

                <input type="hidden" name="id" id="id" value="">


                <div class="manage__container__curd__form__submit">
                    <button type="submit"class="manage__change__confirm__item btn btn-primary">Sửa</button>
                    <div class="manage__change__confirm__item manage-close-change-js  btn btn-danger">Hủy</div>
                </div>

            </form>
        </div>
    </div>
@endsection


@section('js')
    <script src="{{ asset('assets/clients/js/manage-product.js') }}"></script>
@endsection
