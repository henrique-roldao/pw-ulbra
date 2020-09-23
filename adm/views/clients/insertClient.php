<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Insere cliente</h1>
<form action="?controller=clients&action=insertClientAction" method=POST enctype='multipart/form-data'>
   <div class="form-group">
       <div>
           <label for="name">Nome:</label>
           <input type="text" class="form-control" name="name">
       </div>
       <div>
           <label for="email">Email:</label>
           <input type="mail" class="form-control" name="email">
       </div>
       <div>
           <label for="tel">Telefone:</label>
           <input type="text" class="form-control" name="phone" >
       </div>
       <div>
           <label for="end">Endereço:</label>
           <input type="text" class="form-control" name="address">
       </div>
       <br>
 
       <br>
       <button type="submit" class="btn btn-success">Salvar</button>
</form>