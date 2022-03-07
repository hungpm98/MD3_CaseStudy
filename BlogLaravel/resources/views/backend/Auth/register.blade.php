<form action="" method="post">
    @csrf
    Tên user:
    <input type="text" name="name">
    <br>
    Email:
    <input type="text" name='email'>
    <br>
    Password:
    <input type="password" name="password">
    <br>
    Confirm Password:
    <input type="password" name="confirmPassword">
    <br>
    Select Role:
    <select name="role_id" id="">
        @foreach ($roles as $role)
        <option value="{{$role->id}}">{{$role->name}}</option>
        @endforeach
    </select>
    @if(Session::has('msg'))
    <p>{{Session::get('msg')}}</p>
    @endif
    <button>Register</button>
</form>
