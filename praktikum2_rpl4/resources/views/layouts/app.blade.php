<!DOCTYPE html>
<html lang="en">
<head>

    <title>Templating Blade Laravel</title>
</head>
<body>
    <header>
        <h2>WELCOME TO AGIL'S WEBSITE</h2>
        <nav>
            <a href="/rpl">HOME</a>
            |
            <a href="/rpl/tentang">TENTANG</a>
            |
            <a href="/rpl/kontak">KONTAK</a>
            |
        </nav>
    </header>
    <hr/>
    <br/>
    <br/>
</body>
</html>


<h3> @yield('Judul Halaman')</h3>
@yield('konten')

<br/>
<br/>
<hr/>
<footer>
    <p>&copy; <a href="#">www.mywebsite.com</a> 2022</p>
</footer>

</body>
</html>
