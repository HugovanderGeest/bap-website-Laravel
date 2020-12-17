<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>

<body>


    <form action="{{ route('upload') }}" method="POST">
        @csrf
        <label>NAAM</label>
        @error('naam')
        <h4>{{ $message }} </h4>
        @enderror<br>
        <input type="text" value="" name="naam"><br><br>

        <label>LOCATIE</label>
        @error('locatie')
        <h4>{{ $message }} </h4>
        @enderror<br>
        <input type="text" value="" name="locatie"><br><br>

        <label>DATUM</label>
        @error('datum')
        <h4>{{ $message }} </h4>
        @enderror<br>
        <input type="text" value="" name="datum"><br>

        <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none;"></p>
        <p><label for="file" style="cursor: pointer;">Pak foto</label></p>
        <p><img id="output" width="200" /></p>

        <script>
            var loadFile = function(event) {
                var image = document.getElementById('output');
                image.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>

        <button type="submit">Opslaan</button>
    </form>


</body>

</html>