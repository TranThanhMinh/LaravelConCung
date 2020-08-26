@extends('main')
@section('sidebar')
    <script type="text/javascript" >
        $(document).ready(function () {
            load()
            $(document).on('click','#btnSearch',function (event) {
                event.preventDefault();
                searchPosition();
            })
        })
    </script>
    <div class="container" style="margin-top: 160px">
        <div class="row">
            <div class="col-4 card"  style="background-color: #1c7430;">
                <form action="/" method="post" class="form-group">
                    <div class="form-group">
                        <input class="form-control" type="hidden" id="id" name="id" placeholder="nhập tên"/>
                    </div>

                    <div class="form-group">
                        <label id="namedisplay">Tên :</label>
                        <input class="form-control" type="text" id="name" name="name" placeholder="nhập tên"/>
                    </div>

                    <div>
                        <label>Vị trí :</label>
                        <select id="position"  class="form-control">
                            <option>Chọn vị trí?</option>
                            <option>Tech Leader</option>
                            <option>Dev</option>
                            <option>SQA</option>
                            <option>PQA</option>
                            <option>Saler</option>
                            <option>PM</option>
                            <option>Bres</option>
                        </select>
                    </div>

                    <div>
                        <label>Số điện thoại :</label>
                        <input  class="form-control" type="text" id="phone" name="phone" placeholder="nhập Số điện thoại"/>
                    </div>

                    <div >
                        <label>Email :</label>
                        <input class="form-control" type="text" id="email" name="email" placeholder="nhập email"/>
                    </div>

                    <div>
                        <label>Ngôn ngữ :</label>
                        <select id="language"  class="form-control" name="Chọn ngôn ngữ?">
                            <option>Chọn ngôn ngữ?</option>
                            <option>Java</option>
                            <option>Kotlin</option>
                            <option>Swift</option>
                            <option>C++</option>
                            <option>Python</option>
                            <option>Php</option>
                            <option>C#</option>
                        </select>

                    </div>

                    <div>
                        <input c style="margin-top: 10px;" type="button" onclick="return checkInput()" value="Gửi"/>
                    </div>

                </form>
            </div>
            <div class="col-8">
                <input type="text" id="search" oninput="return addTextChange()" placeholder="tìm kiếm theo vị trí"/><input type="button" id="btnSearch" value="tìm"/>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Vị trí</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Ngôn ngữ</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    @csrf
                    <tbody id="tbody-recruitment">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

