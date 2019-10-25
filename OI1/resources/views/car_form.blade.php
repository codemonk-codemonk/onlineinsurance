@extends('layouts.app')

@section('content')
<html>
<head>
<title>Car Registration Form</title>
<link rel="stylesheet" type="text/css" href="css/car_form.css">
</head>
 
<body>

<h3 style="text-align:center;">Car Registration Form</h1>
<form action="{{url('/callcarform')}}" method="POST">
{{csrf_field()}}
<table align="center" cellpadding = "15">
 
<!----- First Name ---------------------------------------------------------->


 
<!----- CAR REGISTRATION NUMBER -------------------------------------------------------->
<tr>
<td>CAR REGISTRATION NUMBER</td>
 

     <td><input type="text" name="carreg" maxlength="100"/>


    
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


 <!--CHASSIS NUMBER------------------->
 <tr>
<td>CHASSIS NUMBER</td>
 

     <td><input type="text" name="chassisnumber" maxlength="100"/>
	 </td>
</td>
</tr>
 <!---
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
 <!------------------------->

<tr>
    <td>
        UPLOAD  PHOTO OF CAR
    </td>
    <td>
            <input type="file" name="uploadcarphoto" />
    </td>
</tr>

<!------------------------->

<tr>
    <td>
        CHASSIS NUMBER(PHOTO)
    </td>
    <td>
            <input type="file" name="uploadchassisnumberphoto" />
    </td>
</tr>


<!------------------------->

<tr>
    <td>
        PHOTO OF NUMBER PLATE(FRONT)
    </td>
    <td>
            <input type="file" name="uploadfront" />
    </td>
</tr>
<!------------------------->

<tr>
    <td>
        PHOTO OF NUMBER PLATE(BACK)
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