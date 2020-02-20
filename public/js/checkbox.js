    function showContent() {
        element = document.getElementById("content");
        // check = document.getElementById("check");
        var checkRadio = document.querySelector( 
            'input[id="check"]:checked'); 
        var uncheckRadio = document.querySelector( 
                'input[id="uncheck"]:checked'); 
                
            
        if (checkRadio != null) {
            element.style.display='block';
            console.log("hola");
            
        }
        else if (uncheckRadio != null) {
            element.style.display='none';
        }
        else {
            element.style.display='none';
        }
    }
    function showContent2() {
        element2 = document.getElementById("content2");
        // check = document.getElementById("check");
        var checkRadio2 = document.querySelector( 
            'input[id="check2"]:checked'); 
        var uncheckRadio2 = document.querySelector( 
                'input[id="uncheck2"]:checked'); 
                console.log("hola");
            
        if (checkRadio2 != null) {
            element2.style.display='block';
            console.log("hola");
            
        }
        else if (uncheckRadio2 != null) {
            element2.style.display='none';
        }
        else {
            element2.style.display='none';
        }
    }