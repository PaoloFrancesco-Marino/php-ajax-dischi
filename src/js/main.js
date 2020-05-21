import $ from 'jquery';

$(document).ready(function () {
    
    //refs 
    var container = $('.album_content'); // album content
    var inputSearch = $('.navbar .dx input'); //input search
    var btnClick = $('.navbar .dx button'); //btn click


    var source = $('#album-template').html(); //refs template 
    var template = Handlebars.compile(source); 

    // event js

    /***********
     * Event JS
     ***********/

    // search with api
    inputSearch.keyup(function() {
        // reset
        container.html('');
        var search = inputSearch.val().toLowerCase().trim();

        $.ajax({
            url: 'http://localhost/E-Boolean-PHP/php-ajax-dischi/partials/db_script.php',
            method: 'GET',
            success: function(res) {
                
                for (var i = 0; i < res.length; i++) {

                    var album = res[i];
    
                    var context = {
                        poster: album.poster,
                        title: album.title,
                        author: album.author,
                        year: album.year
                    }

                    if (album.author.toLowerCase().includes(search)) {
                        // template
                        var html = template(context);
                        // print htmli
                        container.append(html);
                    }
                }  
            },
            error: function() {
                console.log('Errore');
                
            }
        })
    })


    // chiamata ajax per popolare html
    $.ajax({
        url: 'http://localhost/E-Boolean-PHP/php-ajax-dischi/partials/db_script.php',
        method: 'GET',
        success: function(res) {
            
            for (var i = 0; i < res.length; i++) {

                var album = res[i];

                var context = {
                    poster: album.poster,
                    title: album.title,
                    author: album.author,
                    year: album.year
                }

                // template
                var html = template(context);
                // print html
                container.append(html);
            }   

        },
        error: function() {
            console.log('Errore');
            
        }
    })
    
}); // <-- end Doc Ready