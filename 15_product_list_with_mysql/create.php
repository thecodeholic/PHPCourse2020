<?php

$REQUIRED_FIELD_MESSAGE = 'Please fill out this field';

$validationErrors = [];
if (!empty($_POST)) {
    $name = post_data('name');
    $description = post_data('description');
    $price = post_data('price');
    $shipping = post_data('shipping');
    $category = post_data('category');
    $condition = post_data('condition');
    $payment = post_data('payment');
    $selling_date = post_data('selling_date');

    echo '<pre>';
    var_dump($name, $description, $price, $shipping, $category, $condition, $payment, $selling_date);
    echo '</pre>';

    if (!$name) {
        $validationErrors['name'] = $REQUIRED_FIELD_MESSAGE;
    }
    if (!$description) {
        $validationErrors['description'] = $REQUIRED_FIELD_MESSAGE;
    }
    if (!$price) {
        $validationErrors['description'] = $REQUIRED_FIELD_MESSAGE;
    }
    if (!$shipping) {
        $validationErrors['shipping'] = $REQUIRED_FIELD_MESSAGE;
    }
    if (!$category) {
        $validationErrors['category'] = $REQUIRED_FIELD_MESSAGE;
    }
    if (!$condition) {
        $validationErrors['condition'] = $REQUIRED_FIELD_MESSAGE;
    }
    if (!$payment) {
        $validationErrors['payment'] = $REQUIRED_FIELD_MESSAGE;
    }
    if (!$selling_date) {
        $validationErrors['selling_date'] = $REQUIRED_FIELD_MESSAGE;
    }

    if (empty($validationErrors)) {
        // Save in database
        try {
            $pdo = new PDO('mysql:server=localhost;dbname=products', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $statement = $pdo->prepare("INSERT INTO products (name, description, price, shipping, category, cond, payment_methods, sell_date)
                                VALUES (:name, :description, :price, :shipping, :category, :cond, :payment_methods, :sell_date)");
            $statement->bindValue('name', $name);
            $statement->bindValue('description', $description);
            $statement->bindValue('price', $price);
            $statement->bindValue('shipping', $shipping);
            $statement->bindValue('category', implode(',', $category));
            $statement->bindValue('cond', $condition);
            $statement->bindValue('payment_methods', implode(',', $payment));
            $statement->bindValue('sell_date', $selling_date);
            $statement->execute();
        } catch (PDOException $e) {
            echo "ERROR: ".$e->getMessage();
        }
    }

}

?>

<?php include '_header.php'; ?>

<?php include '_form.php'; ?>

<?php include '_footer.php'; ?>

<?php

function post_data($field)
{
    if (!isset($_POST[$field])) {
        return false;
    }
    $data = $_POST[$field];
    if (is_array($data)) {
        $data = array_map(function ($d) {
            return htmlspecialchars(stripslashes(trim($d)));
        }, $data);
    } else if (is_string($data)) {
        $data = htmlspecialchars(stripslashes(trim($data)));
    }
    return $data;
}
