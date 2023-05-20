<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Themes</title>
    <style>
     html,body {
    display: grid;
    justify-content: center;
    align-content: center;
    height: 100vh;
    background-color: <?php echo $theme['background-color'];?>;
    color: <?php echo $theme['color'];?>;
    font-family: sans-serif;
 }   
</style>


</head>
<body>
    <nav>
        <?php foreach ($themes as $theme): ?>
           <?php if ($theme['name']=== 'default'):?>
            <a href ="index.php">default</a>
            <?php else :?>
            <a href="<?php echo $theme['name'];?>.php "><?php echo $theme
            ['name'];?></a>
            <?php endif;?>

        <?php endforeach;?>
    </nav>
    <h1> <?php echo $theme['name'];?></h1>
</body>
</html>