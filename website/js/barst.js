/*$(document).ready(function(){
    
        var by = 100;
        var bx = 30;
        var maxy = 100;
        var crack = [];
        var click = 0;
    
    $("#barst").on("click", function(){
        $(this).css("background-color","black");
                   
        
       // for(var i = 0; i < (maxy/100); i++){
            click++; 
            if(click == 1 && maxy == 100){
                
            crack.push('points=22,0');
            crack.push('0,'+ maxy); //tip
            crack.push('30,0');
                console.log(crack);
            $(this).html("<svg height='"+ maxy +"' width='"+ bx +"'><polygon "+ crack +" style='fill:white;'/></svg>");
                maxy = 200;
            } else if (click == 2 && maxy == 200){
                crack[1] = '0,100';
                crack[2] = '30,200'; //tip
                crack[3] = '4,100';
                crack[4] = '30,0';
                 console.log(crack);
                $(this).html("<svg height='"+ maxy +"' width='"+ bx +"'><polygon "+ crack +" style='fill:white;'/></svg>"); 
            }
                
        //};
                   
        
    });
      
    
});*/