@extends('main')

@section('sidebar')
<div class="container" style="margin-top: 150px;background-color: white">
        <div class="row" >
            <div class="col-3 category" >
                <ul class="navbar-nav navbar-brand">
                    <li class="line"><a href="#">Sản phẩm</a></li>
                    <li class="line"><a href="#">Sản phẩm</a></li>
                    <li class="line"><a href="#">Sản phẩm</a></li>
                    <li class="line"><a href="#">Sản phẩm</a></li>
                    <li class="line"><a href="#">Sản phẩm</a></li>
                    <li class="line"><a href="#">Sản phẩm</a></li>
                </ul>

            </div>
            <div class="col-9">
                    <img style="width: 100%; height: 400px;" src="https://anhdepfree.com/wp-content/uploads/2018/08/hinh-nen-dep-nhat-2018.jpg" alt="Natural" />
            </div>
        </div>
        <div style="margin-top: 50px">
            <table class="table table-dark">
                <thead>
                    <th>
                        Hình ảnh
                    </th>
                    <th>
                        Mã sản phẩm
                    </th>
                    <th>
                        Tên sản phẩm
                    </th>
                    <th>
                        Giá sản phẩm
                    </th>
                    <th>
                        Loại sản phẩm
                    </th>
                </thead>
                <tbody>
                  @foreach($listProduct as $item)
                    <tr>
                        <td> <img src="{{$item->image}}" style="width: 50px;height: 50px;"></td>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}}</td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            @foreach($listProduct as $item)
                <div class="col-6">
                    <div id="rel">
                        <img src="{{$item->image}}" class="hinh">
                        <div id="rel2"><h3 id="color">{{$item->name}}</h3></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="center_menu">

    @include('components/menu_fix')</div>

@endsection


