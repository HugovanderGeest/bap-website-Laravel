<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
    <link href="style.css" rel="stylesheet">

</head>

<body>


    <form style="  position: absolute;
  top: 50%;
  left: 50%;
  width: 500px;
  transform: translate(-50%, -50%);" action="{{ route('upload.handel') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1> Upload</h1>

        <label class="punt">NAAM</label>
        @error('naam')
        <h4>{{ $message }} </h4>
        @enderror<br>

        <input style="  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;" type="text" value="{{old('name')}}" name="name"><br><br>

        <label>LOCATIE</label>
        @error('locatie')
        <h4>{{ $message }} </h4>
        @enderror<br>

        <input style="  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;" type="text" value="{{old('locatie')}}" name="locatie"><br><br>

        <label>DATUM</label>
        @error('datum')
        <h4>{{ $message }} </h4>
        @enderror<br>

        <input style="  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;" type="date" value="{{old('datum')}}" name="datum"><br>

        <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none;"></p>
        <p><label style="  width: 100%;
  background-color: #34a58e;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;" for="file" style="cursor: pointer;">Pak foto</label></p>
        <p><img id="output" width="200" /></p>

        <script>
            var loadFile = function(event) {
                var image = document.getElementById('output');
                image.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>

        <button style="  width: 100%;
  background-color: #34a58e;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;" type="submit">Upload</button>
    </form>


</body>

</html>