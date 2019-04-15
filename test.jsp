<%@ page language="Java"%>
<HTML>
<HEAD>
<TITLE> New Document </TITLE>
<script language="JavaScript">
function fn()
{
var obj = document.getElementById("testFile");
if(obj.value=="")
{
alert("Please browse for an image to be displayed");
return;
}
var fileValue = obj.value;
var objImage = document.getElementById("testImage");
objImage.src = fileValue;
}
</script>
</HEAD>
This is a test
<BODY>
<input type="file" name="testFile" onChange = "javascript:fn()"/></input>
<img src="" name="testImage" alt="Image Area"/>
</BODY>
</HTML>
