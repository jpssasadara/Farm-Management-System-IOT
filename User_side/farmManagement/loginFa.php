<?php

//loginFa.php

include('database_connection.php');

session_start();

$form_data = json_decode(file_get_contents("php://input"));

$validation_error = '';

if(empty($form_data->email))
{
    $error[] = 'Email is Required';
}
else
{
    if(!filter_var($form_data->email, FILTER_VALIDATE_EMAIL))
    {
        $error[] = 'Invalid Email Format';
    }
    else
    {
        $data[':email'] = $form_data->email;
    }
}

if(empty($form_data->password))
{
    $error[] = 'Password is Required';
}

if(empty($error))
{
    $query = "
 SELECT * FROM registerfarmer
 WHERE email = :email
 ";
    $statement = $connect->prepare($query);
    if($statement->execute($data))
    {
        $result = $statement->fetchAll();
        if($statement->rowCount() > 0)
        {
            foreach($result as $row)
            {
                if(password_verify($form_data->password, $row["password"]))
                {
                    $_SESSION["name"] = $row["name"];
                }
                else
                {
                    $validation_error = 'Wrong Password';
                }
            }
        }
        else
        {
            $validation_error = 'Wrong Email';
        }
    }
}
else
{
    $validation_error = implode(", ", $error);
}

$output = array(
    'error' => $validation_error
);

echo json_encode($output);

?>
