<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Enkripsi & Dekripsi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if (isset($_POST['enkripsi'])) {

        $input = $_POST["input"];
        $upper = strtolower($input);

        $key = array(
            'a' => 'N',
            'b' => 'A',
            'c' => 'D',
            'd' => 'I',
            'e' => 'F',
            'f' => 'B',
            'g' => 'C',
            'h' => 'E',
            'i' => 'G',
            'j' => 'H',
            'k' => 'J',
            'l' => 'K',
            'm' => 'L',
            'n' => 'M',
            'o' => 'O',
            'p' => 'P',
            'q' => 'Q',
            'r' => 'R',
            's' => 'S',
            't' => 'T',
            'u' => 'U',
            'v' => 'V',
            'w' => 'W',
            'x' => 'X',
            'y' => 'Y',
            'z' => 'Z'
        );

        $output = str_replace(array_keys($key), $key, $upper);
        $final = strtoupper($output);
    } elseif (isset($_POST['dekripsi'])) {

        $input = $_POST["input"];
        $upper = strtoupper($input);

        $key = array(
            'a' => 'N',
            'b' => 'A',
            'c' => 'D',
            'd' => 'I',
            'e' => 'F',
            'f' => 'B',
            'g' => 'C',
            'h' => 'E',
            'i' => 'G',
            'j' => 'H',
            'k' => 'J',
            'l' => 'K',
            'm' => 'L',
            'n' => 'M',
            'o' => 'O',
            'p' => 'P',
            'q' => 'Q',
            'r' => 'R',
            's' => 'S',
            't' => 'T',
            'u' => 'U',
            'v' => 'V',
            'w' => 'W',
            'x' => 'X',
            'y' => 'Y',
            'z' => 'Z'
        );

        $output = str_replace($key, array_keys($key), $upper);
        $final = strtoupper($output);
    }
    ?>
    <div class="link">
        <a href="caesar.php" class="active">Caesar</a>
        <a href="index.php">Vigenere</a>
    </div>
    <div class="enkrip">
        <div class="atas">
            <form method="POST">
                <center>
                    <h4>PLAINTEXT</h4>
                </center>
                <textarea name="input" cols="50" rows="8" style="font-family: Arial;" placeholder="Masukkan disini ..."></textarea><br>
                <input type="submit" name="enkripsi" value="ENKRIPSI !" class="button btn1" />
                <input type="submit" name="dekripsi" value="DEKRIPSI !" class="button btn2" />
            </form>
        </div>
        <div class="bawah enkripsi">
            <center>
                <h4>CIPHERTEXT</h4>
            </center>
            <textarea name="hasil" cols="50" rows="10" style="font-family: Arial;" readonly> <?php echo $final; ?> </textarea>
        </div>
    </div>
</body>

</html>