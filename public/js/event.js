function validateForm2() {
    let user = document.getElementById('user').value
    let pass = document.getElementById('pass').value

    if (user == "") {
        alert("Name must be filled out user");
        return false;
    }else if(pass == ""){
        alert("Name must be filled out pass");
        return false;
    }

}

function toLogin() {
    document.location.href = "/";
    return false
}

function checkPass() {
    let user = document.getElementById('user').value
    let pass1 = document.getElementById('pass1').value
    let pass2 = document.getElementById('pass2').value
    if(pass1 =="" ){
        alert("Nhập tên tài khoản");
        return false;
    }else  if(pass1 =="" || pass2 =="" ){
        alert("Nhập mật khẩu");
        return false;
    } else if(pass1 != pass2){
        alert("Mật khẩu không trùng nhau");
        return false;
    }
}


function addRectuitment(id,name,position,phone,email,language){

    $.ajax({
        url:"/api/addrecruitment",
        type:"POST",
        dataType:"json",
        data:{id:id,name:name,position:position,phone:phone,email:email,language:language},
        success:function (data, status, xhr) {
            console.log(data);
            if (data.statusCode === 200) {
                load();

            }
        }

    })
}

function addTextChange() {
    var timeout = null;
    if(timeout!=null){
        clearTimeout(timeout)
    }
    timeout = setTimeout(function () {
        searchPosition();
    },2000);
}

function searchPosition(){
    let search = document.getElementById('search').value
    if(search == ""){
        load()
    }else {
        $.ajax({
            url:"/api/search",
            type:"POST",
            dataType:"json",
            data:{search:search},
            success:function (data) {
                console.log(data)
                if(data.statusCode==="200"){
                    viewdata(data.data);
                    // alert(data.msg);
                }
            }
        });
    }
}

function checkInput(){
    let id = document.getElementById('id').value
    let name = document.getElementById('name').value
    let position = document.getElementById('position').value
    let phone = document.getElementById('phone').value
    let email = document.getElementById('email').value
    let language = document.getElementById('language').value

    if(name == ""){
        alert('Vui lòng nhập tên')
        return false
    } else if(position == ""){
        alert('Vui lòng nhập ')
        return false
    } else if(phone == ""){
        alert('Vui lòng nhập ')
        return false
    } else if(email == ""){
        alert('Vui lòng nhập ')
        return false
    } else if(language == ""){
        alert('Vui lòng nhập ')
        return false
    }
    else{
        addRectuitment(id,name,position,phone,email,language)
    }
}



function load(){
    document.getElementById('id').value = 0
    $.ajax({
        url:"/api/recruitment",
        type:"GET",
        dataType:"json",
        success:function (data) {
            console.log(data);
            viewdata(data.data);
        }

    })
}




function viewdata(data) {
    showRecruitment('0','','','','','')
    $('#tbody-recruitment').html('');
    $.each(data,function (i,v) {
        $('#tbody-recruitment').append(
            `<tr>
                        <td>${v.name}</td>
                        <td>${v.postion}</td>
                        <td>${v.phone}</td>
                        <td>${v.email}</td>
                        <td>${v.language}</td>
                         <td><a id = "edit"  href="javascript:showRecruitment('${v.id}','${v.name}','${v.postion}','${v.phone}','${v.email}','${v.language}')" ><i class="fa fa-edit" ></i></a></td>
                        <td><a id = "remove"  href="javascript:deleteRecruitment('${v.id}')" ><i class="fa fa-remove" ></i></a></td>

                    </tr>`
        )
    });
}


function deleteRecruitment(id){
   $.ajax({
       url:"api/deleterecruitment",
       type:"POST",
       dataType:"json",
       data:{id:id},
       success:function (data) {
           if(data.statusCode === 2000){
               load()
           }
       }
   });
}

function showRecruitment(id_,name_,position_,phone_,email_,language_) {
    let id = document.getElementById('id')
    let name = document.getElementById('name')
    let position = document.getElementById('position')
    let phone = document.getElementById('phone')
    let email = document.getElementById('email')
    let language = document.getElementById('language')

    id.value = id_;
    name.value = name_;
    position.value = position_;
    phone.value = phone_;
    email.value = email_;
    language.value = language_;
}


