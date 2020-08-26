@extends('main')
@section('sidebar')

    <div class="container" style="margin-top: 180px">
        @foreach($detail as $item)
            <div class="row">
                <div class="col-4">
                    <img style="width: 100%; -moz-hyphens: none;-ms-hyphens: none; -webkit-hyphens: none;hyphens: none;" src="{{$item->image}}"/>
                </div>
                <div class="col-5">
                    <h4>{{$item->name}}</h4>
                    <span style="color:#4e555b;text-decoration: line-through;">{{$item->price}}đ </span> <span style="color:#c8cbcf;font-size: 25px;color: red;">{{$item->price}}đ</span>
                    <div class="borderInfoDetail">
                        <li>Hãng Sản xuất: Sharp</li>
                        <li>Bảo hành: 1 năm chính hãng</li>
                        <li>Diện tích phòng: 21m2</li>
                        <li>Công nghệ: plasma cluster ion</li>
                        <li>Đèn báo thay thế màng lọc: Có</li>
                        <li>Tuổi thọ bộ lọc: 2 năm</li>
                    </div>
                    <div>
                        <input type="button"  value = "-" onclick="return  changeValue(this)">
                        <input type="text" value="1" value ="value" id ="demo" style="width: 100px;text-align: center">
                        <input type="button"  value = "+" onclick="return changeValue(this)">
                    </div>
                </div>
            </div>

        @endforeach
    </div>


    <script type="text/javascript">
        function changeValue(a) {
           let current = document.getElementById("demo").value;
           if(a.value==="+")
             document.getElementById("demo").value=++current;
            else  if(a.value==="-" && current > 0)
               document.getElementById("demo").value=--current;
        }
    </script>
@endsection
