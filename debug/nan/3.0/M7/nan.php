<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	# Author: 		Michael Rennie
	# Date:			November 10, 2006
	#
	# Description: a new and noteworty entry for 3.0M7 debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project New and Noteworthy for 3.3M7";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, new, noteworthy";
	$pageAuthor		= "Debug Team";
	
	include("../../../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<TABLE cellSpacing=0 cellPadding=10 width="80%" border=0>
		  <TBODY>
		  <TR>
		    <TD colSpan=2>
		      <HR>
		    </TD></TR>
		  <TR>
		    <TD valign=top align=left width="30%">
		      <P align=right><B>Popups for inspect/display</B> </P></TD>
		    <TD width="70%">When a display or inspect is performed from the Java editor the result is displayed in a pop-up window, similar to "javadoc hover". <p></P>
		      <P><IMG src="popup_display.gif"></P></TD></TR>
		  <TR>
		  <TR>
		        <TD colSpan=2>
		          <HR>
		      </TD>
		    </TR>
		    <TR>
		        <TD valign=top align=left width="30%">
		          <P align=right><B>Run in the context menu</B> </P></TD>
		
		    <TD width="70%">The ability to launch from the context menu is back.
					<P><img src="run_in_context_menu.gif"></P>
		    </TD></TR>
		    <TR>
		      <TD colSpan=2>
		        <HR>
		      </TD>
		    </TR>
		  <TR>
		      <TD valign=top align=left width="30%">
		        <P align=right><B>Step with filters on all step actions</B> </P></TD>
		      <TD width="70%">"Use Step Filters/Step Debug" toggle action replaces the previous "Step
		with Filters/Step Debug" action.
		
		    </TD></TR>
		 <TR>
		      <TD colSpan=2>
		        <HR>
		      </TD>
		    </TR>
		    <TR>
			      <TD valign=top align=left width="30%">
			        <P align=right><B>Step into selection on any line</B> </P></TD>
			      <TD width="70%">Step into selection can now occur on any line and is not restricted to the current line of execution
		    </TD></TR>
		    <TR>
			      <TD colSpan=2>
			        <HR>
			      </TD>
			    </TR>
			    <TR>
				<TD valign=top align=left width="30%">
				<P align=right><B>Refactoring support for launch configurations</B> </P></TD>
				<TD width="70%">Launch configurations are updated for:<ul>
		<li>project renaming</li>
		<li>Java type renaming</Li>
		<li>Java file (compilation unit) renaming</Li></ul>
				<P><img src="refractoring_launch_config.gif"></P>
				    </TD></TR>
				    <TR>
					      <TD colSpan=2>
					        <HR>
					      </TD>
			    </TR>
		
			    <TR>
				      <TD valign=top align=left width="30%">
				        <P align=right><B>Default project classpath entry on launch configuration</B> </P></TD>
				      <TD width="70%">A "Default Project Classpath" entry has been created. It
		is added to the classpath when "Restore Defaults" is used, or when a new
		configuration is created. This allows for better user control/organization of a Java launch's classpath
		    </TD></TR>
		    <TR>
			      <TD colSpan=2>
			        <HR>
			      </TD>
			    </TR>
				    <TR>
					      <TD valign=top align=left width="30%">
					        <P align=right><B>Method arguments values even when no debug attributes</B> </P></TD>
					      <TD width="70%">When the
		names of parameter variables cannot be determined from the class file debug info or source
		code, meaningful invented names like "arg1", "arg2", etc. are used so that the user will immediately
		understand what's going on.
		
								<P><img src="guessing_variables_name.gif"></P>
		    </TD></TR>
		    <TR>
					      <TD colSpan=2>
					        <HR>
					      </TD>
				    </TR>
			  <TR>
			      <TD valign=top align=left width="30%">
			        <P align=right><B>Ant editor code assistance updated to Ant 1.6.0</B> </P></TD>
		
		    <TD width="70%">Ant editor code assist proposals include the updates for Ant 1.6.0.
		    </TD></TR>
			  <TR>
			    <TD colSpan=2>
			      <HR>
			    </TD>
		    </TR>
				  <TR>
				      <TD valign=top align=left width="30%">
				        <P align=right><B>Ant specific error indications in buildfile</B> </P></TD>
		
		    <TD width="70%">The error annotations in the Ant editor are no longer limited to generic XML error messages.
					<P><img src="specific_error_indications.gif"></P>
		    </TD></TR>
				  <TR>
				    <TD colSpan=2>
				      <HR>
				    </TD>
		    </TR>
		     <TR>
				      <TD valign=top align=left width="30%">
				        <P align=right><B>Running targets from the Ant editor outline</B> </P></TD>
		
			    <TD width="70%">Actions have been added to the context menu of the Ant editor outline that launch a build.
						<P><img src="run_ant_from_outline.gif"></P>
		    </TD></TR>
		    	  <TR>
					    <TD colSpan=2>
					      <HR>
					    </TD>
			    </TR>
			     <TR>
					      <TD valign=top align=left width="30%">
					        <P align=right><B>Text hovering added for the Ant editor</B> </P></TD>
		
				    <TD width="70%">Text hovers are presented for properties, targets, and referenced objects such as paths.
							<P><img src="ant_text_hovering.gif"></P>
		    </TD></TR>
		    <TR>
						    <TD colSpan=2>
						      <HR>
						    </TD>
				    </TR>
				     <TR>
						      <TD valign=top align=left width="30%">
						        <P align=right><B>Buildfile formatter in the Ant editor</B> </P></TD>
		
					    <TD width="70%">A first release of a formatter for Ant buildfiles is included.
		    </TD></TR>
		    </TBODY></TABLE>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>