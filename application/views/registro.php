<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style type="text/css">

body{
		min-width: 0;
		max-width: 100%;
		width: auto;
		background-color:#333;
		font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
		
		
    
    }
legend{
		text-align:center;
		color:#FFFFFF;
	}

	
.txt{ background-color:#1D1E1E;
color:#FFFFFF;
border:inset;
border-color:#151525;
}


</style>

<script type="text/javascript">
	function focoInput(id){
		document.getElementById(id).className='input-group-addon alert-info';
		}
	function blurInput(id){
		document.getElementById(id).className = 'input-group-addon';
		}
</script>

</head>

<body>
<?php $this->load->view('barra'); ?>
<br>
<legend style="letter-spacing:15px; font-size:36px">NUEVO USUARIO</legend>
<div class="container">	
    <div class="row">
		<div class="col-md-2"></div>
        <div class="col-md-8" style="text-align:center">
            <form method="post" action="<?php echo site_url("usuarios/agregar");?>">
            	<br>
              <div class="form-group">
               <div class="input-group">
                <span class="input-group-addon" id="sUsuario"><i class="glyphicon glyphicon-chevron-right" ></i></span>
                <input type="text" class="form-control" onfocus="focoInput('sUsuario');" onBlur="blurInput('sUsuario')" id="usuario" name="usuario" placeholder="Usuario...">
              </div></div><br>
              <div class="form-group">
                <div class="input-group">
                <span class="input-group-addon" id="sPass"><i class="glyphicon glyphicon-chevron-right" ></i></span>
                <input type="password" class="form-control" onfocus="focoInput('sPass');" onBlur="blurInput('sPass')" id="pass" name="pass" placeholder="Password...">
              </div></div><br>
              <div class="form-group">
                <div class="input-group">
                <span class="input-group-addon" id="sNombre"><i class="glyphicon glyphicon-chevron-right" ></i></span>
                <input type="text" class="form-control" onfocus="focoInput('sNombre');" onBlur="blurInput('sNombre')" id="nombre" name="nombre" placeholder="Nombre...">
              </div></div><br>
              <div class="form-group">
                <div class="input-group">
                <span class="input-group-addon" id="sSector"><i class="glyphicon glyphicon-chevron-right" ></i></span>
                <input type="text" class="form-control" onfocus="focoInput('sSector');" onBlur="blurInput('sSector')" id="sector" name="sector" placeholder="Sector...">
              </div></div><br>
              <div class="form-group">
                <div class="input-group">
                <span class="input-group-addon" id="sEmail"><i class="glyphicon glyphicon-chevron-right" ></i></span>
                <input type="text" class="form-control" onfocus="focoInput('sEmail');" onBlur="blurInput('sEmail')" id="email" name="email" placeholder="Email...">
              </div></div><br>
              <div class="form-group">
                <div class="input-group">
                <span class="input-group-addon" id="sRol"><i class="glyphicon glyphicon-chevron-right" ></i></span>
                <select class="form-control" onfocus="focoInput('sRol');" onBlur="blurInput('sRol')" id="rol" name="rol">
                	<option value="A">Administrador</option>
                    <option value="U">Usuario</option>                    
                </select>
              </div></div><br>
              
              
              <button type="submit" class="btn alert-info btn-lg">CREAR USUARIO</button>
              
            </form>

            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4">
              <br>
              <?php if(isset($op)) {
                      switch($op) {
                        case "ERRORCAMPOS": ?> <span class="alert alert-danger">Campos incompletos</span>
                        <?php break;

                        case "OK": ?> <span class="alert alert-success">Usuario registrado</span>
                        <?php break;
                            
                        default:
                        break;  
                      }
                    } ?>
              </div>
            </div>
            
            
            <br><br><br><br>
            <hr width="50%" style="border-color:gray">
            <span  style="color:gray"><i>Copyright </i> &copy - Designed by Analistas Hilet</span>
          
        </div>
        <div class="col-md-2"></div>    
    </div>


</body>
</html>