<html >
@include('components/header')
<body>
<div class="container" id ="abc">
    {{session()->put("user","")}}
    <div class="d-flex justify-content-center h-100">
        <div class="card" style="width: 40%;">
            <div class="card-header">
                <h4>Đăng nhập người quản lý</h4>
            </div>
            <div class="card-body">
                <form name ="myForm" action="profile"  method="post" id="form-abc" >
                    <div class="form-group">
                        @if($errors != "")
                            <label id="notifi"  style="color: red;width: 100%; text-align: center" ><i class="fa fa-bell" aria-hidden="true"></i> {{$errors }}</label>
                        @endif
                    </div>
                    <div class="form-group">
                        <label><i class="fa fa-user"></i></label>
                        <input placeholder="Nhập tài khoản" name="username" id="user" class="input" />
                        {{@csrf_field()}}
                    </div>
                    <div class="form-group">
                        <label><i class="fa fa-key"></i></label>
                        <input placeholder="Nhập mật khẩu" type="password" name="password" id ="pass" class="input"  />
                    </div>
                    <div class="form-group">
                        <input type="submit"  value="Đăng nhập" id="input" name ="login" onclick="return validateForm2()" class="form-control"  >
                    </div>
                </form>
                <div style="width: 100%;text-align: center">
                    <a class="delete_line" href="/register">Đăng ký mới </a>
                    <a class="delete_line" href="#" >| Quên mật khẩu</a>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>





