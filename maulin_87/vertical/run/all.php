<html>
   <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
   <script language="JavaScript" type="text/javascript"> var $jQuery = jQuery.noConflict(); </script>
 
   <script type="text/javascript">
     jQuery(document).ready(function()
     {
         jQuery(".intralaunch_link").on("click", function (event) 
         {      
           event.preventDefault(); // Recommended to stop the link from doing anything else
           document.dispatchEvent(new CustomEvent('funcIntraLaunch',
           {
              'detail': { task: jQuery(this).data('task'),
                          program: jQuery(this).data('program'),
                          switches: jQuery(this).data('switches'),
                          windowstate: jQuery(this).data('windowstate'),
                          showerrors: jQuery(this).data('showerrors'),
                          log: jQuery(this).data('log'),
                          options: jQuery(this).data('options'),
                          recallapp: jQuery(this).data('recallapp'),
                          workingfolder: jQuery(this).data('workingfolder'),
                          playsound: jQuery(this).data('playsound')
                        } })); 
         });
     });
   </script>
 
   <body> <div style="font-size:50px">
    
     <a href="#" class="intralaunch_link" data-task="run" data-program="%MY_DOCUMENTS%\\Important Letter.docx" data-switches="" data-windowstate="max" data-showerrors="true" data-log="" data-recallapp="" data-workingfolder="" data-playsound="">ERP</a>
      <a href="#" class="intralaunch_link" data-task="run" data-program="%MY_DOCUMENTS%\\Important Letter.docx" data-switches="" data-windowstate="max" data-showerrors="true" data-log="" data-recallapp="" data-workingfolder="" data-playsound="">Start new document</a>

 <br>
     <a href="#" class="intralaunch_link" data-task="macro" data-program="PRINTER_MANAGEMENT_FOLDER" data-switches="" data-windowstate="" data-showerrors="true" data-log="C:\\Windows\\log.txt" data-recallapp="" data-workingfolder="" data-playsound="">Manage Printers</a>
 <br>
     <a href="#" class="intralaunch_link" data-task="run" data-program="explorer.exe" data-switches="%MY_PICTURES%" data-windowstate="max" data-showerrors="true" data-log="" data-recallapp="" data-workingfolder="" data-playsound="C:\\Windows\\sound.wav">Open Windows File Explorer in 'My Pictures'</a>
  </div> </body>
</html>









<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>LocalConnector - chamara2536</title>

		<meta name="description" content="A full working example of IntraLaunch's capabilities and features.'" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/prettify.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="assets/css/main.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>


					<div class="page-content">
						<div class="page-header">
							<!--<h1>Applications</h1>-->
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-sm-11 welcometext">
                              
                                        <table width="100%">
                                           <tr>
                                                <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: explorer" data-task="run" data-program="C:\\Program Files (x86)\\Viewpoint Construction Software\\Vista\\bin\\Viewpoint.Vista.Launcher.exe" data-switches="" data-log="" data-recallapp="" data-workingfolder="" data-playsound="" data-showerrors="true"><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_explorer.png" border=0 width="64" height="64" class="iconimage"><BR>ERP<BR>Soft</a></td>
                                             <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: explorer" data-task="run" data-program="explorer" data-switches="" data-log="" data-recallapp="" data-workingfolder="" data-playsound="" data-showerrors="true"><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_explorer.png" border=0 width="64" height="64" class="iconimage"><BR>Windows<BR>File Explorer</a></td>
                                             <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: mspaint.exe" data-task="run" data-program="mspaint.exe" data-switches="" data-log="" data-recallapp="" data-workingfolder="" data-playsound="" data-showerrors="true"><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_paint.png" border=0 width="64" height="64" class="iconimage"><BR>Microsoft Paint</a></a></td>
                                             <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: explorer %MY_MUSIC%" data-task="run" data-program="explorer" data-switches="%MY_MUSIC%" data-log="" data-recallapp="" data-workingfolder="" data-showerrors="true" data-playsound=""><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_music.png" border=0 width="64" height="64" class="iconimage"><BR>Browse 'My Music'</a></td>
                                             <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: notepad.exe" data-task="run" data-program="notepad" data-switches="" data-log="" data-recallapp="" data-workingfolder="" data-playsound="" data-showerrors="true" data-windowstate="min"><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_notepad.png" border=0 width="64" height="64" class="iconimage"><BR>Notepad<BR><span class="smallicontext">(Minimized)</span></a></td>
                                             <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: excel" data-task="find" data-program="excel" data-switches="" data-log="" data-recallapp="" data-workingfolder="" data-playsound="" data-showerrors="true"><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_excel.png" border=0 width="64" height="64" class="iconimage"><BR>Microsoft Excel</a></td>
                                           </tr>
                                        <table>
                                        <BR><BR><BR>
                                        <table width="100%">
                                           <tr>
                                             <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: http://www.particlesoftware.com/temp/Test%20PDF.pdf" data-task="run" data-program="http://www.particlesoftware.com/temp/Test%20PDF.pdf" data-switches="" data-log="" data-recallapp="" data-workingfolder="" data-playsound="" data-showerrors="true"><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_adobe.png" border=0 width="64" height="64" class="iconimage"><BR>Acrobat PDF</a><BR><span class="smallicontext">(Directly via HTTP)</span></td>
                                             <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: http://www.particlesoftware.com/temp/Simple%20Application.exe" data-task="run" data-program="http://www.particlesoftware.com/temp/Simple%20Application.exe" data-switches="" data-log="" data-recallapp="" data-workingfolder="" data-playsound="" data-showerrors="true"><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_exe.png" border=0 width="64" height="64" class="iconimage"><BR>Sample Executable</a><BR><span class="smallicontext">(Directly via HTTP)</span></td>
                                             <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: cmd" data-task="run" data-program="cmd" data-switches="" data-log="" data-recallapp="" data-workingfolder="c:\\" data-playsound="" data-showerrors="true"><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_cmd.png" border=0 width="64" height="64" class="iconimage"><BR>Command Prompt</a></td>
                                             <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: notepad.exe %WIN_DIR%\WindowsUpdate.log" data-task="run" data-program="notepad" data-switches="%WIN_DIR%\WindowsUpdate.log" data-log="" data-recallapp="" data-workingfolder="" data-playsound="" data-showerrors="true"><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_notepad.png" border=0 width="64" height="64" class="iconimage"><BR>Notepad</a><BR><span class="smallicontext">(Also specify the file)</span></td>
                                             <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: http://www.particlesoftware.com/temp/TestWord.doc" data-task="run" data-program="http://www.particlesoftware.com/temp/TestWord.doc" data-switches="" data-log="" data-recallapp="" data-workingfolder="" data-playsound="" data-showerrors="true"><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_word.png" border=0 width="64" height="64" class="iconimage"><BR>Microsoft Word</a><BR><span class="smallicontext">(Directly via HTTP)</span></td>
                                           </tr>
                                        <table>
                                        <BR><BR><BR>
									</div>
                                    <div class="col-sm-1" id="drivebox">
                                    </div><!-- /.col -->
								</div><!-- /.row -->


								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							
							<span class="bottomtext">LocalConnector &copy; <a href="http://pro.cssbis.com/team.php" target="_blank">chamara2536</a> 2020</span>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery.2.1.1.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/jquery.sparkline.min.js"></script>
		<script src="assets/js/jquery.flot.min.js"></script>
		<script src="assets/js/jquery.flot.pie.min.js"></script>
		<script src="assets/js/jquery.flot.resize.min.js"></script>

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
  		<script src="assets/js_moved/index.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/prettify.min.js"></script>

        <script type="text/javascript" src="assets/js_moved/zebra/public/javascript/zebra_tooltips.js"></script>
        <link rel="stylesheet" href="assets/js_moved/zebra/public/css/zebra_tooltips.css" type="text/css">

        <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
        <script language="JavaScript" type="text/javascript"> var $jQuery = jQuery.noConflict(); </script>
        <script src="assets/js_moved/filesize.min.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function ()
            {
                // Ignore this, just tooltip junk 
                // Hide the tooltip forever after it is clicked
                jQuery(".hide_this_tip").on("click", function (event) { event.preventDefault(); tipAllTips.hide($(this), true); });

                // Add the tooltips for some IntraLaunch objects, just ignore this (http://stefangabos.ro/jquery/zebra-tooltips/)
                var tipAllTips = new $.Zebra_Tooltips($('.tooltips'), { 'background_color': '#D15B47', 'color': '#FEFEFE', 'prerender': true, 'default_position': 'below', 'vertical_offset': '-10' });
            });
        </script>


        <!-- IntraLaunch scripts -->
        <script type="text/javascript">
            jQuery(document).ready(function ()
            {

                /***
                * IntraLaunch object
                ***/
                jQuery(".intralaunch_link").on("click", function (event)
                {
                    event.preventDefault();
                    document.dispatchEvent(new CustomEvent('funcIntraLaunch',
                    {
                        'detail': {
                            task: jQuery(this).data('task'),
                            program: jQuery(this).data('program'),
                            switches: jQuery(this).data('switches'),
                            windowstate: jQuery(this).data('windowstate'),
                            showerrors: jQuery(this).data('showerrors'),
                            log: jQuery(this).data('log'),
                            options: jQuery(this).data('options'),
                            recallapp: jQuery(this).data('recallapp'),
                            workingfolder: jQuery(this).data('workingfolder'),
                            playsound: jQuery(this).data('playsound')
                        }
                    }));
                });

            });


            
            jQuery(function($) 
            {
                window.prettyPrint && prettyPrint();
                $('#id-check-horizontal').removeAttr('checked').on('click', function(){
                    $('#dt-list-1').toggleClass('dl-horizontal').prev().html(this.checked ? '&lt;dl class="dl-horizontal"&gt;' : '&lt;dl&gt;');
                });
            })
        </script>

        

   <script type="text/javascript">
       jQuery(document).ready(function() 
       { 
          ///////////////////////////////////////////////////////////////////////////////////////////////
          // Check to see if the IntraLaunch extension is install, and if so is the connector responding
          ///////////////////////////////////////////////////////////////////////////////////////////////
          var bExtensionInstalled = false;

          // When checking extension this is called after to set the above variable to true/false
          jQuery.extend ({ funcCheckIntraLaunchReturn: function (response) { if (response == 1) { bExtensionInstalled = true; } else { bExtensionInstalled = false; } } }); 

          // When checking the connector this is called after to see if it's missing and if so jump to a new URL via Javascript
          jQuery.extend
          ({
              funcCheckIntraLaunchConnectorReturn: function (responseIntraLaunchLastOpType, responseIntraLaunchDOMElement, responseIntraLaunchDataSet) 
              {
                // If IntraLaunch passes the lock test (the current web page domain/URL is in the extensions Options) then 
                // CONNECTOR_MISSING means the connector really is not found or broken. CONNECTOR_RESTRICTED means IntraLaunch
                // did not pass the lock test and therefore the extension will not even test for IntraLaunch even if it is installed
                // and working properly for security reasons.
                if (responseIntraLaunchLastOpType == "check_connector" && responseIntraLaunchDataSet == "CONNECTOR_RESTRICTED") { location.href = 'http://www.particlesoftware.com/examples/complete/install.html?restricted=1'; }
                else if (responseIntraLaunchLastOpType == "check_connector" && responseIntraLaunchDataSet == "CONNECTOR_MISSING") { location.href = 'http://www.particlesoftware.com/examples/complete/install.html'; }
                else { jQuery('#main_box').fadeIn(200); jQuery('#loadingmessage').html('&nbsp;overview &amp; storage statistics'); } 
              }
          }); 

          try { document.dispatchEvent(new CustomEvent('funcCheckIntraLaunch')); } catch (e) { }

          // Check and see what funcCheckIntraLaunch returned a few seconds later
          window.setTimeout(function() { funcCheckIntraLaunchDelay(bExtensionInstalled); }, 2000);

          function funcCheckIntraLaunchDelay(bExtensionInstalled) 
          {
            // IntraLaunch extension not responding, must not be installed
            if (!bExtensionInstalled) { location.href = 'http://www.particlesoftware.com/examples/complete/install.html'; }
            else
            {
               // Extension is install, check if it's connector is installed and responsive
               try { document.dispatchEvent(new CustomEvent('funcCheckIntraLaunchConnector', { 'detail': { task: 'check_connector' } })); } 
               catch (e) { }
            }
          } 
       });
   </script>


        	</body>
</html>
