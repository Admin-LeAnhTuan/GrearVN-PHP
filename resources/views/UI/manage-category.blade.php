@extends('clients')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/clients/css/manage.css') }}">
@endsection

@section('content')
    <div class="manage">
        <div class="manage__container container">
            <span class="text-danger">
                @if (Session::has('errors'))
                {{ Session::get('errors') }}
            @endif

            </span>

            <span class="text-success">
                @if (Session::has('success'))
                    {{ Session::get('success') }}
                @endif
            </span>

            <div class="manage__container__function">
                <a href="{{route("manage.product")}}" class="manage__container__function__item btn btn-link">Quản lý sản phẩm</a>
                <a href="{{route("manage.category")}}" class="manage__container__function__item btn btn-link">Quản lý Loại sản phẩm</a>
                <a href="{{route("auth.manager-manage")}}" class="manage__container__function__item btn btn-link">Quản lý Khách hàng</a>
                <a href="{{ route('manage.order') }}" class="manage__container__function__item btn btn-link">Quản lý
                    Hóa đơn</a>
            </div>

            <div class="manage__container__curd">
                <div style="display: flex; justify-content: right; margin: 20px;" class="manage__container__crud__contain">
                    <button class="manage__container__crud__button btn btn-primary ">Thêm</button>
                </div>

                <form action="{{ route('manage.add-category') }}" method="POST" class="manage__container__crud__form">
                    @csrf
                    @method('POST')
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="name">Tên thể loại</span>
                        </div>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Tên thể loại..." value="" aria-label="Tên thể loại..."
                            aria-describedby="name-label">
                    </div>

                    <div class="manage__container__curd__form__submit">
                        <button type="submit"class="manage__change__confirm__item btn btn-primary">Thêm</button>
                        <div class="manage__change__confirm__item manage-close-change-js  btn btn-danger">Hủy</div>
                    </div>

                </form>
            </div>

            <table class="manage__container__table">
                <thead>
                    <th>Tên thể loại</th>
                    <th>Chức năng</th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="manage__container__table__name">{{ $category->name }}</td>
                            <td><a class="manage__container__table__change btn btn-primary">Sửa</a>
                                <a class="manage__container__table__logout btn btn-danger">Xóa</a>
                            </td>
                            <input type="hidden" class="manage__container__table__id"
                                name="category__id__{{ $category->id }}" id="category__id__{{ $category->id }}"
                                value="{{ $category->id }}">
                            <div class="manage__logout">
                                <h3 class="manage__logout__title">Bạn có muốn xóa thể loại này ?</h3>
                                <h4 class="manage__logout__content"> Thể loại này sẽ biến mất vĩnh viễn</h4>
                                <div class="manage__logout__confirm">
                                    <a href="{{ route('manage.update-category', ['id' => $category->id]) }}"
                                        class="manage__logout__confirm__item btn btn-danger">Xóa</a>
                                    <a class="manage__logout__confirm__item manage-close-js  btn btn-primary">Hủy</a>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="manage__overlay"></div>
        <div class="manage__change">
            <h3 class="manage__change__title">Bạn có muốn Thay đổi thông tin</h3>
            <form class="manage__change__content" method="POST"
                action="{{ route('manage.update-category', ['id' => $category->id]) }}">
                @csrf
                @method('PUT')
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="name-label">Tên thể loại</span>
                    </div>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Tên thể loại..."
                        value="" aria-label="Tên thể loại..." aria-describedby="name-label">

                </div>
                <input type="hidden" name="id" id="id" value="">
                <div class="manage__change__confirm">
                    <button type="submit"class="manage__change__confirm__item btn btn-primary">Sửa</button>
                    <div class="manage__change__confirm__item manage-close-change-js  btn btn-primary">Hủy</div>
                </div>

            </form>
        </div>
    </div>
@endsection


@section('js')
    <script src="{{ asset('assets/clients/js/manage-category.js') }}"></script>
@endsection
