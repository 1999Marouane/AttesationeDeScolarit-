<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <title>project</title>
</head>
<body>
<h1>progect</h1>

<form  method="post" action="{{route('test')}}" enctype="multipart/form-data">
    @csrf

        <label>apoge</label><br>
        <input type="text" name="apoge" ><br>
        <label>cin</label><br>
        <input type="text" name="cin" ><br>
        <label>cne</label><br>
        <input type="text" name="cne" ><br>
        <label>prenom</label><br>
        <input type="text" name="prenom" ><br>
        <label>nom</label><br>
        <input type="text" name="nom" ><br>
        <label>date naiss</label><br>
        <input type="date" name="dateNaiss" ><br>



    <div>
        <label for="inputTag">
            Select Image <br/>
            <i class="fa fa-2x fa-camera"></i>
            <input id="inputTag" type="file"  name="image"  placeholder="image" />
            <br/>
            <span id="imageName"></span>
        </label>
    </div>




        <input type="submit" class="btn btn-outline-secondary" value="click">


</form>

<script src="{{ asset('js/app.js') }}" defer></script>
<script>
    let input = document.getElementById("inputTag");
    let imageName = document.getElementById("imageName")

    input.addEventListener("change", ()=>{
        let inputImage = document.querySelector("input[type=file]").files[0];

        imageName.innerText = inputImage.name;
    })
</script>

</body>
</html>
