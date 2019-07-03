<?php

// Connect to the Database
$link = connectToDB();

# Create pie 3d chart object using FusionCharts PHP Class
$FC = new FusionCharts("Line","450","200");

# Set Relative Path of chart swf file.
$FC->setSwfPath("FusionCharts/Charts/");

//Store chart attributes in a variable for ease of use
$strParam="caption= Student Progress By Subject;subCaption=By Marks;pieSliceDepth=30; showBorder=1;showNames=1;formatNumberScale=0; Units;decimalPrecision=0; showPercentageInLabel=1";

# Set chart attributes
$FC->setChartParams($strParam);

//Fetch all factory records using SQL Query
// Store chart data values in 'total' column/field
// and category names in 'FactoryName'
//$strQuery = "select a.FactoryID, b.FactoryName, sum(a.Quantity) as total from Factory_output a, Factory_Master b where a.FactoryId=b.FactoryId group by a.FactoryId,b.FactoryName";

$sql = "SELECT * from educationmarks where admissionno='AD0001' AND subjectid='S0001';";

$result = mysql_query($sql) or die(mysql_error());

//Pass the SQL Query result to the FusionCharts PHP Class function
//along with field/column names that are storing chart values and corresponding category names
//to set chart data from database
if ($result)
{
    $FC->addDataFromDatabase($result, "marks", "year");
}

mysql_close($link);


# Render the chart
$FC->renderChart();
?>