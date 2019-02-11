<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login-Art Sport</title> 
  
	
</head>
<body class=" jumbotron" style="width: 100% ">
  <div align="center" class="mt-12">  
    <div class = "container" style="margin-top:10%"> 
    <h3>Acesso ao Sistema</h3>   
      <?php
      echo br(1); 
         if(isset($aviso)){
           echo "<div class = 'alert alert-danger' role='alert' style ='height:40px width:50px'";
           echo "<h1>$aviso</h1>";
           echo "</div>";
         }
         echo br(1);
        $formAttr = array('id' => 'loginForm');
        echo form_open("login/efetuarlogin", $formAttr);
          $formData = array(
              'name' => 'email',
              'id' => 'idEmail',
              'placeholder' => 'Email',
               'size' => '50',
              'class' => 'form-control',
              'class' => 'form-group'
              );
           echo form_input($formData);
           echo "<br>";
         $formData = array(
              'name' => 'senha',
              'id' => 'idsenha',
              'placeholder' => 'Senha',
              'size' => '50',
              'class' => 'form-control',
              'class' => 'form-group'
              );
           echo form_password($formData);
           echo "<br>";
           $buttonData = array(
            'class'=>'btn btn-info btn-md'
            ); $buttonData2 = array(

              'class'=>'btn btn-info btn-md'

              );
                  
          echo form_submit('btnSubmit','Efetuar Login' , $buttonData);      
        echo form_close();
        $formAttr = array('id' => 'loginForm');
        echo form_open("home/registrar", $formAttr);
        echo "<br>";
        echo form_submit('btnSubmit2','Ainda não é Cadastrado?' ,$buttonData2);
        echo form_close();
      ?>
    </div>
  </div>
  
</div>
</body>
</html>