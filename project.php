<html>
	<head>
		<title>Project | Evan McCullough</title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/print.css" media="print">
		<link rel="shortcut icon" href="img/favicon.png">
		
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<meta name="description" content="Helping people with their web development needs since 2012. This is THE personal site of yours truly, Evan McCullough. This is the showcase of all projects." />
		<meta name="author" content="Evan McCullough" />
		<script type="text/javascript" src="js/googleAnalytics.js"></script>

		<script type="text/javascript">
			//don’t change anything here
			function MM_swapImgRestore() { //v3.0
			  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
			}
			function MM_preloadImages() { //v3.0
			  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
			    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
			    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
			}
			 
			function MM_findObj(n, d) { //v4.01
			  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
			    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
			  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
			  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
			  if(!x && d.getElementById) x=d.getElementById(n); return x;
			}
			 
			function MM_swapImage() { //v3.0
			  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
			   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
			}
		</script>

	</head>

	<body onload="MM_preloadImages('img/app-logo-bw.png', 'img/badge-logo-bw.png', 'img/bostonbean-bw.png', 'img/jrproperties-logo-bw.png', 'img/justsayin-logo-bw.png', 'img/massage-app-logo-bw.png', 'img/ruby-bw.png', 'img/mcfancy_182x118-bw.png', 'img/todo-logo-bw.png', 'img/wiki-bw.png')">
		<div id="body">
		<?php include 'include/header.php'; ?>

		<section id="printheader">
			<h1>Evan McCullough</h1>
		</section>

		<div id="text">
		<h1>Projects</h1>

		<article id="top">
			<section id="coldfusion">
				<h2>ColdFusion</h2>
				
				<div>
				<h4><a href="#" target="_blank">J&R Properties</a></h4>
				<p><figure class="logos"><a href="#" target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('jr','','img/jrproperties-logo.png',1)"><img id="jr" src="img/jrproperties-logo-bw.png" alt="J&R Properties logo"/></a></figure>This site was my capstone project at school. We were tasked with going out and finding a customer, and then redesign/create a website. We had to come up with different documents like an ERD, Gantt chart, project proposal, etc. I was the lead designer/developer for the project, so I was in charge of creating a logo and building and programming the site. The site was originally created using ColdFusion, but we will be translating it to PHP for security purposes. The code is being listed on my GitHub, so <a href="https://github.com/evanmcc92/JR-Properties-cf" target="_blank">feel free to take a look</a>.</p>
				</div>
			</section>

			<section id="HTML">
				<h2>HTML</h2>
				<div>
				<h4><a href="http://mcfancy.evanamccullough.com" target="_blank">(mc)fancy</a></h4>
				<p><figure class="logos"><a href="http://mcfancy.evanamccullough.com" target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('mc','','img/mcfancy_182x118.jpg',1)"><img id="mc" src="img/mcfancy_182x118-bw.jpg" alt="(mc)fancy logo"/></a></figure>The (mc)fancy project was to showcase renovations my father did around the house. The site officially launched April 30th, 2013. The first project on the site was of a cabinet that doubles as a fold out table and a murphy bed. The site was coded using a text editor and contains use of CSS, HTML, PHP, and JavaScript. The site is also using Google Analytics to track its performance. My father and I are marketing this site to friends and family.</p>
				</div>
			</section>

			<section id="objective-c">
				<h2>Objective-C</h2>
				<div>
				<h4><a href="http://wp.me/p3Hzyo-q" target="_blank">First iPhone App</a></h4>
				<p><figure class="logos"><a href="http://wp.me/p3Hzyo-q" target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('app','','img/app-logo.png',1)"><img id="app" src="img/app-logo-bw.png" alt="First iPhone App logo"/></a></figure>I successfully created an iOS app using Objective-C and XCode. This app is an iPhone and iPod Touch friendly version of this current site. I am not planning on putting it onto the App Store because I am not currently enrolled in Apple's developer programs. I am, however, providing the screenshots to show what it looks like and how it behaves.</p>
				</div>
				<div>
				<h4><a href="https://github.com/evanmcc92/Emily-Massage-Kit" target="_blank">Massage Counter</a></h4>
				<p><figure class="logos"><a href="https://github.com/evanmcc92/Emily-Massage-Kit" target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('massage','','img/massage-app-logo.png',1)"><img id="massage" src="img/massage-app-logo-bw.png" alt="Massage Counter logo"/></a></figure>The next iPhone app I created was something for my girlfriend in order to count massages given (I know it's pretty lame). But this app was more complex that the first app. It required more coding and took a lot longer to develop. Again, I am not enrolled in any developer programs but I have managed to upload the code to GitHub so if you are interested <a href="https://github.com/evanmcc92/Emily-Massage-Kit" target="_blank">feel free to take a look</a>.</p>
				</div>
			</section>

			<section id="php">
				<h2>PHP</h2>
				<div>
				<h4>Evan A McCullough</h4>
				<p><figure class="logos"><img src="img/badge-logo.png" alt="Evan A McCullough logo"/></figure>This site has been redesigned using PHP. I chose PHP because I need to become more familiar with it. PHP is one of the largest used web languages, and I need to work to gain more experience. The major PHP used on this site are the contact form, and the header/footer. My previous site has been archived but will still be available on my <a href="https://github.com/evanmcc92/evanamccullough-html" target="_blank">GitHub</a> for anyone who is interested.</p>
				</div>
			</section>

			<section id="rails">
				<h2>Ruby on Rails</h2>
				<div>
					<h4><a href="http://rails-app-v1.herokuapp.com/" target="_blank">Rails Blog</a></h4>
					<p><figure class="logos"><a href="http://rails-app-v1.herokuapp.com/" target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('ruby','','img/ruby.png',1)"><img id="ruby" src="img/ruby-bw.png" alt="Rails Blog logo"/></a></figure>This is the first app I created using Ruby on Rails. I followed along with a tutorial for Ruby beginners and I am very pleased with the outcome. I have been recently working with making the layout to be more dynamic and appealing along with adding more features. The code has been uploaded to <a href="https://github.com/evanmcc92/rails-app-v1" target="_blank">GitHub</a> and will continue to work on this as time goes on.</p>
				</div>

				<div>
					<h4><a href="http://just-sayin.herokuapp.com/" target="_blank">JustSayin</a></h4>
					<p><figure class="logos"><a href="http://just-sayin.herokuapp.com/" target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('js','','img/justsayin-logo.png',1)"><img id="js" src="img/justsayin-logo-bw.png" alt="JustSayin logo"/></a></figure>JustSayin is a rails based social media platform I created from September to December of 2013. The app is hosted on Heroku and is running Ruby 2.0.0, Ruby on Rails 4, and PostgreSQL in production. <a href="https://github.com/evanmcc92/JustSayin" target="_blank">Feel free to take a look at the code hosted on my GitHub</a>. I have more details about what the app does and my feelings about it on my <a href="http://wp.me/p3Hzyo-1z" target="_blank">blog here</a>.</p>
				</div>

				<div>
					<h4><a href="http://evan-wiki.herokuapp.com/" target="_blank">Wiki</a></h4>
					<p><figure class="logos"><a href="http://evan-wiki.herokuapp.com/" target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('wiki','','img/wiki.png',1)"><img id="wiki" src="img/wiki-bw.png" alt="Wiki logo"/></a></figure>This wiki was created as a business solution for companies that what to share information easily with their employees. The app has users create pages. Pages are organized by different topics, which are created by admin users. Admin users have to power to create other admin users and delete topics. I have the code hosted on <a href="https://github.com/evanmcc92/wiki" target="_blank">GitHub</a> and I have written <a href="http://wp.me/p3Hzyo-1L" target="_blank">posts about it on my blog</a>.</p>
				</div>

				<div>
					<h4><a href="http://to-do-em.herokuapp.com/" target="_blank">Task Manager</a></h4>
					<p><figure class="logos"><a href="http://to-do-em.herokuapp.com/" target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('todo','','img/todo-logo.png',1)"><img id="todo" src="img/todo-logo-bw.png" alt="Task Manager logo"/></a></figure>The task manager app was developed for people to better organize their lives. A user can create a task, which can be prioritized. The tasks show up on the calendar provided. I wanted to have the app email you when a task is due or on the reminder date, but I needed to pay for the cronjobs to continuously run. The code of this app is on my <a href="https://github.com/evanmcc92/todo" target="_blank">GitHub</a> and my <a href="http://wp.me/p3Hzyo-2a" target="_blank">final thoughts</a> about the project are on my blog.</p>
				</div>
			</section>

			<section id="vb">
				<h2>Visual Basic</h2>
				<div>
				<h4><a href="https://github.com/evanmcc92/Boston-Bean-Coffee-Bar" target="_blank">Boston Bean Coffee Bar</a></h4>
				<p><figure class="logos"><a href="https://github.com/evanmcc92/Boston-Bean-Coffee-Bar" target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('bb','','img/bostonbean.png',1)"><img id="bb" src="img/bostonbean-bw.png" alt="Evan A McCullough logo"/></a></figure>Boston Bean Coffee Bar is a fictional coffee shop that was created for a project in my stuctured programming class. The purpose of the project was to create a business and then design and develop 10 screens (5 screens per person) that would help the business function using Visual Studio and Visual Basic. The screens created include payroll, employee benefits, and customer orders for hot and cold beverages and pastries. The code for the project is on my <a href="https://github.com/evanmcc92/Boston-Bean-Coffee-Bar" target="_blank">GitHub</a> for all to see.</p>
				</div>
			</section>

			<section id="upcoming">
				<h2>Upcoming Projects</h2>
				<ul>
					<li><a href="http://wp.me/p3Hzyo-2c" target="_blank">Fitness Tracking App</a></li>
				</ul>
			</section>
		</article>


		<aside>
			<section id="sidenav">
				<ul>
					<li><a href="#coldfusion">ColdFusion</a></li>
					<li><a href="#html">HTML</a></li>
					<li><a href="#objective-c">Objective-C</a></li>
					<li><a href="#php">PHP</a></li>
					<li><a href="#rails">Ruby on Rails</a></li>
					<li><a href="#vb">Visual Basic</a></li>
					<li><a href="#upcoming">Upcoming</a></li>
				</ul>
			</section>
		</aside>


		</div>
		<?php include 'include/footer.php'; ?>
		</div>
	</body>
</html>