<!DOCTYPE html>
<html>
<head>
  <title>NAVBAR</title>
</head>
<body>
  <header>
    <nav>
      <a href="/">HOME</a>
      |
      <a href="/">Index</a>
      <?php if(!Session::has('email')){
        echo '       |     <a href="/login">Login</a>
        |
        <a href="/register">Register</a>';
      }else{
        echo '| <a href="' . route('kegiatan.index') . '">Kegiatan</a> 
              | <a href="logout">Logout</a>';

      }
      ?>
    </nav>
  </header>
  <hr/>
  <br/>
  <br/>

  @yield('isi')

  <br/>
  <br/>
  <hr/>
  <footer>
    <p>Copyright &copy; VICTOR <a href="">Credit</a></p>
  </footer>
</body>
</html>