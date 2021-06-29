<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="./assets/img/logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List - Etarious</title>
    <link rel="stylesheet" href="./node_modules/bulma/css/bulma.css">
    <link rel="stylesheet" href="./public/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,700;1,200&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/vue@next"></script>
    <script src="https://unpkg.com/vue-router@4"></script>
</head>

<body>
    <div class="container is-fullhd" id="welcome">
        <div id="app">
            <div class="img">
                <img id="logo-img" src="./assets/img/logo.png" alt="Logo">
            </div>
            <!-- <div class="img">
                <img id="logo-img" src="./assets/img/e-card-01.jpg" alt="Logo">
            </div> -->
            <div class="write">
                <span class="etarious title is-one">Etarious <span id="mini">Technologies</span></span><br>
                <span class="subtitle name">TODO LIST APPLICATION</span>
                <p>A little <a target="blank" href="https://www.vuejs.org">Vue.js</a> application to take lists of activities to be done.</p>
                <button class="button is-success">Login</button>  or <button class="button is-success">Signup</button> to begin.
            </div>
        </div>
    </div>

    <script src="./public/js/scripts.js"></script>
    <script>
        const mountedApp = app.mount("#app")
    </script>
</body>

</html>