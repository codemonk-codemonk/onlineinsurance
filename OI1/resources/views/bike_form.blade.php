@extends('layouts.app')

@section('content')
<html>
<head>
<title>Bike Registration Form</title>
<link rel="stylesheet" type="text/css" href="css/bike_form.css">
</head>
 
<body>

<h3 style="text-align:center;">Bike Registration Form</h1>

<form action="{{url('/callbikeform')}}" method="POST">
{{csrf_field()}}
 
<table align="center" cellpadding = "15">
 
<!----- First Name ---------------------------------------------------------->


 
<!----- CAR REGISTRATION NUMBER -------------------------------------------------------->
<tr>
<td>BIKE REGISTRATION NUMBER</td>
 

     <td><input type="text" name="bikereg" maxlength="100"/>


    
</td>
</td>
</tr>
 <!--Model NUMBER------------------->
 <tr>
<td>MODEL NUMBER</td>
 

     <td><input type="text" name="modelnumber" maxlength="100"/>
	 </td>
</td>
</tr>
 <!-------------PURCHASING DATE-------------->
 
<tr>
<td>PURCHASING DATE</td>
 
<td>

        <input type="date" name="purchasingdate">
</td>
</tr>

<!-------------------PRICE------------>
<tr>
<td>PRICE</td>
 

     <td><input type="text" name="price" maxlength="100"/>
	 </td>
</td>
</tr>

 
 
 
 
 
 

<tr>
    <td>
        UPLOAD BILL
    </td>
    <td>
            <input type="file" name="uploadbill" />
    </td>
</tr>

 <!----------------------UPLOAD PHOTO OF BIKE--->

<tr>
    <td>
        UPLOAD PHOTO OF BIKE
    </td>
    <td>
            <input type="file" name="uploadbikephoto" />
    </td>
</tr>

 <!----------------------UPLOAD PHOTO OF NUMBER PLATE FORNT--->

<tr>
    <td>
        UPLOAD PHOTO OF NUMBER PLATE(FRONT)
    </td>
    <td>
            <input type="file" name="uploadfront" />
    </td>
</tr>
 <!----------------------UPLOAD PHOTO OF NUMBER PLATE BACK--->

<tr>
    <td>
        UPLOAD PHOTO OF NUMBER PLATE(BACK)
    </td>
    <td>
            <input type="file" name="uploadback" />
    </td>
</tr>

 


<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 
</form>
 
</body>
</html>
@endsection