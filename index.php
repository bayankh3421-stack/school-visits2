<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>نموذج زيارة ولي أمر</title>
    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
            padding: 20px;
            direction: rtl;
        }
        form {
            background: white;
            padding: 20px;
            max-width: 400px;
            margin: auto;
            border-radius: 8px;
        }
        input, textarea, button {
            width: 100%;
            margin-top: 10px;
            padding: 8px;
        }
        button {
            background: #2c7be5;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">نموذج زيارة ولي أمر</h2>

<form method="post">
    <input type="text" name="parent_name" placeholder="اسم ولي الأمر" required>
    <input type="text" name="student_name" placeholder="اسم الطالب" required>
    <input type="text" name="phone" placeholder="رقم الهاتف" required>
    <textarea name="reason" placeholder="سبب الزيارة" required></textarea>
    <button type="submit">إرسال</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p style='text-align:center;color:green;'>تم إرسال النموذج بنجاح</p>";
}
?>

</body>
</html>
