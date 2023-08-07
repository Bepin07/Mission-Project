<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["confirm"])) {
        if ($_POST["confirm"] === "Yes") {
            // Code to delete the item from the database or perform the desired action.
            echo "Item deleted successfully!";
        } else {
            // Redirect or display a message indicating the user canceled the deletion.
            echo "Deletion canceled.";
        }
    }
}
?>