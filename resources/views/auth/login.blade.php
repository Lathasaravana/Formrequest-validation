@if ($errors->any())
<div class="alert alert-danger">
<ul>
    {!! implode('',$errors->all('<li>:message</li>'))!!}
</ul>
</div>
@endif
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<form method="POST" action="authenticate">
    @csrf
    
    <div style=background-color:grey;>
    <div style=text-align:center;>
    <div style=font-family:Times New Roman;>
    <div style=font-color:yellow;>
    
    <H2>LOGIN FORM</H2><br/>
    <div style="font color'green';">
    <label for="">EMAIL:   <input type="text" name="email" placeholder="name@mail.com"></label><br/>
    <label for="">PASSWORD:<input type="password" name="password" placeholder="password"></label><br/>
   
    <button type="submit"  value="Submit">Login</button>
</div>
</div>

</form>