<?php
//
//$link=@mysqli_connect('localhost','root','root') or die('链接数据库失败');
//if(isset($_POST['sub'])){
//    $name=$_POST['C_name'];
//    $mail=$_POST['C_mail'];
//    $massage=$_POST['C_massage'];
//
//    $sql="insert into contact (C_id,C_name,C_mail,C_massage) value(null,'$name','$mail',$massage)";
//
//    $query=mysqli_query($link,$sql);
//
//    if($query){
//        echo "<script>alert('插入数据成功')</script>";
//        echo "<script>location='index.php'</script>";
//    }else{
//        echo "插入数据失败！";
//    }
//}
//?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function aa()
    {
        $mail = $this->input->get("C_mail");
        $name = $this->input->get("C_name");
        $message = $this->input->get("C_message");
        $this->load->model("user_model");
        $rs = $this->user_model->save($name,$mail,$message);
        echo $rs;
    }
}
?>

