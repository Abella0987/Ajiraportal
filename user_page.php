<?php

session_start();

include('user_config.php');

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
</head>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body style="background: #fff;">
    <div class="box">
        <h1>Welcome, <span><?= $_SESSION['name']; ?></span></h1>
        <p>This is an <span>user</span></p>
        <form action="user_config.php" method="POST">
           <input type="text" name="activity" placeholder="Enter your Activity">
           <button name='add'>Add</button>
           <div class="table">
            <table>
             <thead>
                <tr>
                    <th>ID</th>
                    <th>Activity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               <?php
               $sql = "SELECT id, activity FROM to_do";
               $result = mysqli_query($conn, $sql);

               while ($row = mysqli_fetch_array($result)){
               ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo htmlspecialchars($row["activity"]); ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row["id"]; ?>"><button class="edit">Edit</button></a>
                            <a href=""><button class="delete">Delete</button></a>
                        </td>

                    </tr>
               <?php 
               } 
               ?>
            </tbody>
           </div>
           
        </table>
        </form>

        <button name="add" value="add" onclick="window.location.href='logout.php'">Logout</button>
    </div>
</body>
</html>