<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
		<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('ElimuSMS: The Open Source School Management System'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="imagetoolbar" content="no" />
	<?php
		echo $this->Html->meta('icon');
	
		echo $this->Html->css(array('layout','featured_slide','forms','loginslider','navi','tables','uniform', 'blue.uni-form'));
		
		echo $this->Html->script(array('jquery-1.4.1.min'));
	
		echo $scripts_for_layout;
	?>
		
	</head>
<body>
<div class="wrapper col0">
		  <div id="topbar">
		    <div id="slidepanel">
		      <div class="topbox">
		        <h2>Elimu School Management System</h2>
		        <p>Elimu SMS is dedicated to making administering a school easier for staff, teachers and students. </p>
		        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
		      </div>
		      <div class="topbox">
		        <h2>Teachers and Staff Login Here</h2>
		        <form action="#" method="post">
		          <fieldset>
		            <legend>Teachers/Staff Login Form</legend>
		            <label for="teachername">Username:
		              <input type="text" name="teachername" id="teachername" value="" />
		            </label>
		            <label for="teacherpass">Password:
		              <input type="password" name="teacherpass" id="teacherpass" value="" />
		            </label>
		            <label for="teacherremember">
		              <input class="checkbox" type="checkbox" name="teacherremember" id="teacherremember" checked="checked" />
		              Remember me</label>
		            <p>
		              <input type="submit" name="teacherlogin" id="teacherlogin" value="Login" />
		              &nbsp;
		              <input type="reset" name="teacherreset" id="teacherreset" value="Reset" />
		            </p>
		          </fieldset>
		        </form>
		      </div>
		      <div class="topbox last">
		        <h2>Students Login Here</h2>
		        <form action="#" method="post">
		          <fieldset>
		            <legend>Student Login Form</legend>
		            <label for="pupilname">Username:
		              <input type="text" name="pupilname" id="pupilname" value="" />
		            </label>
		            <label for="pupilpass">Password:
		              <input type="password" name="pupilpass" id="pupilpass" value="" />
		            </label>
		            <label for="pupilremember">
		              <input class="checkbox" type="checkbox" name="pupilremember" id="pupilremember" checked="checked" />
		              Remember me</label>
		            <p>
		              <input type="submit" name="pupillogin" id="pupillogin" value="Login" />
		              &nbsp;
		              <input type="reset" name="pupilreset" id="pupilreset" value="Reset" />
		            </p>
		          </fieldset>
		        </form>
		      </div>
		      <br class="clear" />
		    </div>
		    <div id="loginpanel">
		      <ul>
		        <li class="left">Log In Here &raquo;</li>
		        <li class="right" id="toggle"><a id="slideit" href="#slidepanel">Administration</a><a id="closeit" style="display: none;" href="#slidepanel">Close Panel</a></li>
		      </ul>
		    </div>
		    <br class="clear" />
		  </div>
		</div>
		<!-- ####################################################################################################### -->
		<div class="wrapper col1">
		  <div id="header">
		    <div id="logo">
		      <h1><a href="#">Elimu SMS</a></h1>
		      <p>Open Source School Management System</p>
		    </div>
		    <div id="topnav">
		      <ul>
		        <li><?php echo $this->Html->link('Home',array('controller' => 'pages', 'action' => 'display'),array("class"=>"", "escape"=>false),
			    false
			);?></li>
		        <li>
		        	<?php echo $this->Html->link('School Demo',array('controller' => 'schools', 'action' => 'index'));?>
		        	
		        		
		        </li>
		        <li><?php echo $this->Html->link('Student Demo',array('controller' => 'students', 'action' => 'index'));?></li>
		        <li><?php echo $this->Html->link('Teacher Demo',array('controller' => 'teachers', 'action' => 'index'));?></li>
		        <li class="last"><?php echo $this->Html->link('Course Demo',array('controller' => 'courses', 'action' => 'index'));?></li>
		      </ul>
		    </div>
		    <br class="clear" />
		  </div>
		</div>
	<!-- ####################################################################################################### -->
	<div class="wrapper col2">
	  <div id="breadcrumb">
	        <?php echo $this->Html->getCrumbs(' > ',__('Home', true));?>
	  </div>
	</div>
	<!-- ####################################################################################################### -->
	<div class="wrapper col3">
	  <div id="container">
	   		<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>	
			<div class="clear"></div>	
	  </div>
	</div>
	<!-- ####################################################################################################### -->
		<div class="wrapper col4">
		  <div id="footer">
		    <div class="footbox">
		      <h2>About Elimu SMS</h2>
		     <p>It is an Open Source School Management System launched by <a href="http://www.coders4africa.org">Coders4Africa</a>  for Public and private elementary, primary and secondary Schools. Elimu is a Swahili word that means Education.
				This system will have Web and Mobile based interfaces designed to help school administrators, students, parents and government agencies in improving African school systems. 
		    </div>
		    <div class="footbox">
		      <h2>Current Features</h2>
		      <ul>
		        <li><a href="#">Student Information System</a></li>
		        <li><a href="#">Parent Web Portal</a></li>
		        <li><a href="#">Online SIS System</a></li>
		        <li><a href="#">Teacher Gradebook</a></li>
		        <li><a href="#">Online Gradebook</a></li>
		        <li class="last"><a href="#">Attendance</a></li>
		         <li><a href="#">Report Cards</a></li>
		        <li><a href="#">Scheduling</a></li>
		        <li><a href="#">Admissions</a></li>
		        <li><a href="#">Enrollment Management</a></li>
		        <li><a href="#">Online Forms</a></li>
		        <li class="last"><a href="#">Accounting</a></li>
		        
		      </ul>
		    </div>
		   
		    <div class="footbox">
		      <h2>Upcoming Features</h2>
		      <ul>
		        <li><a href="#">Student Billing</a></li>
		        <li><a href="#">E-Portfolios</a></li>
		        <li><a href="#">Admissions</a></li>
		        <li><a href="#">Teacher Web Module</a></li>
		        <li><a href="#">Photo ID Cards</a></li>
		        <li class="last"><a href="#">Library</a></li>
		         <li><a href="#">Health</a></li>
		        <li><a href="#">E-Mail</a></li>
		        <li><a href="#">District Management</a></li>
		        <li><a href="#">Teacher Evaluator</a></li>
		        <li><a href="#">IB Student Evaluator</a></li>
		        <li class="last"><a href="#">Report Samples & Downloads</a></li>
		      </ul>
		    </div>
		    
		    <div class="footbox last">
		      <h2>About Coders4Africa</h2>
		     <p><a href="http://www.coders4africa.org">Coders4Africa</a> provides African programmers and developers a gateway to free high quality training and certification in the main technologies and platforms that currently dominate the software development industry.</p>
		    </div>
		    <br class="clear" />
		  </div>
		</div>
		<!-- ####################################################################################################### -->
		<div class="wrapper col5">
		  <div id="copyright">
		    <p class="fl_left">Copyright &copy; 2011 - All Rights Reserved - <a href="#">www.elimusms.com</a>, <a href="http://coders4africa.org">www.coders4africa.org</a></p>
		    <p class="fl_right">Template by <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
		  
		    <br class="clear" />
		  </div>
		</div>
	</body>
</html>
