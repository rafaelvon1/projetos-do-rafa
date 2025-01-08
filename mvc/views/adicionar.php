<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alterar</title>
</head>
<style>
    body {
    display: flex;             /* Ativa o Flexbox */
    justify-content: center;   /* Centraliza horizontalmente */
    align-items: center;       /* Centraliza verticalmente */
    margin: 0;                 /* Remove margens padrão */
    background-color: #f0f0f0; /* Cor de fundo (opcional) */
}
input {
    width: 100px; /* Define a largura fixa */
}


</style>
<body>
    <div class="content">
        <h1>Alterar usuario</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>----nome----</th>
                    <th>----email----</th>
                    <th>----telefone----</th>
                    <th>----enviar----</th>
                    <th>----voltar----</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <form action="index.php?action=Inserir" method="post">
                        <th>
                            <input name="name" type="text" >
                        </th>
                        <th>
                            <input name="email" type="text" >  
                        </th>
                        <th>
                            <input name="phone" type="text">  
                        </th>
                        <th>
                        <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
                            </svg></button>
                    </th>
                    </form>
                    <th>
                        <a class='btn btn-primary btn-sm' href="index.php?id=<?=$line['id']?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                            </svg>
                        </a>
                    </th>
                    
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>