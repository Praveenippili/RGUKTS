<html>
<body>
<h2>convert a string into a date object.</h2>
<p id="demo"></p>
<script>
const text='{"name":"John","birth":"1986-12-14","city":"New york"}';
const obj=JSON.parse(text);
obj.birth=new Date(obj.birth);
document.getElementById("demo").innerHTML=obj.name+","+obj.birth;
</script>
</body>
</html>