<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musteri Tablo</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        th, td {
            border: 2px solid rgb(8, 8, 8);
            padding: 10px;
        }
        th {
            background-color: rgb(238, 145, 53);
            color: white;
        }
        tr:nth-child(even) {
            background-color: rgb(255, 255, 255);
        }
        tr:nth-child(odd) {
            background-color: rgb(147, 239, 146);
        }
        tr:hover {
            background-color: rgb(180, 163, 232);
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Ürün Tablosu</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Ürün Adı</th>
            <th>Fiyat</th>
            <th>Kategori</th>
        </tr>
        <?php
        // cURL ile API'den veri çekme
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://fakestoreapi.com/products",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 10,
        ]);

        $response = curl_exec($curl);
        $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        // API'den gelen yanıtı işleme
        if ($http_status == 200 && $response) {
            $products = json_decode($response, true);

            // Tablo satırlarını oluşturma
            foreach ($products as $product) {
                echo "<tr>
                        <td>{$product['id']}</td>
                        <td>{$product['title']}</td>
                        <td>\${$product['price']}</td>
                        <td>{$product['category']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>API'den veri alınamadı.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
