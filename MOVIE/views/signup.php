<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>SIGNUP</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    username
                </td>
                <td>
                    <input type="text" name="signup_username">
                </td>

                <?php 
                if(isset($_POST['signup_btn'])){
                    if($_POST['signup_username']==''){
                        echo "<td><span style=\"color:red\">Please enter an username</span></td>";
                    }
                }
                    
                ?>
            </tr>
            <tr>
            <td>
                    First Name
                </td>
                <td>
                    <input type="text" name="signup_fname">
                </td>
                <?php 
                if(isset($_POST['signup_btn'])){
                    if($_POST['signup_fname']==''){
                        echo "<td><span style=\"color:red\">Please enter the firstname</span></td>";
                    }
                }
                ?>
            </tr>
            <tr>
                <td>
                    Last Name
                </td>
                <td>
                    <input type="text" name="signup_lname">
                </td>
                <?php 
                if(isset($_POST['signup_btn'])){
                    if($_POST['signup_lname']==''){
                        echo "<td><span style=\"color:red\">Please enter the lastname</span></td>";
                    }
                }
                ?>
            </tr>
            <tr>
                <td>
                    Age
                </td>
                <td>
                    <input type="text" name="age">
                </td>
                <?php 
                if(isset($_POST['signup_btn'])){
                    if($_POST['age']==''){
                        echo "<td><span style=\"color:red\">Please enter the age</span></td>";
                    }
                }
                ?>
            </tr>
            <tr>
               <td>New Password</td>
               <td> <input type="password" name="new_password"></td>
               <?php 
                if(isset($_POST['signup_btn'])){
                    if($_POST['new_password']==''){
                        echo "<td><span style=\"color:red\">Please enter the password</span></td>";
                    }
                }
                ?>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="confirm_password"></td>
                <?php 
                if(isset($_POST['signup_btn'])){
                    if($_POST['confirm_password']==''){
                        echo "<td><span style=\"color:red\">Please enter the password again</span></td>";
                    }else if($_POST['confirm_password']!=$_POST['new_password']){
                        echo "<td><span style=\"color:red\">Password doesnot match</span></td>";
                    }
                }
                ?>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Register" name="signup_btn" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['signup_btn'])){
        if($_POST['confirm_password']!='' && $_POST['new_password']!='' && $_POST['confirm_password']==$_POST['new_password'] && $_POST['age']!=''
        && $_POST['signup_lname']!='' && $_POST['signup_fname']!='' && $_POST['signup_username']!=''){
            signup();
        }
    }
    ?>
</body>
</html>