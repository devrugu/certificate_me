<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="../../css/header.css?v=<?php echo time(); ?>">
   
    <title>Admin</title>
</head>
<body>
<style>
    body {
        background-color: grey;
    }
    </style>

    <header>
        <nav>
            <a href="admin_anasayfa.php">
                <img src="../../images/tuu.png" alt="logo" width="130" height="130"id="logo">
            </a>
            <ul>
                <li><a href="admin_anasayfa.php"><span onclick='this.style.color="red"'>Ana Sayfa</span></a></li>
                <li><a href="kurumlariYonet.php" ><span class="kurum">Kurumları Yönet</span></a></li>
                <li><a href="sql_terminali.php" ><span class="sql">SQL Terminali</span></a></li>
            </ul>
            
        </nav>
    
    <script src="../../js/header.js"> </script>
    <div>
                <form action="../../includes/i_admin/i_anasayfa_admin/admin_cikis.inc.php" method="POST">
                <button type="submit" name="admin_cikis_submit" id="button">Çıkış yap</button>
                </form>
            </div> </header>
</body>
</html>