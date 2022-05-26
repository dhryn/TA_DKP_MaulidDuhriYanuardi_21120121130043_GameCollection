<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jankenpon</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container-jankenpon">
            <div class="gambar-jankenpon">
                <span><img src="batu1.png" class="gambar"></span>
                <span><img src="gunting2.png" class="gambar"></span>
                <span><img src="kertas3.png" class="gambar"></span>
            </div>

            <form method="get">
                <div class="pilihan-jankenpon">
                    <label for="pilihan"></label>
                    <input type="numbers" name="player" placeholder="Masukkan Pilihan">
                </div>
                <div class="submit-jankenpon">
                    <input type="submit" name="submit">
                </div>
            </form>
            
            <?php
            $player = $_GET["player"];
            $computer = rand(1, 3);
            
            function jankenpon($player, $computer){
                if (
                    ($player == 1 and $computer == 1) ||
                    ($player == 2 and $computer == 2) ||
                    ($player == 3 and $computer == 3)
                ) {
                    if ($player == 1 and $computer == 1) {
                        for ($i = 0; $i < 1; $i++){
                            echo" <table>";
                            echo "<tr>";
                            for ($j = 0; $j < 1; $j++){
                                echo "<th>Player</th>";
                                echo "<th>Computer</th>";
                            }
                            echo "</tr>";
                            echo "</table>";
                        }
                        echo"
                                </div>
                                <div class='gambar-hasil'>
                                    <img src='batu.png' class='gambar'>
                                    <img src='batu.png' class='gambar'>
                                </div>
                                <div class='hasil'>
                                    <h2>SERI!</h2>
                                </div>";
                    } elseif ($player == 2 and $computer == 2) {
                        for ($i = 0; $i < 1; $i++){
                            echo" <table>";
                            echo "<tr>";
                            for ($j = 0; $j < 1; $j++){
                                echo "<th>Player</th>";
                                echo "<th>Computer</th>";
                            }
                            echo "</tr>";
                            echo "</table>";
                        }
                        echo"
                                </div>
                                <div class='gambar-hasil'>
                                    <img src='gunting.png' class='gambar'>
                                    <img src='gunting.png' class='gambar'>
                                </div>
                                <div class='hasil'>
                                    <h2>SERI!</h2>
                                </div>";
                    } else {
                        for ($i = 0; $i < 1; $i++){
                            echo" <table>";
                            echo "<tr>";
                            for ($j = 0; $j < 1; $j++){
                                echo "<th>Player</th>";
                                echo "<th>Computer</th>";
                            }
                            echo "</tr>";
                            echo "</table>";
                        }
                        echo"
                                <div class='gambar-hasil'>
                                    <img src='kertas.png' class='gambar'>
                                    <img src='kertas.png' class='gambar'>
                                </div>
                                <div class='hasil'>
                                    <h2>SERI!</h2>
                                </div>";
                    }
                } elseif ($player == 1 and $computer == 2) {
                    for ($i = 0; $i < 1; $i++){
                        echo" <table>";
                        echo "<tr>";
                        for ($j = 0; $j < 1; $j++){
                            echo "<th>Player</th>";
                            echo "<th>Computer</th>";
                        }
                        echo "</tr>";
                        echo "</table>";
                    }
                    echo"
                            <div class='gambar-hasil'>
                                <img src='batu.png' class='gambar'>
                                <img src='gunting.png' class='gambar'>
                            </div>
                            <div class='hasil'>
                                <h2>MENANG!</h2>
                            </div>";
                } elseif ($player == 1 and $computer == 3) {
                    for ($i = 0; $i < 1; $i++){
                        echo" <table>";
                        echo "<tr>";
                        for ($j = 0; $j < 1; $j++){
                            echo "<th>Player</th>";
                            echo "<th>Computer</th>";
                        }
                        echo "</tr>";
                        echo "</table>";
                    }
                    echo"
                            <div class='gambar-hasil'>
                                <img src='batu.png' class='gambar'>
                                <img src='kertas.png' class='gambar'>
                            </div>
                            <div class='hasil'>
                                <h2>KALAH!</h2>
                            </div>";
                } elseif ($player == 2 and $computer == 1) {
                    for ($i = 0; $i < 1; $i++){
                        echo" <table>";
                        echo "<tr>";
                        for ($j = 0; $j < 1; $j++){
                            echo "<th>Player</th>";
                            echo "<th>Computer</th>";
                        }
                        echo "</tr>";
                        echo "</table>";
                    }
                    echo"
                            <div class='gambar-hasil'>
                                <img src='gunting.png' class='gambar'>
                                <img src='batu.png' class='gambar'>
                            </div>
                            <div class='hasil'>
                                <h2>KALAH!</h2>
                            </div>";
                } elseif ($player == 2 and $computer == 3) {
                    for ($i = 0; $i < 1; $i++){
                        echo" <table>";
                        echo "<tr>";
                        for ($j = 0; $j < 1; $j++){
                            echo "<th>Player</th>";
                            echo "<th>Computer</th>";
                        }
                        echo "</tr>";
                        echo "</table>";
                    }
                    echo"
                            <div class='gambar-hasil'>
                                <img src='gunting.png' class='gambar'>
                                <img src='kertas.png' class='gambar'>
                            </div>
                            <div class='hasil'>
                                <h2>MENANG!</h2>
                            </div>";
                } elseif ($player == 3 and $computer == 1) {
                    for ($i = 0; $i < 1; $i++){
                        echo" <table>";
                        echo "<tr>";
                        for ($j = 0; $j < 1; $j++){
                            echo "<th>Player</th>";
                            echo "<th>Computer</th>";
                        }
                        echo "</tr>";
                        echo "</table>";
                    }
                    echo"
                            <div class='gambar-hasil'>
                                <img src='kertas.png' class='gambar'>
                                <img src='batu.png' class='gambar'>
                            </div>
                            <div class='hasil'>
                                <h2>MENANG!</h2>
                            </div>";
                } elseif ($player == 3 and $computer == 2) {
                    for ($i = 0; $i < 1; $i++){
                        echo" <table>";
                        echo "<tr>";
                        for ($j = 0; $j < 1; $j++){
                            echo "<th>Player</th>";
                            echo "<th>Computer</th>";
                        }
                        echo "</tr>";
                        echo "</table>";
                    }echo"
                            <div class='gambar-hasil'>
                                <img src='kertas.png' class='gambar'>
                                <img src='gunting.png' class='gambar'>
                            </div>
                            <div class='hasil'>
                                <h2>KALAH!</h2>
                            </div>";
                }
            }
            jankenpon($player, $computer);
            ?>
        </div>
    </body>
</html>