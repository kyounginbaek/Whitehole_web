<?php 
    if(isset($_POST['email'])){
        $to = "jay@whitehole.zone"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $subject = "From:" . $from;
        $message = "이름 : " . $name . "\n". "연락처 : " . $phone . "\n" . "이메일 : " . $from . "\n" . "작성된 내용은 아래와 같습니다." . "\n" . $_POST['message'];

        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);
        echo '<script language="javascript">';
        echo 'alert("메일이 성공적으로 전송되었습니다. 빠른 시일 내에 답장드리겠습니다. 감사합니다.")';
        echo '</script>';
        // You can also use header('Location: thank_you.php'); to redirect to another page.
        // You cannot use header and echo together. It's one or the other.
    }  
?>