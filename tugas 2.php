<?php
    $siswa = [
        ["Djati Kemuning Damara", "X RPL 1", "Jalan Tokyo no 12", "9678533423", "08995665478", "Nulis Karangan", "Jadi Penulis"],
        ["Cempaka Puti Soerjaningrat", "X DKV 1", "Jalan Seoul 23", "98765355797", "07648923752", "Menggambar", "Idol"],
        ["Pradiaksa Bulan Shakalingga", "X AK 1", "Jalan Merdeka No 30", "87643456676", "09787864753645", "Bermain Game", "Arsitektur"],
        ["Safina Latifatul", "X RPL 1", "Krekot Bunder no 90", "452345523456", "0884278243577", "Membaca Buku", "Jadi Orang Kaya"],
        ["Arjendral Hakim", "XI RPL 1", "Jalan Soekarno Hatta", "7756435643745", "083253265176", "Lari", "TNI"],
        ["Dominic De Farento Gere", "XII RPL 2", "Jalan Senayan", "78643567876", "0897645234", "Bermain Gitar", "Artis"],
        ["Naresh Januarta", "X RPL 1", "Jalan Pecenongan", "563456343", "0897645678", "Menggambar", "pelukis"],
        ["Diksa Natama", "X MP 2", "Jalan H.Juanda", "5623623623", "08964564322", "Bernyanyi", "idol"],
        ["Raden Arya Wirabuana", "XII DKV 1", "jalan kebanggaan", "53535523452", "08653435478", "Berenang", "Arsitek"],
        ["Ryuuga Althamis", "XII RPL 3", "jalan Thamrin", "6354546464", "0458634534547", "Bermain Game", "Jadi Vtuber"]
    ];

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Daftar Peserta Didik SMK Jakarta Pusat 1</h1>
        <table border="1" cellpadding="10" cellpacing="0">
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Nisn</th>
                <th>No WA</th>
                <th>Hobi</th>
                <th>Cita-Cita</th>
            </tr>
            <tr>
                <?php foreach($siswa as $data) : ?>
                        <td><?= $data["0"]; ?></td>
                        <td><?= $data["1"]; ?></td>
                        <td><?= $data["2"]; ?></td>
                        <td><?= $data["3"]; ?></td>
                        <td><?= $data["4"]; ?></td>
                        <td><?= $data["5"]; ?></td>
                        <td><?= $data["6"]; ?></td>
            </tr>
                <?php endforeach;?>
        </table>
    </body>
    </html>