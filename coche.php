<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

class Coche {
    protected string $color;

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function getColor(): string {
        return $this->color;
    }
}

class CocheDeLujo extends Coche {
    private string $extras;

    public function setExtras(string $extras): void {
        $this->extras = $extras;
    }

    public function getExtras(): string {
        return $this->extras;
    }
}

$miCoche = new CocheDeLujo();
$miCoche->setColor("negro");
$miCoche->setExtras("TV");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Características del Coche</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            background-color: #ffffff;
            width: 360px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        .card-header {
            background-color: #34495e;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .card-header h2 {
            margin: 0;
            font-size: 1.4rem;
        }

        .card-body {
            padding: 25px;
        }

        .info-row {
            margin-bottom: 10px;
            font-size: 1.1rem;
            color: #2c3e50;
        }

        hr {
            border: 0;
            height: 1px;
            background-color: #e0e0e0;
            margin: 15px 0;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="card-header">
        <h2>Detalles del Vehículo</h2>
    </div>
    <div class="card-body">
        <div class="info-row">
            <strong>Color:</strong> <?php echo $miCoche->getColor(); ?>
        </div>
        <hr>
        <div class="info-row">
            <strong>Extras:</strong> <?php echo $miCoche->getExtras(); ?>
        </div>
    </div>
</div>

</body>
</html>