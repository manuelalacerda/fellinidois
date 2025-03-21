if(isset($_POST['upload']))
{
    if (isset($_FILES['formFile']) && $_FILES['formFile']['error'] == UPLOAD_ERR_OK)
    {
        if (array_key_exists('formFile', $_FILES))
        {             
            $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['formFile']['name']));
            if (move_uploaded_file($_FILES['formFile']['tmp_name'], $formFile))
            {
                $mail->addAttachment($formFile,$_FILES['formFile']['name']); 
            } 
        }       
        else
        {
            echo "The file is not uploaded. please try again.";
        }            
    }
    else
    {
        echo "The file is not uploaded. please try again";
    }
}