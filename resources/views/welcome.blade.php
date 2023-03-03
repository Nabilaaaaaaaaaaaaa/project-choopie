<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    @livewireStyles

</head>
<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><b>NANA SHOP</b></a>
          </div>
        </nav>
      </div>

    @livewire('shopping')

    @livewireScripts

</body>
</html>
