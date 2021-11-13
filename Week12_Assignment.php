<!DOCTYPE html>
<!--Week 12 Assignment: Wioleta Takuska-->
<html lang = "en">

<head>
    <title> Wioleta Takuska : Exercise 9.10 PHP </title>
    <meta charset= "utf-8" />
    <style type = "text/css">
        td, th, table {
            border: thin solid black;
        }
    </style>
</head>

<body>
    <?php
        $four25LightBulbs = $_POST["four25LightBulbs"];
        $eight25LightBulbs = $_POST["eight25LightBulbs"];
        $four25LongLightBulbs = $_POST["four25LongLightBulbs"];
        $eight25LongLightBulbs = $_POST["eight25LongLightBulbs"];
        $name = $_POST["name"];
        $payment = $_POST["payment"];

//Blank Quantities
        if ($four25LightBulbs == "") $four25LightBulbs = 0;
        if ($eight25LightBulbs == "") $eight25LightBulbs = 0;
        if ($four25LongLightBulbs == "") $four25LongLightBulbs = 0;
        if ($eight25LongLightBulbs == "") $eight25LongLightBulbs = 0;

//Calculations of items
        $four25LightBulbs_cost = 2.39 * $four25LightBulbs;
        $eight25LightBulbs_cost = 4.29 * $eight25LightBulbs;
        $four25LongLightBulbs_cost = 3.95 * $four25LongLightBulbs;
        $eight25LongLightBulbs_cost = 7.49 * $eight25LongLightBulbs;
        $total_price = $four25LightBulbs_cost + $eight25LightBulbs_cost + $four25LongLightBulbs_cost + $eight25LongLightBulbs_cost;
        $total_items = $four25LightBulbs + $eight25LightBulbs + $four25LongLightBulbs + $eight25LongLightBulbs;
        $tax = $total_price * 0.062;
    ?>
    <h3> Customer Name: </h3>
    <?php
        print ("$name");
    ?>
    <br /> <br />
    <table>
        <caption> Order Received </caption>
        <tr>
            <th> Product </th>
            <th> Price </th>
            <th> Quantity Ordered </th>
            <th> Item Total </th>
        </tr>
        <tr>
            <td>Four 25-watt light bulbs</td>
            <td>$2.39</td>
            <td> <?php print ("$four25LightBulbs"); ?> </td>
            <td> <?php printf ("$%.2f", $four25LightBulbs_cost); ?> </td>
        </tr>
        <tr>
            <td>Eight 25-watt light bulbs</td>
            <td>$4.29</td>
            <td> <?php print ("$eight25LightBulbs"); ?> </td>
            <td> <?php printf ("$%.2f", $eight25LightBulbs_cost); ?> </td>
        </tr>
        <tr>
            <td>Four 25-watt long-life light bulbs</td>
            <td>$3.95</td>
            <td> <?php print ("$four25LongLightBulbs"); ?> </td>
            <td> <?php printf ("$%.2f", $four25LongLightBulbs_cost); ?> </td>
        </tr>
        <tr>
            <td>Eight 25-watt long-life light bulbs</td>
            <td>$7.49</td>
            <td> <?php print ("$eight25LongLightBulbs"); ?> </td>
            <td> <?php printf ("$%.2f", $eight25LongLightBulbs_cost); ?> </td>
        </tr>
    </table>
    <br /> <br />

    <?php
        print "You Ordered: $total_items light bulb item(s). <br />";
        printf ("Your total bill with tax is: $%.2f <br />", $total_price + $tax);
        print "Your method of payment is: $payment <br />";
    ?>
</body>
</html>