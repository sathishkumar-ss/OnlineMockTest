

<?php 

include 'database.php'; 
session_start();

$number=(int)$_GET['n'];
$query = "SELECT*FROM questions
           WHERE question_number = $number";
$result = mysqli_query($con,$query);

$question = mysqli_fetch_assoc($result);

$query2 = "SELECT*FROM choices  
           WHERE question_number = $number";
$choices = mysqli_query($con,$query2);

$query="SELECT* FROM questions";
    $results= mysqli_query($con,$query);
    $total=$results->num_rows;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>BTT Quizzer</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>

    <body>
        <header>
            <div class="container">
            <h1>BTT Quizzer</h1>
            </div>
        </header>

        <main>
            <div class="container">
                <div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>
                <p class="question">
                    <?php echo $question['text']?>
                </p>
                <form method="post" action="">
                    <ul class="choices">
                        <?php while($row=mysqli_fetch_assoc($choices)): ?>
                        <li><input name="choice" type="radio" value="<?php echo $row['id']?>"/><?php echo $row['text']?></li>
                        <?php endwhile; ?>

                    </ul>
                    <input type="submit" value="submit" name="submit"/>
                    <input type="hidden" name="number" value="<?php echo $number; ?>"/>
                </form>

                <div class="feedback">
                    <?php if($correct_choice == $selected_choice){
                       echo "Thats Correct!";
                      }
                    ?>
                </div>

                <div class="feedback2">
                    <?php if($correct_choice != $selected_choice){
                       echo "Thats Wrong!";
                      }
                    ?>
                </div>
            </div>
        </main>

        <footer>
            <div class="container">
                Copyright &copy;2014,BTT Quizzer
            </div>
        </footer>
    </body>
</html>
