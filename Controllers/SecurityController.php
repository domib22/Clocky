<?php

require_once 'AppController.php';
require_once __DIR__.'//..//Models//User.php';
require_once __DIR__.'//..//Repository//UserRepository.php';

class SecurityController extends AppController {

    public function login()
    {   
        $userRepository = new UserRepository();


        if ($this->isPost()) {
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $user = $userRepository->getUser($email);

            if (!$user) {
                $this->render('login', ['messages' => ['Niaprawidłowy email!']]);
                return;
            }

            if ($user->getPassword() !== $password) {
                $this->render('login', ['messages' => ['Nieprawidłowe hasło!']]);
                return;
            }

            $_SESSION["id"] = $user->getEmail();
            $_SESSION["role"] = $user->getRole();

            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=board");
            return;
        } else {
            $this->render('login', ['messages' => ['Uzupełnij wszystkie pola!']]);
                    return;
        }
        }

        $this->render('login');
    }

    public function logout()
    {
        session_unset();
        session_destroy();

        $this->render('login', ['messages' => ['Szczęśliwie się wylogowałeś!']]);
    }

    public function register()
    {   
        $userRepository = new UserRepository();

        if ($this->isPost()) {
            if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['repeatpassword']) ) {
                
                $name = $_POST['name'];
                $name = trim($name);
                $surname = $_POST['surname'];
                $surname = trim($surname);
                $email = $_POST['email'];
                $email = trim($email);
                $password = $_POST['password'];
                $password = trim($password);
                $rpassword = $_POST['repeatpassword'];
                $rpassword = trim($rpassword);

                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $this->render('register', ['messages' => ['Niepoprawny adres email!']]);
                    return;      
                }

                if ($password !== $rpassword) {
                    $this->render('register', ['messages' => ['Wprowadź dwukrotnie poprawne hasło!']]);
                    return;
                }

                if ( (strlen($password) < 6) || (strlen($password) > 20) ) {
                    $this->render('register', ['messages' => ['Twoje hasło musi zawierać od 6 do 20 znaków!']]);
                    return;
                }

                if ( (strlen($name) < 3) || (strlen($surname) < 3) ) {
                    $this->render('register', ['messages' => ['Zbyt krótkie imię/nazwisko!']]);
                    return;
                }


                $user = $userRepository->getUser($email);

                if ($user) {
                    $this->render('register', ['messages' => ['Użytkownik z tym adresem email już istnieje!']]);
                    return;
                }

                $db = new Database();
                $con = $db->connect();    

                $res = $con->prepare("SELECT * FROM users WHERE email='$email'");
                $res->execute();
                $res = $res->fetchAll(PDO::FETCH_ASSOC);

                $res = $con->prepare("INSERT INTO users VALUES (NULL, '$name' ,'$surname', '".md5($password)."', '$email');");
                $res->execute();

                $url = "http://$_SERVER[HTTP_HOST]/";
                header("Location: {$url}?page=login");

            } else {
                $this->render('register', ['messages' => ['Uzupełnij wszystkie pola!']]);
                    return;
            }
        }
        $this->render('register');
    }

   
    public function regulations() {
        $this->render('regulations');
    }
}