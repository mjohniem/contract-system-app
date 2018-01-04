<scipt>
$(document).ready(function())
{
	$("#submit").attr('disabled', 'disabled');
	$("form").keyup(function())
	{
		//to disable submit button
		$("#submit").attr('disabled', 'disabled');
		//to enable submit button
		$("#submit").removeAttr('disabled');
		$("#submit").css({"cursor"; "pointer", "box-shadow": "1px 0px 6px # 333"});
	}
}
</script>