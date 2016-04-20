function resizeText(multiplier) {
  if (document.body.style.fontSize == "") {
    document.body.style.fontSize = "0.82em";
  }
  document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.03) + "em";
}

(function($){$.InFieldLabels=function(b,c,d){var f=this;f.$label=$(b);f.label=b;f.$field=$(c);f.field=c;f.$label.data("InFieldLabels",f);f.showing=true;f.init=function(){f.options=$.extend({},$.InFieldLabels.defaultOptions,d);if(f.$field.val()!=""){f.$label.hide();f.showing=false};f.$field.focus(function(){f.fadeOnFocus()}).blur(function(){f.checkForEmpty(true)}).bind('keydown.infieldlabel',function(e){f.hideOnChange(e)}).change(function(e){f.checkForEmpty()}).bind('onPropertyChange',function(){f.checkForEmpty()})};f.fadeOnFocus=function(){if(f.showing){f.setOpacity(f.options.fadeOpacity)}};f.setOpacity=function(a){f.$label.stop().animate({opacity:a},f.options.fadeDuration);f.showing=(a>0.0)};f.checkForEmpty=function(a){if(f.$field.val()==""){f.prepForShow();f.setOpacity(a?1.0:f.options.fadeOpacity)}else{f.setOpacity(0.0)}};f.prepForShow=function(e){if(!f.showing){f.$label.css({opacity:0.0}).show();f.$field.bind('keydown.infieldlabel',function(e){f.hideOnChange(e)})}};f.hideOnChange=function(e){if((e.keyCode==16)||(e.keyCode==9))return;if(f.showing){f.$label.hide();f.showing=false};f.$field.unbind('keydown.infieldlabel')};f.init()};$.InFieldLabels.defaultOptions={fadeOpacity:0.5,fadeDuration:300};$.fn.inFieldLabels=function(c){return this.each(function(){var a=$(this).attr('for');if(!a)return;var b=$("input#"+a+"[type='text'],"+"input#"+a+"[type='password'],"+"textarea#"+a);if(b.length==0)return;(new $.InFieldLabels(this,b[0],c))})}})(jQuery);

$(document).ready(function(){
$("#login2 label").inFieldLabels();
//onclick show hide
//$('#custommenu .yui3-menu-content li').first().addClass('firstmenu');


//if( $("#login23 #login_username2").val().length != 0 ) {
//if (!$(').val())
//	$("#login2 label").addClass('removeme').remove();
//}

if (navigator.userAgent.toLowerCase().indexOf("chrome") >= 0) {
   // $('input[name="password"]').attr('autocomplete', 'off');
}
 
$("#plustext").click(function() {
resizeText(1);
});
$("#minustext").click(function() {
resizeText(-1);
});

 $('#color1').click(function(){
        $('#region-main .region-content').css('backgroundColor', '#ccc');
        //$(this).css('color', 'blue');
    });
    
$('#color2').click(function(){
        $('#region-main .region-content').css('backgroundColor', '#FFCCFF');
        //$(this).css('color', 'blue');
});

$('#color3').click(function(){
        $('#region-main .region-content').css('backgroundColor', '#ccffff');
        //$(this).css('color', 'blue');
});

$('#color4').click(function(){
        $('#region-main .region-content').css('backgroundColor', '#FFFFCC');
        //$(this).css('color', 'blue');
});

$('#color5').click(function(){
        $('#region-main .region-content').css('backgroundColor', '#fff');
        //$(this).css('color', 'blue');
});

          
});




$("a.einreichung_klein").hover(function(e){
        this.t = this.title;
        this.title = "";   
        var c = (this.t != "") ? "<br/>" + this.t : "";
        $("body").append("<p id='vorschau'><img src='"+ this.href +"' />"+ c +"</p>");                                 
        $("#vorschau")
            .fadeIn("fast");                       
    },
    function(){
        this.title = this.t;   
        $("#vorschau").remove();
    });   
    $("a.einreichung_klein").mousemove(function(e){
        $("#vorschau")
            .css("top",(e.pageY ) + "px")
            .css("left",(e.pageX ) + "px");
    });
