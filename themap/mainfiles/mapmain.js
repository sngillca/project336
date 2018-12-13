
function search(){
    
    //SEARCH FOR WITCHES/WIZARDS WITH FILTERS

    var nameIn = document.getElementById("lastName").value;
    var lastName = ""+nameIn;
    lastName = lastName.toLowerCase();
    
    
    var nameIn2 = document.getElementById("name").value;
    var firstName = ""+nameIn2;
    firstName = firstName.toLowerCase();
    
    var patIn = document.getElementById("patronus").value;
    var patronus = ""+patIn;
    patronus = patronus.toLowerCase();


    var houseIn = document.getElementById("house").value;
    var house;
    if(house == "0"){
        house = "none";
    } else if(houseIn == "1" ) {
        house = "Gryffindor";
    } else if(houseIn == "2"){
        house = "Hufflepuff";
    } else if (houseIn == "3") {
        house = "Ravenclaw";
    } else if (houseIn == "4"){
        house = "Slytherin";
        
    } //end house



//AJAX CALL
    var xhr = new XMLHttpRequest();
    
    
    //3rd party API: http://hp-api.herokuapp.com/api/characters
    
    xhr.open('GET', "https://hp-api.herokuapp.com/api/characters", true);
    xhr.send();
    var html = "";
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200){
            //alert("complete");
            var data = JSON.parse(this.responseText);
            console.log(data);
            var count = 0;
            
            for(var a = 0; a < data.length; a++){
                var namedb = (data[a].name);
                var str = ""+namedb;
                str = str.split(" ");
                var firstNamedb = str[0];
                var lastNamedb = str[1];
                firstNamedb = firstNamedb.toLowerCase();
                lastNamedb = lastNamedb.toLowerCase();
                var housedb = data[a].house;
               
               
               
                if(lastName == lastNamedb || firstName == firstNamedb){
                    count += 1;
                   
                    html+="<br>";
                    
                    if(data[a].gender == "male"){
                        html += "<br><h2><em><kbd>Wizard: <mark>"+data[a].name+"</mark> Patronus:<strong> "+data[a].patronus.toUpperCase()+"</strong> House: <strong>"+data[a].house+"</strong></kbd></em></h2>";
                        var path = "../img/"+a+".jpg";
                        html += "<br><img src='"+path+"'  height='300' width='300'></img>";
                    }
                    if(data[a].gender == "female"){
                        
                        html += "<br><h2><em><kbd>Witch: <mark>"+data[a].name+"</mark> Patronus:<strong> "+data[a].patronus.toUpperCase()+"</strong> House: <strong>"+data[a].house+"</strong></kbd></em></h2>";
                        var path = "../img/"+a+".jpg";
                        html += "<br><img src='"+path+"'  height='300' width='300'></img>";
                     }//end gender
                 } //end names
                 
                 
                 if (data[a].house == house ) {
                    
                        count+=1;
                         if(data[a].gender == "male"){
                             
                             
                        html += "<br><h2><em><kbd>Wizard: "+data[a].name+" Patronus:<strong> "+data[a].patronus.toUpperCase()+"</strong> House: <strong><mark>"+data[a].house+"</mark></strong></kbd></em></h2>";
                        var path = "../img/"+a+".jpg";
                        html += "<br><img src='"+path+"'  height='300' width='300'></img>";
                    }
                    if(data[a].gender == "female"){
                        
                        html += "<h2><em><kbd>Witch:"+data[a].name+" Patronus:<strong> "+data[a].patronus.toUpperCase()+"</strong> House: <strong><mark>"+data[a].house+"</mark></strong></kbd></em></h2>";
                        var path = "../img/"+a+".jpg";
                        html += "<br><img src='"+path+"'  height='300' width='300'></img>";
                     }//end gender
                    } //end house
                    
                    
                    
                    if (data[a].patronus.toLowerCase() == patronus && patronus != "") {
                       
                        count+=1;
                         if(data[a].gender == "male"){
                        html += "<br><h2><em><kbd>Wizard: "+data[a].name+" Patronus:<strong><mark> "+data[a].patronus.toUpperCase()+"</mark></strong> House: <strong>"+data[a].house+"</strong></kbd></em></h2>";
                        var path = "../img/"+a+".jpg";
                        html += "<br><img src='"+path+"'  height='300' width='300'></img>";
                    }
                    if(data[a].gender == "female"){
                        
                        html += "<br><h2><em><kbd>Witch:"+data[a].name+" Patronus:<strong><mark> "+data[a].patronus.toUpperCase()+"</mark></strong> House: <strong>"+data[a].house+"</strong></kbd></em></h2>";
                        var path = "../img/"+a+".jpg";
                        html += "<br><img src='"+path+"'  height='300' width='300'></img>";
                     }//end gender
                    } //end patrnous
                
                
               if(a == data.length-1 && count == 0){
                    
                        html += "<br><h2><em><kbd>No Witch(es) or Wizard(s) found.</kbd></em></h2>";
                     }//end not found
               
            }//for
            document.getElementById("myDIV").innerHTML = html;
        }//if 
       
        
    };//function ajax

}//search()


