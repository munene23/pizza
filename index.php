<?php
include('config/db_connect.php');
// write query for all pizzas 
$sql = 'SELECT title,ingredients,id FROM pizzas ORDER BY created_at';
//make query
$result = mysqli_query($conn, $sql);

//fetch the resulting row
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
//print_r($pizzas)

//explode(',', $pizzas[0]['ingredients']);


?>



<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<h4 class="center grey-text"> Pizzas</h4>

<div class="container">



    <div class="row">

        <?php foreach ($pizzas as $pizza): ?>

            <div class="col s6 md3">

                <div class="card z-depth 0">
                    <!-- <img src="img/pizza3.jpg" alt="" class="pizza"> -->
                    <div class="card-content center">
                        <h6><?php
                        echo htmlspecialchars($pizza['title']);
                        ?> </h6>
                                            <img src="img/pizza3.jpg" alt="" class="pizza">

                        <ul>
                            <?php foreach (explode(',', $pizza['ingredients']) as $ing) { ?>
                                <li>
                                    <?php echo htmlspecialchars($ing) ?>
                                </li>
                            <?php } ?>
                        </ul>


                        <div>
                            <?php
                            echo htmlspecialchars($pizza['ingredients']);
                            ?>
                        </div>
                    </div>
                    <div class="card-action right-align">
                        <a class="brand-text" href="details.php?id=<?php echo $pizza['id'] ?> ">GET MORE INFO</a>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

        <?php if (count($pizzas) >= 2): ?>
            <p>There are two or more pizzas </p>

        <?php else: ?>
            <p>There are less than two pizzas</p>
        <?php endif; ?>
    </div>
</div>





<?php include('templates/footer.php'); ?>

</body>

</html>