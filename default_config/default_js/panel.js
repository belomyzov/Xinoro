let pageControll = document.getElementById("create-page-controll");
let inputUrl = document.getElementById("url");
let inputController = document.getElementById("controller");
let inputAction = document.getElementById("action");
pageControll.hidden = true;

function openPageControll()
{
	pageControll.hidden = false;
}

function createPage()
{
	window.location.href = 'admin/panel?createpage&u='+inputUrl.value+'&c='+inputController.value+'&a='+inputAction.value;
}

function openInEditor($contoller, $action)
{

}