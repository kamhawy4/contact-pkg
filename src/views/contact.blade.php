<!DOCTYPE html>
<html>
<head>
	<title>Title</title>
</head>
<body>
     <h1>Contact Us</h1>

     <form  method="post"  action="{{route('contact')}}">
     	@csrf
     	<input type="text" name="name" placeholder="name">
     	<input type="text" name="email" placeholder="email">
     	<textarea name="message" cols="30" rows="10"  placeholder="your query" ></textarea>
     	<input type="submit" value="Submit">
     </form>
</body>
</html>