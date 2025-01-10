<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musteri Tablo</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        th, td {
            border: 2px solid #4CAF50;
            padding: 10px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:nth-child(odd) {
            background-color: #e9f7e9;
        }
        tr:hover {
            background-color: #d1ffd1;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Musteri Tablo</h1>
    <table>
        <?php
        // Başlık satırı
        echo "<tr>
                <th>Ad</th>
                <th>Soyad</th>
                <th>Yaş</th>
              </tr>";

        // Veri satırları
        $veriler = [
            ['Ad' => 'Ali', 'Soyad' => 'Yılmaz', 'Yaş' => 25],
            ['Ad' => 'Ayşe', 'Soyad' => 'Yıldız', 'Yaş' => 30],
            ['Ad' => 'Mehmet', 'Soyad' => 'Aydın', 'Yaş' => 35],
        ];

        foreach ($veriler as $satir) {
            echo "<tr>
                    <td>{$satir['Ad']}</td>
                    <td>{$satir['Soyad']}</td>
                    <td>{$satir['Yaş']}</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>