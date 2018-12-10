
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
    
    xhr.open('GET', "http://hp-api.herokuapp.com/api/characters", true);
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
                        html += "<br><h2><em><td><kbd>Wizard: <mark>"+data[a].name+"</mark> Patronus:<strong> "+data[a].patronus.toUpperCase()+"</strong> House: <strong>"+data[a].house+"</strong></kbd></em></h2></td>";
                        var path = "../img/"+a+".jpg";
                        html += "<br><img src='"+path+"'  height='300' width='300'></img>";
                    }
                    if(data[a].gender == "female"){
                        
                        html += "<br><h2><em><td><kbd>Witch: <mark>"+data[a].name+"</mark> Patronus:<strong> "+data[a].patronus.toUpperCase()+"</strong> House: <strong>"+data[a].house+"</strong></kbd></em></h2></td>";
                        var path = "../img/"+a+".jpg";
                        html += "<br><img src='"+path+"'  height='300' width='300'></img>";
                     }//end gender
                 } //end names
                 
                 
                 if (data[a].house == house ) {
                    
                        count+=1;
                         if(data[a].gender == "male"){
                        html += "<br><h2><em><td><kbd>Wizard: "+data[a].name+" Patronus:<strong> "+data[a].patronus.toUpperCase()+"</strong> House: <strong><mark>"+data[a].house+"</mark></strong></kbd></em></h2></td>";
                        var path = "../img/"+a+".jpg";
                        html += "<br><img src='"+path+"'  height='300' width='300'></img>";
                    }
                    if(data[a].gender == "female"){
                        
                        html += "<br><h2><em><td><kbd>Witch:"+data[a].name+" Patronus:<strong> "+data[a].patronus.toUpperCase()+"</strong> House: <strong><mark>"+data[a].house+"</mark></strong></kbd></em></h2></td>";
                        var path = "../img/"+a+".jpg";
                        html += "<br><img src='"+path+"'  height='300' width='300'></img>";
                     }//end gender
                    } //end house
                    
                    
                    
                    if (data[a].patronus.toLowerCase() == patronus && patronus != "") {
                       
                        count+=1;
                         if(data[a].gender == "male"){
                        html += "<br><h2><em><td><kbd>Wizard: "+data[a].name+" Patronus:<strong><mark> "+data[a].patronus.toUpperCase()+"</mark></strong> House: <strong>"+data[a].house+"</strong></kbd></em></h2></td>";
                        var path = "../img/"+a+".jpg";
                        html += "<br><img src='"+path+"'  height='300' width='300'></img>";
                    }
                    if(data[a].gender == "female"){
                        
                        html += "<br><h2><em><td><kbd>Witch:"+data[a].name+" Patronus:<strong><mark> "+data[a].patronus.toUpperCase()+"</mark></strong> House: <strong>"+data[a].house+"</strong></kbd></em></h2></td>";
                        var path = "../img/"+a+".jpg";
                        html += "<br><img src='"+path+"'  height='300' width='300'></img>";
                     }//end gender
                    } //end patrnous
                
                
               if(a == data.length-1 && count == 0){
                    
                        html += "<br><h2><em><td><kbd>No Witch(es) or Wizard(s) found.</kbd></em></h2></td>";
                     }//end not found
               
            }//for
            document.getElementById("myDIV").innerHTML = html;
        }//if 
        else {
            console.log("error");
        }
        
    };//function ajax

}//search()

function login() {
    
    var userIn = document.getElementById("user").value;
    var user = ""+userIn;
    var passIn = document.getElementById("pass").value;
    var pass = ""+passIn;
    //console.log(user);
    //console.log(pass);
    
    
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "users.php";
    var async = true;
    
    ajax.open(method, url, async);
    ajax.send();
    
    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200){
            var data = JSON.parse(this.responseText);
            console.log(data);
            var html = "";
            var count = 0;
            for(var i = 0; i < data.length; i++){
                if(user == data[i].username && pass == data[i].password){
                   // console.log("USER FOUND!!!");
                    //window.location.href="./hidden.php";  
                     window.open('./hidden.php', '_blank'); 
                    count =1;
                 
                    
                } 
                if(count == 0 && i == data.length-1){
                    alert("Please check login credentials.");
                }
            }
        }//if
        
    };//ajax
    
    
    
}//function login()

