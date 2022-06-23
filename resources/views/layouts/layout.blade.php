<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <link rel="stylesheet" href="/css/style.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

@section('name')
<nav class="navbar navbar-expand-lg " aria-label="Tenth navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active navLogo" aria-current="page" href="#">Kurd Optimizer</a>
          </li>
          <li class="nav-item">
            <router-link class="nav-link navText" to="/">Home</router-link> 
          </li>
          <li class="nav-item">
            <router-link class="nav-link  navText" to="/about" >about</router-link>
          </li>

        </ul>
      </div>
    </div>
  </nav>
@endsection
 

<div id="app">
    @yield('content')
</div>
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('#imageResult')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $(function () {
        $('#upload').on('change', function () {
            readURL(input);
        });
    });
    
    /*  ==========================================
        SHOW UPLOADED IMAGE NAME
    * ========================================== */
    var input = document.getElementById( 'upload' );
    var infoArea = document.getElementById( 'upload-label' );
    
    input.addEventListener( 'change', showFileName );
    function showFileName( event ) {
      var input = event.srcElement;
      var fileName = input.files[0].name;
      infoArea.textContent = 'File name: ' + fileName;
    }
    </script>
</body>
</html>