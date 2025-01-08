<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<style>
body {
    display: flex;             /* Ativa o Flexbox */
    justify-content: center;   /* Centraliza horizontalmente */
    align-items: center;       /* Centraliza verticalmente */
    margin: 0;                 /* Remove margens padrão */
    
}
</style>
<body>
    <div class="content">
        <h1>client lista</h1>
        <table>
            <thead>
                <tr>
                    <th>----adicionar----</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <th>
                    <a class='btn btn-primary btn-sm' href="index.php?action=viewInserir">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1z"/>
                            <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                        </svg>
                    </a>
                    </th>
                </tr>
            </tbody>

        </table>
        
            
        
        <table class="table">
            <thead>
                <tr>
                    <th>----id----</th>
                    <th>----nome----</th>
                    <th>----perfil----</th> 
                </tr>
            </thead>
            <tbody>

                <?php foreach ($selectAll as $line):?>
                <tr>
                    <th>
                        <?= $line['id'] ?>
                    </th>
                    <th>
                        <?= $line['name'] ?>
                    </th>
                    <th>
                        <a class='btn btn-primary btn-sm' href="index.php?id=<?=$line['id']?>&action=viewProfile"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                            </svg>
                        </a>
                    </th>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>
</html>