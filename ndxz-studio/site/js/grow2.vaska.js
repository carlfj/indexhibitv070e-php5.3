tog = new Array();

$(document).ready(function()
{
	bigwidth = $('#img-container').width();
	
	bigwidth = (bigwidth == null) ?
		1 : parseInt(bigwidth) - 18;
	
	$('#img-container').css('width', bigwidth);
});

function toggleImg(id,width,height,thwidth)
{
	$('div').remove('#once');
	var thiswidth = 0;
	
	if ((!tog[id]) || (tog[id] == false))
	{
		o = document.getElementById('img'+id);
		var yo = o.id;

		if (o)
		{
			tog[id] = true;
			
			// IE wants these
			o.getElementsByTagName('div')[0].style.width = width + 'px';
			o.getElementsByTagName('div')[0].style.height = height + 10 + 'px';
			
			o.style.marginBottom = '18px';

			o.getElementsByTagName('a')[0].style.width = width + 'px';
			o.getElementsByTagName('a')[0].style.height = height + 10 + 'px';
			
			o.getElementsByTagName('img')[0].style.width = width + 'px';
			o.getElementsByTagName('img')[0].style.height = height + 'px';
			
			preloadImage(path + o.getElementsByTagName('img')[0].alt);
			
			o.getElementsByTagName('strong')[0].style.display = 'block';
			o.getElementsByTagName('em')[0].style.display = 'block';
		}
		
	}
	else
	{
		o = document.getElementById('img'+id);
		var yo = o.id;
		
		if (o)
		{
			tog[id] = false;
			
			// IE wants these
			o.getElementsByTagName('div')[0].style.width = thwidth + 20 + 'px';
			o.getElementsByTagName('div')[0].style.height = thwidth + 20 + 'px';
			
			o.style.marginBottom = '';
			
			o.getElementsByTagName('em')[0].style.display = 'none';
	
			o.getElementsByTagName('a')[0].style.width = '';
			o.getElementsByTagName('a')[0].style.height = '';
			
			d = path + 'th-' + o.getElementsByTagName('img')[0].alt;
			
			// back to the thumbnail - use natural size
			o.getElementsByTagName('img')[0].style.width = '';
			o.getElementsByTagName('img')[0].style.height = '';
			
			o.getElementsByTagName('img')[0].src = d;
			
			o.getElementsByTagName('strong')[0].style.display = 'none';
			o.getElementsByTagName('em')[0].style.display = 'none';
		}
	}
	
	$('div.grow').each(function()
	{
		var thewidth = $(this).width();
		thiswidth = parseInt(thiswidth) + parseInt(thewidth);
		
		if (thiswidth > bigwidth)
		{
			var help = $(this).prev('div.grow').attr('id');
			$(this).prev('div.grow').after("<div id='once'><!-- --></div>");
			thiswidth = thewidth;
		}
	});
}

function preloadImage(image)
{
	preload = new Image();
	preload.src = image;
	o.getElementsByTagName('img')[0].src = preload.src;
}