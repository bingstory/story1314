$(function(){
	function refresh_logincode(){
		$('#code-login').attr('src',URL+'/'+Math.random());
		return false;
	}
	function refresh_registercode(){
		$('#code-register').attr('src',URL+'/'+Math.random());
		return false;
	}
});