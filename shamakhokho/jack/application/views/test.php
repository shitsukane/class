<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>CodeIgniter View Example</title>
</head>
<body>
CodeIgniter View Example
<?php
class Test extends CI_Controller {
public function index()
{
$this->load->view('test');
}
}
?>

</body>
</html>