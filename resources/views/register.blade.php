<html >
@include('components/header')
<body>
<div class="container" id ="abc">
    {{session()->put("user","")}}
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h4>Đăng ký tài khoản</h4>
            </div>
            <div class="card-body">
                <form name ="myForm" action="adduser"  method="post" >
                    <div class="form-group">
                        <label><i class="fa fa-user"></i></label>
                        <input placeholder="Nhập tài khoản" name="username" id="user"  class="input"/>
                        {{@csrf_field()}}
                    </div>
                    <div class="form-group">
                        <label><i class="fa fa-key"></i></label>
                        <input placeholder="Nhập mật khẩu" type="password" id="pass1" name="password" class="input"   />
                    </div>
                    <div class="form-group">
                        <label><i class="fa fa-key"></i></label>
                        <input placeholder="Nhập lại mật khẩu" type="password" id="pass2" name="password2" class="input"   />
                    </div>
                    <div class="form-group">
                        <input type="submit"  value="Đăng ký" onclick="return checkPass()" name ="login" style="float: left" >
                        <input type="submit"  value="Hủy"  name ="login" onclick="return toLogin()" >
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>
</body>
</html>





