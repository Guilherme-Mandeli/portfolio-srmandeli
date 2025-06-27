<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portfolio SrMandeli</title>
    <style>
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
            margin-bottom: 2.25rem;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
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
                background: rgb(16 17 53 / 15%);
                padding: 15px 30px;
                border-radius: 25px;
                box-shadow: 0 0 30px rgb(93 0 255 / 46%), 0 0 6px rgb(255 255 255 / 66%);
                user-select: none;
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

    <div class="datetime">
        <div class="timezone-label">Europa (Lisboa)</div>
        <?php 
            $dtLisbon = new DateTime('now', new DateTimeZone('Europe/Lisbon'));
            echo $dtLisbon->format('d/m/Y H:i:s');
        ?>
    </div>

    <div class="datetime">
        <div class="timezone-label">Europa (Madrid)</div>
        <?php 
            $dtMadrid = new DateTime('now', new DateTimeZone('Europe/Madrid'));
            echo $dtMadrid->format('d/m/Y H:i:s');
        ?>
    </div>

    <div class="datetime">
        <div class="timezone-label">Europa (Roma)</div>
        <?php 
            $dtRome = new DateTime('now', new DateTimeZone('Europe/Rome'));
            echo $dtRome->format('d/m/Y H:i:s');
        ?>
    </div>

    <div class="datetime">
        <div class="timezone-label">Américas (São Paulo)</div>
        <?php 
            $dtSaoPaulo = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
            echo $dtSaoPaulo->format('d/m/Y H:i:s');
        ?>
    </div>

    <div class="datetime">
        <div class="timezone-label">Américas (Buenos Aires)</div>
        <?php 
            $dtBuenosAires = new DateTime('now', new DateTimeZone('America/Argentina/Buenos_Aires'));
            echo $dtBuenosAires->format('d/m/Y H:i:s');
        ?>
    </div>

</body>
</html>
