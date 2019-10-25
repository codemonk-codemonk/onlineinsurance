@extends('layouts.app')

@section('content')

<html>
<head>
<title>Mobile Registration Form</title>
<link rel="stylesheet" type="text/css" href="css/mobile_form.css">
</head>
 
<body>

<h3 style="text-align:center;">Mobile Registration Form</h1>

 <form action="{{ url('callmobileform') }}" method="POST">
    {{csrf_field()}}
<table align="center" cellpadding = "15">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>MOBILE BRAND</td>
<td><input type="text" name="mobilebrand" maxlength="100"/>

</td>
</tr>

 
<!----- MOBILE REGISTRATION NUMBER -------------------------------------------------------->
<tr>
<td>IMEI NUMBER</td>
 

     <td><input type="text" name="imeinumber" maxlength="20"/>


    
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

 <!-------------PURCHASING FROM-------------->
 
<tr>
<td>PURCHASING FROM</td>

 

     <td><input type="text" name="purchasingfrom" maxlength="20"/>
	 (e.g:Online or offline)


    
</td>
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

<!-------UPLOAD PHOTO 1 FRONT---------->

<tr>
    <td>
        UPLOAD PHOTO(FRONT)
    </td>
    <td>
            <input type="file" name="uploadfront" />
    </td>
</tr>
<!----------------------UPLOAD PHOTO 2 BACK--->

<tr>
    <td>
        UPLOAD PHOTO(BACK)
    </td>
    <td>
            <input type="file" name="uploadback" />
    </td>
</tr>
 
 <!----------------------UPLOAD STICKER--->

<tr>
    <td>
        UPLOAD  PHOTO(STICKER OF IMEI)
    </td>
    <td>
            <input type="file" name="uploadimei" />
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