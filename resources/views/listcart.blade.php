<table class="table">
    <thead>
    <th>Hình ảnh</th>
    <th>Tên sản phẩm</th>
    <th>Giá cả</th>
    <th>Số lượng</th>
    <th></th>
    </thead>
    <tbody>
    @foreach($list as $item)
        <tr>
            <td> <img src="{{$item->image}}" style="width: 50px;height: 50px;"></td>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->number}}</td>
            <td><a href="#"><i class="fa fa-remove"></i></a></td>
        </tr>
    @endforeach
    {{--<tr>
        @foreach($total as $item)
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="color: red">Tổng cộng: {{$item-> total}}đ</td>
        @endforeach
    </tr>--}}
    </tbody>
</table>
{{$list->links()}}
