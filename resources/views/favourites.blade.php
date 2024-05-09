<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Styles -->
    @vite('resources/js/app.js')

    <title>Preferiti</title>
</head>
<body>

    <header class="flex">
        <section class="start-menu flex">

           <div>
              <a href="http://127.0.0.1:8000"><img class="logo" src="/img/boolean-logo.png"></a>
           </div>

           <div>
              <ul class="flex">
                 <li>
                    <a href="http://127.0.0.1:8000/account"><i class="icon-start-menu  fa-regular  fa-user"></i></a>
                    <a href="http://127.0.0.1:8000/cart"><i class="icon-start-menu  fa-solid  fa-bag-shopping  icon-white"></i></a>
                 </li>
              </ul>
           </div>
        </section>
     </header>



    <div class="container  text-center  mt-5">
        <h1>Prodotti Preferiti Utente</h1>
    </div>

</body>
</html>
