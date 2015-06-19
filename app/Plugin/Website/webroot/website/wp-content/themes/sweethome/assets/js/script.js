(function($){
    
    $(function() {
        jQuery('.slide-box p').each(function(i, e){
        var TextValue = jQuery(e).text();
        var TextLimiter = 260; 
        var diminuido='';
        if(TextValue.length > TextLimiter){
            
            diminuido = TextValue.substr(0,TextLimiter); 
            
          jQuery(e).text(diminuido+'...');
        }
        })
    });
    
})(jQuery);