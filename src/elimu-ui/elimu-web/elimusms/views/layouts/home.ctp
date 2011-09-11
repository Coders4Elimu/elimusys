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
	
			echo $this->Html->css(array('layout'));
			
			echo $this->Html->script(array('jquery-1.4.1.min','jquery.slidepanel.setup','jquery.slidepanel.setup','jquery.cycle.min', 'jquery.cycle.setup'));
	
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
		        <li class="active"><?php echo $this->Html->link( 'Home', array('controller' => 'pages', 'action' => 'display'),array("class"=>"", "escape"=>false),
			    false
			);?></li>
		        <li>
		        	<?php echo $this->Html->link('School Demo',array('controller' => 'schools', 'action' => 'index'));?>
		        	
		        		
		        </li>
		        <li><?php echo $this->Html->link('Student Demo',array('controller' => 'students', 'action' => 'index'));?></li>
		        <li><?php echo $this->Html->link('Teacher Demo',array('controller' => 'teachers', 'action' => 'index'));?></li>
		        <li class="last"><?php echo $this->Html->link('Course Demo',array('controller' => 'classes', 'action' => 'index'));?></li>
		      </ul>
		    </div>
		    <br class="clear" />
		  </div>
		</div>
		<!-- ####################################################################################################### -->
		<div class="wrapper col2">
		  <div id="featured_slide">
		    <div class="featured_box"><a href="#"><?php echo $this->Html->image('handswriting.jpg', array('alt'=> __('Hands writing on a notebook', true), 'border' => '0'))?></a>
		      <div class="floater">
		        <h2>1.School Administrators Portal</h2>
		        <p>School Administrators, Elimu will put you in charge of your school. All the tools you need to register and administer your staff, faculty, and students is a click away. 
		        	<ol>
					<li>This module manages all characteristics of student information</li>
					<li>Academic progress</li>
					<li>Use numerous ad-hoc and static report generators.</li>
					</ol>
		        </p>
		        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
		      </div>
		    </div>
		    <div class="featured_box"><a href="#"><?php echo $this->Html->image('childrenlearning.jpg', array('alt'=> __('Students in a classroom', true), 'border' => '0'))?></a>
		      <div class="floater">
		        <h2>2. Teachers Portal</h2>
		        <p>This module will be centralized and accessible by teachers for Gradebook, Classroom Attendance, Subjects, as well as students contact information.</p>
		        <p>Take control of your classroom. Record daily attendance, update the class roster, share content with your students, grade exams and quizzes, contact the parents, measure your effectiveness with up to date statistics on your students' progress.</p>
		        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
		      </div>
		    </div>
		    <div class="featured_box"><a href="#"><?php echo $this->Html->image('africanchildreading.jpg', array('alt'=> __('Girl reading a book', true), 'border' => '0'))?></a>
		      <div class="floater">
		        <h2>3. Parents Students Portal</h2>
		        <p>Online access for students  and parents to coordinate coursework, track academic progress, and give transparency to parents.</p>
		        <p>With The Jangal module, you are in charge of your education. Instantly know your grades, prepare for exams, contact your teachers, know how you are doing compared to the rest of the class. Jangal puts your education 
		        in your hands and gives you the best tools you need to succeed </p>
		        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
		      </div>
		    </div>
		     <div class="featured_box"><a href="#"><?php echo $this->Html->image('handsonthenotebook.jpg', array('alt'=> __('Girl reading a book', true), 'border' => '0'))?></a>
		      <div class="floater">
		        <h2>4. Educational and Government Institutions Portal</h2>
		        <p>Help track school district  and city Educational and academic progress at national and population demographic levels. Provide data on trends and opportunities. </p>
		        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
		      </div>
		    </div>
		    
		  </div>
		</div>
		<!-- ####################################################################################################### -->
		<div class="wrapper col3">
		  <div id="homecontent">
		    <div class="fl_left">
		      <div class="column2">
		        <ul>
		          <li>
		            <h2>Student Of The Month</h2>
		            <div class="imgholder"><?php echo $this->Html->image('autableau.jpg', array('alt'=> __('Girl reading a book', true), 'border' => '0', "width"=>240, "height"=>130))?></div>
		            <p>Mamadou Bineta</p>
		            <p>In his last year of high school at Lycee Elimu, Mamadou has impressed his teachers not only with his excellent grades, but with the way he
		            conducts himself towards his fellow students, and his elders. He is an accomplished athlete, captain of the Basketball team, and recently 
		            was awarded the Title of Student of The Year. The entire Lycee Elimu staff would like to congratulate Mamadou on his achievements and commend him for his
		            excellent school performance </p>
		            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
		          </li>
		          <li class="last">
		            <h2>Teacher Of The Month</h2>
		            <div class="imgholder"><?php echo $this->Html->image('teacher.jpg', array('alt'=> __('Teacher', true), 'border' => '0', "width"=>240, "height"=>130))?></div>
		            <p>Mickael Gohou</p>
		            <p>At Lycee Elimu, no teacher is more well-known nor adored by his student than Mickael Gohou, Mathematics teacher. Year after year, he has succeeded in turning a discipline most feared
		            by some students into a fun learning environment. The numbers speak for themselves. His classrooms are constantly full and very few of his students actually fail his classes and other faculty report
		            better grades and skills for students who go through his classes. Congratulations Mickael Gohou!</p>
		            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
		          </li>
		        </ul>
		        <br class="clear" />
		      </div>
		      <div class="column2">
		        <h2>What's new?</h2>
		       <a href="#"><?php echo $this->Html->image('maristes.jpg', array('alt'=> __('Ecole Maristes', true), 'border' => '0', "width"=>80, "height"=>80, 'class'=>'img1'))?>
		       		<?php echo $this->Session->flash(); ?>
				<p> Coming soon a whole lot of system upgrades and features for our users.

					
		      </div>
		    </div>
		    <div class="fl_right">
		      <h2>Latest From The School Blog</h2>
		      <ul>
		        <li>
		          <div class="imgholder"><a href="#"><?php echo $this->Html->image('maristes.jpg', array('alt'=> __('Ecole Maristes', true), 'border' => '0', "width"=>80, "height"=>80))?></a></div>
		          <p><strong><a href="#">Elimu upgraded to 1.0</a></strong></p>
		          <p>Elimu has been upgraded schoolwide to the latest release 1.0. New functionality has been added that allows student to turn in homework through the Student Portal.</p>
		        </li>
		        <li>
		          <div class="imgholder"><a href="#"><?php echo $this->Html->image('maristes.jpg', array('alt'=> __('Ecole Maristes', true), 'border' => '0', "width"=>80, "height"=>80))?></a></div>
		          <p><strong><a href="#">Parent/Teacher Meeting</a></strong></p>
		          <p>Parents will meet with teachers on Wednesday November 16 2011 at 18:00 to discuss their children's progress and bring up any concerns they might have. An email reminder
		          will be sent out a week before the meeting.</p>
		        </li>
		        <li>
		          <div class="imgholder"><a href="#"><?php echo $this->Html->image('maristes.jpg', array('alt'=> __('Ecole Maristes', true), 'border' => '0', "width"=>80, "height"=>80))?></a></div>
		          <p><strong><a href="#">Note from the School Administration Office</a></strong></p>
		          <p>We would like to remind students that all cell phones should be turned off or put on silent during school hours, which are from 8:00 to 17:00.</p>
		        </li>
		        <li>
		          <div class="imgholder"><a href="#"><?php echo $this->Html->image('maristes.jpg', array('alt'=> __('Ecole Maristes', true), 'border' => '0', "width"=>80, "height"=>80))?></a></div>
		          <p><strong><a href="#">Upcoming Holiday</a></strong></p>
		          <p>School will be closed August 7th 2011 in observance of the Independance Day</p>
		        </li>
		        <li class="last">
		          <div class="imgholder"><a href="#"><?php echo $this->Html->image('maristes.jpg', array('alt'=> __('Ecole Maristes', true), 'border' => '0', "width"=>80, "height"=>80))?></a></div>
		          <p><strong><a href="#">Register for Your Classes</a></strong></p>
		          <p>School opens on October 5th 2011. Make sure to register your children by September 25th 2011.</p>
		        </li>
		      </ul>
		    </div>
		    <br class="clear" />
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
		    <p style="clear:both"></p>
		    <p><a href="http://www.freedigitalphotos.net/images/view_photog.php?photogid=1803">Image: africa / FreeDigitalPhotos.net</a></p>
		    <p><a href="http://www.freedigitalphotos.net/images/view_photog.php?photogid=1803">Image: africa / FreeDigitalPhotos.net</a></p>
		    <p><a href="http://www.freedigitalphotos.net/images/view_photog.php?photogid=1803">Image: africa / FreeDigitalPhotos.net</a></p>
		    <br class="clear" />
		  </div>
		</div>
	</body>
</html>
