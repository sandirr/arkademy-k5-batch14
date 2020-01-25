        function kunci(){
            let prod = document.querySelector('#prod')
            let container = document.getElementById('container')
                              
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    container.innerHTML = xhr.responseText;
                }
            }
            xhr.open('GET', 'DataSearch.php?keyword=' + prod.value, true);
            xhr.send();
        }

        function kunci2(){
            let prod = document.querySelector('#prod2')
            let container2 = document.getElementById('container2')
                              
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    container2.innerHTML = xhr.responseText;
                }
            }
            xhr.open('GET', 'DataSearch.php?keyword=' + prod.value, true);
            xhr.send();
        }