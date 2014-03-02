
        <?php        
        
        function webpart($a) {
            include($a);
        }
        
        $b = 'middle01.html'; //1 sekcja
        include('header01.html'); 
        include('topbar01.html');
        include($b); //1 sekcja
        include($b);
        webpart('kontent01.html');
        include('footer.html');
        ?>

