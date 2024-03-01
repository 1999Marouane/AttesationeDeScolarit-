<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <style>




        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"],
        input[type="date"],
        input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .btn {
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #imageName {
            color: #007BFF;
            margin-top: 10px;
            display: block;
        }

        img.logo {
            max-width: 450px;
            margin-bottom: 20px;
        }

    </style>
    <title>Project</title>
</head>
<body>

<img class="logo" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhqRbnxNfYii_ti2s8mEAqIkvITLUjCeQCfPk9j9w2DAkHt4AwdFGs5ygUL7gpiCfonNHit1eVf71TKTMzGKOF-SxnjGx2usBjpFCw4n2X7K-ZLeOS1ShZEAHrBUbr72lzwcTACTtlDftbXQV35sbiffWkE7ixmXCrgxGLO-FdHp74chcF9J8Ps-WxNJQ/w640-h360/Master%20FLLA%20Kenitra%202022-2023.jpg"
     title="Master FLLA Kénitra 2023-2024" alt="Logo">

<form method="post" action="{{ route('test') }}" enctype="multipart/form-data">
    @csrf

    <label>Apoge:</label>
    <input type="text" name="apoge"><br>

    <label>CIN:</label>
    <input type="text" name="cin"><br>

    <label>CNE:</label>
    <input type="text" name="cne"><br>

    <label>First Name:</label>
    <input type="text" name="prenom"><br>

    <label>Last Name:</label>
    <input type="text" name="nom"><br>

    <label>Date of Birth:</label>
    <input type="date" name="dateNaiss"><br>

    <div>
        <label for="inputTag">
            Select Image <br/>
            <i class="fa fa-2x fa-camera"></i>
            <input id="inputTag" type="file" name="image" placeholder="image" />
            <br/>
            <span id="imageName"></span>
        </label>
    </div>

    <input type="submit" class="btn btn-outline-secondary" value="Click">
</form>

<script src="{{ asset('js/app.js') }}" defer></script>
<script>
    let input = document.getElementById("inputTag");
    let imageName = document.getElementById("imageName")

    input.addEventListener("change", () => {
        let inputImage = document.querySelector("input[type=file]").files[0];

        imageName.innerText = inputImage.name;
    })
</script>

</body>
</html>
