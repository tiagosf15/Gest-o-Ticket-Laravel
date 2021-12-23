<!doctype html>
<html lang="en">
  <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Pesquisar Ceep</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap core CSS -->


    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">

<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">


    
    <!-- Custom styles for this template -->
   
  </head>

  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom bg-success">
      <a href="ProcurarCeep.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4 text-light">Pesquisar CEEP</span>
      </a>
    </header>

  <body class="text-center">
    
<main class=" d-flex justify-content-center">
  <form id="form">
    <h1 class="h3 mb-3 fw-normal">Coloque o seu CEEP</h1>
    <div class="form-floating mb-2">
      <input type="text" class="form-control" id="ceep" placeholder="CEEP">
      <label for="floatingInput">CEEP</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" id="pesquisar" onchange="pegarendereco()" type="submit">procurar</button>
  </form>
</main>

<table class="table" id="tabela">
  <thead>
    <tr>
      <th scope="col">UF</th>
      <th scope="col">Localidade</th>
      <th scope="col">Logradouro</th>
      <th scope="col">Bairro</th>
      <th scope="col">DD</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td id="uf"></td>
      <td id="local"></td>
      <td id="loga"></td>
      <td id="bairro"></td>
      <td id="dd"></td>
    </tr>
  </tbody>
</table>
<script>
    function pegarendereco(){

    let ceep =$("#ceep").val();
    var html = "";
    console.log(ceep)
    $.get("https://viacep.com.br/ws/"+ceep+"/json/", function(data){
      $("#uf").html(data.uf);
      $("#local").html(data.localidade);
      $("#loga").html(data.logradouro);
      $("#bairro").html(data.bairro);
      $('#dd').html(data.ddd);
    });
   
    
  
    
}
$('#form').on('submit', function(e) {
        pegarendereco();
        e.preventDefault();
      
    });
   $(document).ready(function(){
    $('#ceep').mask('00000-000');
   });
</script>
    
  </body>
</html>

