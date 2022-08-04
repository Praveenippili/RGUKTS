<html>
<body>
<h2>creating an object from a JSON string</h2>
<p id="demo"></p>
<script>
const txt='{"name":"John","age":30,"city":"New york"}'
const obj=JSON.parse(txt);
document.getElementById("demo").innerHTML=obj.name+","+obj.age;
</script>
</body>
</html>