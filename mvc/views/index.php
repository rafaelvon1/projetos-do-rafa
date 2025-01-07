<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>client lista</h1>
    <div class="content">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nome</th>
                    <th>email</th>
                    <th>telefone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultData as $line):?>
                <tr>
                    <th>
                        <?= $line['id'] ?>
                    </th>
                    <th>
                        <?= $line['name'] ?>
                    </th>
                    <th>
                        <?= $line['email'] ?>
                    </th>
                    <th>
                        <?= $line['phone'] ?>
                    </th>
                    
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>
</html>