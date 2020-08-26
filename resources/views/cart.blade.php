@extends('main')

@section('sidebar')
    <div class="container" style="margin-top: 160px">
        @csrf
        <div id ="list">
            @include('listcart')
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $(document).on('click', '.page-link', function (event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            })
        });

        function fetch_data(page) {
            var _token = $("input[name=_token]").val();
            $.ajax({
                url:"{{route('cart.fetch')}}",
                method:"POST",
                data:{_token:_token,page: page},
                success:function (data) {
                    console.log(data);
                     $('#list').html(data)
                }
            });
        }

    </script>
@endsection

