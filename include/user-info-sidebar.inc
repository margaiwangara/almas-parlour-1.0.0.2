<div class="list-group">
    <a href="/../almas-parlour/view/user-info.php" class="list-group-item">Favourites <span class="badge"><?php if(isset($_SESSION['FAVOURITES']))echo $_SESSION['FAVOURITES'];else echo "0";?></span></a>
    <a href="#" class="list-group-item">Coupons <span class="badge">0</span></a>
    <a href="#" class="list-group-item">Purchased <span class="badge">0</span></a>
    <a href="#" class="list-group-item">Cancelled Transactions <span class="badge">0</span></a>
    <a href="#" class="list-group-item">Comments <span class="badge">0</span></a>
    <a href="/../almas-parlour/view/user-info-view.php" class="list-group-item">Account Details</a>
    <a href="/../almas-parlour/view/password-change.php" class="list-group-item">Password Change</a>
    <a href="/../almas-parlour/view/delete-account.php" class="list-group-item">Delete Account</a>
</div>