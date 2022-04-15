<?php


echo "<script>";
if(isset($_SESSION['login_success'])){
    /*echo "
    Swal.fire(
        'เข้าสู่ระบบ',
        'เข้าสู่ระบบสำเร็จ',
        'success'
      );";*/
    unset($_SESSION['login_success']);

}
if(isset($_SESSION['login_error'])){
    echo "
    Swal.fire(
        'เข้าสู่ระบบ',
        'ไม่สามารถเข้าสู่ระบบได้ ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง',
        'error'
      );";
    unset($_SESSION['login_error']);
}
if(isset($_SESSION['register_null'])){
    echo "
    Swal.fire(
        'ผิดพลาด',
        'กรุณากรอกข้อมุูลให้ถูกต้อง',
        'error'
      );";
    unset($_SESSION['register_null']);

}
if(isset($_SESSION['captcha_error'])){
    echo "
    Swal.fire(
        'ผิดพลาด',
        'กรุณายืนยันว่าคุณไม่ใช่บอท',
        'error'
      );";
    unset($_SESSION['captcha_error']);

}
if(isset($_SESSION['re_pass'])){
    echo "
    Swal.fire(
        'ผิดพลาด',
        'รหัสผ่านไม่ตรงกัน',
        'error'
      );";
    unset($_SESSION['re_pass']);
}
if(isset($_SESSION['please_login'])){
    echo "
    Swal.fire(
        'ผิดพลาด',
        'กรุณาเข้าสู่ระบบ',
        'error'
      );";
    unset($_SESSION['please_login']);
}
if(isset($_SESSION['register_error_username'])){
    echo "
    Swal.fire(
        'ผิดพลาด',
        'ชื่อผู้ใช้นี้ถูกใช้ไปแล้ว',
        'error'
      );
      ";
    unset($_SESSION['register_error_username']);
}
if(isset($_SESSION['register_error'])){
    echo "
    Swal.fire(
        'ผิดพลาด',
        'เกิดข้อผิดพลาดทางระบบโปรดติดต่อแอดมิน',
        'error'
      );
      ";
    unset($_SESSION['register_error']);
}


if(isset($_SESSION['error_password'])){
  echo "
  Swal.fire(
      'ผิดพลาด',
      'รหัสผ่านไม่ถูกต้อง!',
      'error'
    );
    ";
  unset($_SESSION['error_password']);
}

if(isset($_SESSION['register_success'])){
    /*echo "
    Swal.fire(
        'สำเร็จ!',
        'สมัครสมาชิกสำเร็จ!',
        'success'
      );
      ";*/
    unset($_SESSION['register_success']);
}
if(isset($_SESSION['logout'])){
  /*echo "
  Swal.fire(
      'ออกจากระบบ!',
      '',
      'success'
    );
    ";*/
  unset($_SESSION['logout']);
}
if(isset($_SESSION['reset1'])){
  echo "
  Swal.fire(
      'รหัสผ่านเดิมไม่ถูต้อง!',
      '',
      'error'
    );
    ";
  unset($_SESSION['reset1']);
}
if(isset($_SESSION['reset2'])){
  echo "
  Swal.fire(
      'รหัสยืนยันไม่ตรงกัน!',
      '',
      'error'
    );
    ";
  unset($_SESSION['reset2']);
}
if(isset($_SESSION['reset3'])){
  echo "
  Swal.fire(
      'เปลี่ยนรหัสผ่าน!',
      '',
      'success'
    );
    ";
  unset($_SESSION['reset3']);
}
if(isset($_SESSION['buy_error'])){
  echo "
  Swal.fire(
      'กรุณาเติมเครดิต!',
      'เครดิตในระบบไม่เพียงพอ กรุณาเติมเครดิต',
      'error'
    );
    ";
  unset($_SESSION['buy_error']);
}
if(isset($_SESSION['buy_success'])){
  echo "
  Swal.fire(
      'ซื้อสินค้า!',
      'ทำการซื้อสินค้าเรียบร้อย รายละเอียดสินค้าถูกเก็บลงประวัติ',
      'success'
    );
    ";
  unset($_SESSION['buy_success']);
}
if(isset($_SESSION['out'])){
  echo "
  Swal.fire(
      'ขออภัย!',
      'ขออภัย สินค้าในระบบหมด',
      'error'
    );
    ";
  unset($_SESSION['out']);
}
echo "</script>";
?>