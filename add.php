<?php include './header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="./savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Degree</label>
            <select name="class">
                <?php
                include ('./config.php');
                
                $sql = "SELECT * FROM studentclass";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
                
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                <option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?></option>
                
                <?php } ?>
                <option value="" selected disabled>Select Degree</option>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Add"  />
    </form>
</div>
</div>
</body>
</html>
