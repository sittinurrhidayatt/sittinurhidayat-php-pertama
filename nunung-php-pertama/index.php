<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php
            $nama     = 'Sitti Nur Hidayat';
            $jurusan  = 'Teknik Informatika';
            $alamat   = 'Graha Kampus';

            $counter = 1;

            while($counter <= 10){
                echo 
                '<div>' .
                    '<table border =1>'.  
                     '<tr>'.
                        '<td>'. $counter .'</td>'.
                        '<td>'. $nama .'</td>'.
                        '<td>'. $jurusan .'</td>'.
                        '<td>'. $alamat .'</td>'.
                    '</tr>'.
                    '</table>'.
                '</div>';

            $counter++;

            }
        ?>

            <div>

        </div>
</body>
</html>