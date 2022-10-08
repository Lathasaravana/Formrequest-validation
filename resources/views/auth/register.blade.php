@if ($errors->any())
<div class="alert alert-danger">
<ul>
    {!! implode('',$errors->all('<li>:message</li>'))!!}
</ul>
</div>
@endif
<form method="POST" action="store">

   @csrf 
   <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
 
    <div style=background-color:skyblue;>
    <div style=text-align:center;>
    <h2 style=font-color:blue;>REGISTRATION FORM</h2>
    <div class="form-group">
    <label for="">NAME:<input type="text" name="name"  placeholder="name" class="form-control" value="{{old('name')}}"></label><br/>
    <label for="">EMAIL:<input type="text" name="email" placeholder="email" class="form-control" value="{{old('email')}}"></label><br/>
    <label for="">PASSWORD:<input type="password" name="password" placeholder="password" class="form-control"   value="{{old('password')}}"></label><br/>
    <label for="">CONFIRM PASSWORD:<input type="password" name="password_confirmation"  placeholder="confirm password" class="form-control"  value="{{old('password_confirmation')}}"></label><br/>
    <input type="submit" value="REGISTER" class="btn btn-primary">
</div>
</div>
</div>

</form>