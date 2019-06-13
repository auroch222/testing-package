<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>Contact Us</h1>

<form action="{{ route('contact') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="ramen">
    <input type="email" name="email" placeholder="email">
    <textarea name="message" id="" cols="30" rows="10"></textarea>
    <button type="submit">Submit</button>
</form>
</body>
</html>
