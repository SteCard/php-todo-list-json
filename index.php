<?php

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Axios CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- VueJS -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <!-- JS -->
        <script defer type="text/javascript" src="./js/script.js"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="./css/style.css">
        <title>php-todo-list-json</title>
    </head>
    <body>
        <div class="wrapper bg-body-secondary d-flex justify-content-center">
            <div id="app">
                <main>
                    <div class="container my-5">
                        <div class="row">
                            <div class="col-12 text-center my-3">
                                <h1 class="display-1">To Do List</h1>
                            </div>
                            <div class="col-12 my-3">
                                <!-- To do List -->
                                <ul class="list-group border border-2 rounded-2">
                                    <li class="list-group-item" v-for="(item, index) in todoList" v-text="item.text"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>