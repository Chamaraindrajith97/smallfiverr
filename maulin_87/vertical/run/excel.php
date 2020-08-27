<html>
    <!--intra-->
   <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
   <script language="JavaScript" type="text/javascript"> var $jQuery = jQuery.noConflict(); </script>
 
   <script type="text/javascript">
     jQuery(document).ready(function()
     {
         jQuery("#notepad_link").on("click", function (event) 
         {      
           event.preventDefault(); // Recommended to stop the link from doing anything else
           document.dispatchEvent(new CustomEvent('funcIntraLaunch',
           {
              'detail': { task: 'run',
                          program: 'C:\\KMPlayer\\KMPlayer.exe',
                          workingfolder: 'C:\\Temp',
                          switches: '',
                          windowstate: 'max',
                          showerrors: 'true'
                        } })); 
         });
     });
   </script>
   <!--intra-->
   
   <!--autoclick-->
<script>
jQuery(function(){
   jQuery('#notepad_link').click();
});
</script>
<!--autoclick-->



   <body>
      <a style="display:none" href="#" id="notepad_link">Open notepad</a>
   </body>
   

</html>

