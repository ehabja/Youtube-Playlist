window.onload = getTable();

function getTable() {
    // XMLHttpRequest can make AJAX calls:
    var ajax = new XMLHttpRequest();
    
    // Configure: 
    // First parameter = The Method.
    // Second parameter = The Address.
    // Third parameter = true = async, false = sync

    ajax.open("GET", "API.php?command=getVideos", true);

    // Set a function which will be called in the AJAX process (several times):
    ajax.onreadystatechange = function() {
        
        // If we've got a response back from the server: 
        if(ajax.readyState === 4) {
            
            // If all is ok: 
            if(ajax.status >= 200 && ajax.status <= 299) {
                
                // Show the data:
                var videos = JSON.parse(ajax.responseText);
                document.getElementById("videosTable").innerHTML ="";
                for(var i = 0; i < videos.length; i++) {
                    
                    var tr = `<tr><td>${videos[i].title}</td>
                                <td>${videos[i].category}</td>
                                <td>${videos[i].description}</td>
                                <td>
                                    <form method="post" action="play.php">
                                        <input type="hidden" name="link" value="${videos[i].link}">
                                        <button type="submit" class="label label-success">Play</button>
                                    </form>
                                </td>
                                <td>
                                    <form method="post" action="edit.php">
                                        <input type="hidden" name="videoID" value="${videos[i].videoID}">
                                        <input type="hidden" name="title" value="${videos[i].title}">
                                        <input type="hidden" name="category" value="${videos[i].category}">
                                        <input type="hidden" name="description" value="${videos[i].description}">
                                        <input type="hidden" name="link" value="${videos[i].link}">
                                        <button type="submit" class="label label-success">Edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form method="post" action="API.php">
                                        <input type="hidden" name="videoID" value="${videos[i].videoID}">
                                        <button value="remove" class="label label-success" name="command">Remove</button>
                                    </form>
                                </td></tr>`;
                    document.getElementById("videosTable").innerHTML += tr;
                }   

            }
            else { // There was some error:
                
                alert("Error Status: " + ajax.status + ", Error Message: " + ajax.statusText);
            }
        }
    }
    
    // Make the ajax call: 
    ajax.send();
    
}

function getSearchedVideos() {
    //alert("ehab")
    
    // XMLHttpRequest can make AJAX calls:
    var ajax = new XMLHttpRequest();
    
    // Configure: 
    // First parameter = The Method.
    // Second parameter = The Address.
    // Third parameter = true = async, false = sync
    var searchedText = document.getElementsByName("searchedText")[0].value;
    ajax.open("GET", "API.php?command=getSearchedTable&searchedText=" + searchedText, true);

    // Set a function which will be called in the AJAX process (several times):
    ajax.onreadystatechange = function() {
        
        // If we've got a response back from the server: 
        if(ajax.readyState === 4) {
            
            // If all is ok: 
            if(ajax.status >= 200 && ajax.status <= 299) {
                
                // Show the data:
                if(ajax.responseText !== "null" || ajax.responseText !== null){
                    var videos = JSON.parse(ajax.responseText);
                    document.getElementById("videosTable").innerHTML ="";
                for(var i = 0; i < videos.length; i++) {
                    
                    var tr = `<tr><td>${videos[i].title}</td>
                                <td>${videos[i].category}</td>
                                <td>${videos[i].description}</td>
                                <td>
                                    <form method="post" action="play.php">
                                        <input type="hidden" name="link" value="${videos[i].link}">
                                        <button type="submit" class="label label-success">Play</button>
                                    </form>
                                </td>
                                <td>
                                    <form method="post" action="edit.php">
                                        <input type="hidden" name="videoID" value="${videos[i].videoID}">
                                        <input type="hidden" name="title" value="${videos[i].title}">
                                        <input type="hidden" name="category" value="${videos[i].category}">
                                        <input type="hidden" name="description" value="${videos[i].description}">
                                        <input type="hidden" name="link" value="${videos[i].link}">
                                        <button type="submit" class="label label-success">Edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form method="post" action="API.php">
                                        <input type="hidden" name="videoID" value="${videos[i].videoID}">
                                        <button value="remove" class="label label-success" name="command">Remove</button>
                                    </form>
                                </td></tr>`;
                        document.getElementById("videosTable").innerHTML += tr;
                    }
                }
                else{
                    getTable();
                }
                
                
            }
            else { // There was some error:
                
                alert("Error Status: " + ajax.status + ", Error Message: " + ajax.statusText);
            }
        }
    }
    
    // Make the ajax call: 
    ajax.send();
    
}








