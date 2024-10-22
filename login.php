<?php   

        if(isset($_POST['email']) || isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if($email == 'admin@admin.com' && $password == 'admin') {
                header('location: https://vandejava.github.io/CV-DigiCertify/');
            } else {
                // Trigger a JavaScript alert if login is incorrect
                echo "<script>alert('Email atau password salah, silakan coba lagi.');</script>";
                
            }
        }
?>
