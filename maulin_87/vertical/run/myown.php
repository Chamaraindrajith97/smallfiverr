<html>
    
    <head>
        <style>
/*            .link {*/
/*                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);*/
/*--blue: #007bff;*/
/*--indigo: #6610f2;*/
/*--purple: #6f42c1;*/
/*--pink: #e83e8c;*/
/*--red: #dc3545;*/
/*--orange: #fd7e14;*/
/*--yellow: #ffc107;*/
/*--green: #28a745;*/
/*--teal: #20c997;*/
/*--cyan: #17a2b8;*/
/*--white: #fff;*/
/*--gray: #6c757d;*/
/*--gray-dark: #343a40;*/
/*--primary: #007bff;*/
/*--secondary: #6c757d;*/
/*--success: #28a745;*/
/*--info: #17a2b8;*/
/*--warning: #ffc107;*/
/*--danger: #dc3545;*/
/*--light: #f8f9fa;*/
/*--dark: #343a40;*/
/*--breakpoint-xs: 0;*/
/*--breakpoint-sm: 576px;*/
/*--breakpoint-md: 768px;*/
/*--breakpoint-lg: 992px;*/
/*--breakpoint-xl: 1200px;*/
/*--font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";*/
/*--font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;*/
/*-webkit-font-smoothing: antialiased;*/
/*font-family: Open Sans, sans-serif;*/
/*box-sizing: inherit;*/
/*text-decoration: none;*/
/*width: 100%;*/
/*text-align: inherit;*/
/*position: relative;*/
/*display: block;*/
/*padding: 0.75rem 1.25rem;*/
/*border: 1px solid rgba(0, 0, 0, 0.125);*/
/*margin-top: 0.25rem !important;*/
/*margin-bottom: 0.25rem !important;*/
/*padding-top: 0.25rem !important;*/
/*padding-bottom: 0.25rem !important;*/
/*font-weight: 400 !important;*/
/*font-style: inherit;*/
/*line-height: inherit;*/
/*color: #417fb2;*/
/*border-width: 0;*/
/*background-color: #f1f1f1;*/
/*margin: 5px 0;*/
/*border-radius: 3px;*/
/*font-size: 13px;*/
/*transition: all 0.1s ease-out;*/
/*            }*/
/*            .mr-1 {*/
/*                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);*/
/*--blue: #007bff;*/
/*--indigo: #6610f2;*/
/*--purple: #6f42c1;*/
/*--pink: #e83e8c;*/
/*--red: #dc3545;*/
/*--orange: #fd7e14;*/
/*--yellow: #ffc107;*/
/*--green: #28a745;*/
/*--teal: #20c997;*/
/*--cyan: #17a2b8;*/
/*--white: #fff;*/
/*--gray: #6c757d;*/
/*--gray-dark: #343a40;*/
/*--primary: #007bff;*/
/*--secondary: #6c757d;*/
/*--success: #28a745;*/
/*--info: #17a2b8;*/
/*--warning: #ffc107;*/
/*--danger: #dc3545;*/
/*--light: #f8f9fa;*/
/*--dark: #343a40;*/
/*--breakpoint-xs: 0;*/
/*--breakpoint-sm: 576px;*/
/*--breakpoint-md: 768px;*/
/*--breakpoint-lg: 992px;*/
/*--breakpoint-xl: 1200px;*/
/*--font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";*/
/*--font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;*/
/*font-family: Open Sans, sans-serif;*/
/*color: #36f;*/
/*font-size: inherit;*/
/*font-style: inherit;*/
/*font-weight: inherit;*/
/*line-height: inherit;*/
/*cursor: pointer;*/
/*width: 20px;*/
/*box-sizing: inherit;*/
/*vertical-align: middle;*/
/*border-style: none;*/
/*margin-right: 0.25rem !important;*/
/*            }*/
            

        </style>
    </head>
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
                          program: 'notepad.exe',
                          workingfolder: 'C:\\Temp',
                          switches: '',
                          windowstate: 'max',
                          showerrors: 'true'
                        } })); 
         });
     });
   </script>
   <script type="text/javascript">
     jQuery(document).ready(function()
     {
         jQuery("#teams_link").on("click", function (event) 
         {      
          event.preventDefault(); // Recommended to stop the link from doing anything else
          document.dispatchEvent(new CustomEvent('funcIntraLaunch',
          {
              'detail': { task: 'run',
                          program: 'Update.exe',
                          workingfolder: 'C:\\Temp',
                          switches: '',
                          windowstate: 'max',
                          showerrors: 'true'
                        } })); 
         });
     });
   </script>
      <script type="text/javascript">
     jQuery(document).ready(function()
     {
         jQuery("#viewpoint_link").on("click", function (event) 
         {      
          event.preventDefault(); // Recommended to stop the link from doing anything else
          document.dispatchEvent(new CustomEvent('funcIntraLaunch',
          {
              'detail': { task: 'run',
                          program: 'C:\\Program Files (x86)\\Viewpoint Construction Software\\Vista\\bin\\Viewpoint.Vista.Launcher.exe',
                          workingfolder: 'C:\\Temp',
                          switches: '',
                        //   windowstate: 'max',
                          showerrors: 'true'
                        } })); 
         });
     });
   </script>
   <script type="text/javascript">
     jQuery(document).ready(function()
     {
         jQuery("#excel_link").on("click", function (event) 
         {      
          event.preventDefault(); // Recommended to stop the link from doing anything else
          document.dispatchEvent(new CustomEvent('funcIntraLaunch',
          {
              'detail': { task: 'run',
                          program: 'excel.exe',
                          workingfolder: 'C:\\Temp',
                          switches: '',
                          windowstate: 'max',
                          showerrors: 'true'
                        } })); 
         });
     });
   </script>
      <script type="text/javascript">
     jQuery(document).ready(function()
     {
         jQuery("#outlook_link").on("click", function (event) 
         {      
          event.preventDefault(); // Recommended to stop the link from doing anything else
          document.dispatchEvent(new CustomEvent('funcIntraLaunch',
          {
              'detail': { task: 'run',
                          program: 'outlook.exe',
                          workingfolder: 'C:\\Temp',
                          switches: '',
                          windowstate: 'max',
                          showerrors: 'true'
                        } })); 
         });
     });
   </script>
       <script type="text/javascript">
     jQuery(document).ready(function()
     {
         jQuery("#acrobat_link").on("click", function (event) 
         {      
          event.preventDefault(); // Recommended to stop the link from doing anything else
          document.dispatchEvent(new CustomEvent('funcIntraLaunch',
          {
              'detail': { task: 'run',
                          program: 'acrobat.exe',
                          workingfolder: 'C:\\Temp',
                          switches: '',
                          windowstate: 'max',
                          showerrors: 'true'
                        } })); 
         });
     });
   </script>
 <style>
     body {
  overflow: hidden; /* Hide scrollbars */
}
 </style>
   <body >
       <div style="justify-content:space-around;display: flex;" >
      <!--<a href="#" id="notepad_link"><img _ngcontent-wdd-c11="" class="mr-1" width="20" src="https://d3sut91l4ajo4b.cloudfront.net/icons/products-regular/Product-icons-_V.png">ERP</a>-->
      <!--<a href="#" id="notepad_link"><img _ngcontent-wdd-c11="" class="mr-1" width="20" src="https://icon2.cleanpng.com/20180511/fle/kisspng-notepad-microsoft-office-5af578f47f7b92.6294394815260367245222.jpg">Notepad</a>-->
      <!--<a href="#" id="notepad_link"><img _ngcontent-wdd-c11="" class="mr-1" width="20" src="./assets/images/outlook.png">Outlook</a>-->
      <!--<a href="#" id="notepad_link"><img _ngcontent-wdd-c11="" class="mr-1" width="20" src="./assets/images/amazon.png">Amazon</a>-->
      <!--<a href="#" id="notepad_link"><img _ngcontent-wdd-c11="" class="mr-1" width="20" src="./assets/images/microsoft_store.png">Microsoft Store</a>-->
      <!--<a href="#" id="notepad_link"><img _ngcontent-wdd-c11="" class="mr-1" width="20" src="./assets/images/shoping.png">Shopping</a>-->
      <!--<a href="#" id="notepad_link"><img _ngcontent-wdd-c11="" class="mr-1" width="20" src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-facebook-512.png">Facebook</a>-->
      <!--<a href="#" id="notepad_link"><img _ngcontent-wdd-c11="" class="mr-1" width="20" src="https://buzzuploads.com/images/2020/01/23/eBay-Logo---Transparent-Background.png">Ebay</a>-->
      <!--<a href="#" id="notepad_link"><img _ngcontent-wdd-c11="" class="mr-1" width="20" src="./assets/images/game_online.png">Online Games</a>-->
      <!--<a href="#" id="notepad_link"><img _ngcontent-wdd-c11="" class="mr-1" width="20" src="./assets/images/rewards.png">Rewards</a>-->
      
      <a href="#" id="viewpoint_link"><img _ngcontent-wdd-c11="" class="mr-1" width="25" src="https://d3sut91l4ajo4b.cloudfront.net/icons/products-regular/Product-icons-_V.png"></a>
      <a  target="_blank" href="https://na139.salesforce.com/home/home.jsp"><img _ngcontent-wdd-c11="" class="mr-1" width="30" height="25" src="https://www.diversityjobs.com/wp-content/uploads/salesforce.png"></a>
      <a target="_blank" href="https://newsouth.app.box.com/folder/0"><img _ngcontent-wdd-c11="" class="mr-1" width="25" src="https://banner2.cleanpng.com/20180405/stq/kisspng-box-cloud-computing-cloud-storage-business-organiz-app-5ac6c398a1e554.3881575715229756406631.jpg"></a>
      <a target="_blank" href="https://ew33.ultipro.com/Login.aspx?ReturnUrl=%2f"><img _ngcontent-wdd-c11="" class="mr-1" width="25" src="https://slack-files2.s3-us-west-2.amazonaws.com/avatars/2018-06-05/376410446293_cf228742de5cfad14cda_512.png"></a>
      <a href="#" id="teams_link"><img _ngcontent-wdd-c11="" class="mr-1" width="25" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Microsoft_Office_Teams_%282018%E2%80%93present%29.svg/1200px-Microsoft_Office_Teams_%282018%E2%80%93present%29.svg.png"></a>
      <a href="#" id="excel_link"><img _ngcontent-wdd-c11="" class="mr-1" width="25" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Microsoft_Excel_2013_logo.svg/782px-Microsoft_Excel_2013_logo.svg.png"></a>
      <a href="#" id="outlook_link"><img _ngcontent-wdd-c11="" class="mr-1" width="25" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Outlook.com_icon.svg/1200px-Outlook.com_icon.svg.png"></a>
      <a href="#" id="acrobat_link"><img _ngcontent-wdd-c11="" class="mr-1" width="25" src="https://p1.hiclipart.com/preview/943/808/22/adobe-acrobat-file-512x512-white-and-red-adobe-pdf-png-clipart.jpg"></a>
      </div>
   </body>
</html>