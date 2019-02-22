<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" 
        integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{url('tema/cadastrar')}}">
        @csrf
        <div class="form-group">
            <label for="tema">Tema</label>
            <input type="text" class="form-control" id="tema" name="tema" aria-describedby="Tema" placeholder="Digite o Tema">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>