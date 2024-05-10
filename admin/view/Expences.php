<?php include "../controller/expenses_controller.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Expenses</title>
</head>
<body>
    <h3>Expenses</h3>
    <form action="" method="POST">
        <table>
            <tr>
                <td>
                    <label for="expense_name">Expense Name: </label>
                </td>
                <td>
                    <input type="text" name="expense_name"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="expense_amount">Expense Amount: </label>
                </td>
                <td>
                    <input type="text" name="expense_amount" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="expense_type">Expense Type: </label>
                </td>
                <td>
                    <select name="expense_type" id="">
                        <option selected value=""></option>
                        <option value="food">Food</option>
                        <option value="transportation">Transportation</option>
                        <option value="utilities">Utilities</option>
                        <option value="entertainment">Entertainment</option>
                        <option value="others">Others</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="Submit">Add Expense</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
