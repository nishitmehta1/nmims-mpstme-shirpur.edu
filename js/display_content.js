
if (window.XMLHttpRequest)
			{// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			}
		else
			{// code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
		//facts and history section
		xmlhttp.open("GET","facts-history/overview.txt",false);
		xmlhttp.send();
		overview=xmlhttp.responseText;
		xmlhttp.open("GET","facts-history/founding.txt",false);
		xmlhttp.send();
		founding=xmlhttp.responseText;
		xmlhttp.open("GET","facts-history/hostel.txt",false);
		xmlhttp.send();
		hostel=xmlhttp.responseText;
		xmlhttp.open("GET","facts-history/library.txt",false);
		xmlhttp.send();
		library=xmlhttp.responseText;
		xmlhttp.open("GET","facts-history/research.txt",false);
		xmlhttp.send();
		research=xmlhttp.responseText;

		//offices and administration section
		xmlhttp.open("GET","offices-admin/adminbody.txt",false);
		xmlhttp.send();
		list1=xmlhttp.responseText;
		xmlhttp.open("GET","offices-admin/board-of-manag.txt",false);
		xmlhttp.send();
		list2=xmlhttp.responseText;
		xmlhttp.open("GET","offices-admin/associate-dean.txt",false);
		xmlhttp.send();
		list3=xmlhttp.responseText;
		xmlhttp.open("GET","offices-admin/stat-body.txt",false);
		xmlhttp.send();
		list4=xmlhttp.responseText;

		//about us section
		xmlhttp.open("GET","about_us/about.txt",false);
		xmlhttp.send();
		content=xmlhttp.responseText;
		xmlhttp.open("GET","about_us/chancellor_msg.txt",false);
		xmlhttp.send();
		msg1=xmlhttp.responseText;
		xmlhttp.open("GET","about_us/vice-chancellor_msg.txt",false);
		xmlhttp.send();
		msg2=xmlhttp.responseText;
		xmlhttp.open("GET","about_us/director_msg.txt",false);
		xmlhttp.send();
		msg3=xmlhttp.responseText;
		xmlhttp.open("GET","about_us/dean_msg.txt",false);
		xmlhttp.send();
		msg4=xmlhttp.responseText;