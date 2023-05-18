<?php
/*
$object = file_get_contents('tasks.json');
$objectPHP = json_decode($object);
array_push($objectPHP, []);
echo json_encode($object);
print_r($objectPHP);

die();*/
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--FontAwesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!--Vue-->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <!--Axios-->
  <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>

  <!--CSS-->
  <link rel="stylesheet" href="css/style.css">

  <title>PHP ToDo List JSON</title>
</head>

<body>

  <div id="app">
    <h1>ToDo List PHP</h1>
    <!-- area di input -->
    <div class="input-area">
      <input v-model.trim="newTaskStrg" @keyup.enter="addNewTask" type="text" placeholder="New Task">
      <button @click="addNewTask">Aggiungi</button>
      <div>
        <span class="error">{{errorMsg}}</span>
      </div>

    </div>

    <!--lista-->
    <div class="container">

      <h2 v-if="tasks.length === 0">Non ci sono tasks! &#128526;</h2>

      <ul v-else class="tasks-list">

        <li v-for="(task, index) in tasks" :class="{'done' : task.done}" @click="task.done = !task.done">

          <span>{{task.text}}</span>
          <i @click.stop="removeTask(index)" class="fa-solid fa-trash-can"></i>
        </li>

      </ul>


    </div>
  </div>


  <script src="js/main.js"></script>
</body>

</html>