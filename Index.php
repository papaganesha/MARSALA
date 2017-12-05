
<html class="nojs html" lang="pt-BR">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2017.0.3.363"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musemenu.js", "webpro.js", "musewpdisclosure.js", "require.js", "index.css"], "outOfDate":[]};
</script>
  
  <link rel="shortcut icon" href="images/marsala-tec-favicon.ico?crc=4215889845"/>
  <title>Marsala Tec</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=443350757"/>
  <link rel="stylesheet" type="text/css" href="css/index.css?crc=3998982832" id="pagesheet"/>
  <!-- JS includes -->
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?crc=4241844378" type="text/javascript"></script>
  <![endif]-->
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript">// <![CDATA[
$(document).ready(function() {
function filterPath(string) {
return string
.replace(/^\//,'')
.replace(/(index|default).[a-zA-Z]{3,4}$/,'')
.replace(/\/$/,'');
}
$('a[href*=#]').each(function() {
if ( filterPath(location.pathname) == filterPath(this.pathname)
&& location.hostname == this.hostname
&& this.hash.replace(/#/,'') ) {
var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
if ($target) {
var targetOffset = $target.offset().top;
$(this).click(function() {
$('html, body').animate({scrollTop: targetOffset}, 300);
return false;
});
}
}
});
});
// ]]></script>
   </head>
 <body>
	<?php
        $sql = new mysqli ("127.0.0.1","root","" ,"BANCO");
        $sql -> set_charset ( 'utf8' );
        if ($sql->connect_errno) {
			printf("Conexao Falhou: %s\n", $sql->connect_error);
			exit();
		}

		$q = "SELECT stTextContent, ndTextContent, rdTextContent FROM textdata WHERE textID = '1'";
		if ($result = $sql->query($q)) {
			while ($row = $result->fetch_assoc()) {
				$txt1 = $row['stTextContent']; 
				$txt2 = $row['ndTextContent']; 
				$txt3 = $row['rdTextContent']; 
			}
		}
		$imageq = "SELECT imagePath FROM imagedata WHERE idpic = '1'";
		if ($imageresult = $sql->query($imageq)) {
			while ($row2 = $imageresult->fetch_assoc()) {
				$imgpath = $row2['imagePath']; 
			}
		}

	?>
  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu412"><!-- group -->
     <div class="clip_frame grpelem" id="u412"><!-- image -->
      <img class="block" id="u412_img" src="images/marsala%20(4).jpg?crc=4060323724" alt="" width="133" height="133"/>
     </div>
     <nav class="MenuBar clearfix grpelem" id="menuu1264"><!-- horizontal box -->
      <div class="MenuItemContainer clearfix grpelem" id="u1265"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem" id="u1266" href="index.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1267-4"><!-- content --><p>Marsala Tec</p></div></a>
      </div>
     </nav>
     <nav class="MenuBar clearfix grpelem" id="menuu1583"><!-- horizontal box -->
      <div class="MenuItemContainer clearfix grpelem" id="u1584"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem" id="u1585" href=#portifolio><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1586-4"><!-- content --><p>Portifolio</p></div></a>
      </div>
     </nav>
     <nav class="MenuBar clearfix grpelem" id="menuu1607"><!-- horizontal box -->
      <div class="MenuItemContainer clearfix grpelem" id="u1608"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem" id="u1609" href=#contato><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1610-4"><!-- content --><p>Contato</p></div></a>
      </div>
     </nav>
    </div>
    <div class="clearfix colelem" id="pu444"><!-- group -->
     <div class="clip_frame grpelem" id="u444"><!-- image -->
      <img class="block" id="u444_img" src="<?php echo $imgpath ?>" alt="" width="764" height="429"/>
     </div>
     <div class="clip_frame clearfix grpelem" id="u454"><!-- image -->
      <img class="position_content" id="u454_img" src="images/imagemimpresa.jpg?crc=4232092927" alt="" width="763" height="431"/>
     </div>
    </div>
    <div class="clearfix colelem" id="pu530-3"><!-- group -->
     <div class="clearfix grpelem" id="u530-3"><!-- content -->
      <p>&nbsp;</p>
     </div>
     <div class="clearfix grpelem" id="u536-4"><!-- content -->
     <p name="portifolio">Portfólio</p>
     </div>
     <div class="TabbedPanelsWidget clearfix grpelem" id="tab-panelu1641"><!-- vertical box -->
      <div class="TabbedPanelsTabGroup clearfix colelem" id="u1642"><!-- horizontal box -->
       <div class="TabbedPanelsTab clearfix grpelem" id="u1643"><!-- horizontal box -->
        <div class="NoWrap clearfix grpelem" id="u1646-4"><!-- content -->
         <p>Site 1</p>
        </div>
       </div>
       <div class="TabbedPanelsTab clearfix grpelem" id="u1647"><!-- horizontal box -->
        <div class="NoWrap clearfix grpelem" id="u1650-4"><!-- content -->
         <p>Site 2</p>
        </div>
       </div>
       <div class="TabbedPanelsTab clearfix grpelem" id="u1651"><!-- horizontal box -->
        <div class="NoWrap clearfix grpelem" id="u1654-4"><!-- content -->
         <p>Site 3</p>
        </div>
       </div>
      </div>
      <div class="TabbedPanelsContentGroup clearfix colelem" id="u1655"><!-- stack box -->
       <div class="TabbedPanelsContent clearfix grpelem" id="u1660"><!-- group -->
        <div class="clearfix grpelem" id="u1746-8"><!-- content -->
         <p id="u1746-2">Site 1</p>
         <p id="u1746-4"><?php echo $txt1 ?></p>
         <p id="u1746-6"><a href="http://www.google.com" target="_blank">LINK DO SITE</a></p>
        </div>
       </div>
       <div class="TabbedPanelsContent invi clearfix grpelem" id="u1664"><!-- group -->
        <div class="clearfix grpelem" id="u1760-8"><!-- content -->
         <p id="u1760-2">Site 2</p>
         <p id="u1760-4"><?php echo $txt2 ?></p>
         <p id="u1760-6"><a href="http://www.google.com" target="_blank">LINK DO SITE</a></p>
        </div>
       </div>
       <div class="TabbedPanelsContent invi clearfix grpelem" id="u1656"><!-- group -->
        <div class="clearfix grpelem" id="u1743-8"><!-- content -->
         <p id="u1743-2">Site 3</p>
         <p id="u1743-4"><?php echo $txt3 ?></p>
         <p id="u1743-6"><a href="http://www.google.com" target="_blank">LINK DO SITE</a></p>
        </div>
       </div>
      </div>
     </div>
     <div class="clearfix grpelem" id="u1896-3"><!-- content -->
      <p>&nbsp;</p>
     </div>
     <div class="size_fixed grpelem" id="u1927"><!-- custom html -->
      
<a href="https://twitter.com/joao_p_alves" class="twitter-follow-button" data-lang="pt" data-show-screen-name="true" data-size="large"></a>

     </div>
     <div class="clearfix grpelem" id="u1935-4"><!-- content -->
      <p>Redes Sociais</p>
     </div>
     <div class="clearfix grpelem" id="u1938-4"><!-- content -->
      <p>A Empresa</p>
     </div>
     <div class="clearfix grpelem" id="u1941-4"><!-- content -->
      <p>Rua Dos Bobos Numero 0</p>
     </div>
     <div class="clip_frame grpelem" id="u1944"><!-- image -->
      <img class="block" id="u1944_img" src="images/marsala%20(4)42x42.jpg?crc=4091118117" alt="" width="41" height="41"/>
     </div>
     <div class="clearfix grpelem" id="u1951-4"><!-- content -->
      <p>2017 Marsala Tec. Todos os direitos reservados</p>
     </div>
     <div class="clearfix grpelem" id="u1954-4"><!-- content -->
      <p>Desenvolvedores</p>
     </div>
     <div class="clip_frame grpelem" id="u1957"><!-- image -->
      <img class="block" id="u1957_img" src="images/imagem%20colada%20502x502.jpg?crc=486573603" alt="" width="163" height="163"/>
     </div>
     <div class="clip_frame grpelem" id="u1974"><!-- image -->
      <img class="block" id="u1974_img" src="images/imagem%20colada%20768x768.jpg?crc=149151131" alt="" width="163" height="163"/>
     </div>
     <div class="clip_frame grpelem" id="u1983"><!-- image -->
      <img class="block" id="u1983_img" src="images/imagem%20colada%20400x400.jpg?crc=507510123" alt="" width="163" height="163"/>
     </div>
     <div class="clearfix grpelem" id="u2276-4"><!-- content -->
      <p>Fone: (420)157303014</p>
     </div>
     <div class="size_fixed grpelem" id="u2308"><!-- custom html -->
      
    
    
<script name="contato" type="text/javascript" src="http://form.jotform.us/jsform/73316905986670"></script>

 
     </div>
    </div>
   </div>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js?crc=209076791" type="text/javascript">\x3C/script>');
</script>
  <!-- Other scripts -->
  <script type="text/javascript">
   // Decide weather to suppress missing file error or not based on preference setting
var suppressMissingFileError = false
</script>
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Alguns arquivos no servidor podem estar ausentes ou incorretos. Limpe o cache do navegador e tente novamente. Se o problema persistir, entre em contato com o autor do site.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),suppressMissingFileError?(f+="\nUse SuppressMissingFileError key in AppPrefs.xml to show missing file error pop up.",console.log(f)):alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?
setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.musemenu","webpro","musewpdisclosure"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.initWidget('.MenuBar', ['#bp_infinity'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.initWidget('#tab-panelu1641', ['#bp_infinity'], function(elem) { return new WebPro.Widget.TabbedPanels(elem, {event:'click',defaultIndex:0}); });/* #tab-panelu1641 */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=85721165" type="text/javascript" async data-main="scripts/museconfig.js?crc=436936948" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
  
  <!--HTML Widget code-->
  
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

    


    
   </body>
</html>
