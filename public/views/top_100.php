<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/top_100.css">
    <title>Top 100</title>
</head>
<body>
<div class="logo">
    <h1>
        <a href="/main_menu">
            <img id="logo2" src="/public/img/Logo.png"></img>
        </a>
    </h1>
</div>
<div class="header">
    <h2>
        <i id="i1">TOP 100</i>
    </h2>
</div>
<div class="list1">
    <table>
        <tr>
            <th>#</th>
            <th>User</th>
            <th>Points</th>
        </tr>
        <?php foreach ($points as $point):?>
            <tr>
                <td></td>
                <td><?php echo $point['nickname']?></td>
                <td><?php echo $point['points']?></td>
            </tr>
        <?php endforeach;?>
    </table>
</div>
</body>
</html>