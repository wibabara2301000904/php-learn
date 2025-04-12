<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funny Libs Game</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background-color: #f0f8ff;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #ff6b6b;
            text-shadow: 2px 2px 4px #ccc;
        }
        .game-container {
            background-color: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
        input {
            padding: 8px;
            margin: 10px 0;
            border: 2px dashed #ff6b6b;
            border-radius: 5px;
            font-family: inherit;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 15px 0;
            cursor: pointer;
            border-radius: 5px;
            font-family: inherit;
        }
        button:hover {
            background-color: #45a049;
        }
        .poem {
            background-color: #fffacd;
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px;
            font-size: 18px;
            line-height: 1.6;
            white-space: pre-line;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <h1>Funny Libs Game</h1>
    
    <div class="game-container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $color = htmlspecialchars($_POST['color']);
            $pluralNoun = htmlspecialchars($_POST['pluralNoun']);
            $celebrity = htmlspecialchars($_POST['celebrity']);
            
            echo '<div id="result">';
            echo '<h2>Your Funny Poem:</h2>';
            echo '<div class="poem">';
            echo "Roses are <strong>$color</strong>,\n";
            echo "Violets are blue,\n";
            echo "All my <strong>$pluralNoun</strong>\n";
            echo "Look just like <strong>$celebrity</strong>!";
            echo '</div>';
            echo '<button onclick="window.location.href=\'\'">Play Again</button>';
            echo '</div>';
        } else {
        ?>
        <form method="post">
            <p>Fill in the blanks to create a funny poem!</p>
            
            <label for="color">Color:</label><br>
            <input type="text" id="color" name="color" required><br>
            
            <label for="pluralNoun">Plural Noun:</label><br>
            <input type="text" id="pluralNoun" name="pluralNoun" required><br>
            
            <label for="celebrity">Celebrity:</label><br>
            <input type="text" id="celebrity" name="celebrity" required><br>
            
            <button type="submit">Make Poem</button>
        </form>
        <?php } ?>
    </div>
</body>
</html>