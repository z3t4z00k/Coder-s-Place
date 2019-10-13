<?php
    session_start();

    // Header //
    $header = "<!DOCTYPE html>
    <html lang='en'>
    
    <head>
        <title>FileServer2</title>
        <!-- Metadata Tags -->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <!-- Bootstrap CSS -->
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
        <!-- Icons -->
        <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
        <!-- Custom CSS -->
        <link rel='stylesheet' href='../css/style.css'>
    </head>
    
    <body>
        <!-- Header -->
        <nav class='navbar navbar-expand-md bg-dark navbar-dark' id='nav'>
            <a class='navbar-brand' href='../'>Coder's Place</a>
        </nav>
        
        <!-- Page -->
    <div class='container shadow-sm' id='split'>";
    echo $header;
    
    // Function to redirect user //
    function redirect($url){
        ob_start();
        header('Location: '.$url);
        ob_end_flush();
        die();
    }
    
    // Function to remove extra spaces from input //
    function stripInput($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
    }

    function zero($stat){
        echo "<div class='alert alert-success'>";
        echo $stat;
        echo "1";
        echo "</div> </div>        <!-- Footer -->        <footer class='page-footer font-small bg-dark' id='bar'>            <div class='footer-copyright text-center py-3'>                <a class='navbar-brand text-white' href='#'>By Z</a>            </div>        </footer>        <!-- JQuery, Tether, Bootstrap JS -->        <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>        <!-- Custom JS -->    </body>    </html>";
        exit;

    }

    function one($stat){
        echo "<div class='alert alert-danger'>";
        echo $stat;
        echo "</div> </div>        <!-- Footer -->        <footer class='page-footer font-small bg-dark' id='bar'>            <div class='footer-copyright text-center py-3'>                <a class='navbar-brand text-white' href='#'>By Z</a>            </div>        </footer>        <!-- JQuery, Tether, Bootstrap JS -->        <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>        <!-- Custom JS -->    </body>    </html>";
        exit;
    }
        
    /*  LOGIN/SIGNUP HANDLING   */
    // Variables to store user's input //
    $usn = $psw = $rep = "";
    // Flags to detect condition //
    $usnFlag = $pswFlag = $userExist = 0;
    // Check user input for valid type //
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usn = stripInput($_POST["usn"]);
        if(empty($usn) || strlen($usn) > 17){ 
            echo "<div class='alert alert-danger'>";
            echo "Please enter a valid username.";
            echo "</div> </div>        <!-- Footer -->        <footer class='page-footer font-small bg-dark' id='bar'>            <div class='footer-copyright text-center py-3'>                <a class='navbar-brand text-white' href='#'>By Z</a>            </div>        </footer>        <!-- JQuery, Tether, Bootstrap JS -->        <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>        <!-- Custom JS -->    </body>    </html>";
            exit;
        }
        else
            $usnFlag = 1;

        $psw = stripInput($_POST["psw"]);
        $rep = stripInput($_POST["rep"]);
        if(empty($psw) || strlen($psw) > 17){
            echo "<div class='alert alert-danger'>";
            echo "Please enter a valid password.";
            echo "</div> </div>        <!-- Footer -->        <footer class='page-footer font-small bg-dark' id='bar'>            <div class='footer-copyright text-center py-3'>                <a class='navbar-brand text-white' href='#'>By Z</a>            </div>        </footer>        <!-- JQuery, Tether, Bootstrap JS -->        <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>        <!-- Custom JS -->    </body>    </html>";
            exit;
        }
        else if($rep != $psw){
            echo "<div class='alert alert-danger'>";
            echo "Please confirm your password.";
            echo "</div> </div>        <!-- Footer -->        <footer class='page-footer font-small bg-dark' id='bar'>            <div class='footer-copyright text-center py-3'>                <a class='navbar-brand text-white' href='#'>By Z</a>            </div>        </footer>        <!-- JQuery, Tether, Bootstrap JS -->        <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>        <!-- Custom JS -->    </body>    </html>";
            exit;
        }
        else
            $pswFlag = 1;
    }

    // If user input is of valid type connect to database and authenticate //
    if($usnFlag && $pswFlag){
        $con = mysqli_connect("localhost", "root", "", "db");
        if($con){
            $sql = "SELECT * FROM users WHERE usn = \"".$usn."\";";
            $res = mysqli_query($con, $sql);
            $num = mysqli_num_rows($res);
            if($num < 1){
                $sql = "INSERT INTO `users` (`usn`, `psw`) VALUES (\"$usn\", \"$psw\");";
                $res = mysqli_query($con, $sql);
                $_SESSION['usn'] = $usn;
                $_SESSION['psw'] = $psw;
                redirect("data");
            }
            else
                redirect("connectionError.html");
        }   
        else if(!$con){
            ob_start();
            header('location: connectionError.html');
            ob_end_flush();
            die();
        }
    }
?>