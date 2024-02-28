<?php
//หัวข้อ
$title = "<h2>นายพิชัย โกโสภา เบอร์โทร : 0649091141</h2>";
$section_one = "<h4>1. ทำการตรวจสอบตัวเลข n โดยจะมีการนำค่าออกมาเป็นคำว่า Ping กับ Pong โดยเงื่อนไขก็คือ<br>
ตัวเลข 1 ถึง n นำมาหาร 3 ลงตัวจะได้คำว่า Ping<br>
ตัวเลข 1 ถึง n นำมาหาร 5 ลงตัวจะได้คำว่า Pong<br>
และเมื่อ 1 ถึง n หารได้ทั้ง 3 กับ 5 ลงตัวจะต้องพร้อมกันเป็นคำว่า Ping Pong</h4>";
$section_two = "<h4>2. ทำการตรวจสอบตัวเลข n โดยจะมีการนำค่าออกมาเป็นคำว่า Ping กับ Pong โดยเงื่อนไขก็คือ<br>
ตัวเลข 1 ถึง n นำมาหาร i ลงตัวจะได้คำว่า Ping<br>
ตัวเลข 1 ถึง n นำมาหาร j ลงตัวจะได้คำว่า Pong<br>
และเมื่อ 1 ถึง n หารได้ทั้ง i กับ j ลงตัวจะต้องพร้อมกันเป็นคำว่า Ping Pong</h4>";
$section_three = "<h4>3. ระบบต้องการให้มีการเก็บข้อมูลตัวอักษร(Array) a จำนวน n ตัว แล้วทำการตรวจจากตัวอักษร x ว่าตัวอักษรที่ตรงกับข้อมูลใน a มีตัวใดบ้าง <br>
และ index ที่เท่าไหร่ โดยไม่มีการนับตัวอักษรใน a ซ้ำกัน ถ้าหากไม่มีข้อมูลที่ตรงกับ a ให้แสดงคำว่า No results found</h4>";
$section_four = "<h4>4. ตรวจสอบวันที่ โดยจะต้องเลือกวันที่จากระยะเวลา x ถึง y จากนั้นทำการเลือกวันที่ m โดยจะต้องมี <br>
การตรวจสอบว่า วันที่ m อยู่ในช่วงระยะเวลา x ถึง y หรือไม่ และห่างจากวันที่ x กี่วัน</h4>";
$section_five = "<h4>5. ระบบต้องการทำ Website History โดยจะมีการเก็บข้อมูล URL ไว้ ที่สามารถกลับไปหน้าก่อนหน้าได้ (Previous) โดยเงื่อนไขของระบบมีดังนี้<br>
คำสั่ง “input [URL]” จะทำการเก็บ Website URL ไว้ใน History<br>
คำสั่ง “prev” จะทำการย้อนกลับไปหน้าก่อนนั้น ถ้าหากไม่มีเว็บไซต์ที่จะย้อนกลับแล้วให้แสดงข้อความ No website to previous<br>
คำสั่ง “next” จะทำการกลับไปยังหน้าที่เคยย้อนกลับมาแล้ว ถ้าหากไม่มีเว็บไซต์ที่จะย้อนกลับแล้วให้แสดงข้อความ No website to go<br>
คำสั่ง “current” จะทำแสดงเว็บไซต์ที่อยู่ ณ ปัจจุบัน โดยแสดงข้อความว่า Now you on [URL]<br>
คำสั่ง “all” จะแสดง History ทั้งหมด<br></h4>";

echo $title;
echo "<hr>";

// 1
echo $section_one;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];

    if ($number % 3 == 0 && $number % 5 == 0) {
        echo "<h3>ผลลัพธ์ = Ping Pong</h3>";
    } elseif ($number % 3 == 0) {
        echo "<h3>ผลลัพธ์ = Ping</h3>";
    } elseif ($number % 5 == 0) {
        echo "<h3>ผลลัพธ์ = Pong</h3>";
    } else {
        echo "<h3>...ไม่พบผลลัพธ์</h3>";
    }
}
?>

<form method="post">
    <label for="number">กรุณาใส่ตัวเลข:</label><br>
    <input type="number" id="number" name="number"><br><br>
    <input type="submit" value="Submit">
</form>
<hr>

<?php
// 2 
echo $section_two;

// เลขทดสอบ
$n = 15;
$i = 3;
$j = 5;
echo "<h3 class='danger'>ผลลัพธ์ = ทดสอบใส่ตัวเลข n = $n</h3><br>";
echo "<h3 class='danger'>'i' กำหนดตัวเลขคือ  = $i และ 'j' กำหนดตัวเลขคือ  =  $j</h3><br>";

for ($num = 1; $num <= $n; $num++) {
    $output = '';

    if ($num % $i == 0 && $num % $j == 0) {
        $output .= ' Ping Pong';
    } elseif ($num % $i === 0) {
        $output .= ' Ping';
    } elseif ($num % $j === 0) {
        $output .= ' Pong';
    }
    if (!empty($output)) {
        echo "$num $output<br>";
    }
}

?>
<hr>

<?php
// 3
echo $section_three;

$a = ["cat", "bat", "dog", "bird", "ant"];
print_r($a);
echo "<br>";

// ใส่ข้อมูลเพื่อตรวจสอบ
$charToSearch = 'a';

$resultsFound = false;

echo "<h3>ผลลัพธ์ = ทดสอบใส่ข้อมูล $charToSearch</h3><br>";

foreach ($a as $index => $word) {
    if (strpos($word, $charToSearch) !== false) {
        echo "<h3>Index $index: $word , </h3>";
        $resultsFound = true;
    }
}

if (!$resultsFound) {
    echo "<h3>No results found</h3>";
}
?>
<hr>

<?php
// 4
echo $section_four;

// ใส่วันที่ x, y, m
$date_x = "09/09/2023";
$date_y = "12/09/2023";
$date_m = "10/09/2023";

$date_x_obj = DateTime::createFromFormat('d/m/Y', $date_x);
$date_y_obj = DateTime::createFromFormat('d/m/Y', $date_y);
$date_m_obj = DateTime::createFromFormat('d/m/Y', $date_m);

if ($date_m_obj >= $date_x_obj && $date_m_obj <= $date_y_obj) {
    $is_within_range = "true";
} else {
    $is_within_range = "false";
}

$days_difference = $date_m_obj->diff($date_x_obj)->format('%r%a Days');

echo "<h4>Date x = $date_x</h4>";
echo "<h4>Date y = $date_y</h4>";
echo "<h4>Date m = $date_m</h4>";
echo "<h4>$is_within_range, $days_difference</h4>";
?>
<hr>

<?php
// 5
echo $section_five;

session_start();

if (!isset($_SESSION['history'])) {
    $_SESSION['history'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['url']) && !empty($_POST['url'])) {
        $url = $_POST['url'];
        $_SESSION['history'][] = $url;
    } elseif (isset($_POST['action']) && $_POST['action'] == 'Prev') {
        if (!empty($_SESSION['history'])) {
            array_pop($_SESSION['history']);
        } else {
            echo "<span class='danger'>No website history available.</span>";
        }
    } elseif (isset($_POST['action']) && $_POST['action'] == 'All') {

    }
}

echo "<h3>Website History:</h3>";
echo "<ul>";
foreach ($_SESSION['history'] as $url) {
    $current = ($url === end($_SESSION['history'])) ? "<span class='primary'>Now you on </span>" : "";
    echo "<li>$current $url</li>";
}
echo "</ul>";
?>

<form method="post">
    <label for="url">Enter URL:</label><br>
    <input type="text" id="url" name="url">
    <input type="submit" name="action" value="Next"><br><br>
    <input type="submit" name="action" value="Prev">
    <input type="submit" name="action" value="All">
</form>
<hr>

<style>
    .primary {
        color: #0000FF;
    }

    .danger {
        color: #FF0000;
    }
</style>