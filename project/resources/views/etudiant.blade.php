<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>project</title>
</head>
<body>
<h1>progect</h1>

<form  method="post" action="{{route('test')}}" enctype="multipart/form-data">
    @csrf

        <label>apoge</label>
        <input type="text" name="apoge" ><br>
        <label>cin</label>
        <input type="text" name="cin" ><br>
        <label>cne</label>
        <input type="text" name="cne" ><br>
        <label>prenom</label>
        <input type="text" name="prenom" ><br>
        <label>nom</label>
        <input type="text" name="nom" ><br>
        <label>date naiss</label>
        <input type="date" name="dateNaiss" ><br>

        <input type="file"  class="swal2-input" name="image"  placeholder="image"><br>
        <input type="submit" class="btn btn-outline-secondary" value="click">


</form>

<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
