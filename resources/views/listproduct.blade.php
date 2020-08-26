<div class="row">
@foreach($listProduct as $item)
    <div class="col-2">
        <div class="khung">
            <img id="hinh2" src={{$item->image}}>
            <div style="text-align: center; width: 100%;">
                <a id="textProduct" href="detail/{{$item->id}}">{{$item->name}}</a>
                <h6 style="color: red">{{$item->price}}đ</h6>
            </div>
        </div>
    </div>
@endforeach
    <div>
        {!! $listProduct->links() !!}
    </div>
</div>

