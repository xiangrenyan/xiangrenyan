<!DOCTYPE html>
<html>
<head>
    <title>环境变量展示</title>
</head>
<body>

<h1>本机环境变量</h1>

<?php
// 获取所有环境变量
$environmentVariables = getenv();

// 输出环境变量
echo "<ul>";
foreach ($environmentVariables as $key => $value) {
    echo "<li><strong>$key:</strong> $value</li>";
}
echo "</ul>";
?>

</body>
</html>
