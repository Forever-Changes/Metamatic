 <!-- <?php include 'assets/inc/modals/djsets/soulwaxessentialmix.php'; ?> -->

<html>

    <?php include 'assets/inc/header.php'; ?>

    <script type="text/JavaScript">"
    document.getElementById('button').addEventListener('click', function() {
        document.querySelector('.bgmodal').style.display = 'flex';
    });

    </script>

    <body>

        <div class="bgmodal">
            
            <div class="modalcontent">

                <div class="close">X</div>
                <div class="modalheader">Soulwax/2 Many DJs - Essential Mix BBC Radio 1 (2005)</div>
                <img class="djimgmodal" src="assets/img/djsetimg/soulwax.jpg">
                <audio controls class="audioplayer">
                <source src="assets/audio/djsets/Radio Soulwax.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
                </audio>

                
                


            </div>
        </div>

        <div id="wrap">

            <div id="header"></div>
                
                <?php include 'assets/inc/leftsidewrapcontent.php'; ?>




                <div id="rightsidewrap">
                    <div class="title">DJ Sets</title></div>
                    
                    <p>Click the title for a listen</p>

                    <table>
                    <tr>
                        
                        <th>Title</th>
                        <th></th>
                        <th>Artist</th>
                        <th></th>
                        <th>Date</th>
                        <th></th>
                        
                        
                    </tr>
                        <tr>
                            
                            <td><a id="button" href="djsets soulwaxessentialmix.php">Radio Soulwax: Essential Mix</a></td>
                            <td class="colon">|</td>
                            <td>Soulwax/2 Many DJs</td>
                            <td class="colon">|</td>
                            <td>2005</td>
                            
                        </tr>

                    </table>



                    
                    <div class="line"></div>
                    <?php include 'assets/inc/footer.php'; ?>
                </div>
            </div>   
            
        </div>

    </body>

    

</html>
