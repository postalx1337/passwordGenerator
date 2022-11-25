<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div id="app" class="mt-5">
        <div class="container">
            <div class="row">
                <h3 class="text-center">Password generator</h3>
                <label for="passwordLength">Password length</label>
                <div class="col-md-9">
                    <input type="text" name="passwordLength" class="form-control" v-model="passwordLength" placeholder="Password length">
                </div>
                <div class="col-md-3 d-grid gap-1">
                    <button class="btn btn-primary" v-on:click="getPassword()">Generate</button>
                </div>
            </div>
            <div class="mt-3">
                <h5 :style="'display:'+[result!='' ? 'block' : 'none']+';'">Your password:</h5>
                <p id="password">{{result}}</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="js/axios.js"></script>
    <script src="js/main.js"></script>
</body>
</html>