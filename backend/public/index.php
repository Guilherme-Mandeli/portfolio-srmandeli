<?php
// Define a URL da API
$apiUrl = 'http://backend/api/index.php';

// Busca o conteúdo da API (json)
$apiResponse = @file_get_contents($apiUrl);

$data = null;
if ($apiResponse !== false) {
    $data = json_decode($apiResponse, true);
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portfolio SrMandeli</title>
    <style>
        /* Seu CSS existente */
        *{margin:0;padding:0}
        body {
            padding-block: 50px;
            padding-inline: 5%;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg,rgb(31, 46, 114),rgb(48, 18, 78));
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            padding: 20px;
            gap: 15px;
            box-sizing: border-box;
        }
        h1 {
            font-size: 2.2rem;
            margin-bottom: 24px;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
        }
        .response {
            margin-bottom: 16px;
            background-color: rgb(28 29 57 / 78%);
            padding: 5px 10px;
            line-height: 1em;
            padding-bottom: 8px;
            white-space: pre-wrap;
            word-break: break-word;
        }
        .datetime {
            font-size: 1rem;
            min-width: 280px;
            background: rgb(16 17 53 / 15%);
            padding: 15px 30px;
            border-radius: 25px;
            box-shadow: 0 0 30px rgb(93 0 255 / 46%), 0 0 6px rgb(255 255 255 / 66%);
            user-select: none;
            min-width: 320px;
            margin-bottom: 10px;
        }
        .timezone-label {
            font-weight: 600;
            margin-bottom: 5px;
            font-size: 1.2rem;
            text-transform: uppercase;
            letter-spacing: 1.2px;
        }
        @media screen and (max-width: 420px) {
            h1 {
                font-size: 1.5rem;
            }
            .datetime {
                font-size: 0.8rem;
                min-width: 280px;
                padding: 15px 30px;
                min-width: 230px;
            }
            .timezone-label {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <h1>Server connected!</h1>

    <div class="response">
        <?php
        if ($data === null) {
            echo "Erro ao buscar dados da API.";
        } else {
            echo "Status: " . htmlspecialchars($data['status']) . "<br>";
            echo "Mensagem: " . htmlspecialchars($data['message']);
        }
        ?>
    </div>

    <?php if ($data !== null && isset($data['timezones']) && is_array($data['timezones'])): ?>
        <?php foreach ($data['timezones'] as $zone => $time): ?>
            <div class="datetime">
                <div class="timezone-label"><?= htmlspecialchars($zone) ?></div>
                <?= htmlspecialchars($time) ?>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Sem informações de fuso horário disponíveis.</p>
    <?php endif; ?>
</body>
</html>
