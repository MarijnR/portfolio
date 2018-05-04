 
function getLocation(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showWeather);
        } else {
            console.log("FOUT! Geolocation");
        }
    }


   function showWeather(position) {
       

        //kijken of er iets is opgeslagen omdat het op de server zou kunnen staan en het is sneller
        if(localStorage.getItem('weer') !== null) {
              var weer = JSON.parse(localStorage.getItem("forecastData"));
              console.log("from cache");
        } else {
              getLocation();
              console.log("from API");

              };
       
       var url = "https://api.forecast.io/forecast/df5757cd9e81dbb6860a76d461c0a185/"+position.coords.latitude+","+position.coords.longitude;
        $.ajax( {
          type: 'GET',
          dataType: 'jsonp',
          url: url,
          success: function ( resp ) {
                var today = new Date();
                var weekday = new Array(10);
                weekday[0] = "Sun";
                weekday[1] = "Mon";
                weekday[2] = "Tue";
                weekday[3] = "Wed";
                weekday[4] = "Thu";
                weekday[5] = "Fri";
                weekday[6] = "Sat";
                weekday[7] = "Sun";
                weekday[8] = "Mon";
                weekday[9] = "Tue";

                var monthn = new Array(12);
                monthn[0] = "Jan.";
                monthn[1] = "Feb.";
                monthn[2] = "Mar.";
                monthn[3] = "Apr.";
                monthn[4] = "May.";
                monthn[5] = "Jun.";
                monthn[6] = "Jul.";
                monthn[7] = "Aug.";
                monthn[8] = "Sep.";
                monthn[9] = "Okt.";
                monthn[10] = "Nov";
                monthn[11] = "Dec.";

                var day2 = weekday[today.getDay()+1];
                var day3 = weekday[today.getDay()+2];
                var day4 = weekday[today.getDay()+3];

                var month = today.getMonth();

                var hour = today.getHours();
                var min = today.getMinutes();
                var time = hour + ":" +min;

                var dd = today.getDate();
                var mm = today.getMonth()+1; //Januari is 0 dus plus 1
                var datef = dd+" "+monthn[month]+" "+ time + "u";

              console.log(resp);
              $("#container p").html(datef);
              var temperatuur = Math.round((resp.currently.temperature-32)/1.8)+"&deg;";
              $("#vandaag_temp").html(""+temperatuur);
              $("#vandaag_img").attr('src', "http://ruttenmarijn.be/weerapp/images/"+resp.daily.data[0].icon+".png");
              temperatuur = Math.round((resp.daily.data[1].temperatureMax-32)/1.8)+"&deg;";

              $("h2").html(day2);
              $("#dag2_temp").html(""+temperatuur);
              $("#dag2_img").attr('src', "http://ruttenmarijn.be/weerapp/images/"+resp.daily.data[1].icon+".png");
              temperatuur = Math.round((resp.daily.data[2].temperatureMax-32)/1.8)+"&deg;";

              $("h3").html(day3);
              $("#dag3_temp").html(""+temperatuur);
              $("#dag3_img").attr('src', "http://ruttenmarijn.be/weerapp/images/"+resp.daily.data[2].icon+".png");
              temperatuur = Math.round((resp.daily.data[3].temperatureMax-32)/1.8)+"&deg;";

              $("h4").html(day4);
              $("#dag4_temp").html(""+temperatuur);
              $("#dag4_img").attr('src', "http://ruttenmarijn.be/weerapp/images/"+resp.daily.data[3].icon+".png");

              var weerSet = resp;
                localStorage.setItem('weer',JSON.stringify(weerSet));


          },
         error: function() {

          }
        });
    }