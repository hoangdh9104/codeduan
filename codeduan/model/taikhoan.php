<?php
    session_start();
    
    //dang ky
    function insert_taikhoan($email,$user,$pass){
        $sql="INSERT INTO taikhoan ( email,user, pass) VALUES ( '$email', '$user','$pass'); ";
        pdo_execute($sql);
    }

    function dangnhap($user,$pass) {
        $sql="SELECT * FROM taikhoan WHERE user='$user' and pass='$pass'";
        $taikhoan = pdo_query_one($sql);

        if ($taikhoan != false) {
            $_SESSION['user'] = $taikhoan;

        } else {
            return "Sai thông tin";
        }
    }


    function dangxuat() {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
    }
    function checkemail($email){
        $sql="select * from taikhoan where email='".$email."'";
        $checkmail=pdo_query_one($sql);
        return $checkmail;
    }
    function loadall_taikhoan(){
        $sql="select * from taikhoan order by id asc";
        $listtaikhoan=pdo_query($sql);
        return $listtaikhoan;
    }
    function delete_taikhoan($id){
        $sql ="delete from taikhoan where id=$id";
        pdo_execute($sql);
    }
    function update_taikhoan($id,$name,$pswd,$email,$address,$tel){
        $sql ="update taikhoan set user='".$name."',pass='".$pswd."',email='".$email."',address='".$address."',tel='".$tel."' where id=".$id;
        pdo_execute($sql);
    }
?>
