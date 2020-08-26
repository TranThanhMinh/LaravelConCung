@extends('main')

@section('sidebar')
    <script type="text/javascript">
        $(document).ready(function () {
            getData();

            $(document).on('click', '#btnReload', function(e) {
                e.preventDefault();
                getData();
            });

        });

        function getData() {
            $.ajax({
                url: "/api/news",
                type: 'GET',
                dataType: 'json',
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                success: function(data) {
                    $('#tbody-news').html('');
                    $.each(data, function(index, v) {
                        $('#tbody-news').append(
                            `<tr>
                            <td>${v.id_news}<td>
                            <td>${v.title_news}<td>
                            <td>${v.descriptipn}<td>
                            <td>${v.image}<td>
                        </tr>`
                        );
                    });
                }
            });
        };
    </script>
    <div class="container" style="margin-top: 160px">
        @csrf
        <div id ="list">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>description</th>
                        <th>content</th>
                    </tr>
                </thead>
                <tbody id="tbody-news"></tbody>
            </table>
            <button type="button" id="btnReload">Reload</button>
        </div>


    </div>
@endsection

