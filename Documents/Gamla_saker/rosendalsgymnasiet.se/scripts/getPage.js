var Pages = {} // object to hold all the pages
Pages['active'] = '';

function loadPage(page_name)
{
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function()
	{
		if (this.readyState == 4 && this.status == 200)
		{
			Pages[page_name] = {};
			Pages[page_name]['content'] = this.responseText;
			// Pages[page_name]['title'] = page_name; // can add more atributes to a page like title top image maybe
			switchPage(page_name); // switch the page when loading is complete
		}
	};
	xhttp.open("GET", 'pages/' + page_name + '.html', true);
	xhttp.send();
}

function switchPage(page_name)
{
	if (Pages['active'] != page_name) // is the requested page the same as the current page
	{
		if (typeof Pages[page_name] != 'undefined')
		{
			document.getElementById("content").innerHTML = Pages[page_name]['content'];
			document.getElementById("menu-check-input").checked = false; // remove the menu
			window.location.hash = page_name; // update the url
			Pages['active'] = page_name;
		}
		else
		{
			loadPage(page_name);
		}
	}
}

function newHash()
{
	fragment = window.location.hash.substr(1);
	if (fragment == '')
	{
		fragment = 'start'; // this will be the default page if no fragment is specified
	}
	switchPage(fragment);
}


newHash(); // loading the page specified in the hash
window.onhashchange = newHash; // listening for hash changes