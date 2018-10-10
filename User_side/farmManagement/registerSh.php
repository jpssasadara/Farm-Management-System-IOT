<?php

//registerFa.php

include('database_connection.php');

$form_data = json_decode(file_get_contents("php://input"));

$message = '';
$validation_error = '';

if(empty($form_data->name))
{
    $error[] = 'Name is Required';
}
else
{
    $data[':name'] = $form_data->name;
}
if(empty($form_data->mobile))
{
    $error[] = 'Mobile is Required';
}
else
{
    $data[':mobile'] = $form_data->mobile;
}
if(empty($form_data->ownerId))
{
    $error[] = 'Owner Id is Required';
}
else
{
    $data[':ownerId'] = $form_data->ownerId;
}
if(empty($form_data->address))
{
    $error[] = 'Address is Required';
}
else
{
    $data[':address'] = $form_data->address;
}

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
else
{
    $data[':password'] = password_hash($form_data->password, PASSWORD_DEFAULT);
}

if(empty($error))
{
    $query = "
 INSERT INTO registershops(name,Mobile,OwnerId,Address ,email, password) VALUES (:name,:mobile,:ownerId,:address ,:email, :password)
 ";
    $statement = $connect->prepare($query);
    if($statement->execute($data))
    {
        $message = 'Registration Completed';
    }
}
else
{
    $validation_error = implode(", ", $error);
}

$output = array(
    'error'  => $validation_error,
    'message' => $message
);

echo json_encode($output);


?>