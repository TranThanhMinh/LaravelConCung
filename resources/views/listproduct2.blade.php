<div class="row">
    @foreach($listProduct as $item)
        <div class="col-2">
            <div class="khung2">
                <img id="hinh2" src={{$item->image}}>
                <div style="text-align: center; width: 100%;">
                    <h5>{{$item->name}}</h5>
                    <h6 style="color: red">{{$item->price}}đ</h6>
                </div>
            </div>
        </div>
    @endforeach
        <div>
            {!! $listProduct->links() !!}
        </div>
</div>
