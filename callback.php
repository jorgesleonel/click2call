<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say>Hello, customer at number <?php echo $_REQUEST['number']?> is calling</Say>
    <Dial><?php echo $_REQUEST['number']?></Dial>
</Response>