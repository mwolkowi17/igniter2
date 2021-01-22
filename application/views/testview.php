<head>
        <title>Testview</title>
</head>
<body>
        <h1>Title</h1>

        <h3>My Todo List</h3>
        <ul>
        <?php foreach ($query as $item):?>

                <li><?php echo $item->name;?> opis: <?php echo $item->description;?></li>

        <?php endforeach;?>
        </ul>
        

</body>
</html>