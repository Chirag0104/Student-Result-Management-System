<div id="sidenav">
        <div id="element">
                <ul>
                    <li id="li-1">Menu</li><br>
                    <a href="homepage.php?id=<?php echo $data['S_No'];?>"><li id="li-2">Your Profile</li></a><br>
                    <a href="result.php?id=<?php echo $data['S_No']; ?>"><li id="li-3">Your Result</li></a><br>
                </ul>
                  
                    <div id="li-4" class="dropup">
                        <i class="fa fa-fw fa-user"></i>  
                        <?php echo $data['Name']; ?>

                        <div class="dropup-info">
                    
                            <a class="dropup-content" href="#">Privacy & policy</a><br>
                            <a class="dropup-content" href="#">Help</a><br>
                            <a class="dropup-content" href="#">Settings</a><br>
                            <a class="dropup-content" href="homepage.php?id=<?php echo $data['S_No'];?>">Profile</a><br>
                            <a class="dropup-content" href="../index.php">Logout</a>
                        </div>
                    </div>
                </ul>
            
        </div>
</div>