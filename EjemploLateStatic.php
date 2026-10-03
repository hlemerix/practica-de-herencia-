<?php
class A {
    public static function quienSoy(): string {
        return "A";
    }

    public static function probarSelf(): string {
        return self::quienSoy() . "2";
    }

    public static function probarStatic(): string {
        return static::quienSoy();
    }
}

class B extends A {
    public static function quienSoy(): string {
        return "B";
    }
}

$resSelf = B::probarSelf();
$resStatic = B::probarStatic();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlace Estático Tardío</title>
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
            width: 420px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        .card-header {
            background-color: #8e44ad;
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

        .result-box {
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .result-box:last-child {
            margin-bottom: 0;
        }

        .box-self {
            background-color: #fff3cd;
            border-left: 5px solid #ffc107;
            color: #856404;
        }

        .box-static {
            background-color: #d4edda;
            border-left: 5px solid #28a745;
            color: #155724;
        }

        .title {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .output {
            font-size: 1.2rem;
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="card-header">
        <h2>Prueba self:: vs static::</h2>
    </div>
    <div class="card-body">
        <div class="result-box box-self">
            <span class="title">Resultado con self::</span>
            <span class="output"><?php echo $resSelf; ?></span>
        </div>

        <div class="result-box box-static">
            <span class="title">Resultado con static::</span>
            <span class="output"><?php echo $resStatic; ?></span>
        </div>
    </div>
</div>

</body>
</html>