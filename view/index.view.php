<!doctype html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title><?=siteName;?></title>
<body>

   <div class="container">
        <?php
        $skrydziaiIs = ['Briuselis','Roma','Liuksemburgas','Amsterdamas','Vilnius','Londonas'];
        $skrydziaiI = ['Vilnius','Londonas','Amsterdamas','Briuselis','Liuksemburgas','Roma'];
        $skrydzioNr = ['A6985','A6321','A5961','B5896','B6589'];
        $bagazas = ['<20kg','>20kg'];
            if(isset($_GET['submit'])){
                foreach ($_GET as $value){
                    echo "$value<br>";
                }
            }
        ?>

        <form>
            <h1><?=siteName;?></h1>

            <div class="form-group">
                <label for="forGroupExampleInput2">Skrydžio Numeris:</label>
                <select name="flynr" id="flynr" class="form-control">
                    <option selected disabled>--Pasirinkite--</option>
                    <?php foreach ($skrydzioNr as $skrydzNr):?>
                        <option value="<?=$skrydzNr?>"><?=$skrydzNr?></option>
                    <?php endforeach;?>
                </select>
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Asmens Kodas:</label>
                <input type="number" class="form-control" id="personalcode" name="personalcode" placeholder="">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Vardas Ir Pavardė:</label>
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="">
            </div>

            <div class="form-group">
                <label for="forGroupExampleInput2">Skrydis Iš:</label>
                <select name="from" id="from" class="form-control">
                    <option selected disabled>--Pasirinkite--</option>
                    <?php foreach ($skrydziaiIs as $skrydisIs):?>
                        <option value="<?=$skrydisIs?>"><?=$skrydisIs?></option>
                    <?php endforeach;?>
                </select>
            </div>

            <div class="form-group">
                <label for="forGroupExampleInput2">Skrydis Į:</label>
                <select name="to" id="to" class="form-control">
                    <option selected disabled>--Pasirinkite--</option>
                    <?php foreach ($skrydziaiI as $skrydisI):?>
                        <option value="<?=$skrydisI?>"><?=$skrydisI?></option>
                    <?php endforeach;?>
                </select>
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Kaina:</label>
                <input type="number" class="price" id="price" name="price" placeholder="€">

            </div>

            <div class="form-group">
                <label for="forGroupExampleInput2">Dagažas:</label>
                <select name="luggade" id="luggade" class="form-control">
                    <option selected disabled>--Pasirinkite--</option>
                    <?php foreach ($bagazas as $bagaz):?>
                        <option value="<?=$bagaz?>"><?=$bagaz?></option>
                    <?php endforeach;?>
                </select>
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Pastabos:</label>
                <input type="text" class="form-control" id="note" name="note" placeholder="...">
            </div>

        <button type="submit" class="btn btn-primary mb-2" name="submit">Pateikti</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>