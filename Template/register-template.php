<?
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST["submit"])){
            $email = $_POST["email"];
            $name = $_POST["name"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];
            $password = $_POST["password"];
            $confirmpassword = $_POST["confirmpassword"];
            $duplicate = $db->con->query("SELECT * FROM `user` WHERE email = '$email'");
            if(mysqli_num_rows($duplicate) > 0){
              echo
              "<script> alert('Email đã được đăng ký trước đó!'); </script>";
            } else{
                if($password == $confirmpassword){
                  $query = "INSERT INTO `user` (`email`, `full_name`,`phone_number`,`address`,`password`)
                  VALUES('$email','$name','$phone','$address','$password')";
                  $db->con->query($query);
                  echo
                  "<script> alert('Đăng ký thành công!'); </script>";
                }
                else{
                  echo
                  "<script> alert('Mật khẩu không khớp!'); </script>";
                }
              }
        }
    }
?>

<section id="register" class="my-5 pb-5">
    <div class="container-fluid w-25 p-0">
            <div class="text-center">
                <p class="font-size-20"><b>Đăng ký tài khoản mới</b></p>
            </div>
            <form method="post">
                <div class="m-2 form-row">
                    <label>Email</label> <br>
                    <input class="form-input card" style="width:100%" type="email" name="email" id="email" required>
                </div>
                <div class="m-2 form-row">
                    <label>Tên</label> <br>
                    <input class="form-input card" style="width:100%" type="text" name="name" id="name" required>
                </div>
                <div class="m-2 form-row">            
                    <label>Số điện thoại</label> <br>
                    <input class="form-input card" style="width:100%" type="text" name="phone" id="phone" required>
                </div>
                <div class="m-2 form-row">            
                    <label>Địa chỉ</label> <br>
                    <input class="form-input card" style="width:100%" type="text" name="address" id="address" required>
                </div>
                <div class="m-2 form-row">            
                    <label>Mật khẩu</label> <br>
                    <input class="form-input card" style="width:100%" type="password" name="password" id="password" required>
                </div>
                <div class="m-2 form-row">            
                    <label>Nhập lại mật khẩu</label> <br>
                    <input class="form-input card" style="width:100%" type="password" name="confirmpassword" id="confirmpassword" required>
                </div>
                <div class="col-12 form-row">
                    <input class="form-input card" style="padding: 5px 200px; margin: 2px 5px; background-color:#d81616; color:white" type="submit" value="Đăng ký">
                </div>
            </form>
    </div>
</section>