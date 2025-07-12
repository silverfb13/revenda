<?php
session_start();
if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true || $_SESSION['username'] !== 'b') {
    header('Location: login.php'); exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8" /><meta name="viewport" content="width=device-width,initial-scale=1"/>
<title>Add - b</title>
<link href="https://cdn.tailwindcss.com" rel="stylesheet"/>
</head>
<body class="bg-black text-white min-h-screen flex">
<aside class="w-64 bg-gray-900 p-4 space-y-4">
  <div class="flex items-center space-x-2 mb-6">
    <img src="https://iili.io/F5z1tDJ.png" class="w-10 h-10" alt="Logo"><span class="text-xl font-bold">ÁguiaBox</span>
  </div>
  <a href="act_b.php" class="block p-2 bg-gray-700 rounded">Code Management</a>
  <a href="add_act_b.php"    class="block p-2 hover:bg-gray-700 rounded">Add Code</a>
  <a href="edit_act_b.php"   class="block p-2 hover:bg-gray-700 rounded">Edit Code</a>
  <a href="delete_act_b.php" class="block p-2 hover:bg-gray-700 rounded">Delete Code</a>
  <a href="logout.php" class="block p-2 hover:bg-gray-700 rounded">Logout</a>
</aside>
<main class="flex-1 p-6">
  <h1 class="text-2xl font-bold mb-4">Add - b</h1>
  <p>Aqui você implementa o formulário de adicionar códigos.</p>
</main>
</body>
</html>