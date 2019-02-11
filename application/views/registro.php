<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Registro-ArtSport</title> 

</head>
<body class=" jumbotron" style="width: 100% ">
 
  <div align="center" class="mt-12">  
    <div class = "container" style="margin-top:5%"> 
    <h3>Cadastre-Se</h3>   
      <?php
      echo br(1);
        $formAttr = array('id' => 'loginForm');
        if(isset($aviso)){
          echo "<div class = 'alert alert-danger' role='alert' style ='height:40px width:50px'";
          echo "<h1>$aviso</h1>";
          echo "</div>";
        }
        echo form_open("register/efutuarcadastro", $formAttr);
        $formData = array(
            'name' => 'nome',
            'id' => 'idnome',
            'size' => '50',
            'class' => 'form-control',
            'class' => 'form-group'
            );
            echo form_label('Nome:');echo "<br>";
            echo form_input($formData);
            echo "<br>";
            $formData = array(
                'name' => 'sobrenome',
                'id' => 'idsobrenome',
                'size' => '50',
                'class' => 'form-control',
                'class' => 'form-group'
                );
                echo form_label('Sobrenome:');echo "<br>";
                echo form_input($formData);
                echo "<br>";
          $formData = array(
              'name' => 'email',
              'id' => 'idlogin',
               'size' => '50',
              'class' => 'form-control',
              'class' => 'form-group'
              );
            echo form_label('Email:');echo "<br>";
          echo form_input($formData);
           echo "<br>";
         $formData = array(
              'name' => 'senha',
              'id' => 'idsenha',
              'size' => '50',
              'class' => 'form-control',
              'class' => 'form-group'
              );
              echo form_label('Senha:');echo "<br>";
              echo form_password($formData);
           echo "<br>";
           $formData = array(
            'name' => 'cpf',
            'id' => 'idcpf',
            'size' => '50',
            'placeholder' =>'Ex: 000.000.000-00',
            'class' => 'form-control',
            'class' => 'form-group'
            );
            echo form_label('CPF:');echo "<br>";
            echo form_input($formData);
            echo "<br>";
           $buttonData = array(
            'class'=>'btn btn-info btn-md'
            );
          echo form_submit('btnSubmit','Efetuar Cadastro' , $buttonData);     
        echo form_close();

      ?>
    </div>
  </div>
  
</div>
</body>
</html>