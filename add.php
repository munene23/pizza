<?php
include('config/db_connect.php');

$errors = array('email' => '', 'title' => '', 'ingredients' => '');

if (isset($_POST['submit'])) {
    // Check email
    if (empty($_POST['email'])) {
        $errors['email'] = 'An email is required';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email must be a valid email address';
        }
    }

    // Check title
    if (empty($_POST['title'])) {
        $errors['title'] = 'Please enter a title';
    } else {
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $errors['title'] = 'Title must be letters and spaces only';
        }
    }

    // Check ingredients
    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] = 'Please provide ingredients';
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z]+)(,\s*[a-zA-Z]+)*$/', $ingredients)) {
            $errors['ingredients'] = 'Ingredients must be a comma-separated list';
        }
    }

    // Check if there are no errors
    if (!array_filter($errors)) {  // Changed condition to !array_filter()
        // Escape all variables separately
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);  // Fixed variable name
        $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);  // Fixed variable name

        $sql = "INSERT INTO pizzas(title, email, ingredients) VALUES('$title', '$email', '$ingredients')";
        
        if (mysqli_query($conn, $sql)) {
            // Success - redirect to index page
            header('Location: index.php');
            exit();  // Add exit after redirect
        } else {
            // Error
            echo 'Query error: ' . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php'); ?>
<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="add.php" class="white" method="POST">
        <label>Your Email: </label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>

        <label>Pizza Title: </label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($_POST['title'] ?? ''); ?>">
        <div class="red-text"><?php echo $errors['title']; ?></div>

        <label>Ingredients (comma separated): </label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($_POST['ingredients'] ?? ''); ?>">
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>

        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>
<?php include('templates/footer.php'); ?>
</html>